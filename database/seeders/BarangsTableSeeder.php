<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Laptop','merk'=>'Lenovo','harga'=>'600'],
            ['nama_barang'=>'Laptop','merk'=>'Advan','harga'=>'750'],
            ['nama_barang'=>'Tv','merk'=>'Samsung','harga'=>'200'],
            ['nama_barang'=>'Handphone','merk'=>'Iphone','harga'=>'100'],
            ['nama_barang'=>'Laptop','merk'=>'HP','harga'=>'90']
            
        ];
        DB::table('barangs')->insert($barangs);
    }
}
