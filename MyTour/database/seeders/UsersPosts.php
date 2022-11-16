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
            'title' => 'Acara Keluarga di Bali 2018',
            'image' => 'img/media/holiday1.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'title' => 'Acara Reuni di Bali 2020',
            'image' => 'img/media/holiday2.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'title' => 'Agenda Kerja di Bali 2022',
            'image' => 'img/media/holiday3.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'title' => 'Kunjungan Kerja Dubes Indonesia di Korea Selatan 2022',
            'image' => 'img/media/holiday4.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '2',
            'category_id' => '2',
            'title' => 'Liburan di Namsan Tower Korea Selatan 2022',
            'image' => 'img/media/holiday5.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '2',
            'category_id' => '1',
            'title' => 'Studi Banding Ilmu Teknologi di Korea Selatan 2022',
            'image' => 'img/media/holiday6.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '2',
            'category_id' => '1',
            'title' => 'Pengadaan Barang di Tokyo Jepang 2022',
            'image' => 'img/media/holiday7.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '2',
            'category_id' => '2',
            'title' => 'Festival Hwangnyeongsan Azalea di Korea Selatan 2022',
            'image' => 'img/media/holiday8.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '3',
            'category_id' => '2',
            'title' => 'Liburan di Pantai Aragusuku Jepang 2022',
            'image' => 'img/media/holiday9.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '3',
            'category_id' => '1',
            'title' => 'Kunjungan Kerja di Dubai 2022',
            'image' => 'img/media/holiday10.jpg',
            'content' => 'Perjalanan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '3',
            'category_id' => '2',
            'title' => 'Liburan di Pulau Palm Jumeirah Dubai 2022',
            'image' => 'img/media/holiday11.jpg',
            'content' => 'Liburan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);

        DB::table('posts')->insert([
            'user_id' => '3',
            'category_id' => '1',
            'title' => 'Kunjungan Kerja di Beijing Tiongkok 2022',
            'image' => 'img/media/holiday12.jpg',
            'content' => 'Liburan ini sangat menyenangkan sekali, buruan gabung sini gaes :)'
        ]);
    }
}
