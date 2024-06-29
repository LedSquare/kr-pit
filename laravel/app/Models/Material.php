<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';
    protected $fillable = [
        'name',
        'durability',
    ];
    protected $casts = [];
    public $timestamps = false;

    public function clothesModels(): BelongsToMany
    {
        return $this->belongsToMany(ClothesModel::class, 'clothes_model_materials');
    }
}
