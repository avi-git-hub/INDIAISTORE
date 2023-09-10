// main slideshow
var heroSlider = tns({
    container: '.hero-banner .slider',
    items: 1,
    slideBy: 'page',
    autoplay: false,
    gutter: 0,
    nav: true,
    controls: false,
    mouseDrag: true
});






var bankSlider = tns({
    container: '.offer-carousel.bank .slider',
    items: 1.35,
    slideBy: 'page',
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: true,
    arrowKeys: true,
    mouseDrag: true,
    responsive: {
        577: { items: 2.4, mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true }
    }
});


var loanSlider = tns({
    container: '.offer-carousel.loan .slider',
    items: 1.35,
    slideBy: 'page',
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: true,
    arrowKeys: true,
    mouseDrag: true,
    responsive: {
        577: { items: 2.4, mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true }
    }
});