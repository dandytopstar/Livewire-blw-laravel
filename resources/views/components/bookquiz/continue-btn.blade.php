@props([
    'currentQuestion' => [],
])

<div class="container text-center">
    <button type="button" class="btn w-100 btn-green-squre continue-btn" wire:click="nextSlide" onclick="nextAnimation()">
        {{$currentQuestion['continue_button_text']}}
    </button>
</div>

@push('custom-scripts')
<script>
    var nextAnimation=()=>{
        $(".card-body").animate({
            opacity:"0",
        },300)
    }
</script>

    
@endpush