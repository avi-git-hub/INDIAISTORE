'use strict';

var categoryListingSlider = tns({
    container: '.category-listing-carousel .slider',
    items: 3.6,
    slideBy: 'page',
    autoplay: false,
    gutter: 10,
    nav: false,
    controls: false,
    loop: false,
    responsive: {
        768: { items: 6.5, mouseDrag: true }
    }
});

var categoryProductsSlider = tns({
    container: '.products-info-carousel .slider',
    items: 1.08,
    slideBy: 'page',
    autoplay: false,
    gutter: 2,
    edgePadding: -2,
    nav: false,
    controls: false,
    loop: false,
    responsive: {
        768: { items: 2.5, mouseDrag: true }
    }
});

// select product
$(document).on('click', '.category-listing-carousel .product', function (e) {
    e.stopPropagation();
    $('.category-listing-carousel .product').removeClass('active');
    $(this).addClass('active');
    var index = $(this).closest('.slider-item').index();
    categoryListingSlider.goTo(index);
    categoryProductsSlider.goTo(index);
});

// select product shot
$(document).on('click', '.products-info-carousel .product-shot', function (e) {
    e.stopPropagation();
    $('.products-info-carousel .product-shot.active').removeClass('active');
    $(this).addClass('active');
    var largeImg = $(this).find('img').data('large');
    $(this).closest('.product-media').find('.main-img img').attr('src', largeImg);
});

//https://refreshless.com/nouislider/
var budgetRangeSlider = document.getElementById('budgetRangeSlider');
noUiSlider.create(budgetRangeSlider, {
    start: [10, 80],
    connect: true,
    range: {
        'min': 10,
        'max': 200
    },
    tooltips: [wNumb({ decimals: 0, prefix: '₹', suffix: 'k' }), // format min number
    wNumb({ decimals: 0, prefix: '₹', suffix: 'k' }) // format max number
    ],
    pips: {
        mode: 'steps',
        stepped: true,
        density: 100,
        format: wNumb({
            decimals: 0,
            prefix: '₹',
            suffix: 'k'
        })
    }
});

function getRange() {
    return budgetRangeSlider.noUiSlider.get();
}

function getUses() {
    var _uses = [];
    $('.phone-use-carousel .use.selected').each(function () {
        _uses.push($(this).data('use'));
    });
    return _uses;
}
var phoneUseSlider = tns({
    container: '.phone-use-carousel .slider',
    items: 4.5,
    slideBy: 'page',
    autoplay: false,
    gutter: 0,
    nav: false,
    controls: false,
    loop: false,
    responsive: {
        768: { items: 6, mouseDrag: true }
    }
});
$(document).on('click', '.phone-use-carousel .use', function (e) {
    e.stopPropagation();
    //  $('.phone-use-carousel .use.selected').not(this).removeClass('selected');
    $(this).toggleClass('selected');

    var phoneUses = getUses();
    var range = getRange();
    console.log("range", range);
    console.log("uses", phoneUses);
});

var trendingSlider = tns({
    container: '.trending .slider',
    items: 3,
    slideBy: 'page',
    autoplay: false,
    gutter: 0,
    nav: false,
    controls: false,
    responsive: {
        768: { items: 3.5, mouseDrag: true }
    }
});

var accesorySlider = tns({
    container: '.offer-carousel.featured-accesories .slider',
    items: 1.35,
    slideBy: 'page',
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: false,
    responsive: {
        577: { items: 2.4, mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true, gutter: 30 }
    }
});

function closeFilters() {
    $('body').removeClass('filters-open');
}

function openFilters() {
    closeSort();
    $('body').addClass('filters-open');
}

$(document).on('click', '.btn-filter', function () {
    openFilters();
});
$(document).on('click', 'body.filters-open .btn-filter', function () {
    closeFilters();
});

$(document).on('click', '.filters .apply', function () {
    // apply filter logic

    // close filter window
    closeFilters();
});

$(document).on('click', '.close-filters', function () {
    closeFilters();
});
$(document).on('click', '.filter-close-overlay', function () {
    closeFilters();
});

function closeSort() {
    $('body').removeClass('sort-open');
}

function openSort() {
    closeFilters();
    $('body').addClass('sort-open');
}

$(document).on('click', 'body:not(.sort-open) .btn-sort', function () {
    openSort();
});

$(document).on('click', 'body.sort-open .btn-sort', function () {
    closeSort();
});

$(document).on('click', '.sort-options a', function (e) {
    e.stopPropagation();
    $('.sort-options a').removeClass('active');
    $(this).addClass('active');
    var sortBy = $(this).data('value');

    // apply sort logic
    console.log('sort by', sortBy);

    // close filter window
    setTimeout(function () {
        closeSort();
    }, 500);
});

$(document).on('click', '.sort-close-overlay', function () {
    closeSort();
});
$(document).on('click', '.sort-options .ii-icon-arrow-left', function () {
    closeSort();
});