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
                'question' => 'Select your baby’s gender',
                'answers' => [
                    '1' => [
                        'text' => 'BOY',
                        'image' => 'assets/quiz/boy.jpg',
                    ],
                    '2' => [
                        'text' => 'GIRL',
                        'image' => 'assets/quiz/girl.jpg',
                    ],
                ],
                'answer_with_image' => true,
            ],

            '2' => [
                'question_key' => 'age',
                'question' => 'How old is your baby?',
                'answers' => [
                    '1' => ['text' => 'Under 6 months'],
                    '2' => ['text' => '6-8 months'],
                    '3' => ['text' => '8-10 months'],
                    '4' => ['text' => 'Over 10 months'],
                ],
            ],

            '3' => [
                'question_key' => 'weight',
                'question' => "What is your baby's current weight?",
                'answers' => [
                    '1' => ['text' => 'Under 10 pounds'],
                    '2' => ['text' => '10-15 pounds'],
                    '3' => ['text' => '15-20 pounds'],
                    '4' => ['text' => 'Over 20 pounds'],
                ],
            ],

            '4' => [
                'question_key' => 'overall_health',
                'question' => "Your baby's overall health and development?",
                'answers' => [
                    1 => ['text' => 'Healthy and thriving'],
                    2 => ['text' => 'Some health concerns'],
                    3 => ['text' => 'Developmental delays or concerns'],
                ],
            ],

            '5' => [
                'question_key' => 'started_introducing_solids',
                'question' => 'Have you started introducing solids to your infant yet?',
                'answers' => [
                    '1' => ['text' => 'YES'],
                    '2' => ['text' => 'NO']
                ],
                'loader' => [
                    'show' => true,
                    'seconds' => 5500,
                    'text' => 'We are now generating APP Profile Just For You',
                    'file' => 'assets/quiz/animation.mp4',
                ],
            ],


            '6' => [
                'question_key' => 'infant_separate_meals',
                'question' => 'Baby-Led Weaning Preferences',
                'answers' => [
                    '1' => ['text' => 'Separate meals'],
                    '2' => ['text' => 'Family meals'],
                    '3' => ['text' => 'Both'],
                    '4' => ['text' => 'Undecided'],
                ],
            ],

            '7' => [
                'question_key' => 'own_or_pre_made_baby_food',
                'question' => 'Your preferred method for preparing BLW food?',
                'answers' => [
                    '1' => ['text' => 'Make my own'],
                    '2' => ['text' => 'Buy pre-made'],
                    '3' => ['text' => 'Both'],
                    '4' => ['text' => 'Undecided'],
                ],
            ],

            '8' => [
                'question_key' => 'store_and_preserve_baby_food',
                'question' => "How would you like to store and preserve baby's food?",
                'answers' => [
                    '1' => ['text' => 'Refrigerate', 'selected' => false],
                    '2' => ['text' => 'Freeze', 'selected' => false],
                    '3' => ['text' => 'Use within a day', 'selected' => false]
                ],
                'multiple' => true,
                'continue_button' => true,
                'continue_button_text' => 'continue',
            ],

            '9' => [
                'question_key' => 'bulk_and_froze_for_future_use',
                'question' => 'Seeking freezer-friendly bulk meal ideas?',
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Somewhat']
                ],
            ],

            '10' => [
                'question_key' => 'offer_solid_foods',
                'question' => 'How often would you like to offer solid foods to your baby?',
                'answers' => [
                    '1' => ['text' => 'Once a day'],
                    '2' => ['text' => 'Twice a day'],
                    '3' => ['text' => 'Three times a day'],
                    '4' => ['text' => 'Undecided'],
                ],
            ],

            '11' => [
                'question_key' => 'feeding_accessories',
                'question' => 'Which of the following feeding accessories do you plan to use?',
                'answers' => [
                    '1' => ['text' => 'High chair', 'selected' => false],
                    '2' => ['text' => 'Booster seat', 'selected' => false],
                    '3' => ['text' => 'Baby seat', 'selected' => false],
                    '4' => ['text' => 'None', 'selected' => false, 'deselectAll' => true],
                ],
                'multiple' => true,
                'continue_button' => true,
                'continue_button_text' => 'continue',
                'hasDeselectAll' => true,
            ],

            '12' => [
                'question_key' => 'budget_friendly_meal_ideas',
                'question' => 'Looking for meal ideas that are budget-friendly?',
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Somewhat'],
                ],
            ],

            '13' => [
                'question_key' => 'quick_and_easy_to_prepare_meal_ideas',
                'question' => 'Looking for meal ideas that are quick and easy to prepare?',
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Somewhat'],
                ],
            ],

            '14' => [
                'question_key' => 'reactions_to_new_foods',
                'question' => "How would you like to track your baby's food intake and reactions to new foods?",
                'answers' => [
                    '1' => ['text' => 'Keep a journal', 'selected' => false],
                    '2' => ['text' => 'Use a mobile app', 'selected' => false],
                    '3' => ['text' => 'Other', 'selected' => false],
                ],
                'multiple' => true,
                'continue_button' => true,
                'continue_button_text' => 'continue',
            ],

            '15' => [
                'question_key' => 'purees_and_finger_foods',
                'question' => "Interested in incorporating both purees and finger foods into your infant's diet?",
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Undecided'],
                ],
                'loader' => [
                    'show' => true,
                    'seconds' => 5500,
                    'text' => 'We Are Now Generating First Part of Your Meal Plan',
                    'start_file' => 'assets/quiz/animation.mp4',
                ],
                'benefits' => [
                    'text' => 'Benefits of Baby-Led Weaning',
                    'image' => 'assets/quiz/benefit.png',
                    'items' => [
                        'Reduces Allergies',
                        'Leads to Healthier Weight',
                        'Promotes Brain Development',
                        'Builds baby’s confidence',
                        'Saves Money on Purees',
                        'Develops Fine Motor Skills',
                    ]
                ]
            ],

            '16' => [
                'question_key' => 'allergenic_foods',
                'question' => 'Would you like to introduce these foods?',
                'answers' => [
                    '1' => [
                        'text' => 'Peanuts',
                        'image' => 'assets/quiz/slider/peanuts.jpg',
                    ],
                    '2' => [
                        'text' => 'Sesame seeds',
                        'image' => 'assets/quiz/slider/sesame_seeds.jpg',
                    ],
                    '3' => [
                        'text' => 'Soy',
                        'image' => 'assets/quiz/slider/soy.jpg',
                    ],
                    '4' => [
                        'text' => 'Eggs',
                        'image' => 'assets/quiz/slider/eggs.jpg',
                    ],
                    '5' => [
                        'text' => 'Dairy products',
                        'image' => 'assets/quiz/slider/dairy_products.jpg',
                    ],
                ],
                'slider' => true,
                'selectedSlider' => 1,
                'buttons' => [
                    '1' => [
                        'text' => 'NO',
                        'class' => 'btn-no',
                    ],
                    '2' => [
                        'text' => 'UNDECIDED',
                        'class' => 'btn-undecided',
                    ],
                    '3' => [
                        'text' => 'YES',
                        'class' => 'btn-yes',
                    ]
                ],
            ],

            '17' => [
                'question_key' => 'comfortable_preparing_and_cooking_meals',
                'question' => 'How comfortable are you with preparing and cooking meals from scratch?',
                'answers' => [
                    '1' => ['text' => 'Very comfortable'],
                    '2' => ['text' => 'Somewhat comfortable'],
                    '3' => ['text' => 'Not very comfortable'],
                    '4' => ['text' => 'Not at all comfortable'],
                ]
            ],

            '18' => [
                'question_key' => 'reactions_to_new_foods',
                'question' => 'Which of the following cooking methods do you prefer?',
                'answers' => [
                    '1' => ['text' => 'Boiling', 'selected' => false],
                    '2' => ['text' => 'Steaming', 'selected' => false],
                    '3' => ['text' => 'Roasting', 'selected' => false],
                    '4' => ['text' => 'Grilling', 'selected' => false],
                ],
                'multiple' => true,
                'continue_button' => true,
                'continue_button_text' => 'continue',
            ],

            '19' => [
                'question_key' => 'reactions_to_new_foods',
                'question' => "Love it or Hate It? <br> Incorporating different foods into your infant's diet",
                'answers' => [
                    '1' => [
                        'text' => 'Whole grains',
                        'image' => 'assets/quiz/slider/whole_grains.jpg',
                    ],
                    '2' => [
                        'text' => 'Beef',
                        'image' => 'assets/quiz/slider/beef.jpg',
                    ],
                    '3' => [
                        'text' => 'Chicken',
                        'image' => 'assets/quiz/slider/chicken.jpg',
                    ],
                    '4' => [
                        'text' => 'Fish',
                        'image' => 'assets/quiz/slider/fish.jpg',
                    ],
                    '5' => [
                        'text' => 'Garlic',
                        'image' => 'assets/quiz/slider/garlic.jpg',
                    ],
                    '6' => [
                        'text' => 'Ginger',
                        'image' => 'assets/quiz/slider/ginger.jpg',
                    ],
                ],
                'slider' => true,
                'selectedSlider' => 1,
                'buttons' => [
                    '1' => [
                        'text' => 'NO',
                        'class' => 'btn-no',
                    ],
                    '2' => [
                        'text' => 'UNDECIDED',
                        'class' => 'btn-undecided',
                    ],
                    '3' => [
                        'text' => 'YES',
                        'class' => 'btn-yes',
                    ]
                ],
            ],

            '20' => [
                'question_key' => 'end',
                'question' => 'We are now generating Your Final Meal Plan and App Profile!',
                'answers' => [
                    '1' => [
                        'percent' => '30',
                        'text' => 'text 1',
                        'image' => 'assets/quiz/slider/chicken.jpg',
                    ],
                    '2' => [
                        'percent' => '60',
                        'text' => 'text 2',
                        'image' => 'assets/quiz/slider/final_image.jpg',
                    ],
                    '3' => [
                        'percent' => '100',
                        'text' => 'text 3',
                        'image' => 'assets/quiz/slider/fish.jpg',
                    ]
                ],
                'progress_slider' => true,
                'selectedSlider' => 1,
                'seconds' => 3,
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
        usleep(200000);
        
        if ($this->currentQuestionNum == $this->registrationStepNum) {
            return false;
        }

        $this->setQuestionAnswer($answer);

        $this->currentQuestionNum++;

        $result = $this->checkSlideNumber();

        if (!$result) {
            return false;
        }

        if ($this->currentQuestionNum !== $this->registrationStepNum && !empty($this->quizQuestions[$this->currentQuestionNum])) {
            $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];
        }

        $this->dispatchBrowserEvent('next-click', ['currentQuestionNum' => $this->currentQuestionNum]);

    }

    public function nextSlideRange()
    {
        if ($this->currentQuestionNum == $this->registrationStepNum) {
            return false;
        }
    }

    public function prevSlide()
    {
        $this->currentQuestionNum--;

        $this->checkSlideNumber();

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];

        $this->dispatchBrowserEvent('back-click', []);
    }

    public function nextSlideMultiple($answer = null)
    {
        try {
            if ($answer) {

                $currentAnswer = $this->quizQuestions[$this->currentQuestionNum];
                $issetAnswer = isset($this->resultAnswers[$this->currentQuestionNum]);
                $isEmptyCurrentAnswer = empty($this->resultAnswers[$this->currentQuestionNum]['answers'][$answer]);
                $text = $currentAnswer['answers'][$answer]['text'];
                $deselectAll = empty($currentAnswer['answers'][$answer]['deselectAll']);

                $hasDeselectAll = empty($this->quizQuestions[$this->currentQuestionNum]['hasDeselectAll']);
                $issetAnswer = isset($this->resultAnswers[$this->currentQuestionNum]);
                $isEmptyCurrentAnswer = empty($this->resultAnswers[$this->currentQuestionNum]['answers'][$answer]);

                if ($issetAnswer) {

                    if ($isEmptyCurrentAnswer) {
                        $this->resultAnswers[$this->currentQuestionNum]['answers'][$answer] = $text;
                    } else {
                        $this->resultAnswers[$this->currentQuestionNum]['answers'][$answer] = '';
                    }

                } else {

                    $this->resultAnswers[$this->currentQuestionNum] = [
                        'number' => $this->currentQuestionNum,
                        'key' => $currentAnswer['question_key'],
                        'question_text' => $currentAnswer['question'],
                        'answers' => []

                    ];

                    $this->resultAnswers[$this->currentQuestionNum]['answers'][$answer] = $text;
                }

                $checkSelected = $this->quizQuestions[$this->currentQuestionNum]['answers'][$answer]['selected'];

                $this->quizQuestions[$this->currentQuestionNum]['answers'][$answer]['selected'] = !$checkSelected;

                if (!$deselectAll) {
                    $this->deselectMultipleAnswers($answer);

                } elseif (!$hasDeselectAll) {
                    //var_dump($checkSelected)
                    $this->deselectNoneMultipleAnswers();
                }

                $this->dispatchBrowserEvent('answer-selected', [
                    'number' => $answer,
                    'key' => $currentAnswer['question_key'],
                    'question_text' => $currentAnswer['question'],
                    'answers' => $this->quizQuestions[$this->currentQuestionNum]['answers']
                ]);

            }
        } catch (\Exception $tr) {

        }
    }

    public function deselectMultipleAnswers($answer)
    {
        $question = $this->quizQuestions[$this->currentQuestionNum];

        foreach ($question['answers'] as $key => $item) {
            if ($key !== $answer) {
                $this->quizQuestions[$this->currentQuestionNum]['answers'][$key]['selected'] = false;
            }

        }

        $this->resultAnswers[$this->currentQuestionNum]['answers'] = [];
        $this->resultAnswers[$this->currentQuestionNum]['answers'][$answer] = 'none';
    }

    public function deselectNoneMultipleAnswers()
    {
        $question = $this->quizQuestions[$this->currentQuestionNum];

        $deselectKey = 0;

        foreach ($question['answers'] as $key => $item) {
            if (!empty($item['deselectAll'])) {
                $deselectKey = $key;
                $this->quizQuestions[$this->currentQuestionNum]['answers'][$key]['selected'] = false;
            }

        }

        $this->resultAnswers[$this->currentQuestionNum]['answers'][$deselectKey] = '';
    }

    public function setQuestionAnswer($answer)
    {
        try {

            if ($answer) {

                $currentAnswer = $this->quizQuestions[$this->currentQuestionNum];

                $text = $currentAnswer['answers'][$answer]['text'];
                $answer_num = $answer;

                $this->resultAnswers[$this->currentQuestionNum] = [
                    'number' => $this->currentQuestionNum,
                    'key' => $currentAnswer['question_key'],
                    'question_text' => $currentAnswer['question'],
                    'answer' => $text,
                    'answer_num' => $answer_num,
                ];

                foreach ($this->quizQuestions[$this->currentQuestionNum]['answers'] as $key => $item) {
                    $this->quizQuestions[$this->currentQuestionNum]['answers'][$key]['selected'] = false;
                }

                $this->quizQuestions[$this->currentQuestionNum]['answers'][$answer]['selected'] = true;

            }
        } catch (\Throwable $th) {
        }
    }

    public function checkSlideNumber()
    {
        if ($this->currentQuestionNum == $this->registrationStepNum) {
            $this->createClient();
            return false;
        }

        if ($this->currentQuestionNum > $this->countQuestions) {
            $this->currentQuestionNum = $this->countQuestions;
        }

        if (!$this->currentQuestionNum) {
            $this->currentQuestionNum = 1;
        }

        return true;
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

            if (empty($answer['answers'])) {
                $data = [
                    'client_id' => $client->id,
                    'question_number' => $answer['number'],
                    'key' => $answer['key'],
                    'question_text' => $answer['question_text'],
                    'answer' => $answer['answer'],
                    'answer_number' => $answer['answer_num'],
                ];

                QuizAnswers::create($data);

            } else {
                $data = [
                    'client_id' => $client->id,
                    'question_number' => $answer['number'],
                    'key' => $answer['key'],
                    'question_text' => $answer['question_text'],
                ];

                foreach ($answer['answers'] as $key => $value) {
                    if ($value) {
                        $data['answer'] = $value;
                        $data['answer_number'] = $key;

                        QuizAnswers::create($data);
                    }
                }
            }
        }


        $this->redirect('/summary/' . $client->code);
    }

    public function setCurrentSlider(int $value)
    {
        $this->currentQuestion['selectedSlider'] = $value;

        $this->dispatchBrowserEvent('slider-selected', [
            'selected' => $value
        ]);

        if ($value > count($this->currentQuestion['answers'])) {
            $this->nextSlide(1);
        }
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}