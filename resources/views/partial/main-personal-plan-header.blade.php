<header class="header  py-sm-3 py-md-4">
    <div class="container ">
{{--        <img class="img-center" src="{{asset('assets/logo/main-logo.png')}}" alt="">--}}
        <img class="desktop-logo img-center" src="{{asset('assets/logo/main-logo.png')}}" alt="">
{{--        <img src="{{asset('assets/logo/main-logo.png')}}" alt="" class="img-center desktop-logo">--}}
    </div>
</header>

<section class="accent-section py-3 summary">
    <div class="container justify-content-between d-flex">
        <p class="font-accent-700 d-block">Your baby summary</p>
        <p class="font-grey-16-700 d-block">{{$gender}}, {{$weight}}</p>
    </div>
</section>