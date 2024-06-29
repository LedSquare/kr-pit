<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prepaid extends Model
{
    use HasFactory;

    protected $table = 'prepaids';

    protected $fillable = [
        'order_id',
        'price',
    ];

    protected $casts = [
        'order_id' => 'integer',
        'price' => 'float',
    ];
    public $timestamps = false;

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
