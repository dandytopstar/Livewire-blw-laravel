@props([
    'currentQuestion' => [],
])

<div class="action-box full-width">
    <div class="form-container d-flex flex-column align-items-center">
        <div class="form-row font-grey-color-400 w-100 d-flex justify-content-center">
            <input class="w-100" type="number"
                   min="{{$currentQuestion['min']}}"
                   max="{{$currentQuestion['max']}}"
                   step="1" value="1"
                   wire:model="rangeData"
            >
            <span class="p-3 text-dark">{{$currentQuestion['range_name']}}</span>

        </div>
        <button type="button" class="btn font-white-600 btn-green-squre" wire:click="nextSlide({{$rangeData}})">
            {{$currentQuestion['continue_button_text']}}
        </button>
    </div>

</div>