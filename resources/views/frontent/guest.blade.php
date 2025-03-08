<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('images/favicon.png') }}">
		<link rel="stylesheet" href="{{ asset('frontent/fonts/flaticon/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('frontent/fonts/fontawesome/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('frontent/vendor/slickslider/slick.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontent/vendor/venobox/venobox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontent/vendor/niceselect/niceselect.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontent/vendor/bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontent/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('frontent/css/index.css') }}">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('frontent.include.top-header')
		
        @include('frontent.include.header')

		@yield('content')

        <!-- Footer -->
        @include('frontent.include.footer')

        <script src="{{ asset('frontent/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
		<script src="{{ asset('frontent/vendor/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('frontent/vendor/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontent/vendor/slickslider/slick.min.js') }}"></script>
		<script src="{{ asset('frontent/vendor/slickslider/slick-call.js') }}"></script>
		<script src="{{ asset('frontent/vendor/venobox/venobox.min.js') }}"></script>
		<script src="{{ asset('frontent/vendor/venobox/venobox-call.js') }}"></script>
		<script src="{{ asset('frontent/vendor/niceselect/niceselect.min.js') }}"></script>
		<script src="{{ asset('frontent/js/main.js') }}"></script>
		{{-- <script src="{{ asset('frontent/js/secure.js') }}"></script> --}}
		@yield('styles')
    </body>
</html>
