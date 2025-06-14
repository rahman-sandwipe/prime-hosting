@extends('frontend.guest')
@section('title', 'Hostings')
@section('content')
    @include('frontend.components.hostings.pageTitle')
    @include('frontend.components.hostings.hostingPlan')
    @include('frontend.components.hostings.hostingSupport')
@endsection
