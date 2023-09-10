

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
    mouseDrag: true
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
      1024: { gutter: 30 }
    }
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
      1024: { items: 3, mouseDrag: true }
    }
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
      1024: { items: 3.3, mouseDrag: true }
    }
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
  var countDownDate = new Date("Sept 16, 2022 8:00:00").getTime();
  
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
