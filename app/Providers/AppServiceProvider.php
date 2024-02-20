<?php

namespace App\Providers;

use Database\Seeders\BrandsTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\CustomersTableSeeder;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\OrderItemsTableSeeder;
use Database\Seeders\OrdersTableSeeder;
use Database\Seeders\ProductsTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        DatabaseSeeder::$seeders[1] = UsersTableSeeder::class;
        DatabaseSeeder::$seeders[2] = CategoriesTableSeeder::class;
        DatabaseSeeder::$seeders[3] = BrandsTableSeeder::class;
        DatabaseSeeder::$seeders[4] = ProductsTableSeeder::class;
        DatabaseSeeder::$seeders[5] = CustomersTableSeeder::class;
        DatabaseSeeder::$seeders[6] = OrdersTableSeeder::class;
        DatabaseSeeder::$seeders[7] = OrderItemsTableSeeder::class;

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
