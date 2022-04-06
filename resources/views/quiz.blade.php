@extends('layouts.front')

@section('content')
    @livewire('quiz')
    <div class="d-flex flex-row quiz-to-bar">
        <div class="align-self-start quiz-left-arrow"></div>
        <div class="quiz-logo">
            <img class="logo logo-light" src="{{'front/assets/images/logo/logo_blw.png'}}" alt="Appzy Logo" style="width: 350px"/>
        </div>
        <div class="align-self-end quiz-right-arrow"></div>
    </div>
    <div class="mx-auto w-50">
        test
    </div>
@endsection