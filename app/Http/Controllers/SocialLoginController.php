<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{

    public function auth(string $provider)
    {
        try {
            $providerUser = Socialite::driver($provider)->stateless()->user();

            $providerUser = User::updateOrCreate(
                [
                    'provider_id' => $providerUser->getId(),
                ],
                [
                    'name' => $providerUser->getName(),
                    'email' => $providerUser->getEmail(),
                    'avatar' => $providerUser->getAvatar(),
                    'provider_name' => $provider,
                ],
            );

            Auth::login($providerUser);

            return redirect('/profile');
        } 
        
        catch (\Throwable) {
           return redirect('/');
        }
    }

    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }
}
