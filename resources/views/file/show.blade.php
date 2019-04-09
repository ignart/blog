@extends('layouts.storage')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col">

                <div class="card">

                    <div class="card-header">

                        <div class="row align-items-center">

                            <div class="col">
                                <h1>{{ $file->file_name }}</h1>
                            </div>
                            <div class="col d-flex justify-content-end">
                                @delete(['action' => route('file.destroy', ['id' => $file->id])])
                            </div>

                        </div>

                    </div>

                    <div class="card-body">

                        <span>File size: {{ $file->file_size  }}</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection