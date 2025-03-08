<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('images/favicon.png') }}">
		<link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/fonts/fontawesome/fontawesome.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/slickslider/slick.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/venobox/venobox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/niceselect/niceselect.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('components.frontend.top-header')
		
        @include('components.frontend.header')

		@include('components.frontend.home.hero-section')

		
		@include('components.frontend.home.about-section')


		@include('components.frontend.home.info-section')
		
		
		@include('components.frontend.home.support-section')


		@include('components.frontend.home.service-section')
		
		
		@include('components.frontend.home.feature-section')
		
		
		@include('components.frontend.home.price-section')


		@include('components.frontend.home.testimonials-section')


		<div class="container section-mb-120">
			<div class="clients-slider">
				<a href="#">
					<img src="images/client/01.png" alt="client">
				</a>
				<a href="#">
					<img src="images/client/02.png" alt="client">
				</a>
				<a href="#">
					<img src="images/client/03.png" alt="client">
				</a>
				<a href="#">
					<img src="images/client/04.png" alt="client">
				</a>
				<a href="#">
					<img src="images/client/05.png" alt="client">
				</a>
			</div>
		</div>

		<section class="call2action-part">
			<div class="container">
				<h2>want to get achieve your ideas online?</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit ncidunt neque atque cum nulla temporibus cupiditate excepturi quibusdam magni beatae mollitia</p>
				<a href="pricing-plan.html" class="btn btn-inline"><i class="fas fa-external-link-alt"></i><span>get started</span></a>
			</div>
		</section>

        <!-- Footer -->
        @include('components.frontend.footer')

        <script src="{{ asset('frontend/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/slickslider/slick.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/slickslider/slick-call.js') }}"></script>
		<script src="{{ asset('frontend/vendor/venobox/venobox.min.js') }}"></script>
		<script src="{{ asset('frontend/vendor/venobox/venobox-call.js') }}"></script>
		<script src="{{ asset('frontend/vendor/niceselect/niceselect.min.js') }}"></script>
		<script src="{{ asset('frontend/js/main.js') }}"></script>
		<script src="{{ asset('frontend/js/secure.js') }}"></script>
    </body>
</html>
