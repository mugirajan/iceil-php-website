var testiomnialData = [
    {
        name: "Jennefar Raj,<br>Cluster Head, DLF Operation",
        review: "I would like to take this opportunity to thank you and M/s ICEIL Systems team for the prompt committed production and delivery Schedule and as expected excellent work completion despite all the constraints due to site condition.  It has been tough task to produce and execute the work within the time period given by DLF, however your Production and Execution team shown their utmost professionalism on given challenges all around.  Your CTO and GM demonstrated their technical ability and flexibility during the execution.  Together we all have been able to complete the project on time.It will be pleasure to work with you again. I wish you all the best and success in your future endeavours."
    },
    {
        name: "Marys Lobb",
        review: "Life-altering find! Indispensable now. Enthusiastically suggest to all. A game-changer for everyone!"
    }]
var slideHolder = document.querySelector("#slideHolder")
for (let i of testiomnialData) slideHolder.innerHTML += `<div class="swiper-slide"> 

<div class="ContentHolder"><p>${i.review}</p><h3>${i.name}</h3></div></div>`

const swiper = new Swiper('#craouselContainer', {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 2.3,
    loop: true,
    spaceBetween: 10,
    effect: "coverflow",
    coverflowEffect: {
        rotate: 0,
        depth: 800,
        slideShadows: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    autoplay: { delay: 2000 }
});
window.onresize = queryResizer
queryResizer()
function queryResizer() {
    if (window.innerWidth < 724) swiper.params.slidesPerView = 2
    if (window.innerWidth > 501) swiper.params.slidesPerView = 2
    if (window.innerWidth > 724) swiper.params.slidesPerView = 2.3
    if (window.innerWidth < 501) swiper.params.slidesPerView = 1
    swiper.update()
}