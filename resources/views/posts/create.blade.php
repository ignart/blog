@extends('layouts.app_old')

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


                    <select name="categories">
                        <option>Pasirinkti kategorija</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @include('posts.form')



                    @include('components.form.submit')

                </form>

            </div>
        </div>


    </div>

@endsection