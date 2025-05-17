<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Services\BaseService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KategoriController extends Controller
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

            if($request->load_type == 'kategori_nav') {
                $categories = $this->kategori->getAll();
                return $this->success($categories);
            }
        }

        return view('web.berita.index');
    }

    public function show(Request $request, $slug)
    {
        if($request->ajax()) {
            if($request->load_type == 'berita') {
                if($slug == 'pilihan_editor') {
                    $posts = $this->post->Query()
                    ->orWhere('pin', $slug)
                    ->where('status', 'publish')
                    ->latest()->paginate(10);
                    return view('web.berita._list', compact('posts'));
                }else {
                    $category = Category::where('slug', $slug)->first();
                    $posts = $this->post->Query()
                    ->where('category_id', $category->id)
                    ->orWhere('pin', $slug)
                    ->where('status', 'publish')
                    ->latest()->paginate(10);
                 return view('web.berita._list', compact('posts'));
                }

             }else {
                 $kategori = $this->kategori->Query()
                 ->take(6)->latest()
                 ->withCount('posts')
                 ->get();
                 return view('web.home._kategori', compact('kategori'));
             }
         }
 
         $title = "Berita kategori";
         return view('web.berita.index', compact('title'));
    }
}