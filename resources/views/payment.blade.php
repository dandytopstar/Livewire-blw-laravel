@extends('layouts.main')

@section('content')
    <div class="container-box-general">
        @includeIf('partial.main-personal-plan-header')

            <div class="container mt-3">
                <div class="arrow-left">
                    <a href="{{route('personal-plan', $code)}}" type="button" class="font-accent-700 text-decoration-none">
                        <img src="{{asset('assets/icons/green-arrow-back.png')}}" alt=""> Back to Plans
                    </a>
                </div>
            </div>

            <x-count-down-timer/>

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

            <section class="last-section payment-section mt-5">
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
                                                <p class="font-dark-opacity-500 d-block">{{$personalPlan->name}}</p>
                                                <p class="font-grey-16-700 d-block">$ {{$personalPlan->billed_price}}</p>
                                            </div>

                                            <div class="row-item d-flex justify-content-between flex-nowrap line-after position-relative">
                                                <p class="font-dark-opacity-500 d-block">Total</p>
                                                <p class="font-grey-16-700 d-block">{{$personalPlan->payment_price}}</p>
                                            </div>

                                            <form  action="{{route('payment')}}" method="post" id="paypal-payment-form">

                                                @csrf

                                                <input type="hidden" name="personal_plan_id" value="{{$personalPlan->id}}">

                                                <input type="hidden" name="client_id" value="{{$client->id}}">

                                                <input type="hidden" name="method" value="{{\App\Enums\PaymentMethods::PAYPAL}}">

                                                <button class="btn yellow-payment-btn" type="submit">
                                                    <img src="{{asset('assets/payment/paypal-btn.png')}}" alt="">
                                                </button>

                                            </form>
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
                                                <p class="font-dark-opacity-500 d-block">{{$personalPlan->name}}</p>
                                                <p class="font-grey-16-700 d-block">$ {{$personalPlan->billed_price}}</p>
                                            </div>
                                            <div class="row-item d-flex justify-content-between flex-nowrap line-after position-relative">
                                                <p class="font-dark-opacity-500 d-block">Total</p>
                                                <p class="font-grey-16-700 d-block">{{$personalPlan->payment_price}}</p>
                                            </div>
                                            <div class="form">
                                                <form  action="{{route('payment')}}" method="post" id="stripe-payment-form">

                                                    @csrf

                                                    <input type="hidden" name="personal_plan_id" value="{{$personalPlan->id}}">

                                                    <input type="hidden" name="client_id" value="{{$client->id}}">

                                                    <input type="hidden" name="method" value="{{\App\Enums\PaymentMethods::STRIPE}}">

                                                    <input type="hidden" name="status" value="" id="stripe_payment_status">

                                                    <input type="hidden" name="payment_data" value="" id="stripe_payment_data">

                                                    <div class="form-row font-dark-grey-500 w-100">
                                                        <label for="name" class="d-block my-3">Payment card data</label>
                                                        <div id="card-element"></div>
                                                    </div>

                                                    <div id="card-errors" role="alert"></div>

                                                    <button class="btn green-payment-btn font-white-16-700 text-center" type="submit">Complete secure payment</button>
                                                </form>
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
        <div class="" style="height: 25px"> </div>

{{--        @includeIf('partial.main-payment-footer')--}}
    </div>

@endsection

@push('custom-scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        stripePayment();

        payPalPayment();

        function stripePayment() {
            let stripe = Stripe('{{config('services.stripe.public')}}');

            const appearance = {
                theme: 'stripe'
            };

            let clientSecret = '{{$intent->client_secret}}';

            const elements = stripe.elements({clientSecret, appearance});

            let cardElement = elements.create('card', {
                style: {
                    base: {
                        iconColor: '#00BD90',
                        color: '#000',
                        fontWeight: '500',
                        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                        fontSize: '16px',
                        fontSmoothing: 'antialiased',
                        ':-webkit-autofill': {
                            color: '#00BD90',
                        },
                        '::placeholder': {
                            color: '#00BD90',
                        },
                    },
                    invalid: {
                        iconColor: '#FF735C',
                        color: '#FF735C',
                    },
                },
            });

            cardElement.mount('#card-element');

            cardElement.on('change', ({error}) => {
                let displayError = document.getElementById('card-errors');
                if (error) {
                    displayError.textContent = error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            const stripeForm = document.getElementById('stripe-payment-form');

            stripeForm.addEventListener('click', function(ev) {
                ev.preventDefault();
                stripe.confirmCardPayment(clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: '{{$client->email}}'
                        }
                    }
                }).then(function(result) {
                    if (result.error) {
                        console.log(result.error.message);
                    } else {
                        if (result.paymentIntent.status === 'succeeded') {
                            $("#stripe_payment_data").val(JSON.stringify(result));
                            $("#stripe_payment_status").val(result.paymentIntent.status);
                            stripeForm.submit();
                        }
                    }
                });
            });
        }

        function payPalPayment() {
            const payPalForm = document.getElementById('paypal-payment-form');
        }
    </script>

@endpush