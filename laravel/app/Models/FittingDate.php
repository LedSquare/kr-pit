<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FittingDate extends Model
{
    use HasFactory;

    protected $table = 'fitting_dates';
    protected $fillable = [
        'order_id',
        'date',
    ];
    protected $casts = [
        'order_id' => 'integer',
        'date' => 'date',
    ];

    public $timestamps = false;

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

}
