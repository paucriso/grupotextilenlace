@extends('layouts.default')
@section('title', 'Grupo Textil Enlace')
@section('content')
    <div
        class="bg-azul-500 text-white w-full h-16 flex justify-center items-center tracking-wider uppercase text-lg font-semibold">
        Contacto
    </div>
    <!-- Start block -->
    <section class="py-8 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="max-w-2xl mb-8 text-2xl lg:text-4xl font-bold leading-none tracking-tight text-center mx-auto text-azul-500">
                Contáctanos <span class="text-rojo-500">Podemos fabricar la prenda que necesites</span></h2>
            <p class="text-center font-light text-gray-500 md:text-lg lg:text-xl max-w-xl mx-auto mb-8">
                Déjanos un mensaje en nuestro formulario de contacto. Un asesor se pondrá en
                contacto lo antes posible.
            </p>
            <div class="text-center text-verde-500">
                {{--                 <i class="fa-solid fa-phone text-2xl"></i>
 --}} <span class="text-xl lg:text-2xl text-azul-500 font-semibold block">ESCRÍBENOS POR WHATSAPP</span>
                <a class="inline-block" href="https://api.whatsapp.com/send?phone=5212213960534&text=Hola%20%C2%A1Quisiera%20m%C3%A1s%20informaci%C3%B3n!"
                    target="_blank"><img class="w-[55px] mx-auto" src="{{ asset('storage/images/icono-whats.png') }}"
                        alt="whatsapp"></a>
            </div>
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <p class="text-center text-xl lg:text-2xl text-azul-500 font-semibold block MB-2">O DÉJANOS UN MENSAJE EN EL FORMULARIO</p>
                @livewire('contact-form')
            </div>
        </div>
    </section>
    <!-- End block -->
@endsection
