$(document).ready(function() {


  var sampleSwiperFive = new Swiper(".sample-Swiper-five", {
    slidesPerView: 3,
    //centeredSlides: false,
    //centeredSlidesBounds: true,
    spaceBetween: 30,
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
    1025: {
      freemode:false,
      slidesPerView: 2.1,
      loop:true,
      spaceBetween: 5,
    },
        
    640: {
      freemode:false,
      slidesPerView: 1.1,
      spaceBetween: 5,
      loop:true,
    },
    320: {
      freemode:false,
      slidesPerView: 1.1,
      spaceBetween: 5,
      loop:true,
    },
    
}
  });
  var sampleSwiperFour = new Swiper(".sample-Swiper-four", {
    slidesPerView: 3.1,
    //centeredSlides: true,
    //centeredSlidesBounds: true,
    spaceBetween: 40,
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
    1025: {
      freemode:false,
      slidesPerView: 2.5,
      loop:true,
      spaceBetween: 20,
    },
        
    640: {
      freemode:false,
      slidesPerView: 1.2,
      spaceBetween: 8,
      loop:true,
    },
    320: {
      freemode:false,
      slidesPerView: 1.2,
      spaceBetween: 8,
      loop:true,
    },
   
}
  });
  
  var sampleSwiperThree = new Swiper(".sample-Swiper-three", {
    slidesPerView: 3.1,
    //centeredSlides: true,
    //centeredSlidesBounds: true,
    spaceBetween: 40,
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
    1025: {
      freemode:false,
      slidesPerView: 2.5,
      loop:true,
      spaceBetween: 20,
    },
        
    640: {
      freemode:false,
      slidesPerView: 1.2,
      spaceBetween: 8,
      loop:true,
    },
    320: {
      freemode:false,
      slidesPerView: 1.2,
      spaceBetween: 8,
      loop:true,
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
        1025: {
          freemode:false,
          slidesPerView: 2.5,
          loop:true,
          spaceBetween: 20,
        },

        1024: {
          freemode:false,
          slidesPerView: 2.3,
          loop:true,
          spaceBetween: 20,
        },
            
        640: {
          freemode:false,
      slidesPerView: 1.2,
      spaceBetween: 8,
      loop:true,
        },
        320: {
          freemode:false,
      slidesPerView: 1.2,
      spaceBetween: 8,
      loop:true,
        },
        
  }
      });
      var sampleSwiperTwo = new Swiper(".sample-Swiper-six", {
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
          1025: {
            freemode:false,
            slidesPerView: 2.5,
            loop:true,
            spaceBetween: 20,
          },
              
          640: {
            freemode:false,
        slidesPerView: 1.2,
        spaceBetween: 8,
        loop:true,
          },
          320: {
            freemode:false,
        slidesPerView: 1.2,
        spaceBetween: 8,
        loop:true,
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
      duration: 1500,
    })
    
  });


  jQuery(document).ready(function ($) {
    $(".fancybox").fancybox({
        helpers: {
            media: true
        },
        youtube: {
            autoplay: 1, // enable autoplay
           // start: 1 // set start time in seconds (embed)
        }
        
    }); // fancybox

    /* $('#myModal').on('shown.bs.modal', function () {
      $('#video1')[0].play();
    })
    $('#myModal').on('hidden.bs.modal', function () {
      $('#video1')[0].pause();
    }) */
      
    
});



  


     