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
                    <ul class="navigation-top">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Personalized Plan</a></li>
                        <li><a href="#">Baby-Led Weaning</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <a href="{{route('quiz')}}" class="start_quiz">
                        {{__("front.start_quiz")}}
                    </a>
                </div>
            </div>
        </div>
    </header>

    <header class="header mob">
        <div  class="menu_wrap">
            <nav class="navbar navbar-dark">
                <div class="container-fluid_btn">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="{{route('quiz')}}" class="start_quiz">
                        {{__("front.start_quiz")}}
                    </a>
                </div>

            </nav>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="wrap_menu">
                    <ul>
                        <li> <a href="" class="active">Home</a></li>
                        <li> <a href="" class="">How It Works</a></li>
                        <li> <a href="" class="">Personalized Plan</a></li>
                        <li> <a href="" class="">Baby-Led Weaning</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- processes hero -->
    <section class="willing desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="willing_title">
                        {{__('front.hero_title')}}
                    </div>
                    <div class="willing_description">
                        {{__('front.hero_subtitle')}}
                    </div>
                    <div class="willing_title">
                        <a href="{{route('quiz')}}" class="start_quiz">
                            {{__("front.start_quiz")}}
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="willing_bg_right">
                        <img src="images/home-bg.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- processes hero mobile -->
    <section class="willing_mob">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="willing_mob_img_wrap">
                        <img src="images/mob-banner.png" alt="" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="willing_title">
                        {{__('front.hero_title')}}
                    </div>
                    <div class="willing_description">
                        {{__('front.hero_subtitle')}}
                    </div>
                    <div class="willing_title">
                        <a href="#" class="start_quiz">
                            {{__('front.start_quiz')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- processes -->
    <section class="how_it_work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="how_it_work_tiitle">
                        {{__('front.processes_title')}}
                    </div>
                    <div  class="how_it_work_tiitle_bottom">
                        {{__('front.processes_subtitle')}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="wrap_how_it_work_img_one">
                        <img src="images/arrow_1.png" alt="" />
                    </div>
                    <div class="wrap_how_it_work">
                        <div class="how_it_work_number">1</div>
                        <div class="how_it_work_take_a_quiz">
                            {{__('front.processes_step_title_1')}}
                        </div>
                        <div class="how_it_work_answers">
                            {{__('front.processes_step_subtitle_1')}}
                        </div>
                    </div>
                    <div class="wrap_how_it_work_img_two">
                        <img src="images/arrow_2.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wrap_how_it_work_img_main">
                        <img src="images/baby-food-doypack-mockup-top-view_1.png" alt="" />
                    </div>
                    <div class="wrap_how_it_work wrap_how_it_work_two">
                        <div class="how_it_work_number">2</div>
                        <div class="how_it_work_take_a_quiz">
                            {{__('front.processes_step_title_2')}}
                        </div>
                        <div class="how_it_work_answers">
                            {{__('front.processes_step_subtitle_2')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wrap_how_it_work wrap_how_it_work_three">
                        <div class="how_it_work_number">3</div>
                        <div class="how_it_work_take_a_quiz">
                            {{__('front.processes_step_title_3')}}
                        </div>
                        <div class="how_it_work_answers">
                            {{__('front.processes_step_subtitle_3')}}
                        </div>
                    </div>
                    <div class="wrap_how_it_work_img_three">
                        <img src="images/arrow_3.png" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- about -->
    <section class="personalized_plan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="how_it_work_tiitle">
                        {{__('front.about_title')}}
                    </div>
                    <div  class="how_it_work_tiitle_bottom how_it_work_tiitle_bottom_what_will_you_get">
                        {{__('front.about_subtitle')}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="images/footstep_1.png" alt="" /></div>
                        <div class="personalized_plan_text">
                            {{__('front.about_list_item_1_title')}}
                        </div>
                        <div class="personalized_plan">
                            {{__('front.about_list_item_1')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="images/footstep_2.png" alt="" /></div>
                        <div class="personalized_plan_text">
                            {{__('front.about_list_item_2_title')}}
                        </div>
                        <div class="personalized_plan">
                            {{__('front.about_list_item_2')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="images/footstep_3.png" alt="" /></div>
                        <div class="personalized_plan_text">
                            {{__('front.about_list_item_3_title')}}
                        </div>
                        <div class="personalized_plan">
                            {{__('front.about_list_item_3')}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="wrap_personalized_plan">
                        <div class="personalized_plan_img"><img src="images/footstep_4.png" alt="" /></div>
                        <div class="personalized_plan_text">
                            {{__('front.about_list_item_4_title')}}
                        </div>
                        <div class="personalized_plan">
                            {{__('front.about_list_item_4')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div  class="personalized_plan_bottom">
                        <a href="{{route('quiz')}}" class="start_quiz">
                            {{__("front.start_quiz")}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="baby-led_weaning">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap_baby-led_weaning">
                        <div  class="how_it_work_tiitle">
                            {{__('front.about_white_title')}}
                        </div>
                        <div  class="how_it_work_tiitle_bottom how_it_work_tiitle_bottom_what_will_you_get">
                            {{__('front.about_white_subtitle')}}
                        </div>
                        <div  class="baby-led_weaning_description">
                            {{__('front.about_white_description')}}
                        </div>
                        <div  class="personalized_plan_bottom">
                            <a href="{{route('quiz')}}" class="start_quiz">
                                {{__("front.start_quiz")}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="user_review">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="how_it_work_tiitle">User Review</div>
                    <div  class="how_it_work_tiitle_bottom how_it_work_tiitle_bottom_user_review">What Clients Say About Our App After Use It</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap_user_review">
                        <div class="user_review_img"><img src="images/ellipse_1.png" alt="" /></div>
                        <div class="user_review_text">
                            “The best food for my baby for this time. It made my life easier and I am really  gratefull for this!! Recomend for everyone!”
                        </div>
                        <div class="user_review_user_info">Helen Moris, 27</div>
                    </div>
                    <div class="navigation_user_review">
                        <img src="images/ellipse_2.png" alt="" />
                        <img src="images/ellipse_3.png" alt="" />
                        <img src="images/ellipse_3.png" alt="" />
                        <img src="images/ellipse_3.png" alt="" class="margin-right-non" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="have_a_questation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="how_it_work_tiitle">
                        {{__('front.contact_form_main_title')}}
                    </div>
                    <div  class="how_it_work_tiitle_bottom how_it_work_tiitle_bottom_user_review">
                        {{__('front.contact_form_main_subtitle')}}
                    </div>
                    <div class="questation">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="{{__('front.name')}}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="{{__('front.email')}}">
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" placeholder="{{__('front.phone')}}">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="{{__('front.company')}}">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="3" placeholder="Request Details"></textarea>
                            </div>

                            <div class="col-12 wrap_btn-questation">
                                <button type="submit" class="btn btn-questation">
                                    {{__('front.send_message')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @includeIf('partial.footer')

@endsection