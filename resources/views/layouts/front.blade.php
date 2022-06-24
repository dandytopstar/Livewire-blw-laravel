<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Baby Food"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baby Food</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @livewireStyles
</head>
<body>
    <header class="header desc">
        <div class="container">
            <div class="row flex-alignn">
                <div class="col-lg-2">
                    <div class="logo-home-template">
                        Logo
                    </div>
                </div>
                <div class="col-lg-8">
                    <ul class="navigation-top">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Personalized Plan</a></li>
                        <li><a href="#">Baby-Led Weaning</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="start_quiz">Start Quiz</a>
                </div>
            </div>
        </div>
    </header>

    <header class="header mob">
        <div  class="menu_wrap">
            <nav class="navbar navbar-dark">
                <div class="container-fluid_btn">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="#" class="start_quiz">Start Quiz</a>
                </div>

            </nav>
            <div class="collapse show" id="navbarToggleExternalContent">
                <div class="wrap_menu">
                    <ul>
                        <li> <a href="" class="active">Home</a></li>
                        <li> <a href="" class="">How It Works</a></li>
                        <li> <a href="" class="">Personalized Plan</a></li>
                        <li> <a href="" class="">Baby-Led Weaning</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer desc">
        <div class="container">
            <div class="row flex-alignn">
                <div class="col-lg-2">
                    <div class="logo-home-template">
                        Logo
                    </div>
                </div>
                <div class="col-lg-8">
                    <ul class="navigation-top">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Personalized Plan</a></li>
                        <li><a href="#">Baby-Led Weaning</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <a href="#" class="start_quiz">Start Quiz</a>
                </div>
            </div>
        </div>
    </footer>

    <footer class="footer mob">
        <div class="container">
            <div class="row flex-alignn">
                <div class="col-6">
                    <div class="logo-home-template">
                        Logo
                    </div>
                </div>
                <div class="col-6">
                    <a href="#" class="start_quiz">Start Quiz</a>
                </div>
                <div class="col-12">
                    <ul class="navigation-top">
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Personalized Plan</a></li>
                        <li><a href="#">Baby-Led Weaning</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    @livewireScripts

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>