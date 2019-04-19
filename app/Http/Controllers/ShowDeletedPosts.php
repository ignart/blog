<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowDeletedPosts extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
//        $posts = \App\Post::withTrashed()->paginate(16);

        $posts = \App\Post::withCount('comments')->onlyTrashed()->paginate(16);

        return view('posts.index', compact('posts'));
    }
}
