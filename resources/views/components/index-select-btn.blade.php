<div class="container my-3">
    <div class="row text-center">
        <div class="col-md-3 d-none d-md-block d-lg-block"><img src="{{asset('img/male-img.png')}}" alt="" height="398px"></div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <div class="row align-self-center">

                <div class="col-12 my-3">
                    <h5>{{__('front.indexSelectTitle')}}</h5>
                </div>

                <div class="col-12 d-flex justify-content-center">

                    <div class="align-self-center index-gender-btn m-2">
                        <a href="{{route("quiz", 'boy')}}">
                            <img class="index-gender-male img-fluid" src="{{asset('img/baby-boy.png')}}" alt="">
                        </a>
                    </div>

                    <div class="align-self-center index-gender-btn m-2">
                        <a href="{{route("quiz", 'girl')}}">
                            <img class="index-gender-female img-fluid" src="{{asset('img/baby-girl.png')}}" alt="">
                        </a>
                    </div>

                </div>
            </div>



        </div>
        <div class="col-md-3 d-none d-md-block d-lg-block"><img src="{{asset('img/female-img.png')}}" alt="" height="398px"></div>
    </div>
</div>
