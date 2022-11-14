<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersPosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'gambarkonten' => 'img/media/holiday1.jpg',
            'konten' => 'Liburan pertama yang menyenangkan ~ Bali, Indonesia'
        ]);

        DB::table('posts')->insert([
            'gambarkonten' => 'img/media/holiday2.jpg',
            'konten' => 'Liburan kedua yang menyenangkan ~ Bali, Indonesia'
        ]);

        DB::table('posts')->insert([
            'gambarkonten' => 'img/media/holiday3.jpg',
            'konten' => 'Liburan ketiga yang menyenangkan ~ Bali, Indonesia'
        ]);
    }
}
