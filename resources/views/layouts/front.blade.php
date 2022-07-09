<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @includeIf('partial.head')
    <body>

        @yield('content')

        @livewireScripts

        <script src="{{asset('js/app.js')}}"></script>
        @stack('custom-scripts')
    </body>
</html>