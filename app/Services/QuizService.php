<?php

namespace App\Services;

use App\Models\Client;

class QuizService
{
    private Client $clientModel;

    public function __construct(Client $clientModel)
    {
        $this->clientModel = $clientModel;
    }

    public function getClientAnswersByCode($code)
    {
        $client = $this->clientModel::where('code', $code)->with('quizAnswers')->first();

        $answers = [];

        foreach($client->quizAnswers as $answer) {

            $answers[$answer->question_number]['key'] = $answer['key'];
            $answers[$answer->question_number]['question_number'] = $answer['question_number'];
            $answers[$answer->question_number]['question_translation_key'] = 'question_'.$answer->question_number;

            if(empty($answer['answer_number'])) {
                $answers[$answer->question_number]['result'] = $answer['answer'];
                continue;
            }

            $answers[$answer->question_number]['answers'][$answer['answer_number']]['answer_number'] = $answer['answer_number'];
            $answers[$answer->question_number]['answers'][$answer['answer_number']]['answer'] = $answer['answer'];
            $answers[$answer->question_number]['answers'][$answer['answer_number']]['answer_translation_key'] = 'answer_'.$answer->question_number.'_'.$answer['answer_number'];

        }

        $client->answers = $answers;

        return $client;
    }

    public function getBabySummary($code): array
    {
        $client = $this->getClientAnswersByCode($code);

        $code = $client->code;

        $answers = collect($client['answers']);

        $age    = $answers->where('key', 'age')->first();
        $gender = $answers->where('key', 'gender')->first();
        $weight = $answers->where('key', 'weight')->first();

        $gender =  trans('front.'.$gender['answers'][$gender['question_number']]['answer_translation_key']);
        $age = $age['result'].' months';
        $weight = $weight['result'].' lbs';

        return  compact('gender', 'age', 'weight', 'code', 'client');
    }

    public function getClientByCode($code)
    {
        return $this->clientModel::where('code', $code)->with('quizAnswers')->first();
    }
}