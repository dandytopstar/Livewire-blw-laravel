@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4" id="progress-slider" data-count="{{count($currentQuestion['answers'])}}" data-seconds="{{$currentQuestion['seconds']}}">
        <div class="my-3">
            <img src="{{asset('assets/quiz/slider/final_image_book.jpg')}}" alt="" class="img-fluid">
        </div>

        <div id="myProgress relative" class="mx-20">
            <div id="myBar"></div>
            <p id="progressNum">100%</p>
        </div>

    </div>

    <buttton class="d-none" id="finish-quiz" wire:click.prevent="nextSlide({{1}})"></buttton>
</div>

