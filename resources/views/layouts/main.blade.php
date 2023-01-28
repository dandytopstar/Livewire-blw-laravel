<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@includeIf('partial.main-head')
<body>
<!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXLVV7S"
                      height="0" width="0" style="display:none;visibility:hidden">

        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('content')

    @livewireScripts

    <script src="{{asset('js/app.js')}}"></script>

    @stack('custom-scripts')
</body>
</html>

