@extends('layouts.storage')

@section('content')

    <div class="container">

        <div class="row">

        @forelse($files as $file)

        <div class="{{ $loop->first ? 'col-lg-12' : 'col-lg-3 ' }} mb-4">

            <div class="card {{ $loop->first ? 'bg-secondary' : '' }}">

                <div class="card-header d-flex flex-column">

                    <h5 class="{{ $loop->first ? 'text-white' : '' }}">{{ $file['filename'] }}</h5>
                    <small class="{{ $loop->first ? 'text-white-50' : 'text-muted' }}"> {{ $file['size'] }} </small>

                </div>

                <div class="card-body">

                    <span class="{{ $loop->first ? 'text-white' : '' }}">Created at: <span class="{{ $loop->first ? 'text-white-50' : '' }}">{{ $file['created_at'] }}</span></span>

                </div>

            </div>

        </div>

        @empty

        @endforelse

            <div class="col-12">

                <strong>Numero of files:</strong> <span class="text-muted">{{ count($files) }}</span>

            </div>

        </div>

    </div>

@endsection