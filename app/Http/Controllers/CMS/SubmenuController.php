<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Submenu;
use App\Services\BaseService;
use Illuminate\Support\Facades\Validator;

class SubmenuController extends Controller
{
    public $menu;
    public $submenu;
    public $subdomain;
    public function __construct(Menu $menu, Submenu $submenu)
    {
        $this->menu = new BaseService($menu);
        $this->submenu = new BaseService($submenu);
        $this->subdomain = request()->route('subdomain');
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $data['table'] = $this->submenu->Query()->where('menu_id', $request->menu_id)->get();
            return view('cms.submenu._data_table', $data);
        }
        
        $data['title'] = 'Buat submenu';
        $data['menu_id'] = $request->menu_id;
        return view('cms.submenu.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu_id'      => 'required',
            'nama_submenu' => 'required',
            'link'         => 'required',
            'status'       => 'required'
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $data = $validator->validated();

        try {
            $this->submenu->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success('Oke', 'Menu berhasil disimpan!');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_submenu' => 'required',
            'link'         => 'required',
            'status'       => 'required'
        ]);

        if($validator->fails()) {
            return $this->error($validator->errors());
        }

        $submenu = $this->submenu->find($request->id);
        $data = $validator->validated();

        try {
            $this->submenu->update($submenu, $data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
        return $this->success('Oke', 'Submenu berhasil diperbaharui!');
    }

    public function delete(Request $request)
    {
        $submenu = $this->submenu->find($request->id);
        $submenu->delete($request->id);
        return $this->success('Oke', 'Data ini berhasil dihapus!');
    }
}
