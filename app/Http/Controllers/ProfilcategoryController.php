<?php

namespace App\Http\Controllers;

use App\Models\Profilcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfilcategoryController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profilcategory = Profilcategory::paginate(10);
        return view('admin.profilcategory.index', compact('profilcategory'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profilcategory.create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'profilnamec' => 'required|min:3'
        ]);

        $profilcategory = Profilcategory::create([
            'profilnamec' => $request->profilnamec,
            'slug' => Str::slug($request->profilnamec)
        ]);
        return redirect()->back()->with('success','Data kategori postingan profil berhasil ditambahkan');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profilcategory = Profilcategory::findorfail($id);
        return view('admin.profilcategory.edit', compact('profilcategory'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'profilnamec' => 'required|min:3'
        ]);

        $profilcategory_data = [
            'profilnamec' => $request->profilnamec,
            'slug' => Str::slug($request->profilnamec)
        ];

        Profilcategory::whereId($id)->update($profilcategory_data);
        return redirect()->route('profilcategory.index')->with('success', 'Data kategori postingan profil berhasil diedit');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profilcategory = Profilcategory::findorfail($id);
        $profilcategory -> delete();

        return redirect()->back()->with('success', 'Data kategori postingan profil berhasil dihapus');
    }
    
}