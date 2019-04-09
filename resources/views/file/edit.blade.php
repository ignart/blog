@extends('layouts.storage')

@section('title','Edit blog post')

@section('content')

    <div class="container mt-5">

        <div class="row mb-4">
            <div class="col">
                {{--<span>Post ID: {{ $file->id }}</span>--}}
                <h1>Edit blog post</h1>

            </div>
        </div>

        <div class="row">
            <div class="col">

                <form action="{{ route('file.update', ['id' => $file->id]) }}" method="POST">

                    @csrf

                    @method('PUT')

                    @input(['label' => 'Title', 'name' => 'file_name', 'value' => $file->file_name])

                    @textarea(['label' => 'Size', 'name' => 'file_size', 'value' => $file->file_size])

                    @include('components.form.submit')

                </form>


            </div>
        </div>

    </div>

@endsection