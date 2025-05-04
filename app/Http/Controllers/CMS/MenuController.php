<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Services\BaseService;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public $menu;
    public $subdomain;
    public function __construct(Menu $menu)
    {
        $this->menu = new BaseService($menu);
        $this->subdomain = request()->route('subdomain') ?? config('app.url');
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $data['table'] = $this->menu->Query()->where('subdomain', $this->subdomain)->get();
            return view('cms.menu._data_table', $data);
        }
        $data['title'] = 'Menu';
        return view('cms.menu.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_menu' => 'required',
            'link'      => 'required',
            'status'    => 'required',
        ], [
            'nama_menu.required'    => 'Nama menu wajib diisi',
            'link.required'    => 'Nama menu wajib diisi',
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $data = $validator->validated();
        $data['subdomain'] = $this->subdomain;

        try {
            $this->menu->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success('Oke', 'Menu berhasil disimpan!');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_menu' => 'required',
            'link'      => 'required',
            'status'    => 'required',
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }


        $menu = $this->menu->find($request->id);
        $data = $validator->validated();
        $data['subdomain'] = $this->subdomain;

        try {
            $this->menu->update($menu, $data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
        return $this->success('Oke', 'Menu berhasil diperbaharui!');
    }

    public function delete(Request $request)
    {
        $menu = $this->menu->find($request->id);
        $menu->delete($request->id);
        return $this->success('Oke', 'Data ini berhasil dihapus!');
    }
}
