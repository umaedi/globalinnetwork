<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\BaseService;
use Illuminate\Support\Str;
use App\Models\Category;

class KategoriController extends Controller
{
    public $kategori;
    public function __construct(Category $category)
    {
        $this->kategori = new BaseService($category);
    }
    
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data['table'] = $this->kategori->getAll();
            return view('cms.kategori._data_table', $data);
        }
        
        $data['title'] = "Kategori berita";
        return view('cms.kategori.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required'
        ], [
            'nama_kategori.required' => 'Nama kategori wajib diisi'
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $slug = Str::slug($request->nama_kategori);
        $kategori = $this->kategori->Query()
        ->where('subdomain', request()->subdomain)
        ->where('slug', $slug)
        ->first();

        if($kategori) {
            return $this->warning('Nama kategori sudah ada');
        }

        $data['subdomain'] = 'globalnet';
        $data['nama_kategori'] = $request->nama_kategori;
        $data['slug'] = $slug;

        try {
            $this->kategori->store($data);
        } catch (\Throwable $th) {
           return $this->error($th->getMessage());
        }

        return $this->success($data, "Kategori berhasil disubmit");
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required'
        ], [
            'nama_kategori.required' => 'Nama kategori wajib diisi'
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $slug = Str::slug($request->nama_kategori);
        $kategori = $this->kategori->Query()
        ->where('subdomain', request()->subdomain)
        ->where('slug', $slug)
        ->first();

        if($kategori) {
            return $this->warning('Nama kategori sudah ada');
        }

        $data['nama_kategori'] = $request->nama_kategori;
        $data['slug'] = $slug;

        $kategori = $this->kategori->find($request->id);
        try {
            $this->kategori->update($kategori, $data);
        } catch (\Throwable $th) {
           return $this->error($th->getMessage());
        }

        return $this->success($data, "Kategori berhasil diperbaharui");
    }

    public function delete(Request $request) 
    {
       $id = $request->id; 
       $kategori = $this->kategori->find($id);
       $kategori->delete($id);
       return $this->success('oke', "Kategori berhasil dihapus!");
    }
}

