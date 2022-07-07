<div class="quiz-block">
    <section class="nothing_choose">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="nothing_choose_wrap">

                        @if($currentQuestionNum !== $registrationStepNum)

                            <div class="nothing_choose_navigation">
                                <div class="nothing_choose_navigation_left" wire:click="prevSlide">
                                    <img src="images/arrow_back.png" alt="" />
                                    <span>Back</span>
                                </div>
                                <div class="nothing_choose_navigation_right">
                                    <ul class="navigation_right">
                                        @foreach($countQuestionsDots as $item)
                                            <li>
                                                <a class="@if($currentQuestionNum == $item) navigation_active @endif">
                                                    {{$item}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div  class="nothing_choose_title_top">{{__('front.choose_your_option')}}</div>

                            @if(!empty($currentQuestion['question']))
                                <div  class="nothing_choose_title">{{$currentQuestion['question']}}</div>
                            @endif

                            @if($currentQuestionNum == 1)
                                <div  class="nothing_choose_descriptions">
                                    {{__('front.prepared_weaning_meal')}}
                                </div>
                            @endif

                            <div  class="nothing_choose_form__queshions">

                                @if($currentQuestion['has_answers'] && $currentQuestion['answer_with_image'])

                                    <div class="d-flex flex-wrap justify-content-center">
                                        @foreach($currentQuestion['answers'] as $key => $answer)
                                            <div class="wrap__img__queshions @if($answer['selected']) click @endif"
                                                 style="cursor: pointer;"

                                                 id="{{$currentQuestion['question_key'].'-'.$key}}"

                                                 @if($currentQuestion['multiple'])
                                                     wire:click="nextSlideMultiple({{$key}})"
                                                 @else
                                                     wire:click="nextSlide({{$key}})"
                                                 @endif
                                            >
                                                <img src="{{$answer['image']}}">

                                                <div class="queshions_title">{{$answer['text']}}</div>
                                            </div>
                                        @endforeach
                                    </div>

                                @endif

                                @if($currentQuestion['has_answers'] && !$currentQuestion['answer_with_image'])
                                    <div class="nothing_choose_form">

                                        @foreach($currentQuestion['answers'] as $key => $answer)
                                            <div class="wrap__input">
                                                <button class="form-control-choose @if($answer['selected']) active @endif"
                                                    id="{{$currentQuestion['question_key'].'-'.$key}}"

                                                    @if($currentQuestion['multiple'])
                                                        wire:click="nextSlideMultiple({{$key}})"
                                                    @else
                                                        wire:click="nextSlide({{$key}})"
                                                    @endif
                                                >
                                                    {{$answer['text']}}
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                            </div>

                            <div>
                                    @if(!empty($currentQuestion['section_image']))
                                        <div class="text-center">
                                            <img src="{{$currentQuestion['section_image']}}" class="quiz-image-card">
                                        </div>
                                    @endif

                                    @if(!empty($currentQuestion['section_text']))
                                        <div class="nothing_choose_form">
                                            <div class="wrap__about_blw">
                                                {{$currentQuestion['section_text']}}
                                            </div>
                                        </div>
                                    @endif

                                    @if(!empty($currentQuestion['continue_button']))
                                        <div  class="wrap__next-form">
                                            <a href="#" class="next-form next-form_2" wire:click="nextSlide">
                                                {{$currentQuestion['continue_button_text']}}
                                            </a>
                                        </div>
                                    @endif
                                </div>

                        @else

                            <div class="nothing_choose_title_top">Enter Info</div>
                            <div class="nothing_choose_title">{{__('front.client_registration_title')}}</div>
                            <div class="nothing_choose_form">
                                <div class="wrap__input wrap__input_enter_info mob">
                                    <input wire:model="clientRegistrationData.name" class="form-control-choose" type="text" id="name" name="client-name" placeholder="{{__('front.name')}}" required=""/>
                                    <input wire:model="clientRegistrationData.email" class="form-control-choose" type="email" id="email" name="client-email" placeholder="{{__('front.email')}}" required=""/>
                                </div>
                                <div class="wrap__input">
                                    <textarea wire:model="clientRegistrationData.additional_infos" class="form-control-choose" id="exampleFormControlTextarea1" rows="3" placeholder="Request Details"></textarea>
                                </div>
                                <div class="wrap__next-form">
                                    <button wire:click="createClient" class="form-control-choose active">
                                        {{__('front.client_registration_button_text')}}
                                    </button>
                                </div>

                            </div>


{{--                            <div class="container">--}}
{{--                                <section class="cta" id="action">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12 col-lg-8 offset-lg-2">--}}
{{--                                                <div class="heading text-center">--}}

{{--                                                    <h2 class="heading-title">{{__('front.client_registration_title')}}</h2>--}}
{{--                                                </div>--}}

{{--                                                <div class="row">--}}
{{--                                                    <div class="col-12 col-md-6">--}}
{{--                                                        <input wire:model="clientRegistrationData.name" class="form-control" type="text" id="name" name="client-name" placeholder="{{__('front.name')}}" required=""/>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 col-md-6">--}}
{{--                                                        <input wire:model="clientRegistrationData.email" class="form-control" type="email" id="email" name="client-email" placeholder="{{__('front.email')}}" required=""/>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12">--}}
{{--                                                        <textarea wire:model="clientRegistrationData.additional_infos" class="form-control" id="additional-infos" placeholder="request details" name="client-additional-infos" cols="30" rows="10"></textarea>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12 text-center">--}}
{{--                                                        <button wire:click="createClient" class="btn btn--secondary">--}}
{{--                                                            {{__('front.client_registration_button_text')}}--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-12">--}}
{{--                                                        <div class="contact-result"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </section>--}}
{{--                            </div>--}}

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    window.addEventListener('answer-selected', event => {

        if(event.detail.answers) {

            let questionKey = event.detail.key;
            let answers = event.detail.answers;

            for (let key in answers) {
                let selectedAnswer = document.querySelector("#"+questionKey+"-"+key);

                if(answers[key].selected) {
                    selectedAnswer.classList.add('click');
                } else {
                    selectedAnswer.classList.remove('click');
                }
            }

        }

    })
</script>