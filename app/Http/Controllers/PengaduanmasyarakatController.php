<?php

namespace App\Http\Controllers;
use App\Models\Pengaduanmasyarakat;
use Illuminate\Http\Request;

class PengaduanmasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduanmasyarakat = Pengaduanmasyarakat::paginate(10);
        return view('admin.pengaduanmasyarakat.index', compact('pengaduanmasyarakat'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengaduanmasyarakat.create'); 
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required',
            'pengaduancontent' => 'required'
        ]);
        
        $pengaduanmasyarakat = Pengaduanmasyarakat::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pengaduancontent' => $request->pengaduancontent
        ]);

        return redirect()->back()->with('success','Data pengaduan masyarakat berhasil ditambahkan');
    }

}