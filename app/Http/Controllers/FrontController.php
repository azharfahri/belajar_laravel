<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\kategori;

class FrontController extends Controller
{
    public function index(){
        $produk = produk::all();
        return view('welcome', compact('produk'));
    }
    
    public function show($id)
    {
        $produk =produk::FindOrFail($id);
        $kategori = kategori::all();
        return view('lihat.detail', compact('produk','kategori'));
    }
}
