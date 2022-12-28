<footer>
    <div class="container">
        <nav class="navbar w-100 p-0 m-0">
            <div class="d-flex p-0 w-100 justify-content-between navbar-container">
                <div class="d-flex logo-box">
                    <div class="logo-container">
                        <img src="{{asset('assets/logo/blw-logo-white-small.png')}}" alt="">
                    </div>
                    <div class="nav-menu">
                        <ul class="navbar-nav d-flex">
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0" href="#how-it-works">How It Works</a>
                            </li>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0" href="#personal-plan">Personalized Plan</a>
                            </li>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0" href="#baby-led-weaning">Baby-Led Weaning</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="actions">
                    <a href="{{route('quiz')}}" type="button" class="btn font-accent-600 btn-white-squre">
                        {{__("front.start_quiz")}}
                    </a>
                </div>

            </div>
        </nav>
    </div>
</footer>