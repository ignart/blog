@extends('layouts.app')

@section('title')

    Blog posts

@endsection

@section('content')

    <div class="container mt-5">

        <div class="row">

        <div class="col d-flex justify-content-between align-items-center mb-4">
            <h1>Blog posts</h1>
            <span><strong>Number of files:</strong> <span class="text-muted">{{ $posts->count() }}</span></span>
        </div>

        </div>

        <div class="row">

           @each('posts.card', $posts, 'post', 'posts.no-records')

        </div>

    </div>

@endsection