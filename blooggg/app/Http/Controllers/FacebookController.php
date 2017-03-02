<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

class FacebookController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
     //   $user = Socialite::driver('facebook')->user();
        $providerUser = Socialite::driver('facebook')->user(); 
        dd($providerUser);
    //    dd($user);
        // $user->token;
    }
}