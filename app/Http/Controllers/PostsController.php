<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\Post;


class PostsController extends Controller
{
    public function menampilkan(){
        $post = Post::all();
        return view('tampil_post',compact('post'));
    }
    public function barang(){
        $barang = Barang::all();
        return view('barang',compact('barang'));
    }
}
