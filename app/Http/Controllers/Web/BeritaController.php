<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public $post;
    public $kategori;
    public $subdomain;
    public function __construct(Post $post, Category $category)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
        $this->subdomain =  getHost();
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
           if($request->load_type == 'berita') {
                $posts = $this->post->query()->where('subdomain', $this->subdomain)
                ->when($request->search, function ($query, $search) {
                    return $query->where('judul', 'like', '%' . $search . '%');
                })
                ->where('status', 'publish')
                ->latest()
                ->paginate(10);

                return view('web.berita._list', compact('posts'));
            }else {
                $kategori = $this->kategori->Query()->take(6)->latest()->withCount('posts')->get();
                return view('web.home._kategori', compact('kategori'));
            }
        }

        $title = "Berita";
        return view('web.berita.index', compact('title'));
    }

    public function show(Request $request, $slug)
    {
        if($request->ajax()) {
            if($request->load_type == 'trending') {
                $posts = $this->post->Query()->where('status', 'publish')->take(6)->orderBy('views', 'desc')->get();
                return view('web.home._trending_topik', \compact('posts'));
            }
            
            if($request->load_type == 'kategori'){
                $kategori = $this->kategori->Query()->take(6)->latest()->withCount('posts')->get();
                return view('web.home._kategori', compact('kategori'));
            }
        }

        $post = $this->post->Query()
            ->where('slug', $slug)
            ->first();

        if ($post) {
            $post->increment('views');
            $title = $post->judul;
            return view('web.berita.show', compact('title', 'post'));
        }
        return abort(404, 'Data not found');
    }
}
