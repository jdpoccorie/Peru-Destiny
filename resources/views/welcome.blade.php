<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peru Destiny</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <section class="bg-[#2ea2cc] py-4">
        <div class="max-w-screen-xl mx-auto flex flex-row-reverse">
            <section class="text-white">
                <i class="fa-solid fa-phone text-white text-xl"></i> +51 974 409 679
                <i class="fa-brands fa-whatsapp text-2xl"></i> +51 974 409 679
            </section>
        </div>
    </section>

    <header class="sticky top-0" x-data="{ open: false }">
        <section class="relative">
            <section class="sticky top-0 bg-white z-50 w-full pb-3">
                <section class="max-w-screen-xl mx-auto flex justify-between pt-3">
                    <div class="flex justify-between w-full md:w-auto items-center">
                        <div>
                            <img src="{{ asset('images/logo.svg') }}" alt="">
                        </div>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 md:hidden" x-on:click="open = !open">Menu</button>
                    </div>
                    <nav class="hidden md:block justify-center pt-3">
                        <ul>
                            <li class="inline-block font-semibold uppercase"><a href="#" class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">INICIO</a></li>
                            <li class="inline-block font-semibold uppercase"><a href="#" class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">TOURS A MACHUPICCHU</a></li>
                            <li class="inline-block font-semibold uppercase"><a href="#" class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]">TOURS 1 DÍA</a></li>
                            <li class="inline-block font-semibold uppercase has-submenu relative z-10 group">
                                <span class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent pr-10 before:content-['>'] before:absolute before:right-3 before:top-0 after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-top after:duration-300 ease-in-out hover:after:w-11/12 hover:after:left-[5%]">PAQUETES</span>
                                <ul class="list-unstyled absolute left-0 top-10 w-60 h-56 bg-[#fff] transition invisible after:transition-top after:duration-300 ease-in-out group-hover:visible group-hover:top-[30px] group-hover:h-auto rounded-lg">
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">LA EMPRESA</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">GALERIA DE FOTOS</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">DEPARTAMENTO</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">HABITACIONES</a></li>
                                    <li class="block"><a class="text-[#544f4f] block leading-10 h-10 font-normal hover:bg-[#ddd] pl-2" href="#">HABITACIONES</a></li>
                                </ul>
                            </li>
                            <li class="inline-block font-semibold uppercase"><a class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]" href="#">SOBRE NOSOTROS</a></li>
                            <li class="inline-block font-semibold uppercase"><a class="h-8 inline-block py-0 px-3 text-[#1a4c82] relative m-0 border-none align-baseline bg-transparent after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-[0%] after:h-1 after:block after:bg-[#223f77] after:transition-all after:duration-300 hover:after:w-11/12 hover:after:left-[5%]" href="#">BLOG</a></li>
                        </ul>
                    </nav>
                </section>
            </section>
    
            <section class="absolute w-full top-full">
                <section>
                    <nav class="bg-[#223f77] transition-max-height duration-300 ease-in-out overflow-hidden max-h-0" :class="{'max-h-screen': open}">
                        <ul>
                            <li class="border-b border-solid border-[#2a4984]"><a class="block py-3 px-5 font-normal text-white" href="#">INICIO</a></li>
                            <li class="border-b border-solid border-[#2a4984]"><a class="block py-3 px-5 font-normal text-white" href="#">TOURS A MACHUPICCHU</a></li>
                            <li class="border-b border-solid border-[#2a4984]"><a class="block py-3 px-5 font-normal text-white" href="#">TOURS 1 DÍA</a></li>
                            <li class="has-submenu">
                                <span class="btn-sobre border-b border-solid border-[#2a4984] block py-3 px-5 font-normal text-white relative transition-all duration-300 ease-in-out">PAQUETES</span>
                                <ul class="list-unstyled bg-[#1b376d]">
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
        <section class="w-full p-0">
            <div class="w-full">
                <img src="{{ asset('images/machuImagenGrande.jpg') }}" alt="" class="w-full p-0">
            </div>
        </section>
    </main>


    



</body>

</html>
