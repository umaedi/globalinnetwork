<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OTPController extends Controller
{
    public function otp()
    {
        $data['title'] = "One Time Password";
        return view('auth.otp', $data);
    }

    public function verifyOtp(Request $request)
    {
        $otp = implode('', $request->input('otp', []));
        $user = Auth::user();
        $cachedOtp = Cache::get('otp_' . $user->email);

        if ($cachedOtp && $cachedOtp == $otp) {
            Cache::forever('otp_verified_' . $user->email, true);
            return redirect('/cms/dashboard');
        }

        return \back()->with('message', 'Kode OTP tidak valid!');
    }
}
