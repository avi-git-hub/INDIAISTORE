var base_url = $("base").attr("href");
var s3_url = $("base").attr("data-s3-url");

var budgetRangeSlider = document.getElementById("budgetRangeSlider");
var filterRangeSlider = document.getElementById("filterRangeSlider");

//https://refreshless.com/nouislider/
noUiSlider.create(budgetRangeSlider, {
  start: [5, 5000],
  connect: true,
  range: {
    min: parseInt($(".range-slider #min_price").val()) / 1000 - 5 || 5,
    max: parseInt($(".range-slider #max_price").val()) / 1000 + 5 || 5000,
  },
  tooltips: [
    wNumb({ decimals: 0, prefix: "₹", suffix: "k" }), // format min number
    wNumb({ decimals: 0, prefix: "₹", suffix: "k" }), // format max number
  ],
  pips: {
    mode: "steps",
    stepped: true,
    density: 100,
    format: wNumb({
      decimals: 0,
      prefix: "₹",
      suffix: "k",
    }),
  },
});

noUiSlider.create(filterRangeSlider, {
  start: [5, 5000],
  connect: true,
  range: {
    min: parseInt($(".range-slider #min_price").val()) / 1000 - 5 || 5,
    max: parseInt($(".range-slider #max_price").val()) / 1000 + 5 || 5000,
  },
  tooltips: [
    wNumb({ decimals: 0, prefix: "₹", suffix: "k" }), // format min number
    wNumb({ decimals: 0, prefix: "₹", suffix: "k" }), // format max number
  ],
  pips: {
    mode: "steps",
    stepped: true,
    density: 100,
    format: wNumb({
      decimals: 0,
      prefix: "₹",
      suffix: "k",
    }),
  },
});

var categoryListingSlider, categoryProductsSlider;

