@extends('layouts.main')

@section('content')

    <div class="section quizz-box white-shadow-box-radius-10">
        <div class="section-wrapper">

            <div class="content-box">
                <div class="title-box">
                    <h2 class="font-grey-32-700">{{__('front.your_answers')}}</h2>
                </div>
                <div class="action-box">
                    @foreach($client->answers as $answerData)
                        <div class="w-100 text-center  my-3">
                            <p class="font-accent-18-700">{{__('front.'.$answerData['question_translation_key'])}}</p>
                            @if(empty($answerData['answers']))
                                <p>
                                    <b>{{$answerData['result']}} {{__('front.range_name_'.$answerData['question_number'])}}</b>
                                </p>
                            @endif

                            @if(!empty($answerData['answers']))
                                @foreach($answerData['answers'] as $answer)
                                    <p>
                                        <b>{{__('front.'.$answer['answer_translation_key'])}}</b>
                                    </p>
                                @endforeach
                            @endif
                        </div>
                    @endforeach
                </div>

                <a href="{{route('summary', $code)}}" type="button" class="btn font-white-600 btn-green-squre">
                    {{__('front.go_to_summary_page')}}
                </a>
            </div>
        </div>

        <img class="bg-bottom-center-adaptive" src="{{asset('assets/bg-images/bg-image-adaptive-2.png')}}" alt="" style="max-width: 200px">
    </div>

    <img class="bg-bottom-right" src="{{asset('assets/bg-images/bg-quizz-2.png')}}" alt="">

@endsection