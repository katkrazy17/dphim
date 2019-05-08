<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/fr-home-page.css') }}">
	@yield('css')
</head>
<body>
		<div class="">
			@include('frontends.blockeds.navbar')
		</div>
		<div class="">
			@yield('content')
		</div>
		<div class="">
			@include('frontends.blockeds.footer')
		</div>
	<script src="{{ asset('vendor/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('vendor/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
</body>
</html>