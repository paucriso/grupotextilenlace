@extends('layouts.default')
@section('content')
<div class="bg-azul-500 text-white w-full h-16 flex justify-center items-center tracking-wider uppercase text-lg font-semibold">
    Productos Destacados
</div>
    <!-- Start block -->
    <section class="py-8 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="max-w-2xl mb-8 text-4xl font-bold leading-none tracking-tight text-center mx-auto text-azul-500">Algunos de Nuestros <span class="text-verde-500">Productos</span></h2>
           <div class="grid grid-cols-4 gap-4 text-azul-600 font-semibold">
            <div>
                <a href="{{asset('storage/images/picture_1.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_1.jpg')}}" alt=""><p class="text-center">BATA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_2.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_2.jpg')}}" alt=""><p class="text-center">BLUSA MEZCLILLA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_3.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_3.jpg')}}" alt=""><p class="text-center">CHAMARRA MEZCLILLA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_5.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_5.jpg')}}" alt=""><p class="text-center">OVEROL</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_6.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_6.jpg')}}" alt=""><p class="text-center">PANTALÓN MEZCLILLA</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_9.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_9.jpg')}}" alt=""><p class="text-center">PANTALÓN CARGO</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_10.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_10.jpg')}}" alt=""><p class="text-center">PANTALÓN</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_11.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_11.jpg')}}" alt=""><p class="text-center">PLAYERA CUELLO REDONDO</p></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_14.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_14.jpg')}}" alt=""><p class="text-center">SUDADERA</p></a>
            </div>
           </div>
        </div>
    </section>
    <!-- End block -->


@endsection
