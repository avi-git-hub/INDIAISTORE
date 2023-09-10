// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("#buyOfflineTab .nav_tabs").on("shown.bs.tab", function (event) {
  $(".effective-price-calculator:visible").find(".model.selected").trigger("click");
});

// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  if ($(".hero-banner .slider").length > 0) {
    var heroSlider = tns({
      container: ".hero-banner .slider",
      items: 1,
      slideBy: "page",
      autoplay: false,
      gutter: 0,
      nav: true,
      controls: false,
      mouseDrag: true,
    });
  }

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
        577: { items: 2.4, mouseDrag: true },
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
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
