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

        if(!$client) {
            abort('403');
        }

        $answers = [];

        foreach($client->quizAnswers as $answer) {
            $answers[$answer->question_number]['key'] = $answer['key'];
            $answers[$answer->question_number]['question'] = $answer['question_text'];
            $answers[$answer->question_number]['answers'][] = $answer['answer'];
        }

        $client->answers = $answers;

        return $client;
    }

    /**
     * @param Client $client
     * @return array
     */
    public function getClientAnswers(Client $client): array
    {
        $answers = [];

        foreach($client->quizAnswers as $answer) {
            $answers[$answer->question_number]['key'] = $answer['key'];
            $answers[$answer->question_number]['question'] = $answer['question_text'];
            $answers[$answer->question_number]['answers'][] = $answer['answer'];
        }

        return $answers;
    }

    public function getBabySummary($code): array
    {
        $client = $this->getClientAnswersByCode($code);

        $code = $client->code;

        $answers = collect($client['answers']);

        $age    = $answers->where('key', 'age')->first();
        $gender = $answers->where('key', 'gender')->first();
        $weight = $answers->where('key', 'weight')->first();

        $gender =  $gender['answers'][0];
        $age = $age['answers'][0];
        $weight = $weight['answers'][0];
        $weight = $weight['answers'][0];

        return  compact('gender', 'age', 'weight', 'code', 'client', 'answers');
    }

    public function getClientByCode($code)
    {
        return $this->clientModel::where('code', $code)->with('quizAnswers')->first();
    }

    public function randomDays(): array
    {
        $randomDay = rand(60, 100);
        $floorDay = floor($randomDay/10)*10;

        return [
            $floorDay - 30,
            $floorDay - 20,
            $floorDay - 10,
            $randomDay,
            $floorDay + 10,
            $floorDay + 20,
            $floorDay + 30,
        ];
    }
}