@extends('auth.layout')
@section('title', 'Forgot Password')
@section('content')
    <main class="form-signin w-100 m-auto">
        <h4 class="mb-3">Forgot Password</h4>
        <p class="text-muted mb-4">Enter your email address to reset your password.</p>

        <form action="{{ route('password.email') }}" method="POST" class="text-start mb-3">
            @csrf
            <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-block" type="submit">Send Password Reset Link</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <p class="text-muted mb-0">Remembered your password? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
        </div>
    </main>
@endsection