var tickerSlider = tns({
    container: '.ticker .slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    autoplayButtonOutput: false,
    nav: false,
    controls: false,
    mouseDrag: true
});


var colorListSlider = tns({
    container: '.price-calculator.product .color-list',
    items: 4,
    slideBy: 'page',
    autoplay: false,
    gutter: 40,
    nav: false,
    controls: false,
    mouseDrag: true,
    autoWidth: true,
    responsive: {
        577: { gutter: 60 },
        1024: { gutter: 80 }
    }
});

// product thumbnails
var productShotsSlider = tns({
    container: '.media-panel .slider',
    items: 5.5,
    slideBy: 'page',
    autoplay: false,
    gutter: 15,
    nav: false,
    controls: true,
    mouseDrag: true,
    responsive: {
        577: { gutter: 20 },
        1024: { items: 5.7, gutter: 30 }
    }
});

// select product shot
$(document).on('click', '.product-info .product-shot', function (e) {
    e.stopPropagation();
    $('.product-info .product-shot.active').removeClass('active');
    $(this).addClass('active');
    var largeImg = $(this).find('img').data('large');
    $('.product-info .main-img img').attr('src', largeImg);
})




function getProductSelectedStorage() {
    var _storage = [];
    $('.product-info .price-calculator  .selection.rect .attribute.selected').each(function () {
        _storage.push($(this).data('value'));
    })
    return _storage;
}
function getProductSelectedColors() {
    var _colors = [];
    $('.product-info .price-calculator  .selection.color .color-item.selected').each(function () {
        _colors.push($(this).data('value'));
    })
    return _colors;
}
$(document).on('click', '.product-info .price-calculator .selection.rect .attribute', function (e) {
    e.stopPropagation();
    
    $('.selection.rect .attribute.selected').not(this).removeClass('selected');
    $(this).toggleClass('selected');
    var selectedStorage = getProductSelectedStorage();
    console.log(selectedStorage);
})
$(document).on('click', '.product-info .price-calculator .selection.color .color-item', function (e) {
    e.stopPropagation();
    $('.selection.color .color-item.selected').not(this).removeClass('selected');
    $(this).toggleClass('selected');
    var selectedModels = getProductSelectedColors();
    console.log(selectedModels);
})





var youMightLikeSlider = tns({
    container: '.offer-carousel.you-might-like .slider',
    items: 1.35,
    slideBy: 'page',
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


var customersBoughtSlider = tns({
    container: '.offer-carousel.customers-also-bought .slider',
    items: 1.35,
    slideBy: 'page',
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


$(document).on('click', '.toc .term > span', function (e) {
    e.preventDefault();
    e.stopPropagation();
    //$(this).parent().toggleClass('active');
})

$(document).on('click', '.toc .read-more', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('.toc .terms').toggleClass('more');
    $(this).toggleClass('more');
});




// youtube video
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
var videoTarget;
var videoPlaying = false;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('yt-player', {
        height: '390',
        width: '640',
        playerVars: {
            'controls': 0,
            fs: 0
        },
        videoId: 'Jsyeuxeo8l4',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}
function onPlayerReady(event) {
    videoTarget = event.target;
}
var done = false;
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        //done = true;
    }
}
function stopVideo() {
    player.stopVideo();
}

$(document).on('click', 'section.video-banner .play-panel', function (e) {
    $('section.video-banner').toggleClass('active');
    $('section.video-banner .play-panel').toggleClass('active');
    toggleVideo();
    //videoTarget.playVideo();
})
// $(document).on('click', 'section.video-banner.active .play-panel', function (e) {
//     toggleVideo();
// })

function toggleVideo () {
    videoPlaying = !videoPlaying;

    if(videoPlaying) {
        player.playVideo();
    } else {
        player.pauseVideo();

    }
}