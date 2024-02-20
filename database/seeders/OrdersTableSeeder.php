<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customer_id' => 1, // Assuming the customer with ID 1 exists in the 'customers' table
                'total_price' => 100.00,
                'number' => 'ORD-001',
                'status' => 'pending',
                'shipping_price' => 10.00,
                'notes' => 'Order 1 notes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2, // Assuming the customer with ID 2 exists in the 'customers' table
                'total_price' => 200.00,
                'number' => 'ORD-002',
                'status' => 'completed',
                'shipping_price' => 15.00,
                'notes' => 'Order 2 notes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more order records following the same structure
        ]);
    }
}
