<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'client_code',
        'card_no',
        'card_name',
        'price',
        'plan',
        'method',
        'status',
    ];
}
