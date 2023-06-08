@extends('layouts.main')

@section('content')

    @includeIf('book.partial.main-personal-plan-header')

    <x-count-down-timer/>

    <section class="stepper  book-stepper">
        <div class="container">
            <div class="stepper-box mx-md-3">
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

    <section class="plan-selection book-plan" id="personal-plan-section">

        <div class="container">
            <div class="title-box text-center mb-3">
                <h2 class="font-grey-color-700">Personalized Plan</h2>
            </div>
            <div class="content-wrapper mx-auto px-md-5">
                <div class="plans w-100">
                    <div class="plans-box">
                        @foreach($personalPlans as $key => $plan)
                            <div class="plan personal-plan d-flex @if($key == 1) active @endif" id="plan-id-{{$plan->id}}" data-id="{{$plan->id}}">
                                <img src="{{asset('assets/book/personal-plan/pricingbook.jpg')}}" width="90px" class="book-plan-logo"/>
                                <div class="w-100">
                                    <div class="row-inf">
                                        <img src="{{asset('assets/book/personal-plan/pricingbook.jpg')}}" width="65px" class="book-plan-logo-adaptive"/>
                                        <div class="plan-name">
                                            <p class="title font-accent-18-700 text-start">{!! $plan->name !!}</p>
                                        </div>
                                        <div class="pt-3">

                                            @if($plan->payment_price_old)
                                                <p class="old-price font-grey-color-400 canceled-text mx-auto">
                                                    ${{$plan->payment_price_old}}
                                                </p>
                                            @endif

                                            <p class="font-accent-40-700">${{$plan->payment_price}}</p>
                                        </div>
                                    </div>
                                    <div class="row-inf mb-md-4">
                                        <p class="font-grey-500">{{$plan->billed_period}}</p>
                                        <p class="font-grey-color-400">{{$plan->payment_period}}</p>
                                    </div>
                                </div>
                                @if($plan->discount)
                                    <div class="discount">
                                        SPECIAL OFFER - SAVE {{$plan->discount}}%
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="plan_includes">
                    <div class="title-box">
                        <img src="{{asset('assets/book/personal-plan/pricingbook.jpg')}}" width="250px"/>
                    </div>
                </div>
            </div>
            <div class="m-auto book-checkbox">
                <div class="checkbox-box mt-md-5 mb-md-4">
                    <input name="agreemnt1" id="plan-checkbox" class="styled-checkbox" type="checkbox" value="" checked>
                    <label class="font-grey-color-400" for="plan-checkbox">
                        <div class="custom-checkbox"></div>
                        <span>
                            By choosing a payment method you agree to the
                            <a href="{{route('policy')}}" target="_blank" class="font-accent-color-400">
                                Privacy Policy
                            </a>
                        </span>
                    </label>
                </div>

                <button type="button" class="btn font-white-600 btn-green-squre w-100 block" id="get-your-plan">
                    {{__('front.get_my_book')}}
                </button>
            </div>
            <div class="payment-icons d-flex">
                <div class="w-100 icon-boxs">
                    <div><img src="{{asset('assets/payment/p-carshipping.png')}}" alt="">
                        <p>Free<br> shipping</p></div>
                    <div><img src="{{asset('assets/payment/p-LockKey.png')}}" alt="">
                        <p>Secure<br> transaction</p></div>
                </div>
                <div class="w-100 icon-boxs">
                    <div><img src="{{asset('assets/payment/secret-xs.png')}}" alt=""></div>
                    <div><img src="{{asset('assets/payment/p-mastercard.png')}}" alt=""></div>
                    <div><img src="{{asset('assets/payment/p-Maestro.png')}}" alt=""></div>
                    <div><img src="{{asset('assets/payment/p-PayPal.png')}}" alt=""></div>
                </div>
            </div>
        </div>

    </section>

    <section id="what-will-you-get" class="big-section text-center my-0 my-lg-5 px-3 p-lg-5 what-will">

        <h2 class="section-title">What's inside the book?</h2>

        <div class="container what-will-items">

            <div class="what-will-item block-2 whatwill-block">
                <div class="ww-item-content">
                    <h3 class="item-title">Monthly Personalized Meal Plan</h3>
                    <img src="{{asset('assets/summary/whatwill/book1.png')}}" alt="">
                </div>

                <div class="item-number n1">1</div>
            </div>

            <div class="what-will-item block-3 whatwill-block">
                <div class="ww-item-content">
                    <h3 class="item-title">1000+ Meal Ideas</h3>
                    <img src="{{asset('assets/summary/whatwill/book2.png')}}" alt="">
                </div>

                <div class="item-number n1">2</div>
            </div>

            <div class="what-will-item block-4 whatwill-block">
                <div class="ww-item-content">
                    <h3 class="item-title">Personalized Baby-Led Weaning Book Paperback</h3>
                    <img src="{{asset('assets/summary/whatwill/book3.png')}}" alt="">
                </div>
                <div class="item-number n1">3</div>
            </div>
        </div>

    </section>

    <section id="what-else-you-get" class="big-section text-center my-0 my-lg-5 px-3 p-lg-5 what-else">
        <h2 class="section-title">What Else Will You Get?</h2>

        <div class="container what-will-items justify-content-evenly">

            <div class="what-will-item block-4">
                <div class="ww-item-content">
                    <h3 class="item-title">Printable Files to track BLW progress</h3>
                    <img src="{{asset('assets/summary/whatwill/4.png')}}" alt="">
                </div>
            </div>

            <div class="what-will-item block-5">
                <div class="ww-item-content">
                    <h3 class="item-title">Video Tutorials</h3>
                    <img src="{{asset('assets/summary/whatwill/5.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="meal-plan-features" class="big-section text-center meal-book book-personal-plan-mp">

        <h2 class="section-title">Meal Plan Features</h2>

        <div class="container mp-blocks book-mp ">

            <div class="mp-first-block circle-background left-img">
                <img class='mp-first-block-img' src="{{asset('assets/book/summary/mpf/books_features.jpg')}}" alt="">
            </div>

            <div>
                <h2 class="book-sub-title section-title">Book's features</h2>
            </div>

            <div class="mp-two-colum">
                <div class="mp-middle-block">

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/1.png')}}" alt="">
                        <div class="mp-text">Customized to baby's needs</div>
                        <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/6.png')}}" alt="">
                        <div class="mp-text">includes finger foods</div>
                        <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/2.png')}}" alt="">
                        <div class="mp-text">Easy-to-follow recipes</div>
                        <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/4.png')}}" alt="">
                        <div class="mp-text">Includes family-friendly meals</div>
                        <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/11.png')}}" alt="">
                        <div class="mp-text">Promotes balanced meals</div>
                        <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/3.png')}}" alt="">
                        <div class="mp-text">Variety of nutrient-dense foods</div>
                        <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/7.png')}}" alt="">
                        <div class="mp-text">offers mealtime structure</div>
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
                        <img src="{{asset('assets/summary/mp/5.png')}}" alt="">
                        <div class="mp-text">Adaptable for allergies</div>
                        <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/8.png')}}" alt="">
                        <div class="mp-text">Provides age-appropriate foods</div>
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
                </div>


                <div class="mp-book-block">
                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/1.png')}}" alt="">
                        <div class="mp-text">Customized to baby's needs</div>
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/2.png')}}" alt="">
                        <div class="mp-text">Easy-to-follow recipes</div>
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/3.png')}}" alt="">
                        <div class="mp-text">Variety of nutrient-dense foods</div>
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/4.png')}}" alt="">
                        <div class="mp-text">Includes family-friendly meals</div>

                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/5.png')}}" alt="">
                        <div class="mp-text">Adaptable for allergies</div>
                    </div>

                    <div class="mp-block-item">
                        <img src="{{asset('assets/summary/mp/6.png')}}" alt="">
                        <div class="mp-text">includes finger foods</div>
                    </div>


                </div>

            </div>
            <div class="w-100 book-personal-plan">
                <div>
                    <h2 class="book-sub-title  section-title">Something more</h2>
                </div>
                <div class="mp-two-colum mp-something-more-plan">


                    <div class="mp-book-block">
                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/9.png')}}" alt="">
                            <div class="mp-text">Incorporates different textures</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/10.png')}}" alt="">
                            <div class="mp-text">Introduce new foods gradually</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/11.png')}}" alt="">
                            <div class="mp-text">Promotes valanced meals</div>
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
                            <img src="{{asset('assets/summary/mp/7.png')}}" alt="">
                            <div class="mp-text">offers mealtime structure</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                        <div class="mp-block-item">
                            <img src="{{asset('assets/summary/mp/8.png')}}" alt="">
                            <div class="mp-text">Provides age-appropriate foods</div>
                            <img class="" src="{{asset('assets/summary/mp/mpcheck.png')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="even-more" class="small-section text-center even-more book-even-more">

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

    <section id="blw-benefits-adaptive" class="big-section text-center book-benefits personal-plan-benefit">

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


    <section class="mt-100 doctor-block consult">

        <div class="container">
            <p class="font-grey-32-700 book-consult-header">Meet our medical consultant</p>
            <div class="container-wrapper">
                <div class="img-box">
                    <img src="{{asset('assets/bg-images/consult_2.png')}}" alt="" class="medical-consultant">
                </div>
                <div class="content-box">
                    <p class="font-grey-32-700 book-consult-header-adaptive">Meet our medical consultant</p>
                    <p class="font-grey-16-700">Kristine Swone</p>
                    <p>Diabetes Educator</p>
                    <p class="font-grey-color-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus tellus ullamcorper id
                        urna mauris egestas praesent consectetur. Curabitur quis id nunc leo adipiscing semper sodales
                        enim mi. Odio faucibus a lectus et feugiat cursus. Vestibulum at molestie a, id odio consectetur
                        erat interdum.
                    </p>
                    <a href="{{route('registration', $code)}}" type="button"
                       class="btn font-white-600 btn-green-squre book-consult-header">
                        {{__('front.get_your_plan')}}
                    </a>
                    <a href="{{route('registration', $code)}}" type="button"
                       class="btn font-white-600 btn-green-squre book-consult-header-adaptive">
                        Sign up for a consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="" style="height: 25px"></div>

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
                window.location.href = '/payment/{{$code}}/' + selectedPersonalPlainId
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