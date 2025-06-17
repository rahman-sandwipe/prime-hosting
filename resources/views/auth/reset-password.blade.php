@extends('auth.layout')
@section('title', 'Reset Password')
@section('content')
    <main class="form-signin w-100 m-auto">
        <h4 class="mb-3">Reset Password</h4>
        <p class="text-muted mb-4">Enter your email address to reset your password.</p>

        <form action="{{ route('password.update') }}" method="POST" class="text-start mb-3">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <div class="mb-3">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <p class="text-muted mb-0">Remembered your password? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
        </div>
    </main>
@endsection