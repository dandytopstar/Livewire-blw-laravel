<div>
    <div  class="personalized_plan_checkout_title">
        {{__('front.personalized_plan_title')}}
    </div>

    <div  class="personalized_plan_checkout_plan">
        <div class="plan-title">3 {{__('front.month_plan')}}</div>
        <div class="plan-prise-old">$ 7.50</div>
        <div class="plan-prise-sale">$ 5.00</div>
        <div class="plan-descriptions">per week</div>
        <div class="plan-per-week">
            <span class="plan-per-week-old-prise">$ 85.97</span>
            <span class="plan-per-week-prise-sale">$ 59.97</span>
        </div>
        <div class="plan-prise-desc">{{__('front.billed_every_period_months', ['period' => 3])}}</div>
    </div>

    <div  class="personalized_plan_checkout_plan check">
        <div class="plan-title">6 month Plan</div>
        <div class="plan-prise-old">$ 7.50</div>
        <div class="plan-prise-sale">$ 3.75</div>
        <div class="plan-descriptions">per week</div>
        <div class="plan-per-week">
            <span class="plan-per-week-old-prise">$ 179.94</span>
            <span class="plan-per-week-prise-sale">$ 89.97</span>
        </div>
        <div class="plan-prise-desc">Billed every 6 months</div>
    </div>

    <div  class="personalized_plan_checkout_plan">
        <div class="plan-title">1 month Plan</div>
        <div class="plan-prise-old"> </div>
        <div class="plan-prise-sale">$ 7.50</div>
        <div class="plan-descriptions">per week</div>
        <div class="plan-per-week-prise-normal">$ 29.99</div>
        <div class="plan-prise-desc">Billed every 3 months</div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            By choosing a payment method you agree to the <span class="red"> Privacy Policy</span>
        </label>
    </div>

    <div class="get_your_plan">
        <button type="submit" class="btn btn-questation"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Get Your Plan
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content payment_custom_modal">
                <div class="modal-body">
                    <form  action="{{route('stripe.post')}}" method="post">
                        @csrf
                        <div class="nothing_choose_wrap payment_modal_bg">
                            <div class="nothing_choose_navigation nothing_choose_navigation_card_mob">
                                <div class="nothing_choose_navigation_left show_mob">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="nothing_choose_navigation_right">
                                    <div class="nothing_choose_navigation_right__wrap">
                                        <div class="nothing_choose_navigation_right__card active">
                                            <img src="/images/cards_1.png" alt="">
                                        </div>
                                        <div class="nothing_choose_navigation_right__card">
                                            <img src="/images/cards_2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nothing_choose_details__wrap">
                                <div class="nothing_choose_details  nothing_choose_wrap_rel">
                                    <div class="wrap_details_info">
                                        <div class="wrap_details_info_params_one">12-month running plan</div>
                                        <div class="wrap_details_info_params_two">$ 85.97</div>
                                    </div>
                                    <div class="wrap_details_info">
                                        <div class="wrap_details_info_params_one">Discount</div>
                                        <div class="wrap_details_info_params_two">15%</div>
                                    </div>
                                    <div class="wrap_details_info">
                                        <div class="wrap_details_info_params_one">Total<span class="bolder_text">$ 59.97</span></div>
                                        <div class="wrap_details_info_params_two"><img src="/images/visa_card.png" alt=""></div>
                                    </div>
                                    <div class="wrap_details_info_card">
                                        <label for="exampleInputEmail1" class="form-label__card">Card Number</label>
                                        <input type="number"  name="card_no" class="form-control__card card_number" placeholder="1111 2222 3333 4444">
                                    </div>
                                    <div class="wrap_details_info_card_cvc_expiration">
                                        <div class="wrap_details_info_left">
                                            <label for="exampleInputEmail1" class="form-label__card">Expiration Month</label>
                                            <input type="text" name="expiry_month" class="form-control__card expiration" placeholder="MM / YY">
                                        </div>
                                        <div class="wrap_details_info_left">
                                            <label for="exampleInputEmail1" class="form-label__card">Expiration Year</label>
                                            <input type="text" name="expiry_year" class="form-control__card expiration" placeholder="2022">
                                        </div>
                                        <div class="wrap_details_info_right">
                                            <div class="info_right">
                                                <label for="exampleInputEmail1" class="form-label__card">CVC</label>
                                            </div>
                                            <input type="text" name="cvv" class="form-control__card cvc" placeholder="123">
                                        </div>
                                    </div>
                                    <div class="wrap_details_info_card">
                                        <label for="exampleInputEmail1" class="form-label__card">Name</label>
                                        <input type="text" class="form-control__card name" placeholder="Name">
                                    </div>
                                    <div class="wrap__next-form mob_complite">
                                        <a href="#" class="next-form next-form_2" class="btn-close" data-bs-dismiss="modal">
                                            Complete Order
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>