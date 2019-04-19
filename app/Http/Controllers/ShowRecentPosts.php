<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowRecentPosts extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $posts = \App\Post::withCount('comments')
//                            ->oneDayOld()
                            ->CreatedLaterThan(Carbon::now()->subWeek())
                            ->orderBy('created_at', 'DESC')
                            ->take(4)
                            ->get();

        return view('posts.recent', compact('posts'));

    }
}
