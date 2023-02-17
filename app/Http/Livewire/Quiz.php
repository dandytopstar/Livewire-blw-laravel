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

    public string $rangeData = '1';

    public function mount()
    {
        $this->quizQuestions = [
            '1' => [
                'question_key' => 'gender',
                'question' => trans('front.question_1'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_1_1'),
                        'image'  => 'assets/quiz/boy.jpg',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => trans('front.answer_1_2'),
                        'image'  => 'assets/quiz/girl.jpg',
                        'selected'  => false,
                    ],
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => '',
                'multiple' => false, 'answer_with_image' => true, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'left',
                'bottom_image_name' => 'bg-quizz-1.png',
                'bottom_image_adaptive' => '',
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
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'right',
                'bottom_image_name' => 'bg-quizz-2.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-2.png',
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
                'has_answers' => false, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'right',
                'bottom_image_name' => 'bg-quizz-2.png',
                'bottom_image_adaptive' => '',
            ],

            '4' => [
                'question_key' => 'tried_blw',
                'question' => 'Have you ever tried Baby-Led Weaning?',
                'answers' => [
                    '1' => [
                        'text' => 'yes',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => 'no',
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_14'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'right',
                'bottom_image_name' => 'bg-quizz-3.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-3.png',
            ],

            '5' => [
                'question_key' => 'age',
                'question' => 'How old is your baby?',
                'answers' => [
                    '1' => [
                        'text' => 'Younger than 4 months',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => '4 to 12 months old',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => '12 months or older',
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_14'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'right',
                'bottom_image_name' => 'bg-quizz-3.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-3.png',
            ],

            '6' => [
                'question_key' => 'can_sit',
                'question' => 'Can your baby sit without any support?',
                'answers' => [
                    '1' => [
                        'text' => 'yes',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => 'no',
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'left',
                'bottom_image_name' => 'bg-quizz-4.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-4.png',
            ],

            '7' => [
                'question_key' => 'can_grab',
                'question' => 'Can your baby grab things by themselves?',
                'answers' => [
                    '1' => [
                        'text' => 'yes',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => 'no',
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => '', 'section_image' => '', 'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'right',
                'bottom_image_name' => 'bg-quizz-5.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-5.png',
            ],

            '8' => [
                'question_key' => 'can_put_things',
                'question' => 'Is your baby putting things in their mouth instinctively?',
                'answers' => [
                    '1' => [
                        'text' => 'yes',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => 'no',
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => '', 'section_image' => '', 'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'left',
                'bottom_image_name' => 'bg-quizz-6.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-6.png',
            ],

            '9' => [
                'question_key' => 'can_chew',
                'question' => 'Is you baby performing chewing movements with for ex. toys?',
                'answers' => [
                    '1' => [
                        'text' => 'yes',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => 'no',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => 'not sure',
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => '', 'section_image' => '', 'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'right',
                'bottom_image_name' => 'bg-quizz-2.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-2.png',
            ],

            '10' => [
                'question_key' => 'foods_prefer',
                'question' => 'Do you wish to exclude any of these foods?',
                'answers' => [
                    '1' => [
                        'text' => 'fish',
                        'image'  => 'assets/quiz/meal-1.png',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => 'dairy',
                        'image'  => 'assets/quiz/meal-2.png',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => 'eggs',
                        'image'  => 'assets/quiz/meal-3.png',
                        'selected'  => false,
                    ],
                    '4' => [
                        'text' => 'poultry',
                        'image'  => 'assets/quiz/meal-4.png',
                        'selected'  => false,
                    ],
                    '5' => [
                        'text' => 'beef',
                        'image'  => 'assets/quiz/meal-5.png',
                        'selected'  => false,
                    ],
                    '6' => [
                        'text' => 'pork',
                        'image'  => 'assets/quiz/meal-6.png',
                        'selected'  => false,
                    ]
                ],
                'section_text' => '', 'section_image' => '', 'continue_button_text' => 'continue',
                'multiple' => true, 'answer_with_image' => true, 'continue_button' => true,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'left',
                'bottom_image_name' => 'bg-quizz-7.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-2.png',
            ],

            '11' => [
                'question_key' => 'weight',
                'question' => 'What is your baby’s weight?',
                'answers' => [
                    '1' => [
                        'text' => 'less than 14 lbs',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '2' => [
                        'text' => '14 lbs - 22 lbs',
                        'image'  => '',
                        'selected'  => false,
                    ],
                    '3' => [
                        'text' => '22 lbs and more',
                        'image'  => '',
                        'selected'  => false,
                    ]
                ],
                'section_text' => '', 'section_image' => '', 'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
                'has_answers' => true, 'image_before' => false, 'range_slider' => false,
                'bottom_image' => true, 'bottom_image_position' => 'right',
                'bottom_image_name' => 'bg-quizz-2.png',
                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-2.png',
            ],

//            '9' => [
//                'question_key' => 'weight',
//                'question' => 'What is your baby’s weight?',
//                'answers' => [],
//                'min' => '1',
//                'max' => '',
//                'range_name' => 'lbs',
//                'section_text' => '', 'section_image' => '', 'continue_button_text' => 'continue',
//                'multiple' => false, 'answer_with_image' => false, 'continue_button' => true,
//                'has_answers' => false, 'image_before' => false, 'range_slider' => true, 'input' => true,
//                'bottom_image' => true, 'bottom_image_position' => 'left',
//                'bottom_image_name' => 'bg-quizz-1.png',
//                'bottom_image_adaptive' => 'assets/bg-images/bg-image-adaptive-5.png',
//            ],
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
            $this->createClient();
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


        $this->redirect('/summary/'.$client->code);
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
