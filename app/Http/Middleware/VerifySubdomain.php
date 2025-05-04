<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class VerifySubdomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $subdomain = $request->route('subdomain');
        $cekSubdomain =  DB::table('subdomains')->where('nama_subdomain', $subdomain)->first();

        if(!$cekSubdomain) {
            return \abort(403, 'Subdomain belum terdaftar');
        }

        if($cekSubdomain->status == 'inactive') {
            return \abort(403, 'Subdomain tidak aktif');
        }

        return $next($request);
    }
}
