<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @includeIf('partial.head')
    <body class="quiz-block">

        @yield('content')

        @livewireScripts

        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>