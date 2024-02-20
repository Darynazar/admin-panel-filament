<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'brand_id' => 1,
                'name' => 'Product 1',
                'slug' => 'product-1',
                'sku' => 'P001',
                'image' => 'product1.jpg',
                'description' => 'This is product 1.',
                'quantity' => 10,
                'price' => 9.99,
                'is_visible' => true,
                'is_featured' => false,
                'type' => 'deliverable',
                'publish_at' => '2024-02-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 1,
                'name' => 'Product 2',
                'slug' => 'product-2',
                'sku' => 'P002',
                'image' => 'product2.jpg',
                'description' => 'This is product 2.',
                'quantity' => 5,
                'price' => 19.99,
                'is_visible' => true,
                'is_featured' => true,
                'type' => 'deliverable',
                'publish_at' => '2024-02-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add two more records following the same structure
            [
                'brand_id' => 2,
                'name' => 'Product 3',
                'slug' => 'product-3',
                'sku' => 'P003',
                'image' => 'product3.jpg',
                'description' => 'This is product 3.',
                'quantity' => 3,
                'price' => 14.99,
                'is_visible' => true,
                'is_featured' => false,
                'type' => 'deliverable',
                'publish_at' => '2024-02-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand_id' => 2,
                'name' => 'Product 4',
                'slug' => 'product-4',
                'sku' => 'P004',
                'image' => 'product4.jpg',
                'description' => 'This is product 4.',
                'quantity' => 8,
                'price' => 24.99,
                'is_visible' => true,
                'is_featured' => true,
                'type' => 'deliverable',
                'publish_at' => '2024-02-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
