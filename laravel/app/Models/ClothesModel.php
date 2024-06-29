<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ClothesModel extends Model
{
    use HasFactory;

    protected $table = 'clothes_models';
    protected $fillable = [
        'price',
        'name',
    ];
    protected $casts = [
        'price' => 'float',
    ];
    public $timestamps = false;

    public function materials(): BelongsToMany
    {
        return $this->belongsToMany(Material::class, 'clothes_model_materials');
    }

}
