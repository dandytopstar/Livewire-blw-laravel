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
                    </div>
                    
                @elseif($currentQuestion['selectedSlider'] < $key)
                    <div class="slide-image {{'slide-image'.$key-$currentQuestion['selectedSlider']}}">
                        <img src="{{asset($answer['image'])}}" alt="" class="img-fluid">
                    </div>
                @endif
            @endforeach

        </div>
        @foreach($currentQuestion['answers'] as $key => $answer)
            @if($currentQuestion['selectedSlider'] == $key)

                <div class="sel-answers border-top-1 relative pt-5 d-flex" id="btns-{{$key}}">
                        <p class="text-center selected-slide-image absolute">{{$answer['text']}}</p>
                        <div>
                            @foreach($currentQuestion['buttons'] as $item)
                                @if($item['class'] == "btn-no")
                                <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})" onclick="noAnimation(this)">
                                    {{$item['text']}}
                                </button>
                                @elseif ($item['class'] == "btn-yes")
                                <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})" onclick="yesAnimation()">
                                    {{$item['text']}}
                                </button>
                                @else
                                <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})" onclick="undecidedAnimation()">
                                    {{$item['text']}}
                                </button>
                                @endif
                            @endforeach
                        <div>
                </div>
            @endif

        @endforeach

        <input type="hidden" id="slider-no" value=""/>

    </div>
</div>


<script>
        window.undecidedAnimation = () =>{
            $( ".selected-slide-image" ).fadeOut( "slow");
        };

        window.yesAnimation=()=> {
            $( ".selected-slide-image" ).animate({
                right:"-400px",
                opacity:"0",
            });
        };

        window.noAnimation=()=> {
            $(".selected-slide-image").animate({
                left:"-400px",
                opacity:"0",
            });
        };
</script>