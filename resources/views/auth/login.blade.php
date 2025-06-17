@extends('auth.layout')
@section('title', 'Login Admin')
@section('content')
    <main class="form-signin w-100 m-auto">
        <h4 class="mb-3">Sign in</h4>
        <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>

        <form action="{{ route('login') }}" method="POST" class="text-start mb-3">
            @csrf
            <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control"placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember-me" name="remember">
                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                </div>

                <a href="{{ route('password.request') }}" class="text-muted border-bottom border-dashed">
                    Forgot password?     
                </a>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
    </main>
@endsection
