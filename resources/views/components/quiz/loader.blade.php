@props([
    'currentQuestion' => [],
])

<div class="container text-center quiz-loader">
    <video width="320" height="240" autoplay>
        <source src="{{asset('assets/quiz/animation.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>