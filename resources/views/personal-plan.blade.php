@extends('layouts.main')

@section('content')

    @includeIf('partial.main-personal-plan-header')

   <x-count-down-timer/>

    <section class="stepper">
        <div class="container">
            <div class="stepper-box">
                <div class="point-item-box">
                    <div class="point-item">
                        <p class="font-white-26-700">1</p>
                    </div>
                    <p class="font-accent-18-700 name">Selected Plan</p>
                </div>
                <div class="line disabled"></div>
                <div class="point-item-box disabled">
                    <div class="point-item">
                        <p class="font-white-26-700">2</p>
                    </div>
                    <p class="font-accent-18-700 name">Payment</p>
                </div>
                <div class="line disabled"></div>
                <div class="point-item-box disabled">
                    <div class="point-item">
                        <p class="font-white-26-700">3</p>
                    </div>
                    <p class="font-accent-18-700 name">Summary</p>
                </div>
            </div>

        </div>
    </section>

    <section class="plan-selection" id="personal-plan-section">
        <div class="container">
            <div class="title-box text-center main">
                <h2 class="font-grey-color-700">Select Plan</h2>
            </div>
            <div class="content-wrapper">
                <div class="plans w-100">
                    <div class="title-box">
                        <h2 class="font-grey-32-700">Personalized Plann</h2>
                    </div>
                    <div class="plans-box">

                        @foreach($personalPlans as $key => $plan)
                            <div class="plan personal-plan @if($key == 1) active @endif" id="plan-id-{{$plan->id}}" data-id="{{$plan->id}}">
                                <div class="row-inf">
                                    <p class="title font-accent-18-700">{{$plan->name}}</p>
                                    @if($plan->payment_price_old)
                                        <p class="old-price font-grey-color-400 canceled-text">${{$plan->payment_price_old}}</p>
                                    @endif
                                </div>

                                    <div class="row-inf">

                                            <div class="sales-box d-flex">
                                                @if($plan->billed_price_old || $plan->billed_price)
                                                    @if($plan->billed_price_old)
                                                        <p class="font-grey-16-500 canceled-text">USD{{$plan->billed_price_old}}</p>
                                                    @endif

                                                    @if($plan->billed_price)
                                                        <p class="font-grey-color-400">USD{{$plan->billed_price}}</p>
                                                    @endif
                                                @endif
                                            </div>

                                        <p class="font-accent-40-700">${{$plan->payment_price}}</p>
                                    </div>

                                <div class="row-inf">
                                    <p class="font-grey-500">{{$plan->billed_period}}</p>
                                    <p class="font-grey-color-400">{{$plan->payment_period}}</p>
                                </div>
                            </div>
                        @endforeach

                        <div class="checkbox-box">
                            <input name="agreemnt1" id="plan-checkbox" class="styled-checkbox" type="checkbox" value="">
                            <label class="font-grey-color-400" for="plan-checkbox">
                                <div class="custom-checkbox"></div>
                                <span>
                                By choosing a payment method you agree to the <a href="#" class="font-accent-color-400">Privacy Policy</a>
                            </span>
                            </label>
                        </div>

                        <button type="button" class="btn font-white-600 btn-green-squre w-100 block" disabled id="get-your-plan">
                            {{__('front.get_your_plan')}}
                        </button>
                    </div>
                </div>
                <div class="plan_includes w-100">
                    <div class="title-box">
                        <h2 class="font-grey-32-700">All plans include</h2>
                    </div>
                    <div class="plans-include-wrapper">

                        <div class="checkbox-box check-plan">
                            <input name="agreemnt2" id="agreemnt2" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt2">
                                <div class="custom-checkbox"></div>
                                <span>
                                    Professional nutritionist analysis
                                </span>
                            </label>
                        </div>

                        <div class="checkbox-box check-plan">
                            <input name="agreemnt3" id="agreemnt3" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt3">
                                <div class="custom-checkbox"></div>
                                <span>
                                    A personalized, customizable meal plan
                                </span>
                            </label>
                        </div>

                        <div class="checkbox-box check-plan">
                            <input name="agreemnt4" id="agreemnt4" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt4">
                                <div class="custom-checkbox"></div>
                                <span>
                                    Lots of meal and ingredient substitutions
                                </span>
                            </label>
                        </div>

                        <div class="readmore more">
                            <p class="m-0 font-accent-700">Read More</p>
                            <img src="{{asset('assets/icons/back-green-arrow.png')}}" alt="" style="transform: rotate(180deg)">
                        </div>

                        <div class="checkbox-box check-plan adaptive">
                            <input name="agreemnt5" id="agreemnt5" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt5">
                                <div class="custom-checkbox"></div>
                                <span>
                                    A pocket-friendly grocery list
                                </span>
                            </label>
                        </div>

                        <div class="checkbox-box check-plan adaptive">
                            <input name="agreemnt6" id="agreemnt6" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt6">
                                <div class="custom-checkbox"></div>
                                <span>
                                    24/7 nutritionist support
                                </span>
                            </label>
                        </div>

                        <div class="checkbox-box check-plan adaptive">
                            <input name="agreemnt7" id="agreemnt7" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt7">
                                <div class="custom-checkbox"></div>
                                <span>
                                    Easy access to the Klinio web platform and app
                                </span>
                            </label>
                        </div>

                        <div class="checkbox-box check-plan adaptive">
                            <input name="agreemnt8" id="agreemnt8" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt8">
                                <div class="custom-checkbox"></div>
                                <span>
                                    A downloadable and printable meal plan that you can access with any device
                                </span>
                            </label>
                        </div>

                        <div class="checkbox-box check-plan adaptive">
                            <input name="agreemnt9" id="agreemnt9" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt9">
                                <div class="custom-checkbox"></div>
                                <span>
                                    Full assistance when calculating carbs, sugar, cholesterol and other metrics
                                </span>
                            </label>
                        </div>

                        <div class="readmore hide">
                            <p class="m-0 font-accent-700">Hide</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="mt-100 doctor-block">
        <div class="container">
            <h2 class="font-grey-32-700">Meet our medical consultant</h2>
            <div class="container-wrapper">
                <div class="img-box">
                    <img src="../../assets/bg-images/bg-image-plans-1.png" alt="">
                </div>
                <div class="content-box">
                    <p class="font-grey-16-700">Kristine Palmer</p>
                    <p class="font-grey-color-400">Baby-led weaning specialist</p>
                    <p class="font-grey-color-400" style="opacity: .5;">
                        An Expert in Baby-led weaning. Barchelor’s and a Master’s degree in Infants Nutrition and Dietetics.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="program adaptive">
        <div class="container">
            <div class="content-box">
                <h3 class="font-grey-32-700">Get a baby-led program that will change your babys life completely</h3>
                <p class="font-grey-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis purus pulvinar eu arcu vivamus odio bibendum aliquet. </p>
                <a href="#personal-plan-section" type="button" class="btn font-white-600 btn-green-squre">
                    Get Your Plan
                </a>
            </div>
            <div class="img-box">
                <img src="../../assets/bg-images/phones.png" alt="">
                <img class="adaptive" src="../../assets/bg-images/phones_xs.png" alt="">
            </div>
        </div>

    </section>

    <section class="section accent-section plans">
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
                    <p class="description font-grey-color-400">
                        An E-Book that includes everything you need to know about Baby-Led Weaning.
                    </p>
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
                <a href="#personal-plan-section" class="text-decoration-none">
                    <button type="button" class="btn font-white-600 btn-green-squre">
                        Get Your Plan
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="program">
        <div class="container">
            <div class="content-box">
                <h3 class="font-grey-32-700">Get a baby-led program that will change your babys life completely</h3>
                <p class="font-grey-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis purus pulvinar eu arcu vivamus odio bibendum aliquet. </p>
                <a href="#personal-plan-section" type="button" class="btn font-white-600 btn-green-squre">
                    Get Your Plan
                </a>
            </div>
            <div class="img-box">
                <img src="../../assets/bg-images/phones.png" alt="">
                <img class="adaptive" src="../../assets/bg-images/phones_xs.png" alt="">
            </div>
        </div>

    </section>

    <section class="section p-0 clients">
        <div class="container">
            <div class="title-box">
                <h2 class="font-grey-32-700">People stories</h2>
            </div>
            <div class="clients-box">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-between">
                                <div class="clients-item white-shadow-box-radius-10">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>

                                <div class="clients-item white-shadow-box-radius-10">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>

                                <div class="clients-item white-shadow-box-radius-10">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="clients-item white-shadow-box-radius-10">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>

                                <div class="clients-item white-shadow-box-radius-10">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-navigation">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
                            <span class="visually-hidden">Previous</span>
                            <div class="arrow-left">
                                <img src="../../assets/icons/arrow.png" alt="">
                            </div>
                        </button>
                        <div class="carousel-indicators dots-box d-flex align-items-center">
                            <div class="dot active" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></div>
                            <div class="dot" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></div>
                        </div>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
                            <span class="visually-hidden">Next</span>
                            <div class="arrow-right">
                                <img src="../../assets/icons/arrow.png" alt="">
                            </div>
                        </button>
                    </div>
                </div>

                <div id="carouselAdaptive" class="carousel slide adaptive" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-between">
                                <div class="clients-item white-shadow-box-radius-10 w-100">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="clients-item white-shadow-box-radius-10 w-100">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="clients-item white-shadow-box-radius-10 w-100">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="clients-item white-shadow-box-radius-10 w-100">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="clients-item white-shadow-box-radius-10 w-100">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="clients-item white-shadow-box-radius-10 w-100">
                                    <div class="clients-inf d-flex">
                                        <div class="avatar-box">
                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">
                                            <div>
                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>
                                                <div class="star-box d-flex">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                    <img src="../../assets/icons/star.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="date font-grey-500">15 Mar, 2022</p>
                                        </div>
                                    </div>
                                    <div class="clients-comment">
                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>
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
        </div>
    </section>

    <section class="accordion-box last-section section">
        <div class="container">
            <div class="title-box">
                <h2 class="font-grey-32-700">{{__('front.accordion_block_title')}}</h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed font-grey-16-700 p-y-25 p-x-30" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{__('front.accordion_title_1')}}
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body font-grey-color-400">
                            {!! __('front.accordion_text_1') !!}
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed font-grey-16-700 p-y-25 p-x-30" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{__('front.accordion_title_2')}}
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body font-grey-color-400">
                            {!! __('front.accordion_text_2') !!}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed font-grey-16-700 p-y-25 p-x-30" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            {{__('front.accordion_title_3')}}
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body font-grey-color-400">
                            {!! __('front.accordion_text_3') !!}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headive">
                        <button class="accordion-button collapsed font-grey-16-700 p-y-25 p-x-30" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            {{__('front.accordion_title_4')}}
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body font-grey-color-400">
                            {!! __('front.accordion_text_4') !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @includeIf('partial.main-summary-footer')

@endsection

@push('custom-scripts')

    <script>

        personalPlanSelection();

        redMoreButton();

        function personalPlanSelection() {
            let selectedPersonalPlainId = $(".personal-plan.active").attr('data-id');

            $(".personal-plan").on('click', (event) => {

                $(".personal-plan.active").each((i) => {
                    $(".personal-plan.active")[i].classList.remove('active');
                })

                event.currentTarget.classList.add('active');

                selectedPersonalPlainId = event.currentTarget.getAttribute('data-id');

            });

            $("#plan-checkbox").on('click', (event) => {

                let checked = event.currentTarget.checked;

                const button = $("#get-your-plan");

                button.attr('disabled', !checked)

            })

            $("#get-your-plan").on('click', () => {
                window.location.href = '/payment/{{$code}}/'+selectedPersonalPlainId
            })
        }

        function redMoreButton() {
            const hiddenCheckPlans = $(".check-plan.adaptive")
            const readMoreButton = $(".readmore.more");
            const readMoreHideButton = $(".readmore.hide");
            readMoreHideButton.hide();

            readMoreButton.on('click', () => {
                readMoreButton.hide();
                readMoreHideButton.show();
                hiddenCheckPlans.show()
            })

            readMoreHideButton.on('click', () => {
                readMoreButton.show();
                readMoreHideButton.hide();
                hiddenCheckPlans.hide()
            })
        }

    </script>

@endpush