<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@includeIf('partial.main-head')
<body>

    @yield('content')

    <div class="mt-3 text-white">
        <p>Babyledweaning.me</p>
    </div>

    @livewireScripts

    <script src="{{asset('js/app.js')}}"></script>

    @stack('custom-scripts')
</body>
</html>

