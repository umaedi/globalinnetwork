<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FcmToken;
use Illuminate\Support\Facades\Auth;

class FcmController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'token' => 'required|string|unique:fcm_tokens,token',
            'device_type' => 'nullable|string|in:android,ios,web',
            'device_id' => 'nullable|string',
            'browser' => 'nullable|string|max:100',
            'ip_address' => 'nullable|ip',
        ]);

        $fcmToken = FcmToken::create([
            'user_id' => Auth::id() ?? null,
            'token' => $request->token,
            'device_type' => $request->device_type,
            'device_id' => $request->device_id,
            'browser' => $request->browser,
            'ip_address' => $request->ip_address ?? $request->ip(),
            'is_active' => true,
        ]);

        return response()->json([
            'message' => 'Token berhasil disimpan',
            'data' => $fcmToken->token
        ], 201);
    }
}
