<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public static $seeders = [];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ksort(self::$seeders);
        foreach (self::$seeders as $seeder) {
            $this->call($seeder);
        }
        //        Category::fixTree();
    }
}
