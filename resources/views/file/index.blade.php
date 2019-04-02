@extends('layouts.storage')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-between align-items-center mb-4">

                <h1 class="mb-0">Files</h1>

            </div>

        </div>

        <div class="row">

            @each('file.card', $files, 'file', 'file.no-records')

        </div>

    </div>

@endsection