<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\Otp;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Generate OTP 6 digit
            $otp = random_int(100000, 999999);

            $email = Auth::user()->email;
            $data_top = [
                'email'         => $email,
                'otp'           => $otp,
                'expires_at'    => now()->addMinutes(5)
            ];

            $cached_otp =  Cache::get('otp_' . $email);
            if(!$cached_otp) {
                Otp::create($data_top);
                Cache::put('otp_' .  $email, $otp, now()->addMinutes(5));
            }

            Cache::forget('otp_verified_' . $email);
            return redirect()->intended('otp');
        }
        return back()->with('error', 'Email atau Password Salah!')->onlyInput('email');
    }
}
