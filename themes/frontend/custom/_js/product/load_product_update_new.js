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
function titleCase(string) {
  var sentence = string.toLowerCase().split(" ");
  for (var i = 0; i < sentence.length; i++) {
    sentence[i] = sentence[i][0].toUpperCase() + sentence[i].slice(1);
  }
  //document.write(sentence.join(" "));
  return sentence;
}

function get_product_pricing() {
  var $price_calculator = $(".price-calculator");

  var selected_product = $price_calculator.data("product-slug");
  var selected_color = $price_calculator
    .find(".color-item")
    .filter(".selected")
    .data("value");

    var selected_storage = $price_calculator
    .find(".rect")
    .find(".selected")
    .data("value");


    console.log(selected_product, selected_color);
  if (selected_product != "" && selected_color != "") {
    var prod_variant_slug = selected_product + " " + selected_color;

    if ($price_calculator.find(".selection.rect").length > 0) {
      var selected_attribute = $price_calculator
        .find(".selection.rect")
        .find(".attribute")
        .filter(".selected")
        .data("value");

      prod_variant_slug += " " + selected_attribute;
    }

    if ($price_calculator.find(".selection.processor").length > 0) {
      var selected_processor = $price_calculator
        .find(".selection.processor")
        .find(".attribute")
        .filter(".selected")
        .data("value");

      prod_variant_slug += " " + selected_processor;
    }

    prod_variant_slug = convert_to_slug(prod_variant_slug);
    var productnameforprod = $("#productnameforprod").text();
    if(selected_attribute){
      var storageattr = selected_attribute.toUpperCase();
    } else {
      var storageattr = "";
    }


    if(selected_attribute){
      $("#product-name-colour").html(
        productnameforprod +
          " (" +
          storageattr +
          ", " +
          titleCase(selected_color) +
          ")"
      );
    } else {
      $("#product-name-colour").html(productnameforprod);
    }

    if (prod_variant_slug == "apple-tv-4k-2022-black-128gb") {
      $("#productdataapple").html("Wifi + Ethernet");
    } else if (prod_variant_slug == "apple-tv-4k-2022-black-64gb") { 
      $("#productdataapple").html("Wifi");
    }

    if (prod_variant_slug == "studio-display") {
      $(".prodprices").css("display", "none");
    } else {
      $(".prodprices").css("display", "block");
    }
    if(selected_product == 'iphone-12'){
      if(selected_storage == '64gb'){
         $("#effectivepricetext").html('(After ₹3000* Instant Store Discount + ₹2000* Cashback)');
         $("#exchangeeffectivepricetext").html('(After ₹3000* Instant Store Discount + ₹2000* Cashback+ Exchange Bonus up to ₹3000*)<br>(Calculated on exchange value of iPhone 11 64 GB in good condition)'); 
      } else{
        $("#effectivepricetext").html('(After ₹5000* Instant Store Discount + ₹2000* Cashback)');
        $("#exchangeeffectivepricetext").html('(After ₹5000* Instant Store Discount + ₹2000* Cashback + Exchange  Bonus up to ₹3000*)<br>(Calculated on exchange value of iPhone 11 64 GB in good condition)'); 
      }
  }

    if(selected_product == 'iphone-14-pro'){
      if(selected_storage == '128gb'){
         $("#effectivepricetext").html('(After ₹3000* Cashback)');
         $("#exchangeeffectivepricetext").html('(After ₹3000* Cashback + Exchange Bonus up to ₹3000*)<br>(Trade-in value of 26000 is calculated on the exchange value of iPhone 12, 64 GB in good condition*)'); 
      } else{
        $("#effectivepricetext").html('(After ₹3000* Cashback)');
        $("#exchangeeffectivepricetext").html('(After ₹3000* Cashback + Exchange Bonus up to ₹3000*)<br>(Trade-in value of 26000 is calculated on the exchange value of iPhone 12, 64 GB in good condition*)'); 
      }
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
      console.log("Response"+response.data.product_cashback);
      if (response.status == true) {
        console.log(response.data.product_exchange_effective_emi + response.data.product_emi);
        $("#prod_mrp_new")
          .html(response.data.mrp+".00")
          .closest("li")
          .removeClass("d-none");
        $("#new-id-mrp").html("MRP - " + response.data.mrp+".00");
        $("#prod_mrp_new_mrp").html(response.data.mrp+".00");
        $("#prod_mrp_new").css("color", "black");
        $("#prod_mrp_new_mrp").css("color", "black");

        if (response.data.store_discount != "0") {
          $("#prod_store_discount")
            .html(response.data.store_discount)
            .closest("li")
            .removeClass("d-none");
            $("#prod_store_discount_tab2")
            .html(response.data.store_discount)
            .closest("li")
            .removeClass("d-none");
          $("#prod_store_discount").css("color", "black");
          $("#prod_store_discount_tab2").css("color", "black");
          //$("#prod_mrp").css("color", "#bfbfbf");
        } else {
          $("#prod_store_discount").closest("li").addClass("d-none");
          $("#prod_store_discount_tab2").closest("li").addClass("d-none");
        }

        if (response.data.product_exchange_price != "0") {
          $("#prod_exchange_price")
            .html(response.data.product_exchange_price)
            .closest("li")
            .removeClass("d-none");

            $("#prod_exchange_price_tab2")
            .html(response.data.product_exchange_price)
            .closest("li")
            .removeClass("d-none");
          $("#prod_exchange_price").css("color", "black");
          $("#prod_exchange_price_tab2").css("color", "black");
          //$("#prod_mrp").css("color", "#bfbfbf");
        } else {
          $("#prod_exchange_price").closest("li").addClass("d-none");
          $("#prod_exchange_price_tab2").closest("li").addClass("d-none");
        }

        if (response.data.product_exchange_bonus != "0") {
          $("#prod_exchange_bonus")
            .html("Up to "+response.data.product_exchange_bonus)
            .closest("li")
            .removeClass("d-none");
            $("#prod_exchange_bonus_tab2")
            .html("Up to "+response.data.product_exchange_bonus)
            .closest("li")
            .removeClass("d-none");
          $("#prod_exchange_bonus").css("color", "black");
          $("#prod_exchange_bonus_tab2").css("color", "black");
          //$("#prod_mrp").css("color", "#bfbfbf");
        } else {
          $("#prod_exchange_bonus").closest("li").addClass("d-none");
          $("#prod_exchange_bonus_tab2").closest("li").addClass("d-none");
        }

        if (response.data.product_net_effective_price != "0") {
          $("#prod_net_price")
            .html(response.data.product_net_effective_price)
            .closest("li")
            .removeClass("d-none");
            $("#net_price_eff_emi").html(`(${response.data.product_net_effective_price}*/24 months No Cost EMI)<br>${response.data.product_exchange_effective_emi_text}`);
          $("#prod_net_price").css("color", "black");
          //$("#prod_mrp").css("color", "#bfbfbf");
        } else {
          $("#prod_net_price").closest("li").addClass("d-none");
          $("#net_price_eff_emi").html(`(${response.data.mrp}*/24 months No Cost EMI)<br>${response.data.product_exchange_effective_emi_text}`);
        }


        if (response.data.effective_price != "0") {
     
          $("#prod_net_price_tab2")
            .html(response.data.effective_price)
            .closest("li")
            .removeClass("d-none");
          $("#prod_net_price_tab2").css("color", "black");
          //$("#prod_mrp,#prod_store_discount").css("color", "#bfbfbf");
          $("#cal-new-price-id").html(response.data.exchange_effective_price);
        } else {
          $("#prod_net_price_tab2").closest("li").addClass("d-none");
          $("#cal-new-price-id").html(response.data.exchange_effective_price);
        }
        

        if (response.data.product_emi != "&#8377; 0.00") {
     
          $("#prod_exchange_effective_price_emi")
            .html(response.data.product_emi)
            .closest("li")
            .removeClass("d-none");
          $("#prod_exchange_effective_price_emi").css("color", "black");
          //$("#prod_mrp,#prod_store_discount").css("color", "#bfbfbf");
        } else {
          $("#prod_exchange_effective_price_emi").closest("li").addClass("d-none");
        }

        if (response.data.product_exchange_effective_emi != "0.00") {
          $("#prod_exchange_effective_price_emi_new")
            .html(response.data.product_exchange_effective_emi)
            .closest("li")
            .removeClass("d-none");
          $("#prod_exchange_effective_price_emi_new").css("color", "black");
          
        } else {
          $("#prod_exchange_effective_price_emi_new").closest("li").addClass("d-none");
        }

        if (response.data.exchange_effective_price != "0") {
          //$("#cal-new-price-id").html(response.data.exchange_effective_price);
          $("#prod_exchange_effective_price")
            .html(response.data.exchange_effective_price)
            .closest("li")
            .removeClass("d-none");
          $("#prod_exchange_effective_price").css("color", "black");
          $("#exchangeeffectivepricetextemi").html(response.data.product_exchange_effective_emi_text);
          
        } else {
          $("#prod_exchange_effective_price").closest("li").addClass("d-none");
         // $("#cal-new-price-id").html(response.data.effective_price);
          $("#new-id-mrp").css("text-decoration","line-through");
          $("#new-id-mrp").css("color","#000000");
          $("#exchangeeffectivepricetextnew").html("(Effective Price)"); 
        }

        if(response.data.effective_price == "0" && response.data.exchange_effective_price == "0"){
          $("#priceboxdetails").css("display","none");
        }
        if (response.data.product_emi == "&#8377; 0.00" && response.data.exchange_effective_price == "0") {
          $("#price-section").css("display","none");
          $("#new-id-mrp").css("text-decoration","none");
        }
        if (response.data.product_emi != "&#8377; 0.00") {
          console.log("2423424");
          $("#cal-new-price-mo-id").html(response.data.product_exchange_effective_emi + "/p.m");
          $("#price-section").show();
        } else {
          //$("#cal-new-price-mo").addClass("d-none");
          console.log("978978978");
          $("#cal-new-or").css("display","none");
          $("#cal-new-price-mo").css("display","none");
        }

        if(selected_product == 'airpods-3rd-generation'){
          console.log("selectedproduct"+selected_product);
          if(response.data.exchange_effective_price == 0){
            $("#cal-new-price-id").html(response.data.effective_price);
          }

          if (response.data.product_exchange_effective_emi != "&#8377; 0.00") {
            console.log("2423424");
            $("#cal-new-price-mo-id").html(response.data.product_exchange_effective_emi + "/p.m");
            $("#price-section").show();
            $("#cal-new-or").show();
            $("#cal-new-price-mo").show();
          } else {
            //$("#cal-new-price-mo").addClass("d-none");
            console.log("978978978");
            $("#cal-new-or").css("display","none");
            $("#cal-new-price-mo").css("display","none");
          }
        }


        
        if(response.data.product_benefit_amount != '&#8377; 0'){
        $("#benefitamount").html(response.data.product_benefit_amount);
        } else {
          $("#getbenefitupto").css("display","none");
        }

        if (response.data.product_benefit_details != "") {
          $("#benefirmodaldata").html(response.data.product_benefit_details);
        }

        if (response.data.product_emi_options != "") {
          $("#emioptiondetailsdata").html(response.data.product_emi_options);
        }
      } else {
        $("#prod_mrp").html("--").closest("li").removeClass("d-none");
        $("#prod_effective_price").html("--").closest("li").addClass("d-none");
        $("#prod_exchange_effective_price")
          .html("--")
          .closest("tr")
          .addClass("d-none");
      }



      if (response.data.product_cashback != "0") {
     
        $("#prod_cashback")
          .html(response.data.product_cashback)
          .closest("li")
          .removeClass("d-none");
        $("#prod_cashback").css("color", "black");
        //$("#prod_mrp,#prod_store_discount").css("color", "#bfbfbf");
      } else {
        $("#prod_cashback").closest("li").addClass("d-none");
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
  var selected_color = $(
    ".product-info .price-calculator .color-item.selected"
  ).data("value");

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

      if (
        $shot_carousel.data("vid") != "" &&
        $shot_carousel.data("vid-thumb") != ""
      ) {
        var slider_item_vid = $("<div>", {
          class: "slider-item slider-item-video",
        });

        var prod_shot_vid = $("<div>", {
          class: "product-shot",
          "data-asset-type": "video",
          "data-video-url":
            "https://www.youtube.com/watch?v=" + $shot_carousel.data("vid"),
        });

        var img_vid = $("<img>", {
          src:
            s3_url +
            "files/uploads/products/" +
            $shot_carousel.data("prod-slug") +
            "/" +
            $shot_carousel.data("vid-thumb"),
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

      $(".shot-carousel")
        .empty()
        .append(slider)
        .find(".slider-item:first-child > .product-shot")
        .trigger("click");

      var slider_view = "vertical";
      if(screen.width < 767)
      {
          slider_view = "horizontal";
      }  
      else
      {
        slider_view = "vertical";
      }
      var productShotsSlider = tns({
        container: ".shot-carousel .slider",
        navContainer: "#tns3",
        navAsThumbnails: true,
        items: 3,
        slideBy: 1,
        autoplay: false,
        gutter: 15,
        swipeAngle: false,
        nav: false,
        arrowKeys: true,
        axis: slider_view,
        controls: true,
        mouseDrag: false,
        responsive: {
          0: { items: 4, gutter: 20 },
          767: { items: 4, gutter: 10 },
          1024: { items: 4, gutter: 30 },
        },
      });

      /*$(".shot-carousel").on("click", "button", function (e) {
        // get slider info
        var info = productShotsSlider.getInfo(),
          indexPrev = info.indexCached,
          indexCurrent = info.index;

        // update style based on index
        info.slideItems[indexPrev + 1].classList.remove("active");
        info.slideItems[indexCurrent + 1].classList.add("active");

        $(".product-info .product-shot.active").removeClass("active");
        $(".product-info .tns-item.active")
          .find(".product-shot")
          .addClass("active");

        var largeImg = $(".product-info .tns-item.active")
          .find(".product-shot img")
          .attr("src");

        $(".product-info .main-img img").attr("src", largeImg);
      });*/

      $(".prevButton").click(function () {
        $("button").trigger("click");
      });

      $(".sliderButton").click(function () {
        var info = productShotsSlider.getInfo(),
          indexPrev = info.indexCached,
          indexCurrent = info.index;
        console.log(indexPrev, indexCurrent);
        if ($(this).hasClass("nextButton")) {
          info.slideItems[indexPrev].classList.remove("active");
          info.slideItems[indexCurrent + 1].classList.add("active");
        } else {
          info.slideItems[indexCurrent].classList.remove("active");
          info.slideItems[indexPrev].classList.add("active");
        }
        // update style based on index

        $(".product-info .product-shot.active").removeClass("active");
        $(".product-info .tns-item.active")
          .find(".product-shot")
          .addClass("active");

        var largeImg = $(".product-info .tns-item.active")
          .find(".product-shot img")
          .attr("src");

        $(".product-info .main-img img").attr("src", largeImg);
        $(".product-info .main-img img").attr("xoriginal", largeImg);
        if ($(this).hasClass("nextButton")) {
          productShotsSlider.goTo("next");
        } else {
          productShotsSlider.goTo("prev");
        }
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
    $(".product-info .media-panel .main-img")
      .find("a")
      .attr("href", $(this).data("video-url"))
      .attr("data-lity", "");
  } else {
    $(".product-info .media-panel .main-img")
      .find("a")
      .attr("href", "javascript:void(0)")
      .removeAttr("data-lity");
  }

  $(".product-info .product-shot.active").removeClass("active");

  $(this).addClass("active");

  //var largeImg = $(this).find("img").data("large");
  var largeImg = $(this).find("img").attr("src");

  $(".product-info .main-img img").attr("src", largeImg);
  $(".product-info .main-img img").attr("xoriginal", largeImg);
});

$(document).on(
  "click",
  ".product-info .price-calculator .selection.color .color-item",
  function (e) {
    e.stopPropagation();

    $(".selection.color .color-item.selected")
      .not(this)
      .removeClass("selected");

    $(this).addClass("selected");

    get_product_pricing();

    get_product_pdp_images();
  }
);

$(document).on(
  "click",
  ".product-info .price-calculator .selection.rect .attribute",
  function (e) {
    e.stopPropagation();

    $(".selection.rect .attribute.selected").not(this).removeClass("selected");

    $(this).addClass("selected");

    get_product_pricing();
  }
);

$(document).on(
  "click",
  ".product-info .price-calculator .selection.model .attribute",
  function (e) {
    e.stopPropagation();

    console.log("Model");

    $(".selection.model .attribute.selected").not(this).removeClass("selected");

    $(this).addClass("selected");

    get_product_pricing();
  }
);

$(document).on(
  "click",
  ".product-info .price-calculator .selection.processor .attribute",
  function (e) {
    e.stopPropagation();

    $(".selection.processor .attribute.selected")
      .not(this)
      .removeClass("selected");

    $(this).addClass("selected");

    console.log("data value" + $(this).data("value"));
    if ($(this).data("value") == "m1-max" || $(this).data("value") == "i7") {
      $(".price-calculator .selection.rect .attribute:eq(0)")
        .removeClass("selected")
        .hide();
      $(".price-calculator .selection.rect .attribute:eq(1)").addClass(
        "selected"
      );
    } else {
      $(".price-calculator .selection.rect .attribute:eq(0)").show();
      // $(".price-calculator .selection.rect .attribute:eq(1)").removeClass("selected");
    }

    get_product_pricing();
  }
);

$(document).on("click", ".toc .term > span", function (e) {
  e.preventDefault();

  e.stopPropagation();

  //$(this).parent().toggleClass("active");
});

// $(document).on("click", ".toc .read-more", function (e) {
//   e.preventDefault();

//   e.stopPropagation();

//   $(".toc .terms").toggleClass("more");

//   $(this).toggleClass("more");
// });

$(document).on("click", ".toc .terms .term1 .read-more", function (e) {
  e.preventDefault();

  e.stopPropagation();

  console.log($(this));

  $(".toc .terms .term1 .desc").toggleClass("more");

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
            $("#field_switch_to").append(
              `<option value="${val.switch_to}">${val.switch_to}</option>`
            );
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
    items: 5.5,
    slideBy: "page",
    autoplay: false,
    gutter: 10,
    nav: false,
    controls: true,
    arrowKeys: true,
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
      if (
        !$(this).is(e.target) &&
        $(this).has(e.target).length === 0 &&
        $(".popover").has(e.target).length === 0
      ) {
        $(this).popover("hide");
      }
    });
  });

  $(document).on(
    "click",
    "section.product-details .bank_loan:eq(0)",
    function (e) {
      e.preventDefault();
      $("#modal_bank_offers").modal("show");
    }
  );

  $(document).on(
    "click",
    "section.product-details .bank_loan:eq(1)",
    function (e) {
      e.preventDefault();
      $("#modal_bank_offers_loans").modal("show");
    }
  );
});

$(document).ready(function () {
  console.log(1213);
  $(".carousel-inner").carousel({
    interval: false,
  });

  $(".showhide1").click(function () {
    console.log($(this).text());
    $(".term1 div p:nth-child(n+4)").toggle(
      $(this).text() == "Read More" ? "Read Less" : "Read More"
    );
  });

  $(".showhide1").click(function () {
    var text = $(this).text();
    if (text == "Read More") {
      $(this).text("Read Less");
    } else {
      $(this).text("Read More");
    }
  });

  $(".showhide2").click(function () {
    $(".term2 div p:nth-child(n+4)").toggle(
      $(this).text() == "Read More" ? "Read Less" : "Read More"
    );
  });

  $(".showhide2").click(function () {
    var text = $(this).text();
    if (text == "Read More") {
      $(this).text("Read Less");
    } else {
      $(this).text("Read More");
    }
  });

  $(".showhide3").click(function () {
    $(".term3 div p:nth-child(n+4)").toggle(
      $(this).text() == "Read More" ? "Read Less" : "Read More"
    );
  });

  $(".showhide3").click(function () {
    var text = $(this).text();
    if (text == "Read More") {
      $(this).text("Read Less");
    } else {
      $(this).text("Read More");
    }
  });

  $(".showhide4").click(function () {
    $(".term4 div p:nth-child(n+4)").toggle(
      $(this).text() == "Read More" ? "Read Less" : "Read More"
    );
  });

  $(".showhide4").click(function () {
    var text = $(this).text();
    if (text == "Read More") {
      $(this).text("Read Less");
    } else {
      $(this).text("Read More");
    }
  });
});

$(".multi-item-carousel").on("slide.bs.carousel", function (e) {
  let $e = $(e.relatedTarget),
    itemsPerSlide = 1,
    totalItems = $(".carousel-item", this).length,
    $itemsContainer = $(".carousel-inner", this),
    it = itemsPerSlide - (totalItems - $e.index());
  // if (it > 0) {
  //   for (var i = 0; i < it; i++) {
  //     $('.carousel-item', this).eq(e.direction == "left" ? i : 0).

  //       appendTo($itemsContainer);
  //   }
  // }
});

// var slider = tns({
//   container: ".my-slider-offer",
//   items: 2,
//   arrowKeys: true,
//   gutter: 5,
//   slideBy: 1,
//   controlsPosition: "bottom",
//   navPosition: "bottom",
//   mouseDrag: true,
//   autoplay: true,
//   autoplayButtonOutput: false,
//   nav: true,
//   // controlsContainer: "#custom-control",
//   responsive: {
//     0: {
//       items: 1,
//       arrowKeys: true,
//       nav: true,
//       gutter: 0,
//     },
//     768: {
//       items: 2,
//       nav: false,
//     },
//     1440: {
//       items: 2,
//     },
//   },
//   // mode: 'gallery',
//   // speed: 2000,
//   // animateIn: "scale",
//   // controls: false,
//   // nav: false,
//   // edgePadding: 20,
//   // loop: false,
// });

var slider = tns({
  container: ".my-slider-offer-slide",
  items: 2,
  gutter: 10,
  slideBy: 1,
  controlsPosition: "bottom",
  navPosition: "bottom",
  mouseDrag: true,
  autoplay: true,
  autoplayButtonOutput: false,
  controlsContainer: "#custom-control",
  responsive: {
    0: {
      items: 1,
      nav: false,
      gutter: 0,
    },
    768: {
      items: 2,
      nav: false,
    },
    1440: {
      items: 2,
    },
  },
  // mode: 'gallery',
  // speed: 2000,
  // animateIn: "scale",
  // controls: false,
  // nav: false,
  // edgePadding: 20,
  // loop: false,
});

// (function ($) {
//   $(document).ready(function() {
//       $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 300, zoomHeight: 300, title: true, tint: '#fff', Xoffset: 15});
//       //$('.product-zoom').each(function() {var $this = $(this),$image = $this.data('image');$this.zoom({url: $image});});
//   });
// })(jQuery);



$(document).ready(function() {

  // $('.slideshow-thumbnails').hover(function() { changeSlide($(this)); });

  // $(document).mousemove(function(e) {
  //   var x = e.clientX; var y = e.clientY;
    
  //   var x = e.clientX; var y = e.clientY;

    

  //   var imgx1 = $('.slideshow-items').offset().left;
  //   var imgx2 = $('.slideshow-items').outerWidth() + imgx1;
  //   var imgy1 = $('.slideshow-items').offset().top;
  //   var imgy2 = $('.slideshow-items').outerHeight() + imgy1;

  //   console.log(imgx1, imgx2, imgy1, imgy2); 

  //   if ( x > imgx1 && x < imgx2 && y > imgy1 && y < imgy2 ) {
  //     $('#lens').show(); $('#result').show();
  //     imageZoom( $('.slideshow-items'), $('#result'), $('#lens') );
  //   } else {
  //     $('#lens').hide(); $('#result').hide();
  //   }

  // });
  
});

function imageZoom( img, result, lens ) {

  // document.getElementById("productdetailsinfo").style.zIndex = "-1";

  result.width( img.innerWidth() ); 
  result.height( img.innerHeight() );
  lens.width( img.innerWidth() / 2 ); 
  lens.height( img.innerHeight() / 2 );

  result.offset({ top: img.offset().top, left: img.offset().left + img.outerWidth() + 10 });

  var cx = img.innerWidth() / lens.innerWidth(); 
  var cy = img.innerHeight() / lens.innerHeight();

  result.css('backgroundImage', 'url(' + img.attr('src') + ')');
  result.css('backgroundSize', img.width() * cx + 'px ' + img.height() * cy + 'px');

  lens.mousemove(function(e) { moveLens(e); });
  img.mousemove(function(e) { moveLens(e); });
  lens.on('touchmove', function() { moveLens(); })
  img.on('touchmove', function() { moveLens(); })

  function moveLens(e) {
    var x = e.clientX - lens.outerWidth() / 2;
    var y = e.clientY - lens.outerHeight() / 2;
    if ( x > img.outerWidth() + img.offset().left - lens.outerWidth() ) { x = img.outerWidth() + img.offset().left - lens.outerWidth(); }
    if ( x < img.offset().left ) { x = img.offset().left; }
    if ( y > img.outerHeight() + img.offset().top - lens.outerHeight() ) { y = img.outerHeight() + img.offset().top - lens.outerHeight(); }
    if ( y < img.offset().top ) { y = img.offset().top; }
    lens.offset({ top: y, left: x });
    result.css('backgroundPosition', '-' + ( x - img.offset().left ) * cx  + 'px -' + ( y - img.offset().top ) * cy + 'px');
  }
}


function changeSlide(elm) {
  $('.slideshow-items').removeClass('active');
  $('.slideshow-items').eq( elm.index() ).addClass('active');
  $('.slideshow-thumbnails').removeClass('active');
  $('.slideshow-thumbnails').eq( elm.index() ).addClass('active');
}