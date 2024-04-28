<!DOCTYPE html>
<html lang="es">
<head>
    {{-- <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" /> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield( 'title' )</title>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.header')
    @yield( 'content' )
    @include('partials.footer')
</body>
</html>
