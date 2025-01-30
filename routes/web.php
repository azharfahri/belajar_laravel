<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenerbitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\TransaksiController;
use App\Models\Barang;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/home',function (){
    return 'Selamat Datang Di Halaman Homep';
}
);

route::get('/about',function (){
    return 'Selamat Datang Di Halaman About';
}
);

route::get('/contact',function (){
    return 'Selamat Datang Di Halaman Contact';
}
);

route::get('/tes/{nama}/{lahir}/{jk}/{agama}/{alamat}', function($nama,$tgllahir,$jk,$agama,$alamat){
    return "Nama : ". $nama . 
    "<br>Tanggal lahir : " . $tgllahir. 
    "<br>Jenis Kelamin : " . $jk.
    "<br>Agama : " . $agama.
    "<br>Alamat : " . $alamat;   
}
);

route::get('/hitung/{bil1}/{bil2}', function($bil1,$bil2){
    $hasil = $bil1 + $bil2;
    return "Bilangan 1 :". $bil1.
    "<br>Bilangan 2 :" . $bil2.
    "<br>Hasil :". $hasil; 
}
);


//latihan
route::get('/latihan/{nama}/{telepon}/{jenis}/{barang}/{jumlah}/{pembayaran}', function($nama,$telp,$jenis,$namabarang,$jumlah,$pembayaran){
        if ($jenis == "handphone" ) {
            if ($namabarang == "poco") {
                $harga = 3000000;
            }elseif ($namabarang == "samsung") {
                $harga = 5000000;
            }elseif ($namabarang == "iphone") {
                $harga = 15000000;
            }
        }
        
        elseif ($jenis == "laptop") {
            if ($namabarang == "lenovo") {
                $harga = 4000000;
            }elseif ($namabarang == "acer") {
                $harga = 8000000;
            }elseif ($namabarang == "macbook") {
                $harga = 20000000;
            }
        }
        
        
        elseif($jenis == "tv"){
            if ($namabarang == "toshiba") {
                $harga = 5000000;
            }elseif ($namabarang == "samsung") {
                $harga = 8000000;
            }elseif ($namabarang == "lg") {
                $harga = 10000000;
            }else {
                $harga = 0;
            }
        }

        $total = $jumlah * $harga;
        
        if ($total > 10000000) {
            $cashback = 500000;
        }else {
            $cashback = 0;
        }

        
        if ($pembayaran == "transfer") {
            $potongan = 50000;
        }else {
            $potongan = 0;
        }

        $totalbayar = $total - $potongan - $cashback; 
    
    return "Nama Pembeli :" . $nama . "<br>" .
    "Telepon : " . $telp . "<br><hr>".
    "Jenis Barang :" . $jenis . "<br>" .
    "Nama Barang : " . $namabarang . "<br>".
    "Harga :" . number_format($harga) . "<br>".
    "Jumlah :" . $jumlah . "<br><hr>" .
    "Total : ". number_format($total) . "<br>" .
    "Cashback :". number_format($cashback) . "<br>".
    "Pembayaran : " . $pembayaran . "<br>". 
    "Potongan :". number_format($potongan) . "<br>" . 
    "Total Pembayaran :" . number_format($totalbayar)  ;
});



route::get('/siswa',function (){
    $data_siswa = ['Pari','Keyndra','Raisa','Kiki','Azhar','Agus'];
    return view('tampil',compact('data_siswa'));
}
);

route::get('/post',[PostsController::class, 'menampilkan']);

route::get('/barang',[PostsController::class, 'barang']);

Route::resource('siswa', SiswasController::class);

Route::resource('ppdb', PpdbsController::class);

Route::resource('pengguna', PenggunaController::class);

Route::resource('telepon', TeleponController::class);

Route::resource('kategori', KategoriController::class);

Route::resource('produk', ProdukController::class);

Route::resource('product', ProductController::class);

Route::resource('customer', CustomerController::class);

Route::resource('order', OrderController::class);

Route::resource('penerbit', PenerbitController::class);

Route::resource('genre', GenreController::class);

Route::resource('buku', BukuController::class);

Route::resource('pembeli', PembeliController::class);

Route::resource('transaksi', TransaksiController::class);

// route::get('/barang',function (){
//     $barang = Barang::where('nama_barang','like','%Laptop%')->get();
//     return view('barang',compact('barang'));
// }
// );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

