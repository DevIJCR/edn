(function () {
const carousel = document.getElementById('carousel');
const slides = Array.from(carousel.querySelectorAll('.carousel-slide'));
const indicators = Array.from(carousel.querySelectorAll('.indicator'));
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');


let current = 0;
let interval = null;
const INTERVAL_MS = 3500; // tiempo entre transiciones


function showSlide(index) {
// normaliza el índice
current = (index + slides.length) % slides.length;
// aplica opacidades
slides.forEach((img, i) => {
img.style.opacity = i === current ? '1' : '0';
});
// actualiza indicadores
indicators.forEach((dot, i) => {
if (i === current) {
dot.setAttribute('aria-current', 'true');
} else {
dot.removeAttribute('aria-current');
}
});
}


function startAuto() {
if (interval) return; // evita múltiples intervalos
interval = setInterval(() => showSlide(current + 1), INTERVAL_MS);
}


function stopAuto() {
clearInterval(interval);
interval = null;
}


// Pausa al pasar el mouse encima, reanuda al salir
carousel.addEventListener('mouseenter', stopAuto);
carousel.addEventListener('mouseleave', startAuto);


// Indicadores: ir a un slide específico
indicators.forEach((dot, i) => {
dot.addEventListener('click', () => {
showSlide(i);
});
});


// Controles siguiente / anterior
nextBtn.addEventListener('click', () => showSlide(current + 1));
prevBtn.addEventListener('click', () => showSlide(current - 1));


// soporte de teclado (izquierda/derecha)
document.addEventListener('keydown', (e) => {
if (e.key === 'ArrowRight') showSlide(current + 1);
if (e.key === 'ArrowLeft') showSlide(current - 1);
});


// inicia
showSlide(0);
startAuto();
})();