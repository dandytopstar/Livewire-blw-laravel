@extends('layouts.main')

@section('content')

    <div class="container-box position-relative">


        <div class="section quizz-box white-shadow-box-radius-10">
            <div class="section-wrapper">
                <div class="content-box">
                    <div class="title-box full-width">
                        <p class="font-accent-700">Enter Info</p>
                        <h2 class="font-grey-32-700">Please Enter Your Email</h2>
                    </div>
                    <div class="action-box full-width">
                        <form action="{{route('create-client')}}" method="post">
                            @csrf
                            <div class="form-container d-flex flex-column align-items-center">
                                <div class="form-row font-grey-color-400 w-100 d-flex justify-content-center">
                                    <input class="w-100" type="email" placeholder="Email" name="email" required>
                                </div>

                                <input type="hidden" name="code" value="{{$code}}" required>

                                <button id="createClient" type="submit" class="btn font-white-600 btn-green-squre">
                                    Register
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <img class="bg-bottom-left" src="{{asset('assets/bg-images/bg-quizz-3.png')}}" alt="" style="transform: scale(-1, 1)">
    </div>

@endsection