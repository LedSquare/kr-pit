<?php

use App\Models\ClothesModel;
use App\Models\Material;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clothes_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
        });

        Schema::create('clothes_model_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ClothesModel::class, 'clothes_model_id');
            $table->foreignIdFor(Material::class, 'material_id');
            $table->string('color');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes_models');
    }
};
