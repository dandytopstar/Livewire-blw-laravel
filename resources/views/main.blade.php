@extends('layouts.main')

@section('content')

    <header class="header" id="home">
        <div class="container">

            <nav class="navbar navbar-expand-lg fullscreen-header">
                <div class="d-flex p-0 w-100 header-box">
                    <div class="logo-container d-flex align-items-center">
                        <img src="{{asset('assets/logo/main-logo.png')}}" alt="">
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 active p-0" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 p-0" href="#how-it-works">How It Works</a>
                            </li>
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 p-0" href="#personal-plan">Personalized Plan</a>
                            </li>
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 p-0" href="#baby-led-weaning">Baby-Led Weaning</a>
                            </li>
                        </ul>
                    </div>

                    <div class="actions">
                        <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-circle">{{__("front.start_quiz")}}</a>
                    </div>

                </div>
            </nav>

            <nav class="navbar navbar-expand-lg adaptive-header">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('assets/logo/logo-mobile-landing-only.png')}}" alt="" width="80px">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 active p-0" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 p-0" href="#how-it-works">How It Works</a>
                            </li>
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 p-0" href="#personal-plan">Personalized Plan</a>
                            </li>
                            <li class="nav-item list-unstyled list-unstyled">
                                <a class="nav-link font-grey-300 p-0" href="#baby-led-weaning">Baby-Led Weaning</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>


        </div>
    </header>

    <section class="position-relative w-100 first-section main-page">
        <div class="container position-relative">
            <div class="inf-box">
                <h1 class="font-grey-color-700">
                    {{__('front.hero_title')}}
                </h1>
                <p class="description font-grey-color-400">
                    {{__('front.hero_subtitle')}}
                </p>
                <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-squre mb-20">
                    {{__("front.start_quiz")}}
                </a>
            </div>
            <div class="img-box bg-image-absolute text-center">
                <img src="{{asset('assets/main/main.jpg')}}" class='main-logo'></img>
            </div>
        </div>
    </section>

    <section class="section accent-section mt-0" id="how-it-works">
        <div class="container">
            <div class="title-box">
                <p class="font-accent-700">
                    {{__('front.processes_title')}}
                </p>
                <h2 class="font-grey-32-700">
                    {{__('front.processes_subtitle')}}
                </h2>
            </div>
            <div class="box-container d-flex justify-content-between">
                <div class="box-item d-flex flex-column justify-content-center">
                    <div class="justify-content-center">
                        <p class="title font-grey-18-700 text-center">{{__('front.processes_step_title_1')}}</p>
                        <p class="description font-grey-color-400 m-0 text-center">{{__('front.processes_step_subtitle_1')}}</p>
                    </div>
                </div>
                <div class="box-item d-flex flex-column justify-content-center">
                    <div class="justify-content-center">
                        <p class="title font-grey-18-700 text-center">{{__('front.processes_step_title_2')}}</p>
                        <p class="description font-grey-color-400 m-0 text-center">{{__('front.processes_step_subtitle_2')}}</p>
                    </div>
                </div>
                <div class="box-item d-flex flex-column justify-content-center">
                    <div class="justify-content-center">
                        <p class="title font-grey-18-700 text-center">{{__('front.processes_step_title_3')}}</p>
                        <p class="description font-grey-color-400 m-0 text-center">{{__('front.processes_step_subtitle_3')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="what-will-you-get" class="big-section text-center my-3 my-lg-5 px-3 p-lg-5">

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

    <section class="section get-section p-0" id="baby-led-weaning">
        <div class="container">
            <div class="box white-shadow-box-radius-10 d-flex">
                <div class="title-box">
                    <p class="font-accent-700">{{__("front.baby_led_weaning")}}</p>
                    <h2 class="font-grey-32-700 mb-20">What is Baby-led weaning?</h2>
                    <p class="description font-grey-color-400">
                        Baby-led weaning is a method of introducing solid food to babies, where spoon-feeding is replaced with finger foods that a baby self-feeds.
                    </p>
                    <p class="description font-grey-color-400">
                        Coined by Gill Rapley, a former public health nurse in the U.K., baby-led weaning offers parents a way to bypass baby food entirely. It is  popular with parents who want to avoid raising picky eaters, or those who subscribe to Montessori-type philosophies where children are encouraged to be self-sufficient.
                    </p>
                    <p class="description font-grey-color-400">
                        Baby-led weaning majorly emphasizes independence of the baby. Parents wait for their baby to show signs of readiness for eating and follows the baby’s cues in introducing solid food. Babies join the table for family meals, are encouraged to pick up food with their own fingers, and trusted to eat their desired quantity. Babies introduced to solids with baby-led weaning also continue breastmilk and determine when  milk feeds should be reduced.
                    </p>
                    <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-squre">{{__("front.start_quiz")}}</a>
                </div>
                <div class="img-box mobile-img-center">
                    <img src="{{asset('assets/bg-images/bg-main-page-2.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section p-0 clients mb-4">
        <div class="container">
            <div class="title-box">
                <p class="font-accent-700">User Reviews</p>
                <h2 class="font-grey-32-700">What clients say about us</h2>
            </div>
            <div class="clients-box">

                @livewire('feedback-slider')

            </div>
        </div>
    </section>


    <div class="container">
        <div class="box white-shadow-box-radius-10-custom">
            <h2 class="font-grey-32-700">Disclaimer</h2>
            <p>
                The information in this book is for informational purposes only and does not constitute medical advice. Always consult your healthcare provider before beginning any nutrition program. The use of the information contained in this book is the sole choice of the reader. In no way will Degudegu Ltd be held responsible for any issues that may occur due to the use of this book.
            </p>
        </div>
    </div>

    @includeIf('partial.main-footer')

@endsection