@extends('layouts.storage')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-between align-items-center mb-4">

                <h1 class="mb-0">Files {{ count($files) }}</h1>

                <a class="btn btn-secondary" href="{{ route('file.create') }}">Add new file</a>

            </div>

        </div>

        @if (session('message'))

        <div class="row">
            <div class="col mb-3">
                @component('components.alert', ['type' => 'alert-success'])
                    @slot('title')
                        Success
                    @endslot

                    {{ session('message') }}

                @endcomponent
            </div>
        </div>

        @endif

        <div class="row">

            @each('file.card', $files, 'file', 'file.no-records')

        </div>

        <div class="row my-4">

            <div class="col d-flex justify-content-center">

            {{ $files->links() }}

            </div>

        </div>

    </div>

@endsection