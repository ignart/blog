@extends('layouts.storage')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Create new file</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="row my-3">
                <div class="col">
                    @component('components.alert', ['type' => 'alert-danger'])
                        @slot('title')
                            Erroras
                        @endslot

                        {{--<ul>--}}
                        {{--@foreach($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}

                        Oj kaip errorina

                    @endcomponent
                </div>
            </div>
        @endif
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