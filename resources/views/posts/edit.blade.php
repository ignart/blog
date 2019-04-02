@extends('layouts.app')

@section('title','Edit blog post')

@section('content')

    <div class="container mt-5">

        <div class="row mb-4">
            <div class="col d-flex justify-content-between">

                <h1>Edit blog post {{ $post->id }}</h1>

                <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>

        <div class="row">
            <div class="col">

                <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">

                    @csrf

                    @method('PUT')

                    @input(['label' => 'Title', 'name' => 'name', 'value' => $post->name])

                    @textarea(['label' => 'Content', 'name' => 'content', 'value' => $post->content])

                    @include('components.form.submit')

                </form>

            </div>
        </div>

    </div>

@endsection