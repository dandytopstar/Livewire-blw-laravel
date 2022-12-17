<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
