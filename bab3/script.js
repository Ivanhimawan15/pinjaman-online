let slideIndex = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    const width = slides[0].clientWidth;
    document.querySelector('.carousel-inner').style.transform = `translateX(-${index * width}px)`;
}

function nextSlide() {
    slideIndex++;
    const slides = document.querySelectorAll('.carousel-item');
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex--;
    const slides = document.querySelectorAll('.carousel-item');
    if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }
    showSlide(slideIndex);
}

showSlide(slideIndex);

function toggleAccordion() {
    const content = document.querySelector('.accordion-content');
    content.style.display = content.style.display === 'none' ? 'block' : 'none';
}