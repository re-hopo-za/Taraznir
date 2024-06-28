<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('theme::layout.head')
    <body>
        {{ $slot }}
        @include('theme::layout.scroll-to-top')
        @include('theme::layout.scripts')
    </body>
</html>
