@extends('layouts.storage')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Create new file</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <form action="{{ route('file.store') }}" method="POST">

                @csrf

                @input(['label' => 'Title', 'name' => 'file_name'])

                @textarea(['label' => 'Size', 'name' => 'file_size'])

                @include('components.form.submit')

                </form>

            </div>
        </div>
    </div>

@endsection