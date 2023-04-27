@props([
    'currentQuestion' => [],
])

<div class="container">
    <p class="p-2">
        {{$currentQuestion['text']}}
    </p>
</div>