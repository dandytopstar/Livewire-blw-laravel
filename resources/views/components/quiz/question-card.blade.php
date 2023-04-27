@props([
    'countQuestionsDots' => [],
    'currentQuestionNum' => 1,
    'currentQuestion' => [],
])



<div class="section quizz-box white-shadow-box-radius-10">
    <div class="section-wrapper">

        <div class="navigation-box">
            <div class="dots-box">
                {{$currentQuestionNum}} / {{count($countQuestionsDots)}}

{{--                @foreach($countQuestionsDots as $item)--}}
{{--                    <div class="dot-item @if($currentQuestionNum == $item) active @endif">--}}
{{--                        <div class="dot"></div>--}}
{{--                        <span class="font-grey-10-300">{{$item}}</span>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

            </div>
        </div>

        <div class="content-box">

            <div class="title-box full-width ">
                <p class="font-accent-700">Choose your option</p>
                <h2 class="font-grey-32-700">{{$currentQuestion['question']}}</h2>
            </div>

            <div class="action-box">
                {{ $slot }}
            </div>

        </div>
    </div>

    <button type="button" class="btn exit-btn" wire:click="prevSlide">
        <img src="http://blw-dev.loc/assets/icons/back-arrow.png">
    </button>

</div>

<div class="quizz-navigation-adaptive">
    <div class="arrow-left" wire:click="prevSlide">
        <img src="{{asset('assets/icons/arrow.png')}}" alt="">
    </div>
</div>
