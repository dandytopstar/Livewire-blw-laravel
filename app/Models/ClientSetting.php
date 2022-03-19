<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSetting extends Model
{
    use HasFactory;

    protected $table = 'client_settings';

    protected $fillable = [
        'client_id',
        'field',
        'value'
    ];

    public function client() {
        return $this->belongsTo('App\Client');
    }

    public function returnTranslatedQuizAnswer() : array
    {
        //clientSettings
        $questionId = $this->field;

        $answerValue = $this->value;

        //Some answers have delimiter ; to separate multiple values
        $values = explode(';',$answerValue);

        //for multiple answers create array
        $result = [];

        foreach ($values as $value) {
            $result[] = trans("quiz.{$questionId}a{$value}");
        }

        return $result;
    }
}
