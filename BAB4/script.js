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

function openPopup() {
    document.getElementById("popup").style.display = "block";
}
function closePopup() {
    document.getElementById("popup").style.display = "none";
}

function tutup() {
    document.getElementById("uda").style.display = "none";
}
document.addEventListener("DOMContentLoaded", function() {
    // Memeriksa apakah popup seharusnya muncul atau tidak
    var popupStatus = localStorage.getItem("popupStatus");
    if (popupStatus === "open") {
        document.getElementById("uda").style.display = "block";
    }

    var form = document.getElementById("registration-form");
    
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        window.location.href = "tugasP2_index.html";
        localStorage.setItem("popupStatus", "open"); // Menandai bahwa popup seharusnya muncul
    });
});

function tutup() {
    document.getElementById("uda").style.display = "none";
    localStorage.setItem("popupStatus", "closed"); // Menandai bahwa popup seharusnya tertutup
}