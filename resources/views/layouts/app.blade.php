<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inmobiliaria Terrenos San Marcos</title>
    <link rel="icon" href="{{ asset('img/tigre.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/3036f11d09.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css') }}" rel="stylesheet">




    @livewireStyles

</head>
<body>

    @livewire('header')

    <main class="py-4">
            @yield('content')
    </main>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
    <script defer src="{{ asset('OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
    <script>
jQuery(window).load(function() {
  jQuery(".owl-carousel").owlCarousel({
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            loop:true,
            margin:20,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                850:{
                    items:2
                },
                1100:{
                    items:3
                },
                1500:{
                    items:4
                }
            }
  });
});
    </script>

    @livewire('footer')

    <a class="whats_fixed" href="{{ $company[0]->get_whatsapp }}" target="_blank" class="boton_header_whats">
         <i class="fab fa-whatsapp"></i>
    </a>

    <a href="#logoynavegacion" class="scroll_top"><i class="fas fa-chevron-up"></i></a>

    @livewireScripts



</body>
</html>
