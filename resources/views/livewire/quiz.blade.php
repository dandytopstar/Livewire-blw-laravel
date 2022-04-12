<div>
    <div class="quiz-top-bar">
        <div class="container">
            <div class="row">

                <div class="col-4">
                    <i class="bi bi-arrow-left-circle quiz-top-bar-icon" wire:click="prevSlide"></i>
                </div>

                <div class="col-4">
                    <a href="/">
                        <img class="quiz-logo" src="{{'front/assets/images/logo/logo_blw.png'}}" alt="Appzy Logo"/>
                    </a>
                </div>

                <div class="col-4 pt-3 text--right">
                    <b>{{$currentQuestionNum}}</b> of {{$countQuestions}}
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-150">
        @if($this->currentQuestionNum !== $this->registrationStepNum)

            <div class="mx-auto w-50">
                @if(!empty($currentQuestion['question']))
                    <h2 class="text-center">{{$currentQuestion['question']}}</h2>
                @endif

                @if($currentQuestion['has_answers'] && !$currentQuestion['answer_with_image'] && !$currentQuestion['multiple'])

                    @foreach($currentQuestion['answers'] as $key => $answer)

                        <div wire:click="nextSlide({{$key}})"
                             class="card my-3 quiz-question-card quiz-active-answer"
                             style="cursor: pointer"
                             id="{{$currentQuestion['question_key'].'-'.$key}}"
                        >
                            <div class="card-body text-center">
                                @if($currentQuestion['image_before'])
                                    <i class="bi bi-arrow-right-circle-fill align-content-start"></i>
                                @endif
                                <span class="text-center">
                                    {{$answer['text']}}
                                </span>
                            </div>
                        </div>

                    @endforeach

                @endif


                @if($currentQuestion['has_answers'] && !$currentQuestion['answer_with_image'] && $currentQuestion['multiple'])

                    @foreach($currentQuestion['answers'] as $key => $answer)

                        <div wire:click="nextSlideMultiple({{$key}})"
                             class="card my-3 quiz-question-card"
                             style="cursor: pointer"
                             id="{{$currentQuestion['question_key'].'-'.$key}}"
                        >
                            <div class="card-body text-center">
                                @if($currentQuestion['image_before'])
                                    <i class="bi bi-arrow-right-circle-fill"></i>
                                @endif
                                {{$answer['text']}}
                            </div>
                        </div>

                    @endforeach

                @endif

                @if($currentQuestion['has_answers'] && $currentQuestion['answer_with_image'])
                    <div class="row text-center">
                        @foreach($currentQuestion['answers'] as $key => $answer)

                            <div class="col-12 col-md-6">
                                <img wire:click="nextSlide({{$key}})"
                                     src="{{$answer['image']}}"
                                     class="img-thumbnail"
                                     style="height: 300px; border-radius: 15px; cursor: pointer"
                                >
                            </div>

                        @endforeach
                    </div>

                @endif

                @if(!empty($currentQuestion['section_image']))
                    <div class="text-center">
                        <img src="{{$currentQuestion['section_image']}}" style="height: 400px">
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


                @foreach($resultAnswers as $answer)

                    <div>
                        {{$answer['number']}} => {{$answer['key']}} =>
                        @if(isset($answer['answer']))
                            {{$answer['answer']}}
                        @endif

                        @if(isset($answer['answers']))
                            @foreach($answer['answers'] as $item)
                                {{$item}}
                            @endforeach
                        @endif

                    </div>
                @endforeach

            </div>

        @else

            <section class="cta" id="action">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2">
                            <div class="heading text-center">
{{--                                <p class="heading-subtitle">Have a questation</p>--}}
                                <h2 class="heading-title">{{__('front.client_registration_title')}}</h2>
                            </div>
                            <form class="contactForm" method="post" action="assets/php/contact.php">
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
                                        <button class="btn btn--secondary">{{__('front.client_registration_button_text')}}</button>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-result"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        @endif
    </div>
</div>
