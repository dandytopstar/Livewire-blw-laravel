@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4" id="progress-slider" data-count="{{count($currentQuestion['answers'])}}" data-seconds="{{$currentQuestion['seconds']}}">

{{--        @foreach($currentQuestion['answers'] as $key => $answer)--}}

{{--            <div class="my-3" id="slide-{{$key}}" style="display: none">--}}
{{--                <img src="{{asset($answer['image'])}}" alt="" class="img-fluid">--}}
{{--                <p class="p-2">--}}
{{--                    {{$answer['text']}}--}}
{{--                </p>--}}
{{--            </div>--}}

{{--        @endforeach--}}

        <div class="my-3">
            <img src="{{asset('assets/quiz/slider/final_image.jpg')}}" alt="" class="img-fluid">
        </div>

        <div id="myProgress">
            <div id="myBar">10%</div>
        </div>

    </div>

    <buttton class="d-none" id="finish-quiz" wire:click.prevent="nextSlide({{1}})"></buttton>
</div>

