@extends('layouts.app_old')

@section('title','Edit blog post')

@section('content')

    <div class="container mt-5">

        <div class="row mb-4">
            <div class="col">
                <span>Post ID: {{ $post->id }}</span>
                <h1>Edit blog post</h1>

            </div>
        </div>

        <div class="row">
            <div class="col">

                <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">

                    @csrf

                    @method('PUT')

                    @include('posts.form')

                    @include('components.form.submit')

                </form>

                @delete(['action' => route('posts.destroy', ['id' => $post->id])])

            </div>
        </div>

    </div>

@endsection