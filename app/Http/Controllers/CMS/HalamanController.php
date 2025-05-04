<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\Halaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class HalamanController extends Controller
{
    public $halaman;
    public function __construct(Halaman $halaman)
    {
        $this->halaman = new BaseService($halaman);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $halaman = $this->halaman->Query();
            if (\request()->search) {
                $halaman->where('judul', 'like', '%' . \request()->search . '%');
            }
            $data['table'] = $halaman->where('subdomain', request()->subdomain)
                ->where('status', 'publish')
                ->paginate(10);
            return view('cms.halaman._data_table', $data);
        }

        $data['title'] = "List halaman";
        return view('cms.halaman.index', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = "Buat halaman baru";
        return view('cms.halaman.create', $data);
    }

    public function store(Request $request)
    {
        //validasi input
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'status'        => 'required',
            'konten'        => 'required',
        ], [
            'judul.required'    => 'Judul halaman wajib diisi!',
            'konten.required'             => 'Konten halaman wajib diisi!',
            'status.required'   => 'Status wajib dipilih',
        ]);

        //$this->error, extend dari Controller
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $user = Auth::user();
        $data = $validator->validated();

        $data['user_id']    = $user->id;
        $data['subdomain']  = request()->subdomain;
        $data['slug']       = Str::slug($request->judul);
        $data['publish_at']    = $request->publish_at ?? Carbon::now();

        try {
            $this->halaman->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "halaman berhasil disimpan!");
    }

    public function edit(Request $request)
    {
        $data['title'] = "Update halaman";
        $data['halaman'] = $this->halaman->Query()->where('id', $request->id)->first();
        return view('cms.halaman.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //validasi input
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'konten'        => 'required'
        ], [
            'judul.required'    => 'Judul halaman wajib diisi!',
            'konten.required'             => 'Konten halaman wajib diisi!',
        ]);

        //kembalikan response errors jika terdapat validasi yang tdk sesuai
        //$this->error, extend dari Controller
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $halaman = $this->halaman->Query()->where('id', $request->id)->first();
        $slug = Str::slug($request->judul);

        if ($halaman->slug != $slug) {
            $validator = Validator::make($request->all(), [
                'judul' => 'unique:halaman,judul'
            ], [
                'judul.unique' => 'Judul halaman sudah ada!'
            ]);

            if ($validator->fails()) {
                return $this->error($validator->errors());
            }
        }

        $data = $validator->validated();

        $data['user_id'] = Auth::id();
        $data['subdomain'] = $halaman->subdomain;
        $data['slug'] = $slug;

        try {
            $this->halaman->update($halaman, $data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "halaman berhasil diupdated!");
    }

    public function delete(Request $request)
    {
        $halaman = $this->halaman->find($request->id);
        $halaman->delete($request->id);
        return $this->success('Oke', 'halaman berhasil dihapus!');
    }
}