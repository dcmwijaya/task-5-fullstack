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
            'user_id' => '1',
            'categories_name' => 'khusus'
        ]);
        
        DB::table('categories')->insert([
            'user_id' => '2',
            'categories_name' => 'umum'
        ]);
    }
}
