<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'kelas' => 'required',
            'cover' => 'required',
        ]);
        $siswa = new Siswa;
        $siswa->nis = $request->nis ;
        $siswa->nama = $request->nama ;
        $siswa->jenis_kelamin = $request->jeniskelamin ;
        $siswa->kelas = $request->kelas ;
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/siswa', $name);
            $siswa->cover = $name;
        }
        $siswa->save();

        return redirect()->route('siswa.index')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa =Siswa::FindOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa =Siswa::FindOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jeniskelamin' => 'required',
            'kelas' => 'required',
            'cover' => 'required',
        ]);
        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis ;
        $siswa->nama = $request->nama ;
        $siswa->jenis_kelamin = $request->jeniskelamin ;
        $siswa->kelas = $request->kelas ;

        if ($request->hasFile('cover')) {
            $siswa->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/siswa', $name);
            $siswa->cover = $name;
        }
        $siswa->save();

        return redirect()->route('siswa.index')->with('success','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success','Data Berhasil Dihapus');
    }
}
