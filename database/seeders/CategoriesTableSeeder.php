<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Category 1',
                'slug' => 'category-1',
                'parent_id' => null,
                'is_visible' => true,
                'description' => 'Category 1 description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Category 2',
                'slug' => 'category-2',
                'parent_id' => null,
                'is_visible' => true,
                'description' => 'Category 2 description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Subcategory 1',
                'slug' => 'subcategory-1',
                'parent_id' => 1, // Assuming the parent category has an ID of 1
                'is_visible' => true,
                'description' => 'Subcategory 1 description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Subcategory 2',
                'slug' => 'subcategory-2',
                'parent_id' => 1, // Assuming the parent category has an ID of 1
                'is_visible' => true,
                'description' => 'Subcategory 2 description',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
