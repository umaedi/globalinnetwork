<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Services\BaseService;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subdomain;
use Illuminate\Support\Str;

class SubberitaController extends Controller
{
    public $post;
    public $kategori;
    public $subdomain;
    public function __construct(Post $post, Category $category, Subdomain $subdomain)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
        $this->subdomain = new BaseService($subdomain);
    }

    public function index(Request $request, $id_berita)
    {
        // return 
    }

    public function create(Request $request, $berita_id)
    {
        $data['post'] = $this->post->find($berita_id);
        $data['kategori'] = $this->kategori->getAll();
        $data['subdomain']  = $this->subdomain->getAll();
        return view('cms.sub_berita.create', $data);
    }

    public function store(Request $request, $berita_id)
    {
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'category_id'   => 'required',
            'thumbnail'     => 'image|mimes:png,jpg,jpeg,webp|max:2048',
            'body'          => 'required',
            'status'        => 'required'
        ], [
            'judul.required'    => 'Judul berita wajib diisi!',
            'category_id.required'      => 'Silakan pilih salah satu kategori',
            'body.required'             => 'Konten berita wajib diisi!',
            'status.required'   => 'Status wajib dipilih',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $post = $this->post->find($berita_id);
        if($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $originalName = $thumbnail->getClientOriginalName();
            $extension = $thumbnail->getClientOriginalExtension();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $fileName = str_replace(' ', '_', $fileName);
            $uniqueFileName = $fileName . '_' . uniqid() . '.' . 'webp';

            // Untuk thumbnail utama
            $image = Image::read($thumbnail); // Pastikan Image facade diinisialisasi dengan benar

            // Untuk thumbnail sidebar
            $image->cover(1200, 800);
            $path_thumbnail_sidebar = 'berita/thumbnail/big/' . date('Y') . '/' . $uniqueFileName;
            Storage::put($path_thumbnail_sidebar, (string) $image->encode());

            // Untuk thumbnail sidebar
            $image->cover(800, 600);
            $path_thumbnail_sidebar = 'berita/thumbnail/medium/' . date('Y') . '/' . $uniqueFileName;
            Storage::put($path_thumbnail_sidebar, (string) $image->encode());

            $image->cover(400, 410);
            $path_thumbnail_utama = 'berita/thumbnail/small/' . date('Y') . '/' . $uniqueFileName;
            Storage::put($path_thumbnail_utama, (string) $image->encode());
            $thumbnail = $uniqueFileName;
        }else {
            $thumbnail = $post->thumbnail;
        }

        $subdomains = $request->sudmomain;
        foreach ($subdomains as $subdomain) {
            $sub = Subdomain::where('nama_subdomain', $subdomain)->first();
            $data = $validator->validated();
        
            $data['excrept'] = Str::limit(strip_tags($request->body), 200, '...');
            $data['user_id']    = $sub->user->id;
            $data['subdomain']  = $sub->nama_subdomain;
            $data['slug']       = Str::slug($request->judul);
            $data['thumbnail']  = $thumbnail;
            $data['caption_thumbnail']  = $request->caption_thumbnail;
            $data['tanggal_publish']    = $request->tanggal_publish ?? Carbon::now();
            $data['pin'] = $request->pin ?? 'berita_terbaru';

            try {
                $this->post->store($data);
            } catch (\Throwable $th) {
                return $this->error($th->getMessage());
            }
        }
        return $this->success("Oke", "Berita berhasil di submit!");
    }
}
