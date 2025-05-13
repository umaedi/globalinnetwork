<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BaseService;
use App\Models\Post;
use App\Models\Category;
class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public $post;
    public $kategori;
    public function __construct(Post $post, Category $category)
    {
        $this->post = new BaseService($post);
        $this->kategori = new BaseService($category);
    }
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {
            $data['table'] = Post::with(['user','category'])->limit(10)->get();
            return view('cms.dashboard._data_table', $data);
        }
        return view('cms.dashboard.index');
    }
}
