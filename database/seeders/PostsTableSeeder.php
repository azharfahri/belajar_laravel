<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Kaya','content'=>'ngepet'],
            ['title'=>'Settingan Gaming Hp','content'=>'Beli Iphone'],
            ['title'=>'Pc Gaming','content'=>'Pasang Mobilador'],
            ['title'=>'Tips Cepat soleh','content'=>'sholat'],
            ['title'=>'Tips Terkenal','content'=>'streaming']
        ];
        DB::table('posts')->insert($posts);
    }
}
