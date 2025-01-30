<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penerbit;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.create', compact('penerbit','genre'));
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
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'cover'=>'required',
            'id_penerbit' => 'required',
            'tanggal_terbit' => 'required',
            'id_genre' => 'required',
        ]);
        $buku = new buku();
        $buku->nama_buku = $request->nama_buku ;
        $buku->harga = $request->harga ;
        $buku->stok = $request->stok ;
        if ($request->hasFile('cover')) {
            $buku->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->cover = $name;
        }
        $buku->id_penerbit = $request->id_penerbit ;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre ;
        
        $buku->save();

        return redirect()->route('buku.index')->with('success','Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::all();
        $buku = Buku::findorfail($id);
        $genre = Genre::all();
        return view('buku.show', compact('penerbit','genre','buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = Penerbit::all();
        $buku = Buku::findorfail($id);
        $genre = Genre::all();
        return view('buku.edit', compact('penerbit','genre','buku'));
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
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'cover'=>'required',
            'id_penerbit' => 'required',
            'tanggal_terbit' => 'required',
            'id_genre' => 'required',
        ]);
        $buku = buku::findOrFail($id);
        $buku->nama_buku = $request->nama_buku ;
        $buku->harga = $request->harga ;
        $buku->stok = $request->stok ;
        if ($request->hasFile('cover')) {
            $buku->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->cover = $name;
        }
        $buku->id_penerbit = $request->id_penerbit ;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre ;       
        $buku->save();

        return redirect()->route('buku.index')->with('success','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success','Data Berhasil Dihapus');
    }
}
