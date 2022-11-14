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
            'user_id' => '1',
            'category_id' => '2',
            'title' => 'Liburan Bali 2018',
            'image' => 'img/media/holiday1.jpg',
            'content' => 'Liburan pertama yang menyenangkan ~ Bali, Indonesia'
        ]);

        DB::table('posts')->insert([
            'user_id' => '2',
            'category_id' => '2',
            'title' => 'Liburan Bali 2020',
            'image' => 'img/media/holiday2.jpg',
            'content' => 'Liburan kedua yang menyenangkan ~ Bali, Indonesia'
        ]);

        DB::table('posts')->insert([
            'user_id' => '3',
            'category_id' => '2',
            'title' => 'Liburan Bali 2022',
            'image' => 'img/media/holiday3.jpg',
            'content' => 'Liburan ketiga yang menyenangkan ~ Bali, Indonesia'
        ]);
    }
}
