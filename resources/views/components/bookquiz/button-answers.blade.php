@props([
    'currentQuestion' => [],
])

<div class="container text-center ">
    <div class="gap-4">
        @foreach($currentQuestion['answers'] as $key => $answer)
            <button class="quiz-btn
                        @if(!empty($answer['selected'])) click-green selected-quiz-btn @else unlected-quiz-btn @endif 
                        @if(!empty($currentQuestion['multiple'])) multiple-btn @endif
                        @if(empty($currentQuestion['multiple'])) single-btn @endif
                        @if(!empty($answer['deselectAll'])) deselectAll-btn @endif
                    "
                    id="{{$currentQuestion['question_key'].'-'.$key}}"
                    @if(!empty($currentQuestion['multiple']))

                    @else
                        wire:click.prevent="nextSlide({{$key}})"
                    @endif

                    type="button"

                    @if(empty($currentQuestion['multiple']))
                    onclick="nextAnimation()"
                    @endif
            >
                {{$answer['text']}}
            </button>
        @endforeach

    </div>
</div>



<script>
    window.nextAnimation=()=>{
        $(".card-body").animate({
            opacity:"0",
        },100)
    }
</script>


