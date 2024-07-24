<!DOCTYPE html>
<html lang="es">

<head>
    {{-- <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" /> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Primary Meta Tags -->
    <meta name="description"
        content="Diseñamos tus uniformes empresariales a la medida. Somos fabricantes. Personalizamos indumentaria según las necesidades de tu empresa." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://grupotextilenlace.com/" />
    <meta property="og:title" content="Grupo Textil Enlace" />
    <meta property="og:description"
        content="Diseñamos tus uniformes empresariales a la medida. Somos fabricantes. Personalizamos indumentaria según las necesidades de tu empresa." />
    <meta property="og:image" content="{{ asset('storage/images/logo_horizontal.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://grupotextilenlace.com/" />
    <meta property="twitter:title" content="Grupo Textil Enlace" />
    <meta property="twitter:description"
        content="Diseñamos tus uniformes empresariales a la medida. Somos fabricantes. Personalizamos indumentaria según las necesidades de tu empresa." />
    <meta property="twitter:image" content="{{ asset('storage/images/logo_horizontal.jpg') }}" />
    <meta property="author" content="digitweb.com.mx" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/fav.jpg') }}">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css"
        integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    {{--     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script> --}}
    {{--  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
          var splide = new Splide( '.splide' );
          splide.mount();
        } );
    </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"
        integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts
</body>

</html>
