@props([
    'currentQuestion' => [],
])

<div class="container text-center quiz-loader" style="width: 300px">
    <video width="100%" autoplay playsinline>
        <source src="{{asset('assets/quiz/animation.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>