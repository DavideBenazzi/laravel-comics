<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- FONTAWESOME --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <title>Laravel-comics</title>
    </head>
    <body>
        {{-- HEADER --}}
        @include('partials.header')
        
        {{-- MAIN --}}
        @yield('content')

        {{-- FOOTER --}}
        @include('partials.footer')
    </body>
</html>