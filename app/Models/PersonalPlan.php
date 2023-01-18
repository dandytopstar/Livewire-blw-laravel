<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PersonalPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'billed_period',
        'billed_price',
        'billed_price_old',
        'payment_period',
        'payment_price',
        'payment_price_old',
        'enabled',
        'discount',
        'stripe_id',
        'paypal_id',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
