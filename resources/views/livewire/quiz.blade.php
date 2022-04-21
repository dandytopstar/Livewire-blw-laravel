<div>
    <div class="quiz-top-bar">
        <div class="container">
            <div class="row">

                {{--       Desktop         --}}
                <div class="col-4 d-none d-md-block">
                    <i class="bi bi-arrow-left-circle quiz-top-bar-icon" wire:click="prevSlide"></i>
                </div>

                <div class="col-4 d-none d-md-block text-center">
                    <a href="/">
                        <img class="quiz-logo" src="{{'front/assets/images/logo/logo_blw.png'}}" alt="Appzy Logo"/>
                    </a>
                </div>

                <div class="col-4 pt-3 text--right d-none d-md-block">
                    <b>{{$currentQuestionNum}}</b> of {{$countQuestions}}
                </div>

                {{--       Mobile         --}}
                <div class="col-12 d-md-none d-sm-block text-center">
                    <a href="/">
                        <img class="quiz-logo img-fluid" src="{{'front/assets/images/logo/logo_blw.png'}}"  alt="Appzy Logo"/>
                    </a>
                </div>

                <div class="col-6 d-md-none d-sm-block text-center">
                    <i class="bi bi-arrow-left-circle quiz-top-bar-icon" wire:click="prevSlide"></i>
                </div>

                <div class="col-6 pt-3 d-md-none d-sm-block text-center">
                    <b>{{$currentQuestionNum}}</b> of {{$countQuestions}}
                </div>

            </div>
        </div>
    </div>

    @if($this->currentQuestionNum !== $this->registrationStepNum)

        <div class="container mt-100">
            <div class="mx-auto w-50">
                @if(!empty($currentQuestion['question']))
                    <h5 class="text-center mx-auto">{{$currentQuestion['question']}}</h5>
                @endif

                @if($currentQuestion['has_answers'] && !$currentQuestion['answer_with_image'])

                    @foreach($currentQuestion['answers'] as $key => $answer)

                        <div class="card my-3 quiz-question-card @if($answer['selected']) quiz-active-answer @endif"
                             style="cursor: pointer"
                             id="{{$currentQuestion['question_key'].'-'.$key}}"

                             @if($currentQuestion['multiple'])
                                 wire:click="nextSlideMultiple({{$key}})"
                             @else
                                 wire:click="nextSlide({{$key}})"
                                @endif
                        >
                            <div class="card-body text-center">
                                @if($currentQuestion['image_before'])

                                @endif
                                <span class="text-center">
                                {{$answer['text']}}
                            </span>
                            </div>
                        </div>

                    @endforeach

                @endif

                @if($currentQuestion['has_answers'] && $currentQuestion['answer_with_image'])

                    <div class="d-flex flex-wrap justify-content-center">
                        @foreach($currentQuestion['answers'] as $key => $answer)
                            <div class="p-3 text-center" style="width: 215px; cursor: pointer;"

                                 @if($currentQuestion['multiple'])
                                     wire:click="nextSlideMultiple({{$key}})"
                                 @else
                                     wire:click="nextSlide({{$key}})"
                                 @endif
                            >
                                <div class="card quiz-question-card text-center mx-auto @if($answer['selected']) quiz-active-answer @endif"
                                     id="{{$currentQuestion['question_key'].'-'.$key}}"
                                >

                                    <img src="{{$answer['image']}}" class="mx-auto quiz-image-card" >

                                    <div class="card-body">
                                        <p class="card-text">{{$answer['text']}}</p>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                @endif

                @if(!empty($currentQuestion['section_image']))
                    <div class="text-center">
                        <img src="{{$currentQuestion['section_image']}}" class="quiz-image-card">
                    </div>
                @endif

                @if(!empty($currentQuestion['section_text']))
                    <p>{{$currentQuestion['section_text']}}</p>
                @endif

                @if(!empty($currentQuestion['continue_button']))
                    <button class="btn btn--primary btn-new-green w-100" wire:click="nextSlide">
                        {{$currentQuestion['continue_button_text']}}
                    </button>
                @endif

{{--                @foreach($resultAnswers as $answer)--}}

{{--                    <div>--}}
{{--                        {{$answer['number']}} => {{$answer['key']}} =>--}}

{{--                        @if(isset($answer['answer']))--}}
{{--                            {{$answer['answer']}}--}}
{{--                        @endif--}}

{{--                        @if(isset($answer['answers']))--}}
{{--                            @foreach($answer['answers'] as $item)--}}
{{--                                {{$item}}--}}
{{--                            @endforeach--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                @endforeach--}}

            </div>
        </div>

    @else

        <div class="container">
            <section class="cta" id="action">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2">
                            <div class="heading text-center">
                                {{--                                <p class="heading-subtitle">Have a questation</p>--}}
                                <h2 class="heading-title">{{__('front.client_registration_title')}}</h2>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input wire:model="clientRegistrationData.name" class="form-control" type="text" id="name" name="client-name" placeholder="{{__('front.name')}}" required=""/>
                                </div>
                                <div class="col-12 col-md-6">
                                    <input wire:model="clientRegistrationData.email" class="form-control" type="email" id="email" name="client-email" placeholder="{{__('front.email')}}" required=""/>
                                </div>
                                <div class="col-12">
                                    <textarea wire:model="clientRegistrationData.additional_infos" class="form-control" id="additional-infos" placeholder="request details" name="client-additional-infos" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button wire:click="createClient" class="btn btn--secondary">
                                        {{__('front.client_registration_button_text')}}
                                    </button>
                                </div>
                                <div class="col-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

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
                    selectedAnswer.classList.add('quiz-active-answer');
                } else {
                    selectedAnswer.classList.remove('quiz-active-answer');
                }
            }

        }

    })
</script>