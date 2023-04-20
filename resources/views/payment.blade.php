@extends('layouts.main')

@push('custom-header')
    <script src="https://www.paypal.com/sdk/js?client-id={{config('services.paypal.client_id')}}&vault=true&intent=subscription&disable-funding=card"></script>
@endpush

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
                    <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-between">
                        <h2 class="font-grey-32-700">Select a secure payment method</h2>
{{--                        <div class="securePaymentImages">--}}
{{--                            <img src="{{asset('assets/payment/3d-secure.png')}}" alt="">--}}
{{--                            <img src="{{asset('assets/payment/stripe-secure.png')}}" alt="">--}}
{{--                            <img src="{{asset('assets/payment/secure.png')}}" alt="">--}}
{{--                            <img src="{{asset('assets/payment/paypal-secure.png')}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="securePaymentImagesMobile justify-content-center">--}}
{{--                            <img src="{{asset('assets/payment/3d-secure-mobile.png')}}" alt="">--}}
{{--                            <img src="{{asset('assets/payment/stripe-secure-mobile.png')}}" alt="">--}}
{{--                            <img src="{{asset('assets/payment/secure-mobile.png')}}" alt="">--}}
{{--                            <img src="{{asset('assets/payment/paypal-secure-mobile.png')}}" alt="">--}}
{{--                        </div>--}}
                    </div>

                    <div class="content-box">

                        <div class="payment-box mb-5">
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
{{--                                                    <div class="icon"><img src="{{asset('assets/payment/paypal_95x27.png')}}" alt=""></div>--}}
                                                    <div class="icon"><img src="{{asset('assets/payment/paypalbig.png')}}" alt="" width="100px"></div>
                                                </div>
                                            </label>
                                        </div>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body font-grey-color-400">

                                            <div class="d-none">
                                                <div class="row-item d-flex justify-content-between flex-nowrap">
                                                    <p class="font-dark-opacity-500 d-block">{{$personalPlan->name}}</p>
                                                    @if($personalPlan->discount)
                                                        <p class="font-grey-16-700 d-block">USD {{$personalPlan->billed_price_old}}</p>
                                                    @else
                                                        <p class="font-grey-16-700 d-block">USD {{$personalPlan->billed_price}}</p>
                                                    @endif
                                                </div>

                                                @if($personalPlan->discount)
                                                    <div class="row-item d-flex justify-content-between flex-nowrap">
                                                        <p class="font-dark-opacity-500 d-block">Discount {{intval($personalPlan->discount)}}%</p>
                                                        <p class="font-grey-16-700 text-danger d-block">-USD {{$personalPlan->discount_price}}</p>
                                                    </div>
                                                @endif

                                                <div class="row-item d-flex justify-content-between flex-nowrap line-after position-relative">
                                                    <p class="font-dark-opacity-500 d-block">Total</p>
                                                    <p class="font-grey-16-700 d-block">USD {{$personalPlan->billed_price}}</p>
                                                </div>
                                            </div>

                                            <form  action="{{route('payment')}}" method="post" id="paypal-payment-form">

                                                @csrf

                                                <input type="hidden" name="personal_plan_id" value="{{$personalPlan->id}}">

                                                <input type="hidden" name="client_id" value="{{$client->id}}">

                                                <input type="hidden" name="method" value="{{\App\Enums\PaymentMethods::PAYPAL->value}}">

                                                <input type="hidden" name="order_id" value="" id="paypal_order_id">

                                                <input type="hidden" name="subscription_id" value="" id="paypal_subscription_id">

{{--                                                <button class="btn yellow-payment-btn" type="submit">--}}
{{--                                                    <img src="{{asset('assets/payment/paypal-btn.png')}}" alt="">--}}
{{--                                                </button>--}}

                                                <div id="paypal-button-container" class="mt-4"></div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading">
                                        <div class="accordion-button collapsed checkbox-box font-grey-16-700 p-0 stripe-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
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
                                                        <img src="{{asset('assets/payment/cards_118x19.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </h2>
                                    <div id="collapse" class="accordion-collapse collapse" aria-labelledby="heading" data-bs-parent="#accordionExample">
                                        <div class="accordion-body font-grey-color-400">

                                            <div class="d-none">
                                                <div class="row-item d-flex justify-content-between flex-nowrap">
                                                    <p class="font-dark-opacity-500 d-block">{{$personalPlan->name}}</p>
                                                    @if($personalPlan->discount)
                                                        <p class="font-grey-16-700 d-block">USD {{$personalPlan->billed_price_old}}</p>
                                                    @else
                                                        <p class="font-grey-16-700 d-block">USD {{$personalPlan->billed_price}}</p>
                                                    @endif
                                                </div>

                                                @if($personalPlan->discount)
                                                    <div class="row-item d-flex justify-content-between flex-nowrap">
                                                        <p class="font-dark-opacity-500 d-block">Discount {{intval($personalPlan->discount)}}%</p>
                                                        <p class="font-grey-16-700 text-danger d-block">-USD {{$personalPlan->discount_price}}</p>
                                                    </div>
                                                @endif

                                                <div class="row-item d-flex justify-content-between flex-nowrap line-after position-relative">
                                                    <p class="font-dark-opacity-500 d-block">Total</p>

                                                    <p class="font-grey-16-700 d-block">USD {{$personalPlan->billed_price}}</p>

                                                </div>
                                            </div>

                                            <div class="form mt-4">
                                                <form  action="" method="post" id="stripe-payment-form">

                                                    @csrf

                                                    <div class="form-row font-dark-grey-500 w-100">
{{--                                                        <label for="name" class="d-block my-3">Payment card data</label>--}}
                                                        <div id="payment-element"></div>
                                                    </div>
                                                    <div id="error-message"></div>

                                                    <button class="btn green-payment-btn font-white-16-700 text-center" type="submit" id="submit">
                                                        Complete secure payment
                                                    </button>
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

        fbq('track', 'AddToCart', {
            value: '{{$personalPlan->billed_price}}',
            currency: 'USD',
        });

        paymentSecureSubscripe()

        function paymentSecureSubscripe() {
            const stripe = Stripe('{{config('services.stripe.public')}}');

            const options = {
                clientSecret: '{{$clientSecret}}',
                appearance: {theme: 'stripe'},
            };

            const elements = stripe.elements(options);
            const paymentElement = elements.create('payment');
            paymentElement.mount('#payment-element');

            const form = document.getElementById('stripe-payment-form');

            form.addEventListener('submit', async (event) => {
                event.preventDefault();

                $('#submit').html(`
                    Please wait...
                    <div class="spinner-border spinner-border-sm" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                `);

                const {error} = await stripe.confirmPayment({
                    elements,
                    confirmParams: {
                        return_url: "{{route('payment-stripe-result')}}?code={{$code}}&plan={{$personalPlan->id}}",
                    }
                });

                if (error) {
                    document.querySelector('#submit').innerText = 'Complete secure payment';

                    const messageContainer = document.querySelector('#error-message');
                    messageContainer.textContent = error.message;
                } else {
                    console.log('success');
                }
            });
        }

        // stripePaymentSubscribe();

        function stripePaymentSubscribe() {


            const elements = stripe.elements(options);

            const style = {
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
            };

            const card = elements.create('card', {style});

            card.mount('#card-element');

            const form = document.getElementById('stripe-payment-form');

            form.addEventListener('submit', async (event) => {
                event.preventDefault();

                const {token, error} = await stripe.createToken(card);

                if (error) {
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    stripeTokenHandler(token);
                }
            });

            const stripeTokenHandler = (token) => {
                const form = document.getElementById('stripe-payment-form');
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                form.submit();
            }
        }

        stripeAutoScroll()

        function stripeAutoScroll() {
            $('.stripe-accordion').on('click', () => {
                setTimeout(() => {
                    document.getElementById("payment-element").scrollIntoView();
                }, 500);

            })
        }

        payPalPayment();

        function payPalPayment() {
            const form = document.getElementById('paypal-payment-form');

            paypal.Buttons({

                createSubscription: function(data, actions) {
                    return actions.subscription.create({
                        'plan_id': '{{$personalPlan->paypal_id}}' // Creates the subscription
                    });
                },

                onApprove: function(data, actions) {

                    console.log(111);
                    $('#paypal_order_id').val(data.orderID)
                    $('#paypal_subscription_id').val(data.subscriptionID)
                    form.submit();
                }

            }).render('#paypal-button-container');
        }

    </script>


@endpush
