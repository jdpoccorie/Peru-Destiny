<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peru Destiny</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300&family=Source+Code+Pro:ital,wght@0,200;0,300;0,500;1,200;1,800&display=swap" rel="stylesheet">


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
        p, .list-banner li {
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

    <header class="sticky top-0 z-50 shadow" x-data="{ open: false, submenu: false }" x-on:click.away="submenu = false, open = false"  >
        <section class="relative">
            <section class="sticky top-0 bg-white z-50 w-full pb-3">
                <section class="max-w-screen-xl mx-auto flex justify-between pt-3">
                    <div class="flex justify-between w-full md:w-auto items-center">
                        <div class="w-[185px] h-[50px]">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="pl-3 lg:pl-0 h-[100%]">
                        </div>
                        <button type="button" class=" bg-gradient-to-r hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg  px-5 py-2.5 text-center me-2 md:hidden text-black" x-on:click="open = !open"><i class="fa-solid fa-bars text-3xl"></i></button>
                    </div>
                    <nav class="hidden md:block justify-center pt-3">
                        <ul class="text-sm">
                            <li class="inline-block font-semibold uppercase"><a href="#" class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">INICIO</a></li>
                            <li class="inline-block font-semibold uppercase"><a href="#" class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">TOURS A MACHUPICCHU</a></li>
                            <li class="inline-block font-semibold uppercase"><a href="#" class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">TOURS 1 DÍA</a></li>
                            <li class="inline-block font-semibold uppercase has-submenu relative z-10 group">
                                <span class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent pr-10 before:content-['>'] before:opacity-30 before:rotate-90 before:absolute before:right-3 before:top-0 after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-top after:duration-300 ease-in-out hover:after:w-11/12 hover:after:left-[5%]">PAQUETES</span>
                                <ul class="list-unstyled absolute left-0 top-10 w-60 h-56 bg-[#f8f8f8] transition invisible after:transition-top after:duration-300 ease-in-out group-hover:visible group-hover:top-[32px] shadow group-hover:h-auto rounded-lg">
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] hover:rounded-t-lg pl-2" href="#">LA EMPRESA</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">GALERIA DE FOTOS</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">DEPARTAMENTO</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">HABITACIONES</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] hover:rounded-b-lg pl-2" href="#">HABITACIONES</a></li>
                                </ul>
                            </li>
                            <li class="inline-block font-semibold uppercase"><a class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]" href="#">SOBRE NOSOTROS</a></li>
                            <li class="inline-block font-semibold uppercase"><a class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]" href="#">BLOG</a></li>
                        </ul>
                    </nav>
                </section>
            </section>
    
            <section class="absolute w-full top-full z-50 md:hidden">
                <section>
                    <nav class="bg-[#223f77] transition-max-height duration-300 ease-in-out overflow-hidden max-h-0" :class="{'max-h-screen': open}">
                        <ul>
                            <li class="border-b border-solid border-[#2a4984]"><a class="block py-3 px-5 font-normal text-white" href="#">INICIO</a></li>
                            <li class="border-b border-solid border-[#2a4984]"><a class="block py-3 px-5 font-normal text-white" href="#">TOURS A MACHUPICCHU</a></li>
                            <li class="border-b border-solid border-[#2a4984]"><a class="block py-3 px-5 font-normal text-white" href="#">TOURS 1 DÍA</a></li>
                            <li class="has-submenu">
                                <span class="btn-sobre border-b border-solid border-[#2a4984] block py-3 px-5 font-normal text-white relative transition-all duration-300 ease-in-out" x-on:click="submenu = !submenu">PAQUETES</span>
                                <ul class="list-unstyled bg-[#1b376d] transition-max-height duration-300 ease-in-out overflow-hidden max-h-0" :class="{'max-h-screen': submenu}">
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#" class="block py-3 px-5 font-normal text-white pl-10">LA EMPRESA</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#" class="block py-3 px-5 font-normal text-white pl-10">GALERIA DE FOTOS</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#" class="block py-3 px-5 font-normal text-white pl-10">DEPARTAMENTO</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#" class="block py-3 px-5 font-normal text-white pl-10">HABITACIONES</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#" class="block py-3 px-5 font-normal text-white pl-10">HABITACIONES</a></li>
                                    <li class="border-b border-solid border-[#2a4984]"><a href="#" class="block py-3 px-5 font-normal text-white pl-10">HABITACIONES</a></li>
                                </ul>
                            </li>
                            <li class="border-b border-solid border-[#2a4984] block py-3 px-5 font-normal text-white"><a href="#">SOBRE NOSOTROS</a></li>
                            <li class="border-b border-solid border-[#2a4984] block py-3 px-5 font-normal text-white"><a href="#">BLOG</a></li>
                        </ul>
                    </nav>
                </section>
            </section>
        </section>
    </header>

    <main class="overflow-x-hidden">
        <section class="w-full p-0 relative z-0">
            <div class="w-full relative overflow-hidden before:content-[''] before:block before:w-full before:h-full before:bg-black before:opacity-[0.3] before:absolute">
                <img src="{{ asset('images/mapi2.jpg') }}" alt="PERÚ DESTINY AGENCY" class="w-full p-0 h-lg-[90vh] hover:scale-110 transition-all duration-300">
            </div>
            {{-- -translate-x-1/2  --}}
            <div class="max-w-[400px] absolute top-1/2 left-[24px] transform -translate-y-1/2 text-white xl:max-w-[500px] xl:text-[red] xl:left-[60px] 2xl:text-[white] 2xl:max-w-[600px] 2xl:leading-relaxed">
                <h1 class="mb-1 sm:mb-2 text-lg sm:text-2xl md:text-4xl 2xl:text-5xl xl:mb-4 2xl:mb-6 font-bold">PERÚ DESTINY AGENCY</h1>
                <p class="mb-1 sm:mb-2 sm:text-base text-sm 2xl:mb-2 xl:mb-4 font-bold">¡Somos PERÚ DESTINY AGENCY! Confíe en nosotros para hacer de su aventura en Perú una experiencia inolvidable...</p>
                <p class="mb-1 sm:mb-2 text-sm sm:text-base 2xl:mb-2 xl:mb-4 hidden">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae incidunt quasi repellendus ab, labore culpa voluptates enim numquam. Natus, odio aperiam!</p>
                <p class="hidden sm:block">Nos destacamos por ofrecer : </p>
                <ul class="hidden sm:block mb-2 ml-4 list-disc xl:mb-4 2xl:mb-3 list-banner font-light">
                    <li class="text-sm sm:text-base"><strong class="font-bold">Servicios de calidad</strong> excepcional, diseñados para satisfacer sus necesidades.</li>
                    <li class="text-sm sm:text-base">Un equipo dedicado de <strong class="font-bold">profesionales apasionados</strong> por el servicio al cliente.</li>
                </ul>
                <a href="" class="text-base border outline-2 hover:bg-white hover:text-black transition-all duration-300 text-white px-5 py-2 rounded-lg w-[130px] flex items-center black md:text-lg">Contactos</a>
            </div>
        </section>


        {{-- BEST TRAVEL --}}
        <section class="mt-16">
            <article class="max-w-screen-xl mx-auto mt-5 mb-5 relative z-0">
                <h2 class="before:content-[''] before:w-24 before:h-1 before:bg-[#74B05F] before:absolute before:left-1/2 before:top-[-20px] before:translate-x-[-3rem] before:rounded relative text-center text-xl text-lg-3xl max-w-[800px] m-auto">LOS <strong class="text-[#74B05F]">TOURS MÁS POPULARES</strong></h2>
                <p class="text-center max-w-[1200px] m-auto mt-8 leading-relaxed px-3">Presentamos nuestra exclusiva lista de los <strong class="font-bold">tours más populares</strong>, diseñados para llevarte a un viaje inolvidable lleno de descubrimientos y experiencias auténticas. Sumérgete en la riqueza cultural, la belleza natural y la historia fascinante que solo Perú puede ofrecer. ¡Descubre la magia del Perú con nosotros!</p>
            </article>
        </section>

        <section class="max-w-screen-xl mx-auto mt-5 mb-3 flex items-center content-center justify-around flex-wrap">
            
            <article class="max-w-[380px] h-[610px] rounded-t-lg mb-4 bg-white group rounded-b-lg">
                <div class="relative">
                    <div class="max-w-[380px] h-[470px] rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/best.jpg') }}" alt="" class="w-full h-full rounded-t-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    </div>
    
                    <div class="text-white absolute bottom-0 left-3">
                        <p><i class="fa-solid fa-calendar-days text-white mr-2 text-light"></i> 6 Días / 5 Noches</p>
                    </div>

                    <div class="text-white absolute bottom-0 right-3">
                        <p><i class="fa-solid fa-signal text-white mr-2 text-light"></i> Moderada</p>
                    </div>
                </div>
                

                <div class="bg-white p-3 rounded-b-lg">
                    <h3 class="text-md font-extrabold">TOUR A MACHU PICCHU & VALLE SAGRADO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                    <a href="" class="block mt-3 bg-[#74B05F] text-center text-white p-2 font-normal rounded">RESERVAR AHORA</a>
                </div>

            </article>

            <article class="max-w-[380px] h-[610px] rounded-t-lg mb-4 bg-white group rounded-b-lg">
                <div class="relative">
                    <div class="max-w-[380px] h-[470px] rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/best.jpg') }}" alt="" class="w-full h-full rounded-t-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    </div>
    
                    <div class="text-white absolute bottom-0 left-3">
                        <p><i class="fa-solid fa-calendar-days text-white mr-2 text-light"></i> 6 Días / 5 Noches</p>
                    </div>

                    <div class="text-white absolute bottom-0 right-3">
                        <p><i class="fa-solid fa-signal text-white mr-2 text-light"></i> Moderada</p>
                    </div>
                </div>
                

                <div class="bg-white p-3 rounded-b-lg">
                    <h3 class="text-md font-extrabold">TOUR A MACHU PICCHU & VALLE SAGRADO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                    <a href="" class="block mt-3 bg-[#74B05F] text-center text-white p-2 font-normal rounded">RESERVAR AHORA</a>
                </div>

            </article>

            <article class="max-w-[380px] h-[610px] rounded-t-lg mb-4 bg-white group rounded-b-lg">
                <div class="relative">
                    <div class="max-w-[380px] h-[470px] rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/best.jpg') }}" alt="" class="w-full h-full rounded-t-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    </div>
    
                    <div class="text-white absolute bottom-0 left-3">
                        <p><i class="fa-solid fa-calendar-days text-white mr-2 text-light"></i> 6 Días / 5 Noches</p>
                    </div>

                    <div class="text-white absolute bottom-0 right-3">
                        <p><i class="fa-solid fa-signal text-white mr-2 text-light"></i> Moderada</p>
                    </div>
                </div>
                

                <div class="bg-white p-3 rounded-b-lg">
                    <h3 class="text-md font-extrabold">TOUR A MACHU PICCHU & VALLE SAGRADO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                    <a href="" class="block mt-3 bg-[#74B05F] text-center text-white p-2 font-normal rounded">RESERVAR AHORA</a>
                </div>

            </article>

            <article class="max-w-[380px] h-[610px] rounded-t-lg mb-4 bg-white group rounded-b-lg">
                <div class="relative">
                    <div class="max-w-[380px] h-[470px] rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/best.jpg') }}" alt="" class="w-full h-full rounded-t-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    </div>
    
                    <div class="text-white absolute bottom-0 left-3">
                        <p><i class="fa-solid fa-calendar-days text-white mr-2 text-light"></i> 6 Días / 5 Noches</p>
                    </div>

                    <div class="text-white absolute bottom-0 right-3">
                        <p><i class="fa-solid fa-signal text-white mr-2 text-light"></i> Moderada</p>
                    </div>
                </div>
                

                <div class="bg-white p-3 rounded-b-lg">
                    <h3 class="text-md font-extrabold">TOUR A MACHU PICCHU & VALLE SAGRADO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                    <a href="" class="block mt-3 bg-[#74B05F] text-center text-white p-2 font-normal rounded">RESERVAR AHORA</a>
                </div>

            </article>

            <article class="max-w-[380px] h-[610px] rounded-t-lg mb-4 bg-white group rounded-b-lg">
                <div class="relative">
                    <div class="max-w-[380px] h-[470px] rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/best.jpg') }}" alt="" class="w-full h-full rounded-t-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    </div>
    
                    <div class="text-white absolute bottom-0 left-3">
                        <p><i class="fa-solid fa-calendar-days text-white mr-2 text-light"></i> 6 Días / 5 Noches</p>
                    </div>

                    <div class="text-white absolute bottom-0 right-3">
                        <p><i class="fa-solid fa-signal text-white mr-2 text-light"></i> Moderada</p>
                    </div>
                </div>
                

                <div class="bg-white p-3 rounded-b-lg">
                    <h3 class="text-md font-extrabold">TOUR A MACHU PICCHU & VALLE SAGRADO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                    <a href="" class="block mt-3 bg-[#74B05F] text-center text-white p-2 font-normal rounded">RESERVAR AHORA</a>
                </div>

            </article>

            <article class="max-w-[380px] h-[610px] rounded-t-lg mb-4 bg-white group rounded-b-lg">
                <div class="relative">
                    <div class="max-w-[380px] h-[470px] rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/best.jpg') }}" alt="" class="w-full h-full rounded-t-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    </div>
    
                    <div class="text-white absolute bottom-0 left-3">
                        <p><i class="fa-solid fa-calendar-days text-white mr-2 text-light"></i> 6 Días / 5 Noches</p>
                    </div>

                    <div class="text-white absolute bottom-0 right-3">
                        <p><i class="fa-solid fa-signal text-white mr-2 text-light"></i> Moderada</p>
                    </div>
                </div>
                

                <div class="bg-white p-3 rounded-b-lg">
                    <h3 class="text-md font-extrabold">TOUR A MACHU PICCHU & VALLE SAGRADO</h3>
                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                    <a href="" class="block mt-3 bg-[#74B05F] text-center text-white p-2 font-normal rounded">RESERVAR AHORA</a>
                </div>

            </article>

              
            
        </section>
        {{-- BEST TRAVEL --}}

        {{-- BEST TRAVEL SLIDER --}}
        <section class="mt-16">
            <article class="max-w-screen-xl mx-auto mt-5 mb-5 relative z-0">
                <h2 class="before:content-[''] before:w-24 before:h-1 before:bg-[#74B05F] before:absolute before:left-1/2 before:top-[-20px] before:translate-x-[-3rem] before:rounded relative text-center text-xl text-lg-3xl max-w-[800px] m-auto">TOURS <strong class="text-[#74B05F]">FULL DAY (1 DÍA)</strong></h2>
                <p class="text-center max-w-[1200px] m-auto mt-8 leading-relaxed px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </article>
        </section>

        <section class="max-w-screen-xl mx-auto mt-5 mb-5 flex justify-center px-10">
            <div class="wrapper">
                <i id="left" class="buttons fa-solid fa-angle-left z-10 bg-[#74B05F]"></i>
                <ul class="carousel">
                    
                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img" >
                            <div class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i> up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#" class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img" >
                            <div class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i> up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#" class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img" >
                            <div class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i> up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#" class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img" >
                            <div class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i> up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#" class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img" >
                            <div class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i> up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#" class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img" >
                            <div class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i> up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#" class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    <li class="card pb-2">
                        <div class="relative z-0">
                            <img src="{{ asset('images/slider.jpg') }}" alt="img" >
                            <div class="absolute bottom-[-20px] w-[calc(100%-40px)] bg-[#2EA2CC] left-1/2 translate-x-[-50%] py-2 px-4 text-white flex justify-between">
                                <ul class="text-xs text-white w-full flex flex-row justify-between h-5 items-center">
                                    <li class="cursor-pointer"><i class="fa-regular fa-clock mr-1"></i> 4D/3N</li>
                                    <li class="border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="hidden md:block cursor-pointer"><i class="fa-solid fa-users mr-1"></i> up to n people</li>
                                    <li class="hidden md:block border-l border-solid border-white border-[px] h-full"></li>
                                    <li class="cursor-pointer"><i class="fa-solid fa-location-dot mr-1"></i> Cusco</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="mt-[30px] font-bold p-1">Classic inca Trail to MachuPicchu - 4D/3N</h3>
                        <div class="flex w-full justify-between mt-2 items-center px-2 pb-2">
                            <p><strong class="text-2xl">$697</strong> per person</p>
                            <a href="#" class="block bg-[#74B05F] text-center text-white p-1 font-normal rounded">VER TOUR</a>
                        </div>
                    </li>

                    
                </ul>
                <i id="right" class="buttons fa-solid fa-angle-right bg-[#74B05F]"></i>
            </div>
        </section>
        {{-- BEST TRAVEL SLIDER --}}

        {{-- OTHER SLIDER --}}
        <section class="mt-16">
            <article class="max-w-screen-xl mx-auto mt-5 mb-5 relative z-0">
                <h2 class="before:content-[''] before:w-24 before:h-1 before:bg-[#74B05F] before:absolute before:left-1/2 before:top-[-20px] before:translate-x-[-3rem] before:rounded relative text-center text-xl text-lg-3xl max-w-[800px] m-auto">Explore <strong class="text-[#74B05F]">SALKANTAY TREK</strong> & <strong class="text-[#74B05F]">INCA TRAIL</strong> to MACHU PICCHU with ADVENTURE TRAVEL EXPERTS</h2>
                <p class="text-center max-w-[1200px] m-auto mt-8 leading-relaxed px-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis pariatur cumque totam magni molestias reiciendis nostrum officiis perspiciatis consequuntur veniam, tempora, quam vero praesentium voluptatum tenetur aliquid modi vel reprehenderit mollitia fuga eius dolorem quibusdam? Voluptas, nisi laudantium? Nesciunt ratione aliquid laudantium illum nemo ullam adipisci repellendus deserunt dolor, maxime recusandae quasi accusamus molestias.</p>
            </article>
        </section>

        <section class="max-w-screen-xl mx-auto mt-5 mb-5 flex items-center content-center justify-around flex-wrap">
            <article class="w-[300px] shadow-lg rounded-lg mb-4">
                <div class="w-[300px] rounded-t-lg">
                    <img src="{{ asset('images/tours.jpg') }}" alt="" class="w-full rounded-t-lg">
                </div>
                <div class="p-3">
                    <h3 class="text-base font-bold text-center">TOUR A MACHUPICCHU</h3>
                    <p class="font-thin text-center">6 DIAS / 5 NOCHES</p>
                    <div class="flex justify-between items-end">
                        <div>
                            <p class="text-sm">desde : </p>
                            <p class="text-sm">USD <strong class="text-xl">800</strong> por persona</p>
                        </div>
                        <div>
                            <a class="flex justify-center items-center w-[120px] h-[40px] text-center text-white bg-[#74B05F] rounded hover:bg-[#8FC45F] transition-all" href="">VER TOUR <i class="fa-solid fa-arrow-right ml-3"></i></a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-[300px] shadow-lg rounded-lg mb-4">
                <div class="w-[300px] rounded-t-lg">
                    <img src="{{ asset('images/tours.jpg') }}" alt="" class="w-full rounded-t-lg">
                </div>
                <div class="p-3">
                    <h3 class="text-base font-bold text-center">TOUR A MACHUPICCHU</h3>
                    <p class="font-thin text-center">6 DIAS / 5 NOCHES</p>
                    <div class="flex justify-between items-end">
                        <div>
                            <p class="text-sm">desde : </p>
                            <p class="text-sm">USD <strong class="text-xl">800</strong> por persona</p>
                        </div>
                        <div>
                            <a class="flex justify-center items-center w-[120px] h-[40px] text-center text-white bg-[#74B05F] rounded hover:bg-[#8FC45F] transition-all" href="">VER TOUR <i class="fa-solid fa-arrow-right ml-3"></i></a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-[300px] shadow-lg rounded-lg mb-4">
                <div class="w-[300px] rounded-t-lg">
                    <img src="{{ asset('images/tours.jpg') }}" alt="" class="w-full rounded-t-lg">
                </div>
                <div class="p-3">
                    <h3 class="text-base font-bold text-center">TOUR A MACHUPICCHU</h3>
                    <p class="font-thin text-center">6 DIAS / 5 NOCHES</p>
                    <div class="flex justify-between items-end">
                        <div>
                            <p class="text-sm">desde : </p>
                            <p class="text-sm">USD <strong class="text-xl">800</strong> por persona</p>
                        </div>
                        <div>
                            <a class="flex justify-center items-center w-[120px] h-[40px] text-center text-white bg-[#74B05F] rounded hover:bg-[#8FC45F] transition-all" href="">VER TOUR <i class="fa-solid fa-arrow-right ml-3"></i></a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="w-[300px] shadow-lg rounded-lg mb-4">
                <div class="w-[300px] rounded-t-lg">
                    <img src="{{ asset('images/tours.jpg') }}" alt="" class="w-full rounded-t-lg">
                </div>
                <div class="p-3">
                    <h3 class="text-base font-bold text-center">TOUR A MACHUPICCHU</h3>
                    <p class="font-thin text-center">6 DIAS / 5 NOCHES</p>
                    <div class="flex justify-between items-end">
                        <div>
                            <p class="text-sm">desde : </p>
                            <p class="text-sm">USD <strong class="text-xl">800</strong> por persona</p>
                        </div>
                        <div>
                            <a class="flex justify-center items-center w-[120px] h-[40px] text-center text-white bg-[#74B05F] rounded hover:bg-[#8FC45F] transition-all" href="">VER TOUR <i class="fa-solid fa-arrow-right ml-3"></i></a>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        {{-- OTHER SLIDER --}}
    </main>

    <footer class="bg-[#1A1A1A]">
        <section>
            <img src="{{ asset('images/footer.jpg') }}" alt="">
        </section>
        <section class="max-w-screen-xl mx-auto mt-5 mb-5 pt-5 text-[#e8e8e8] px-2">
            <section class="flex flex-col md:flex-row items-center md:justify-between md:items-start">
                

                <div class="mr-8 max-w-[380px] md:max-w-none">
                    <article>
                        <h2 class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:bg-[#74B05F] text-[#74B05F] after:h-[1.5px] after:w-full">CONTACT</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-regular fa-envelope mr-2"></i>info@perudestiny.com</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-solid fa-phone text-[13px] mr-2"></i><span class="font-bold">Office : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-brands fa-whatsapp text-xl text-[13px] mr-1"></i><span class="font-bold">Sales : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-brands fa-whatsapp text-xl text-[13px] mr-1"></i><span class="font-bold">Sales : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-solid fa-phone mr-2"></i><span class="font-bold">Perú : </span> +51 974 409 679</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-solid fa-phone mr-2"></i><span class="font-bold">24 Hrs assistance : </span> +51 974 409 679</li>
                        </ul>
                    </article>
        
                    <article>
                        <h2 class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.35px] after:w-full after:bg-[#74B05F] text-[#74B05F] pt-3">OFFICE HOURS</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i></i>Monday to Friday 9:00 - 13:00 hrs & 15:00 - 19:00 hrs</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i></i>Saturday 9:00 to 13:00 H   and From 17:00 to 19:00 H</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i></i>Sunday 17:00 to 19:00 H</li>
                        </ul>
                    </article>
        
                    <article>
                        <h2 class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1px] after:w-full after:bg-[#74B05F] text-[#74B05F] pt-3">SALES TEAM HOURS</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i>Monday through Friday 9:00 - 13:00 H & 15:00 - 19:30 H</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-2 fa-regular fa-calendar-days"></i>Saturday 8:30 - 13:00 H</li>
                        </ul>
                    </article>
                </div>

                <div class="mr-8 max-w-[380px] md:max-w-none">
                    <article>
                        <h2 class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.5px] after:w-full after:bg-[#74B05F] text-[#74B05F]">PERU DESTINY OFFICE</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] fa-regular fa-envelope mr-1"></i> info@samtravelperu.com</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-2 fa-solid fa-location-dot"></i> Garcilaso Street 210 , Office Nº:207 (2and Floor) in the la CASA DEL ABUELO shopping center</li>
                            <li class="text-[13px]">Sunday CLOSED
                                **All Bookings done during weekends will be confirmed Monday morning.**</li>
                        </ul>
                    </article>
                </div>
                
                
    
                <div class="hidden md:block mr-8">
                    <article>
                        <h2 class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.5px] after:w-full after:bg-[#74B05F] text-[#74B05F] ">DESTINATIONS</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Tours to Machu Picchu</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Peru Information, Land of the Incas</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Inca Trail</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> The Imperial City of Cusco</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Trekking to Machu Picchu and Other Related Information</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Information about Our Salkantay Trek</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Lares Trek to Machu Picchu travel guide</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Huchuy Qosqo Trek Information 2024</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Travel Guide & Information for Choquequirao Trek</li>
                        </ul>
                    </article>
                </div>
    
                <div class="hidden md:block">
                    <article>
                        <h2 class="font-extrabold text-base max-w-[300px] after:content-[''] after:block after:h-[1.5px] after:w-full after:bg-[#74B05F] text-[#74B05F]">USEFUL INFORMATION</h2>
                        <ul class="leading-loose">
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Terms & Conditions</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Terms & Conditions</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Emergency Preparation SAM Travel´s Guide</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Extra Luggage</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Homestay in Pisac</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Vistadome or Expedition Train?</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Social Projects</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Our Clean up Campaign</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Empowering Women on the Inca Trail</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Personal Porters</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Our travel blog</li>
                            <li class="text-[13px]"><i class="text-[#74B05F] mr-1 fa-solid fa-check"></i> Privacy Policy</li>
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
