<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\Tags;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        $category = Category::all();

        return view('admin.posts.create', compact('category','tags')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();
        
        $posts = Posts::create([
            'judul' => $request->judul,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'gambar' => 'public/uploads/posts/'.$new_gambar,
            'slug' => Str::slug($request->judul),
            'users_id' => Auth::id()
        ]);

        $posts -> tags() -> attach($request->tags);
        $gambar-> move('public/uploads/posts/', $new_gambar);
        return redirect()->back()->with('success','Data postingan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $tags = Tags::all();
        $posts = Posts::findorfail($id);
        
        return view('admin.posts.edit', compact('category', 'posts', 'tags') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);
        
        $posts = Posts::findorfail($id);
       
        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/posts', $new_gambar);
        
            $posts_data = [
                'judul' =>  $request->judul,
                'category_id' =>  $request->category_id,
                'content' => $request->content,
                'gambar' => 'public/uploads/posts/'.$new_gambar,
                'slug' => Str::slug($request->judul)
            ];
        }

        else{
            $posts_data = [
                'judul' =>  $request->judul,
                'category_id' =>  $request->category_id,
                'content' => $request->content,
                'slug' => Str::slug($request->judul)
            ];
        }



        $posts->tags()->sync($request->tags);
        $posts->update($posts_data);
        
        return redirect()->route('posts.index')->with('success', 'Data Post berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Posts::findorfail($id);
        $posts ->delete();
        return redirect()->back()->with('success', 'Data Post berhasil dihapus');
    }

    public function tampil_hapus()
    {
        $posts = Posts::onlyTrashed()->paginate(10);
        return view('admin.posts.hapus', compact('posts'));
    }

    public function restore($id)
    {
        $posts = Posts::withTrashed()->where('id', $id) -> first();
        $posts ->restore();
        
        return redirect()->back()->with('success', 'Data Post berhasil direstore');
    }

    public function kill($id)
    {
        $posts = Posts::withTrashed()->where('id', $id) -> first();
        $posts ->forceDelete();
        
        return redirect()->back()->with('success', 'Data Post Recycle berhasil dihapus permanen');
    }
}