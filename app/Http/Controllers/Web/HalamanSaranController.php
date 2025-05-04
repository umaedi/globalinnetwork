<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Halaman;
use App\Services\BaseService;

class HalamanSaranController extends Controller
{
    public $halaman;
    public function __construct(Halaman $halaman)
    {
        $this->halaman = new BaseService($halaman);
    }
    public function index()
    {
        return view('web.saran.index');
    }
}
