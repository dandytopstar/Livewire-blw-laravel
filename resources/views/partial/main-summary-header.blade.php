<header class="header summary">
    <div class="container">
        <div class="summary-header-logo" style="flex-wrap: wrap;">
            <img src="{{asset('assets/logo/main-logo.png')}}" alt="" class="desktop-logo">
            <div>
                <img class="adaptive" src="{{asset('assets/summary/adaptive_logo.png')}}" alt="">
            </div>

            <div class="summary-header-btn">
                <a href="{{route('registration', $code)}}" type="button" class="btn font-white-600 btn-green-squre btn-adaptive">
                    {{__('front.get_your_plan')}}
                </a>
            </div>

        </div>
    </div>
</header>