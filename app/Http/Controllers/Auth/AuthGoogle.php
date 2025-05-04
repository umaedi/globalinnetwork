<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class AuthGoogle extends Controller
{
    public function redirect()
    {

        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        if (isset($_REQUEST['error']) && ($_REQUEST['error'] == 'access_denied')) {
            Auth::logout();

            return Redirect::route('login');
        } else {

            $usergoogle = Socialite::driver('google')->stateless()->user();

            $user = User::updateOrCreate([
                'email' => $usergoogle->email,
            ], [
                'name' => $usergoogle->name,
                'avatar' => $usergoogle->user['picture'],
            ]);

            if (empty($user->password)) {
                $user->update([
                    'password' => $usergoogle->email,
                ]);
            }

            Auth::login($user);

            if ($user->role  === 'admin' || $user->role === 'author') {
                return Redirect::route('cms-dashboard');
            } else {
                return Redirect::route('home');
            }
        }
    }
}
