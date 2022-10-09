@extends('layouts.quiz-layout')

@section('content')

    <section class="nothing_choose">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <div  class="nothing_choose_wrap text-center" style="min-height: auto">

                        <h1>My Subscription</h1>
                        <p>Enter your email below – we'll send you a link to access your account information.</p>

                        <form class="my-3" action="{{route('subscription-send')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control-choose" id="email" placeholder="{{__("front.email")}}" name="email">
                                <div id="emailHelp" class="form-text my-2">
                                    You must use the same email address you used when purchasing your plan.
                                </div>
                            </div>

                            <button class="form-control-choose my-3" id="submitButton" type="submit" disabled>
                                Submit
                            </button>

                        </form>
                        <a href="/" class="text-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const emailField = document.querySelector('#email');
            const submitButton = document.querySelector('#submitButton');

            function enableSubscribeButton(email) {
                if(email.includes("@")) {
                    submitButton.classList.add('active');
                    submitButton.disabled = false;
                } else {
                    submitButton.classList.remove('active');
                    submitButton.disabled = true;
                }
            }

            emailField.addEventListener('keydown', (event) => {
                let email = event.target.value;
                enableSubscribeButton(email);
            });

            emailField.addEventListener('change', (event) => {
                let email = event.target.value;
                enableSubscribeButton(email);
            });
        });
    </script>

@endsection