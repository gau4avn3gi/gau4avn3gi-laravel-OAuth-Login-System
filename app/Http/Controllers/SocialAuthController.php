<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    // Redirect to Google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback from Google
    public function callback()
    {
        try {
            $socialUser = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Login failed: '.$e->getMessage());
        }

        // Find existing user
        $user = User::where('provider', 'google')
                    ->where('provider_id', $socialUser->getId())
                    ->first();

        if (!$user) {
            $user = User::updateOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name' => $socialUser->getName() ?? 'NoName',
                    'provider' => 'google',
                    'provider_id' => $socialUser->getId(),
                    'avatar' => $socialUser->getAvatar(),
                    // 'password' => bcrypt(Str::random(16)),
                    'password' => bcrypt("Test@123"),

                ]
            );
        }

        Auth::login($user, true);

        return redirect()->intended('/dashboard');
    }
}
