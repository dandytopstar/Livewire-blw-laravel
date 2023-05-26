@extends('layouts.quiz-layout')

@section('content')

    <section class="nothing_choose">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12">
                    <div  class="nothing_choose_wrap text-center bg-white" style="min-height: auto">

                        <div class="my-3">
                            <img src="{{asset('images/email-sent.png')}}" class="img-fluid" alt="">
                        </div>

                        <h1>Link sent</h1>
                        <p>Please check your email inbox for our message.</p>
                        <p>If you did not receive the link, please check your spam folder – if you still cannot see an email from Sensa, please contact our support team.</p>

                        <a href="/" class="text-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection