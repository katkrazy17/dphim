<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css') }}">
    @yield('css')
</head>

<body>
    <div id="app" class="d-flex">
        @yield('content')
    </div>
    <script src="{{ asset('vendor/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    @yield('javascript')
</body>

</html>