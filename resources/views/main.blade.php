@extends('layouts.main')

@section('content')

    <header class="header" id="home">
        <div class="container">
            <nav class="navbar navbar-expand-lg fullscreen-header">
                <div class="d-flex p-0 w-100 header-box">
                    <div class="logo-container d-flex align-items-center">
                        <img src="{{asset('assets/logo/logo.png')}}" alt="">
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
                    <div class="actions">
                        <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-circle">{{__("front.start_quiz")}}</a>
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
                <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-squre">{{__("front.start_quiz")}}</a>
            </div>
            <div class="img-box bg-image-absolute">
                <img src="{{asset('assets/bg-images/bg-main-page-1.jpg')}}"></img>
            </div>
        </div>
    </section>

    <section class="section accent-section" id="how-it-works">
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
                        <p class="title font-grey-18-700 text-center">Take A Quiz</p>
                        <p class="description font-grey-color-400 m-0 text-center">Pick answers carefully so we can prepare a guide personalized exactly to your baby.</p>
                    </div>
                </div>
                <div class="box-item d-flex flex-column justify-content-center">
                    <div class="justify-content-center">
                        <p class="title font-grey-18-700 text-center">Get A Personalized Guide And Meal Plan</p>
                        <p class="description font-grey-color-400 m-0 text-center">After completing the quiz, we will set up everything for your baby and deliver it to you.</p>
                    </div>
                </div>
                <div class="box-item d-flex flex-column justify-content-center">
                    <div class="justify-content-center">
                        <p class="title font-grey-18-700 text-center">Baby-Led Weaning Time!</p>
                        <p class="description font-grey-color-400 m-0 text-center">Start solids by following a plan we preapared and share family mealtimes with the emphasis on conversations and quality time at the table.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section p-0 plans" id="personal-plan">
        <div class="container">
            <div class="title-box">
                <p class="font-accent-700">Personalized Plan</p>
                <h2 class="font-grey-32-700">What Will You Get?</h2>
            </div>
            <div class="items-box">
                <div class="plan">
                    <div class="icon-box">
                        <img src="{{asset('assets/icons/guide.svg')}}"></img>
                    </div>
                    <p class="title font-accent-18-700">Guide</p>
                    <p class="description font-grey-color-400">A step-by-step guide on how to prepare your baby for solid foods</p>
                </div>
                <div class="plan">
                    <div class="icon-box">
                        <img src="{{asset('assets/icons/book.svg')}}"></img>
                    </div>
                    <p class="title font-accent-18-700">E-Book</p>
                    <p class="description font-grey-color-400">A step-by-An E-Book that includes abolutely everything you need to know: how to start with baby-led weaning, how to deal with allergies, choking hazards, read babys body language and many tips on how safely introduce solid foods to your babystep guide on how to prepare your baby for solid foods</p>
                </div>
                <div class="plan">
                    <div class="icon-box">
                        <img src="{{asset('assets/icons/note.svg')}}"></img>
                    </div>
                    <p class="title font-accent-18-700">Meal Plan</p>
                    <p class="description font-grey-color-400">Personalized baby-led weaning meal based on your answers from the quiz</p>
                </div>
                <div class="plan">
                    <div class="icon-box">
                        <img src="{{asset('assets/icons/apple.svg')}}"></img>
                    </div>
                    <p class="title font-accent-18-700">45+ healthy recipes</p>
                    <p class="description font-grey-color-400">Nutritious, delicious and healthy recipes ideal for baby-led weaning.</p>
                </div>
                <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-squre">{{__("front.start_quiz")}}</a>
            </div>
        </div>
    </section>

    <section class="section get-section p-0" id="baby-led-weaning">
        <div class="container">
            <div class="box white-shadow-box-radius-10 d-flex">
                <div class="title-box">
                    <p class="font-accent-700">{{__("front.baby_led_weaning")}}</p>
                    <h2 class="font-grey-32-700 mb-20">What Will You Get?</h2>
                    <p class="description font-grey-color-400">
                        Baby led weaning (BLW) is a way of introducing solid foods to your baby from around 4 - 6 months old. BLW skips the puree stage due to the ability of babies from 4 - 6 months onwards to naturally handle finger foods.
                    </p>
                    <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-squre">{{__("front.start_quiz")}}</a>
                </div>
                <div class="img-box">
                    <img src="{{asset('assets/bg-images/bg-main-page-2.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section p-0 clients">
        <div class="container">
            <div class="title-box">
                <p class="font-accent-700">User Reviews</p>
                <h2 class="font-grey-32-700">What Clients Say About Our App After Use It</h2>
            </div>
            <div class="clients-box">

                @livewire('feedback-slider')

            </div>
        </div>
    </section>

    <section class="section p-0 last-section position-relative get-in-touch">
        <img class="position-absolute bg-image top-right" src="{{asset('assets/bg-images/bg-main-page-3.png')}}" alt="">
        <div class="container">
            <div class="title-box">
                <p class="font-accent-700">Have A Questation</p>
                <h2 class="font-grey-32-700">Get In Touch</h2>
            </div>
            <div class="form-container">
                <div class="form-row font-grey-color-400 w-100 d-flex justify-content-between">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                </div>
                <div class="form-row w-100 font-grey-color-400 d-flex justify-content-between">
                    <input type="text" placeholder="Phone">
                    <input type="text" placeholder="Company">
                </div>
                <div class="form-row full-width w-100 font-grey-color-400">
                    <textarea class="" placeholder="Request Details"></textarea>
                </div>
            </div>
            <a href="{{route('quiz')}}" type="button" class="btn font-white-600 btn-green-squre">{{__("front.start_quiz")}}</a>
        </div>
    </section>

    @includeIf('partial.main-footer')

@endsection