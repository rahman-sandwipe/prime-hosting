@extends('frontend.guest')
@section('title', 'Home')
@section('content')
    <main>
        @include('frontend.components.home.heroSection')
		@include('frontend.components.home.serviceSection')
		@include('frontend.components.home.serverSection')
		@include('frontend.components.home.featureSection')
		@include('frontend.components.home.supportSection')
		@include('frontend.components.home.aboutSection')
		{{-- @include('frontend.components.home.reviewSection') --}}

		<section class="call2action-part">
			<div class="container">
				<h2>want to get achieve your ideas online?</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit ncidunt neque atque cum nulla temporibus cupiditate excepturi quibusdam magni beatae mollitia</p>
				<a href="pricing-plan.html" class="btn btn-inline"><i class="fas fa-external-link-alt"></i><span>get started</span></a>
			</div>
		</section>
    </main>
@endsection