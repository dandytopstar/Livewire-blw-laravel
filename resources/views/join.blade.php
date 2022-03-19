@extends('layouts.app')

@section('content')

    <div class="container">
        <x-section
            :title="'join.first_section_title'"
            :subtitle="'join.first_section_sub_title'"
            :shadow="true"
        >
{{--            <div class="d-flex justify-content-between text-center">--}}
{{--                <div class="p-2 display-6">5</div>--}}
{{--                <div class="p-2 display-6">4</div>--}}
{{--                <div class="p-2 display-3">--}}
{{--                    3--}}
{{--                    <p>kg</p>--}}
{{--                </div>--}}
{{--                <div class="p-2 display-6">2</div>--}}
{{--                <div class="p-2 display-6">1</div>--}}
{{--            </div>--}}

            <div class="text-center">
                <img class="img-fluid" src="{{asset('img/baby-smile.png')}}" alt="">
            </div>

        </x-section>

        <x-section>
            <div class="row">
                <div class="col-10 col-md-8 text-center mx-auto">
                    <a href="{{route('get-plan', $render['clientCode'])}}">
                        <button class="btn btn-success join-button">{{__('join.join_button_text')}}</button>
                    </a>
                </div>
            </div>
        </x-section>

        <x-section :title="'join.second_section_title'">
            <div class="d-flex justify-content-center flex-wrap">
                <div class="text-center shadow p-3 bg-body rounded m-2" style="width: 302px">
                    <p class="fw-bold" style="font-size: 18px;">{{__('join.second_section_block_1')}}</p>
                    <img class="img-fluid" src="{{asset('img/tick.png')}}" width="200">
                </div>

                <div class="text-center shadow p-3 bg-body rounded m-2" style="width: 302px">
                    <p class="fw-bold" style="font-size: 18px;">{{__('join.second_section_block_2')}}</p>
                    <img class="img-fluid" src="{{asset('img/scale.png')}}" width="200">
                </div>

                <div class="text-center shadow p-3 bg-body rounded m-2" style="width: 302px">
                    <p class="fw-bold" style="font-size: 18px;">{{__('join.second_section_block_3')}}</p>
                    <img class="img-fluid" src="{{asset('img/diet_3.png')}}" width="200">
                </div>

                <div class="text-center shadow p-3 bg-body rounded m-2" style="width: 302px">
                    <p class="fw-bold" style="font-size: 18px;">{{__('join.second_section_block_4')}}</p>
                    <img class="img-fluid" src="{{asset('img/diet_4.png')}}" width="200">
                </div>
            </div>
        </x-section>
    </div>

@endsection
