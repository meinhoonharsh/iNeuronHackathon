<?php
namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Exception;
use Socialite;

class GitHubController extends Controller
{

    public function gitRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function gitCallback()
    {
        try {

            $user = Socialite::driver('github')->user();

            $searchUser = User::where('github_id', $user->id)->orWhere('email', $user->email)->first();

            if ($searchUser) {

                Auth::login($searchUser);

                return redirect('/dash');

            } else {
                $gitUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'github_id' => $user->id,
                    'password' => encrypt('gitpwd059'),
                ]);

                Auth::login($gitUser);

                return redirect('/admin');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
