<header class="header summary">
    <div class="container">
        <div class="summary-header-logo" style="flex-wrap: wrap;">
            <img src="{{asset('assets/logo/main-logo.png')}}" alt="" class="desktop-logo">
            <div>
                <img class="adaptive" src="{{asset('assets/logo/main-logo.png')}}" alt="">
            </div>

            <div>
                <a href="{{route('registration', $code)}}" type="button" class="btn font-white-600 btn-green-squre">
                    {{__('front.get_your_plan')}}
                </a>
            </div>

        </div>
    </div>
</header>

<section class="accent-section py-3 summary">
    <div class="container justify-content-between d-flex">
        <p class="font-accent-700 d-block">Your baby summary</p>
        <p class="font-grey-16-700 d-block">{{$gender}}, {{$age}}, {{$weight}}</p>
    </div>
</section>