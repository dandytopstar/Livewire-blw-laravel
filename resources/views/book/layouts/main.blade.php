<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@includeIf('partial.main-head')

@php
    $adName = request('ad_name');
    if($adName){
        session()->put('ad_name', $adName);
    }
@endphp
<body>
<!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXLVV7S"
                      height="0" width="0" style="display:none;visibility:hidden">

        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '847354503011924');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=847354503011924&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->

    @yield('content')

    @livewireScripts

    <script src="{{asset('js/app.js')}}"></script>

    @stack('custom-scripts')
</body>
</html>

