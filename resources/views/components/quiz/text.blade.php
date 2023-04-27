@props([
    'currentQuestion' => [],
])

<div class="container text-center ">
    <button type="button" class="btn w-100 btn-green-squre" wire:click="nextSlide">
        {{$currentQuestion['continue_button_text']}}
    </button>
</div>