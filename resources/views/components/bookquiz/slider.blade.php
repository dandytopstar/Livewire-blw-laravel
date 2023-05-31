@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4" id="slider-component">
        <div class="slide-view">
            @foreach($currentQuestion['answers'] as $key => $answer)
                @if($currentQuestion['selectedSlider'] == $key)
                    <div class="slide-image selected-slide-image">
                        <img src="{{asset($answer['image'])}}" alt="" class="img-fluid">
                        <p class="text-center my-2">{{$answer['text']}}</p>
                    </div>
                @elseif($currentQuestion['selectedSlider'] < $key)
                    <div class="slide-image {{'slide-image'.$key-$currentQuestion['selectedSlider']}}">
                        <img src="{{asset($answer['image'])}}" alt="" class="img-fluid">
                        <p class="text-center my-2">{{$answer['text']}}</p>
                    </div>
                @endif
            @endforeach
        </div>
        @foreach($currentQuestion['answers'] as $key => $answer)
            @if($currentQuestion['selectedSlider'] == $key)

                <div class="my-3 my-lg-5 sel-answers" id="btns-{{$key}}">
                    @foreach($currentQuestion['buttons'] as $item)
                        @if($item['class'] == "btn-no")
                        <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})" onclick="yesAnimation()">
                            {{$item['text']}}
                        </button>
                        @elseif ($item['class'] == "btn-yes")
                        <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})" onclick="noAnimation()">
                            {{$item['text']}}
                        </button>
                        @else
                        <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})" onclick="undecidedAnimation()">
                            {{$item['text']}}
                        </button>
                        @endif
                    @endforeach
                </div>
            @endif

        @endforeach

        <input type="hidden" id="slider-no" value="">

    </div>
</div>

@push('custom-scripts')
<script>
    let undecidedAnimation = ()=>{
        $( ".selected-slide-image" ).fadeOut( "slow");

    };
    let noAnimation = ()=>{
        $( ".selected-slide-image" ).animate({
            left:"400px",
            opacity:"0"
        });
    };
    let yesAnimation = ()=>{
        $( ".selected-slide-image" ).animate({
            right:"400px",
            opacity:"0"
        });
    };

</script>
    
@endpush