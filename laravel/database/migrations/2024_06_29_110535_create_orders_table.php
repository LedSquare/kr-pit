<?php

use App\Models\Client;
use App\Models\ClothesModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class, 'client_id', );
            $table->foreignIdFor(ClothesModel::class, 'clothes_model_id');
            $table->date('completion_date');
            $table->boolean('status');
            $table->float('final_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
