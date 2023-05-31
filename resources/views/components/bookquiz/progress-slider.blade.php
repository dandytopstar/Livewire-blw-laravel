@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4" id="progress-slider" data-count="{{count($currentQuestion['answers'])}}" data-seconds="{{$currentQuestion['seconds']}}">
        <div class="my-3">
            <img src="{{asset('assets/quiz/slider/final_image.jpg')}}" alt="" class="img-fluid">
        </div>

        <div id="myProgress">
            <div id="myBar">100%</div>
        </div>

    </div>

    <buttton class="d-none" id="finish-quiz" wire:click.prevent="nextSlide({{1}})"></buttton>
</div>

