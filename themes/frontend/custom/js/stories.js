$(document).ready(function(){
  $('.screenshot_slider').owlCarousel({
    center: true,
    items:3,
    loop:false, 
    margin:40,
    lazyLoad: true,
    autoplay: false,
    dots: true,
    nav: true,
    autoHeight: true,
    navText: ["<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/owl-prev.png'>","<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/owl-next.png'>"],
    responsive:{
      0:{
        items:4,
        margin:40,
        autoHeight: true
    },
    600:{
      items:3,
      margin:40,
      autoHeight: true
  }
    }
  
  
  });
  
  
  
  
  $('.owl-carousel-sliudes-icon').owlCarousel({
    center: false,
    loop: true,
    margin: 20,
    // stagingPadding: 0,
    nav: true,
    arrows:true,
    nav: true,
    navText: ["<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/prev-btn.png'>","<img src='https://stage.indiaistore.com/themes/frontend/custom/images/stories/next-btn.png'>"],
    autoplay: false,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 4,
        margin: 10
      },
      600: {
        items: 5.5
      },
      1000: {
        items: 5.5
      }
    }
  });
  
  $(".stories").click(function(){
    $("#parent-devisible").show();
     });
     $("#close-r-slide").click(function(){
        $("#parent-devisible").hide();
       });
  
       
       const clickableDiv = document.getElementById("clickableDiv");
       const overlay = document.getElementById("overlay");
       const closeButton = document.getElementById("closeButton");
       
       clickableDiv.addEventListener("click", function() {
         overlay.style.display = "block";
       });
       
       closeButton.addEventListener("click", function() {
         overlay.style.display = "none";
       });
  
  
       //-------//
  
       $("#closeButton").click(function(){
        $("#popup").hide();
       });
       
       $("#clickableDiv").click(function(){
        $("#popup").show();
       });
  


     //-------//

     $("#closeButton").click(function(){
      $("#popup").hide();
      $("#overlay").hide();
     });
     
    //  $("#clickableDiv").click(function(){
    //   $("#popup").show();
    //  });

     $(".clickableDiv").click(function(){
      console.log("1212313");
      var dataindex = $(this).parent().data('index');
      console.log(dataindex);
      $('.screenshot_slider').trigger('to.owl.carousel', dataindex)
      $("#overlay").show();
      $(".popupstory").show();
     });

});


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






