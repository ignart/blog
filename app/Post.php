<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    Laravelis pagauna pats table name jeigu sutampa ir padaro daugiskaitą, jeigu ne galima nurodyti kaip pvz žemiau
//    protected $table = 'posts';
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
