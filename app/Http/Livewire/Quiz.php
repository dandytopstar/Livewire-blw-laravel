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
                'question' => 'Select your baby’s gender.',
                'answers' => [
                    [
                        'text' => 'Boy',
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ],
                    [
                        'text' => 'Girl',
                        'image'  => 'front/assets/images/quiz/girl.png',
                    ],
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => true, 'continue_button' => false,
            ],
            '2' => [
                'question_key' => 'familiar_with_blw',
                'question' => 'How familiar are you with BLW?',
                'answers' => [
                    [
                        'text' => 'What is it?',
                        'image'  => '',
                    ],
                    [
                        'text' => 'I’ve heard a thing or two.',
                        'image'  => '',
                    ],
                    [
                        'text' => 'I know everything!',
                        'image'  => '',
                    ],
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '3' => [
                'question_key' => 'text_section',
                'question' => '',
                'answers' => [
                    [
                        'text' => '',
                        'image'  => '',
                    ]
                ],
                'section_text' => 'Here we will show what is baby led weaning, we will add text here',
                'section_image' => 'front/assets/images/quiz/can_your_baby_sit.png',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '4' => [
                'question_key' => 'age',
                'question' => 'How old is your baby?',
                'answers' => [
                    [
                        'text' => 'Younger than 4 months',
                        'image'  => '',
                    ],
                    [
                        'text' => '4-6 months',
                        'image'  => '',
                    ],
                    [
                        'text' => '6 months or older',
                        'image'  => '',
                    ],
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '5' => [
                'question_key' => 'can_sit',
                'question' => 'Can your baby sit without any support?',
                'answers' => [
                    [
                        'text' => 'yes',
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ],
                    [
                        'text' => 'no',
                        'image'  => 'front/assets/images/quiz/boy.png',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '6' => [
                'question_key' => 'can_grab',
                'question' => 'Can your baby grab things by himself? ',
                'answers' => [
                    [
                        'text' => 'yes',
                        'image'  => '',
                    ],
                    [
                        'text' => 'no',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '7' => [
                'question_key' => 'can_put_things',
                'question' => 'Is you baby putting things in his mouth instinctively?',
                'answers' => [
                    [
                        'text' => 'yes',
                        'image'  => '',
                    ],
                    [
                        'text' => 'no',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '8' => [
                'question_key' => 'can_put_food',
                'question' => '⦁Is you baby putting food in his mouth instinctively?',
                'answers' => [
                    [
                        'text' => 'yes',
                        'image'  => '',
                    ],
                    [
                        'text' => 'no',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '9' => [
                'question_key' => 'can_chew',
                'question' => 'Is you baby performing chewing movements with for ex. toys ? ',
                'answers' => [
                    [
                        'text' => 'yes',
                        'image'  => '',
                    ],
                    [
                        'text' => 'no',
                        'image'  => '',
                    ],
                    [
                        'text' => 'not sure',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '10' => [
                'question_key' => 'gagging',
                'question' => 'Is your baby gagging anytime?',
                'answers' => [
                    [
                        'text' => 'yes',
                        'image'  => '',
                    ],
                    [
                        'text' => 'no',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '11' => [
                'question_key' => 'allergies',
                'question' => 'Does your baby have any allergies?',
                'answers' => [
                    [
                        'text' => 'yes',
                        'image'  => '',
                    ],
                    [
                        'text' => 'no',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '12' => [
                'question_key' => 'foods_prefer',
                'question' => 'Do you prefer not to eat any of these foods? ',
                'answers' => [
                    [
                        'text' => 'carrots',
                        'image'  => '',
                    ],
                    [
                        'text' => 'apples',
                        'image'  => '',
                    ],
                    [
                        'text' => 'bananas',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => true, 'answer_with_image' => false, 'continue_button' => false,
            ],
            '13' => [
                'question_key' => 'vegetarian',
                'question' => 'Are you a vegetarian?',
                'answers' => [
                    [
                        'text' => 'carrots',
                        'image'  => '',
                    ],
                    [
                        'text' => 'apples',
                        'image'  => '',
                    ]
                ],
                'section_text' => '',
                'section_image' => '',
                'continue_button_text' => 'continue',
                'multiple' => false, 'answer_with_image' => false, 'continue_button' => false,
            ],
        ];

        $this->countQuestions = count($this->quizQuestions);

        $this->currentQuestionNum = 1;

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
