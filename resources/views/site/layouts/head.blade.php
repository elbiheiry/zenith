<head>
    <!-- Meta Tags
        ==============================-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta NAME="keywords" CONTENT="{{ $settings['meta_keywords_' . locale()] }}" />
    <meta NAME="description" CONTENT="{{ $settings['meta_description_' . locale()] }}" />
    <meta property=“og:title” content="Zenith Arabia" />
    <meta property="og:description" content="{{ $settings['meta_description_' . locale()] }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Zenith Arabia" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <title>Zenith Arabia | @stack('title')</title>

    <!-- Fave Icons
    ================================-->
    <link rel="shortcut icon" href="{{ surl('images/favicon.png') }}" />
    <!-- CSS Files
    ================================-->
    <link rel="stylesheet" href="{{ surl('vendor/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.3.5/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{ surl('vendor/aos/aos.css') }}" />
    <link rel="stylesheet" href="{{ surl('vendor/aos/animate.css') }}" />
    <link rel="stylesheet" href="{{ surl('vendor/swiper.css') }}" />
    <link rel="stylesheet" href="{{ surl('css/style.css') }}" />

</head>
