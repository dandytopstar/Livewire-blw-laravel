<section class="about bg-gray" id="about">
    <div class="container">
        <div class="row align-items-center text-center-xs">
            <div class="col-12 col-md-6 col-lg-6">
                <img class="img-fluid mb-5" src="{{'front/assets/images/screenshots/about.png'}}" alt="App screenshot"/>
            </div>

            <div class="col-12 col-md-6 col-lg-5 offset-lg-1">
                <div class="heading heading-1">
                    <p class="heading-subtitle">{{__("front.about_title")}}</p>
                    <h2 class="heading-title">{{__("front.about_subtitle")}}</h2>
{{--                    <div>--}}
{{--                        <ol>--}}
{{--                            <li class="heading-desc">{{__("front.about_list_item_1")}}</li>--}}
{{--                            <li class="heading-desc">{{__("front.about_list_item_2")}}</li>--}}
{{--                            <li class="heading-desc">{{__("front.about_list_item_3")}}</li>--}}
{{--                            <li class="heading-desc">{{__("front.about_list_item_4")}}</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
                    <div class="row mt-5">
                        <div class="col-12 col-md-6">
                            <img class="mb-3" height="50" src="{{asset('front/assets/images/icons/a_guide.png')}}" alt="">
                            <h6>{{__("front.about_list_item_1_title")}}</h6>
                            <p>{{__("front.about_list_item_1")}}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <img class="mb-3" height="50" src="{{asset('front/assets/images/icons/blw_e_book.png')}}" alt="">
                            <h6>{{__("front.about_list_item_2_title")}}</h6>
                            <p>{{__("front.about_list_item_2")}}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <img class="mb-3" height="50" src="{{asset('front/assets/images/icons/meal_plan.png')}}"alt="">
                            <h6>{{__("front.about_list_item_3_title")}}</h6>
                            <p>{{__("front.about_list_item_3")}}</p>
                        </div>
                        <div class="col-12 col-md-6">
                            <img class="mb-3" height="50" class="mb-3" src="{{asset('front/assets/images/icons/recipes.png')}}" alt="">
                            <h6>{{__("front.about_list_item_4_title")}}</h6>
                            <p>{{__("front.about_list_item_4")}}</p>
                        </div>
                    </div>
                </div>
                <div class="about-action">
                    <a class="btn btn--primary btn-new-green" href="{{route('quiz')}}">
                        {{__("front.start_quiz")}}
                    </a>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>