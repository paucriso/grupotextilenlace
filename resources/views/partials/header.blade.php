<header>
    <div class="h-11 bg-[#16b6e7;]">
        <div class="container mx-auto flex justify-end items-center text-white h-full tracking-widest">
            <span class="mr-2">¡ENVÍANOS UN MENSAJE!</span>
            {{-- <i class="fa-solid fa-phone"></i>
            <span class="ml-2">221 396 0534</span> --}}
            <a href="https://api.whatsapp.com/send?phone=5212213960534&text=Hola%20%C2%A1Quisiera%20m%C3%A1s%20informaci%C3%B3n!" target="_blank"><img class="w-[36px]" src="{{asset('storage/images/icono-whats.png')}}" alt=""></a>
        </div>
    </div>
    <div class="container mx-auto h-24 flex justify-between items-center">
        <div>
            <a href="{{route('pages.index')}}"><img class="max-w-56" src="{{asset('storage/images/logo_horizontal.jpg')}}" alt="Grupo Textil Enlace"></a>
        </div>
        <nav class="hidden lg:block">
            <ul class="flex uppercase font-semibold text-[#555555;]">
                <li class="mr-5 hover:text-azul-500 {{request()->is('/')? 'text-azul-500' : ''}}">
                    <a href="{{route('pages.index')}}">inicio</a>
                </li>
                <li class="mr-5 hover:text-azul-500 {{request()->is('nosotros') ? 'text-azul-500' : ''}}">
                    <a href="{{route('pages.nosotros')}}">nosotros</a>
                </li>
                <li class="mr-5 hover:text-azul-500 {{request()->is('productos') ? 'text-azul-500' : ''}}">
                    <a href="{{route('pages.productos')}}">productos</a>
                </li>

                <li class="mr-5 hover:text-azul-500 {{request()->is('contacto') ? 'text-azul-500' : ''}}">
                    <a href="{{route('pages.contacto')}}">contacto</a>
                </li>
                <li>
                    <a class="button" href="{{route('pages.contacto')}}">cotización</a>
                </li>
            </ul>
        </nav>
        {{-- mobile menu button --}}
        <button id="menu-toggle" class="lg:hidden">
            <i class="fa fa-bars text-2xl text-azul-500"></i>
        </button>
    </div>
</header>
{{-- mobile menu --}}
<div id="mobile-menu" class="relative bg-azul-500 hidden">
    <div class="mobile-menu bg-azul-500 text-white font-semibold text-xl absolute z-50 w-full top-0">
        <ul class="flex flex-col items-center justify-center h-full gap-8">
            <li><a href="{{route('pages.index')}}" class="{{request()->is('/') ? 'text-marron-500' : ''}}">INICIO</a></li>
            <li><a href="{{route('pages.nosotros')}}" class="{{request()->is('nosotros') ? 'text-marron-500' : ''}}">NOSOTROS</a></li>
            <li><a href="{{route('pages.productos')}}" class="{{request()->is('productos') ? 'text-marron-500' : ''}}">PRODUCTOS</a></li>
            <li><a href="{{route('pages.contacto')}}" class="{{request()->is('contacto') ? 'text-marron-500' : ''}}">CONTACTO</a></li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#menu-toggle").click(function() {
            $("#mobile-menu").toggleClass("hidden");
        });
    });
</script>
