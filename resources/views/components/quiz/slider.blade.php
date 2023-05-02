@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4">

        @foreach($currentQuestion['answers'] as $key => $answer)

            @if($currentQuestion['selectedSlider'] == $key)
                <div>
                    <img src="{{asset($answer['image'])}}" alt="" class="img-fluid">
                    <p class="text-center my-2">{{$answer['text']}}</p>
                </div>
            @endif


            @if($currentQuestion['selectedSlider'] == $key)

                <div class="my-3 my-lg-5" id="btns-{{$key}}">
                    @foreach($currentQuestion['buttons'] as $item)
                        <button class="btn {{$item['class']}} " wire:click.prevent="setCurrentSlider({{$key+1}})">
                            {{$item['text']}}
                        </button>
                    @endforeach
                </div>
            @endif

        @endforeach



    </div>
</div>