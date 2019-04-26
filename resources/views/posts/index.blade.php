@extends('layouts.app_old')

@section('title')

    Blog posts

@endsection

@section('content')

    <div class="container mt-5">

        <div class="row">

        <div class="col d-flex justify-content-between align-items-center mb-4">
            <h1>Blog posts {{ $posts->total() }}</h1>
            @auth
            <a class="btn btn-secondary" href="{{ route('posts.create') }}">Add new post</a>
            @endauth
        </div>

        </div>

        <div class="row">

           @each('posts.card', $posts, 'post', 'posts.no-records')

        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>

    </div>

@endsection