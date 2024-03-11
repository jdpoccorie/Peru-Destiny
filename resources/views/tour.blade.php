<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peru Destiny</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300&family=Source+Code+Pro:ital,wght@0,200;0,300;0,500;1,200;1,800&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        h2 {
            font-family: 'Poppins', monospace;
        }

        h3 {
            font-family: 'Arial', sans-serif;
        }

        p {
            font-family: 'Roboto', monospace;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('assets/css/my-styles.css') }}">
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
</head>

<body class="bg-[#F8F8F8]">

    <section class="bg-[#2ea2cc] py-2 px-2">
        <div class="max-w-screen-xl mx-auto flex flex-row-reverse">
            <ul class="text-xs text-white flex flex-row w-[400px] justify-between h-5 items-center">
                <li class="hover:underline cursor-pointer">(+51) 974 409 679</li>
                <li class="border-l border-solid border-white border-[px] h-full"></li>
                <li class="hidden md:block hover:underline cursor-pointer">Blog</li>
                <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                <li class="hover:underline cursor-pointer">Contact Us</li>
                <li class="border-l border-solid border-white border-[px] h-full"></li>
                <li class="hover:underline cursor-pointer">FAQ</li>
                <li class="border-l border-solid border-white border-[px] h-full"></li>
                <li class="block">
                    <div class="languages w-[110px] flex items-start justify-between">
                        <div class="w-[30px] h-[16px]">
                            <img src="{{ asset('images/languages/es.svg') }}" alt="" class="w-full">
                        </div>
                        <div class="w-[30px] h-[19.6px] self-center flex items-center">
                            <img src="{{ asset('images/languages/eeuu.png') }}" alt="" class="w-full h-full">
                        </div>
                        <div class="w-[30px] h-[30px]">
                            <img src="{{ asset('images/languages/br.svg') }}" alt="" class="w-full">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <header class="sticky top-0 z-50 shadow" x-data="{ open: false, submenu: false }" x-on:click.away="submenu = false, open = false">
        <section class="relative">
            <section class="sticky top-0 bg-white z-50 w-full pb-3">
                <section class="max-w-screen-xl mx-auto flex justify-between pt-3">
                    <div class="flex justify-between w-full md:w-auto items-center">
                        <div class="w-[185px] h-[50px]">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="pl-3 lg:pl-0 h-[100%]">
                        </div>
                        <button type="button"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 md:hidden"
                            x-on:click="open = !open">Menu</button>
                    </div>
                    <nav class="hidden md:block justify-center pt-3">
                        <ul class="text-sm">
                            <li class="inline-block font-semibold uppercase"><a href="#"
                                    class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">INICIO</a>
                            </li>
                            <li class="inline-block font-semibold uppercase"><a href="#"
                                    class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">TOURS
                                    A MACHUPICCHU</a></li>
                            <li class="inline-block font-semibold uppercase"><a href="#"
                                    class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">TOURS
                                    1 DÍA</a></li>
                            <li class="inline-block font-semibold uppercase has-submenu relative z-10 group">
                                <span
                                    class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent pr-10 before:content-['>'] before:rotate-90 before:absolute before:right-3 before:top-0 after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-top after:duration-300 ease-in-out hover:after:w-11/12 hover:after:left-[5%]">PAQUETES</span>
                                <ul
                                    class="list-unstyled absolute left-0 top-10 w-60 h-56 bg-[#fff] transition invisible after:transition-top after:duration-300 ease-in-out group-hover:visible group-hover:top-[30px] group-hover:h-auto rounded-lg">
                                    <li class="block"><a
                                            class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2"
                                            href="#">LA EMPRESA</a></li>
                                    <li class="block"><a
                                            class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2"
                                            href="#">GALERIA DE FOTOS</a></li>
                                    <li class="block"><a
                                            class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2"
                                            href="#">DEPARTAMENTO</a></li>
                                    <li class="block"><a
                                            class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2"
                                            href="#">HABITACIONES</a></li>
                                    <li class="block"><a
                                            class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2"
                                            href="#">HABITACIONES</a></li>
                                </ul>
                            </li>
                            <li class="inline-block font-semibold uppercase"><a
                                    class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]"
                                    href="#">SOBRE NOSOTROS</a></li>
                            <li class="inline-block font-semibold uppercase"><a
                                    class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]"
                                    href="#">BLOG</a></li>
                        </ul>
                    </nav>
                </section>
            </section>

            <section class="absolute w-full top-full z-50 md:hidden">
                <section>
                    <nav class="bg-[#223f77] transition-max-height duration-300 ease-in-out overflow-hidden max-h-0"
                        :class="{ 'max-h-screen': open }">
                        <ul>
                            <li class="border-b border-solid border-[#2a4984]"><a
                                    class="block py-3 px-5 font-normal text-white" href="#">INICIO</a></li>
                            <li class="border-b border-solid border-[#2a4984]"><a
                                    class="block py-3 px-5 font-normal text-white" href="#">TOURS A
                                    MACHUPICCHU</a></li>
                            <li class="border-b border-solid border-[#2a4984]"><a
                                    class="block py-3 px-5 font-normal text-white" href="#">TOURS 1 DÍA</a></li>
                            <li class="has-submenu">
                                <span
                                    class="btn-sobre border-b border-solid border-[#2a4984] block py-3 px-5 font-normal text-white relative transition-all duration-300 ease-in-out"
                                    x-on:click="submenu = !submenu">PAQUETES</span>
                                <ul class="list-unstyled bg-[#1b376d] transition-max-height duration-300 ease-in-out overflow-hidden max-h-0"
                                    :class="{ 'max-h-screen': submenu }">
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#"
                                            class="block py-3 px-5 font-normal text-white pl-10">LA EMPRESA</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#"
                                            class="block py-3 px-5 font-normal text-white pl-10">GALERIA DE FOTOS</a>
                                    </li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#"
                                            class="block py-3 px-5 font-normal text-white pl-10">DEPARTAMENTO</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#"
                                            class="block py-3 px-5 font-normal text-white pl-10">HABITACIONES</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#"
                                            class="block py-3 px-5 font-normal text-white pl-10">HABITACIONES</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#"
                                            class="block py-3 px-5 font-normal text-white pl-10">HABITACIONES</a></li>
                                </ul>
                            </li>
                            <li class="border-b border-solid border-[#2a4984] block py-3 px-5 font-normal text-white">
                                <a href="#">SOBRE NOSOTROS</a>
                            </li>
                            <li class="border-b border-solid border-[#2a4984] block py-3 px-5 font-normal text-white">
                                <a href="#">BLOG</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </section>
        </section>
    </header>

    <main class="overflow-x-hidden">

        <section class="max-w-screen-xl mx-auto my-5">
            <section class="ml-2">
                <!-- Breadcrumb -->
                <nav class="flex mb-2" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                      <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                          </svg>
                          Home
                        </a>
                      </li>
                      <li>
                        <div class="flex items-center">
                          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Tours 1 Día</a>
                        </div>
                      </li>
                      <li aria-current="page">
                        <div class="flex items-center">
                          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                        </div>
                      </li>
                    </ol>
                  </nav>
                <h1 class=" text-base md:text-2xl font-bold mb-5">Laguna Humantay 2 días 1 noche</h1>
            </section>

            <section class="flex flex-col xl:flex-row justify-between m-2">
                <article id="default-carousel" class="block relative w-full xl:w-[860px] xl:max-w-[860px] mb-2" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                                class="h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                                class="h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                                class="h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(34).jpg"
                                class="h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                                class="h-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-0 outline-0"
                        data-carousel-prev>
                        <span
                            class="inline-flex border-none items-center active:border-none justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </article>
                <article class="w-full xl:w-[400px] bg-[#F9F4E7] shadow-lg rounded-lg p-5">
                    <div
                        class="w-full text-center font-bold after:content-[''] after:block after:w-full after:h-[3px] after:rounded-xl after:bg-[#74B05F] after:z-10 ">
                        Desde <span class="font-extrabold text-4xl">$99</span> USD <br>
                        <span class="font-thin text-sm">Por Persona</span>
                    </div>
                    <div>
                        <ul class="leading-loose flex flex-wrap xl:block mt-2">
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Tours to
                                Machu Picchu</li>
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Peru
                                Information, Land of the Incas</li>
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Inca Trail
                            </li>
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> The Imperial
                                City of Cusco</li>
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Trekking to
                                Machu Picchu and Other Related Information</li>
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Information
                                about Our Salkantay Trek</li>
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Lares Trek
                                to Machu Picchu travel guide</li>
                            <li class="text-[13px] w-1/2 md:w-1/3 xl:w-full"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Huchuy Qosqo
                                Trek Information 2024</li>
                        </ul>
                    </div>
                </article>


            </section>
        </section>


        {{-- BEST TRAVEL --}}
        <section class="relative max-w-screen-xl mx-auto mt-5 mb-5 flex flex-col md:flex-row md:justify-between">
            <section class="order-2 sm:order-1">
                <article class="relative z-0">
                    <article class="max-w-[860px]">
                        <div class="mb-4 border-b bg-white border-gray-200 dark:border-gray-700">
                            <ul class="shadow flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                                data-tabs-toggle="#default-tab-content" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                        data-tabs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false"><i
                                            class="fa-regular fa-eye mr-2"></i>Descripción</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="dashboard-tab" data-tabs-target="#dashboard" type="button"
                                        role="tab" aria-controls="dashboard" aria-selected="false"><i
                                            class="fa-regular fa-calendar-days mr-2"></i>Itinerario</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                                        aria-controls="settings" aria-selected="false"><i
                                            class="fa-solid fa-list-check mr-2"></i>¿Qué incluye?</button>
                                </li>
                                <li role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                                        aria-controls="contacts" aria-selected="false"><i
                                            class="fa-regular fa-money-bill-1 mr-2"></i>Price</button>
                                </li>
                            </ul>
                        </div>

                        <div id="default-tab-content">
                            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="profile"
                                role="tabpanel" aria-labelledby="profile-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content
                                    the
                                    <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated
                                        content</strong>. Clicking another tab will toggle the visibility of this one
                                    for
                                    the next. The tab JavaScript swaps classes to control the content visibility and
                                    styling.
                                </p>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="dashboard"
                                role="tabpanel" aria-labelledby="dashboard-tab">
                                <ul>
                                    <li >
                                        <strong class="block mb-2">Día 1: Cusco - Soraypampa - Humantay lake - sorococcha</strong>
                                        <article class="border-l-2 border-dashed border-[#74B05F] pl-4">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas eos quidem sequi molestiae vitae, ad, voluptatum odio iure ut neque? Praesentium, iste dolorum? Alias tempore obcaecati aliquid totam atque quia possimus, minus aliquam perferendis corporis placeat quod molestias aperiam nostrum facere cupiditate veniam aspernatur expedita provident earum necessitatibus natus. Temporibus nam sequi in necessitatibus amet aut eligendi veniam atque corrupti accusantium, quam, delectus facere adipisci, illum nulla hic nisi possimus natus omnis maxime beatae. Repellat assumenda iste animi nam unde molestias a illo suscipit reiciendis eaque rem maiores et, enim facere, numquam vitae ipsa eveniet neque dolorem architecto deserunt!</p><br>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos aliquid corrupti dolorem ex modi rerum sapiente quidem! Voluptatum velit ab officiis rem tempore debitis et tempora! Quo dolore perferendis numquam porro, fugit velit aspernatur? Labore facere quae tenetur soluta temporibus sequi quasi asperiores inventore eos vel, quia architecto, velit beatae! Officia praesentium at tenetur beatae expedita libero quis quia, iste quidem et sunt molestiae illum odio explicabo deleniti suscipit dolores voluptas doloremque minima consequatur eius? Impedit molestias alias nemo officia explicabo nobis, soluta ipsa assumenda fugiat? Hic minus necessitatibus eligendi sapiente adipisci corporis, officia, esse iusto perspiciatis corrupti, excepturi dolorum.</p><br>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad tempora cumque beatae quaerat vero omnis quasi repellendus nostrum harum voluptas aspernatur, possimus itaque eius modi libero cupiditate, odio commodi neque sunt saepe vitae amet eum reiciendis quae. At dignissimos, accusamus numquam ipsum eaque recusandae dolorem alias magni saepe perferendis consequatur!</p>
                                        </article>
                                    </li>
                                    <li >
                                        <strong class="block mb-2">Día 1: Cusco - Soraypampa - Humantay lake - sorococcha</strong>
                                        <article class="border-l-2 border-dashed border-[#74B05F] pl-4">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas eos quidem sequi molestiae vitae, ad, voluptatum odio iure ut neque? Praesentium, iste dolorum? Alias tempore obcaecati aliquid totam atque quia possimus, minus aliquam perferendis corporis placeat quod molestias aperiam nostrum facere cupiditate veniam aspernatur expedita provident earum necessitatibus natus. Temporibus nam sequi in necessitatibus amet aut eligendi veniam atque corrupti accusantium, quam, delectus facere adipisci, illum nulla hic nisi possimus natus omnis maxime beatae. Repellat assumenda iste animi nam unde molestias a illo suscipit reiciendis eaque rem maiores et, enim facere, numquam vitae ipsa eveniet neque dolorem architecto deserunt!</p><br>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos aliquid corrupti dolorem ex modi rerum sapiente quidem! Voluptatum velit ab officiis rem tempore debitis et tempora! Quo dolore perferendis numquam porro, fugit velit aspernatur? Labore facere quae tenetur soluta temporibus sequi quasi asperiores inventore eos vel, quia architecto, velit beatae! Officia praesentium at tenetur beatae expedita libero quis quia, iste quidem et sunt molestiae illum odio explicabo deleniti suscipit dolores voluptas doloremque minima consequatur eius? Impedit molestias alias nemo officia explicabo nobis, soluta ipsa assumenda fugiat? Hic minus necessitatibus eligendi sapiente adipisci corporis, officia, esse iusto perspiciatis corrupti, excepturi dolorum.</p><br>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad tempora cumque beatae quaerat vero omnis quasi repellendus nostrum harum voluptas aspernatur, possimus itaque eius modi libero cupiditate, odio commodi neque sunt saepe vitae amet eum reiciendis quae. At dignissimos, accusamus numquam ipsum eaque recusandae dolorem alias magni saepe perferendis consequatur!</p>
                                        </article>
                                    </li>
                                    <li >
                                        <strong class="block mb-2">Día 1: Cusco - Soraypampa - Humantay lake - sorococcha</strong>
                                        <article class="border-l-2 border-dashed border-[#74B05F] pl-4">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quas eos quidem sequi molestiae vitae, ad, voluptatum odio iure ut neque? Praesentium, iste dolorum? Alias tempore obcaecati aliquid totam atque quia possimus, minus aliquam perferendis corporis placeat quod molestias aperiam nostrum facere cupiditate veniam aspernatur expedita provident earum necessitatibus natus. Temporibus nam sequi in necessitatibus amet aut eligendi veniam atque corrupti accusantium, quam, delectus facere adipisci, illum nulla hic nisi possimus natus omnis maxime beatae. Repellat assumenda iste animi nam unde molestias a illo suscipit reiciendis eaque rem maiores et, enim facere, numquam vitae ipsa eveniet neque dolorem architecto deserunt!</p><br>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos aliquid corrupti dolorem ex modi rerum sapiente quidem! Voluptatum velit ab officiis rem tempore debitis et tempora! Quo dolore perferendis numquam porro, fugit velit aspernatur? Labore facere quae tenetur soluta temporibus sequi quasi asperiores inventore eos vel, quia architecto, velit beatae! Officia praesentium at tenetur beatae expedita libero quis quia, iste quidem et sunt molestiae illum odio explicabo deleniti suscipit dolores voluptas doloremque minima consequatur eius? Impedit molestias alias nemo officia explicabo nobis, soluta ipsa assumenda fugiat? Hic minus necessitatibus eligendi sapiente adipisci corporis, officia, esse iusto perspiciatis corrupti, excepturi dolorum.</p><br>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad tempora cumque beatae quaerat vero omnis quasi repellendus nostrum harum voluptas aspernatur, possimus itaque eius modi libero cupiditate, odio commodi neque sunt saepe vitae amet eum reiciendis quae. At dignissimos, accusamus numquam ipsum eaque recusandae dolorem alias magni saepe perferendis consequatur!</p>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="settings"
                                role="tabpanel" aria-labelledby="settings-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content
                                    the
                                    <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                                        content</strong>. Clicking another tab will toggle the visibility of this one
                                    for
                                    the next. The tab JavaScript swaps classes to control the content visibility and
                                    styling.
                                </p>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-white dark:bg-gray-800" id="contacts"
                                role="tabpanel" aria-labelledby="contacts-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content
                                    the
                                    <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                                        content</strong>. Clicking another tab will toggle the visibility of this one
                                    for
                                    the next. The tab JavaScript swaps classes to control the content visibility and
                                    styling.
                                </p>
                            </div>
                        </div>

                    </article>
                </article>
            </section>

            <section class="m-2 md:my-0 order-1 sm:order-2 sticky top-0">
                <article class="w-full md:max-w-[300px] md:w-[300px] lg:max-w-[400px] lg:w-[400px] p-4 bg-[#fff] shadow mb-2 md:shadow-lg xl:shadow-2xl rounded-lg">
                    <div class="mb-4">
                        <h3 class="text-center text-xl font-bold text-[#2EA2CC]">CONTÁCTANOS</h3>
                    </div>
                    <form class="max-w-md mx-auto">
                        <div class="relative z-0 w-full mb-5 group">

                            <input type="date" name="floating_date" id="floating_date"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_date"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Seleccione
                                fecha</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_name" id="floating_name"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_name"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="floating_email" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required />
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                address</label>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="tel" name="floating_phone" id="floating_phone"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_phone"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Teléfono</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="tel" name="floating_whatsapp" id="floating_whatsapp"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_whatsapp"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">WhatsApp</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="number" name="floating_adults" id="floating_adults"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_adults"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">#
                                    Adultos</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="number" name="floating_children" id="floating_children"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required />
                                <label for="floating_children"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">#
                                    Niños</label>
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            {{-- <input type="email" name="floating_email" id="floating_email"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required /> --}}
                            <textarea name="floating_observaciones" id="floating_observaciones" rows="3"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>
                            <label for="floating_email"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Observaciones</label>
                        </div>

                        <div class="w-ful flex justify-center">
                            <button type="submit"
                                class="text-white bg-[#74B05F] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-sm w-full sm:w-auto px-10 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-2xl font-bold">SOLICITAR
                                COTIZACIÓN</button>
                        </div>
                    </form>
                </article>
            </section>
        </section>


        {{-- BEST TRAVEL --}}

        {{-- BEST TRAVEL SLIDER --}}
        <section class="mt-16">
            <article class="max-w-screen-xl mx-auto mt-5 mb-5 relative z-0">
                <h2
                    class="before:content-[''] before:w-24 before:h-1 before:bg-[#74B05F] before:absolute before:left-1/2 before:top-[-20px] before:translate-x-[-3rem] before:rounded relative text-center text-xl text-lg-3xl max-w-[800px] m-auto">
                    THE <strong class="text-[#74B05F]">BEST</strong> <strong class="text-[#74B05F]">TOUR</strong></h2>
                <p class="text-center max-w-[1200px] m-auto mt-8 leading-relaxed px-3">Lorem, ipsum dolor sit amet
                    consectetur adipisicing elit.</p>
            </article>
        </section>

        <section class="max-w-screen-xl mx-auto mt-5 mb-5 flex justify-center px-10">
            <div class="wrapper">
                <i id="left" class="buttons fa-solid fa-angle-left z-50 bg-[#305AAB]"></i>
                <ul class="carousel shadow rounded-lg">

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img">
                            <div
                                class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i>
                                        up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full">
                                    </li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#"
                                class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img">
                            <div
                                class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i>
                                        up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full">
                                    </li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#"
                                class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img">
                            <div
                                class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i>
                                        up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full">
                                    </li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#"
                                class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img">
                            <div
                                class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i>
                                        up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full">
                                    </li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#"
                                class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img">
                            <div
                                class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i>
                                        up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full">
                                    </li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#"
                                class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img">
                            <div
                                class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i>
                                        up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full">
                                    </li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#"
                                class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img">
                            <div
                                class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i>
                                        up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full">
                                    </li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#"
                                class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>


                </ul>
                <i id="right" class="buttons fa-solid fa-angle-right bg-[#74B05F]"></i>
            </div>
        </section>
        {{-- BEST TRAVEL SLIDER --}}
    </main>

    <footer class="bg-[#1A1A1A]">
        <section>
            <img src="{{ asset('images/footer.jpg') }}" alt="">
        </section>
        <section class="max-w-screen-xl mx-auto mt-5 mb-5 pt-5 text-[#e8e8e8]">
            <section class="flex flex-col md:flex-row items-center md:justify-between md:items-start">


                <div class="mr-8 max-w-[380px] md:max-w-none">
                    <article>
                        <h2
                            class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:bg-[#74B05F] text-[#74B05F] after:h-[1.5px] after:w-full">
                            CONTACT</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] fa-regular fa-envelope mr-2"></i>info@perudestiny.com</li>
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] fa-solid fa-phone text-[13px] mr-2"></i><span
                                    class="font-bold">Office : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] fa-brands fa-whatsapp text-xl text-[13px] mr-1"></i><span
                                    class="font-bold">Sales : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] fa-brands fa-whatsapp text-xl text-[13px] mr-1"></i><span
                                    class="font-bold">Sales : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-solid fa-phone mr-2"></i><span
                                    class="font-bold">Perú : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-solid fa-phone mr-2"></i><span
                                    class="font-bold">24 Hrs assistance : </span> +51 974 409 679</li>
                        </ul>
                    </article>

                    <article>
                        <h2
                            class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.35px] after:w-full after:bg-[#74B05F] text-[#74B05F] pt-3">
                            OFFICE HOURS</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i></i>Monday to Friday
                                9:00 - 13:00 hrs & 15:00 - 19:00 hrs</li>
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i></i>Saturday 9:00 to
                                13:00 H and From 17:00 to 19:00 H</li>
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i></i>Sunday 17:00 to
                                19:00 H</li>
                        </ul>
                    </article>

                    <article>
                        <h2
                            class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1px] after:w-full after:bg-[#74B05F] text-[#74B05F] pt-3">
                            SALES TEAM HOURS</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i>Monday through Friday
                                9:00 - 13:00 H & 15:00 - 19:30 H</li>
                            <li class="text-[13px]"><i
                                    class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i>Saturday 8:30 - 13:00 H
                            </li>
                        </ul>
                    </article>
                </div>

                <div class="mr-8 max-w-[380px] md:max-w-none">
                    <article>
                        <h2
                            class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.5px] after:w-full after:bg-[#74B05F] text-[#74B05F]">
                            PERU DESTINY OFFICE</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-regular fa-envelope mr-1"></i>
                                info@samtravelperu.com</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-2 fa-solid fa-location-dot"></i>
                                Garcilaso Street 210 , Office Nº:207 (2and Floor) in the la CASA DEL ABUELO shopping
                                center</li>
                            <li class="text-[13px]">Sunday CLOSED
                                **All Bookings done during weekends will be confirmed Monday morning.**</li>
                        </ul>
                    </article>
                </div>



                <div class="hidden md:block mr-8">
                    <article>
                        <h2
                            class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.5px] after:w-full after:bg-[#74B05F] text-[#74B05F] ">
                            DESTINATIONS</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Tours to
                                Machu Picchu</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Peru
                                Information, Land of the Incas</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Inca Trail
                            </li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> The Imperial
                                City of Cusco</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Trekking to
                                Machu Picchu and Other Related Information</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Information
                                about Our Salkantay Trek</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Lares Trek
                                to Machu Picchu travel guide</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Huchuy Qosqo
                                Trek Information 2024</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Travel Guide
                                & Information for Choquequirao Trek</li>
                        </ul>
                    </article>
                </div>

                <div class="hidden md:block">
                    <article>
                        <h2
                            class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.5px] after:w-full after:bg-[#74B05F] text-[#74B05F]">
                            USEFUL INFORMATION</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Terms &
                                Conditions</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Terms &
                                Conditions</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Emergency
                                Preparation SAM Travel´s Guide</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Extra
                                Luggage</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Homestay in
                                Pisac</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Vistadome or
                                Expedition Train?</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Social
                                Projects</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Our Clean up
                                Campaign</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Empowering
                                Women on the Inca Trail</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Personal
                                Porters</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Our travel
                                blog</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Privacy
                                Policy</li>
                        </ul>
                    </article>
                </div>
            </section>

            <div class="hidden">
                <article>
                    <h2>PAY WITH</h2>
                    <ul>
                        <li><i class="fa-regular fa-credit-card"></i> VISA</li>
                        <li><i class="fa-regular fa-credit-card"></i> MASTER CARD</li>
                        <li><i class="fa-regular fa-credit-card"></i> YAPE</li>
                    </ul>
                </article>

                <article>
                    <h2>FOLLOW US</h2>
                    <ul>
                        <li><i class="fa-brands fa-square-facebook"></i> FACEBOOK</li>
                        <li><i class="fa-brands fa-square-instagram"></i> INSTAGRAM</li>
                        <li><i class="fa-brands fa-youtube"></i> YOUTUBE</li>
                    </ul>
                </article>
            </div>

        </section>
    </footer>




</body>

</html>
