<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Quiz extends Component
{
    public array $quizQuestions;

    public int $countQuestions;

    public int $currentQuestionNum;

    public array $currentQuestion;

    public function mount()
    {
        $this->quizQuestions = [
            '1' => [
                'question_key' => 'gender',
                'question' => trans('front.question_1'),
                'answers' => [
                    [
                        'text' => trans('front.answer_1_1'),
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ],
                    [
                        'text' => trans('front.answer_1_1'),
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
                    [
                        'text' => trans('front.answer_2_1'),
                        'image'  => '',
                    ],
                    [
                        'text' => trans('front.answer_2_2'),
                        'image'  => '',
                    ],
                    [
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
                    [
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
                    [
                        'text' => trans('front.answer_4_1'),
                        'image'  => '',
                    ],
                    [
                        'text' => trans('front.answer_4_1'),
                        'image'  => '',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_5_1'),
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_6_1'),
                        'image'  => '',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_7_1'),
                        'image'  => '',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_8_1'),
                        'image'  => '',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_9_1'),
                        'image'  => '',
                    ],
                    [
                        'text' => trans('front.answer_9_2'),
                        'image'  => '',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_10_1'),
                        'image'  => '',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_11_1'),
                        'image'  => '',
                    ],
                    [
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
                    [
                        'text' => trans('front.answer_12_1'),
                        'image'  => '',
                    ],
                    [
                        'text' => trans('front.answer_12_2'),
                        'image'  => '',
                    ],
                    [
                        'text' => trans('front.answer_12_3'),
                        'image'  => '',
                    ]
                ],
                'section_text' => trans('front.section_text_12'),
                'section_image' => '',
                'continue_button_text' => trans('front.continue_button_text_12'),
                'multiple' => true, 'answer_with_image' => false, 'continue_button' => false, 'has_answers' => true,
            ],
            '13' => [
                'question_key' => 'vegetarian',
                'question' => trans('front.question_13'),
                'answers' => [
                    [
                        'text' => trans('front.answer_13_1'),
                        'image'  => '',
                    ],
                    [
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

    public function nextSlide()
    {
        $this->currentQuestionNum++;

        if($this->currentQuestionNum > $this->countQuestions) {
            $this->currentQuestionNum = $this->countQuestions;
        }

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
    }

    public function prevSlide()
    {
        $this->currentQuestionNum--;

        if(!$this->currentQuestionNum) {
            $this->currentQuestionNum = 1;
        }

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
