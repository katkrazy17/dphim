<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/style.css') }}">
    <link href="{{ asset('vendor/css/fontawesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/tree.css') }}">
    @yield('css')
</head>

<body>
    <div id="wrapper">
        @include('admin.includes.slidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('admin.includes.navbartop')
            @yield('page-heading')
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
            <div class="footer">
                @include('admin.includes.footer')
            </div>
        </div>    
    </div>
    <script src="{{ asset('vendor/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('vendor/js/pace.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootadmin.js') }}"></script>
    <script src="{{ asset('vendor/js/inspinia.js') }}"></script>
    @yield('javascript')
</body>

</html>