<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class BeritaController extends Controller
{
    public $post;
    public $kategori;
    public function __construct(Post $post, Category $category)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data['table'] = Post::with(['category', 'user'])->latest()->paginate(10);
            return view('cms.berita._data_table', $data);
        }

        $data['title'] = "List berita";
        return view('cms.berita.index', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = "Buat berita baru";
        $data['kategori'] = $this->kategori->getAll();
        return view('cms.berita.create', $data);
    }

    public function store(Request $request)
    {
        //validasi input
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'category_id'   => 'required',
            'thumbnail'     => 'required|image|mimes:png,jpg,jpeg,webp|max:2048',
            'body'          => 'required',
            'status'        => 'required'
        ], [
            'judul.required'    => 'Judul berita wajib diisi!',
            'category_id.required'      => 'Silakan pilih salah satu kategori',
            'thumbnail.required'        => 'Wajib diisi dan hanya format jpeg, png, dan jpg yang diperbolehkan, dengan ukuran file maksimal 2MB',
            'body.required'             => 'Konten berita wajib diisi!',
            'status.required'   => 'Status wajib dipilih',
        ]);

        //kembalikan response errors jika terdapat validasi yang tdk sesuai
        //$this->error, extend dari Controller
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        // Blok untuk menangani upload thumbnail
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

        $user = Auth::user();
        $data = $validator->validated();
        
        $data['excrept'] = Str::limit(strip_tags($request->body), 200, '...');
        $data['user_id']    = $user->id;
        $data['subdomain']  = 'globalinnetwork';
        $data['slug']       = Str::slug($request->judul);
        $data['thumbnail']  = $uniqueFileName;
        $data['caption_thumbnail']  = $request->caption_thumbnail;
        $data['tanggal_publish']    = $request->tanggal_publish ?? Carbon::now();
        $data['pin'] = $request->pin ?? 'berita_terbaru';

        try {
            $this->post->store($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "Berita berhasil di submit!");
    }

    public function edit(Request $request)
    {
        $data['title'] = "Update berita";
        $data['berita'] = $this->post->Query()->where('id', $request->id)->first();
        $data['kategori'] = $this->kategori->getAll();
        return view('cms.berita.edit', $data);
    }

    public function update(Request $request, $id)
    {
        //validasi input
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'category_id'   => 'required',
            'body'          => 'required',
            'status'        => 'required'
        ], [
            'judul.required'    => 'Judul berita wajib diisi!',
            'category_id.required'      => 'Silakan pilih salah satu kategori',
            'body.required'             => 'Konten berita wajib diisi!',
            'status.required'       => 'Status wajib dipilih'
        ]);

        //kembalikan response errors jika terdapat validasi yang tdk sesuai
        //$this->error, extend dari Controller
        if ($validator->fails()) {
            return $this->error($validator->errors());
        }

        $berita = $this->post->Query()->where('id', $request->id)->first();
        $data = $validator->validated();

        if ($request->hasFile('thumbnail')) {

            //validasi input
            $validator = Validator::make($request->all(), [
                'thumbnail'     => 'image|mimes:png,jpg,jpeg|max:2048',
            ], [
                'thumbnail.required'        => 'Hanya format jpeg, png, dan jpg yang diperbolehkan, dengan ukuran file maksimal 2MB',
            ]);

            if ($validator->fails()) {
                return $this->error($validator->errors());
            }

            //blok untuk menangani upload thumbanil
            $thumbnail = $request->file('thumbnail');
            $originalName = $thumbnail->getClientOriginalName();
            $extension = $thumbnail->getClientOriginalExtension();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $fileName = str_replace(' ', '_', $fileName);
            $uniqueFileName = $fileName . '_' . uniqid() . '.' . $extension;

            //driver image untuk scale atau merubah ukuran thumbanil sesuai kebutuhan
            $image = Image::read($thumbnail);
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
        
            $small  = 'berita/thumbnail/small/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
            $medium = 'berita/thumbnail/medium/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
            $big    = 'berita/thumbnail/big/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
            
            // Periksa apakah file ada di MinIO
            if (Storage::exists($small)) {
                Storage::delete($medium);
                Storage::delete($big);
            }

            $data['thumbnail'] = $uniqueFileName;
        } else {
            $data['thumbnail'] = $berita->thumbnail ?? 'thumbnail.jpg';
        }

        $data['excrept'] = Str::limit(strip_tags($request->body), 200, '...');
        $data['user_id']    = Auth::id();
        $data['subdomain']  = $request->getHost() ?? $berita->subdomain;
        $data['slug']       = Str::slug($request->judul);
        $data['caption_thumbnail']  = $request->caption_thumbnail ?? $request->input('judul');
        $data['tanggal_publish']    = $request->tanggal_publish ?? Carbon::now();
        $data['pin'] = $request->pin ?? 'berita_terbaru';

        try {
            $this->post->update($berita, $data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }

        return $this->success("Oke", "Berita berhasil diupdet!");
    }

    public function delete(Request $request)
    {
        $berita = $this->post->find($request->id);
        $berita->delete($request->id);
        
        // Path file di MinIO
        $small  = 'berita/thumbnail/small/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
        $medium = 'berita/thumbnail/medium/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
        $big    = 'berita/thumbnail/big/' . $berita->created_at->format('Y') . '/' . $berita->thumbnail;
        
        // Periksa apakah file ada di MinIO
        if (Storage::exists($small)) {
            Storage::delete($medium);
            Storage::delete($big);
        }

        return $this->success('Oke', 'Berita berhasil dihapus!');
    }
}