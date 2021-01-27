<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Hash;
class SocialController extends Controller
{
    public function redirect($provider)
	{

	    return Socialite::driver($provider)->redirect();
	}
	 
	public function callback($provider)
	{
	    $getInfo = Socialite::driver($provider)->user();
	    $user = $this->createUser($getInfo,$provider);
	    auth()->login($user);
	    return redirect()->to('/hotel');
	}

	function createUser($getInfo,$provider){
	 $user = User::where('provider_id', $getInfo->id)->first();
	 
	 if (!$user) {
	     $user = User::create([
	        'name'     => $getInfo->name,
	        'email'    => $getInfo->email,
	        'provider' => $provider,
	        'provider_id' => $getInfo->id,
            'phone' => '0',
            'role'=>'3',
            'password'=>Hash::make(rand(0,9999999))
	    ]);
	  }
	  return $user;
	}
}
