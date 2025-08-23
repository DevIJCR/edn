<header class="w-full absolute z-10 top-0">
    <div class="w-full flex items-center justify-center p-2">
        <img src="assets/logos/logos.svg" alt="logos EDN" class=" h-6 md:h-9">
    </div>
    <div class="w-full flex">
        <div class="bg-red-ist h-7 sm:h-9 md:h-11 w-full relative"> <!-- NAV BAR FULL SCREEN CONTAINER-->
            <nav class="hidden md:flex items-center h-full px-2 py-1"> <!-- NAV BAR FULL SCREEN-->
                <div class="flex gap-4 items-center justify-center w-full">
                    <a class="text-white text-xs font-noto md:text-xs lg:text-base hover:text-gold-enf-ist" href="#">Conoce la EDN</a>
                    <div class="flex items-center gap-1.5 group">
                        <button class="cursor-pointer text-white text-xs font-noto md:text-xs lg:text-base relative group-hover:text-gold-enf-ist" >
                            Licenciatura
                            <ul class="invisible group-hover:visible transition-all delay-100 flex flex-col gap-2 absolute top-7 lg:top-9 -left-2 bg-white w-74 rounded-sm border border-gold-enf-ist shadow-xl">
                                <li class=" hover:bg-gray-300 px-2 py-2">
                                    <h2 class="w-full text-black-ist text-left">Licenciatura en Dietética y Nutrición</h2>
                                </li>
                                <li class=" hover:bg-gray-300 px-2 py-2">
                                    <h2 class="w-full text-black-ist text-left">Alumnos</h2>
                                </li>
                            </ul>
                        </button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="cursor-pointer fill-white group-hover:fill-gold-enf-ist bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </div>
                    <div class="flex gap-1.5 items-center group">
                        <button class="cursor-pointer text-white text-xs font-noto md:text-xs lg:text-base relative group-hover:text-gold-enf-ist" >
                            Posgrado
                            <ul class="invisible group-hover:visible transition-all delay-100 flex flex-col gap-2 absolute top-7 lg:top-9 -left-2 bg-white w-74 rounded-sm border border-gold-enf-ist shadow-xl">
                                <li class=" hover:bg-gray-300 px-2 py-2">
                                    <h2 class="w-full text-black-ist text-left">Maestría en Nutrición Clínica</h2>
                                </li>
                                <li class=" hover:bg-gray-300 px-2 py-2">
                                    <h2 class="w-full text-black-ist text-left">Alumnos</h2>
                                </li>
                            </ul>
                        </button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="cursor-pointer fill-white group-hover:fill-gold-enf-ist bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg>
                    </div>
                    <a class="text-white text-xs font-noto md:text-xs lg:text-base hover:text-gold-enf-ist" href="#">Aspirantes</a>
                    <a class="text-white text-xs font-noto md:text-xs lg:text-base hover:text-gold-enf-ist" href="#">Biblioteca</a>
                    <a class="text-white text-xs font-noto md:text-xs lg:text-base hover:text-gold-enf-ist" href="#">Centro de Dietética y Nutrición</a>
                    <a class="text-white text-xs font-noto md:text-xs lg:text-base hover:text-gold-enf-ist" href="#">Educación Nutriológica Continua</a>
                </div>
            </nav>
            <img src="/assets/icons/list.svg" alt="Boton desplegar menu" class="size-5 sm:size-7 md:hidden absolute right-4 top-1">
        </div>
        <div class="hidden h-screen md:hidden w-[65%] bg-red-ist py-1 px-2"> <!-- NAV BAR MOBILE CONTAINER-->
            <nav class="w-full flex flex-col items-start gap-4"> <!-- NAV BAR MOBILE-->
                <h2 class="text-semibold text-sm text-white font-patria">Menú</h2>
                <div class="flex flex-col">
                    <a class="text-white text-xs font-noto sm:text-sm" href="#">Conoce la EDN</a>
                    <div class="flex gap-1.5 items-center">
                        <a class="text-white text-xs font-noto sm:text-sm" href="#">
                            Licenciatura
                            <ul class="hidden">
                                <li class="text-white text-xs font-noto">Licenciatura en Dietética y Nutrición</li>
                                <li class="text-white text-xs font-noto">Alumnos</li>
                            </ul>
                        </a>
                        <img class="size-3" src="/assets/icons/caret-down-fill.svg" alt="abrir submenú">
                    </div>
                    <div class="flex gap-1.5 items-center">
                        <a class="text-white text-xs font-noto sm:text-sm" href="#">
                            Posgrado
                            <ul class="hidden">
                                <li class="text-white text-xs font-noto">Maestría en Nutrición Clínica</li>
                                <li class="text-white text-xs font-noto">Alumnos</li>
                            </ul>
                        </a>
                        <img class="size-3" src="/assets/icons/caret-down-fill.svg" alt="abrir submenú">
                    </div>
                    <a class="text-white text-xs font-noto sm:text-sm" href="#">Aspirantes</a>
                    <a class="text-white text-xs font-noto sm:text-sm" href="#">Biblioteca</a>
                    <a class="text-white text-xs font-noto sm:text-sm" href="#">Centro de Dietética y Nutrición</a>
                    <a class="text-white text-xs font-noto sm:text-sm" href="#">Educación Nutriológica Continua</a>
                </div>
            </nav>
        </div>
    </div>
</header>