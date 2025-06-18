@extends('frontend.guest')
@section('title', 'Support Ticket')
@section('content')
    <main>
        @include('frontend.components.support.pageTitle')
        @include('frontend.components.support.supportSection')
        @include('frontend.components.support.faqSection')
        @include('frontend.components.support.contactSection')
    </main>
@endsection