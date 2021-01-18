<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tweety</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
                    <div class="flex h-screen">
                        <div class="m-auto text-center ">
                          <h3 class="text-4xl">Tweety</h3>
                          @auth
                          <a href="{{url('/home')}}">Home</a>
                          @else
                          <a href="{{ route('login') }}">Login</a>
                          <a href="{{ route('register')}}">Register</a>
                          @endauth
                        </div>
                    </div>
    </body>
</html>
