<div class="container-box position-relative">

    @if($currentQuestionNum !== $registrationStepNum)

        <div class="section quizz-box white-shadow-box-radius-10">
            <div class="section-wrapper">

                <div class="navigation-box">
                    <div class="dots-box">

                        @foreach($countQuestionsDots as $item)
                            <div class="dot-item @if($currentQuestionNum == $item) active @endif">
                                <div class="dot"></div>
                                <span class="font-grey-10-300">{{$item}}</span>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="content-box">
                    <div class="title-box @if(!empty($currentQuestion['section_text'])) full-width @endif">
                        <p class="font-accent-700">{{__('front.choose_your_option')}}</p>
                        @if(!empty($currentQuestion['question']))
                            <h2 class="font-grey-32-700">{{$currentQuestion['question']}}</h2>
                            @if($currentQuestionNum == 1)
                                <p class="description font-grey-color-400"> {{__('front.prepared_weaning_meal')}}</p>
                            @endif
                            @if(!empty($currentQuestion['section_text']))
                                <p class="description font-grey-color-400">
                                    {!! $currentQuestion['section_text']!!}
                                </p>
                            @endif
                        @endif
                    </div>


                    @if($currentQuestion['has_answers'] && count($currentQuestion['answers']) < 3 && $currentQuestion['answer_with_image'])

                        <div class="action-box d-flex flex-wrap justify-content-center">
                            <div style="width: fit-content" class="d-flex d-flex flex-wrap justify-content-center">
                                @foreach($currentQuestion['answers'] as $key => $answer)
                                    <div class="option @if($answer['selected']) click @endif"
                                            id="{{$currentQuestion['question_key'].'-'.$key}}"
                                            @if($currentQuestion['multiple'])
                                                wire:click="nextSlideMultiple({{$key}})"
                                            @else
                                                wire:click="nextSlide({{$key}})"
                                            @endif
                                    >
                                        <div class="img-box">
                                            <img src="{{$answer['image']}}" alt="">
                                        </div>
                                        <p class="font-accent-700">{{$answer['text']}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($currentQuestion['has_answers'] && count($currentQuestion['answers']) > 3 && $currentQuestion['answer_with_image'])

                        <div class="action-box d-flex flex-column align-items-center" style="max-width: 565px">
                            <div class="option-box d-flex flex-wrap justify-content-between mb-20">
                                @foreach($currentQuestion['answers'] as $key => $answer)
                                    <div class="option col-4 me-0 mb-20 @if($answer['selected']) click @endif"
                                         id="{{$currentQuestion['question_key'].'-'.$key}}"
                                         @if($currentQuestion['multiple'])
                                             wire:click="nextSlideMultiple({{$key}})"
                                         @else
                                             wire:click="nextSlide({{$key}})"
                                            @endif
                                    >
                                        <div class="img-box">
                                            <img src="{{$answer['image']}}" alt="">
                                        </div>
                                        <p class="font-accent-700">{{$answer['text']}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    @endif

                    @if($currentQuestion['has_answers'] && !$currentQuestion['answer_with_image'])

                        <div class="action-box">
                            @foreach($currentQuestion['answers'] as $key => $answer)
                                <button type="button"
                                        class="btn quizz-btn font-grey-color-400 answer-btn @if($answer['selected']) active @endif"
                                        id="{{$currentQuestion['question_key'].'-'.$key}}"
                                        @if($currentQuestion['multiple'])
                                            wire:click="nextSlideMultiple({{$key}})"
                                        @else
                                            wire:click="nextSlide({{$key}})"
                                        @endif
                                >
                                    {{$answer['text']}}
                                </button>
                            @endforeach

                        </div>
                    @endif

                    @if(!empty($currentQuestion['input']))
                        <div class="action-box full-width">
                            <div class="form-container d-flex flex-column align-items-center">
                                <div class="form-row font-grey-color-400 w-100 d-flex justify-content-center">
                                    <input class="w-100" type="number"
                                        min="{{$currentQuestion['min']}}"
                                        max="{{$currentQuestion['max']}}"
                                        step="1" value="1"
                                        wire:model="rangeData"
                                    >
                                    <span class="p-3 text-dark">{{$currentQuestion['range_name']}}</span>

                                </div>
                                <button type="button" class="btn font-white-600 btn-green-squre" wire:click="nextSlide({{$rangeData}})">
                                    {{$currentQuestion['continue_button_text']}}
                                </button>
                            </div>

                        </div>
                    @endif

                    @if(!empty($currentQuestion['continue_button']) && empty($currentQuestion['input']))
                        <button type="button" class="btn font-white-600 btn-green-squre" wire:click="nextSlide">
                            {{$currentQuestion['continue_button_text']}}
                        </button>
                    @endif
                </div>
            </div>

            <button type="button" class="btn exit-btn" wire:click="prevSlide">
                <img src="{{asset('assets/icons/back-arrow.png')}}">
            </button>

            @if(!empty($currentQuestion['bottom_image_adaptive']))
                <img
                        class="bg-bottom-center-adaptive"
                        src="{{asset($currentQuestion['bottom_image_adaptive'])}}"
                        alt="" style="max-width: 200px"
                >
            @endif


        </div>

        <div class="quizz-navigation-adaptive">
            <div class="arrow-left" wire:click="prevSlide">
                <img src="{{asset('assets/icons/arrow.png')}}" alt="">
            </div>
        </div>
    @else
{{--        <div class="section quizz-box white-shadow-box-radius-10">--}}
{{--            <div class="section-wrapper">--}}
{{--                <div class="content-box">--}}
{{--                    <div class="title-box full-width">--}}
{{--                        <p class="font-accent-700">Enter Info</p>--}}
{{--                        <h2 class="font-grey-32-700">Please Enter Your Email</h2>--}}
{{--                    </div>--}}
{{--                    <div class="action-box full-width">--}}
{{--                        <div class="form-container d-flex flex-column align-items-center">--}}
{{--                            <div class="form-row font-grey-color-400 w-100 d-flex justify-content-center">--}}
{{--                                <input class="w-100" type="email" placeholder="Email" wire:model="clientRegistrationData.email">--}}
{{--                            </div>--}}
{{--                            <div class="form-row font-grey-color-400 w-100 d-flex justify-content-center">--}}
{{--                                <input class="w-100" type="text" placeholder="Name" wire:model="clientRegistrationData.name">--}}
{{--                            </div>--}}
{{--                            <button wire:click="createClient" type="button" class="btn font-white-600 btn-green-squre">--}}
{{--                                Registration--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    @endif

    @if(!empty($currentQuestion['bottom_image']) && $currentQuestion['bottom_image'])
        @if($currentQuestion['bottom_image_position'] == 'left')
            <img class="bg-bottom-left" src="{{asset('assets/bg-images/'.$currentQuestion['bottom_image_name'])}}" alt="">
        @endif

        @if($currentQuestion['bottom_image_position'] == 'right')
                <img class="bg-bottom-right" src="{{asset('assets/bg-images/'.$currentQuestion['bottom_image_name'])}}" alt="">
        @endif
    @endif

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