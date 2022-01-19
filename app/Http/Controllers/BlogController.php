<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Category;
use App\Models\Profilposts;
use App\Models\Profilcategory;

class BlogController extends Controller
{
    public function index(Posts $posts){
        $category_widget = Category::all();
        $data = $posts->latest() -> take(10)->get();
        return view('blog', compact('data', 'category_widget'));
    }

    public function isi_profilblog($slug){
        $category_widget = Profilcategory::all();
        $profildata = Profilposts::where('slug', $slug) -> get();
        return view('blog.isi_profilposts', compact('profildata', 'category_widget'));
    }
    public function isi_blog($slug){
        $category_widget = Category::all();
        $data = Posts::where('slug', $slug) -> get();
        return view('blog.isi_posts', compact('data', 'category_widget'));
    }

    public function list_profilblog(){
        $category_widget = Profilcategory::all();
        $profildata = Profilposts::latest()->paginate(6);
        return view('blog.list_profilposts', compact('profildata', 'category_widget'));
    }

    public function list_blog(){
        $category_widget = Category::all();
        $data = Posts::latest()->paginate(6);
        return view('blog.list_posts', compact('data', 'category_widget'));
    }

    public function list_profilcategory(Profilcategory $profilcategory){
        $category_widget = Profilcategory::all();
        $profildata = $profilcategory-> profilposts()->paginate(6);
        return view('blog.list_profilposts', compact('profildata', 'category_widget'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();
        $data = $category-> posts()->paginate(6);
        return view('blog.list_posts', compact('data', 'category_widget'));
    }

    public function cari( request $request){
        $category_widget = Category::all();
        $data = Posts::where('judul', $request->cari)->orWhere('judul', 'like', '%'.$request->cari.'%')->paginate(6);
        return view('blog.list_posts', compact('data', 'category_widget'));
    }
}