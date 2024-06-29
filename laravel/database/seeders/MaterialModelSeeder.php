<?php

namespace Database\Seeders;

use App\Models\ClothesModel;
use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'red',
            'orange',
            'yellow',
            'green',
            'blue',
            'purple',
            'pink',
            'brown',
        ];

        $randColor = function () use ($colors) {
            return $colors[array_rand($colors, 1)];
        };
        //Clothes models
        $blazer = ClothesModel::firstWhere('name', '=', 'blazer');
        $sweater = ClothesModel::firstWhere('name', '=', 'sweater');
        $dress = ClothesModel::firstWhere('name', '=', 'dress');
        $trousers = ClothesModel::firstWhere('name', '=', 'trousers');
        $jeans = ClothesModel::firstWhere('name', '=', 'jeans');
        $hat = ClothesModel::firstWhere('name', '=', 'hat');


        // Maetrials
        $cotton = Material::firstWhere('name', '=', 'cotton');
        $silk = Material::firstWhere('name', '=', 'silk');
        $linen = Material::firstWhere('name', '=', 'linen');
        $wool = Material::firstWhere('name', '=', 'wool');
        $synthetics = Material::firstWhere('name', '=', 'synthetics');

        $blazer->materials()->attach([
            $cotton->id => ['color' => $randColor()],
            $synthetics->id => ['color' => $randColor()],
            $wool->id => ['color' => $randColor()],
        ]);

        $sweater->materials()->attach([
            $wool->id => ['color' => $randColor()],
            $synthetics->id => ['color' => $randColor()],
        ]);
        $dress->materials()->attach([
            $silk->id => ['color' => $randColor()],
            $cotton->id => ['color' => $randColor()],
        ]);
        $trousers->materials()->attach([
            $cotton->id => ['color' => $randColor()],
            $synthetics->id => ['color' => $randColor()],
            $wool->id => ['color' => $randColor()],
        ]);
        $jeans->materials()->attach([
            $linen->id => ['color' => $randColor()],
            $cotton->id => ['color' => $randColor()],
        ]);
        $hat->materials()->attach([
            $cotton->id => ['color' => $randColor()],
            $linen->id => ['color' => $randColor()],
            $wool->id => ['color' => $randColor()],
            $synthetics->id => ['color' => $randColor()],
        ]);
    }
}
