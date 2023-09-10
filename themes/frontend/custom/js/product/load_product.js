var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";

var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
var videoTarget;
var videoPlaying = false;
var done = false;

// --------------------------------------------------
// function definitions
// --------------------------------------------------
function onYouTubeIframeAPIReady() {
  player = new YT.Player("yt-player", {
    height: "390",
    width: "640",
    playerVars: {
      controls: 0,
      fs: 0,
    },
    videoId: $("#yt-player").data("video-id"),
    events: {
      onReady: onPlayerReady,
      onStateChange: onPlayerStateChange,
    },
  });
}

function onPlayerReady(event) {
  videoTarget = event.target;
}

function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    //done = true;
  }
}

function stopVideo() {
  player.stopVideo();
}

function toggleVideo() {
  videoPlaying = !videoPlaying;

  if (videoPlaying) {
    player.playVideo();
  } else {
    player.pauseVideo();
  }
}

/* function getProductSelectedStorage() {
  var _storage = [];

  $(".product-info .price-calculator  .selection.rect .attribute.selected").each(function () {
    _storage.push($(this).data("value"));
  });

  return _storage;
}

function getProductSelectedColors() {
  var _colors = [];

  $(".product-info .price-calculator .selection.color .color-item.selected").each(function () {
    _colors.push($(this).data("value"));
  });

  return _colors;
} */

function get_product_pricing() {
  var $price_calculator = $(".price-calculator");

  var selected_product = $price_calculator.data("product-slug");
  var selected_color = $price_calculator.find(".color-item").filter(".selected").data("value");

  if (selected_product != "" && selected_color != "") {
    var prod_variant_slug = selected_product + " " + selected_color;

    if ($price_calculator.find(".selection.rect").length > 0) {
      var selected_attribute = $price_calculator.find(".selection.rect").find(".attribute").filter(".selected").data("value");

      prod_variant_slug += " " + selected_attribute;
    }

    if ($price_calculator.find(".selection.processor").length > 0) {
      var selected_processor = $price_calculator.find(".selection.processor").find(".attribute").filter(".selected").data("value");

      prod_variant_slug += " " + selected_processor;
    }

    prod_variant_slug = convert_to_slug(prod_variant_slug);
    console.log("slug"+prod_variant_slug);
    if(prod_variant_slug == 'apple-tv-4k-2022-black-128gb'){
      $("#productdataapple").html("Wifi + Ethernet");
  } else if(prod_variant_slug == 'apple-tv-4k-2022-black-64gb'){
      $("#productdataapple").html("Wifi");
  }


    var base_url = $("base").attr("href");

    var ajax_call = $.ajax({
      cache: false,
      data: {
        product_variant_slug: prod_variant_slug,
      },
      dataType: "json",
      type: "POST",
      url: base_url + "components/get-product-pricing-for-epc",
    });

    ajax_call.done(function (response, status) {
      if (response.status == true) {
        $("#prod_mrp").html(response.data.mrp).closest("tr").removeClass("d-none");
        $("#prod_mrp").css("color", "black");

        if (response.data.store_discount != "0") {
          $("#prod_store_discount").html(response.data.store_discount).closest("tr").removeClass("d-none");
          $("#prod_store_discount").css("color", "black");
          $("#prod_mrp").css("color", "#bfbfbf");
        } else {
          $("#prod_store_discount").closest("tr").addClass("d-none");
        }

        if (response.data.effective_price != "0") {
          $("#prod_effective_price").html(response.data.effective_price).closest("tr").removeClass("d-none");
          $("#prod_effective_price").css("color", "black");
          $("#prod_mrp,#prod_store_discount").css("color", "#bfbfbf");
        } else {
          $("#prod_effective_price").closest("tr").addClass("d-none");
        }

        if (response.data.exchange_effective_price != "0") {
          $("#prod_exchange_effective_price").html(response.data.exchange_effective_price).closest("tr").removeClass("d-none");
          $("#prod_exchange_effective_price").css("color", "black");
          $("#prod_mrp,#prod_effective_price,#prod_store_discount").css("color", "#bfbfbf");
        } else {
          $("#prod_exchange_effective_price").closest("tr").addClass("d-none");
        }
      } else {
        $("#prod_mrp").html("--").closest("tr").removeClass("d-none");
        $("#prod_effective_price").html("--").closest("tr").addClass("d-none");
        $("#prod_exchange_effective_price").html("--").closest("tr").addClass("d-none");
      }
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error, });
    });
  }
}

