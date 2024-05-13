@extends('layouts.default')
@section('content')
<div class="bg-azul-500 text-white w-full h-16 flex justify-center items-center tracking-wider uppercase text-lg font-semibold">
    Productos Destacados
</div>
    <!-- Start block -->
    <section class="py-8 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="max-w-2xl mb-8 text-4xl font-bold leading-none tracking-tight text-center mx-auto text-azul-500">Grupo Textil Enlace: <span class="text-verde-500">Tu Destino para Prendas de Calidad</span></h2>
           <div class="grid grid-cols-4">
            <div>
                <a href="{{asset('storage/images/picture_1.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_1.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_2.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_2.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_3.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_3.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_4.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_4.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_5.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_5.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_6.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_6.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_7.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_7.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_8.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_8.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_9.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_9.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_10.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_10.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_11.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_11.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_12.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_12.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_13.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_13.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_14.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_14.jpg')}}" alt=""></a>
            </div>
            <div>
                <a href="{{asset('storage/images/picture_15.jpg')}}" data-lightbox="galeria"><img src="{{asset('storage/images/picture_15.jpg')}}" alt=""></a>
            </div>
           </div>
        </div>
    </section>
    <!-- End block -->
    

@endsection
