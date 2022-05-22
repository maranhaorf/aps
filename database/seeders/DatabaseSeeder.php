<?php

namespace Database\Seeders;

use App\Models\Incendio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            IncendioSeeder::class,
            // ProductsTableSeeder::class,
        ]);
    }
}
