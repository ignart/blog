@extends('layouts.app_old')

@section('title',' Blog post title')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-3">
                @auth
                    {{--@can('update', $post)--}}
                <a href="{{ route('posts.edit', ['id' => $post->id ]) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('posts.duplicate') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <button type="submit" class="btn btn-success">Klonuoti</button>
                </form>
                        {{--@endcan--}}
                @endauth
            </div>
        @include('posts.card', ['posts' => $post])
        </div>

        @include('posts.comments.index', ['comments' => $post->comments])

    </div>

@endsection