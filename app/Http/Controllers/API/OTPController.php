<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Otp;
class OTPController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $otp = Otp::where('user_id', $request->user_id)->select('otp', 'created_at')->latest()->first();

        if ($otp) {
            return response()->json([
                'success' => true,
                'message' => 'One Time Password (OTP) ditemukan.',
                'metadata'    => $otp,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'One Time Password (OTP) tidak ditemukan.',
                'metadata'    => null,
            ], 404);
        }
    }
}
