<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <body>
        <div class="container text-center mt-5">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <h1 class="text-muted">Coming soon</h1>

            <a href="/">Go back</a>


        </div>
    </body>
</html>
