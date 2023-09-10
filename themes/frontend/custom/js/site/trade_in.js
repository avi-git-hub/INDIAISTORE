
if ($(".tradein_crosel").length > 0) {
  var tradein_crosel = tns({
    container: ".tradein_crosel .slider",
    items: 3.5,
    slideBy: "page",
    autoplay: false,
    gutter: 20,
    edgePadding: -2,
    nav: false,
    controls: false,
    loop: false,
    mouseDrag: true,
    responsive: {
         320: { items: 1.2 },
         420: { items: 1.2 },
          768: { items: 1.5 },
      1024: { items: 3.5 },
    },
  });
}

$(function () {
  $(".box_offer").slice(0, 3).show();
  $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".box_offer:hidden").slice(0, 3).slideDown();
      if ($(".box_offer:hidden").length == 0) {
          $("#load").fadeOut('slow');
      }
      $('html,body').animate({
          scrollTop: $(this).offset().top
      }, 1500);
  });
});
