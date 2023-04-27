@props([
    'currentQuestion' => [],
])

<div class="container text-center mt-5 quiz-loader">
{{--    @dd($currentQuestion['loader']['file'])--}}
    <img src="{{asset('assets/quiz/animation.gif')}}" alt="" class="img-fluid">
</div>