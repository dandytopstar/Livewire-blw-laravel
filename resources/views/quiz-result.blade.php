@extends('layouts.quiz-layout')

@section('content')

    <section class="nothing_choose">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="nothing_choose_wrap">
                        <div  class="nothing_choose_title_top">
                            {{__('front.your_answers')}}
                        </div>
                        <div  class="nothing_choose_title">
                            {{__('front.hello')}} {{$client->name}}
                        </div>

                        @foreach($client->answers as $answerData)

                            <div  class="nothing_choose_form" id="{{$answerData['key']}}">
                                <div  class="wrap__input__question">
                                    {{__('front.'.$answerData['question_translation_key'])}}
                                </div>

                                @foreach($answerData['answers'] as $answer)
                                    <div  class="wrap__input__answer">
                                        {{__('front.'.$answer['answer_translation_key'])}}
                                    </div>
                                @endforeach
                            </div>

                        @endforeach

                        <div  class="wrap__next-form ">
                            <a href="{{route('summary', $code)}}" class="next-form next-form_2 go_to_summary_page">
                                {{__('front.go_to_summary_page')}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection