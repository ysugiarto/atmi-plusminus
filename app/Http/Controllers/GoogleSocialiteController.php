<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (Exception $e) {
            return redirect('/');
        }

        // only allow people with @atmi.ac.id to login
        if((explode("@", $user->email)[1] !== 'atmi.ac.id') &&
            (explode("@", $user->email)[1] !== 'student.atmi.ac.id')) {
            return redirect('/');
        }

        // Check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();

        if($existingUser){
            // log them in
            Auth::login($existingUser, true);
        } else {
            // create a new user
            $newUser = User::create([
                'firstname' => $user->user['given_name'],
                'lastname' => $user->user['family_name'],
                'email' => $user->email,
                'google_id'=> $user->id,
                'avatar'=> $user->avatar
            ]);

            if ($user->email == 'ysugiarto@atmi.ac.id')
            {
                $newUser->assignRole('Super Admin');
            }
            else
            {
                if(explode("@", $user->email)[1] == 'student.atmi.ac.id') {
                    $newUser->assignRole('Student');
                }
                else {
                    $newUser->assignRole('Normal User');
                }

            }

            Auth::login($newUser);
        }
        return redirect()->intended('dashboard');
    }
}
