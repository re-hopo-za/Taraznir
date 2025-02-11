<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXTN57DWC1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-XXTN57DWC1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ff0000">

    <link rel="stylesheet" href="/css/fonts.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">
    <link rel="stylesheet" href="/css/modules.min.css">
    @livewireStyles
    @commentsStyles
    @stack('styles')
</head>
