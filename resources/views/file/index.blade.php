@extends('layouts.storage')

@section('content')

    <div class="container">

        <div class="row">

        @forelse($files as $file)

        <div class="col-lg-3 mb-4">

            <div class="card {{ $loop->first ? 'bg-secondary' : '' }}">

                <div class="card-header d-flex flex-column">

                    <h5 class="{{ $loop->first ? 'text-white' : '' }}">{{ $file['filename'] }}</h5>
                    <small class="text-muted {{ $loop->first ? 'text-white-50' : '' }}"> {{ $file['size'] }} </small>

                </div>

                <div class="card-body">

                    <span class="{{ $loop->first ? 'text-white' : '' }}">Created at: <span class="{{ $loop->first ? 'text-white-50' : '' }}">{{ $file['created_at'] }}</span></span>

                </div>

            </div>

        </div>

        @empty

        @endforelse

        </div>

    </div>

@endsection