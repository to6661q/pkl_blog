<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumen = Dokumen::paginate(10);
        return view('admin.dokumen.index', compact('dokumen'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokumen = Dokumen::all();
        return view('admin.dokumen.create', compact('dokumen')); 
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'keterangan' => 'required',
            'file' => 'required'
        ]);

        $file = $request->file;
        $new_file = time().$file->getClientOriginalName();
        
        $dokumen = Dokumen::create([
            'keterangan' => $request->keterangan,
            'file' => 'public/uploads/dokumen/'.$new_file
        ]);

        $file-> move('public/uploads/dokumen/', $new_file);
        return redirect()->back()->with('success','Data dokumen berhasil ditambahkan');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokumen = Dokumen::findorfail($id);
        
        return view('admin.dokumen.edit', compact('dokumen') );
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'keterangan' => 'required',
            'file' => 'required'
        ]);
        
        $dokumen = Dokumen::findorfail($id);
       
        if ($request->has('file')) {
            $file = $request->file;
            $new_file = time().$file->getClientOriginalName();
            $file->move('public/uploads/dokumen', $new_file);
        
            $dokumen_data = [
                'keterangan' =>  $request->keterangan,
                'file' => 'public/uploads/dokumen/'.$new_file,
            ];
        }

        else{
            $dokumen_data = [
                'keterangan' =>  $request->keterangan,

            ];
        }

        $dokumen->update($dokumen_data);
        
        return redirect()->route('dokumen.index')->with('success', 'Data dokumen berhasil diedit');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokumen = Dokumen::findorfail($id);
        $dokumen ->delete();
        return redirect()->back()->with('success', 'Data dokumen berhasil dihapus');
    }

    public function tampil_hapus()
    {
        $dokumen = Dokumen::onlyTrashed()->paginate(10);
        return view('admin.dokumen.hapus', compact('dokumen'));
    }

    public function restore($id)
    {
        $dokumen = Dokumen::withTrashed()->where('id', $id) -> first();
        $dokumen ->restore();
        
        return redirect()->back()->with('success', 'Data dokumen berhasil direstore');
    }

    public function kill($id)
    {
        $dokumen = Dokumen::withTrashed()->where('id', $id) -> first();
        $dokumen ->forceDelete();
        
        return redirect()->back()->with('success', 'Data recycle dokumen berhasil dihapus permanen');
    }
    public function tampil_dokumen()
    {
        $dokumen = Dokumen::paginate(10);
        return view('dokumen.tampil_dokumen', compact('dokumen'));
    }
    
}