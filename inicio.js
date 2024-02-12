document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % (carousel.children.length);
        updateCarousel();
    }

    function updateCarousel() {
        const translateValue = -currentIndex * 100 + "%";
        carousel.style.transform = "translateX(" + translateValue + ")";
    }

    setInterval(nextSlide, 3000); // Cambiar de slide cada 3 segundos (ajustar según sea necesario)
});

