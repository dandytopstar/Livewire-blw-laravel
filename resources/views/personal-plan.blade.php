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
            <div class="title-box text-center mb-3">
                <h2 class="font-grey-color-700">Select Plan</h2>
            </div>
            <div class="content-wrapper">
                <div class="plans w-100">
                    <div class="title-box">
                        <h2 class="font-grey-24-700">Personalized Plan</h2>
                    </div>
                    <div class="plans-box">

                        @foreach($personalPlans as $key => $plan)

                            <div class="plan personal-plan @if($key == 1) active @endif"
                                 id="plan-id-{{$plan->id}}"
                                 data-id="{{$plan->id}}"
                            >

                                <div class="row-inf">
                                    <div>
                                        <p class="title font-accent-18-700 text-start">{!! $plan->name !!}</p>
                                    </div>
                                    <div class="pt-4">

                                        @if($plan->payment_price_old)
                                            <p class="old-price font-grey-color-400 canceled-text mx-auto">${{$plan->payment_price_old}}</p>
                                        @endif

                                        <p class="font-accent-40-700">${{$plan->payment_price}}</p>
                                    </div>
                                </div>

{{--                                <div class="row-inf">--}}
{{--                                    <p class="title font-accent-18-700">{{$plan->name}}</p>--}}
{{--                                    @if($plan->payment_price_old)--}}
{{--                                        <p class="old-price font-grey-color-400 canceled-text">${{$plan->payment_price_old}}</p>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="row-inf">--}}

{{--                                            <div class="sales-box d-flex">--}}
{{--                                                @if($plan->billed_price_old || $plan->billed_price)--}}
{{--                                                    @if($plan->billed_price_old)--}}
{{--                                                        <p class="font-grey-16-500 canceled-text">USD {{$plan->billed_price_old}}</p>--}}
{{--                                                    @endif--}}

{{--                                                    @if($plan->billed_price)--}}
{{--                                                        <p class="font-grey-color-400">USD {{$plan->billed_price}}</p>--}}
{{--                                                    @endif--}}
{{--                                                @endif--}}
{{--                                            </div>--}}

