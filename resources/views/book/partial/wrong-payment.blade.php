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
                <a href="{{route('personal-plan', $code)}}" type="button" class="btn quizz-btn bg-danger">
                    Back to Plans
                </a>
            </div>

        </div>
    </div>
</div>