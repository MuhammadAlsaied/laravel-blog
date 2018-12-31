<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    </head>
    <body>
        @include('shared.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
