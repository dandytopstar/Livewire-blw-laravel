@props([
    'currentQuestion' => [],
])

<div class="action-box">
    <div class="option-box d-flex flex-wrap justify-content-between mb-20">
        @foreach($currentQuestion['answers'] as $key => $answer)
            <div class="option @if(!empty($answer['selected'])) click @endif"
                 id="{{$currentQuestion['question_key'].'-'.$key}}"
                 @if(!empty($currentQuestion['multiple']))
                     wire:click="nextSlideMultiple({{$key}})"
                 @else
                     wire:click="nextSlide({{$key}})"
                @endif
            >
                <div class="img-box">
                    <img src="{{$answer['image']}}" alt="" width="140px">
                </div>
                <p class="font-accent-700">{{$answer['text']}}</p>
            </div>
        @endforeach
    </div>
</div>