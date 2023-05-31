<?php

namespace App\Http\Livewire;

use App\Enums\PaymentStatus;
use App\Enums\UnitSystem;
use App\Models\Client;
use App\Models\QuizAnswers;
use Illuminate\Support\Str;
use Livewire\Component;

class Bookquiz extends Component
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
                'question_key' => 'age',
                'question' => 'How old is your baby?',
                'answers' => [
                    '1' => ['text' => 'Under 6 months'],
                    '2' => ['text' => '6-8 months'],
                    '3' => ['text' => '8-10 months'],
                    '4' => ['text' => 'Over 10 months'],
                ],
            ],

            '2' => [
                'question_key' => 'weight',
                'question' => "What is your baby's current weight?",
                'answers' => [
                    '1' => ['text' => 'Under 10 pounds'],
                    '2' => ['text' => '10-15 pounds'],
                    '3' => ['text' => '15-20 pounds'],
                    '4' => ['text' => 'Over 20 pounds'],
                ],
            ],

            '3' => [
                'question_key' => 'overall_health',
                'question' => "Your baby's overall health and development",
                'answers' => [
                    1 => ['text' => 'Healthy and thriving'],
                    2 => ['text' => 'Some health concerns'],
                    3 => ['text' => 'Developmental delays or concerns'],
                ],
            ],

            '4' => [
                'question_key' => 'current_feeding_routine',
                'question' => "Your baby's current feeding routine",
                'answers' => [
                    '1' => ['text' => 'Exclusively breastfed'],
                    '2' => ['text' => 'Exclusively formula-fed'],
                    '3' => ['text' => 'A combination of breast milk and formula']
                ],
            ],

            '5' => [
                'question_key' => 'breastfeed',
                'question' => 'How long do you plan to breastfeed or provide formula to your baby?',
                'answers' => [
                    '1' => ['text' => '6 months'],
                    '2' => ['text' => '9 months'],
                    '3' => ['text' => '12 months'],
                    '4' => ['text' => 'Over 12 months'],
                ],
            ],

            '6' => [
                'question_key' => 'started_introducing_solids',
                'question' => 'Have you started introducing solids to your infant yet?',
                'answers' => [
                    '1' => ['text' => 'YES'],
                    '2' => ['text' => 'NO']
                ],
                'loader' => [
                    'show' => true,
                    'seconds' => 5500,
                    'text' => 'We are now generating APP Profile Just For Your Book',
                    'file' => 'assets/quiz/animation.mp4',
                ],
            ],

            '7' => [
                'question' => 'What is Baby-Led Weaning?',
                'answers' => [],
                'text' => "Baby-led weaning is a method of introducing solid foods that involves letting babies <br> feed themselves with soft, age-appropriate foods. It promotes self-regulation of <br> appetite and fine motor skill development.",
                'continue_button' => true,
                'continue_button_text' => 'continue',
            ],

            '8' => [
                'question_key' => 'infant_separate_meals',
                'question' => 'Baby Meal Preferences',
                'answers' => [
                    '1' => ['text' => 'Separate meals'],
                    '2' => ['text' => 'Family meals'],
                    '3' => ['text' => 'Both'],
                    '4' => ['text' => 'Undecided'],
                ],
            ],

            '9' => [
                'question_key' => 'own_or_pre_made_baby_food',
                'question' => 'Do you prefer to make your own baby food or buy pre-made baby food?',
                'answers' => [
                    '1' => ['text' => 'Make my own'],
                    '2' => ['text' => 'Buy pre-made'],
                    '3' => ['text' => 'Both'],
                    '4' => ['text' => 'Undecided'],
                ],
            ],

            '10' => [
                'question_key' => 'store_and_preserve_baby_food',
                'question' => "How do you plan to store and preserve baby's food?",
                'answers' => [
                    '1' => ['text' => 'Refrigerate', 'selected' => false],
                    '2' => ['text' => 'Freeze', 'selected' => false],
                    '3' => ['text' => 'Use within a day', 'selected' => false]
                ],
                'multiple' => true,
                'continue_button' => true,
                'continue_button_text' => 'continue',
            ],

            '11' => [
                'question_key' => 'bulk_and_froze_for_future_use',
                'question' => 'Are you looking for meal ideas that can be made in bulk and frozen for future use?',
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Somewhat']
                ],
            ],

            '12' => [
                'question_key' => 'introduce_new_foods',
                'question' => 'How do you prefer to introduce new foods to your baby?',
                'answers' => [
                    '1' => ['text' => 'One food at a time'],
                    '2' => ['text' => 'Mix multiple foods together'],
                    '3' => ['text' => 'Undecided']
                ],
            ],

            '13' => [
                'question_key' => 'offer_solid_foods',
                'question' => 'How often do you plan to offer solid foods to your baby?',
                'answers' => [
                    '1' => ['text' => 'Once a day'],
                    '2' => ['text' => 'Twice a day'],
                    '3' => ['text' => 'Three times a day'],
                    '4' => ['text' => 'Undecided'],
                ],
            ],

            '14' => [
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

            '15' => [
                'question_key' => 'budget_friendly_meal_ideas',
                'question' => 'Are you looking for meal ideas that are budget-friendly?',
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Somewhat'],
                ],
            ],

            '16' => [
                'question_key' => 'quick_and_easy_to_prepare_meal_ideas',
                'question' => 'Are you looking for meal ideas that are quick and easy to prepare?',
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Somewhat'],
                ],
            ],

            '17' => [
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

            '18' => [
                'question_key' => 'purees_and_finger_foods',
                'question' => "Are you interested in incorporating both purees and finger foods into your infant's diet?",
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Undecided'],
                ],
                'loader' => [
                    'show' => true,
                    'seconds' => 5500,
                    'text' => 'We Are Now Generating Second Part of Your Book',
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
                        'Saves Time in Meal Prep',
                        'Develops Fine Motor Skills',
                        'Encourages Family Bonding',
                    ]
                ]
            ],

            '19' => [
                'question_key' => 'allergenic_foods',
                'question' => 'Do you plan to introduce these allergenic foods to reduce the risk of allergies?',
                'answers' => [
                    '1' => [
                        'text' => 'Peanuts',
                        'image' => asset('assets/quiz/slider/peanuts.jpg'),
                    ],
                    '2' => [
                        'text' => 'Sesame seeds',
                        'image' => asset('assets/quiz/slider/sesame_seeds.jpg'),
                    ],
                    '3' => [
                        'text' => 'Soy',
                        'image' => asset('assets/quiz/slider/soy.jpg'),
                    ],
                    '4' => [
                        'text' => 'Eggs',
                        'image' => asset('assets/quiz/slider/eggs.jpg'),
                    ],
                    '5' => [
                        'text' => 'Dairy products',
                        'image' => asset('assets/quiz/slider/dairy_products.jpg'),
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
                'question_key' => 'comfortable_preparing_and_cooking_meals',
                'question' => 'How comfortable are you with preparing and cooking meals from scratch?',
                'answers' => [
                    '1' => ['text' => 'Very comfortable'],
                    '2' => ['text' => 'Somewhat comfortable'],
                    '3' => ['text' => 'Not very comfortable'],
                    '4' => ['text' => 'Not at all comfortable'],
                ]
            ],

            '21' => [
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

            '22' => [
                'question_key' => 'traditional_foods',
                'question' => "Have you considered any cultural or traditional foods that you would like to introduce to your infant's diet?",
                'answers' => [
                    '1' => ['text' => 'Yes'],
                    '2' => ['text' => 'No'],
                    '3' => ['text' => 'Undecided'],
                ],
            ],

            '23' => [
                'question_key' => 'reactions_to_new_foods',
                'question' => "Love it or Hate It? <br> Incorporating different foods into your infant's diet",
                'answers' => [
                    '1' => [
                        'text' => 'Whole grains',
                        'image' => asset('assets/quiz/slider/whole_grains.jpg'),
                    ],
                    '2' => [
                        'text' => 'Beef',
                        'image' => asset('assets/quiz/slider/beef.jpg'),
                    ],
                    '3' => [
                        'text' => 'Chicken',
                        'image' => asset('assets/quiz/slider/chicken.jpg'),
                    ],
                    '4' => [
                        'text' => 'Fish',
                        'image' => asset('assets/quiz/slider/fish.jpg'),
                    ],
                    '5' => [
                        'text' => 'Garlic',
                        'image' => asset('assets/quiz/slider/garlic.jpg'),
                    ],
                    '6' => [
                        'text' => 'Ginger',
                        'image' => asset('assets/quiz/slider/ginger.jpg'),
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

            '24' => [
                'question_key' => 'drinks',
                'question' => 'Which of the following drinks would you like to offer your baby along with meals?',
                'answers' => [
                    '1' => ['text' => 'Water', 'selected' => false],
                    '2' => ['text' => 'Fruit juice', 'selected' => false],
                    '3' => ['text' => 'Milk', 'selected' => false],
                    '4' => ['text' => 'Other', 'selected' => false, 'deselectAll' => true],
                ],
                'multiple' => true,
                'continue_button' => true,
                'continue_button_text' => 'continue',
                'hasDeselectAll' => true,
            ],

            '25' => [
                'question_key' => 'end',
                'question' => 'We are now generating Your Final Part of Your Book!',
                'answers' => [
                    '1' => [
                        'percent' => '30',
                        'text' => 'text 1',
                        'image' => asset('assets/quiz/slider/chicken.jpg'),
                    ],
                    '2' => [
                        'percent' => '60',
                        'text' => 'text 2',
                        'image' => asset('assets/quiz/slider/final_image.jpg'),
                    ],
                    '3' => [
                        'percent' => '100',
                        'text' => 'text 3',
                        'image' => asset('assets/quiz/slider/fish.jpg'),
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

        $this->currentQuestionNum = 18;

        $this->currentQuestion = $this->quizQuestions[$this->currentQuestionNum];

        $this->registrationStepNum = $this->countQuestions + 1;

        $this->countQuestionsDots = range(1, $this->countQuestions);
    }


    public function dehydrate()
    {
    }

    public function nextSlide($answer = null)
    {
        sleep(1);
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
        if ($answer) {

            $currentAnswer = $this->quizQuestions[$this->currentQuestionNum];
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
                $this->deselectNoneMultipleAnswers();
            }

            $this->dispatchBrowserEvent('answer-selected', [
                'number' => $answer,
                'key' => $currentAnswer['question_key'],
                'question_text' => $currentAnswer['question'],
                'answers' => $this->quizQuestions[$this->currentQuestionNum]['answers']
            ]);

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


        $this->redirect('/book/summary/' . $client->code);
    }

    public function setCurrentSlider(int $value)
    {
        // sleep(1);
        $this->currentQuestion['selectedSlider'] = $value;

        $this->dispatchBrowserEvent('slider-selected', [
            'selected' => $value,
            // "total" => count($this->currentQuestion['answers']),
        ]);

        if ($value > count($this->currentQuestion['answers'])) {
            $this->nextSlide(1);
        }
    }

    public function render()
    {
        return view('livewire.bookquiz');
    }
}