<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\BaseService;
use App\Models\Subdomain;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $subdomain;
    public $user;
    public function __construct(Subdomain $subdomain, User $user)
    {
        $this->subdomain = new BaseService($subdomain);
        $this->user = new BaseService($user);
    }
    public function index(Request $request)
    {
        if($request->ajax()) {
            if($request->search) {
                $response = $this->user->Query()->where('name', 'like', '%'.$request->search.'%')->get();
                return response()->json($response);
            }

            $data['table'] = User::with('subdomain')->get();
           return view('cms.user._data_table', $data);
        }

        $data['title'] = "List data user";
        $data['subdomain'] = $this->subdomain->getAll();
        return view('cms.user.index', $data);
    }

    public function store(Request $request)
    {
       return $request->id_data ? $this->handleUpdate($request) : $this->handleStore($request);
    }

    protected function handleStore($request) 
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required    '
        ], [
            'name.required' => 'Nama user wajib diisi',
            'email.required' => 'Email tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $data_user = $validator->validate();
        $data_user['password'] = Hash::make($data_user['password']);

        $this->user->store($data_user);
        return $this->success($data_user, 'User baru berhasil dibuat', 201);
    }

    protected function handleUpdate($request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email',
        ], [
            'name.required' => 'Nama user wajib diisi',
            'email.required' => 'Email tidak boleh kosong!',
        ]);
        
        if($validator->fails()) {
            return $this->error($validator->errors());
        }
        
        $data_user = $validator->validate();
        if($request->password) {
            $data_user['password'] = Hash::make($data_user['password']);
        };

        $user =  $this->user->find($request->id_data);
        $user->update($data_user);
        return $this->success($data_user, 'User berhasil diperbaharui');
    }

    public function destory($id)
    {
        $user = $this->user->find($id);
        $user->delete($id);
        return $this->success('Oke', 'Data user berhasil dihapus');
    }
}
