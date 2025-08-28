<?php require_once 'components/Header.php'; ?>
<div class="mt-20 w-full h-full bg-gray-bg ">
    <main class="flex flex-col">
        <section class="w-full">
            <!-- Contenedor del carrusel -->
            <div id="carousel" class="relative w-full h-64 sm:h-80 md:h-[28rem] lg:h-[34rem] overflow-hidden group">
                <!-- Slides -->
                <div class="absolute inset-0">
                    <img src="./assets/imagenes/carrusel1.webp" alt="Slide 1" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-100" />
                    <img src="./assets/imagenes/carrusel5.webp" alt="Slide 2" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-0" />
                    <img src="./assets/imagenes/carrusel2.webp" alt="Slide 3" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-0" />
                    <img src="./assets/imagenes/carrusel3.webp" alt="Slide 3" class="carousel-slide absolute inset-0 w-full h-full object-cover opacity-0" />
                </div>
                <!-- Sombras laterales sutiles -->
                <div class="pointer-events-none absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-black/40 to-transparent"></div>
                <div class="pointer-events-none absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-black/40 to-transparent"></div>
                <!-- Indicadores -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                <button class="indicator h-2 w-2 rounded-full bg-white/50 aria-[current=true]:w-6 aria-[current=true]:bg-white transition-all" aria-current="true" aria-label="Ir al slide 1"></button>
                <button class="indicator h-2 w-2 rounded-full bg-white/50 aria-[current=true]:w-6 aria-[current=true]:bg-white transition-all" aria-label="Ir al slide 2"></button>
                <button class="indicator h-2 w-2 rounded-full bg-white/50 aria-[current=true]:w-6 aria-[current=true]:bg-white transition-all" aria-label="Ir al slide 3"></button>
                <button class="indicator h-2 w-2 rounded-full bg-white/50 aria-[current=true]:w-6 aria-[current=true]:bg-white transition-all" aria-label="Ir al slide 4"></button>
                </div>
                <!-- Controles opcionales (ocultos hasta hover) -->
                <button id="prevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white backdrop-blur px-3 py-2 rounded-2xl opacity-0 group-hover:opacity-100 transition" aria-label="Anterior">◀</button>
                <button id="nextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/20 hover:bg-white/30 text-white backdrop-blur px-3 py-2 rounded-2xl opacity-0 group-hover:opacity-100 transition" aria-label="Siguiente">▶</button>
            </div>
        </section>
        <section>
            <div class=" bg-white flex flex-col items-center px-4 py-4 gap-6">
                <div class="flex flex-col items-center">
                    <h3 class="text-base text-gold-ist font-noto font-bold">Bienvenidos a</h3>
                    <h2 class="text-3xl font-patria text-black-ist text-center">La Escuela de Dietética y Nutrición del ISSSTE</h2>
                    <p class="text-gray-400">Conoce la oferta educativa que tenemos para ti.</p>
                </div>
                <div class="flex gap-4">
                    <img class="rounded-md max-w-48" src="./assets/imagenes/oferta1.webp" alt="Imagen de alumno">
                    <div class="flex flex-col justify-around h-auto">
                        <h4 class="text-gold-ist font-bold font-noto text-xs">Conoce la</h4>
                        <h2 class="text-black-ist font-patria text-xl">Licenciatura en Dietética y Nutrición</h2>
                        <p class="text-sm text-gray-400 font-noto">La Licenciatura en Dietética y Nutrición cuenta con planes de estudio con validez oficial.</p>
                        <button class="bg-green-enf-ist rounded-md px-2 py-1 text-white font-patria">Más información</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require_once 'components/Footer.php'; ?>
</div>

