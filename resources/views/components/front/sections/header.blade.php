<header class="header header-transparent header-sticky">
    <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
        <div class="container">
            <a class="logo navbar-brand" href="/">
                <img class="logo logo-dark" src="{{'front/assets/images/logo/logo_blw.png'}}" alt="Appzy Logo" style="width: 350px"/>
                <img class="logo logo-light" src="{{'front/assets/images/logo/logo_blw.png'}}" alt="Appzy Logo" style="width: 350px"/>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active"><a class="nav-link" href="#hero">{{__("front.home")}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#processes">{{__("front.how_it_works")}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">{{__("front.personalized_plan")}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about-white">{{__("front.baby_led_weaning")}}</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing </a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="#blog">blog</a></li>--}}
                </ul>
                <div class="module-container">
                    <!--module-btn-->
                    <div class="module module-cta">
                        <a class="btn scroll-to btn-new-green" href="{{route('quiz')}}">
                            <span>{{__("front.start_quiz")}}</span>
                        </a>
                    </div>
                </div>
                <!-- End Module Container  -->
            </div>
            <!-- End .nav-collapse-->
        </div>
        <!-- End .container-->
    </nav>
    <!-- End .navbar-->
</header>