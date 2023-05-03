@extends('layouts.main')

@section('content')

    @includeIf('partial.main-summary-header')

    <section class="summary-conclusion">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <p class="font-grey-color-700">
                        <span class="font-accent-40-700">Congratulations!</span> Your Baby-Led Weaning meal plan has been designed!
                    </p>
                    <p class="font-grey-color-400">
                        By analyzing your quiz results, we've crafted personalized meal plans and products to support your baby-led weaning journey.
                    </p>

                </div>

                <a href="{{route('registration', $code)}}" class="text-decoration-none">
                    <button class="btn font-white-600 btn-green-squre">
                        {{__('front.get_your_plan')}}
                    </button>
                </a>
            </div>

            <div class="img-box bg-image-absolute">
                <img src="{{asset('assets/summary/iPhone-13-Pro-1.png')}}"></img>
            </div>

        </div>
    </section>

    <section id="what-will-you-get big-section" class="text-center my-5 p-5">

        <h2 class="section-title">What will you get?</h2>

    </section>

    <section class="active-users">
        <div class="container">
            <div class="title-box">
                <h2 class="font-grey-32-700">125 000+ active users</h2>
                <p class="font-grey-color-400">
                    This is how many parents are using our plans to feed their infants. Read their stories.
                </p>
            </div>

            <div class="users-block">

                <div class="user">
                    <div class="img-box mx-auto">
                        <img src="{{asset('assets/avatar/avatar_lesli.jpg')}}" alt="">
                    </div>
                    <div class="star-box d-flex">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                    </div>
                    <div class="comment-box">
                        <p class="font-grey-16-700 text-center">{{__('front.summary_user_story_author_1')}}</p>
                        <p class="font-grey-color-400 text-center">
                            {{__('front.summary_user_story_text_1')}}
                        </p>
                    </div>
                    
                </div>

                <div class="user">
                    <div class="img-box mx-auto">
                        <img src="{{asset('assets/avatar/avatar_patricia.jpg')}}" alt="">
                    </div>
                    <div class="star-box d-flex">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                    </div>
                    <div class="comment-box">
                        <p class="font-grey-16-700 text-center">{{__('front.summary_user_story_author_2')}}</p>
                        <p class="font-grey-color-400 text-center">
                            {{__('front.summary_user_story_text_2')}}
                        </p>
                    </div>
                    
                </div>

                <div class="user">
                    <div class="img-box mx-auto">
                        <img src="{{asset('assets/avatar/avatar_kelli2.jpg')}}" alt="">
                    </div>
                    <div class="star-box d-flex">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                        <img src="{{asset('assets/icons/star.svg')}}" alt="">
                    </div>
                    <div class="comment-box">
                        <p class="font-grey-16-700 text-center">{{__('front.summary_user_story_author_3')}}</p>
                        <p class="font-grey-color-400 text-center">
                            {{__('front.summary_user_story_text_3')}}
                        </p>
                    </div>
                    
                </div>
            </div>

            <div class="clients-box">
                <div id="carouselAdaptive" class="carousel slide adaptive" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="img-box">
                                <img src="{{asset('assets/avatar/avatar_lesli.jpg')}}" alt="">
                            </div>
                            <div class="star-box d-flex">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                            </div>
                            <div class="comment-box">
                                <p class="font-grey-16-700 text-center">{{__('front.summary_user_story_author_1')}}</p>
                                <p class="font-grey-color-400 text-center">
                                    {{__('front.summary_user_story_text_1')}}
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="img-box">
                                <img src="{{asset('assets/avatar/avatar_patricia.jpg')}}" alt="">
                            </div>
                            <div class="star-box d-flex">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                            </div>
                            <div class="comment-box">
                                <p class="font-grey-16-700 text-center">{{__('front.summary_user_story_author_2')}}</p>
                                <p class="font-grey-color-400 text-center">
                                    {{__('front.summary_user_story_text_2')}}
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="img-box">
                                <img src="{{asset('assets/avatar/avatar_kelli2.jpg')}}" alt="">
                            </div>
                            <div class="star-box d-flex">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                                <img src="{{asset('assets/icons/star.svg')}}" alt="">
                            </div>
                            <div class="comment-box">
                                <p class="font-grey-16-700 text-center">{{__('front.summary_user_story_author_3')}}</p>
                                <p class="font-grey-color-400 text-center">
                                    {{__('front.summary_user_story_text_3')}}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-navigation">
                        <div class="carousel-indicators dots-box d-flex align-items-center">
                            <div class="dot active" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></div>
                            <div class="dot" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="1" aria-label="Slide 2"></div>
                            <div class="dot" type="button" data-bs-target="#carouselAdaptive" data-bs-slide-to="2" aria-label="Slide 3"></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="mt-100 doctor-block">
        <div class="container">
            <div class="container-wrapper">
                <div class="img-box">
                    <img src="{{asset('assets/bg-images/medical-consultant.jpeg')}}" alt="" class="medical-consultant">
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

    <div class="" style="height: 25px"> </div>

{{--    @includeIf('partial.main-summary-footer')--}}
@endsection