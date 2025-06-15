<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') :: {{ config('app.name') }}</title>

        <link rel="icon" href="{{ asset('images/favicon.png') }}">
		<link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/fonts/fontawesome/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/slickslider/slick.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/venobox/venobox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/niceselect/niceselect.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('frontend.include.top-header')
		
        @include('frontend.include.header')

		@yield('content')

        <!-- Footer -->
        @include('frontend.include.footer')

        <script src="{{ asset('frontend/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/slickslider/slick.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/slickslider/slick-call.js') }}"></script>
		<script src="{{ asset('frontend/vendor/venobox/venobox.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/venobox/venobox-call.js') }}"></script>
		<script src="{{ asset('frontend/vendor/niceselect/niceselect.min.js') }}"></script>
		<script src="{{ asset('frontend/js/main.js') }}"></script>
		<script src="{{ asset('frontend/js/functions.js') }}"></script>
		{{-- <script src="{{ asset('frontend/js/secure.js') }}"></script> --}}
		@yield('styles')
    </body>
</html>
