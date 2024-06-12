@extends('layouts.default')
@section('content')
    <div
        class="bg-azul-500 text-white w-full h-16 flex justify-center items-center tracking-wider uppercase text-lg font-semibold">
        Contacto
    </div>
    <!-- Start block -->
    <section class="py-8 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="max-w-2xl mb-8 text-4xl font-bold leading-none tracking-tight text-center mx-auto text-azul-500">
                Contáctanos <span class="text-rojo-500">Podemos fabricar la prenda que necesites</span></h2>
            <p class="text-center font-light text-gray-500 md:text-lg lg:text-xl max-w-xl mx-auto mb-8">
                Regálanos una llamada o déjanos un mensaje en nuestro formulario de contacto. Un asesor se pondrá en
                contacto lo antes posible.
            </p>
            <div class="text-center text-verde-500">
                {{--                 <i class="fa-solid fa-phone text-2xl"></i>
 --}} <span class="text-2xl text-azul-500 font-semibold block">ESCRÍBENOS POR WHATSAPP</span>
                <a class="inline-block" href="https://api.whatsapp.com/send?phone=5212213960534&text=Hola%20%C2%A1Quisiera%20m%C3%A1s%20informaci%C3%B3n!"
                    target="_blank"><img class="w-[55px] mx-auto" src="{{ asset('storage/images/icono-whats.png') }}"
                        alt="whatsapp"></a>
            </div>
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <p class="text-center text-2xl text-azul-500 font-semibold block MB-2">O DÉJANOS UN MENSAJE EN EL FORMULARIO</p>
                <form action="#" class="space-y-8 mt-8">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                            placeholder="Correo" required>
                    </div>
                    <div>
                        <label for="subject"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Teléfono</label>
                        <input type="text" id="subject"
                            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Teléfono" required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Mensaje</label>
                        <textarea id="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Escriba su mensaje..."></textarea>
                    </div>
                    <button type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-azul-500 sm:w-fit hover:bg-azul-600 focus:ring-4 focus:outline-none focus:ring-azul-300">Enviar
                        mensaje</button>
                </form>
            </div>
        </div>
    </section>
    <!-- End block -->
@endsection
