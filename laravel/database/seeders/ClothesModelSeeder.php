<?php

namespace Database\Seeders;

use Database\Factories\ClothesModelFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClothesModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClothesModelFactory::new()->create([
            'price' => 4500,
            'name' => 'blazer',
        ]);

        ClothesModelFactory::new()->create([
            'price' => 3000,
            'name' => 'sweater',
        ]);

        ClothesModelFactory::new()->create([
            'price' => 7000,
            'name' => 'dress',
        ]);

        ClothesModelFactory::new()->create([
            'price' => 7000,
            'name' => 'trousers',
        ]);

        ClothesModelFactory::new()->create([
            'price' => 7000,
            'name' => 'jeans',
        ]);

        ClothesModelFactory::new()->create([
            'price' => 1500,
            'name' => 'hat',
        ]);

    }
}
