<header>
    <div class="h-11 bg-[#16b6e7;]">
        <div class="container mx-auto flex justify-end items-center text-white h-full tracking-widest">
            <span class="mr-2">¡LLÁMANOS!</span>
            <i class="fa-solid fa-phone"></i>
            <span class="ml-2">221 396 0534</span>
        </div>
    </div>
    <div class="container mx-auto h-24 flex justify-between items-center">
        <div>
            <a href="{{route('pages.index')}}"><img class="max-w-56" src="{{asset('storage/images/logo_horizontal.jpg')}}" alt="Grupo Textil Enlace"></a>
        </div>
        <nav>
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
        <button id="menu-toggle" class="hidden">
            <i class="fa fa-bars text-2xl text-azul-500"></i>
        </button>
    </div>
</header>
{{-- mobile menu --}}
<div class="relative bg-azul-500 hidden">
    <div id="mobile-menu" class="bg-azul-500 text-white absolute z-50 w-full h-full top-0">
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="#">NOSOTROS</a></li>
            <li><a href="#">PRODUCTOS</a></li>
            <li><a href="#">CONTACTO</a></li>
        </ul>
    </div>
</div>
