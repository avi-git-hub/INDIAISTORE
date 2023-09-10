"use strict";

function get_partners_by_loc() {
  getCurrentPosition(function () {
    var dis = window.localStorage.getItem("user_location_distance");
    var lat = window.localStorage.getItem("user_location_lat");
    var lng = window.localStorage.getItem("user_location_lng");
    get_zest_offer_stores(lat, lng, null, null, dis);
  });
}

function get_zest_offer_stores(lat, lng, state_id, city_id, distance) {
  var ajax_call = $.ajax({
    data: {
      lat: lat,
      lng: lng,
      state_id: state_id,
      city_id: city_id,
      distance: distance
    },
    dataType: "json",
    type: "post",
    url: "site/components/get_zest_offer_stores"
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      $("#multi_brand_stores").html("");

      var store_html = "<h4 class=\"m-auto pt-4 text-center\">No stores available for this location.</h4>";

      if (response.stores && response.stores.length > 0) {
        store_html = response.stores.map(function (store) {
          return "<div class=\"store mt-4\" data-store-name=\"" + store.name + "\" data-store-phone=\"" + store.phone + "\">\n          <div class=\"details\">\n          <b class=\"name\">" + store.name + "</b>\n          <div class=\"num-link mt-3\">\n          <a class=\"offline-num\" href=\"tel:" + store.phone + "\"><i class=\"ii-icon-phone\"></i> " + store.phone + "</a>\n          </div>\n          </div>\n          </div>";
        });
      }

      $("#multi_brand_stores").html(store_html);
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error });
  });

  return false;
}

if ($("section.hero-banner").length > 0) {
  var heroSlider = tns({
    container: ".hero-banner .slider",
    items: 1,
    slideBy: 1,
    speed: 1000,
    autoplay: true,
    autoplayButtonOutput: false,
    // autoplayHoverPause: true,
    // autoplayTimeout: 5000,
    gutter: 0,
    nav: true,
    controls: false,
    mouseDrag: true
  });
}

$(document).ready(function () {
  get_partners_by_loc();

  $("#select-state-dd").select2({
    placeholder: "Select State"
  }).on("select2:selecting", function (e) {
    var state_id = e.params.args.data.id;

    $("#select-city-dd").html("");

    if (state_id) {
      $.ajax({
        type: "post",
        cache: false,
        url: "/site/components/get_cities",
        dataType: "json",
        data: {
          state_id: state_id
        }
      }).done(function (data) {
        $("#select-city-dd").select2({
          placeholder: "Select City",
          data: data
        });

        $("#select-city-dd").val("").trigger("change");
      });
    }
  });

  $("#select-city-dd").select2({
    placeholder: "Select City"
  }).on("select2:selecting", function (e) {
    var city_id = e.params.args.data.id;
    var state_id = $("#select-state-dd").val();

    get_zest_offer_stores(null, null, state_id, city_id, "");
  });

  $("#nearby").click(function (e) {
    e.preventDefault();

    $("#select-city-dd").html("");
    $("#select-state-dd").val("").trigger("change");

    var location_status = window.localStorage.getItem("user_location_access");

    switch (location_status) {
      case "granted":
      case "prompt":
        get_partners_by_loc();
        break;

      case "denied":
        if ($("body").attr("data-is-mobile") == 0 && $.trim($("base").attr("data-browser-type")) == "Chrome") {
          $(".instruction_wrapper").show(500);
          $("body").css({ "overflow-y": "hidden" });
        } else {
          alert("Please turn on your location services and allow us to find your nearest store.");
        }
        break;

      case null:
      default:
        alert("Please turn on your location services and allow us to find your nearest store.");
    }

    $("html, body").animate({
      scrollTop: $("section.locate-store").offset().top - 100
    }, 500);
  });

  $(".location a").click(function (e) {
    e.preventDefault();
    var location_status = window.localStorage.getItem("user_location_access");

    switch (location_status) {
      case "granted":
      case "prompt":
        // get_partners_by_loc();
        break;

      case "denied":
        if ($("body").attr("data-is-mobile") == 0 && $.trim($("base").attr("data-browser-type")) == "Chrome") {
          $(".instruction_wrapper").show(500);
          $("body").css({ "overflow-y": "hidden" });
        } else {
          alert("Please turn on your location services and allow us to find your nearest store.");
        }
        break;

      case null:
      default:
        alert("Please turn on your location services and allow us to find your nearest store.");
    }

    $("html, body").animate({
      scrollTop: $("section.locate-store").offset().top - 100
    }, 500);
  });
});