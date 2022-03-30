<div
    class="c-questionslide @if(isset($firstSlide) && $firstSlide) m-first @endif"
    data-type="@if(isset($firstSlide) && $firstSlide) introslide @else generalslide @endif"
    data-question="q{{$quizNum}}"
    data-answertype="singleanswer"
    data-answersamount=""
>
    <div class="c-questionslide-inner">

        <div class="c-questionslide-header">
            <a href="/" class="e-btn--arrow"></a>
            <img class="e-logo" src="" alt="">
        </div>

        <div class="c-questionslide-content">
            <div class="c-progress-bar">
                <div class="c-progress-bar--inner"></div>
            </div>
            <div class="b-top">
{{--                <p class="e-subtitle">{{ __('quiz.tell_us_more') }}</p>--}}
                <h1 class="e-title my-5">
                    {{ __('quiz.'.$question) }}
                </h1>
            </div>
            <div class="b-questions">

                {{ $slot }}

            </div>
        </div>
    </div>
</div>
