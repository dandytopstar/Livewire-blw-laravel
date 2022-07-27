@props(['code' => ''])
<div>
    <div  class="personalized_plan_checkout_title">
        {{__('front.personalized_plan_title')}}
    </div>

    <div  class="personalized_plan_checkout_plan">
        <div class="plan-title">3 {{__('front.month_plan')}}</div>
        <div class="plan-prise-old">$7.50</div>
        <div class="plan-prise-sale">$5.00</div>
        <div class="plan-descriptions">per week</div>
        <div class="plan-per-week">
            <span class="plan-per-week-old-prise">$85.97</span>
            <span class="plan-per-week-prise-sale">$59.97</span>
        </div>
        <div class="plan-prise-desc">{{__('front.billed_every_period_months', ['period' => 3])}}</div>
    </div>

    <div  class="personalized_plan_checkout_plan check">
        <div class="plan-title">6 month Plan</div>
        <div class="plan-prise-old">$7.50</div>
        <div class="plan-prise-sale">$3.75</div>
        <div class="plan-descriptions">per week</div>
        <div class="plan-per-week">
            <span class="plan-per-week-old-prise">$179.94</span>
            <span class="plan-per-week-prise-sale">$89.97</span>
        </div>
        <div class="plan-prise-desc">Billed every 6 months</div>
    </div>

    <div  class="personalized_plan_checkout_plan">
        <div class="plan-title">1 month Plan</div>
        <div class="plan-prise-old"> </div>
        <div class="plan-prise-sale">$7.50</div>
        <div class="plan-descriptions">per week</div>
        <div class="plan-per-week-prise-normal">$29.99</div>
        <div class="plan-prise-desc">Billed every 3 months</div>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="privacy-check">
        <label class="form-check-label" for="privacy-check">
            By choosing a payment method you agree to the <span class="red"> Privacy Policy</span>
        </label>
    </div>

    <div class="get_your_plan">
        <button type="submit"
                id="getYourPlanBtn"
                class="btn btn-questation"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#paymentModal"
                disabled="true"
        >
            {{__('front.get_your_plan')}}
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="paymentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content payment_custom_modal">
                <div class="modal-body">
                    <form  action="{{route('payment')}}" method="post" id="paymentForm">
                        @csrf
                        <div class="nothing_choose_wrap payment_modal_bg">
                            <div class="nothing_choose_navigation nothing_choose_navigation_card_mob">
                                <div class="nothing_choose_navigation_left show_mob">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="nothing_choose_navigation_right">
                                    <div class="nothing_choose_navigation_right__wrap">
                                        <div class="nothing_choose_navigation_right__card active" data-method="stripe">
                                            <img src="/images/cards_1.png" alt="">
                                        </div>
                                        <div class="nothing_choose_navigation_right__card" data-method="paypal">
                                            <img src="/images/cards_2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nothing_choose_details__wrap">
                                <div class="nothing_choose_details  nothing_choose_wrap_rel">
                                    <div class="wrap_details_info">
                                        <div class="wrap_details_info_params_one">12-month running plan</div>
                                        <div class="wrap_details_info_params_two">$85.97</div>
                                    </div>
                                    <div class="wrap_details_info">
                                        <div class="wrap_details_info_params_one">Discount</div>
                                        <div class="wrap_details_info_params_two">15%</div>
                                    </div>
                                    <div class="wrap_details_info">
                                        <div class="wrap_details_info_params_one">
                                            Total <span class="bolder_text" id="modalPrice">$59.97</span>
                                        </div>
                                        <div class="wrap_details_info_params_two stripe-field"><img src="/images/visa_card.png" alt=""></div>
                                    </div>


                                    <div class="wrap_details_info_card stripe-field">
                                        <label for="card-number" class="form-label__card">Card Number</label>
                                        <input
                                                type="text"
                                                name="card_no"
                                                class="form-control__card card_number"
                                                placeholder="1234 1234 1234 1234"
                                                inputmode="numeric"
                                                id="card-number"
                                                required
                                        >
                                    </div>

                                    <div class="wrap_details_info_card_cvc_expiration stripe-field">
                                        <div class="wrap_details_info_left">
                                            <label for="expiry" class="form-label__card">Expiration</label>
                                            <input
                                                    type="text"
                                                    id="expiry"
                                                    name="expiry"
                                                    class="form-control__card expiration"
                                                    placeholder="MM / YY"
                                                    required
                                            >
                                        </div>
                                        <div class="wrap_details_info_right">
                                            <div class="info_right">
                                                <label for="cvc" class="form-label__card">CVC</label>
                                            </div>
                                            <input
                                                    type="text"
                                                    id="cvc"
                                                    name="cvv"
                                                    class="form-control__card cvc"
                                                    placeholder="123"
                                                    maxlength="3"
                                                    required
                                            >
                                        </div>
                                    </div>

                                    <div class="wrap_details_info_card stripe-field">
                                        <label for="cardName" class="form-label__card">Name</label>
                                        <input type="text" id="cardName" name="card_name" class="form-control__card name" placeholder="Name">
                                    </div>

                                    <input type="hidden" id="paymentPrice" name="price">
                                    <input type="hidden" id="paymentPlan" name="plan">
                                    <input type="hidden" id="paymentMethod" name="method">
                                    <input type="hidden" id="clientCode" name="client_code" value="{{$code}}">

                                    <div class="wrap__next-form mob_complite">
                                        <a href="#" id="sendPaymentData" class="next-form next-form_2">
                                            {{__('front.complete_order')}}
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
    @push('custom-scripts')
        <script>
                $( document ).ready(function() {
                    const paymentData = {}

                    selectPaymentPlan();

                    checkPrivacy();

                    selectPaymentMethod();

                    sendPaymentData();

                    function selectPaymentPlan() {
                        if(!paymentData.length) {
                            let selectedBlock = document.querySelector('.personalized_plan_checkout_plan.check');
                            getDataFromBlock(selectedBlock)
                        }

                        $('.personalized_plan_checkout_plan').on('click', (event) => {
                            document.querySelector('.personalized_plan_checkout_plan.check').classList.remove('check');
                            let selectedBlock = event.currentTarget;
                            selectedBlock.classList.add('check');
                            getDataFromBlock(selectedBlock);
                        })
                    }

                    function checkPrivacy() {
                        $('#privacy-check').on('change', (event) => {
                            let isChecked = event.currentTarget.checked;
                            $('#getYourPlanBtn').attr('disabled', false);
                        })
                    }

                    function getDataFromBlock(selectedBlock) {
                        let priceText = selectedBlock.querySelector('.plan-prise-sale').innerText;
                        let price = priceText.replace('$', '');
                        let plan = selectedBlock.querySelector('.plan-title').innerText;
                        paymentData.price = price;
                        paymentData.plan = plan;
                        $('#modalPrice').text(priceText);
                    }

                    function selectPaymentMethod() {
                        if(!paymentData.method) {
                            let selectedMethod = document.querySelector('.nothing_choose_navigation_right__card.active');
                            let method = selectedMethod.getAttribute('data-method');
                            paymentData.method = method;
                            hideShowFields()
                        }

                        $('.nothing_choose_navigation_right__card ').on('click', (event) => {
                            document.querySelector('.nothing_choose_navigation_right__card.active').classList.remove('active');
                            let selectedMethod = event.currentTarget;
                            selectedMethod.classList.add('active');
                            let method = selectedMethod.getAttribute('data-method');
                            paymentData.method = method;
                            hideShowFields()
                        })

                        console.log(paymentData.method);

                        // if(method == 'stripe') {
                        //     $('.stripe-field').show();
                        // }
                        //
                        // if(paymentData.method == 'paypal') {
                        //     $('.stripe-field').hide()
                        // }
                    }

                    function hideShowFields() {
                        if(paymentData.method == 'stripe') {
                            $('.stripe-field').show();
                        }

                        if(paymentData.method == 'paypal') {
                            $('.stripe-field').hide()
                        }
                    }

                    function validatePaymentForm() {
                        let cardNumber = $("#card-number").val();
                        let expiry = $("#expiry").val();
                        let cvc = $("#cvc").val();

                        if(cardNumber && expiry && cvc) {
                            return true;
                        }

                        return false;
                    }

                    function sendPaymentData() {

                        $("#sendPaymentData").on('click', (event) => {
                            $("#paymentPrice").val(paymentData.price);
                            $("#paymentPlan").val(paymentData.plan);
                            $("#paymentMethod").val(paymentData.method);
                            let validated = true;

                            if(paymentData.method == 'stripe') {
                                let validated = validatePaymentForm();
                            }

                            if(validated) {
                                let form = $('#paymentForm');
                                form.submit()
                            }
                        })
                    }
                });
        </script>
    @endpush

</div>