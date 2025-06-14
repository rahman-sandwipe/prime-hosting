@extends('frontend.guest')
@section('title', 'Pricing Domain')
@section('content')
    <section class="single-banner">
        <h1>{{ __("domain search & pricing list") }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('homePage') }}">{{ __('Home') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __("domain search & pricing list") }}h</li>
        </ol>
    </section>

    @include('components.frontend.domain.domain-search')

    @include('components.frontend.domain.domain-pricing-list')
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/domain-search.css') }}">
@endsection