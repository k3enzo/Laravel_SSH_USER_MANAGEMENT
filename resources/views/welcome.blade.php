<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/fonts/stylesheet.css')}}">
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: Source Sans Pro, sans-serif;
            }
            body{
                display: flex;
                align-content: center;
                align-items: center;
                justify-content: center;
                height: 100vh;
                width: 100%;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-lg btn-info" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-lg  btn-info" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn btn-lg btn-info" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
