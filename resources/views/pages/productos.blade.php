@extends('layouts.default')
@section('title', 'Ropa de seguridad - Uniformes de trabajo - Mezclilla, camisas a la medida')
@section('content')
<div class="bg-azul-500 text-white w-full h-16 flex justify-center items-center tracking-wider uppercase text-lg font-semibold">
    Productos Destacados
</div>
    <!-- Start block -->
    <section class="py-8 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="max-w-2xl mb-8 text-2xl lg:text-4xl font-bold leading-none tracking-tight text-center mx-auto text-azul-500">Algunos de Nuestros <span class="text-verde-500">Productos</span></h2>
           <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 text-azul-600 font-semibold px-8 lg:px-0">
            <div>
                <a href="{{asset('storage/images/picture_1.jpg')}}" data-lightbox="galeria" data-title="BATA"><img src="{{asset('storage/images/picture_1.jpg')}}" alt=""><p class="text-center">BATA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/blusa.jpg')}}" data-lightbox="galeria" data-title="BLUSA"><img src="{{asset('storage/images/blusa.jpg')}}" alt=""><p class="text-center">BLUSA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/camisa.jpg')}}" data-lightbox="galeria" data-title="CAMISA"><img src="{{asset('storage/images/camisa.jpg')}}" alt=""><p class="text-center">CAMISA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_2.jpg')}}" data-lightbox="galeria" data-title="BLUSA MEZCLILLA"><img src="{{asset('storage/images/picture_2.jpg')}}" alt=""><p class="text-center">BLUSA MEZCLILLA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/camisola-mezclilla.jpg')}}" data-lightbox="galeria" data-title="CAMISOLA MEZCLILLA"><img src="{{asset('storage/images/camisola-mezclilla.jpg')}}" alt=""><p class="text-center">CAMISOLA MEZCLILLA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_3.jpg')}}" data-lightbox="galeria" data-title="CHAMARRA MEZCLILLA"><img src="{{asset('storage/images/picture_3.jpg')}}" alt=""><p class="text-center">CHAMARRA MEZCLILLA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_5.jpg')}}" data-lightbox="galeria" data-title="OVEROL"><img src="{{asset('storage/images/picture_5.jpg')}}" alt=""><p class="text-center">OVEROL</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/overol-2.jpg')}}" data-lightbox="galeria" data-title="OVEROL"><img src="{{asset('storage/images/overol-2.jpg')}}" alt=""><p class="text-center">OVEROL</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/overol-peto.jpg')}}" data-lightbox="galeria" data-title="OVEROL PETO"><img src="{{asset('storage/images/overol-peto.jpg')}}" alt=""><p class="text-center">OVEROL PETO</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_6.jpg')}}" data-lightbox="galeria" data-title="PANTALÓN MEZCLILLA"><img src="{{asset('storage/images/picture_6.jpg')}}" alt=""><p class="text-center">PANTALÓN MEZCLILLA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_9.jpg')}}" data-lightbox="galeria" data-title="PANTALÓN CARGO"><img src="{{asset('storage/images/picture_9.jpg')}}" alt=""><p class="text-center">PANTALÓN CARGO</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_10.jpg')}}" data-lightbox="galeria" data-title="PANTALÓN"><img src="{{asset('storage/images/picture_10.jpg')}}" alt=""><p class="text-center">PANTALÓN</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_11.jpg')}}" data-lightbox="galeria" data-title="PLAYERA CUELLO REDONDO"><img src="{{asset('storage/images/picture_11.jpg')}}" alt=""><p class="text-center">PLAYERA CUELLO REDONDO</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/playera-polo-dama.jpg')}}" data-lightbox="galeria" data-title="PLAYERO POLO DAMA"><img src="{{asset('storage/images/playera-polo-dama.jpg')}}" alt=""><p class="text-center">PLAYERA POLO DAMA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/playera-polo-caballero.jpg')}}" data-lightbox="galeria" data-title="PLAYERA POLO CABALLERO"><img src="{{asset('storage/images/playera-polo-caballero.jpg')}}" alt=""><p class="text-center">PLAYERA POLO CABALLERO</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_14.jpg')}}" data-lightbox="galeria" data-title="SUDADERA"><img src="{{asset('storage/images/picture_14.jpg')}}" alt=""><p class="text-center">SUDADERA</p></a>
            </div>
           </div>
        </div>
    </section>
    <!-- End block -->


@endsection
