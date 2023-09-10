if($(window).width() <= 1024){
  // do your stuff
  $(".accessories-carousel.trending").each(function () {
    
tns({
  container: $(this).find(".slider").get(0),
  items: 1.5,
  slideBy:1,
  autoplay: false,
  gutter: 10,
  nav: false,
  loop: false,
  controls: false,
  mouseDrag: true,
  responsive: {
    577: { items: 2.4, mouseDrag: true },
    1024: { items: 3.3, mouseDrag: true },
  },
});
});
}

$(".shot-carousel").each(function () {
tns({
  container: $(this).find(".slider-section").get(0),
  items: 6,
  slideBy: 1,
  autoplay: false,
  gutter: 12,
  loop: false,
  nav: false,
  controls: false,
  mouseDrag: true,
  responsive: {
      577: { gutter: 2 },
      1024: { gutter: 49, mouseDrag: true }
  }
});
});

// select product shot
$(document).on('click', '.accessories-carousel .product-shot', function (e) {
  e.stopPropagation();
  $('.accessories-carousel .product-shot.active').removeClass('active');
  $(this).addClass('active');
  var largeImg = $(this).find('div.color-section').data('large');
  $(this).closest(".offer-item").find(".card-details img").attr("src", largeImg);
  // $('.accessories-carousel .card-details img').attr('src', largeImg);
})


function closeFilters () {
  $('body').removeClass('filters-open');
}
function openFilters () {
  $('body').addClass('filters-open');
}

$(document).on('click', '.btn-filter', function() {
  openFilters();
});
$(document).on('click', 'body.filters-open .btn-filter', function() {
  closeFilters();
});

$(document).on('click', '.filters .apply', function() {
  // apply filter logic
  // close filter window
  closeFilters();
});

$(document).on('click', '.filter-close-overlay', function() {
  closeFilters();
});


