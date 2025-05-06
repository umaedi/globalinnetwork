<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\BaseService;
use App\Models\Subdomain;
use App\Models\User;

class SubdomainController extends Controller
{
    public $subdomain;
    public function __construct(Subdomain $subdomain)
    {
       $this->subdomain = new BaseService($subdomain);
    }

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data['table'] =$this->subdomain->getAll();
            return view('cms.subdomain._data_table', $data);
        }

        $data['title'] = "List domain";
        $data['users'] = User::select('id', 'name')->get();
        return view('cms.subdomain.index', $data);
    }

    public function store(Request $request)
    {
        if($request->subdomain_id) {
            return $this->handleUpdate($request);
        }
        
        $validator = Validator::make($request->all(), [
            'nama_subdomain' => 'required',
            'user_id'   => 'required',
            'status' => 'required'
        ], [
            'nama_subdomain.required' => 'Nama subdomain wajib diisi',
            'user_id.required'  => 'User wajib diisi',
            'status.required' => 'Status domain wajib diisi',
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $subdomain = $request->nama_subdomain;
        $cek_domain =$this->subdomain->Query()->where('nama_subdomain', $subdomain)->first();
        if($cek_domain) {
            return $this->warning("Nama domain sudah ada!");
        }
        
        $data = $validator->validate();

        try {
           $this->subdomain->store($data);
        } catch (\Throwable $th) {
           return $this->error($th->getMessage());
        }

        return $this->success($data, "Domain berhasil disubmit");
    }

    protected function handleUpdate($request) {
        $validator = Validator::make($request->all(), [
            'nama_subdomain' => 'required',
            'status' => 'required'
        ], [
            'nama_subdomain.required' => 'Nama domain wajib diisi',
            'status.required' => 'Status domain wajib diisi',
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $subdomain = $request->nama_subdomain;
        $cek_domain =$this->subdomain->Query()->where('nama_subdomain', $subdomain)->first();
        if($cek_domain) {
            return $this->warning("Nama domain sudah ada!");
        }

        $data_domain = $this->subdomain->find($request->subdomain_id);
        
        $data['nama_subdomain'] = $subdomain;
        $data['status'] = $request->status;

        try {
           $this->subdomain->update($data_domain, $data);
        } catch (\Throwable $th) {
           return $this->error($th->getMessage());
        }

        return $this->success($data, "Domain berhasil disubmit");
    }

    public function delete($id) 
    {
       $subdomain = $this->subdomain->find($id);
       $subdomain->delete($id);
       return $this->success('oke', "Domain berhasil dihapus!");
    }
}
