<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Halaman;
use App\Services\BaseService;

class HalamanController extends Controller
{
    public $halaman;
    public function __construct(Halaman $halaman)
    {
        $this->halaman = new BaseService($halaman);
    }
    public function index()
    {
        dd('halaman');
        return view('web.halaman.index');
    }

    public function show(Request $request)
    {
        $data['title'] = 'Halaman';

        $data['halaman'] = $this->halaman->Query()
        ->where('subdomain', $request->subdomain)
        ->where('slug', $request->slug)
        ->where('status', 'publish')    
        ->first();

        $data['halamanTerbaru'] = $this->halaman->Query()
        ->where('subdomain', $request->subdomain)
        ->where('status', 'publish')    
        ->limit(6)
        ->latest()
        ->get();

        return view('web.halaman.show', $data);
    }
}
