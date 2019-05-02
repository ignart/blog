<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <div id="app">
        <div class="content">

            @include('partials.nav')

            @if (session('message'))

            <div class="container">

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

            </div>

            @endif

            @if ($errors->any())
                <div class="container">
                    <div class="row">
                        <div class="col mb-3">
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
                </div>
            @endif

            @yield('content')

            @include('partials.footer')

        </div>
    </div>
</body>
</html>
