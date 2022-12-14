<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Import UserSeeder
        $this->call(UserSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CategorySeeder::class);

    }
}
