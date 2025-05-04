<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KebijakanController extends Controller
{
    public function kebijakan()
    {
        return view('web.kebijakan.index', [
            'title' => 'Persyaratan Layanan Portal Informasi Kabupaten Tulang Bawang'
        ]);
    }

    public function privasi()
    {
        return view('web.kebijakan.privasi', [
            'title' => 'Persyaratan Layanan Portal Informasi Kabupaten Tulang Bawang'
        ]);
    }
}
