<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Anastasya Geraldine',
            'jenis_kelamin' => 'P',
            'pekerjaan' => 'Pegawai Negeri',
            'tinggal' => 'Surabaya',
            'image' => 'img\profile\admin.jpg',
            'role' => 'admin',
            'email' => 'admin@mytour.ac.id',
            'password' => bcrypt('456123')
        ]);

        DB::table('users')->insert([
            'name' => 'Andikha Refanza',
            'jenis_kelamin' => 'L',
            'pekerjaan' => 'Pegawai Swasta',
            'tinggal' => 'Jakarta',
            'image' => 'img\profile\user.jpg',
            'role' => 'user',
            'email' => 'user1@mytour.ac.id',
            'password' => bcrypt('456123')
        ]);

        DB::table('users')->insert([
            'name' => 'Alfiansyah Nukita Prada',
            'jenis_kelamin' => 'N',
            'pekerjaan' => 'Mahasiswa',
            'tinggal' => 'Bandung',
            'image' => 'img\profile\default.jpg',
            'role' => 'user',
            'email' => 'user2@mytour.ac.id',
            'password' => bcrypt('456123')
        ]);
    }
}
