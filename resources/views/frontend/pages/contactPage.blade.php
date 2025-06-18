@extends('frontend.guest')
@section('title', 'Contact Us')
@section('content')
    <main>
        @include('frontend.components.contact.pageTitle')
        @include('frontend.components.contact.contactSection')
        @include('frontend.components.contact.supportSection')
        @include('frontend.components.contact.faqSection')
    </main>
@endsection