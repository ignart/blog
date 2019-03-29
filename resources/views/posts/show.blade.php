@extends('layouts.app')

@section('title',' Blog post title')

@section('content')

    <div class="container mt-5">

        @include('posts.card', ['posts' => $post])

    </div>

@endsection