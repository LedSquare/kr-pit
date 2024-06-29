<?php

namespace Database\Seeders;

use Database\Factories\MaterialFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaterialFactory::new()->create([
            'name' => 'cotton',
            'durability' => 'medium',
        ]);

        MaterialFactory::new()->create([
            'name' => 'silk',
            'durability' => 'high',
        ]);

        MaterialFactory::new()->create([
            'name' => 'linen',
            'durability' => 'high',
        ]);

        MaterialFactory::new()->create([
            'name' => 'wool',
            'durability' => 'low',
        ]);

        MaterialFactory::new()->create([
            'name' => 'synthetics',
            'durability' => 'medium',
        ]);
    }
}
