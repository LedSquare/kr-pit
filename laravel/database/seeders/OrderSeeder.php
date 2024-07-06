<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\ClothesModel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = Client::all();
        $models = ClothesModel::all();
        $arr_models = $models->toArray();
        $statuses = collect([true, false]);
        foreach ($clients as $client) {
            $numbersOfOrders = rand(1, 4);
            for ($i = 0; $i <= $numbersOfOrders; $i++) {
                $model = $models[array_rand($arr_models)];
                $client->orders()->create([
                    'clothes_model_id' => $model->id,
                    'completion_date' => Carbon::now()->addDays(rand(5, 14)),
                    'status' => $statuses->random(1)[0],
                    'final_price' => $model->price,
                ]);
            }
        }


    }
}
