/* var gmap_script = document.createElement('script');

gmap_script.setAttribute("async", "async");
gmap_script.setAttribute("defer", "defer");
gmap_script.setAttribute("src", "https://maps.googleapis.com/maps/api/js?key=" + $("main").data("gmap-key")); //  + "&callback=mapInitialize"

document.body.appendChild(gmap_script); */

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
$(document).ready(function () {


  if ($(".offer-carousel.bank .slider").length > 0) {
    var bankSlider = tns({
      container: ".offer-carousel.bank .slider",
      items: 1.35,
      slideBy: "page",
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: true,
      arrowKeys: true,
      mouseDrag: true,
      responsive: {
        577: {mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true },
      },
    });
  }

  if ($(".offer-carousel.loan .slider").length > 0) {
    var loanSlider = tns({
      container: ".offer-carousel.loan .slider",
      items: 1.35,
      slideBy: "page",
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: true,
      arrowKeys: true,
      mouseDrag: true,
      responsive: {
        577: { mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true },
      },
    });
  }


  if ($(".offer-carousel.tradein .slider").length > 0) {
    var loanSlider = tns({
      container: ".offer-carousel.tradein .slider",
      items: 1.35,
      slideBy: "page",
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: true,
      arrowKeys: true,
      mouseDrag: true,
      responsive: {
        577: { mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true },
      },
    });
  }

  $(".offers-tabs .nav-link:first,.offers-tabs .tab-pane:first").addClass("active");

  $(".shopNow").on("click", function () {
   
       
        
      
  
    //$("#shop-loading").show();
    var website = $(this).attr('data-website');
    $("#websitename").attr("href", website);
    //console.log(website);
    $("#shop-loading").show();
    setTimeout(function () {
      $("#shop-loading").fadeOut();
      if (navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i)) {
        console.log(1)
        var windowReference = window.open();
        windowReference.open(website);
      } else {
        console.log(2)
        window.open(website,"_blank");
      }
      
    }, 3000);
    
  });

 
  
  //$(".shopNow").click(shopLoad);


});
// --------------------------------------------------
// document ready
// --------------------------------------------------

// --------------------------------------------------
// window load
// --------------------------------------------------
$(window).on('load', function () {
  $('#pg_store_locator_new').removeClass('invisible');
  const store_count = $("body").attr("data-is-mobile") == 1 ? 4 : 3;
  console.log(store_count);
  $("#storelocator-apr-section .store").hide();
  $("#storelocator-apr-section .show-less").hide();
  $("#storelocator-apr-section .store:lt(" + store_count + ")").show();

  if ($("#storelocator-apr-section .store").length <= 4) {
    $("#storelocator-apr-section .btn").hide();
  }
});



function shopLoad() {
  setTimeout(function () {
    window.open("https://www.indiaistore.com/", "_blank");
  }, 5000);
}
// --------------------------------------------------
// window load
// --------------------------------------------------

$(document).on("click", "#storelocator-apr-section .btn", function (e) {
  show_results($(this), $("section.online-stores"), $("body").attr("data-is-mobile") == 1 ? 4 : 3);
});

// show more/less section starts
function show_results(btn, section, count) {
  console.log(btn);
  
  var s_count = section.find(".store").length;

  if (btn.hasClass("show-more")) {
    var limit = section.find(".store:visible").length;

    limit = limit + count <= s_count ? limit + count : s_count;

    section.find(".store:lt(" + limit + ")").fadeIn();

    scrollToSection(section.find(".store:visible:eq(-1)"));

    if (limit >= s_count) {
      btn.hide();

      section.find(".show-less").show();
    }
  } else if (btn.hasClass("show-less")) {
    section
      .find(".store")
      .not(":lt(" + count + ")")
      .fadeOut();

    btn.hide();

    section.find(".show-more").show();

    scrollToSection(section);
  }
}

function scrollToSection(section) {
  // var el = section;
  // var elOffset = el.offset().top;
  // var elHeight = el.height();
  // var windowHeight = $(window).height();
  // var offset;

  // if (elHeight < windowHeight) {
  //   offset = elOffset - (windowHeight / 1.5 - elHeight / 1.5);
  // } else {
  //   offset = elOffset - 200;
  // }

  // var speed = 700;

  // $("html, body").animate({ scrollTop: offset }, speed);
}
