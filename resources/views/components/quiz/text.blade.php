@props([
    'currentQuestion' => [],
])

<div class="container">
    <p class="p-2 text-center">
        {!! $currentQuestion['text'] !!}
    </p>
</div>