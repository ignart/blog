@extends('layouts.app')

@section('title')

    Blog posts

@endsection

@section('content')

    <div class="container mt-5">

        <div class="row">

        <div class="col mb-4">
            <h1>Blog posts</h1>
        </div>

        </div>

        <div class="row">

            @forelse($posts as $post)

            <div class="col-lg-3 mb-4">

                <div class="card {{ $loop->first ? 'bg-primary' : '' }}">

                    <div class="card-header d-flex flex-column">

                        <h5>{{ $post['title'] }}</h5>
                        <small class="text-muted"> {{ $post['time'] }} </small>

                    </div>

                    <div class="card-body">

                        {{ $post['content'] }}

                    </div>

                </div>

            </div>

            @empty

                No blog posts

            @endforelse

        </div>

        <div class="row">

            <div class="col">

                Posts: {{ count($posts) }}

            </div>

        </div>

    </div>

@endsection