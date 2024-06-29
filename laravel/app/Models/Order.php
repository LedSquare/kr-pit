<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'client_id',
        'clothes_model_id',
        'completion_date',
        'status',
        'final_price',
    ];
    protected $casts = [
        'status' => 'boolean',
        'client_id' => 'integer',
        'clothes_model_id' => 'integer',
        'completion_date' => 'date',
    ];
    public $timestamps = false;


    public function clothesModel(): BelongsTo
    {
        return $this->belongsTo(ClothesModel::class, 'order_id');
    }

    public function prepaids(): HasOne
    {
        return $this->hasOne(Prepaid::class, 'order_id');
    }

    public function fitingDates(): HasMany
    {
        return $this->hasMany(FittingDate::class, 'order_id');
    }


    public function calculateFinalPrice(): float
    {

        return 1;
    }
}
