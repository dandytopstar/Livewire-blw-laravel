<div class="c-questionslide" data-type="generalslide"
     data-question="q{{$quizNum}}" data-answertype="multipleanswer" data-answersamount="">
    <div class="c-questionslide-inner">
        <div class="c-questionslide-header">
            <a href="__" class="e-btn--arrow"></a>
            <img class="e-logo" src="__" alt="">
        </div>
        <div class="c-questionslide-content">
            <div class="c-progress-bar">
                <div class="c-progress-bar--inner"></div>
            </div>
            <div class="b-top">
{{--                <p class="e-subtitle">{{ __('quiz.tell_us_more') }}</p>--}}
                <h1 class="e-title">{{ __('quiz.q'.$quizNum) }}</h1>
            </div>
            <div class="b-questions">
                <p class="e-subtitle my-5">{{ __('quiz.select_multiple_options') }}</p>

                {{ $slot }}

            </div>
        </div>
        <div class="c-questionslide-footer">
            <p class="e-btn m-next m-oposite">{{ __('quiz.next') }}</p>
        </div>
    </div>
</div>