{{--                                        <p class="font-accent-40-700">${{$plan->payment_price}}</p>--}}
{{--                                    </div>--}}

                                <div class="row-inf">
                                    <p class="font-grey-500">{{$plan->billed_period}}</p>
                                    <p class="font-grey-color-400">{{$plan->payment_period}}</p>
                                </div>

                                @if($plan->discount)
                                    <div class="discount">
                                        SPECIAL OFFER - SAVE {{$plan->discount}}%
                                    </div>
                                @endif
                            </div>
                        @endforeach

                        <div class="checkbox-box">
                            <input name="agreemnt1" id="plan-checkbox" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="plan-checkbox">
                                <div class="custom-checkbox"></div>
                                <span>
                                By choosing a payment method you agree to the <a href="{{route('policy')}}" target="_blank" class="font-accent-color-400">Privacy Policy</a>
                            </span>
                            </label>
                        </div>

                        <button type="button" class="btn font-white-600 btn-green-squre w-100 block" id="get-your-plan">
                            {{__('front.get_your_plan')}}
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="pp-adaptive-blocks">
        <section id="what-will-you-get" class="big-section text-center my-0 my-lg-5 px-3 p-lg-5">

            <h2 class="section-title">What will you get?</h2>

            <div class="container what-will-items">

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Baby-Led Weaning App Access</h3>
                        <img src="{{asset('assets/summary/whatwill/1.png')}}" alt="">
                    </div>

                    <div class="item-number">1</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Monthly Personalized Meal Plan</h3>
                        <img src="{{asset('assets/summary/whatwill/2.png')}}" alt="">
                    </div>

                    <div class="item-number">2</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">1000+ Meal Ideas</h3>
                        <img src="{{asset('assets/summary/whatwill/3.png')}}" alt="">
                    </div>

                    <div class="item-number">3</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Printable Files to track BLW progress</h3>
                        <img src="{{asset('assets/summary/whatwill/4.png')}}" alt="">
                    </div>

                    <div class="item-number">4</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Video Tutorials</h3>
                        <img src="{{asset('assets/summary/whatwill/5.png')}}" alt="">
                    </div>

                    <div class="item-number">5</div>
                </div>

                <div class="ww-last">
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_1.png')}}" alt="">
                        <h4>Progress-based Tips</h4>
                    </div>
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_2.png')}}" alt="">
                        <h4>Exclusive Member Resources</h4>
                    </div>
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_3.png')}}" alt="">
                        <h4>Unlimited E-Mail Support</h4>
                    </div>
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_4.png')}}" alt="">
                        <h4 class="pt-0 pb-1">Personalized Baby-Led Weaning Guidebook</h4>
                    </div>
                </div>

            </div>

        </section>
    </div>

    <div class="pp-desktop-blocks">
        <section id="meal-plan-features" class="big-section text-center">

            <h2 class="section-title">Meal Plan Features</h2>

            <div class="container mp-blocks">

                <div class="mp-first-block">
                    <img class='mp-first-block-img' src="{{asset('assets/summary/mp/phone.png')}}" alt="">
                    <img class='mp-first-block-img-adaptive' src="{{asset('assets/summary/mp/phone-adaptive.png')}}" alt="">

                    <div class="mp-middle-block-adaptive">

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/1.png')}}" alt="">
                            <div>Customized to baby's needs</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/2.png')}}" alt="">
                            <div>Easy-to-follow recipes</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/3.png')}}" alt="">
                            <div>Variety of nutrient-dense foods</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/4.png')}}" alt="">
                            <div>Includes family-friendly meals</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/5.png')}}" alt="">
                            <div>Adaptable for allergies</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/6.png')}}" alt="">
                            <div>Includes finger foods</div>
                        </div>
                    </div>

                </div>

                <h2 class="mp-title-adaptive">Something More</h2>

                <div class="mp-two-colum">
                    <div class="mp-middle-block">

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/1.png')}}" alt="">
                            <div class="mp-text">Customized to baby's needs</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/2.png')}}" alt="">
                            <div class="mp-text">Easy-to-follow recipes</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/3.png')}}" alt="">
                            <div class="mp-text">Variety of nutrient-dense foods</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/4.png')}}" alt="">
                            <div class="mp-text">Includes family-friendly meals</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/5.png')}}" alt="">
                            <div class="mp-text">Adaptable for allergies</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/6.png')}}" alt="">
                            <div class="mp-text">Includes finger foods</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/7.png')}}" alt="">
                            <div class="mp-text">Offers mealtime structure</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/8.png')}}" alt="">
                            <div class="mp-text">Provides age-appropriate foods</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                    </div>

                    <div class="mp-last-block">

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/9.png')}}" alt="">
                            <div class="mp-text">Incorporates different textures</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/10.png')}}" alt="">
                            <div class="mp-text">Introduces new foods gradually</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/11.png')}}" alt="">
                            <div class="mp-text">Promotes balanced meals</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/12.png')}}" alt="">
                            <div class="mp-text">Seasonal meal planning</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/13.png')}}" alt="">
                            <div class="mp-text">Includes meal prep tips</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/14.png')}}" alt="">
                            <div class="mp-text">Helps prevent choking</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/15.png')}}" alt="">
                            <div class="mp-text">Encourages healthy snacking</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/16.png')}}" alt="">
                            <div class="mp-text">Encourages self-feeding</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <section id="even-more" class="small-section text-center">

            <h2 class="section-title">And Even More</h2>

            <div class="container em-blocks">

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/1.png')}}" alt="">

                    <div class="em-text">
                        Encourages self-feeding
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/2.png')}}" alt="">

                    <div class="em-text">
                        Offers nutrition education
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/3.png')}}" alt="">

                    <div class="em-text">
                        Considers cultural preferences
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/4.png')}}" alt="">

                    <div class="em-text">
                        Provides grocery list
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/5.png')}}" alt="">

                    <div class="em-text">
                        Supports baby's development
                    </div>

                </div>

            </div>

        </section>

        <section id="what-will-you-get" class="big-section text-center my-0 my-lg-5 px-3 p-lg-5 payment-green-section">

            <h2 class="section-title">What will you get?</h2>

            <div class="container what-will-items">

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Baby-Led Weaning App Access</h3>
                        <img src="{{asset('assets/summary/whatwill/1.png')}}" alt="">
                    </div>

                    <div class="item-number">1</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Monthly Personalized Meal Plan</h3>
                        <img src="{{asset('assets/summary/whatwill/2.png')}}" alt="">
                    </div>

                    <div class="item-number">2</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">1000+ Meal Ideas</h3>
                        <img src="{{asset('assets/summary/whatwill/3.png')}}" alt="">
                    </div>

                    <div class="item-number">3</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Printable Files to track BLW progress</h3>
                        <img src="{{asset('assets/summary/whatwill/4.png')}}" alt="">
                    </div>

                    <div class="item-number">4</div>
                </div>

                <div class="what-will-item">
                    <div class="ww-item-content">
                        <h3 class="item-title">Video Tutorials</h3>
                        <img src="{{asset('assets/summary/whatwill/5.png')}}" alt="">
                    </div>

                    <div class="item-number">5</div>
                </div>

                <div class="ww-last">
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_1.png')}}" alt="">
                        <h4>Progress-based Tips</h4>
                    </div>
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_2.png')}}" alt="">
                        <h4>Exclusive Member Resources</h4>
                    </div>
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_3.png')}}" alt="">
                        <h4>Unlimited E-Mail Support</h4>
                    </div>
                    <div class="ww-last-item">
                        <img src="{{asset('assets/summary/whatwill/💡last_item_4.png')}}" alt="">
                        <h4 class="pt-0 pb-1">Personalized Baby-Led Weaning Guidebook</h4>
                    </div>
                </div>

            </div>

        </section>
    </div>

    <section class="mt-100 doctor-block">
        <div class="container">
            <h2 class="font-grey-32-700">Meet our medical consultant</h2>
            <div class="container-wrapper">
                <div class="img-box">
                    <img src="{{asset('assets/bg-images/medical-consultant.jpeg')}}" alt="" class="medical-consultant">
                </div>
                <div class="content-box">
                    <p class="font-grey-16-700">Lisa Applegate</p>
                    <p class="font-grey-color-400">Baby-led weaning specialist</p>
                    <p class="font-grey-color-400" style="opacity: .5;">
                        An Expert in Baby-led weaning. Barchelor’s and a Master’s degree in Infants Nutrition and Dietetics.
                    </p>
                </div>
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

                                <div class="clients-item p-1">
                                    <img src="{{asset('assets/stories/4.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="clients-item p-1">
                                    <img src="{{asset('assets/stories/2.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="clients-item p-1">
                                    <img src="{{asset('assets/stories/3.png')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="clients-item p-1">
                                    <img src="{{asset('assets/stories/1.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="clients-item p-1">
                                    <img src="{{asset('assets/stories/5.png')}}" class="img-fluid" alt="">
                                </div>

                                <div class="clients-item p-1">
                                    <img src="{{asset('assets/stories/6.png')}}" class="img-fluid" alt="">
                                </div>

