let heroCurrentIndex = 0;
const heroSlides = document.querySelectorAll('.hero-slide');

function showHeroSlide(index) {
    heroSlides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function nextHeroSlide() {
    heroCurrentIndex = (heroCurrentIndex + 1) % heroSlides.length;
    showHeroSlide(heroCurrentIndex);
}

function prevHeroSlide() {
    heroCurrentIndex = (heroCurrentIndex - 1 + heroSlides.length) % heroSlides.length;
    showHeroSlide(heroCurrentIndex);
}

// Initialize the first slide
showHeroSlide(heroCurrentIndex);
