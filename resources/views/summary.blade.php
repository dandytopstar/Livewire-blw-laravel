@extends('layouts.front')

@section('content')

    <header class="header desc">
        <div class="container">
            <div class="row flex-alignn">
                <div class="col-lg-2">
                    <div class="logo-home-template">
                        Logo
                    </div>
                </div>
                <div class="col-lg-8">

                </div>
                <div class="col-lg-2">
                    <a href="{{route('checkout', $code)}}" class="start_quiz">
                        {{__('front.get_your_plan')}}
                    </a>
                </div>
            </div>
        </div>
    </header>

    <header class="header mob">
        <div  class="menu_wrap menu_wrap_summary">
            <div class="container">
                <div class="row flex-alignn">
                    <div class="col-5">
                        <div class="logo-home-template">
                            Logo
                        </div>
                    </div>
                    <div class="col-7">
                        <a href="{{route('checkout', $code)}}" class="start_quiz">
                            {{__('front.get_your_plan')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="your_baby_summary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div  class="your_baby_summary_left">Your baby summary</div>
                </div>
                <div class="col-lg-6">
                    <div  class="your_baby_summary_right">Boy, 6 months ols, 123 lbs </div>
                </div>
            </div>
        </div>
    </section>

    <section class="based_on_your">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div  class="based_on_your_title">Based on your answers, your baby is <span class="based_on_your_title_color">ready for solid food</span>!</div>
                    <div  class="based_on_your_description">We’ve prepared a personalized Baby-led weaning meal plan for your son</div>
                    <div class="based_on_your_botton">
                        <a href="{{route('checkout', $code)}}" class="start_quiz">
                            {{__('front.get_your_plan')}}
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div  class="based_on_your_right">
                        <div class="result__wrap">
                            <div class="result__number">10</div>
                            <div class="result__number">20</div>
                            <div class="result__number">30</div>
                            <div class="result__number result">40</div>
                            <div class="result__number">50</div>
                            <div class="result__number">60</div>
                            <div class="result__number">67</div>
                        </div>
                        <div class="result__text">Lorem Ipsum</div>
                        <div  class="based_on_your_right_wrap">
                            <img src="{{asset('/images/based_on_your_4.png')}}" alt="" />
                            <div  class="based_on_your_right_title">Your baby will eat dependently in 67</div>
                        </div>
                    </div>
                    <div class="based_on_your_right_wrap_bottum desc">
                        <div class="based_on_your_right_wrap_bottum_two based_on_your_right_wrap_bottum_two_left">
                            <div class="based_on_your_right_wrap_bottum_two_top">Your babys weight</div>
                            <div class="based_on_your_right_wrap_bottum_two_title">Normal</div>
                            <div class="based_on_your_right_wrap_bottum_two_info">similar to 93% his age boys</div>
                            <img src="{{asset('images/based_on_your_2.png')}}" alt="" />
                        </div>
                        <div class="based_on_your_right_wrap_bottum_two based_on_your_right_wrap_bottum_two_right">
                            <div class="based_on_your_right_wrap_bottum_two_title_right">
                                Is baby-led weaning <span class="based_on_your_title_color">safe </span> for your <span class="based_on_your_title_color">baby</span>?
                            </div>
                            <div class="based_on_your_right_wrap_bottum_two_title_right_big">YES</div>
                            <img src="{{asset('images/based_on_your_3.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="based_on_your_right_wrap_bottum mob">
                        <div class="based_on_your_right_wrap_bottum_two based_on_your_right_wrap_bottum_two_left">
                            <div class="wrap_normal_img">
                                <img src="{{asset('images/based_on_your_2.png')}}" alt="" />
                            </div>
                            <div class="wrap_normal_info">
                                <div class="based_on_your_right_wrap_bottum_two_top">Your babys weight</div>
                                <div class="based_on_your_right_wrap_bottum_two_title">Normal</div>
                                <div class="based_on_your_right_wrap_bottum_two_info">similar to 93% his age boys</div>
                            </div>
                        </div>
                        <div class="based_on_your_right_wrap_bottum_two based_on_your_right_wrap_bottum_two_left">
                            <div class="wrap_normal_img">
                                <img src="{{asset('')}}images/based_on_your_3.png" alt="" />
                            </div>
                            <div class="wrap_normal_info">
                                <div class="based_on_your_right_wrap_bottum_two_title_right">Is baby-led weaning <span class="based_on_your_title_color">safe </span> for your <span class="based_on_your_title_color">baby</span>?</div>
                                <div class="based_on_your_right_wrap_bottum_two_title">YES</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what_will_your_baby_learn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="what_will_your_baby_learn_title">What will your baby learn?</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div  class="what_will_your_baby_learn_wrap">
                        <div  class="what_will_your_baby_learn_wrap_top">in 11 days</div>
                        <img src="{{asset('images/in_days_1.png')}}" alt="" />
                        <div  class="what_will_your_baby_learn_wrap_title"> to eat independently</div>
                        <div  class="what_will_your_baby_learn_wrap_desc"> Baby learns to eat independently and is in total control</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div  class="what_will_your_baby_learn_wrap">
                        <div  class="what_will_your_baby_learn_wrap_top">in 21 days</div>
                        <img src="{{asset('images/in_days_2.png')}}" alt="" />
                        <div  class="what_will_your_baby_learn_wrap_title"> to control his apetite</div>
                        <div  class="what_will_your_baby_learn_wrap_desc"> Baby learns to eat independently and is in total control</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div  class="what_will_your_baby_learn_wrap">
                        <div  class="what_will_your_baby_learn_wrap_top">in 67 days</div>
                        <img src="{{asset('images/in_days_3.png')}}" alt="" />
                        <div  class="what_will_your_baby_learn_wrap_title"> critical oral and motor skils</div>
                        <div  class="what_will_your_baby_learn_wrap_desc"> Baby learns to eat independently and is in total control</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div  class="what_will_your_baby_learn_wrap_for">
                        <div  class="what_will_your_baby_learn_wrap_for_top">-55%</div>
                        <div  class="what_will_your_baby_learn_wrap_for_title">Fusiness around food</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div  class="what_will_your_baby_learn_wrap_for">
                        <div  class="what_will_your_baby_learn_wrap_for_top">-35% </div>
                        <div  class="what_will_your_baby_learn_wrap_for_title">Excess weight gain</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div  class="what_will_your_baby_learn_wrap_for">
                        <div  class="what_will_your_baby_learn_wrap_for_top">-47%</div>
                        <div  class="what_will_your_baby_learn_wrap_for_title">Risk of allergies</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div  class="what_will_your_baby_learn_wrap_for">
                        <div  class="what_will_your_baby_learn_wrap_for_top">-38%</div>
                        <div  class="what_will_your_baby_learn_wrap_for_title">Cheeper food</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="personalized_plan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="how_it_work_tiitle">Personalized Plan</div>
                    <div  class="how_it_work_tiitle_bottom how_it_work_tiitle_bottom_what_will_you_get">What Will You Get?</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="{{asset('images/footstep_1.png')}}" alt="" /></div>
                        <div class="personalized_plan_text">Guide</div>
                        <div class="personalized_plan">A step-by-step guide on how to prepare your baby for solid foods</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="{{asset('images/footstep_2.png')}}" alt="" /></div>
                        <div class="personalized_plan_text">E-Book</div>
                        <div class="personalized_plan">An E-Book that includes abolutely everything you need to know: how to start with baby-led weaning, how to deal with allergies, choking hazards, read babys body language and many tips on how safely introduce solid foods to your baby
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="{{asset('images/footstep_3.png')}}" alt="" /></div>
                        <div class="personalized_plan_text">Meal Plan</div>
                        <div class="personalized_plan">Personalized baby-led weaning meal based on your answers from the quiz</div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="{{asset('images/footstep_4.png')}}" alt="" /></div>
                        <div class="personalized_plan_text">45+ healthy recipes</div>
                        <div class="personalized_plan">Nutritious, delicious and healthy recipes ideal for baby-led weaning.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="active_users">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="active_users_title">1000 000+ active users</div>
                    <div  class="active_users_description">This is how many parents are using our plans to feed their kids</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-6">
                    <div class="wrap-img-left">
                        <img src="{{asset('images/active_users_1.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 col-6">
                    <div class="wrap-img-right">
                        <img src="{{asset('images/active_users_2.png')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_promise desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="our_promise-img">
                        <img src="{{asset('images/our_promise.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div  class="our_promise_title">Our Promise</div>
                    <div  class="our_promise_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus tellus ullamcorper id urna mauris egestas praesent consectetur. Curabitur quis id nunc leo adipiscing semper sodales enim mi. Odio faucibus a lectus et feugiat cursus. Vestibulum at molestie a, id odio consectetur erat interdum. Morbi odio senectus sit tincidunt. Ipsum felis egestas molestie placerat. Tellus malesuada eget posuere eget purus sem fusce lorem arcu. Elit faucibus egestas diam et quam ante turpis vitae nulla. In ante est quisque morbi sed. Sit a orci semper diam sit gravida. Tincidunt tincidunt non congue magna enim, urna luctus amet. Non urna, consequat dui tellus duis neque urna, interdum. Ut consectetur ultricies eros, vehicula egestas sapien tincidunt donec.
                        Purus imperdiet orci leo mattis. At dignissim viverra bibendum tempor. Enim, leo interdum pharetra nisl, malesuada. Quis bibendum elit id.

                        <div  class="personalized_plan_bottom">
                            <a href="{{route('checkout', $code)}}" class="start_quiz">
                                {{__('front.get_your_plan')}}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="our_promise mob">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div  class="our_promise_title">Our Promise</div>
                    <div class="our_promise-img">
                        <img src="{{asset('images/our_promise.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-12">
                    <div  class="our_promise_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus tellus ullamcorper id urna mauris egestas praesent consectetur. Curabitur quis id nunc leo adipiscing semper sodales enim mi. Odio faucibus a lectus et feugiat cursus. Vestibulum at molestie a, id odio consectetur erat interdum. Morbi odio senectus sit tincidunt. Ipsum felis egestas molestie placerat. Tellus malesuada eget posuere eget purus sem fusce lorem arcu. Elit faucibus egestas diam et quam ante turpis vitae nulla. In ante est quisque morbi sed. Sit a orci semper diam sit gravida. Tincidunt tincidunt non congue magna enim, urna luctus amet. Non urna, consequat dui tellus duis neque urna, interdum. Ut consectetur ultricies eros, vehicula egestas sapien tincidunt donec.
                        Purus imperdiet orci leo mattis. At dignissim viverra bibendum tempor. Enim, leo interdum pharetra nisl, malesuada. Quis bibendum elit id.

                        <div  class="personalized_plan_bottom">
                            <a href="{{route('checkout', $code)}}" class="start_quiz">
                                {{__('front.get_your_plan')}}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @includeIf('partial.footer')

@endsection