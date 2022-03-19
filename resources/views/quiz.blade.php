@extends('layouts.app')

@section('content')

    <div class="container">
        <x-quiz.questioner :gender="$gender"/>
    </div>

@endsection
