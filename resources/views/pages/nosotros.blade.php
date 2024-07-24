@extends('layouts.default')
@section('content')
    <div class="bg-azul-500 text-white w-full h-16 flex justify-center items-center tracking-wider uppercase text-lg font-semibold">
        Quienes Somos
    </div>

    <!-- Start block -->
    <section class="bg-[white]">
        <div class="grid lg:max-w-screen-xl px-8 pt-10 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 grid-cols-1 lg:grid-cols-12 lg:pt-28">
            <div class="place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-2xl lg:text-4xl font-bold leading-none tracking-tight text-azul-500">
                    Grupo Textil Enlace</h1>
                    <p class="font-light text-gray-500 md:text-lg lg:text-xl text-justify lg:max-w-[90%;] mb-16">
                        Somos una <span class="font-semibold">empresa fabricante de uniformes</span> ofreciendo un servicio integral en el diseño y confección de prendas empresariales e industriales. Contamos con una extensa variedad de alternativas que se ajustan a sus requerimientos. Nos esforzamos por entender sus necesidades y objetivos para con ello brindarte soluciones a la medida, con <span class="font-semibold">la mejor calidad</span> y a precios justos.
        Creamos uniformes cómodos, duraderos, y  sabemos la importancia de brindar un servicio de excelencia a nuestros clientes, al cumplir con los tiempos de entrega.
                    </p>
            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('storage/images/taller-ropa.avif')}}" alt="hero image">
            </div>
        </div>
    </section>
    <!-- End block -->

@endsection
