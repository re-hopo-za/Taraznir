<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <!-- Page Head -->
    @include('layouts.head')

    <!-- Page Body -->
    <body class="header-fixed page @yield('sidebar','no-sidebar') header-style-2 topbar-style-2 menu-has-search">
        <div id="wrapper" class="animsition">
            <div id="page" class="clearfix">

                <!-- Page Heading -->
                @livewire('layouts.header')
                <!-- Page Breadcrumbs -->
                @yield('breadcrumbs')

                {{ $slot }}

                <!-- Page Footer -->
                @livewire('layouts.footer')
                @livewire('layouts.bottom-links')

            </div>
        </div>

        <a id="scroll-top"></a>
        @livewireScripts
        <script src="{{ asset('/js/app.js') }}"></script>
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-234183223-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-234183223-1');
        </script>

        @yield('scripts')
    </body>



</html>