// --------------------------------------------------
// function definitions
// --------------------------------------------------
function get_prod_by_price_range() {
  var range = getRange();
  var min_price = parseInt(Math.round(range[0])) * 1000;
  var max_price = parseInt(Math.round(range[1])) * 1000;
  var cat_slug = $(".range-slider #category_slug").val();

  var ajax_call = $.ajax({
    data: { cat_slug, min_price, max_price },
    dataType: "json",
    type: "post",
    url: base_url + "site/category/get_prod_by_price_range",
  });

  ajax_call.done(function ({ status: s, data }, status) {
    var formatter = new Intl.NumberFormat("en-IN", {
      // style: "currency",
      currency: "INR",
      minimumFractionDigits: 0,
      maximumFractionDigits: 0,
    });

    // formatter.format();

    if (s == true) {
      var html = "";
      for (let p of data) {
        var bg_color = p.prod_card_bg_color ? `background-color:${p.prod_card_bg_color}` : "";
        html += `<div class="product" style="${bg_color}" data-prod-name="${p.prod_name}">
                    <a href="${base_url}${p.prod_slug}">
                        <div class="img">
                            <picture>
                                <source media="(max-width: 768px)" srcset="${s3_url}files/uploads/products/${p.prod_slug}/${p.prod_img_lg}">
                                <source media="(min-width: 769px)" srcset="${s3_url}files/uploads/products/${p.prod_slug}/${p.prod_img_lg}">
                                <img src="${s3_url}files/uploads/products/${p.prod_slug}/${p.prod_img_lg}">
                            </picture>
                        </div>
                        <div class="name">${p.prod_name}</div>
                        <div class="price">₹ <span>${p.prod_mrp}</span></div>
                    </a>
                </div>`;
      }
      $(".recommendation .versus-products").html(html).hide().fadeIn("slow");

      switch (true) {
        case data.length > 1:
          var url = data
            .map(function (prod) {
              return prod.prod_slug;
            })
            .join("-vs-");
          if (["iphone", "ipad"].includes(cat_slug)) {
            $(".recommendation .btn").html("Compare").attr("href", `${base_url}compare/${cat_slug}?${url}`).show();
          } else {
            $(".recommendation .btn").html("Compare").attr("href", `${base_url}compare/${cat_slug}`).show();
          }

          if (cat_slug == "music" || cat_slug == "tv") {
            $(".recommendation .btn").hide();
          }
          break;

        case data.length == 1:
          $(".recommendation .btn")
            .html("View Details")
            .attr("href", base_url + data[0].prod_slug)
            .show();
          break;

        default:
          $(".recommendation .versus-products").html("<p class='mt-3 w-100'>No Results Found! Please use different values for better result.</p>");
          $(".recommendation .btn").hide();
          break;
      }
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {});
}

function getFilterRange() {
  return filterRangeSlider.noUiSlider.get();
}

function getRange() {
  return budgetRangeSlider.noUiSlider.get();
}

function getUses() {
  var _uses = [];

  $(".phone-use-carousel .use.selected").each(function () {
    _uses.push($(this).data("use"));
  });

  return _uses;
}

function closeFilters() {
  $("body").removeClass("filters-open");
}

function openFilters() {
  closeSort();

  $("body").addClass("filters-open");
}

function closeSort() {
  $("body").removeClass("sort-open");
}

function openSort() {
  closeFilters();
  $("body").addClass("sort-open");
}

function filter_products() {
  var sort_product_by = $(".sort-options").find("a").filter(".active").data("value");

  var price_range = getFilterRange();

  var filtered_prod_price = {
    min: parseInt(Math.round(price_range[0])) * 1000,
    max: parseInt(Math.round(price_range[1])) * 1000,
  };

  var filtered_prod_color = [],
    filtered_prod_storage_space = [],
    filtered_prod_screen_size = [],
    filtered_prod_processor = [];

  $("input[name='prod_filter_colors']").each(function () {
    if ($(this).is(":checked")) {
      filtered_prod_color.push($(this).val());
    }
  });

  if ($("input[name='prod_filter_storage_spaces']").length > 0) {
    $("input[name='prod_filter_storage_spaces']").each(function () {
      if ($(this).is(":checked")) {
        filtered_prod_storage_space.push($(this).val());
      }
    });
  }

  if ($("input[name='prod_filter_screen_sizes']").length > 0) {
    $("input[name='prod_filter_screen_sizes']").each(function () {
      if ($(this).is(":checked")) {
        filtered_prod_screen_size.push($(this).val());
      }
    });
  }

  if ($("input[name='prod_filter_processors']").length > 0) {
    $("input[name='prod_filter_processors']").each(function () {
      if ($(this).is(":checked")) {
        filtered_prod_processor.push($(this).val());
      }
    });
  }

  $.ajax({
    cache: false,
    data: {
      sort_product_by: sort_product_by,
      filtered_prod_price: filtered_prod_price,
      filtered_prod_color: filtered_prod_color,
      filtered_prod_storage_space: filtered_prod_storage_space,
      filtered_prod_screen_size: filtered_prod_screen_size,
      filtered_prod_processor: filtered_prod_processor,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "site/category/category/" + $("#category_slug").val(),
  })
    .done(function (response, status) {
      if (response.status == true) {
        var filtered_products = response.data;
        var i = 0,
          filtered_prod_count = filtered_products.length;
        var markup_1 = "",
          markup_2 = "";

        for (i; i < filtered_prod_count; i++) {
          markup_1 += '<div class="slider-item">';
          markup_1 += ' <div class="product' + (i == 0 ? " active" : "") + '">';
          markup_1 += '   <div class="img">';
          markup_1 +=
            '     <img src="' + s3_url + "files/uploads/products/" + filtered_products[i].prod_slug + "/" + filtered_products[i].prod_img_md + '">';
          markup_1 += "   </div>";

          markup_1 += '   <div class="name">' + filtered_products[i].prod_name + "</div>";

          markup_1 += '   <div class="price">₹<span>' + filtered_products[i].prod_mrp + "</span></div>";
          markup_1 += " </div>";
          markup_1 += "</div>";

          markup_2 += '<div class="slider-item">';
          markup_2 += ' <div class="product" data-prod-name="' + filtered_products[i].prod_name + '">';
          markup_2 += '   <div class="name">';
          markup_2 += '     <span><a href="' + filtered_products[i].prod_slug + '">' + filtered_products[i].prod_name + "</a></span>";

          markup_2 += '     <div class="action d-none">';
          markup_2 += '       <i class="ii-icon-compare"></i>';
          markup_2 += '       <i class="ii-icon-share"></i>';
          markup_2 += "     </div>";
          markup_2 += "   </div>";

          markup_2 += '   <div class="pricing">';
          markup_2 += '     <div class="desc">Starting from</div>';

          if (filtered_products[i].prod_effective_price != "" && filtered_products[i].prod_effective_price > 0) {
            markup_2 +=
              '<div class="price">₹ <span>' +
              filtered_products[i].prod_effective_price +
              '</span>* <sup class="note">(Effective price) inc. bank offer</sup></div>';
          } else {
            markup_2 += '<div class="price">₹ <span>' + filtered_products[i].prod_mrp + "</span></div>";
          }

          markup_2 += "     </div>";

          markup_2 += '     <div class="product-media">';

          var filtered_product_images = filtered_products[i].images;
          var j = 0,
            filtered_prod_images_count = filtered_product_images.length;

          if (filtered_prod_images_count > 0) {
            markup_2 += '         <div class="main-img">';
            markup_2 += '           <a href="javascript:void(0);">';
            markup_2 +=
              '             <img src="' +
              base_url +
              "files/uploads/products/pdp/" +
              filtered_products[i].images[0].pdp_set_slug +
              "/" +
              filtered_products[i].images[0].pdp_img +
              '">';
            markup_2 += "           </a>";
            markup_2 += "         </div>";

            markup_2 += '         <div class="product-shots">';
            markup_2 += '           <div class="slider ps_slider">';

            for (j; j < filtered_prod_images_count; j++) {
              markup_2 += '           <div class="shot-slider-item">';
              markup_2 += '             <div class="product-shot' + (j == 0 ? " active" : "") + '">';
              markup_2 +=
                '               <img src="' +
                base_url +
                "files/uploads/products/pdp/" +
                filtered_product_images[j].pdp_set_slug +
                "/" +
                filtered_product_images[j].pdp_img +
                '" data-large="' +
                base_url +
                "files/uploads/products/pdp/" +
                filtered_product_images[j].pdp_set_slug +
                "/" +
                filtered_product_images[j].pdp_img +
                '">';
              markup_2 += "             </div>";
              markup_2 += "           </div>";
            }

            if (filtered_products[i].prod_vid_id != null && filtered_products[i].prod_vid_thumbnail != null) {
              markup_2 += '           <div class="shot-slider-item">';
              markup_2 +=
                '             <div class="product-shot" data-asset-type="video" data-video-url="https://www.youtube.com/watch?v=<?= filtered_products[i].prod_vid_id ?>">';
              markup_2 +=
                '               <img src="' +
                s3_url +
                "files/uploads/products/" +
                filtered_products[i].prod_slug +
                "/" +
                filtered_products[i].prod_vid_thumbnail +
                '" alt="' +
                filtered_products[i].prod_name +
                ' Video" data-large="' +
                s3_url +
                "files/uploads/products/" +
                filtered_products[i].prod_slug +
                "/" +
                filtered_products[i].prod_vid_thumbnail +
                '">';
              markup_2 += "             </div>";
              markup_2 += "           </div>";
            }

            markup_2 += "           </div>";
            markup_2 += "         </div>";
          }

          markup_2 += "     </div>";
          markup_2 += "   </div>";
          markup_2 += " </div>";
          markup_2 += "</div>";
        }

        $(".category-listing-carousel").find(".clc_slider").empty().append(markup_1);

        categoryListingSlider.rebuild();

        $(".products-info-carousel").find(".pic_slider").empty().append(markup_2);

        categoryProductsSlider.rebuild();

        $(".products-info-carousel .product-shots").each(function () {
          tns({
            container: $(this).find(".ps_slider").get(0),
            axis: "vertical",
            items: 5,
            autoplay: false,
            gutter: 10,
            nav: false,
            controls: true,
            controlsPosition: "bottom",
            loop: false,
            mouseDrag: true,
          });
        });

        if (sort_product_by != undefined) {
          closeSort();
        }
      }
    })
    .fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error });
    })
    .always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error, });
    });
}

// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// select product
$(document).on("click", ".category-listing-carousel .product", function (e) {
  e.stopPropagation();
  $(".category-listing-carousel .product").removeClass("active");
  $(this).addClass("active");
  var index = $(this).closest(".slider-item").index();
  categoryListingSlider.goTo(index);
  categoryProductsSlider.goTo(index);
});

// select product shot
$(document).on("click", ".products-info-carousel .product-shot", function (e) {
  e.stopPropagation();
  if ($(this).data("asset-type") == "video") {
    $(this).parents(".product-media").find(".main-img a").attr("href", $(this).data("video-url")).attr("data-lity", "");
  } else {
    $(this).parents(".product-media").find(".main-img a").attr("href", $(this).data("cta-url")).removeAttr("data-lity");
  }

  $(".products-info-carousel .product-shot.active").removeClass("active");
  $(this).addClass("active");
  var largeImg = $(this).find("img").data("large");
  $(this).closest(".product-media").find(".main-img img").attr("src", largeImg);
});

$(document).on("click", ".phone-use-carousel .use", function (e) {
  e.stopPropagation();
  //  $('.phone-use-carousel .use.selected').not(this).removeClass('selected');
  $(this).toggleClass("selected");

  var phoneUses = getUses();
  var range = getRange();
  console.log("range", range);
  console.log("uses", phoneUses);
});

