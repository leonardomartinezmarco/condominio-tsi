<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller{
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider){
        $providerDataUser = Socialite::driver($provider)->user();
        $user = User::firstOrCreate(
            ['email' => $providerDataUser->getEmail()],
            ['name' => $providerDataUser->getName() ?? $providerDataUser->getNickname(),'password' => 'SenhaDoUsuarioDoLoginSocial']);

        Auth::login($user);
        return redirect(route('dashboard'));
    }
}
