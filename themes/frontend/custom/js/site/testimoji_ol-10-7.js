$(document).ready(function() {

  var sampleSwiperFive = new Swiper(".sample-Swiper-five", {
    slidesPerView: 3.1,
      // centeredSlides: true,
      spaceBetween: 30,
      grabCursor: true,
      loop:true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
  breakpoints: {
        
    640: {
      freemode:true,
      slidesPerView: 3.1,
      spaceBetween: 30,
      loop:true,
    },
    320: {
      freemode:true,
      slidesPerView: 1.2,
      spaceBetween: 5,
    },
    
}
  });
  var sampleSwiperFour = new Swiper(".sample-Swiper-four", {
    slidesPerView: 3.2,
      // centeredSlides: true,
      spaceBetween: 30,
      grabCursor: true,
      loop:true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
  breakpoints: {
        
    640: {
      freemode:true,
      slidesPerView: 3.2,
      spaceBetween: 30,
      loop:true,
    },
    320: {
      freemode:true,
      slidesPerView: 1.2,
      spaceBetween: 5,
    },
   
}
  });
  
  var sampleSwiperThree = new Swiper(".sample-Swiper-three", {
    slidesPerView: 3.4,
    // centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    loop:true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
  breakpoints: {
        
    640: {
      freemode:true,
      slidesPerView: 3.4,
      spaceBetween: 30,
      loop:true,
    },
    320: {
      freemode:true,
      slidesPerView: 1.2,
      spaceBetween: 5,
    },
    
}
  });
    var sampleSwiperTwo = new Swiper(".sample-Swiper-two", {
      slidesPerView: 2.5,
      // centeredSlides: true,
      spaceBetween: 25,
      grabCursor: true,
      loop:true,
      loopedSlides: 50,

        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      
        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
      breakpoints: {
            
        640: {
          freemode:false,
          slidesPerView: 2.5,
          spaceBetween: 25,
          loop:true,
        },
        320: {
          freemode:false,
          slidesPerView: 1.2,
          spaceBetween: 5,
        },
        
  }
      });
  });
  $(document).ready(function () {
    $(".flip").on('click', function() {
      $(this).next().next().toggle();
      $(this).parent().parent().siblings().find(".card-img-overlay-new").hide();
      $(this).parent().parent().siblings().find(".fa-plus-circle").removeClass("plus-rotet");
    
  });

    $(".fa-plus-circle").click(function () {
      $(this).toggleClass("plus-rotet");
    });
    AOS.init({
      duration: 1600,
    })
  });


     