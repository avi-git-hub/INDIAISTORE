"use strict";
String.prototype.toTitleCase = function () {
  return this.replace(/\w\S*/g, function (txt) {
    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
  });
};

var base_url = $("base").attr("href");
var s3_url = $("base").attr("data-s3-url");

function closeFilters() {
  $("body").removeClass("filters-open");
}
function openFilters() {
  $("body").addClass("filters-open");
}
function loadTabContent(cat_id, filter_object = null) {
  const tabContainer = $(`#acces-${cat_id}`);

  if (tabContainer.hasClass("content-loaded") && filter_object == null)
    return true;

  var ajax_object = {
    dataType: "json",
    type: "post",
    url: `${base_url}/site/accessory/get_accessories_by_cat_id/${cat_id}`,
  };

  if (filter_object) {
    ajax_object.data = filter_object;
  }

  var ajax_call = $.ajax(ajax_object);

  ajax_call.done(function ({ status: s, data }, status) {
    let html = "";
    if (s == true) {
      const data_acc = data[0];
      const data_filter = data[1];

      let filter = "";
      if (data_filter) {
        filter = `<section class="sort-filter"><div class="filter-close-overlay"></div><div class="filters" id="filter-accordion">
                  <div class="container"><div class="filters-wrapper"><div class="heading"><div class="close-filters"><i class="ii-icon-arrow-left"></i>
                  <span>Filter</span></div><div class="reset">Reset All</div></div><div class="filter-list" id="filter-parent_${cat_id}">`;

        data_filter.forEach(function (d_filter, d_key) {
          if (d_filter.attr_value) {
            const d_attr_value = d_filter.attr_value.split(",");
            const d_attr_value_id = d_filter.attr_value_id.split(",");

            filter += `<div class="filter-item" data-attr-name="${
              d_filter.attr_name
            }" data-attr-id="${d_filter.attr_id}">
                        <a href="" data-toggle="collapse" class="collapsed" data-target="#f_${cat_id}_${d_key}" aria-expanded="false" aria-controls="f1">${d_filter.attr_name.toTitleCase()} 
                        <i class="ii-icon-arrow-up"></i></a>
                        <ul id="f_${cat_id}_${d_key}" class="collapse" data-parent="#filter-parent_${cat_id}">`;

            d_attr_value.forEach(function (d_value, d_key) {
              filter += `<li><label><input type="checkbox" value="${
                d_filter.attr_name == "color" ? d_value : d_attr_value_id[d_key]
              }">
                          <div class="box"></div><span>${
                            d_filter.attr_name == "color"
                              ? d_value.toTitleCase()
                              : d_value
                          }</span></label></li>`;
            });

            filter += `</ul></div>`;
          }
        });

        filter += `</div><div class="text-center"><div class="btn btn-primary apply">Apply</div></div></div></div></div>
                    <div class="cta-helper"><div class="container cta-container"><div class="cta"><div class="btn-filter">
                    <i class="ii-icon-filter"></i><span>Filter</span></div></div></div></div></section>`;
      }

      if (data_acc.length) {
        html = `<section class="accessories-section"><div class="container"><div class="box"><div class="heading-container">
              <h2 class="heading-2">Suggested Accessories</h2></div><section class="accessories-carousel trending">
              <div class="container container-right"><div class="slider">`;

        data_acc.forEach(function (acc) {
          const colors_array = acc.colors.split(",");
          const colors_hex_array = acc.colors_hex.split(",");
          const images_array = acc.images.split(",");

          html += `<div class="offer-item"><div class="card-details">
                  <img src="${s3_url}files/uploads/accessories/${acc.slug}/${images_array[0]}">
                  </div><div class="shot-carousel"><div class="slider-section">`;

          colors_array.forEach(function (color, key) {
            html += `<div class="slider-item"><div class="product-shot">
            <div class="color-section circle" style="background-color: ${
              colors_hex_array[key]
            };"
            data-large="${s3_url}files/uploads/accessories/${acc.slug}/${
              images_array[key]
            }">
            <div class="name">${color.toTitleCase()}</div></div></div></div>`;
          });

          html += `</div></div><div class="acc-name"><h2>${acc.name}</h2></div></div>`;
        });

        html += `</div></div></section></div></div></section>`;

        if (data_filter) {
          tabContainer.html("");
          tabContainer
            .append([filter, html])
            .addClass("content-loaded")
            .hide()
            .fadeIn(500);
        } else {
          tabContainer.find(".accessories-section").remove();
          tabContainer
            .append(html)
            .addClass("content-loaded")
            .hide()
            .fadeIn(500);
        }
        if ($(window).width() <= 1024) {
          // do your stuff
          $(".accessories-carousel.trending").each(function (i, v) {
            tns({
              container: $(v).find(".slider").get(0),
              items: 1.5,
              slideBy: 1,
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

        tabContainer.find(".slider-section").each(function (i, v) {
          tns({
            container: $(v).get(0),
            items: 4.3,
            slideBy: "page",
            autoplay: false,
            gutter: 20,
            loop: true,
            nav: false,
            controls: false,
            mouseDrag: true,
            autoWidth: false,
            responsive: {
              577: { gutter: 2 },
              1024: { gutter: 49, mouseDrag: true },
            },
          });
        });
      } else {
        html = `<section class="accessories-section"><div class="container"><div class="box"><div class="heading-container">
              <h2 class="heading-2">Suggested Accessories</h2></div><section class="accessories-carousel trending">
              <div class="container container-right"><div class="slider"><h1 class="text-center my-5">No Accessories</h1></div></div></section></div></div></section>`;

        tabContainer.find(".accessories-section").remove();
        tabContainer.append(html).addClass("content-loaded");
      }
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {});
}
function getUrlVars() {
  var vars = {};

  var parts = window.location.href.replace(
    /[?&]+([^=&]+)=([^&]*)/gi,
    function (m, key, value) {
      vars[key] = value;
    }
  );

  return vars;
}

// select product shot
$(document).on("click", ".accessories-carousel .product-shot", function (e) {
  e.stopPropagation();
  $(".accessories-carousel .product-shot.active").removeClass("active");
  $(this).addClass("active");
  var largeImg = $(this).find("div.color-section").data("large");
  $(this)
    .closest(".offer-item")
    .find(".card-details img")
    .attr("src", largeImg);
  // $('.accessories-carousel .card-details img').attr('src', largeImg);
});

$(document).on("click", ".btn-filter", function () {
  openFilters();
});
$(document).on("click", "body.filters-open .btn-filter", function () {
  closeFilters();
});

$(document).on("click", ".filters .apply", function () {
  const cat_id = $("section.accessories-tabs .nav-link.active").attr(
    "data-cat-id"
  );
  const filter_items = $(this).parents(".sort-filter").find(".filter-item");
  const filter_object = {};

  const attr_id_array = [];

  for (var i = 0; i < filter_items.length; i++) {
    let attr_name = $(filter_items[i]).attr("data-attr-name");
    let attr_id = $(filter_items[i]).attr("data-attr-id");
    let checkboxes = $(filter_items[i]).find("input:checked");
    const attr_array = [];
    if (checkboxes.length) {
      for (var j = 0; j < checkboxes.length; j++) {
        attr_array.push($(checkboxes[j]).val());
      }
      filter_object[attr_name] = attr_array;
      attr_id_array.push(attr_id);
    }
  }

  loadTabContent(cat_id, { attr_id: attr_id_array, filter_object });

  closeFilters();
});

$(document).on("click", ".filter-close-overlay", function () {
  closeFilters();
});

$(document).on("click", ".filters .reset", function () {
  const checkboxes = $(this)
    .parents(".sort-filter")
    .find("input[type=checkbox]")
    .prop("checked", false);
});

$(document).on("click", "section.accessories-tabs .nav-link", function (e) {
  e.preventDefault();
  const cat_id = $(this).attr("data-cat-id");
  loadTabContent(cat_id);
});

//first load
$(document).ready(function () {
  // console.log(getUrlVars());
  // const acc_url = new URL(window.location.href);
  // const acc_url_cat_slug = $.trim(
  //   acc_url.searchParams.get("category")
  // ).toLowerCase();

  const acc_url_cat_slug = $.trim(getUrlVars().category).toLowerCase();

  let acc_cat_slug = $("section.accessories-tabs .nav-link").filter(
    (i, nav_link) => $(nav_link).attr("data-cat-slug") == acc_url_cat_slug
  );

  let acc_cat_id = $(acc_cat_slug).attr("data-cat-id");

  if (!acc_cat_id) {
    acc_cat_id = $("section.accessories-tabs .nav-link:first").attr(
      "data-cat-id"
    );
    loadTabContent(acc_cat_id);
    $("section.accessories-tabs .nav-link:first").tab("show");
  } else {
    loadTabContent(acc_cat_id);
    $(acc_cat_slug).tab("show");
  }

  $('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
    window.history.pushState(
      null,
      "",
      "/accessories?category=" + $(this).attr("data-cat-slug")
    );
  });
});
