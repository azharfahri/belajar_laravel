<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_produk','harga','stok','id_kategori','cover'];
    public $timestamp = true;

    public function kategori (){
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/produk'. $this->cover))){
            return unlink(public_path('images/produk'. $this->cover));
        }
    }
}
