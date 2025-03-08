@extends('frontent.guest')
@section('content')
    <main>
        <section class="single-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>contact us</h1>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ Route('homePage') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">contact</li>
						</ol>
					</div>
				</div>
			</div>
		</section>
        <section class="contact-part">
            <div class="container">
                @include('components.frontend.contact.contact-section')

                @include('components.frontend.contact.map-form-section')
            </div>
        </section>
    </main>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/contact.css') }}">
@endsection