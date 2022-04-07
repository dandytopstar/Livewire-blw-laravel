<div>
    <div class="quiz-top-bar">
        <div class="container">
            <div class="row">

                <div class="col-4 quiz-left-arrow">
                    <i class="bi bi-arrow-left-circle quiz-top-bar-icon"></i>
                </div>

                <div class="col-4">
                    <a href="/">
                        <img class="quiz-logo" src="{{'front/assets/images/logo/logo_blw.png'}}" alt="Appzy Logo"/>
                    </a>
                </div>

                <div class="col-4 quiz-right-arrow text--right">
{{--                    <i class="bi bi-arrow-right-circle quiz-top-bar-icon"></i>--}}

                    {{$currentQuestionNum}} of {{$countQuestions}}
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-150">
        <div class="mx-auto w-50">
                @if(!empty($currentQuestion['question']))
                    <h2>{{$currentQuestion['question']}}</h2>
                    
                @endif
        </div>
    </div>
</div>
