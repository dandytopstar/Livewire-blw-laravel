@extends('layouts.front')

@section('content')

    <div class="container my-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h3>Hello {{$client->name}}</h3>
                </div>
                <div class="my-3 text-center">
                    <h5>Your answers</h5>

                    @foreach($client->answers as $answerData)


                        <div class="card my-3 quiz-question-card" id="{{$answerData['key']}}">
                            <div class="card-body">
                                <h5>{{__('front.'.$answerData['question_translation_key'])}}</h5>

                                @foreach($answerData['answers'] as $answer)
                                    <h6>{{__('front.'.$answer['answer_translation_key'])}}</h6>
                                @endforeach
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection
