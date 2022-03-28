<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose Application landing page HTML5 template"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Landing CLick - Appzy HTML Landing Page Template</title>
    <link href="{{asset('front/assets/images/favicon/favicon.png')}}" rel="icon"/>
    <!--  Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&amp;family=Rubik:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <!--  Stylesheets-->
    <link href="{{asset('front/assets/css/vendor.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/css/app.css')}}" rel="stylesheet"/>
</head>
<body class="body-scroll">
<!-- Document Wrapper-->
<div class="wrapper clearfix" id="wrapperParallax">

    @yield('content')

</div>
<!--  Footer Scripts==
-->
<script src="{{asset('front/assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('front/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('front/assets/js/functions.js')}}"></script>
<script src="{{asset('front/js/app.js')}}"></script>
</body>
</html>