document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slider img');
    let currentIndex = 0;
    const totalSlides = slides.length;

    function updateSlider() {
        const offset = -currentIndex * 100;
        slider.style.transform = `translateX(${offset}%)`;
    }

    function autoSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;  // Loop back to the first slide
        updateSlider();
    }

    // Start the automatic slider with a 3-second interval
    setInterval(autoSlide, 1000);
});
