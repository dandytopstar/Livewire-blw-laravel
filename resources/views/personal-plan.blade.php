@extends('layouts.main')

@section('content')

    @includeIf('partial.main-personal-plan-header')

    <section class="mt-40">
        <div class="container dark-accent border-radius-10 p-y-25 p-x-30 font-white-700 d-flex time-section">
            <p>The offer expires in:</p>
            <div class="d-flex">
                <div class="text-center">
                    <span>00</span>
                    <span class="font-light-accent-700">hours</span>
                </div>
                <p class="dots">:</p>
                <div class="text-center">
                    <span>14</span>
                    <span class="font-light-accent-700">Minutes</span>
                </div>
                <p class="dots">:</p>
                <div class="text-center">
                    <span>37</span>
                    <span class="font-light-accent-700">Secunds</span>
                </div>
            </div>
        </div>
    </section>

    <section class="plan-selection">
        <div class="container">
            <div class="title-box text-center main">
                <h2 class="font-grey-color-700">Select Plan</h2>
            </div>
            <div class="content-wrapper">
                <div class="plans w-100">
                    <div class="title-box">
                        <h2 class="font-grey-color-32-700">Personalized Plann</h2>
                    </div>
                    <div class="plans-box">
                        <div class="plan">
                            <div class="row-inf">
                                <p class="title font-accent-18-700">3 month Babyfood Plan</p>
                                <p class="old-price font-grey-color-400 canceled-text">$ 7.50</p>
                            </div>
                            <div class="row-inf">
                                <div class="sales-box d-flex">
                                    <p class="font-grey-16-500 canceled-text">USD 85.97</p>
                                    <p class="font-grey-color-400">USD 59.97</p>
                                </div>
                                <p class="font-accent-40-700">$ 5.00</p>
                            </div>
                            <div class="row-inf">
                                <p class="font-grey-500">Billed every 3 months</p>
                                <p class="font-grey-color-400">per week</p>
                            </div>
                        </div>
                        <div class="plan active">
                            <div class="row-inf">
                                <p class="title font-accent-18-700">6 month Babyfood Plan</p>
                                <p class="old-price font-grey-color-400 canceled-text">$ 7.50</p>
                            </div>
                            <div class="row-inf">
                                <div class="sales-box d-flex">
                                    <p class="font-grey-16-500 canceled-text">USD 179.94</p>
                                    <p class="font-grey-color-400">USD 89.97</p>
                                </div>
                                <p class="font-accent-40-700">$ 3.75</p>
                            </div>
                            <div class="row-inf">
                                <p class="font-grey-500">Billed every 6 months</p>
                                <p class="font-grey-color-400">per week</p>
                            </div>
                        </div>

                        <div class="plan">
                            <div class="row-inf">
                                <p class="title font-accent-18-700">1 month Babyfood Plan</p>
                                <p class="font-accent-40-700">$ 7.50</p>
                            </div>
                            <div class="row-inf">
                                <p class="font-grey-500">Billed every month</p>
                                <p class="font-grey-color-400">per week</p>
                            </div>
                        </div>
                        <div class="checkbox-box">
                            <input name="agreemnt1" id="agreemnt1" class="styled-checkbox" type="checkbox" value="">
                            <label class="font-grey-color-400" for="agreemnt1">
                                <div class="custom-checkbox"></div>
                                <span>
                                By choosing a payment method you agree to the <a href="#" class="font-accent-color-400">Privacy Policy</a>
                            </span>
                            </label>
                        </div>
                        <button type="button" class="btn font-white-600 btn-green-squre w-100 block">Get Your Plan</button>
                    </div>
                </div>
                <div class="plan_includes w-100">
                    <div class="title-box">
                        <h2 class="font-grey-color-32-700">All plans include</h2>
                    </div>
                    <div class="plans-include-wrapper">
                        <div class="checkbox-box">
                            <input name="agreemnt2" id="agreemnt2" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt2">
                                <div class="custom-checkbox"></div>
                                <span>
                                Professional nutritionist analysis
                            </span>
                            </label>
                        </div>
                        <div class="checkbox-box">
                            <input name="agreemnt3" id="agreemnt3" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt3">
                                <div class="custom-checkbox"></div>
                                <span>
                                A personalized, customizable meal plan
                            </span>
                            </label>
                        </div>
                        <div class="checkbox-box">
                            <input name="agreemnt4" id="agreemnt4" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt4">
                                <div class="custom-checkbox"></div>
                                <span>
                                A downloadable and printable meal plan that you can access with any device
                            </span>
                            </label>
                        </div>
                        <div class="checkbox-box">
                            <input name="agreemnt5" id="agreemnt5" class="styled-checkbox" type="checkbox" value="" checked>
                            <label class="font-grey-color-400" for="agreemnt5">
                                <div class="custom-checkbox"></div>
                                <span>
                                Full assistance when calculating carbs, sugar, cholesterol and other metrics
                            </span>
                            </label>
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
                    <p class="font-grey-16-700">Kristine Swone</p>
                    <p class="font-grey-color-400">Diabetes Educator</p>
                    <p class="font-grey-color-400" style="opacity: .5;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus tellus ullamcorper id urna mauris egestas praesent consectetur. Curabitur quis id nunc leo adipiscing semper sodales enim mi. Odio faucibus a lectus et feugiat cursus. Vestibulum at molestie a, id odio consectetur erat interdum.</p>
                    <button class="btn font-white-600 btn-green-squre">Sign up for a consultation</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section p-0 plans">
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
                <button type="button" class="btn font-white-600 btn-green-squre">Start Quiz</button>
            </div>
        </div>
    </section>

    <section class="section program">
        <div class="container">
            <div class="content-box">
                <h3 class="font-grey-700">Get a baby-led program that will change your babys life completely</h3>
                <p class="font-grey-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis purus pulvinar eu arcu vivamus odio bibendum aliquet. </p>
                <button class="btn font-white-600 btn-green-squre">Get Your Plan</button>
            </div>
            <div class="img-box">
                <img src="" alt="">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                                            <img src="../../assets/avatar/avatar-example.png" alt="">
                                        </div>
                                        <div class="author-inf d-flex justify-content-between w-100">
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
                <h2 class="font-grey-32-700">People often ask us</h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed font-grey-16-700 p-y-25 p-x-30" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body font-grey-color-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed font-grey-16-700 p-y-25 p-x-30" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body font-grey-color-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed font-grey-16-700 p-y-25 p-x-30" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body font-grey-color-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @includeIf('partial.main-summary-footer')

@endsection