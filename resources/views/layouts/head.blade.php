<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Taraznir') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="/colors/color1.css" id="colors">

    <link rel="shortcut icon" href="/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/icons/apple-touch-icon-158-precomposed.png">

    @livewireStyles
    @yield('styles')

</head>