function get_product_pdp_images() {
  var selected_color = $(".product-info .price-calculator .color-item.selected").data("value");

  var base_url = $("base").attr("href");
  var s3_url = $("base").attr("data-s3-url");

  var product_slug = $(".price-calculator").data("product-slug");
  var pdp_set_slug = product_slug + "-" + selected_color;

  var ajax_call = $.ajax({
    cache: false,
    data: {
      pdp_set_slug: pdp_set_slug,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "product/get-pdp-images",
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var pdp_images = response.info.pdp_images;
      var i = 0;
      var pdp_images_count = pdp_images.length;
      var base_url = $("base").attr("href");
      var slider_item;
      var product_shot;
      var img = "";
      var $shot_carousel = $(".shot-carousel");

      var slider = $("<div>", {
        class: "slider",
      });

      var slider_items = [];

      for (i; i < pdp_images_count; i++) {
        slider_item = $("<div>", {
          class: "slider-item",
        });

        product_shot = $("<div>", {
          class: "product-shot",
        });

        img = $("<img>", {
          src: `${s3_url}files/uploads/products/pdp/${pdp_images[i].pdp_set_slug}/${pdp_images[i].pdp_img}`,
          alt: `pdp_img${i + 1}`,
        });

        product_shot.append(img);
        slider_item.append(product_shot);

        slider_items.push(slider_item);
      }

      if ($shot_carousel.data("vid") != "" && $shot_carousel.data("vid-thumb") != "") {
        var slider_item_vid = $("<div>", {
          class: "slider-item slider-item-video",
        });

        var prod_shot_vid = $("<div>", {
          class: "product-shot",
          "data-asset-type": "video",
          "data-video-url": "https://www.youtube.com/watch?v=" + $shot_carousel.data("vid"),
        });

        var img_vid = $("<img>", {
          src: s3_url + "files/uploads/products/" + $shot_carousel.data("prod-slug") + "/" + $shot_carousel.data("vid-thumb"),
          alt: $shot_carousel.data("prod-name") + " PDP Video",
        });

        prod_shot_vid.append(img_vid);
        slider_item_vid.append(prod_shot_vid);

        slider_items.push(slider_item_vid);
      }

      slider.append(slider_items);

      //$slider_item_vid = $slider.find(".slider-item:not(.tns-slide-cloned)").last().detach();

      /* $slider
        .empty()
        .append($slider_item_vid)
        .prepend(slider_items) */

      $(".shot-carousel").empty().append(slider).find(".slider-item:first-child > .product-shot").trigger("click");

      var productShotsSlider = tns({
        container: ".shot-carousel .slider",
        items: 5.5,
        slideBy: "page",
        autoplay: false,
        gutter: 15,
        nav: false,
        controls: true,
        mouseDrag: true,
        responsive: {
          577: { gutter: 20 },
          1024: { items: 5.7, gutter: 30 },
        },
      });
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
}
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// select product shot
$(".shot-carousel").on("click", ".product-shot", function (e) {
  e.stopPropagation();

  if ($(this).data("asset-type") == "video") {
    $(".product-info .media-panel .main-img").find("a").attr("href", $(this).data("video-url")).attr("data-lity", "");
  } else {
    $(".product-info .media-panel .main-img").find("a").attr("href", "javascript:void(0)").removeAttr("data-lity");
  }

  $(".product-info .product-shot.active").removeClass("active");

  $(this).addClass("active");

  //var largeImg = $(this).find("img").data("large");
  var largeImg = $(this).find("img").attr("src");

  $(".product-info .main-img img").attr("src", largeImg);
});

$(document).on("click", ".product-info .price-calculator .selection.color .color-item", function (e) {
  e.stopPropagation();

  $(".selection.color .color-item.selected").not(this).removeClass("selected");

  $(this).addClass("selected");

  get_product_pricing();

  get_product_pdp_images();
});

$(document).on("click", ".product-info .price-calculator .selection.rect .attribute", function (e) {
  e.stopPropagation();

  $(".selection.rect .attribute.selected").not(this).removeClass("selected");

  $(this).addClass("selected");

  get_product_pricing();
});

$(document).on("click", ".product-info .price-calculator .selection.processor .attribute", function (e) {
  e.stopPropagation();

  $(".selection.processor .attribute.selected").not(this).removeClass("selected");

  $(this).addClass("selected");

  if ($(this).data("value") == "m1-max" || $(this).data("value") == "i7") {
    $(".price-calculator .selection.rect .attribute:eq(0)").removeClass("selected").hide();
    $(".price-calculator .selection.rect .attribute:eq(1)").addClass("selected");
  } else {
    $(".price-calculator .selection.rect .attribute:eq(0)").show();
    // $(".price-calculator .selection.rect .attribute:eq(1)").removeClass("selected");
  }

  get_product_pricing();
});

$(document).on("click", ".toc .term > span", function (e) {
  e.preventDefault();

  e.stopPropagation();

  //$(this).parent().toggleClass("active");
});

$(document).on("click", ".toc .read-more", function (e) {
  e.preventDefault();

  e.stopPropagation();

  $(".toc .terms").toggleClass("more");

  $(this).toggleClass("more");
});

$(document).on("click", "section.video-banner .play-panel", function (e) {
  $("section.video-banner").toggleClass("active");
  $("section.video-banner .play-panel").toggleClass("active");

  toggleVideo();
  //videoTarget.playVideo();
});

$("#field_switch_from").on("change", function (e) {
  var switch_from_device = $(this).val();

  $("#field_switch_to").prop("selectedIndex", 0);
  $("#field_switch_to").html($("#field_switch_to > option:eq(0)"));
  $("#field_switch_amount").val("");

  if (switch_from_device) {
    var base_url = $("base").attr("href");

    var ajax_call = $.ajax({
      cache: false,
      data: {
        switch_from_device,
      },
      dataType: "json",
      type: "POST",
      url: base_url + "site/components/get_switcher_calculator_switch_to",
    });

    ajax_call.done(function (response, status) {
      if (response.success == true) {
        var switch_cal = response.data;
        if (switch_cal.length) {
          switch_cal.forEach((val, i) => {
            $("#field_switch_to").append(`<option value="${val.switch_to}">${val.switch_to}</option>`);
          });
        }
      }
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error, });
    });
  }
});

$("#field_switch_to").on("change", function (e) {
  var switch_to_device = $(this).val();

  $("#field_switch_amount").val("");

  if (switch_to_device) {
    var base_url = $("base").attr("href");

    var ajax_call = $.ajax({
      cache: false,
      data: {
        switch_from_device: $("#field_switch_from").val(),
        switch_to_device,
      },
      dataType: "json",
      type: "POST",
      url: base_url + "site/components/get_switcher_calculator_switch_amount",
    });

    ajax_call.done(function (response, status) {
      if (response.success == true) {
        var switch_cal = response.data;
        if (switch_cal.amount) {
          $("#field_switch_amount").val(switch_cal.amount);
        }
      }
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error, });
    });
  }
});
/* $(document).on("click", "section.video-banner.active .play-panel", function (e) {
  toggleVideo();
}) */
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  if ($(".ticker").length > 0) {
    var tickerSlider = tns({
      container: ".ticker .slider",
      items: 1,
      slideBy: "page",
      autoplay: true,
      autoplayButtonOutput: false,
      nav: false,
      controls: false,
      mouseDrag: true,
    });
  }

  var colorListSlider = tns({
    container: ".price-calculator.product .color-list",
    items: 4.9,
    slideBy: "page",
    autoplay: false,
    gutter: 20,
    nav: false,
    controls: false,
    mouseDrag: true,
    autoWidth: false,
    loop: true,
    responsive: {
      577: { gutter: 60 },
      1024: { gutter: 80 },
    },
  });

  if ($(".offer-carousel.you-might-like").length > 0) {
    var youMightLikeSlider = tns({
      container: ".offer-carousel.you-might-like .slider",
      items: 1.35,
      slideBy: "page",
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: false,
      mouseDrag: true,
      responsive: {
        577: { items: 2.4, mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true },
      },
    });
  }

  if ($(".offer-carousel.customers-also-bought").length > 0) {
    var customersBoughtSlider = tns({
      container: ".offer-carousel.customers-also-bought .slider",
      items: 1.35,
      slideBy: "page",
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: false,
      mouseDrag: true,
      responsive: {
        577: { items: 2.4, mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true },
      },
    });
  }

  get_product_pricing();

  get_product_pdp_images();
});

