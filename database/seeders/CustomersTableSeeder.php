<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '123456789',
                'date_of_birth' => '1990-01-01',
                'address' => '123 Main St',
                'zip_code' => '12345',
                'city' => 'New York',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone' => '987654321',
                'date_of_birth' => '1992-03-15',
                'address' => '456 Elm St',
                'zip_code' => '54321',
                'city' => 'Los Angeles',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more customer records following the same structure
        ]);
    }
}
