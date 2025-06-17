<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create()
    {
        return view('auth.forgot-password', [
            'title' => __('Forgot Password'),
            'description' => __('Please enter your email address to receive a password reset link.'),
        ]);
    }

    /**
     * Handle a password reset request.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        // Attempt to send the password reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Check if the reset link was successfully sent
        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('login')->with('status', __($status))
            : back()->withInput($request->only('email'))
                    ->withErrors(['email' => __($status)]);
    }
}