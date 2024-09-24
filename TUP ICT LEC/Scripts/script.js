const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

document.getElementById('nextSlide').addEventListener('click', () => {
    slides[currentSlide].classList.remove('active');
    slides[currentSlide].classList.add('prev');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.remove('prev');
    slides[currentSlide].classList.add('active');
});

document.getElementById('prevSlide').addEventListener('click', () => {
    slides[currentSlide].classList.remove('active');
    slides[currentSlide].classList.add('prev');
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[currentSlide].classList.remove('prev');
    slides[currentSlide].classList.add('active');
});
