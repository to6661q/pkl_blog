<?php

namespace App\Http\Controllers;

use App\Models\Profilposts;
use App\Models\Profilcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class ProfilpostsController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profilposts = Profilposts::paginate(10);
        return view('admin.profilposts.index', compact('profilposts'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profilcategory = Profilcategory::all();

        return view('admin.profilposts.create', compact('profilcategory')); 
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'profiljudul' => 'required',
            'profilcategory_id' => 'required',
            'profilcontent' => 'required',
            'profilgambar' => 'required'
        ]);

        $profilgambar = $request->profilgambar;
        $profilnew_gambar = time().$profilgambar->getClientOriginalName();
        
        $profilposts = Profilposts::create([
            'profiljudul' => $request->profiljudul,
            'profilcategory_id' => $request->profilcategory_id,
            'profilcontent' => $request->profilcontent,
            'profilgambar' => 'public/uploads/profilposts/'.$profilnew_gambar,
            'slug' => Str::slug($request->profiljudul),
            'users_id' => Auth::id()
        ]);

        $profilgambar-> move('public/uploads/profilposts/', $profilnew_gambar);
        return redirect()->back()->with('success','Data postingan profil berhasil ditambahkan');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profilcategory = Profilcategory::all();
        $profilposts = Profilposts::findorfail($id);
        
        return view('admin.profilposts.edit', compact('profilcategory', 'profilposts') );
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'profiljudul' => 'required',
            'profilcategory_id' => 'required',
            'profilcontent' => 'required'
        ]);
        
        $profilposts = Profilposts::findorfail($id);
       
        if ($request->has('profilgambar')) {
            $profilgambar = $request->profilgambar;
            $profilnew_gambar = time().$profilgambar->getClientOriginalName();
            $profilgambar->move('public/uploads/profilposts', $profilnew_gambar);
        
            $profilposts_data = [
                'profiljudul' =>  $request->profiljudul,
                'profilcategory_id' =>  $request->profilcategory_id,
                'profilcontent' => $request->profilcontent,
                'profilgambar' => 'public/uploads/profilposts/'.$profilnew_gambar,
                'slug' => Str::slug($request->profiljudul)
            ];
        }

        else{
            $profilposts_data = [
                'profiljudul' =>  $request->profiljudul,
                'profilcategory_id' =>  $request->profilcategory_id,
                'profilcontent' => $request->profilcontent,
                'slug' => Str::slug($request->profiljudul)
            ];
        }

        $profilposts->update($profilposts_data);
        
        return redirect()->route('profilposts.index')->with('success', 'Data postingan profil berhasil diedit');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profilposts = Profilposts::findorfail($id);
        $profilposts ->delete();
        return redirect()->back()->with('success', 'Data postingan profil berhasil dihapus');
    }

    public function tampil_hapus()
    {
        $profilposts = Profilposts::onlyTrashed()->paginate(10);
        return view('admin.profilposts.hapus', compact('profilposts'));
    }

    public function restore($id)
    {
        $profilposts = Profilposts::withTrashed()->where('id', $id) -> first();
        $profilposts ->restore();
        
        return redirect()->back()->with('success', 'Data postingan profil berhasil direstore');
    }

    public function kill($id)
    {
        $profilposts = Profilposts::withTrashed()->where('id', $id) -> first();
        $profilposts ->forceDelete();
        
        return redirect()->back()->with('success', 'Data recycle postingan profil berhasil dihapus permanen');
    }
    
}