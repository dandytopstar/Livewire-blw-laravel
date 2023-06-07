<div class="section quizz-box" style="box-shadow: none">
    <div class="section-wrapper">

        <div class="content-box">

            <div class="title-box">
                <p class="font-accent-700">
                    <img src="{{asset("assets/payment/payment-fail.png")}}" alt="">
                </p>
                <h2 class="font-accent-700 text-danger">Payment Failed!</h2>
            </div>

            <div class="action-box">
                @if($personalPlan->type == \App\Enums\PersonalPlanTypesEnum::STANDARD_SUBSCRIBING->value)
                    <a href="{{route('personal-plan', $code)}}" type="button" class="font-accent-700 text-decoration-none">
                        <img src="{{asset('assets/icons/green-arrow-back.png')}}" alt=""> Back to Plans
                    </a>
                @endif

                @if($personalPlan->type == \App\Enums\PersonalPlanTypesEnum::BOOK_PAYMENT->value)
                    <a href="{{route('bookpersonal-plan', $code)}}" type="button" class="font-accent-700 text-decoration-none">
                        <img src="{{asset('assets/icons/green-arrow-back.png')}}" alt=""> Back to Plans
                    </a>
                @endif
            </div>

        </div>
    </div>
</div>