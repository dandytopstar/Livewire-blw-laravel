<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuizAnswers extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'question_number',
        'answer_number',
        'key',
        'question_text',
        'answer',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
