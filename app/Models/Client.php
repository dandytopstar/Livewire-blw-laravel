<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function quizAnswers(): HasMany
    {
        return $this->hasMany(QuizAnswers::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
