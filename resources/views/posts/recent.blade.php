@extends('layouts.app_old')

@section('title')

    Recent posts

@endsection

@section('content')

    <div class="container mt-5">

        <div class="row">

            <div class="col d-flex justify-content-between align-items-center mb-4">
                <h1>Recent posts</h1>
            </div>

        </div>

        <div class="row">

            @each('posts.card', $posts, 'post', 'posts.no-records')

        </div>


    </div>

@endsection