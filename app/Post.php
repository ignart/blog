<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
//    Laravelis pagauna pats table name jeigu sutampa ir padaro daugiskaitą, jeigu ne galima nurodyti kaip pvz žemiau
//    protected $table = 'posts';

    use SoftDeletes;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeOneDayOld($query)
    {
        return $query->where('created_at', '>', Carbon::now()->subDay());
    }

    public function scopeCreatedLaterThan($query, $dateTime)
    {
        return $query->where('created_at', '>', $dateTime);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