$(document).on("click", ".btn-filter", function () {
  openFilters();
});

$(document).on("click", "body.filters-open .btn-filter", function () {
  closeFilters();
});

$(document).on("click", ".filters .apply", function () {
  // apply filter logic

  // close filter window
  closeFilters();
});

$(document).on("click", ".close-filters", function () {
  closeFilters();
});

$(document).on("click", ".filter-close-overlay", function () {
  closeFilters();
});

$(document).on("click", "body:not(.sort-open) .btn-sort", function () {
  openSort();
});

$(document).on("click", "body.sort-open .btn-sort", function () {
  closeSort();
});

$(".sort-options a").click(function (e) {
  e.stopPropagation();

  $(".sort-options a").removeClass("active");

  $(this).addClass("active");

  var sortBy = $(this).data("value");

  filter_products();
});

$(document).on("click", ".sort-close-overlay", function () {
  closeSort();
});

$(document).on("click", ".sort-options .ii-icon-arrow-left", function () {
  closeSort();
});

$("#apply_prod_filters").click(function () {
  filter_products();
});

$("#reset_prod_filters").click(function () {
  filterRangeSlider.noUiSlider.reset();

  $("input[name^='prod_filter_']").each(function () {
    if ($(this).is(":checked")) {
      $(this).prop("checked", false);
    }
  });
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
//my budget slider change
$(function () {
  get_prod_by_price_range();

  if ($(".category-listing-carousel").length > 0) {
    categoryListingSlider = tns({
      container: ".category-listing-carousel .clc_slider",
      items: 3.6,
      slideBy: "page",
      autoplay: false,
      gutter: 10,
      nav: false,
      controls: false,
      loop: false,
      responsive: {
        768: { items: 6.5, mouseDrag: true },
      },
    });
  }

  if ($(".products-info-carousel").length > 0) {
    categoryProductsSlider = tns({
      container: ".products-info-carousel .pic_slider",
      items: 1.08,
      slideBy: "page",
      autoplay: false,
      gutter: 2,
      edgePadding: -2,
      nav: false,
      controls: false,
      loop: false,
      mouseDrag: true,
      responsive: {
        768: { items: 2.5, mouseDrag: true },
      },
    });
  }

  // category product shots sliders
  $(".products-info-carousel .product-shots").each(function () {
    tns({
      container: $(this).find(".ps_slider").get(0),
      axis: "vertical",
      items: 5,
      autoplay: false,
      gutter: 10,
      nav: false,
      controls: true,
      controlsPosition: "bottom",
      loop: false,
      mouseDrag: true,
    });
  });

  // var phoneUseSlider = tns({
  //   container: ".phone-use-carousel .slider",
  //   items: 4.5,
  //   slideBy: "page",
  //   autoplay: false,
  //   gutter: 0,
  //   nav: false,
  //   controls: false,
  //   loop: false,
  //   responsive: {
  //     768: { items: 6, mouseDrag: true },
  //   },
  // });

  if ($("section.trending").length > 0) {
    var trendingSlider = tns({
      container: "section.trending .slider",
      items: 3,
      slideBy: "page",
      autoplay: false,
      gutter: 0,
      nav: false,
      controls: false,
      responsive: {
        768: { items: 3, mouseDrag: true },
      },
    });
  }

  if ($(".offer-carousel.featured-accesories").length > 0) {
    var accesorySlider = tns({
      container: ".offer-carousel.featured-accesories .slider",
      items: 1.35,
      slideBy: "page",
      autoplay: false,
      gutter: 15,
      nav: false,
      controls: false,
      responsive: {
        577: { items: 2.4, mouseDrag: true },
        1024: { items: 3.3, mouseDrag: true, gutter: 30 },
      },
    });
  }

  budgetRangeSlider.noUiSlider.on("set", function () {
    get_prod_by_price_range();
  });

  /* filterRangeSlider.noUiSlider.on("set", function () {
    get_prod_by_price_range();
  }); */

  if ($("#category_slug").val() == "music") {
    $(".compare-models .btn").hide();
    $(".compare-models .compare-all-btn").hide();
    $(".compare-models .compare-all-heading").addClass("mb-3");
  }
});
// --------------------------------------------------
// document ready
// --------------------------------------------------

//share section starts

$(function () {
  $(".cat-share-btn").popover({
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
});

//share section ends

//compare section starts
const compare_prods_array = [];
// TODO:need to be cleaned
$(document).on("click", ".cat-compare-btn", function (e) {
  e.preventDefault();
  const compare_float_btn = $(".category-floating-btn");
  const is_mobile = parseInt($("body").attr("data-is-mobile"));
  const limit = is_mobile ? 1 : 2;
  const cat_slug = $("#category_slug").val();

  //if not added  to compare
  if (!$(this).hasClass("added-to-compare")) {
    //if more than 3 return false
    if (compare_prods_array.length > limit) {
      var limit_alert = "You can add only " + (is_mobile ? "two" : "three") + " products to compare.";
      $("#compare_limit_modal").modal("show");
      return false;
    }
    compare_prods_array.push($.trim($(this).attr("data-prod-slug")));
    const url = compare_prods_array.join("-vs-");
    if (cat_slug == "iphone") {
      compare_float_btn.find("a").attr("href", `${base_url}compare/${cat_slug}?${url}`);
    } else {
      compare_float_btn.find("a").attr("href", `${base_url}compare/${cat_slug}`);
    }
    $(this).addClass("text-primary added-to-compare");
    $(this).find("i").addClass("font-weight-bold");
    compare_float_btn
      .find(".total-product span")
      .text(compare_prods_array.length.toLocaleString("en-IN", { minimumIntegerDigits: 2, useGrouping: false }));
    compare_float_btn.addClass("tada").show(500);
    setTimeout(() => {
      compare_float_btn.removeClass("tada");
    }, 1000);
  } else {
    var index = compare_prods_array.indexOf($.trim($(this).attr("data-prod-slug")));
    if (index !== -1) {
      compare_prods_array.splice(index, 1);
      const url = compare_prods_array.join("-vs-");
      if (cat_slug == "iphone") {
        compare_float_btn.find("a").attr("href", `${base_url}compare/${cat_slug}?${url}`);
      } else {
        compare_float_btn.find("a").attr("href", `${base_url}compare/${cat_slug}`);
      }

      $(this).removeClass("text-primary added-to-compare");
      $(this).find("i").removeClass("font-weight-bold");
      compare_float_btn
        .find(".total-product span")
        .text(compare_prods_array.length.toLocaleString("en-IN", { minimumIntegerDigits: 2, useGrouping: false }));
      if (compare_prods_array.length > 0) {
        compare_float_btn.addClass("tada").show();
        setTimeout(() => {
          compare_float_btn.removeClass("tada");
        }, 1000);
      } else {
        compare_float_btn.addClass("tada").hide(500);
      }
    }
  }
});

//compare section ends
