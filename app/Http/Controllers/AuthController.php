<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // Create or get user and log them in
            // Redirect to dashboard
        } catch (\Exception $e) {
            return redirect()->route('admin.login')->with('error', 'Failed to login with Google');
        }
    }

    // Add Facebook methods
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            // Create or get user and log them in
            // Redirect to dashboard
        } catch (\Exception $e) {
            return redirect()->route('admin.login')->with('error', 'Failed to login with Facebook');
        }
    }
}
