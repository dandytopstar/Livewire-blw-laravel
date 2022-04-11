<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Quiz extends Component
{
    public array $quizQuestions;

    public int $countQuestions;

    public int $currentQuestionNum;

    public array $currentQuestion = [];

    public array $resultAnswers = [];

    public function mount()
    {
        $this->quizQuestions = [
            '1' => [
                'question_key' => 'gender',
                'question' => trans('front.question_1'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_1_1'),
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ],
                    '2' => [
                        'text' => trans('front.answer_1_2'),
                        'image'  => 'front/assets/images/quiz/girl.png',
                    ],
                ],
                'section_text' => trans('front.section_text_1'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_1'),
                'multiple' => false, 'answer_with_image' => true, 'continue_button' => false, 'has_answers' => true,
            ],
            '2' => [
                'question_key' => 'familiar_with_blw',
                'question' => trans('front.question_2'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_2_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_2_2'),
                        'image'  => '',
                    ],
                    '3' => [
                        'text' => trans('front.answer_2_3'),
                        'image'  => '',
                    ],
                ],
                'section_text' => trans('front.section_text_2'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_2'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '3' => [
                'question_key' => 'text_section',
                'question' => trans('front.question_3'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_3_1'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_3'),
                'section_image' => 'front/assets/images/quiz/can_your_baby_sit.png',
                'continue_button_text' => trans('front.continue_button_text_3'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => true, 'has_answers' => false,
            ],
            '4' => [
                'question_key' => 'age',
                'question' => trans('front.question_4'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_4_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_4_1'),
                        'image'  => '',
                    ],
                    '3' => [
                        'text' => trans('front.answer_4_1'),
                        'image'  => '',
                    ],
                ],
                'section_text' => trans('front.section_text_4'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_4'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '5' => [
                'question_key' => 'can_sit',
                'question' => trans('front.question_5'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_5_1'),
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ],
                    '2' => [
                        'text' => trans('front.answer_5_2'),
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ]
                ],
                'section_text' => trans('front.section_text_5'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_5'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '6' => [
                'question_key' => 'can_grab',
                'question' => trans('front.question_6'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_6_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_6_2'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_6'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_6'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '7' => [
                'question_key' => 'can_put_things',
                'question' => trans('front.question_7'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_7_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_7_2'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_7'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_7'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '8' => [
                'question_key' => 'can_put_food',
                'question' => trans('front.question_8'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_8_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_8_2'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_8'),
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '9' => [
                'question_key' => 'can_chew',
                'question' => trans('front.question_9'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_9_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_9_2'),
                        'image'  => '',
                    ],
                    '3' => [
                        'text' => trans('front.answer_9_3'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_9'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_9'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '10' => [
                'question_key' => 'gagging',
                'question' => trans('front.question_10'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_10_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_10_2'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_10'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_10'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '11' => [
                'question_key' => 'allergies',
                'question' => trans('front.question_11'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_11_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_11_2'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_11'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_11'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '12' => [
                'question_key' => 'foods_prefer',
                'question' => trans('front.question_12'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_12_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_12_2'),
                        'image'  => '',
                    ],
                    '3' => [
                        'text' => trans('front.answer_12_3'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_12'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_12'),
                'multiple' => true, 'answer_with_image' => false, 'continue_button' => true, 'has_answers' => true,
            ],
            '13' => [
                'question_key' => 'vegetarian',
                'question' => trans('front.question_13'),
                'answers' => [
                    '1' => [
                        'text' => trans('front.answer_13_1'),
                        'image'  => '',
                    ],
                    '2' => [
                        'text' => trans('front.answer_13_2'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_13'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_13'),
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
        ];

        $this->countQuestions = count($this->quizQuestions);

        $this->currentQuestionNum = 1;

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
    }

    public function nextSlide($answer = null)
    {
        $this->setQuestionAnswer($answer);

        $this->currentQuestionNum++;

        $this->checkSlideNumber();

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
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

        }
    }

    public function setQuestionAnswer($answer)
    {
        if($answer) {

            $currentAnswer = $this->quizQuestions[$this->currentQuestionNum];
            $text = $currentAnswer['answers'][$answer]['text'];

            $this->resultAnswers[$this->currentQuestionNum] = [
                'number' => $this->currentQuestionNum,
                'key' => $currentAnswer['question_key'],
                'answer' => $text
            ];
        }
    }

    public function checkSlideNumber()
    {
        if($this->currentQuestionNum > $this->countQuestions) {
            $this->currentQuestionNum = $this->countQuestions;
        }

        if(!$this->currentQuestionNum) {
            $this->currentQuestionNum = 1;
        }
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
