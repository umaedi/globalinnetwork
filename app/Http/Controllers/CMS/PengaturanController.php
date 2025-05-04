<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PengaturanController extends Controller
{
    public function index(Request $request)
    {
        $subdomain = request()->route('subdomain');
        $data['pengaturan'] = Pengaturan::where('subdomain', $subdomain)->first();
        $data['title'] = 'Pengaturan';
        return view('cms.pengaturan.index', $data);
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'nama_opd'          => 'required',
                'nama_kepala_opd'   => 'required',
                'jabatan'           => 'required',
                'alamat'            => 'required',
                'photo_kepala_opd'  => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'token_ig'          => 'required',
            ]);

            if ($validator->fails()) {
                return $this->error($validator->errors());
            }

            $subdomain = request()->route('subdomain');
            $pengaturan = Pengaturan::where('subdomain', $subdomain)->first();
            $data = $request->except('_token');

            if ($pengaturan) {
                if ($request->hasFile('photo_kepala_opd')) {
                    $file = $request->file('photo_kepala_opd');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('images/kepala-opd', $filename, 's3');
                    $data['photo_kepala_opd'] = $filename;
                    Storage::disk('s3')->delete('images/kepala-opd/' . $pengaturan->photo_kepala_opd);
                }
                $data['subdomain'] = $subdomain;
                $pengaturan->update($data);
            } else {
                if ($request->hasFile('photo_kepala_opd')) {
                    $file = $request->file('photo_kepala_opd');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('images/kepala-opd', $filename, 's3');
                    $data['photo_kepala_opd'] = $filename;
                }
                $data['subdomain'] = $subdomain;
                Pengaturan::create($data);
            }

            return $this->success('Ok', 'Data berhasil disimpan');
        }
    }
}
