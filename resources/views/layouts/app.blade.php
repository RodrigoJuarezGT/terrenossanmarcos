<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Inmobiliaria Terenos San Marcos</title>
    <link rel="icon" href="{{ asset('img/tigre.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/3036f11d09.js" crossorigin="anonymous"></script>





    @livewireStyles

</head>
<body>

    @livewire('header')

    <main class="py-4">
            @yield('content')
    </main>


    @livewire('footer')

    <a href="#logoynavegacion" class="scroll_top"><i class="fas fa-chevron-up"></i></a>

    @livewireScripts


</body>
</html>
