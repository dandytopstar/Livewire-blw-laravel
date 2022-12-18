<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'personal_plan_id',
        'price',
        'method',
        'status',
        'payment_data',
    ];

    protected $casts = [
        'payment_data' => 'array'
    ];

    public function personalPlan(): BelongsTo
    {
        return $this->belongsTo(PersonalPlan::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
