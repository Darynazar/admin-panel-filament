<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Brand 1',
                'slug' => 'brand-1',
                'url' => 'https://example.com/brand-1',
                'primary_hex' => '#FF0000',
                'is_visible' => true,
                'description' => 'Brand 1 description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brand 2',
                'slug' => 'brand-2',
                'url' => 'https://example.com/brand-2',
                'primary_hex' => '#00FF00',
                'is_visible' => true,
                'description' => 'Brand 2 description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more brand records following the same structure
        ]);
    }
}
