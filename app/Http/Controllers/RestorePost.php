<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestorePost extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        // gauti source resource id
        $id = $request->input('id');

        \App\Post::withTrashed()->findOrFail($id)->restore();

        $message = 'Įrašas sėkmingai atstatytas!';

        return redirect()->route('posts.show', $id)->with('message', $message);

    }
}
