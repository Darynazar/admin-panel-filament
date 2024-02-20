<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 1, // Assuming the order with ID 1 exists in the 'orders' table
                'product_id' => 1, // Assuming the product with ID 1 exists in the 'products' table
                'unit_price' => 10.00,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1, // Assuming the order with ID 1 exists in the 'orders' table
                'product_id' => 2, // Assuming the product with ID 2 exists in the 'products' table
                'unit_price' => 20.00,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more order item records following the same structure
        ]);
    }
}
