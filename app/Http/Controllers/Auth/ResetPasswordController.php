<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create($token)
    {
        return view('auth.reset-password', [
            'title' => __('Reset Password'),
            'description' => __('Please enter your email address to reset your password.'),
            'token' => $token, // ✅ টোকেন পাঠানো হলো
        ]);
    }

    /**
     * Handle a password reset request.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:5',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password),
                'remember_token' => Str::random(60),
            ])->save();

            // Optional: আপনি এখানে ইউজারকে লগইন করিয়ে দিতে পারেন
            // event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
    }
}