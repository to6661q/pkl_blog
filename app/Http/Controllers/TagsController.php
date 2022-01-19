<?php
namespace App\Http\Controllers;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create'); 
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|max:20'
        ]);

        $tags = Tags::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back()->with('success','Data tags berita berhasil ditambahkan');
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
        $tags = Tags::findorfail($id);
        return view('admin.tags.edit', compact('tags'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:20'
        ]);

        $tags_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Tags::whereId($id)->update($tags_data);
        return redirect()->route('tags.index')->with('success', 'Data tags berita berhasil diedit');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags = Tags::findorfail($id);
        $tags -> delete();

        return redirect()->back()->with('success', 'Data tags berita berhasil dihapus');
    }
}