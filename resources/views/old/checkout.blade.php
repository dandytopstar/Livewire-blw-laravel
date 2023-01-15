@extends('layouts.front')

@section('content')

    <header class="header checkout">
        <div class="container">
            <div class="row flex-alignn">
                <div class="col-lg-12">
                    <div class="logo-home-template logo-home-template-checkout">
                        <img src="{{asset('images/orange_blw_logo.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="your_baby_summary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div  class="your_baby_summary_left">Your baby summary</div>
                </div>
                <div class="col-lg-6 col-6">
                    <div  class="your_baby_summary_right">{{$gender}}, {{$weight}}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="personalized_plan_checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <x-personalized-plan-block :code="$code"/>
                </div>

                <div class="col-lg-6">
                    <div  class="personalized_plan_checkout_title">Each Plan Has </div>
                    <div  class="personalized_plan_checkout_content_wrap desc">
                        <div  class="each_plan_has">
                            <div class="wrap_each_plan_has_img">
                                <img src="{{asset('images/footstep_1.png')}}" alt="" />
                            </div>
                            <div class="wrap_each_plan_has_descriptions">
                                <div class="wrap_each_plan_has_descriptions_title">Guide</div>
                                <div class="wrap_each_plan_has_descriptions_text">A step-by-step guide on how to prepare your baby for solid foods</div>
                            </div>
                        </div>
                        <div  class="each_plan_has">
                            <div class="wrap_each_plan_has_img">
                                <img src="{{asset('images/footstep_2.png')}}" alt="" />
                            </div>
                            <div class="wrap_each_plan_has_descriptions">
                                <div class="wrap_each_plan_has_descriptions_title">E-Book</div>
                                <div class="wrap_each_plan_has_descriptions_text">An E-Book that includes abolutely everything you need to know: how to start with baby-led weaning, how to deal with allergies, choking hazards, read babys body language and many tips on how safely introduce solid foods to your baby
                                </div>
                            </div>
                        </div>
                        <div  class="each_plan_has">
                            <div class="wrap_each_plan_has_img">
                                <img src="{{asset('images/footstep_3.png')}}" alt="" />
                            </div>
                            <div class="wrap_each_plan_has_descriptions">
                                <div class="wrap_each_plan_has_descriptions_title">Meal Plan</div>
                                <div class="wrap_each_plan_has_descriptions_text">Personalized baby-led weaning meal based on your answers from the quiz</div>
                            </div>
                        </div>
                        <div  class="each_plan_has">
                            <div class="wrap_each_plan_has_img">
                                <img src="{{asset('images/footstep_4.png')}}" alt="" />
                            </div>
                            <div class="wrap_each_plan_has_descriptions">
                                <div class="wrap_each_plan_has_descriptions_title">45+ healthy recipes</div>
                                <div class="wrap_each_plan_has_descriptions_text">Nutritious, delicious and healthy recipes ideal for baby-led weaning.</div>
                            </div>
                        </div>
                    </div>
                    <div  class="personalized_plan_checkout_content_wrap mob">
                        <div  class="each_plan_has-wrap">
                            <div  class="each_plan_has_two">
                                <div class="wrap_each_plan_has_img">
                                    <img src="{{asset('images/footstep_1.png')}}" alt="" />
                                </div>
                                <div class="wrap_each_plan_has_descriptions">
                                    <div class="wrap_each_plan_has_descriptions_title">Guide</div>
                                </div>
                            </div>
                            <div class="wrap_each_plan_has_descriptions_text descriptions_text__two hide">A step-by-step guide on how to prepare your baby for solid foods
                            </div>
                        </div>
                        <div  class="each_plan_has-wrap">
                            <div  class="each_plan_has_two">
                                <div class="wrap_each_plan_has_img">
                                    <img src="{{asset('images/footstep_2.png')}}" alt="" />
                                </div>
                                <div class="wrap_each_plan_has_descriptions">
                                    <div class="wrap_each_plan_has_descriptions_title">E-Book</div>
                                </div>
                            </div>
                            <div class="wrap_each_plan_has_descriptions_text descriptions_text__two show">An E-Book that includes abolutely everything you need to know: how to start with baby-led weaning, how to deal with allergies, choking hazards, read babys body language and many tips on how safely introduce solid foods to your baby
                            </div>
                        </div>
                        <div  class="each_plan_has-wrap">
                            <div  class="each_plan_has_two">
                                <div class="wrap_each_plan_has_img">
                                    <img src="{{asset('images/footstep_3.png')}}" alt="" />
                                </div>
                                <div class="wrap_each_plan_has_descriptions">
                                    <div class="wrap_each_plan_has_descriptions_title">Meal Plan</div>
                                </div>
                            </div>
                            <div class="wrap_each_plan_has_descriptions_text descriptions_text__two hide">Personalized baby-led weaning meal based on your answers from the quiz
                            </div>
                        </div>
                        <div  class="each_plan_has-wrap">
                            <div  class="each_plan_has_two">
                                <div class="wrap_each_plan_has_img">
                                    <img src="{{asset('images/footstep_4.png')}}" alt="" />
                                </div>
                                <div class="wrap_each_plan_has_descriptions">
                                    <div class="wrap_each_plan_has_descriptions_title">45+ healthy recipes</div>
                                </div>
                            </div>
                            <div class="wrap_each_plan_has_descriptions_text descriptions_text__two hide">Nutritious, delicious and healthy recipes ideal for baby-led weaning.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="you_can_pay_with_section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="you_can_pay_with">You can pay with</div>
                </div>
                <div class="col-lg-12">
                    <div  class="d-flex flex-wrap justify-content-center">
                        <div  class="you_can_pay_with_card-img text-center">
                            <img src="{{asset('images/cart_1.png')}}" alt="" />
                        </div>
                        <div  class="you_can_pay_with_card-img text-center">
                            <img src="{{asset('images/cart_2.png')}}" alt="" />
                        </div>
                        <div  class="you_can_pay_with_card-img text-center">
                            <img src="{{asset('images/cart_3.png')}}" alt="" />
                        </div>
                        <div  class="you_can_pay_with_card-img text-center">
                            <img src="{{asset('images/cart_1.png')}}" alt="" />
                        </div>
                        <div  class="you_can_pay_with_card-img text-center">
                            <img src="{{asset('images/cart_2.png')}}" alt="" />
                        </div>
                        <div  class="you_can_pay_with_card-img text-center">
                            <img src="{{asset('images/cart_3.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="info_block desc">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div  class="info_block_title">Get a baby-led program that will change your babys life completely</div>--}}
{{--                    <div  class="info_block_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis purus pulvinar eu arcu vivamus odio bibendum aliquet.--}}
{{--                    </div>--}}
{{--                    <div  class="info_block_buttom">--}}
{{--                        <button type="submit" class="btn btn-questation">{{__('front.get_your_plan')}}</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div  class="info_block_right">--}}
{{--                        <img src="{{asset('images/tel_3.png')}}" alt="" class="info_block_right_img" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="info_block mob">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div  class="info_block_right">--}}
{{--                        <img src="{{asset('images/tel_3.png')}}" alt="" class="info_block_right_img" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div  class="info_block_title">Get a baby-led program that will change your babys life completely</div>--}}
{{--                    <div  class="info_block_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis purus pulvinar eu arcu vivamus odio bibendum aliquet.--}}
{{--                    </div>--}}
{{--                    <div  class="info_block_buttom">--}}
{{--                        <button type="submit" class="btn btn-questation">{{__('front.get_your_plan')}}</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="people_stories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="people_stories_title">{{__('front.people_stories_title')}}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div  class="people_stories_wrap">
                        <div  class="people_stories_wrap-img">
                            <img src="{{asset('images/people_stories_1.png')}}" alt="" />
                        </div>
                        <div  class="people_stories_wrap-description">
                            {{__('front.people_stories_block_text_1')}}
                        </div>
                        <div  class="people_stories_wrap-info">
                            {{__('front.people_stories_block_author_1')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div  class="people_stories_wrap">
                        <div  class="people_stories_wrap-img">
                            <img src="{{asset('images/people_stories_2.png')}}" alt="" />
                        </div>
                        <div  class="people_stories_wrap-description">
                            {{__('front.people_stories_block_text_2')}}
                        </div>
                        <div  class="people_stories_wrap-info">
                            {{__('front.people_stories_block_author_2')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div  class="people_stories_wrap">
                        <div  class="people_stories_wrap-img">
                            <img src="{{asset('images/people_stories_3.png')}}" alt="" />
                        </div>
                        <div  class="people_stories_wrap-description">
                            {{__('front.people_stories_block_text_3')}}
                        </div>
                        <div  class="people_stories_wrap-info">
                            {{__('front.people_stories_block_author_3')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div  class="people_stories_wrap">
                        <div  class="people_stories_wrap-img">
                            <img src="{{asset('images/people_stories_4.png')}}" alt="" />
                        </div>
                        <div  class="people_stories_wrap-description">
                            {{__('front.people_stories_block_text_4')}}
                        </div>
                        <div  class="people_stories_wrap-info">
                            {{__('front.people_stories_block_author_4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="people_often_ask_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="people_often_ask_us_title">{{__('front.accordion_block_title')}}</div>
                </div>
                <div class="col-lg-12">
                    <!--<div  class="ask_title"> <span class="ask_title-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span> </div>
                    <div  class="ask_title"> <span class="ask_title-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span> </div>
                    <div  class="ask_title"> <span class="ask_title-wrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span> </div>-->
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="" id="headingOne">
                                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{__('front.accordion_title_1')}}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {!! __('front.accordion_text_1') !!}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {{__('front.accordion_title_2')}}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {!!  __('front.accordion_text_2') !!}
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    {{__('front.accordion_title_3')}}
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{__('front.accordion_text_3')}}
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    {{__('front.accordion_title_4')}}
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{__('front.accordion_text_4')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div  class="three-block">
                        <div  class="three-block__wrap">
                            <div class="wrap_each_plan_has_img">
                                <img src="{{asset('images/01_comment.png')}}" alt="" />
                            </div>
                            <div class="three-block_descriptions">
                                <div class="three-block_descriptions_text">
                                    {{__('front.liked_comment_1')}}
                                </div>
                            </div>
                        </div>
                        <div class="three-block_like">
                            <div class="three-block_like_wrap_left">
                                <img src="{{asset('images/like.png')}}" alt="" />
                                <span class="count_like">104</span>
                                <img src="{{asset('images/diselike.png')}}" alt="" />
                                <span class="count_like">2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div  class="three-block">
                        <div  class="three-block__wrap">
                            <div class="wrap_each_plan_has_img">
                                <img src="{{asset('images/02_comment.png')}}" alt="" />
                            </div>
                            <div class="three-block_descriptions">
                                <div class="three-block_descriptions_text">
                                    {{__('front.liked_comment_2')}}
                                </div>
                            </div>
                        </div>
                        <div class="three-block_like">
                            <div class="three-block_like_wrap_left">
                                <img src="{{asset('images/like.png')}}" alt="" />
                                <span class="count_like">104</span>
                                <img src="{{asset('images/diselike.png')}}" alt="" />
                                <span class="count_like">2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div  class="three-block">
                        <div  class="three-block__wrap">
                            <div class="wrap_each_plan_has_img">
                                <img src="{{asset('images/03_comment.png')}}" alt="" />
                            </div>
                            <div class="three-block_descriptions">
                                <div class="three-block_descriptions_text">
                                    {{__('front.liked_comment_3')}}
                                </div>
                            </div>
                        </div>
                        <div class="three-block_like">
                            <div class="three-block_like_wrap_left">
                                <img src="{{asset('images/like.png')}}" alt="" />
                                <span class="count_like">104</span>
                                <img src="{{asset('images/diselike.png')}}" alt="" />
                                <span class="count_like">2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @includeIf('partial.footer')

    <script>

    </script>

@endsection