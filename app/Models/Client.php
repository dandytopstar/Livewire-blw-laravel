<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country',
        'code',
        'payment_method',
        'status',
        'unit_system',
        'additional_infos',
    ];
}
