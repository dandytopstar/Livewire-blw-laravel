@props([
    'currentQuestion' => [],
])

<div class="container text-center mt-5">
    <button type="button" class="btn w-100 btn-green-squre continue-btn" wire:click="nextSlide">
        {{$currentQuestion['continue_button_text']}}
    </button>
</div>