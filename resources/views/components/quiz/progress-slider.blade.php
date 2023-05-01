@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4" id="progress-slider" data-count="{{count($currentQuestion['answers'])}}" data-seconds="{{$currentQuestion['seconds']}}">

        @foreach($currentQuestion['answers'] as $key => $answer)

            <div class="my-3" id="slide-{{$key}}" style="display: none">
                <img src="{{asset($answer['image'])}}" alt="" class="img-fluid">
                <p class="p-2">
                    {{$answer['text']}}
                </p>

                <div class="progress">
                    <div class="progress-bar bg-success"
                         role="progressbar"
                         aria-label="Success example"
                         style="width: {{$answer['percent']}}%"
                         aria-valuenow="25"
                         aria-valuemin="0"
                         aria-valuemax="100"
                    >
                    </div>
                </div>
                <div class="text-center">{{$answer['percent']}}%</div>
            </div>

        @endforeach

        <buttton class="d-none" id="finish-quiz" wire:click.prevent="nextSlide({{1}})"></buttton>

    </div>
</div>