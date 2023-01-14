<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    @include('layouts.head')

    <body class="header-fixed page @yield('sidebar','no-sidebar') header-style-2 topbar-style-2 menu-has-search">
        <div id="wrapper" class="animsition">
            <div id="page" class="clearfix">
                @livewire('layouts.header')
                @yield('breadcrumbs')

                {{ $slot }}

                @livewire('layouts.footer')
                @livewire('layouts.bottom-links')

            </div>
        </div>
        <a id="scroll-top"></a>
        @livewireScripts
        <script src="{{ asset('/js/app.js') }}"></script>
        <script defer src="{{ asset('/css/alpine.css') }}"></script>
        @yield('scripts')
    </body>



</html>
