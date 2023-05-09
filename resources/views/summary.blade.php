@extends('layouts.main')

@section('content')

    @includeIf('partial.main-summary-header')

    <section class="summary-conclusion">
        <div class="container d-flex">
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
                <img src="{{asset('assets/summary/iPhone13Pro.png')}}">
            </div>

        </div>
    </section>

    <section class="summary-conclusion adaptive">
        <div class="container">
            <div class="img-box bg-image-absolute mb-3">
                <img src="{{asset('assets/summary/iPhone-13-Pro-1.png')}}" height="300px" >
            </div>

            <div class="content-box">
                <div class="title">
                    <p class="font-grey-color-700">
                        <span style="color:#00bd90;">Congratulations!</span> Your Baby-Led Weaning meal plan has been designed!
                    </p>

                    <a href="{{route('registration', $code)}}" class="text-decoration-none">
                        <button class="btn font-white-600 btn-green-squre">
                            {{__('front.get_your_plan')}}
                        </button>
                    </a>

                    <p class="font-grey-color-400">
                        By analyzing your quiz results, we've crafted personalized meal plans and products to support your baby-led weaning journey.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="what-will-you-get" class="big-section text-center my-0 my-lg-5 px-3 p-lg-5">

        <h2 class="section-title">What will you get?</h2>

        <div class="container what-will-items">

            <div class="what-will-item block-1">
                <div class="ww-item-content">
                    <h3 class="item-title">Baby-Led Weaning App Access</h3>
                    <img src="{{asset('assets/summary/whatwill/1.png')}}" alt="">
                </div>

                <div class="item-number">1</div>
            </div>

            <div class="what-will-item block-2">
                <div class="ww-item-content">
                    <h3 class="item-title">Monthly Personalized Meal Plan</h3>
                    <img src="{{asset('assets/summary/whatwill/2.png')}}" alt="">
                </div>

                <div class="item-number">2</div>
            </div>

            <div class="what-will-item block-3">
                <div class="ww-item-content">
                    <h3 class="item-title">1000+ Meal Ideas</h3>
                    <img src="{{asset('assets/summary/whatwill/3.png')}}" alt="">
                </div>

                <div class="item-number">3</div>
            </div>

            <div class="what-will-item block-4">
                <div class="ww-item-content">
                    <h3 class="item-title">Printable Files to track BLW progress</h3>
                    <img src="{{asset('assets/summary/whatwill/4.png')}}" alt="">
                </div>

                <div class="item-number">4</div>
            </div>

            <div class="what-will-item block-5">
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

    <section id="meal-plan-features" class="big-section text-center">

        <h2 class="section-title">Meal Plan Features</h2>

        <div class="container mp-blocks">

            <div class="mp-first-block">
                <img class='mp-first-block-img' src="{{asset('assets/summary/mp/phone.jpg')}}" alt="">
                <img class='mp-first-block-img-adaptive' src="{{asset('assets/summary/mp/phone.jpg')}}" alt="">

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

    <section id="blw-benefits" class="big-section text-center">

        <h2 class="section-title">Baby-Led Weaning Benefits</h2>

        <div class="blw-b-blocks">

            <div class="container">
                <div class="blw-b-block block-1">
                    <img src="{{asset('assets/summary/blw/1.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>

                <div class="blw-b-block block-2">
                    <img src="{{asset('assets/summary/blw/2.png')}}" alt="">
                    <p>Leads to Healthier Weight</p>
                </div>

                <div class="blw-b-block block-3">
                    <img src="{{asset('assets/summary/blw/3.png')}}" alt="">
                    <p>Reduces Dental Issues</p>
                </div>

                <div class="blw-b-block block-4">
                    <img src="{{asset('assets/summary/blw/4.png')}}" alt="">
                    <p>Promotes Brain Development</p>
                </div>

                <div class="blw-b-block block-5">
                    <img src="{{asset('assets/summary/blw/5.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>

                <div class="blw-b-block block-6">
                    <img src="{{asset('assets/summary/blw/6.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>

                <div class="blw-b-block block-7">
                    <img src="{{asset('assets/summary/blw/7.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>

                <div class="blw-b-block block-8">
                    <img src="{{asset('assets/summary/blw/8.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>

                <div class="blw-b-block block-9">
                    <img src="{{asset('assets/summary/blw/9.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>

                <div class="blw-b-block block-10">
                    <img src="{{asset('assets/summary/blw/10.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>
            </div>

        </div>

    </section>

    <section id="blw-benefits-adaptive" class="big-section text-center">

        <h2 class="section-title">Baby-Led Weaning Benefits</h2>

        <div class="blw-b-blocks">

            <div class="container">
                <div class="blw-b-block block-1">
                    <img src="{{asset('assets/summary/blw/1.png')}}" alt="">
                    <p>Reduces Allergies</p>
                </div>

                <div class="blw-b-block block-2">
                    <img src="{{asset('assets/summary/blw/2.png')}}" alt="">
                    <p>Leads to Healthier Weight</p>
                </div>

                <div class="blw-b-block block-3">
                    <img src="{{asset('assets/summary/blw/3.png')}}" alt="">
                    <p>Reduces Dental Issues</p>
                </div>

                <div class="blw-b-block block-4">
                    <img src="{{asset('assets/summary/blw/4.png')}}" alt="">
                    <p>Promotes Brain Development</p>
                </div>

                <div class="blw-b-block block-5">
                    <img src="{{asset('assets/summary/blw/5.png')}}" alt="">
                    <p>Builds baby’s confidence</p>
                </div>

                <div class="blw-b-block block-6">
                    <img src="{{asset('assets/summary/blw/6.png')}}" alt="">
                    <p>Saves Money on Purees</p>
                </div>

                <div class="blw-b-block block-7">
                    <img src="{{asset('assets/summary/blw/7.png')}}" alt="">
                    <p>Saves Time in Meal Prep</p>
                </div>

                <div class="blw-b-block block-8">
                    <img src="{{asset('assets/summary/blw/8.png')}}" alt="">
                    <p>Develops Fine Motor Skills</p>
                </div>

                <div class="blw-b-block block-9">
                    <img src="{{asset('assets/summary/blw/9.png')}}" alt="">
                    <p>Reduces Choking Risk</p>
                </div>

                <div class="blw-b-block block-10">
                    <img src="{{asset('assets/summary/blw/10.png')}}" alt="">
                    <p>Encourages Family Bonding</p>
                </div>
            </div>

        </div>

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