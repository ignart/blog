@extends('layouts.app')

@section('title','Create new')

@section('content')

    <div class="container mt-5">

        <div class="row mb-4">
            <div class="col">

                <h1>Create new blog</h1>

            </div>
        </div>

        <div class="row">
            <div class="col">

                <form action="{{ route('posts.store') }}" method="POST">

                    @csrf

                    @input(['label' => 'Title', 'name' => 'name'])

                    @textarea(['label' => 'Content', 'name' => 'content'])

                    @include('components.form.submit')

                </form>

            </div>
        </div>


    </div>

@endsection