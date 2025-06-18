<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') :: {{ config('app.name') }}</title>
        <link rel="icon" href="{{ config('app.favicon') }}" type="image/x-icon">
		<meta name="keywords" content="{{ config('app.keywords') }}" />
		<meta name="description" content="{{ config('app.description') }}" />
		<meta name="theme-color" content="#ffffff">
		<meta name="robots" content="{{ config('app.robots') }}" />
		<meta name="google-site-verification" content="{{ config('app.google_site_verification') }}" />
		<meta name="msvalidate.01" content="{{ config('app.bing_site_verification') }}" />
		<meta name="yandex-verification" content="{{ config('app.yandex_site_verification') }}" />
		
		@include('frontend.include.styles')
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
		@include('frontend.include.top-header')
        @include('frontend.include.header')
		@yield('content')
        <!-- Footer -->
        @include('frontend.include.footer')
		<!-- Scripts -->
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
