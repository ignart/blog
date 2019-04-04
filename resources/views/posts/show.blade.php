@extends('layouts.app')

@section('title',' Blog post title')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="{{ route('posts.edit', ['id' => $post->id ]) }}" class="btn btn-secondary">Edit</a>
            </div>
        @include('posts.card', ['posts' => $post])
        </div>
    </div>

@endsection