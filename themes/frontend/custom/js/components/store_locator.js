// --------------------------------------------------
// function definitions
// --------------------------------------------------

function get_partners_by_loc() {
  getCurrentPosition(function () {
    var dis = window.localStorage.getItem("user_location_distance");
    var lat = window.localStorage.getItem("user_location_lat");
    var lng = window.localStorage.getItem("user_location_lng");
    get_nearby_partner_stores_data(lat, lng, null, null, dis);
  });
}

function get_nearby_partner_stores_data(lat, lng, state_id, city_id, distance) {
  var ajax_call = $.ajax({
    data: {
      lat,
      lng,
      state_id,
      city_id,
      distance,
    },
    dataType: "json",
    type: "post",
    url: "site/components/get_nearby_partner_stores_data",
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      $("#online_stores_section, #offline_stores_section").html("");

      if (response.data.offline_stores) {
        $("#offline_stores_section").hide().html(response.data.offline_stores).fadeIn("slow");

        $("#multi_brand_stores .store").hide();
        $("#multi_brand_stores .show-less").hide();
        $("#multi_brand_stores .store:lt(4)").show();

        if ($("#multi_brand_stores .store").length <= 4) {
          $("#multi_brand_stores .btn").hide();
        }

        $("#mono_brand_stores .store").hide();
        $("#mono_brand_stores .show-less").hide();
        $("#mono_brand_stores .store:lt(4)").show();

        if ($("#mono_brand_stores .store").length <= 4) {
          $("#mono_brand_stores .btn").hide();
        }
      }

      if (response.data.online_stores) {
        const store_count = $("body").attr("data-is-mobile") == 1 ? 4 : 3;

        $("#online_stores_section").hide().html(response.data.online_stores).fadeIn("slow");
        $("#online_stores_section .store").hide();
        $("#online_stores_section .show-less").hide();
        $("#online_stores_section .store:lt(" + store_count + ")").show();

        if ($("#online_stores_section .store").length <= 4) {
          $("#online_stores_section .btn").hide();
        }
      }
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

// show more/less section starts
function show_results(btn, section, count) {
  var s_count = section.find(".store").length;

  if (btn.hasClass("show-more")) {
    var limit = section.find(".store:visible").length;

    limit = limit + count <= s_count ? limit + count : s_count;

    section.find(".store:lt(" + limit + ")").fadeIn();

    scrollToSection(section.find(".store:visible:eq(-1)"));

    if (limit >= s_count) {
      btn.hide();

      section.find(".show-less").show();
    }
  } else if (btn.hasClass("show-less")) {
    section
      .find(".store")
      .not(":lt(" + count + ")")
      .fadeOut();

    btn.hide();

    section.find(".show-more").show();

    scrollToSection(section);
  }
}

function scrollToSection(section) {
  var el = section;
  var elOffset = el.offset().top;
  var elHeight = el.height();
  var windowHeight = $(window).height();
  var offset;

  if (elHeight < windowHeight) {
    offset = elOffset - (windowHeight / 1.5 - elHeight / 1.5);
  } else {
    offset = elOffset - 200;
  }

  var speed = 700;

  $("html, body").animate({ scrollTop: offset }, speed);
}
// show more/less section ends
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------

$(document).on("click", "#online_stores_section .btn", function (e) {
  show_results($(this), $("section.online-stores"), $("body").attr("data-is-mobile") == 1 ? 4 : 3);
});

$(document).on("click", "#multi_brand_stores .btn", function (e) {
  show_results($(this), $("#multi_brand_stores"), 4);
});

$(document).on("click", "#mono_brand_stores .btn", function (e) {
  show_results($(this), $("#mono_brand_stores"), 4);
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(document).ready(function () {
  get_partners_by_loc();

  $("#select-state-dd")
    .select2({
      placeholder: "Select State",
    })
    .on("select2:selecting", function (e) {
      var state_id = e.params.args.data.id;

      $("#select-city-dd").html("");

      if (state_id) {
        $.ajax({
          type: "post",
          cache: false,
          url: "/site/components/get_cities",
          dataType: "json",
          data: {
            state_id,
          },
        }).done(function (data) {
          $("#select-city-dd").select2({
            placeholder: "Select City",
            data: data,
          });

          $("#select-city-dd").val("").trigger("change");
        });
      }
    });

  $("#select-city-dd")
    .select2({
      placeholder: "Select City",
    })
    .on("select2:selecting", function (e) {
      var city_id = e.params.args.data.id;
      var state_id = $("#select-state-dd").val();

      get_nearby_partner_stores_data(null, null, state_id, city_id, 5);
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

    $("html, body").animate(
      {
        scrollTop: $("section.locate-store").offset().top - 100,
      },
      500
    );
  });

  $(".location a").click(function (e) {
    e.preventDefault();
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

    $("html, body").animate(
      {
        scrollTop: $("section.locate-store").offset().top - 100,
      },
      500
    );
  });
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
