<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <title>Koochshop</title>
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
    <meta property="og:url" content="{{ request()->url() }}"/>
    @yield('og')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
</head>
<body>
    @include('layouts.front.navbar')

    @yield('content')

    @include('layouts.front.footer')

    <script src="{{ asset('js/front.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    @yield('js')
</body>
</html>