// --------------------------------------------------
// document ready
// --------------------------------------------------

$(function () {
  $(".prod-share-btn").popover({
    container: "body",
    html: true,
    content: function () {
      var content = $(this).attr("data-popover-content");
      return $(content).children(".popover-body").html();
    },
  });

  $(document).on("click", ".copy-link-share-icon", function (e) {
    e.preventDefault();
    let elementText = $(this).attr("href");
    navigator.clipboard.writeText(elementText);
    $(this).find("p").text("Copied!");
    $(this).tooltip("show");
  });

  $(document).on("click", "body", function (e) {
    $("[data-toggle=popover]").each(function () {
      if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $(".popover").has(e.target).length === 0) {
        $(this).popover("hide");
      }
    });
  });

  $(document).on("click", "section.product-details .bank_loan:eq(0)", function (e) {
    e.preventDefault();
    $("#modal_bank_offers").modal("show");
  });

  $(document).on("click", "section.product-details .bank_loan:eq(1)", function (e) {
    e.preventDefault();
    $("#modal_bank_offers_loans").modal("show");
  });

  $(document).on("click", "section.product-details .buyBack .heading_arrow,section.product-details .buyBack .icici_offer img", function (e) {
    e.preventDefault();
    $("#modal_buy_back_offer").modal("show");
  });
});
