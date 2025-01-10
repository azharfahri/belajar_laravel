<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ppdb;

class PpdbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $ppdb = ppdb::all();
        return view('ppdb.index', compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdb = new Ppdb;
        $ppdb->nama_lengkap = $request->nama ;
        $ppdb->jenis_kelamin = $request->jeniskelamin ;
        $ppdb->agama = $request->agama ;
        $ppdb->alamat = $request->alamat ;
        $ppdb->telepon = $request->telepon ;
        $ppdb->asal_sekolah = $request->asalsekolah ;
        $ppdb->save();

        return redirect()->route('ppdb.index')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb =ppdb::FindOrFail($id);
        return view('ppdb.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb =ppdb::FindOrFail($id);
        return view('ppdb.edit', compact('ppdb'));
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
        $ppdb = ppdb::findorfail($id);
        $ppdb->nama_lengkap = $request->nama ;
        $ppdb->jenis_kelamin = $request->jeniskelamin ;
        $ppdb->agama = $request->agama ;
        $ppdb->alamat = $request->alamat ;
        $ppdb->telepon = $request->telepon ;
        $ppdb->asal_sekolah = $request->asalsekolah ;
        $ppdb->save();

        return redirect()->route('ppdb.index')->with('success','Data Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdb = ppdb::findOrFail($id);
        $ppdb->delete();
        return redirect()->route('ppdb.index')->with('success','Data Berhasil Dihapus');
    }
}
