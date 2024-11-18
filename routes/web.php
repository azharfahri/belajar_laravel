<?php

use Illuminate\Support\Facades\Route;

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