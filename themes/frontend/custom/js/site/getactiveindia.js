$(document).ready(function () {
  AOS.init();
  setTimeout(function () {
    $(".gallery").flickity("resize");
  }, 7000);

  //  $(window).scroll(function () {
  //   if ($(this).scrollTop() > 400) {
  //     $("#scroll").fadeIn();
  //   } else {
  //     $("#scroll").fadeOut();
  //   }
  // });

  // $("#scroll").click(function () {
  //   $("html, body").animate({
  //     scrollTop: 0,
  //   }, 600);

  //   return false;
  // });
});
