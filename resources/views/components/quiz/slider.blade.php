@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <div class="gap-4" id="slider-component">

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

        <input type="hidden" id="slider-no" value="">

    </div>
</div>

<script>
    window.addEventListener('slider-selected', event => {
        sliderButtons();
    });

    function sliderButtons() {

        if(document.querySelector('#slider-component')) {
            console.log(111);
            let no = document.querySelector('.btn-no');
            let yes = document.querySelector('.btn-yes');
            let undecided = document.querySelector('.btn-undecided');

            no.style.background = '#FF735C';
            no.style.color = '#fff';

            yes.style.background = '#00BD90';
            yes.style.color = '#fff';

            undecided.style.background = '#5FCAD3';
            undecided.style.color = '#fff';
        }
    }
</script>