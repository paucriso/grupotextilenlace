@extends('layouts.default')
@section('content')
@include('partials.slideshow')
    <!-- Start block -->
    <section class="py-8 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="max-w-2xl mb-8 text-4xl font-bold leading-none tracking-tight text-center mx-auto text-azul-500">Grupo Textil Enlace: <span class="text-verde-500">Tu Destino para Prendas de Calidad</span></h2>
            <p class="font-light text-gray-500 md:text-lg lg:text-xl text-justify max-w-[90%;] mx-auto mb-16">
                En Grupo Textil Enlace nos enorgullece ser fabricantes especializados en la confección de una
                amplia variedad de prendas. Desde playeras y sudaderas hasta camisas, pantalones, mezclilla y
                uniformes industriales, nuestro compromiso es ofrecerte productos de la más alta calidad.
                Nos dedicamos a satisfacer tus necesidades de vestimenta con atención al detalle y utilizando
                los mejores materiales disponibles en el mercado. Además, estamos siempre innovando y
                ampliando nuestra gama de productos para asegurarnos de cubrir todas tus exigencias.
                ¡Confía en nosotros para obtener las prendas que necesitas para cualquier ocasión!
            </p>
            <div class="flex justify-around uppercase text-azul-500">
                <div class="flex flex-col items-center justify-center text-xl font-semibold">
                    <img src="{{asset('storage/images/playeras-intro.png')}}" alt="playeras">
                    <h2>playeras</h2>
                </div>
                <div class="flex flex-col items-center justify-center text-xl font-semibold">
                    <img src="{{asset('storage/images/mezclilla-intro.png')}}" alt="mezclilla">
                    <h2>mezclilla</h2>
                </div>
                <div class="flex flex-col items-center justify-center text-xl font-semibold">
                    <img src="{{asset('storage/images/sudaderas-intro.png')}}" alt="sudaderas">
                    <h2>sudaderas</h2>
                </div>
                <div class="flex flex-col items-center justify-center text-xl font-semibold">
                    <img src="{{asset('storage/images/camisas-intro.png')}}" alt="camisas">
                    <h2>camisas</h2>
                </div>
                <div class="flex flex-col items-center justify-center text-xl font-semibold">
                    <img src="{{asset('storage/images/industriales-intro.png')}}" alt="industriales">
                    <h2>industriales</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-[white]">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-bold leading-none tracking-tight text-azul-500">
                    Fabricantes de Mezclilla para uso Industrial</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque sequi earum tempore
                    repellat veniam optio porro illum neque? Dolore aut nostrum nisi, accusantium error
                    sequi. Dignissimos voluptatibus voluptates placeat id.
                </p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('storage/images/mezclilla-variados.jpg')}}" alt="hero image">
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-[#f3f4f6]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{asset('storage/images/playeras-variadas.jpg')}}"
                    alt="feature image 2">
                <div class="text-gray-500 sm:text-lg">
                    <h2 class="mb-4 text-3xl font-bold tracking-tight text-azul-500">Playeras en Variados Diseños y Colores</h2>
                    <p class="mb-8 font-light lg:text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum ea ex aperiam cumque laboriosam praesentium consequatur, expedita minima? Magnam, illum.</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">Varios modelos</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">Diseños especiales</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">La mejor calidad</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">Color a tu elección</span>
                        </li>
                    </ul>
                    <p class="font-light lg:text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, excepturi.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-bold leading-none tracking-tight text-azul-500">
                    Creación de Indumentaria Profesional</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Enriquecemos la identidad corporativa de tu empresa mediante soluciones  integrales en
                    uniformes laborales, abarcando desde la conceptualización  hasta la entrega personalizada,
                     garantizando una comunicación  corporativa sólida y coherente en cada detalle.
                </p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('storage/images/formal-varios.jpg')}}" alt="hero image">
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-[#f3f4f6]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="{{asset('storage/images/camisas-reflejantes.jpg')}}"
                    alt="feature image 2">
                <div class="text-gray-500 sm:text-lg">
                    <h2 class="mb-4 text-3xl font-bold tracking-tight text-azul-500">Diseños de Indumentaria Industrial Personalizada</h2>
                    <p class="mb-8 font-light lg:text-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At vero recusandae quasi!</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7">
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">Cinta reflejante</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">Diseños especiales</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">La mejor calidad</span>
                        </li>
                        <li class="flex space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-marron-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-base font-medium leading-tight text-gray-700">Telas resistentes</span>
                        </li>
                    </ul>
                    <p class="font-light lg:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium non rerum ea.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white">
        <div
            class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="col-span-2 mb-8">
                <p class="text-lg font-medium text-verde-500">Excelencia y Servicio</p>
                <h2 class="mt-3 mb-4 text-3xl font-bold tracking-tight text-azul-500 md:text-3xl">
                    Miles de clientes satisfechos confian en nosotros</h2>
                <p class="font-light text-gray-500 sm:text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, quod?</p>

            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <div>
                    <svg fill="#cf143d" width="80px" height="80px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke="#cf143d" stroke-width="0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g data-name="17 quality" id="_17_quality"> <path d="M40.4,20.57a1.009,1.009,0,0,0-.95-.69H34.48l-1.53-4.72a1,1,0,0,0-1.9,0l-1.53,4.72H24.55a1.009,1.009,0,0,0-.95.69.991.991,0,0,0,.37,1.12l4.01,2.92-1.53,4.72a1,1,0,0,0,.36,1.12,1.022,1.022,0,0,0,1.18,0L32,27.53l4.01,2.92a1.086,1.086,0,0,0,.59.19,1.036,1.036,0,0,0,.59-.19,1,1,0,0,0,.36-1.12l-1.53-4.72,4.01-2.92A.991.991,0,0,0,40.4,20.57Zm-6.14,2.85a1.006,1.006,0,0,0-.37,1.12l.81,2.48-2.11-1.54a1.011,1.011,0,0,0-1.18,0L29.3,27.02l.81-2.48a1.006,1.006,0,0,0-.37-1.12l-2.11-1.54h2.61a.991.991,0,0,0,.95-.69L32,18.71l.81,2.48a.991.991,0,0,0,.95.69h2.61Z"></path> <path d="M32,10.26a13.239,13.239,0,0,0-1.13,26.43c.38.03.75.05,1.13.05.34,0,.69-.02,1.03-.05h.1v-.01A13.234,13.234,0,0,0,32,10.26Zm9.81,18.72a.01.01,0,0,0-.01.01,11.191,11.191,0,0,1-8.85,5.7l-.01.01h-.01a9.1,9.1,0,0,1-1.88-.01,11.236,11.236,0,1,1,10.76-5.71Z"></path> <path d="M58.88,52.73,55.12,46.9q-4.035-6.225-8.06-12.47c.21-.08.45-.17.69-.25a4.179,4.179,0,0,0,2.67-1.8,4.179,4.179,0,0,0-.25-3.19,4.06,4.06,0,0,1-.37-1.63,3.96,3.96,0,0,1,1.01-1.25,4.234,4.234,0,0,0,1.64-2.81,4.19,4.19,0,0,0-1.64-2.8,4.091,4.091,0,0,1-1.01-1.26,4.06,4.06,0,0,1,.37-1.63,4.157,4.157,0,0,0,.25-3.18,4.2,4.2,0,0,0-2.67-1.8,4.218,4.218,0,0,1-1.49-.71,4.362,4.362,0,0,1-.36-1.61,4.191,4.191,0,0,0-1.15-3,4.2,4.2,0,0,0-3.17-.45,4.081,4.081,0,0,1-1.65,0,4.051,4.051,0,0,1-1.01-1.27,4.212,4.212,0,0,0-2.37-2.23,4.132,4.132,0,0,0-3.02.96A4.143,4.143,0,0,1,32,5.25a4.143,4.143,0,0,1-1.53-.73,4.122,4.122,0,0,0-3.01-.96,4.2,4.2,0,0,0-2.38,2.23,4.2,4.2,0,0,1-1,1.27,4.136,4.136,0,0,1-1.66,0,4.174,4.174,0,0,0-3.16.45,4.164,4.164,0,0,0-1.16,3.01,3.961,3.961,0,0,1-.37,1.6,3.944,3.944,0,0,1-1.47.7,4.226,4.226,0,0,0-2.68,1.8,4.179,4.179,0,0,0,.25,3.19,4.06,4.06,0,0,1,.37,1.63,4.091,4.091,0,0,1-1.01,1.26,4.19,4.19,0,0,0-1.64,2.8,4.234,4.234,0,0,0,1.64,2.81,3.96,3.96,0,0,1,1.01,1.25,4.06,4.06,0,0,1-.37,1.63,4.157,4.157,0,0,0-.25,3.18,4.142,4.142,0,0,0,2.67,1.8c.23.09.47.17.69.26Q12.905,40.67,8.88,46.9L5.12,52.73a.981.981,0,0,0,.01,1.1.992.992,0,0,0,1.01.42l6.83-1.27,1.66,6.76a1,1,0,0,0,.81.74.875.875,0,0,0,.16.02.985.985,0,0,0,.84-.46L27.22,43.35c.08.02.15.07.23.09a2.2,2.2,0,0,0,.5.06,5.009,5.009,0,0,0,2.52-1.02A4.143,4.143,0,0,1,32,41.75a4.143,4.143,0,0,1,1.53.73,4.1,4.1,0,0,0,3.03.96c.08-.02.15-.07.22-.09L47.56,60.04a.985.985,0,0,0,.84.46.875.875,0,0,0,.16-.02,1,1,0,0,0,.81-.74l1.66-6.76,6.83,1.27a1,1,0,0,0,1.01-.42A.981.981,0,0,0,58.88,52.73ZM16.02,57l-1.33-5.41a1,1,0,0,0-1.15-.75L8.06,51.86l2.5-3.87q3.75-5.82,7.52-11.64a.784.784,0,0,1,.02.14,4.191,4.191,0,0,0,1.15,3,4.205,4.205,0,0,0,3.17.45,4.081,4.081,0,0,1,1.65,0,3.935,3.935,0,0,1,1.01,1.27c.19.29.38.58.58.86ZM36.4,41.29a.7.7,0,0,1-.3.2c-.28.06-1.02-.39-1.5-.7A5.071,5.071,0,0,0,32,39.75a5.071,5.071,0,0,0-2.6,1.04c-.48.31-1.22.77-1.49.71a.828.828,0,0,1-.32-.22,6.488,6.488,0,0,1-.81-1.13,5.026,5.026,0,0,0-1.83-2.01,3.246,3.246,0,0,0-1.45-.29,11.376,11.376,0,0,0-1.3.1c-.62.07-1.46.17-1.7-.02s-.34-1.04-.41-1.66a5.025,5.025,0,0,0-.79-2.64,1.7,1.7,0,0,0-.27-.27,1.249,1.249,0,0,0-.12-.09l-.01-.01h-.01a6.3,6.3,0,0,0-1.98-.97c-.59-.21-1.39-.49-1.53-.79-.14-.28.14-1.07.34-1.65a4.932,4.932,0,0,0,.43-2.73,4.848,4.848,0,0,0-1.55-2.23c-.44-.44-1.05-1.05-1.05-1.39s.61-.95,1.05-1.39a4.848,4.848,0,0,0,1.55-2.23,4.932,4.932,0,0,0-.43-2.73c-.2-.58-.48-1.37-.34-1.66s.95-.57,1.54-.78a4.864,4.864,0,0,0,2.37-1.34,4.91,4.91,0,0,0,.8-2.63c.07-.62.16-1.46.41-1.66s1.08-.1,1.7-.03a5.007,5.007,0,0,0,2.75-.19,4.956,4.956,0,0,0,1.83-2.01c.33-.54.79-1.27,1.12-1.34.28-.07,1.02.4,1.5.7A5.071,5.071,0,0,0,32,7.25a5.071,5.071,0,0,0,2.6-1.04c.48-.3,1.21-.76,1.5-.7.33.07.79.8,1.12,1.34a4.956,4.956,0,0,0,1.83,2.01,5.007,5.007,0,0,0,2.75.19c.62-.07,1.46-.17,1.7.02s.34,1.04.41,1.66a5.025,5.025,0,0,0,.79,2.64,5.024,5.024,0,0,0,2.39,1.35c.59.2,1.39.48,1.53.78.14.28-.14,1.07-.34,1.65a4.932,4.932,0,0,0-.43,2.73,4.848,4.848,0,0,0,1.55,2.23c.44.44,1.05,1.05,1.05,1.39s-.61.95-1.05,1.39a4.848,4.848,0,0,0-1.55,2.23,4.932,4.932,0,0,0,.43,2.73c.2.58.48,1.37.34,1.66s-.95.58-1.53.78a6.074,6.074,0,0,0-2.07,1.02,3.107,3.107,0,0,0-.31.32,4.91,4.91,0,0,0-.8,2.63c-.07.62-.16,1.46-.41,1.66s-1.08.1-1.7.03a4.916,4.916,0,0,0-2.75.19,5.026,5.026,0,0,0-1.83,2.01A6.464,6.464,0,0,1,36.4,41.29Zm14.06,9.55a1,1,0,0,0-1.15.75L47.98,57,38.34,42.07c.2-.28.39-.57.58-.86a4.07,4.07,0,0,1,1-1.27,4.136,4.136,0,0,1,1.66,0,4.174,4.174,0,0,0,3.16-.45,4.157,4.157,0,0,0,1.16-3,.675.675,0,0,1,.02-.14q3.765,5.82,7.52,11.64l2.5,3.87Z"></path> </g> </g></svg>
                    <h3 class="mb-2 text-2xl font-bold text-azul-500">CALIDAD Y DURABILIDAD</h3>
                    <p class="font-light text-gray-500">Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <svg version="1.1" id="PRICE" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="80px" viewBox="0 0 1800 1800" enable-background="new 0 0 1800 1800" xml:space="preserve" fill="#cf143d" stroke="#cf143d"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Layer"> <g> <g> <g> <g> <path fill="#cf143d" d="M980.141,1426.945H799.02v-118.506c-69.393-6.158-141.632-26.024-190.641-53.104l-20.991-11.607 l52.338-204.102l35.001,19.166c33.877,18.551,103.21,49.678,186.896,49.678c43.264,0,86.914-13.717,86.914-44.368 c0-20.55-13.207-44.022-108.99-76.386C727.884,950.146,599.67,887.562,599.67,735.901c0-118.03,78.008-208.647,205.43-241.258 V373.055h181.121v108.638c76.854,6.214,127.293,26.167,159.665,41.397l23.395,11.01l-52.706,198.537l-34.932-16.757 c-30.332-14.56-81.1-38.932-160.461-38.932c-27.462,0-73.538,4.973-73.538,38.288c0,25.207,67.061,52.896,125.491,74.206 c156.457,54.756,223.372,131.853,223.372,257.641c0,62.643-21.977,119.475-63.568,164.353 c-37.588,40.571-90.052,69.527-152.798,84.567V1426.945z M861.015,1364.95h57.132v-120.313l25.729-4.437 c117.589-20.272,190.636-94.271,190.636-193.118c0-81.316-30.988-146.326-182.237-199.261 c-91.338-33.311-166.625-66.172-166.625-132.585c0-48.481,35.607-100.283,135.533-100.283 c68.248,0,119.197,15.615,154.484,30.171l20.221-76.148c-31.758-12.463-77.164-25.047-141.589-26.967l-30.071-0.899v-106.06 h-57.132v110.22L841.792,550c-112.789,21.082-180.128,90.579-180.128,185.901c0,88.71,59.123,146.45,197.689,193.064 c78.537,26.534,151.178,61.268,151.178,135.137c0,64.615-58.448,106.362-148.908,106.362 c-73.782,0-137.615-20.566-181.23-39.836l-20.731,80.85c39.862,17.4,101.68,34.715,171.28,36.791l30.072,0.9V1364.95z"></path> </g> </g> <g> <g> <path fill="none" d="M1394.443,1646.797l13.552-28.16c-5.872,4.203-11.797,8.346-17.772,12.41L1394.443,1646.797z"></path> </g> <g> <path fill="#cf143d" d="M894.438,1721.617c-453.04,0-821.616-368.576-821.616-821.614c0-453.044,368.576-821.62,821.616-821.62 c453.043,0,821.627,368.576,821.627,821.62c0,144.397-37.492,280.184-103.18,398.222l61.597,16.502 c66.06-123.746,103.577-264.929,103.577-414.724c0-487.224-396.391-883.615-883.621-883.615 c-487.224,0-883.61,396.391-883.61,883.615c0,487.227,396.386,883.608,883.61,883.608 c154.789,0,300.383-40.053,427.035-110.271l-16.563-61.813C1184.061,1681.513,1043.848,1721.617,894.438,1721.617z"></path> </g> </g> <g> <g> <path fill="#cf143d" d="M1661.595,1783.611c-7.931,0-15.862-3.027-21.916-9.072l-150.333-150.333l-48.355,100.489 c-5.621,11.686-17.973,18.647-30.824,17.428c-12.904-1.211-23.697-10.326-27.053-22.842l-111.181-414.95 c-2.862-10.698,0.199-22.114,8.026-29.942c7.836-7.836,19.243-10.889,29.941-8.025l414.943,111.188 c12.514,3.355,21.63,14.149,22.841,27.054c1.202,12.903-5.743,25.202-17.427,30.824l-100.49,48.363l150.332,150.324 c5.813,5.813,9.073,13.699,9.073,21.916c0,8.225-3.261,16.104-9.073,21.925l-96.58,96.581 C1677.465,1780.584,1669.525,1783.611,1661.595,1783.611z M1480.368,1540.391c8.147,0,16.052,3.217,21.916,9.081 l159.311,159.311l52.749-52.749l-159.311-159.302c-7.101-7.108-10.326-17.211-8.641-27.122 c1.688-9.903,8.061-18.37,17.116-22.729l64.563-31.076l-282.357-75.659l75.651,282.356l31.066-64.555 c4.358-9.055,12.835-15.43,22.737-17.115C1476.9,1540.537,1478.639,1540.391,1480.368,1540.391z"></path> </g> </g> </g> <path fill="#cf143d" d="M1140.299,292.544c111.231,0,327.736,121.636,327.736,344.61c0,17.12,13.873,30.997,30.997,30.997 c17.116,0,30.997-13.877,30.997-30.997c0-116.063-51.296-223.666-144.435-302.993c-73.896-62.941-170.182-103.612-245.296-103.612 c-17.116,0-30.998,13.877-30.998,30.998S1123.183,292.544,1140.299,292.544z"></path> </g> </g> </g></svg>
                    <h3 class="mb-2 text-2xl font-bold text-azul-500">PRECIO COMPETITIVO</h3>
                    <p class="font-light text-gray-500 ">Lorem ipsum dolor sit amet.
                        world</p>
                </div>
                <div>
                    <svg fill="#cf143d" width="80px" height="80px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#cf143d" stroke-width="0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M28 3L28 4L26 4L26 12L15 12L15 10L13 10L13 12L10 12C7.28125 12 5 14.171875 5 17C5 18.300781 5.25 20.75 5.5 22.96875C5.75 25.1875 6 27.125 6 27.125L6.125 28L10 28L10 30L9 30L9 32L13 32L13 30L12 30L12 28L15.78125 28L16.59375 24.75C16.707031 24.300781 17.101563 24 17.5625 24L22.84375 24C23.8125 24 24.652344 24.664063 24.8125 25.59375C24.90625 26.136719 25 27.597656 25 28.5625C25 29.527344 24.910156 30.839844 24.8125 31.40625C24.652344 32.335938 23.8125 33 22.84375 33L8 33C5.25 33 3 35.25 3 38L3 43C3 44.644531 4.355469 46 6 46L8 46L8 47L13 47L13 46L33 46L33 47L38 47L38 46L40 46C41.644531 46 43 44.644531 43 43L43 24L47 24L47 15L42.5625 15C41.785156 13.242188 40.035156 12 38 12L36 12L36 8L34 8L34 12L32 12L32 4L30 4L30 3 Z M 28 6L30 6L30 12L28 12 Z M 10 14L11 14L11 23L13 23L13 14L38 14C39.667969 14 41 15.332031 41 17L41 43C41 43.566406 40.566406 44 40 44L6 44C5.433594 44 5 43.566406 5 43L5 38C5 36.332031 6.332031 35 8 35L22.84375 35C24.753906 35 26.449219 33.65625 26.78125 31.75C26.925781 30.929688 27 29.640625 27 28.5625C27 27.484375 26.929688 26.09375 26.78125 25.25C26.449219 23.34375 24.753906 22 22.84375 22L17.5625 22C16.191406 22 14.988281 22.953125 14.65625 24.28125L14.21875 26L7.90625 26C7.832031 25.417969 7.695313 24.484375 7.5 22.75C7.25 20.546875 7 18.011719 7 17C7 15.203125 8.300781 14 10 14 Z M 34 17C32.355469 17 31 18.355469 31 20C31 21.644531 32.355469 23 34 23C35.644531 23 37 21.644531 37 20C37 18.355469 35.644531 17 34 17 Z M 43 17L45 17L45 22L43 22 Z M 34 19C34.5625 19 35 19.4375 35 20C35 20.5625 34.5625 21 34 21C33.4375 21 33 20.5625 33 20C33 19.4375 33.4375 19 34 19 Z M 34 27C31.25 27 29 29.25 29 32C29 34.75 31.25 37 34 37C36.75 37 39 34.75 39 32C39 29.25 36.75 27 34 27 Z M 34 29C35.667969 29 37 30.332031 37 32C37 33.667969 35.667969 35 34 35C32.332031 35 31 33.667969 31 32C31 30.332031 32.332031 29 34 29Z"></path></g></svg>
                    <h3 class="mb-2 text-2xl font-bold text-azul-500">SERVICIO PROFESIONAL</h3>
                    <p class="font-light text-gray-500 ">Lorem ipsum dolor sit.
                    </p>
                </div>
                <div>
                    <svg height="80px" width="80px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#cf143d" stroke="#cf143d" stroke-width="0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#cf143d;} </style> <g> <path class="st0" d="M447.77,33.653c-36.385-5.566-70.629,15.824-82.588,49.228h-44.038v37.899h40.902 c5.212,31.372,29.694,57.355,62.855,62.436c41.278,6.316,79.882-22.042,86.222-63.341C517.428,78.575,489.07,39.969,447.77,33.653z "></path> <path class="st0" d="M162.615,338.222c0-6.88-5.577-12.468-12.468-12.468H96.16c-6.891,0-12.467,5.588-12.467,12.468 c0,6.868,5.576,12.467,12.467,12.467h53.988C157.038,350.689,162.615,345.091,162.615,338.222z"></path> <path class="st0" d="M392.999,237.965L284.273,340.452l-37.966,9.398v-86.619H0v215.996h246.307v-59.454l35.547-5.732 c16.95-2.418,29.396-6.692,44.336-15.018l46.302-24.228v104.432h132.435V270.828C504.927,202.618,428.016,202.43,392.999,237.965z M215.996,448.913H30.313v-155.37h185.683v63.805l-36.419,9.01c-15.968,4.395-25.708,20.518-22.174,36.696l0.298,1.247 c3.478,15.912,18.651,26.436,34.785,24.14l23.51-3.788V448.913z"></path> </g> </g></svg>
                    <h3 class="mb-2 text-2xl font-bold text-azul-500">ENTREGAS PUNTUALES</h3>
                    <p class="font-light text-gray-500 ">Lorem, ipsum dolor.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-[#f3f4f6] ">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
            <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-azul-500 ">
                    Diseñamos tus prendas a la medida</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl ">
                    En <span class="font-bold">Grupo Textil Enlace</span>, creamos prendas a medida de cualquier estilo y tipo.
                    Como confeccionistas con una sólida experiencia en el ámbito textil, nos dedicamos a materializar tus ideas en piezas únicas y de calidad."</p>
            </div>
            <div>
                <img class="mx-auto" src="{{asset('storage/images/proceso.png')}}" alt="proceso de compra">
            </div>

        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-gray-50 ">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <img class="mx-auto" src="{{asset('storage/images/calidad.png')}}" alt="textiles de la mejoir calidad">
                <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-azul-500 ">Uniformes de la Mejor Calidad</h2>
                <p class="mb-6 font-light text-gray-500  md:text-lg">Uniformes de calidad para todo tipo de empresas.</p>
                <a href="#"
                    class="text-white bg-rojo-500 hover:bg-rojo-700 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">
                    CONTÁCTANOS</a>
            </div>
        </div>
    </section>
    <!-- End block -->
@endsection
