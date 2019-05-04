<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('vendor/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/bootadmin.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
</head>
<body class="bg-light">
    <div id="app" class="d-flex">
        @include('admin.headers.navigation')
        <div class="content">
            <nav class="navbar navbar-expand navbar-dark bg-white fixed-top navbar-pl">
                <a class="sidebar-toggle mr-3 text-dark" href="#"><i class="fa fa-bars"></i></a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 5</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Doe</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="{{ route('admin.logout') }}" class="dropdown-item">Đăng xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="p-5">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/js/app.js') }}"></script>
    <script src="{{ asset('vendor/js/ajax.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/ckfinder/ckfinder.js') }}"></script>
    @yield('javascript')
</body>
</html>