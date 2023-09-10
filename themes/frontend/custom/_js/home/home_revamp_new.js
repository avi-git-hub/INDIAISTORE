// main slideshow
if ($("section.hero-banner").length > 0) {
    var heroSlider = tns({
      container: ".hero-banner .slider",
      items: 1,
      slideBy: 1,
      speed: 1000,
      autoplay: true,
      autoplayButtonOutput: false,
      // autoplayHoverPause: true,
      // autoplayTimeout: 5000,
      gutter: 0,
      nav: true,
      controls: false,
      mouseDrag: true,
    });
  }
  
  if ($("section.mini-carousel").length > 0) {
    var miniSlider = tns({
      container: ".mini-carousel .slider",
      items: 1.2,
      slideBy: 1,
      autoplay: true,
      gutter: 15,
      nav: false,
      controls: false,
      mouseDrag: true,
      loop: true,
      responsive: {
        768: { items: 2.2, mouseDrag: true, slideBy: 1 },
        1024: { gutter: 30 },
      },
    });
  }
  
  if ($("section.offer-carousel.trending").length > 0) {
    /*var slider1 = tns({
        container: ".offer-carousel.trending .slider",
        items: 1.35,
        slideBy: "page",
        autoplay: false,
        gutter: 15,
        nav: false,
        controls: true,
        mouseDrag: true,
        responsive: {
            577: { items: 2.4, mouseDrag: true },
            1024: { items: 3.3, mouseDrag: true },
        },
    });*/
  
    var slider1 = tns({
      container: ".offer-carousel.trending .slider",
      items: 1.35,
      slideBy: 1,
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: true,
      mouseDrag: true,
      responsive: {
        577: { items: 2, mouseDrag: true },
        1024: { items: 3, mouseDrag: true },
      },
    });
  }
  
  if ($("section.offer-carousel.interested").length > 0) {
    var slider2 = tns({
      container: ".offer-carousel.interested .slider",
      items: 1.35,
      slideBy: "page",
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: false,
      mouseDrag: true,
      responsive: {
        577: { items: 2.4, mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true },
      },
    });
  }
  
  if ($(".videoCtaBtn").length > 0) {
    $(document).on("click", ".videoCtaBtn", function (e) {
      e.preventDefault();
      e.stopPropagation();
  
      var href = $(this).attr("data-href");
      var target = $(this).attr("data-target");
  
      if (target == "_blank") {
        window.open(href, target);
      } else {
        window.location = href;
      }
  
      return false;
    });
  }
  // --------------------------------------------------
  // function definitions
  // --------------------------------------------------
  
  // --------------------------------------------------
  // function definitions
  // --------------------------------------------------
  
  // --------------------------------------------------
  // event handlers
  // --------------------------------------------------
  
  // $("section.buy-offline").on("shown.bs.tab", ".nav-link", function (e) {
  //   console.log();
  //   if (
  //     $("#offline_stores_section").find(".tab-pane:visible .store").length <= 4
  //   ) {
  //     $("#offline_stores_section").find(".btn").hide();
  //   } else {
  //     $("#offline_stores_section").find(".btn").show();
  //   }
  // });
  
  // --------------------------------------------------
  // event handlers
  // --------------------------------------------------
  
  // --------------------------------------------------
  // document ready
  // --------------------------------------------------
  
  // --------------------------------------------------
  // document ready
  // --------------------------------------------------
  
  // $(window).on("load", function () {
  //   $("#home_page_event_popup").modal("show");
  // });
  
  
  $(document).ready(function() {
    $(".fancybox").fancybox({
      afterShow: function() {
        // After the show-slide-animation has ended - play the vide in the current slide
        this.content.find('video').trigger('play')
        
        // Attach the ended callback to trigger the fancybox.next() once the video has ended.
        this.content.find('video').on('ended', function() {
          $.fancybox.next();
        });
      }
    });
  });
  (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "09/16/",
        birthday = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end
    //const countDown = new Date(2022, 8, 15, 8, 00, 0);
    var countDownDate = new Date("Aug 31, 2023 8:00:00").getTime();
    
        x = setInterval(function() {    
  
          const now = new Date().getTime(),
                distance = countDownDate - now;
  
                // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
          var datetext = (distance / (day)).toString().split('.')[1];
          var first2Str = String(datetext).slice(0, 2);
          // if(first2Str >= 24){
          //     document.getElementById("days").innerText = days
          // }else{
              
              document.getElementById("days").innerText = days; 
         // }
          //document.getElementById("days").innerText = Math.floor(distance / (day));
            document.getElementById("hours").innerText = hours;
            document.getElementById("minutes").innerText = minutes;
  //          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
          //do something later when date is reached
          // if (distance < 0) {
          //   //document.getElementById("headline").innerText = "It's my birthday!";
          //   document.getElementById("countdown").style.display = "none";
          //   document.getElementsByClassName("count-down-22").style.display = "none";
          //   clearInterval(x);
          // }
          //seconds
        }, 0)
    }());



/*-------new home page code----*/
var listArray = ["01","02","03", "04"];
var mySwiper = new Swiper('.SwiperMain', {
  // Optional parameters
        loop: true,
        autoplayDisableOnInteraction: false,
        slidesPerView: 1,        
        autoHeight: true,
        autoplay: {
            delay: 10000,//animation
            
        }, 
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: 'true',
            type: 'bullets',
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + '<em>'+ listArray[index]+'</em>' + '<i></i>' + '<b></b>'  + '</span>';
              },
        
        },
   navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
});


/*

$(".swiper-button-pause").click(function(){
  mySwiper.autoplay.stop(); 
});

$(".swiper-button-play").click(function(){
  mySwiper.autoplay.play();
});
*/


$(".stop-btn").click(function(){
  $(".play-btn").show();
  $(this).hide();
});

$(".play-btn").click(function(){
  $(".stop-btn").show();
  $(this).hide();
});


/*-------*/
var swiper = new Swiper(".HighlightSlider", {
  slidesPerView: 3,
  loop: true,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    "@0.75": {
      slidesPerView: 1.9,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween:30,
      
    },
    "@1.50": {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

var swiper = new Swiper(".SmartBuyer", {
  slidesPerView: 3,
  loop: true,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    "@0.75": {
      slidesPerView: 1.9,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween:30,
      
    },
    "@1.50": {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});





var productCategory = new Swiper(".productCategory", {
  slidesPerView: 2,
  spaceBetween: 40,
  freeMode: true,
  loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },

  breakpoints: {
    "@0.00": {
      slidesPerView: 1.3,
      spaceBetween: 30,

    },
    "@0.75": {
      spaceBetween: 30,
    },
    "@1.00": {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 2,
      spaceBetween: 50,
    },
  },
 
});


var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
/*-------*/


$(".flip").click(function () {
  //$(".panel").slideToggle("slow");
  $(this).next(".panel").slideToggle("slow");
  $(this).parent().parent().siblings().find(".panel").hide();
});

$(".more_btn").click(function () {
  $(this).toggleClass("plus-close");
});

$(".more_btn, .more-text").click(function () {
  $(".more-text").toggleClass("more_btn-hide");
});


/*----loader start----*/

$(".shopNow").on("click touchend", function () {
  //$("#shop-loading").show();
  $("#shop-loading").show().delay(5000).fadeOut();
});

function load() {
  setTimeout(function () {
    window.open("https://www.indiaistore.com/", "_blank");
  }, 5000);
}

$(".shopNow").click(load);
/*----loader----*/






