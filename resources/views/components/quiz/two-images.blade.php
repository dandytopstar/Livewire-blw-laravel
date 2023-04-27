@props([
    'currentQuestion' => [],
])

<div class="container text-center ">
    <div class="d-flex justify-content-center gap-4">
        @foreach($currentQuestion['answers'] as $key => $answer)
            <div class="pointer @if(!empty($answer['selected'])) click @endif shadow-sm px-1 pt-1 mb-3 bg-body rounded-3"
                 id="{{$currentQuestion['question_key'].'-'.$key}}"
                 wire:click="nextSlide({{$key}})"
            >
                <img src="{{$answer['image']}}" alt="" width="130px" class="mb-2">

                <p class="font-accent-700 pt-2">{{$answer['text']}}</p>
            </div>
        @endforeach

    </div>
</div>
