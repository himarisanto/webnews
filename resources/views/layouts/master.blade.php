<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'WBFC MENARIK')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('template_wbfc/apple-touch-icon.html') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('template_wbfc/images/logowbfc.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/rsmenu-main.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/rsmenu-transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template_wbfc/css/responsive.css') }}">
    @stack('css')
</head>

<body>
    <!-- Header -->
    <header>
        @include('partials.header') <!-- Include header layout -->
    </header>

    
    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer') <!-- Include footer layout -->
    </footer>

    <!-- Footer -->

    <!-- JS -->
    <script src="{{ asset('template_wbfc/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/rsmenu-main.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/wow.min.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/slick.min.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/masonry.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('template_wbfc/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
