@extends('layouts.quiz-layout')

@section('content')

    @if (!empty($data) && $data['status'] == 'succeeded'))
        <div class="components_wrap">
            <div class="nothing_choose_wrap payment_success_main">
                <div class="nothing_choose_navigation payment_success_back">

                </div>
                <div class="payment_success_img">
                    <img src="{{asset('images/payment_success.png')}}" alt="">
                </div>
                <div class="payment_success">
                    {{__('front.payment_success')}}
                </div>
                <div class="payment_success_btn">

                    <a href="{{route('checkout', $data['client_code'])}}" class="next-form next-form_2">
                        Back to Main Screen
                    </a>

                </div>
            </div>
        </div>
    @endif

    @if (!empty($data) && $data['status'] == 'wrong'))
        <div class="components_wrap">
            <div class="nothing_choose_wrap payment_success_main">
                <div class="nothing_choose_navigation payment_success_back">

                </div>
                <div class="payment_success_img">
                    <img src="{{asset('images/payment_unsuccess.png')}}" alt="">
                </div>
                <div class="payment_success payment_success_img_boy">{{__('front.payment_unsuccessful')}}</div>
                <div class="payment_success_btn">
                    <a href="{{route('checkout', $data['client_code'])}}" class="next-form next-form_2">{{__('front.try_again')}}</a>
                </div>
            </div>
        </div>
    @endif

@endsection