@extends('layouts.guest')
@section('content')
<section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="user-form-logo" style="margin-top: 100px !important">
                    <a href="index.html">
                        <img src="https://dummyimage.com/200x70" alt="logo">
                    </a>
                </div>
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>Welcome!</h2>
                        <p>Use your credentials to access</p>
                    </div>
                    <form class="user-form">
                        <div class="form-group"><input type="email" class="form-control" placeholder="Enter your email"></div>
                        <div class="form-group"><input type="password" class="form-control" placeholder="Enter your password"></div>
                        <div class="form-button">
                            <button type="submit">login</button>
                            <p>Forgot your password?<a href="{{ route('password.request') }}">reset here</a></p>
                        </div>
                    </form>
                </div>
                <div class="user-form-footer">
                    <p>Domhost | &COPY; Copyright by <a href="https://www.masudsandwipe.xyz">moreXhub.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/user-form.css') }}">
@endsection