<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\BaseService;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public $post;
    public $kategori;
    public function __construct(Post $post, Category $category)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = "Global Group";
        $subdomain = getHost() ? getHost() : false;
        if($request->ajax()) {
            $loadType = $request->load;

            switch ($loadType) {
                case 'ekslusif':
                    if($subdomain) {
                        $data['beritaEkslusif'] = $this->post->Query()->where('subdomain', $subdomain)->where('status', 'publish')->latest()->first();
                    } else {
                        $data['beritaEkslusif'] = $this->post->Query()->where('status', 'publish')->latest()->first();
                    }
                    return view('web.home._berita_ekslusif', $data);

                case 'pilihan-editor':
                    if($subdomain) {
                        $data['pilihanEditor'] = $this->post->Query()->where('subdomain', $subdomain)->where('status', 'publish')->where('pin', 'pilihan_editor')->take(6)->latest()->get();
                    } else {
                        $data['pilihanEditor'] = $this->post->Query()->where('status', 'publish')->where('pin', 'pilihan_editor')->take(6)->latest()->get();
                    }
                    return view('web.home._pilihan_editor', $data);

                case 'berita-terbaru':
                    if($subdomain) {
                        $posts = $this->post->Query()->where('subdomain', $subdomain)->where('status', 'publish')->where('pin', 'berita_terbaru')->whereNotNull('category_id')->latest()->take(10)->get();
                    } else {
                        $posts = $this->post->Query()->where('status', 'publish')->where('pin', 'berita_terbaru')->whereNotNull('category_id')->latest()->take(10)->get();
                    }
                            
                    $categoryIds = $posts->pluck('category_id')->unique();
                    $categories = Category::whereIn('id', $categoryIds)
                        ->with(['posts' => function ($query, $subdomain) {
                            $query->where('status', 'publish')->where('pin', 'berita_terbaru')->where('subdomain', $subdomain)->latest()->take(4);
                        }])
                        ->get();
                    return view('web.home._berita_terbaru', compact('categories'));

                case 'trending-topik':
                    if($subdomain) {
                        $posts = $this->post->Query()->where('subdomain', $subdomain)->where('status', 'publish')->take(6)->orderBy('views', 'desc')->get();
                    } else {
                        $posts = $this->post->Query()->where('status', 'publish')->take(6)->orderBy('views', 'desc')->get();
                    }
                    return view('web.home._trending_topik', \compact('posts'));
                
                case 'kategori': 
                    if($subdomain) {
                        $kategori = $this->kategori->Query()->where('subdomain', $subdomain)->take(6)->latest()->withCount('posts')->get();
                    } else {
                        $kategori = $this->kategori->Query()->take(6)->latest()->withCount('posts')->get();
                    }
                    return view('web.home._kategori', compact('kategori'));
                default:
                    break;
            }
        }
        
            if($subdomain) {
                $posts = Cache::remember('exclusive_posts_'.$subdomain, 600, function () use ($subdomain) {
                    return $this->post->Query()->where('subdomain', $subdomain)->where('status', 'publish')->where('pin', 'ekslusif')->take(3)->latest()->get();
                });
            } else {
                $posts = Cache::remember('exclusive_posts', 600, function () {
                    return $this->post->Query()->where('status', 'publish')->where('pin', 'ekslusif')->take(3)->latest()->get();
                });
            }
        return view('web.home.index', compact('title', 'posts'));
    }
}