@extends('frontent.guest')
@section('content')
    <main>
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
    </main>
@endsection