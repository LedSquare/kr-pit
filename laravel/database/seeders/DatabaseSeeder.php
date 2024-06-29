<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ClientSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClientSeeder::class,
            MaterialSeeder::class,
            ClothesModelSeeder::class,
            MaterialModelSeeder::class,
            // OrderSeeder::class,
            // FitingDateSeeder::class,
            // PrepaidSeeder::class,
        ]);
    }
}
