@extends('layouts.main')

@section('content')

    @includeIf('partial.main-personal-plan-header')

        <div class="container mt-3">
            <div class="arrow-left">
                <a href="{{route('personal-plan', $code)}}" type="button" class="font-accent-700 text-decoration-none">
                    <img src="{{asset('assets/icons/green-arrow-back.png')}}" alt=""> Back to Plans
                </a>
            </div>
        </div>

        <section class="stepper">
            <div class="container">
                <div class="stepper-box">
                    <div class="point-item-box">
                        <div class="point-item">
                            <p class="font-white-26-700">1</p>
                        </div>
                        <p class="font-accent-18-700 name">Selected Plan</p>
                    </div>
                    <div class="line"></div>
                    <div class="point-item-box">
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

        <section class="last-section payment-section">
            <div class="container">
                <h2 class="font-grey-32-700">Select a secure payment method</h2>
                <div class="content-box">
                    <div class="payment-box">
                        <div class="accordion" id="accordionPayment">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <div class="accordion-button collapsed checkbox-box font-grey-16-700 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <input name="paypal" id="paypal" class="styled-checkbox" type="checkbox" value="">
                                        <label class="font-grey-16-700 d-flex w-100" for="paypal">
                                            <div class="custom-checkbox circle">
                                                <div class="circle"></div>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 align-items-center">
                                            <span>
                                                PayPal
                                            </span>
                                                <div class="icon"><img src="{{asset('assets/payment/paypal.png')}}" alt=""></div>
                                            </div>
                                        </label>
                                    </div>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body font-grey-color-400">
                                        <div class="row-item d-flex justify-content-between flex-nowrap">
                                            <p class="font-dark-opacity-500 d-block">12-month running plan</p>
                                            <p class="font-grey-16-700 d-block">$ 85.97</p>
                                        </div>
                                        <div class="row-item d-flex justify-content-between flex-nowrap">
                                            <p class="font-dark-opacity-500 d-block">Discount</p>
                                            <p class="font-accent-700 d-block">- 15%</p>
                                        </div>
                                        <div class="row-item d-flex justify-content-between flex-nowrap">
                                            <p class="font-dark-opacity-500 d-block">Total</p>
                                            <p class="font-grey-16-700 d-block">$ 59.97</p>
                                        </div>
                                        <button class="btn yellow-payment-btn"><img src="{{asset('assets/payment/paypal-btn.png')}}" alt=""></button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading">
                                    <div class="accordion-button collapsed checkbox-box font-grey-16-700 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
                                        <input name="other" id="other" class="styled-checkbox" type="checkbox" value="">
                                        <label class="font-grey-16-700 d-flex w-100" for="other">
                                            <div class="custom-checkbox circle">
                                                <div class="circle"></div>
                                            </div>
                                            <div class="d-flex justify-content-between w-100 align-items-center">
                                            <span>
                                                Credit Card
                                            </span>
                                                <div class="icon d-flex align-items-center">
                                                    <img src="{{asset('assets/payment/visa-xs.png')}}" alt="">
                                                    <img src="{{asset('assets/payment/master-xs.png')}}" alt="">
                                                    <img src="{{asset('assets/payment/green-xs.png')}}" alt="">
                                                    <img src="{{asset('assets/payment/e-xs.png')}}" alt="">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </h2>
                                <div id="collapse" class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#accordionExample">
                                    <div class="accordion-body font-grey-color-400">
                                        <div class="row-item d-flex justify-content-between flex-nowrap">
                                            <p class="font-dark-opacity-500 d-block">12-month running plan</p>
                                            <p class="font-grey-16-700 d-block">$ 85.97</p>
                                        </div>
                                        <div class="row-item d-flex justify-content-between flex-nowrap">
                                            <p class="font-dark-opacity-500 d-block">Discount</p>
                                            <p class="font-accent-700 d-block">- 15%</p>
                                        </div>
                                        <div class="row-item d-flex justify-content-between flex-nowrap line-after position-relative">
                                            <p class="font-dark-opacity-500 d-block">Total</p>
                                            <p class="font-grey-16-700 d-block">$ 59.97</p>
                                        </div>
                                        <div class="form">
                                            <div class="form-row font-dark-grey-500 w-100">
                                                <label for="name" class="d-block">Name</label>
                                                <input id="name" name="name" type="text" placeholder="Name">
                                            </div>
                                            <button class="btn green-payment-btn font-white-16-700 text-center">Complete secure payment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inf-box">
                        <div class="item d-flex align-items-center">
                            <img src="{{asset('assets/icons/lock.png')}}" alt="">
                            <p class="font-grey-color-400">Follow the instructions on the screen to complete your purchase securely.</p>
                        </div>
                        <div class="item d-flex align-items-center">
                            <img src="{{asset('assets/icons/notice.png')}}" alt="">
                            <p class="font-grey-color-400">The price is valid for the first term of your subscription. Afterwards, your subscription will be automatically renewed for the initially ordered service period and you will be charged at the standard renewal price.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @includeIf('partial.main-summary-footer')

@endsection