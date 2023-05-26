<footer>
    <div class="container">
        <nav class="navbar w-100 p-0 m-0">
            <div class="d-flex p-0 w-100 justify-content-between navbar-container">
                <div class="d-flex logo-box align-items-center">
                    <div class="logo-container">
                        <!-- <img src="{{asset('assets/logo/logo-wh')}}" alt="logo" class="h-50"> -->
                        <span class=" font-white-600 p-0" aria-current="page">Logo</span>
                    </div>
                    <div class="nav-menu">
                        <ul class="navbar-nav d-flex">
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0"  target="_blank">How It Works</a>
                            </li>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0"  target="_blank">Personalized Plan</a>
                            </li>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link font-white-400 p-0"  target="_blank">Baby-Led Weaning</a>
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