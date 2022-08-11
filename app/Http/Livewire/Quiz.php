<?php

namespace App\Http\Livewire;

use App\Enums\PaymentStatus;
use App\Enums\UnitSystem;
use App\Models\Client;
use App\Models\QuizAnswers;
use Illuminate\Support\Str;
use Livewire\Component;

class Quiz extends Component
{
    public array $quizQuestions;

    public int $countQuestions;

    public int $currentQuestionNum;

    public int $registrationStepNum;

    public array $currentQuestion = [];

    public array $resultAnswers = [];

    public array $clientRegistrationData;

    public array $countQuestionsDots;

    public int $rangeData = 1;

    public function mount()
    {
        $this->quizQuestions = [
            '1' => [
                'question_key' => 'gender',
                'question' => trans('front.question_1'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_1_1'),
                        'image'  => 'images/boy_queshions.png',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_1_2'),
                        'image'  => 'images/girl_queshions.png',
                        'selected'  => false,
                    ],
                ],
                'section_text' => trans('front.section_text_1'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_1'),
                'multiple' => false, 'answer_with_image' => true, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '2' => [
                'question_key' => 'familiar_with_blw',
                'question' => trans('front.question_2'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_2_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_2_2'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => trans('front.answer_2_3'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                ],
                'section_text' => trans('front.section_text_2'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_2'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '3' => [
                'question_key' => 'text_section',
                'question' => trans('front.question_3'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_3_1'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_3'),
                'section_image' => 'images/girl_queshions.png',
                'continue_button_text' => trans('front.continue_button_text_3'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => true,
                'has_answers' => false, 'image_before' => false, 'range_slider' => false
            ],
            '4' => [
                'question_key' => 'age',
                'question' => trans('front.question_4'),
                'answers' => [],
                'min' => trans('front.min_4'),
                'max' => trans('front.max_4'),
                'range_name' => trans('front.range_name_4'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_14'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => true,
                'has_answers' => false, 'image_before' => false, 'range_slider' => true
            ],
            '5' => [
                'question_key' => 'can_sit',
                'question' => trans('front.question_5'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_5_1'),
                        'image'  => 'front/assets/images/quiz/quiz_boy.png',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_5_2'),
                        'image'  => 'front/assets/images/quiz/quiz_boy.png',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_5'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_5'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => true,
            ],
            '6' => [
                'question_key' => 'can_grab',
                'question' => trans('front.question_6'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_6_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_6_2'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_6'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_6'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '7' => [
                'question_key' => 'can_put_things',
                'question' => trans('front.question_7'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_7_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_7_2'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_7'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_7'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '8' => [
                'question_key' => 'can_put_food',
                'question' => trans('front.question_8'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_8_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_8_2'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_8'),
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '9' => [
                'question_key' => 'can_chew',
                'question' => trans('front.question_9'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_9_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_9_2'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => trans('front.answer_9_3'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_9'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_9'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '10' => [
                'question_key' => 'gagging',
                'question' => trans('front.question_10'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_10_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_10_2'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_10'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_10'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '11' => [
                'question_key' => 'allergies',
                'question' => trans('front.question_11'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_11_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_11_2'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => trans('front.answer_11_3'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_11'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_11'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '12' => [
                'question_key' => 'foods_prefer',
                'question' => trans('front.question_12'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_12_1'),
                        'image'  => 'images/foods_fish.png',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_12_2'),
                        'image'  => 'images/foods_dairy.png',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => trans('front.answer_12_3'),
                        'image'  => 'images/foods_eggs.png',
                        'selected'  => false,
                    ],
                    '4' => [
                        'text' => trans('front.answer_12_4'),
                        'image'  => 'images/foods_poultry.png',
                        'selected'  => false,
                    ],
                    '5' => [
                        'text' => trans('front.answer_12_5'),
                        'image'  => 'images/foods_beef.png',
                        'selected'  => false,
                    ],
                    '6' => [
                        'text' => trans('front.answer_12_6'),
                        'image'  => 'images/foods_pork.png',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_12'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_12'),
                'multiple' => true, 'answer_with_image' => true, 'continue_button' => true,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '13' => [
                'question_key' => 'vegetarian',
                'question' => trans('front.question_13'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_13_1'),
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_13_2'),
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => trans('front.section_text_13'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_13'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false
            ],
            '14' => [
                'question_key' => 'weight',
                'question' => trans('front.question_14'),
                'answers' => [],
                'min' => trans('front.min_14'),
                'max' => trans('front.max_14'),
                'range_name' => trans('front.range_name_14'),
                'section_text' => trans('front.section_text_14'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_14'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => true,
                'has_answers' => false, 'image_before' => false, 'range_slider' => true
            ],
        ];

        $this->clientRegistrationData = [
            'name' => '',
            'email' => '',
            'additional_infos' => '',
        ];

        $this->countQuestions = count($this->quizQuestions);

        $this->currentQuestionNum = 1;

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];

        $this->registrationStepNum = $this->countQuestions + 1;
        
        $this->countQuestionsDots = range(1, $this->countQuestions);
    }

    public function dehydrate()
    {

    }

    public function nextSlide($answer = null)
    {
        if($this->currentQuestionNum == $this->registrationStepNum) {
            return false;
        }

        $this->setQuestionAnswer($answer);

        $this->currentQuestionNum++;

        $this->checkSlideNumber();

        if($this->currentQuestionNum !== $this->registrationStepNum && !empty($this->quizQuestions[$this->currentQuestionNum])) {
            $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
        }
    }

    public function nextSlideRange()
    {
        if($this->currentQuestionNum == $this->registrationStepNum) {
            return false;
        }
    }

    public function prevSlide()
    {
        $this->currentQuestionNum--;

        $this->checkSlideNumber();

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
    }

    public function nextSlideMultiple($answer = null)
    {
        if($answer) {

            $currentAnswer = $this->quizQuestions[$this->currentQuestionNum];
            $text = $currentAnswer['answers'][$answer]['text'];

            if(isset($this->resultAnswers[$this->currentQuestionNum])) {

                if(empty($this->resultAnswers[$this->currentQuestionNum]['answers'][$answer])) {
                    $this->resultAnswers[$this->currentQuestionNum]['answers'][$answer] = $text;
                } else {
                    $this->resultAnswers[$this->currentQuestionNum]['answers'][$answer] = '';
                }

            } else {

                $this->resultAnswers[$this->currentQuestionNum] = [
                    'number' => $this->currentQuestionNum,
                    'key' => $currentAnswer['question_key'],
                    'answers' => []
                ];

                $this->resultAnswers[$this->currentQuestionNum]['answers'][$answer] = $text;
            }

            $checkSelected =$this->quizQuestions[$this->currentQuestionNum]['answers'][$answer]['selected'];

            $this->quizQuestions[$this->currentQuestionNum]['answers'][$answer]['selected'] = !$checkSelected;

            $this->dispatchBrowserEvent('answer-selected', [
                'number' => $answer,
                'key' => $currentAnswer['question_key'],
                'answers' => $this->quizQuestions[$this->currentQuestionNum]['answers']
            ]);

        }
    }

    public function setQuestionAnswer($answer)
    {
        if($answer) {

            $currentAnswer = $this->quizQuestions[$this->currentQuestionNum];

            if(!empty($currentAnswer['range_slider'])) {
                $text = $answer;
                $answer_num = 0;
                $this->rangeData = 1;
            } else {
                $text = $currentAnswer['answers'][$answer]['text'];
                $answer_num = $answer;
            }

            $this->resultAnswers[$this->currentQuestionNum] = [
                'number' => $this->currentQuestionNum,
                'key' => $currentAnswer['question_key'],
                'answer' => $text,
                'answer_num' => $answer_num,
            ];

            if(!empty($currentAnswer['range_slider'])) {
                $this->quizQuestions[$this->currentQuestionNum]['result'] = $text;
            } else {
                foreach ($this->quizQuestions[$this->currentQuestionNum]['answers'] as $key => $item) {
                    $this->quizQuestions[$this->currentQuestionNum]['answers'][$key]['selected'] = false;
                }

                $this->quizQuestions[$this->currentQuestionNum]['answers'][$answer]['selected'] = true;
            }
        }
    }

    public function checkSlideNumber()
    {
        if($this->currentQuestionNum == $this->registrationStepNum) {
            return false;
        }

        if($this->currentQuestionNum > $this->countQuestions) {
            $this->currentQuestionNum = $this->countQuestions;
        }

        if(!$this->currentQuestionNum) {
            $this->currentQuestionNum = 1;
        }
    }

    public function createClient()
    {
        $client = Client::create([
            'name' => $this->clientRegistrationData['name'],
            'email' => $this->clientRegistrationData['email'],
            'country' => '',
            'code' => Str::uuid(),
            'payment_method' => '',
            'status' => PaymentStatus::FREE,
            'unit_system' => UnitSystem::METRIC,
            'additional_infos' => $this->clientRegistrationData['additional_infos'],
        ]);

        foreach ($this->resultAnswers as $answer) {

            if(empty($answer['answers'])) {
                $data = [
                    'client_id' => $client->id,
                    'question_number' => $answer['number'],
                    'key' => $answer['key'],
                    'answer' => $answer['answer'],
                    'answer_number' => $answer['answer_num'],
                ];

                QuizAnswers::create($data);

            } else {
                $data = [
                    'client_id' => $client->id,
                    'question_number' => $answer['number'],
                    'key' => $answer['key'],
                ];

                foreach ($answer['answers'] as $key => $value) {
                    if($value) {
                        $data['answer'] = $value;
                        $data['answer_number'] = $key;

                        QuizAnswers::create($data);
                    }
                }
            }
        }


        $this->redirect('/quiz-result/'.$client->code);
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
