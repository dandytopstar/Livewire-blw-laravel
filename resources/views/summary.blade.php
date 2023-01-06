@extends('layouts.main')

@section('content')

    @includeIf('partial.main-summary-header')

    <section class="summary-conclusion">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <p class="font-grey-color-700">Based on your answers, your baby <span class="font-accent-40-700">ready for solid food!</span></p>
                    <p class="font-grey-color-400">We’ve prepared a personalized Baby-led weaning meal plan for your son</p>
                </div>
                <div class="notice-box d-flex w-100 justify-content-between align-items-center">
                    <img src="../../assets/icons/book.png" alt="">
                    <div class="content">
                        <p class="font-grey-500">Facts</p>
                        <p class="font-grey-color-400">Lorem ipsum dolor sit amet, consectetur scing elit. Curabitur lectus tellus</p>
                    </div>
                </div>
                <a href="{{route('registration', $code)}}" class="text-decoration-none">
                    <button class="btn font-white-600 btn-green-squre">
                        {{__('front.get_your_plan')}}
                    </button>
                </a>
            </div>
            <div class="diagram-box">
                <div class="diagram">
                    <div class="days-container">
{{--                        <div class="days-box">--}}
{{--                            <p class="font-light-grey-700">{{$randomDays[0]}}</p>--}}
{{--                            <p class="font-light-grey-700">{{$randomDays[1]}}</p>--}}
{{--                            <p class="font-light-grey-700">{{$randomDays[2]}}</p>--}}
{{--                            <p class="current font-dark-grey-700">{{$randomDays[3]}}</p>--}}
{{--                            <p class="font-light-grey-700">{{$randomDays[4]}}</p>--}}
{{--                            <p class="font-light-grey-700">{{$randomDays[5]}}</p>--}}
{{--                            <p class="font-light-grey-700">{{$randomDays[6]}}</p>--}}
{{--                        </div>--}}

                        <div class="days-box">
                            <p class="font-light-grey-700">83</p>
                            <p class="font-light-grey-700">84</p>
                            <p class="font-light-grey-700">85</p>
                            <p class="current font-dark-grey-700">86</p>
                            <p class="font-light-grey-700">87</p>
                            <p class="font-light-grey-700">88</p>
                            <p class="font-light-grey-700">89</p>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="../../assets/bg-images/summary_bg.png" alt="">
                        <div class="inf-box font-grey-color-400">Your baby will eat
                            independently in <span class="font-accent-18-700">86 days</span></div>
                        <div class="today-box font-grey-16-700">Today</div>
                        <div class="days-amount-box font-grey-16-700">Day 86</div>
                    </div>
                </div>
                <div class="data-box">
                    <div class="data d-flex w-100 align-items-center">
                        <img src="../../assets/icons/weight.png" alt="">
                        <div class="d-flex w-100 align-items-center">
                            <div class="content">
                                <p class="font-grey-500">Your babys weight</p>
                                <p class="font-grey-color-400">similar to 93% his age boys</p>
                            </div>
                            <div class="font-accent-18-700">
                                Normal
                            </div>
                        </div>
                    </div>
                    <div class="data d-flex w-100 align-items-center">
                        <img src="../../assets/icons/face.png" alt="">
                        <div class="d-flex w-100 align-items-center">
                            <div class="content">
                                <p class="font-grey-color-400 m-0">Is baby-led weaning safe for your baby?</p>
                            </div>
                            <div class="font-accent-18-700">
                                Yes
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="summary-conclusion adaptive">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <p class="font-grey-color-700">Based on your answers, your baby <span class="font-accent-40-700">ready for solid food!</span></p>
                    <p class="font-grey-color-400">We’ve prepared a personalized Baby-led weaning meal plan for your son</p>
                </div>
            </div>
            <div class="diagram-box">
                <div class="diagram">
                    <div class="days-container">
                        <div class="days-box">
                            <p class="font-light-grey-700">83</p>
                            <p class="font-light-grey-700">84</p>
                            <p class="font-light-grey-700">85</p>
                            <p class="current font-dark-grey-700">86</p>
                            <p class="font-light-grey-700">87</p>
                            <p class="font-light-grey-700">88</p>
                            <p class="font-light-grey-700">89</p>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="{{asset('assets/bg-images/summary_bg.png')}}" alt="">
                        <img class="adaptive" src="{{asset('assets/bg-images/summary_bg_xs.png')}}" alt="">
                        <div class="inf-box font-grey-color-400">Your baby will eat
                            independently in <span class="font-accent-18-700">86 days</span></div>
                        <div class="today-box font-grey-16-700">Today</div>
                        <div class="days-amount-box font-grey-16-700">Day 86</div>
                    </div>
                </div>
            </div>
            <div class="content-box">

                <a href="{{route('registration', $code)}}" class="text-decoration-none">
                    <button class="btn font-white-600 btn-green-squre">
                        {{__('front.get_your_plan')}}
                    </button>
                </a>

                <div class="notice-box d-flex w-100 justify-content-between align-items-center">
                    <img src="../../assets/icons/book.png" alt="">
                    <div class="content">
                        <p class="font-grey-500">Facts</p>
                        <p class="font-grey-color-400">Lorem ipsum dolor sit amet, consectetur scing elit. Curabitur lectus tellus</p>
                    </div>
                </div>
            </div>
            <div class="diagram-box">
                <div class="data-box">
                    <div class="data d-flex w-100 align-items-center">
                        <img src="../../assets/icons/weight.png" alt="">
                        <div class="d-flex w-100 align-items-center">
                            <div class="content">
                                <p class="font-grey-500">Your babys weight</p>
                                <p class="font-grey-color-400">similar to 93% his age boys</p>
                            </div>
                            <div class="font-accent-18-700">
                                Normal
                            </div>
                        </div>
                    </div>
                    <div class="data d-flex w-100 align-items-center">
                        <img src="../../assets/icons/face.png" alt="">
                        <div class="d-flex w-100 align-items-center">
                            <div class="content">
                                <p class="font-grey-color-400 m-0">Is baby-led weaning safe for your baby?</p>
                            </div>
                            <div class="font-accent-18-700">
                                Yes
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="graphic adaptive">
        <div class="container">
            <div class="block">
                <div>
                    <h2 class="font-grey-18-700">Daily Macronutrients</h2>
                    <p class="font-grey-color-400">Most important nutrients in a baby’s diet</p>
                </div>
                <img class="adaptive img-fluid" src="{{asset('assets/bg-images/nutrients-adaptive.jpg')}}" alt="">
            </div>
            <div class="block">
                <div>
                    <h2 class="font-grey-18-700">Calorie Intake</h2>
                    <p class="font-grey-color-400">Recommended daily calorie intake for 6 - 12 months old babies</p>
                </div>
                <img class="adaptive img-fluid" src="{{asset('assets/bg-images/calories-adaptive.jpg')}}" alt="">
            </div>
        </div>
    </section>

    <section class="summary-days">
        <div class="container">
            <div class="title-box text-center">
                <h2 class="font-grey-32-700">What will your baby learn?</h2>
            </div>
            <div class="days-box-container">
                <div class="day">
                    <div class="header font-accent-30-700 text-center">
                        in 86 days
                    </div>
                    <div class="description text-center">
                        <p class="font-grey-18-700">{{__('front.baby_learn_block_text_title_1')}}</p>
                        <p class="font-grey-300 m-0">{{__('front.baby_learn_block_text_1')}}</p>
                    </div>
                </div>

                <div class="day">
                    <div class="header font-accent-30-700 text-center">
                        in 21 days
                    </div>
                    <div class="description text-center">
                        <p class="font-grey-18-700">{{__('front.baby_learn_block_text_title_2')}}</p>
                        <p class="font-grey-300 m-0">{{__('front.baby_learn_block_text_2')}}</p>
                    </div>
                </div>

                <div class="day">
                    <div class="header font-accent-30-700 text-center">
                        in 67 days
                    </div>
                    <div class="description text-center">
                        <p class="font-grey-18-700">{{__('front.baby_learn_block_text_title_3')}}</p>
                        <p class="font-grey-300 m-0">{{__('front.baby_learn_block_text_3')}}</p>
                    </div>
                </div>
            </div>

            <div class="title-box text-center">
                <h2 class="font-grey-32-700">Your baby will experience such benefits</h2>
            </div>

            <div class="benefits-box">
                <div class="benefit text-center">
                    <p class="font-accent-30-700">-55%</p>
                    <p class="m-0 font-grey-18-700">Fusiness around food</p>
                </div>
                <div class="benefit text-center">
                    <p class="font-accent-30-700">-35%</p>
                    <p class="m-0 font-grey-18-700">Excess weight gain</p>
                </div>
                <div class="benefit text-center">
                    <p class="font-accent-30-700">-47%</p>
                    <p class="m-0 font-grey-18-700">Risk of allergies</p>
                </div>
                <div class="benefit text-center">
                    <p class="font-accent-30-700">-38%</p>
                    <p class="m-0 font-grey-18-700">Cheeper food</p>
                </div>
            </div>
        </div>
    </section>

    <section class="graphic">
        <div class="container">
            <div class="block">
                <div>
                    <h2 class="font-grey-18-700">Daily Macronutrients</h2>
                    <p class="font-grey-color-400">Most important nutrients in a baby’s diet</p>
                </div>
                <img src="../../assets/bg-images/nutrients.png" alt="">
                <img class="adaptive img-fluid" src="{{asset('assets/bg-images/nutrients-adaptive.jpg')}}" alt="">
            </div>
            <div class="block">
                <div>
                    <h2 class="font-grey-18-700">Calorie Intake</h2>
                    <p class="font-grey-color-400">Recommended daily calorie intake for 6 - 12 months old babies</p>
                </div>
                <img class="remove-paddings" src="../../assets/bg-images/calories.png" alt="">
                <img class="adaptive img-fluid" src="{{asset('assets/bg-images/calories-adaptive.jpg')}}" alt="">
            </div>
        </div>
    </section>

    <section class="section plans accent-section">
        <div class="container">
            <div class="title-box">
                <p class="font-accent-700">Personalized Plan</p>
                <h2 class="font-grey-32-700">What Will You Get?</h2>
            </div>
            <div class="items-box">
                <div class="plan">
                    <div class="icon-box">
                        <img src="../../assets/icons/guide.svg"></img>
                    </div>
                    <p class="title font-accent-18-700">Guide</p>
                    <p class="description font-grey-color-400">A step-by-step guide on how to prepare your baby for solid foods</p>
                </div>
                <div class="plan">
                    <div class="icon-box">
                        <img src="../../assets/icons/book.svg"></img>
                    </div>
                    <p class="title font-accent-18-700">E-Book</p>
                    <p class="description font-grey-color-400">A step-by-An E-Book that includes abolutely everything you need to know: how to start with baby-led weaning, how to deal with allergies, choking hazards, read babys body language and many tips on how safely introduce solid foods to your babystep guide on how to prepare your baby for solid foods</p>
                </div>
                <div class="plan">
                    <div class="icon-box">
                        <img src="../../assets/icons/note.svg"></img>
                    </div>
                    <p class="title font-accent-18-700">Meal Plan</p>
                    <p class="description font-grey-color-400">Personalized baby-led weaning meal based on your answers from the quiz</p>
                </div>
                <div class="plan">
                    <div class="icon-box">
                        <img src="../../assets/icons/apple.svg"></img>
                    </div>
                    <p class="title font-accent-18-700">45+ healthy recipes</p>
                    <p class="description font-grey-color-400">Nutritious, delicious and healthy recipes ideal for baby-led weaning.</p>
                </div>
                <a href="{{route('registration', $code)}}" class="text-decoration-none">
                    <button class="btn font-white-600 btn-green-squre">
                        {{__('front.get_your_plan')}}
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="active-users">
        <div class="container">
            <div class="title-box">
                <h2 class="font-grey-32-700">1000 000+ active users</h2>
                <p class="font-grey-color-400">This is how many parents are using our plans to feed their kids. Read their stories</p>
            </div>

            <div class="users-block">
                <div class="user">
                    <div class="img-box">
                        <img src="../../assets/avatar/avatar-rectangle.png" alt="">
                    </div>
                    <div class="star-box d-flex">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                    </div>
                    <div class="comment-box">
                        <p class="font-grey-16-700 text-center">Helen Moris, 27</p>
                        <p class="font-grey-color-400 text-center">“The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!”</p>
                    </div>
                    <button class="btn font-accent-700">Read More</button>
                </div>
                <div class="user">
                    <div class="img-box">
                        <img src="../../assets/avatar/avatar-rectangle.png" alt="">
                    </div>
                    <div class="star-box d-flex">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                    </div>
                    <div class="comment-box">
                        <p class="font-grey-16-700 text-center">Helen Moris, 27</p>
                        <p class="font-grey-color-400 text-center">“The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!”</p>
                    </div>
                    <button class="btn font-accent-700">Read More</button>
                </div>
                <div class="user">
                    <div class="img-box">
                        <img src="../../assets/avatar/avatar-rectangle.png" alt="">
                    </div>
                    <div class="star-box d-flex">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                    </div>
                    <div class="comment-box">
                        <p class="font-grey-16-700 text-center">Helen Moris, 27</p>
                        <p class="font-grey-color-400 text-center">“The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!”</p>
                    </div>
                    <button class="btn font-accent-700">Read More</button>
                </div>
                <div class="user">
                    <div class="img-box">
                        <img src="../../assets/avatar/avatar-rectangle.png" alt="">
                    </div>
                    <div class="star-box d-flex">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                        <img src="../../assets/icons/star.svg" alt="">
                    </div>
                    <div class="comment-box">
                        <p class="font-grey-16-700 text-center">Helen Moris, 27</p>
                        <p class="font-grey-color-400 text-center">“The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!”</p>
                    </div>
                    <button class="btn font-accent-700">Read More</button>
                </div>
            </div>

            <div id="carouselAdaptive" class="carousel slide adaptive" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-between">
                            <div class="clients-item white-shadow-box-radius-10 w-100">
                                <div class="user">
                                    <div class="img-box">
                                        <img src="../../assets/avatar/avatar-rectangle.png" alt="">
                                    </div>
                                    <div class="star-box d-flex">
                                        <img src="../../assets/icons/star.svg" alt="">
                                        <img src="../../assets/icons/star.svg" alt="">
                                        <img src="../../assets/icons/star.svg" alt="">
                                        <img src="../../assets/icons/star.svg" alt="">
                                        <img src="../../assets/icons/star.svg" alt="">
                                    </div>
                                    <div class="comment-box">
                                        <p class="font-grey-16-700 text-center">Helen Moris, 27</p>
                                        <p class="font-grey-color-400 text-center">“The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!”</p>
                                    </div>
                                    <button class="btn font-accent-700">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-navigation">
                    <div class="carousel-indicators dots-box d-flex align-items-center">
                        <div class="dot active" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></div>
                        <div class="dot" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="1" aria-label="Slide 2"></div>
                        <div class="dot" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="2" aria-label="Slide 3"></div>
                        <div class="dot" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="3" aria-label="Slide 4"></div>
                        <div class="dot" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="4" aria-label="Slide 5"></div>
                        <div class="dot" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="5" aria-label="Slide 6"></div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="mt-100 doctor-block xl last-section">
        <div class="container">
            <div class="container-wrapper">
                <div class="img-box">
                    <img src="../../assets/bg-images/bg-image-doctor-xl.png" alt="">
                </div>
                <div class="content-box">
                    <p class="font-grey-32-700">{{__('front.our_promise_title')}}</p>
                    <p class="font-grey-color-400">
                        {{__('front.our_promise_text')}}
                    </p>
                    <a href="{{route('registration', $code)}}" type="button" class="btn font-white-600 btn-green-squre">
                        {{__('front.get_your_plan')}}
                    </a>
                </div>
            </div>
        </div>
    </section>

    @includeIf('partial.main-summary-footer')

@endsection