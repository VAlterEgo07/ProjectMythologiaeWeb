let currentIndex = 0;
const slides = document.querySelectorAll('.carrusel-slide');
const totalSlides = slides.length;
const carruselContenedor = document.querySelector('.carrusel-contenedor');

document.getElementById('btn-siguiente').addEventListener('click', () => {
    if (currentIndex < totalSlides - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateCarrusel();
});

document.getElementById('btn-anterior').addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = totalSlides - 1;
    }
    updateCarrusel();
});

function updateCarrusel() {
    const offset = -currentIndex * 100;
    carruselContenedor.style.transform = `translateX(${offset}%)`;
}