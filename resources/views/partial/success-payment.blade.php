<div class="container-fluid position-relative">
    <div class="row payment-row">
        <div class="h-100 d-inline-block col-sm-12 col-md-6 mb-5">

            <div class="payment-container-congrats arrow-left my-3 ">
                <a href="{{route('personal-plan', $code)}}" type="button" class="font-accent-700 text-decoration-none">
                    <img src="{{asset('assets/icons/green-arrow-back.png')}}" alt=""> Back to Plans
                </a>
            </div>

            <div class="payment-container-congrats d-flex my-3">
                <div class="mt-2">
                    <img src="{{asset('assets/icons/party-popper.png')}}" alt="">
                </div>

                <div>
                    <h2>Congratulations!</h2>
                    <p>You have sucesfully purchased the product</p>
                </div>
            </div>

            <div class="notice-box-container d-flex">

                <div class=" m-3">
                    <img src="{{asset('assets/icons/book.png')}}" alt="" class="">
                </div>

                <div>
                    <h2>6 month Babyfood Plan</h2>
                    <p class="font-grey-color-400">
                        It will be automatically send to your email
                    </p>
                </div>
            </div>

            <div class="payment-container-congrats my-3">
                <p class="font-grey-color-400">
                    If you didn’t recieved an email, to send it again <br> <a href="#">click here</a>
                </p>
            </div>

        </div>
        <div class="h-100 d-inline-block col-sm-12 col-md-6 light-green-bg p-3">

            <div class="payment-e-book d-flex justify-content-start mt-3">
                <h2>Our new E-book! Check the clients review! </h2>
                <img src="{{asset('assets/payment/40off_payment.png')}}" alt="" class="e-book-payment-off">
            </div>

            <div class="e-boo-buy-btn mb-5 adaptive">
                <a href="#" class="text-decoration-none">
                    <button type="button" class="btn font-white-600 btn-green-squre">
                        Buy Now
                    </button>
                </a>
            </div>

            <div class="e-book-block">
                <div class="e-book-phone-section">
                    <img src="{{asset('assets/payment/phone_payment.png')}}" alt="" class="payment-e-book-phone">
                    <img src="{{asset('assets/payment/spacial_offer.png')}}" alt="" class="payment-e-book-phone-off">

                </div>


                <div class="m-sm-2 m-md-5 e-book-description" style="">
                    <p>This is how many parents are using our plans to feed their kids. Read their stories</p>

                    <div class="d-flex e-book-check my-3">
                        <img src="{{asset('assets/icons/rectangle.png')}}" alt="">
                        <p class="font-grey-color-400">Customized BLW meal plans for babies </p>
                    </div>

                    <div class="d-flex e-book-check my-3">
                        <img src="{{asset('assets/icons/rectangle.png')}}" alt="">
                        <p class="font-grey-color-400"> 100+ delicious and healthy recipes </p>
                    </div>

                    <div class="d-flex e-book-check my-3">
                        <img src="{{asset('assets/icons/rectangle.png')}}" alt="">
                        <p class="font-grey-color-400"> Professional guide to Baby-led Weaning </p>
                    </div>

                    <div class="e-book-price">
                        <p>
                            <span>$ 3.75</span> per week
                        </p>
                    </div>

                </div>

            </div>

            <div class="e-boo-buy-btn mb-5">
                <a href="#" class="text-decoration-none">
                    <button type="button" class="btn font-white-600 btn-green-squre">
                        Buy Now
                    </button>
                </a>
            </div>

        </div>
    </div>
    <img class="bg-bottom-left" src="{{asset('assets/payment/baby_payment.png')}}" alt="">
</div>


