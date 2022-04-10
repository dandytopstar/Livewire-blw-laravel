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
        <div class="mx-auto w-50">
            @if(!empty($currentQuestion['question']))
                <h2 class="text-center">{{$currentQuestion['question']}}</h2>
            @endif

            @if($currentQuestion['has_answers'] && !$currentQuestion['answer_with_image'])

                @foreach($currentQuestion['answers'] as $answer)

                    <div class="card my-3 quiz-question-card" wire:click="nextSlide" style="cursor: pointer">
                        <div class="card-body text-center">
                            {{$answer['text']}}
                        </div>
                    </div>

                @endforeach

            @endif

            @if($currentQuestion['has_answers'] && $currentQuestion['answer_with_image'])
                <div class="row text-center">
                    @foreach($currentQuestion['answers'] as $answer)

                        <div class="col-12 col-md-6">
                            <img src="{{$answer['image']}}" class="img-thumbnail" wire:click="nextSlide" style="height: 300px; border-radius: 15px; cursor: pointer">
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

        </div>
    </div>
</div>
