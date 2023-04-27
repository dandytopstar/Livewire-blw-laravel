@props([
    'currentQuestion' => [],
])

<div class="container text-center ">
    <div class="gap-4">
        @foreach($currentQuestion['answers'] as $key => $answer)
            <button class="btn quiz-btn @if(!empty($answer['selected'])) active @endif"
                    id="{{$currentQuestion['question_key'].'-'.$key}}"
                    @if(!empty($currentQuestion['multiple']))
                        wire:click.prevent="nextSlideMultiple({{$key}})"
                    @else
                        wire:click.prevent="nextSlide({{$key}})"
                    @endif
                    type="button"
            >
                {{$answer['text']}}
            </button>
        @endforeach

    </div>
</div>