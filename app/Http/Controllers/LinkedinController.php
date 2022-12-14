<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Exception;
use Socialite;

class LinkedinController extends Controller
{
    public function linkedinRedirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function linkedinCallback()
    {
        try {

            $user = Socialite::driver('linkedin')->user();

            $linkedinUser = User::where('linkedin_id', $user->id)->orWhere('email', $user->email)->first();

            if ($linkedinUser) {

                Auth::login($linkedinUser);

                return redirect('/admin');

            } else {
                $user = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'linkedin_id' => $user->id,
                    'password' => encrypt('admin12345'),
                ]);

                Auth::login($user);

                return redirect('/admin');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
