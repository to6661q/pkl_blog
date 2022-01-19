<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::paginate(10);
        return view('admin.category.index', compact('category'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'namec' => 'required|min:3'
        ]);

        $category = Category::create([
            'namec' => $request->namec,
            'slug' => Str::slug($request->namec)
        ]);
        return redirect()->back()->with('success','Data kategori berita berhasil ditambahkan');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findorfail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'namec' => 'required|min:3'
        ]);

        $category_data = [
            'namec' => $request->namec,
            'slug' => Str::slug($request->namec)
        ];

        Category::whereId($id)->update($category_data);
        return redirect()->route('category.index')->with('success', 'Data kategori berita berhasil diedit');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findorfail($id);
        $category -> delete();

        return redirect()->back()->with('success', 'Data kategori berita berhasil dihapus');
    }
}