<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CheckOtpVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $otpVerified = Cache::get('otp_verified_' . $user->email);

        // Jika OTP belum diverifikasi
        if (!$otpVerified) {
            return redirect('otp')->with('message', 'Silakan verifikasi OTP Anda terlebih dahulu.');
        }

        return $next($request);
    }
}
