<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostsCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'kategori' => 'khusus'
        ]);
        
        DB::table('categories')->insert([
            'kategori' => 'umum'
        ]);
    }
}
