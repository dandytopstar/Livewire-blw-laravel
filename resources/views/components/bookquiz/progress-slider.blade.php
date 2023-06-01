@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4" id="progress-slider" data-count="{{count($currentQuestion['answers'])}}" data-seconds="{{$currentQuestion['seconds']}}">
        <div class="my-3">
            <img src="{{asset('assets/quiz/slider/final_image_book.png')}}" alt="" class="img-fluid">
        </div>

        <div id="myProgress relative">
            <div id="myBar"></div>
            <p id="progressNum">100%</p>
        </div>

    </div>

    <buttton class="d-none" id="finish-quiz" wire:click.prevent="nextSlide({{1}})"></buttton>
</div>

