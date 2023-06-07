@props([
    'currentQuestion' => [],
])

<div class="container text-center" >
    <div class="gap-4" id="slider-component">
        <div class="slide-view " wire:ignore>
            @foreach($currentQuestion['answers'] as $key => $answer)
                @if($currentQuestion['selectedSlider'] == $key)
                    <div class="slide-image selected-slide-image">
                        <img src="{{asset($answer['image'])}}" alt="" class="img-fluid"> 
                    </div>
                    
                @elseif($currentQuestion['selectedSlider'] < $key)
                    <div class="slide-image {{'slide-image'.$key-$currentQuestion['selectedSlider']}}">
                        <img src="{{asset($answer['image'])}}" alt="" class="img-fluid unselected">
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
                                <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})" onclick="noAnimation()">
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
        var nowImage =0;
       let moveAnimation = function () {
            let i= nowImage
            let moveSlide = setInterval(() => {
                if(i>5){ clearInterval(moveSlide) }
                $( ".slide-image"+i ).animate({
                right:"+=20px",
                opacity:"+=0.15",
                scale:"+=0.1"
            },200,"swing")
                i++
            }, 300);
        }

        window.undecidedAnimation = ()=>{
            switch(nowImage){
                case 0:
                    $( ".selected-slide-image" ).fadeOut(200);
                    break;
                default:
                    $( ".slide-image"+nowImage ).fadeOut(200);
                    $( ".selected-slide-image" ).fadeOut(200);
            }
            nowImage++;
            moveAnimation()
            
        };

        window.yesAnimation=()=> {
            switch(nowImage){
                case 0:
                    $( ".selected-slide-image" ).animate({
                        right:"-=400px",
                        opacity:"0"
                    },200)
                    break;
                default:
                    $( ".slide-image"+nowImage ).animate({
                        right:"-=400px",
                        opacity:"0"
                    },200)
                    $( ".selected-slide-image" ).animate({
                        right:"-=400px",
                        opacity:"0"
                    },200)
            }
            nowImage++;
            moveAnimation()
        };
        window.noAnimation=()=> {
            switch(nowImage){
                case 0:
                    $( ".selected-slide-image" ).animate({
                        left:"-=400px",
                        opacity:"0"
                    },200)
                    break;
                default:
                    $( ".slide-image"+nowImage ).animate({
                        left:"-=400px",
                        opacity:"0"
                    },200)
                    $( ".selected-slide-image" ).animate({
                        left:"-=400px",
                        opacity:"0"
                    },200)
                    break;
            }
            nowImage++;
            moveAnimation()
        }
    </script>
