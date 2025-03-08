@extends('frontent.guest')
@section('content')
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>blog list</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ Route('homePage') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">blog list</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="bloglist-part section-ptb-100">
    <div class="container">
        @include('components.frontent.blog.filter-section')

        @include('components.frontent.blog.blog-section')

        @include('components.frontent.blog.pagination-section')
    </div>
</section>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('frontent/css/blog-list.css') }}">
@endsection