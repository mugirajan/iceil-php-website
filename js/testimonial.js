$(document).ready(function(){
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 10,
      responsiveClass: true,
      nav: false, 
      autoplay: true,
      responsive: {
        0: {
          items: 1,
          nav: true 
        },
        680: {
          items: 1,
          nav: true,
          loop: true 
        },
        1000: {
          items: 2,
          nav: true,
          loop: true 
        }
      }
    });
  });
  