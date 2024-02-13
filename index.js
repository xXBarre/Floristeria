
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

/*Laura*/
document.addEventListener("DOMContentLoaded", function() {
  const slides = document.querySelectorAll('.slide');

  slides.forEach((slide, index) => {
    slide.addEventListener('click', function() {
      const currentSlide = document.querySelector('.active');
      const nextIndex = (index + 1) % slides.length;

      currentSlide.classList.remove('active');
      slides[nextIndex].classList.add('active');
    });
  });
});
