<header class="header summary">
    <div class="container">
        <div class="d-flex justify-content-between">
            <img src="{{asset('assets/logo/logo-green-xl.png')}}" alt="">
            <img class="adaptive" src="{{asset('assets/logo/logo-xs.png')}}" alt="">
            <a href="{{route('registration', $code)}}" type="button" class="btn font-white-600 btn-green-squre">
                {{__('front.get_your_plan')}}
            </a>
        </div>
    </div>
</header>

<section class="accent-section p-y-25 summary">
    <div class="container justify-content-between d-flex">
        <p class="font-accent-700 d-block">Your baby summary</p>
        <p class="font-grey-16-700 d-block">{{$gender}}, {{$age}}, {{$weight}}</p>
    </div>
</section>