@extends('layouts.app_old')

@section('title',' Blog post title')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-3">
                <a href="{{ route('posts.edit', ['id' => $post->id ]) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('posts.duplicate') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <button type="submit" class="btn btn-success">Klonuoti</button>
                </form>
            </div>
        @include('posts.card', ['posts' => $post])
        </div>

        <div class="row">

            <div class="col-12 mt-5">

                <div class="border-top mb-4"></div>

                <h2 class="mb-4">Comments</h2>

                @forelse ($post->comments()->get() as $comment )

                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">
                            <h5>{{ $comment->author }}</h5>
                            <span class="text-muted">{{ $comment->email }}</span>
                        </div>
                        <div class="card-body">
                            <p class="mb-0">{{ $comment->content }}</p>
                        </div>
                    </div>

                @empty

                    No commnets

                @endforelse

            </div>

        </div>

    </div>

@endsection