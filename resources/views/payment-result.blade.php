@extends('layouts.main')

@section('content')

    <div class="container-box-general">

        @includeIf('partial.main-personal-plan-header')

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

                    <div class="line"></div>
                    <div class="point-item-box">
                        <div class="point-item">
                            <p class="font-white-26-700">3</p>
                        </div>
                        <p class="font-accent-18-700 name">Summary</p>
                    </div>

                </div>

            </div>

        </section>

        <div class="section quizz-box" style="box-shadow: none">
            <div class="section-wrapper">

                <div class="content-box">
                    @if($status === 'succeeded')
                        <div class="title-box">
                            <p class="font-accent-700">
                                <img src="{{asset("assets/payment/payment-success.png")}}" alt="">
                            </p>
                            <h2 class="font-accent-700">Payment Success!</h2>
                        </div>
                        <div class="action-box">
                            <button type="button" class="btn quizz-btn font-grey-color-400">Go to Plan</button>
                        </div>
                    @endif

                    @if($status !== 'succeeded')
                        <div class="title-box">
                            <p class="font-accent-700">
                                <img src="{{asset("assets/payment/payment-fail.png")}}" alt="">
                            </p>
                            <h2 class="font-accent-700 text-danger">Payment Fail!</h2>
                        </div>
                        <div class="action-box">
                            <a href="{{route('personal-plan', $code)}}" type="button" class="btn quizz-btn bg-danger">
                                Back to Plans
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @includeIf('partial.main-payment-footer', ['fixed' => true])
    </div>

@endsection