{{--                                <div class="clients-item white-shadow-box-radius-10">--}}
{{--                                    <div class="clients-inf d-flex">--}}
{{--                                        <div class="avatar-box">--}}
{{--                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">--}}
{{--                                            <div>--}}
{{--                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>--}}
{{--                                                <div class="star-box d-flex">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <p class="date font-grey-500">15 Mar, 2022</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="clients-comment">--}}
{{--                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
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
                            <img src="{{asset('assets/stories/1.png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/stories/2.png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/stories/3.png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/stories/4.png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/stories/5.png')}}" class="img-fluid" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('assets/stories/6.png')}}" class="img-fluid" alt="">
                        </div>



{{--                        <div class="carousel-item">--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="clients-item white-shadow-box-radius-10 w-100">--}}
{{--                                    <div class="clients-inf d-flex">--}}
{{--                                        <div class="avatar-box">--}}
{{--                                            <img src="../../assets/avatar/avatar-100.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="author-inf d-flex justify-content-between w-100 pt-3">--}}
{{--                                            <div>--}}
{{--                                                <p class="font-grey-16-700 name">Helen Moris, 27</p>--}}
{{--                                                <div class="star-box d-flex">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                    <img src="../../assets/icons/star.svg" alt="">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <p class="date font-grey-500">15 Mar, 2022</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="clients-comment">--}}
{{--                                        <p class="font-grey-color-400">The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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

    <div class="pp-adaptive-blocks">
        <section id="meal-plan-features" class="big-section text-center">

            <h2 class="section-title">Meal Plan Features</h2>

            <div class="container mp-blocks">

                <div class="mp-first-block">
                    <img class='mp-first-block-img' src="{{asset('assets/summary/mp/phone.png')}}" alt="">
                    <img class='mp-first-block-img-adaptive' src="{{asset('assets/summary/mp/phone-adaptive.png')}}" alt="">

                    <div class="mp-middle-block-adaptive">

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/1.png')}}" alt="">
                            <div>Customized to baby's needs</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/2.png')}}" alt="">
                            <div>Easy-to-follow recipes</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/3.png')}}" alt="">
                            <div>Variety of nutrient-dense foods</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/4.png')}}" alt="">
                            <div>Includes family-friendly meals</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/5.png')}}" alt="">
                            <div>Adaptable for allergies</div>
                        </div>

                        <div class="mp-middle-adaptive-item">
                            <img src="{{asset('assets/summary/mp/6.png')}}" alt="">
                            <div>Includes finger foods</div>
                        </div>
                    </div>

                </div>

                <h2 class="mp-title-adaptive">Something More</h2>

                <div class="mp-two-colum">
                    <div class="mp-middle-block">

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/1.png')}}" alt="">
                            <div class="mp-text">Customized to baby's needs</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/2.png')}}" alt="">
                            <div class="mp-text">Easy-to-follow recipes</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/3.png')}}" alt="">
                            <div class="mp-text">Variety of nutrient-dense foods</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/4.png')}}" alt="">
                            <div class="mp-text">Includes family-friendly meals</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/5.png')}}" alt="">
                            <div class="mp-text">Adaptable for allergies</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/6.png')}}" alt="">
                            <div class="mp-text">Includes finger foods</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/7.png')}}" alt="">
                            <div class="mp-text">Offers mealtime structure</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/8.png')}}" alt="">
                            <div class="mp-text">Provides age-appropriate foods</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                    </div>

                    <div class="mp-last-block">

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/9.png')}}" alt="">
                            <div class="mp-text">Incorporates different textures</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/10.png')}}" alt="">
                            <div class="mp-text">Introduces new foods gradually</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/11.png')}}" alt="">
                            <div class="mp-text">Promotes balanced meals</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/12.png')}}" alt="">
                            <div class="mp-text">Seasonal meal planning</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/13.png')}}" alt="">
                            <div class="mp-text">Includes meal prep tips</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/14.png')}}" alt="">
                            <div class="mp-text">Helps prevent choking</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/15.png')}}" alt="">
                            <div class="mp-text">Encourages healthy snacking</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/16.png')}}" alt="">
                            <div class="mp-text">Encourages self-feeding</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                    </div>
                </div>

            </div>

        </section>

        <section id="even-more" class="small-section text-center">

            <h2 class="section-title">And Even More</h2>

            <div class="container em-blocks">

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/1.png')}}" alt="">

                    <div class="em-text">
                        Encourages self-feeding
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/2.png')}}" alt="">

                    <div class="em-text">
                        Offers nutrition education
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/3.png')}}" alt="">

                    <div class="em-text">
                        Considers cultural preferences
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/4.png')}}" alt="">

                    <div class="em-text">
                        Provides grocery list
                    </div>

                </div>

                <div class="em-block">
                    <img src="{{asset('assets/summary/em/5.png')}}" alt="">

                    <div class="em-text">
                        Supports baby's development
                    </div>

                </div>

            </div>

        </section>
    </div>

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

    <div class="" style="height: 25px"> </div>


@endsection

@push('custom-scripts')

    <script>

        fbq('track', 'Lead');

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
