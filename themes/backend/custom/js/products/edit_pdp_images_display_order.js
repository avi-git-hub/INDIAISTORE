// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("#save_pdp_img_display_order").on("click", function (e) {
  e.preventDefault();

  $(this).prop("disabled", true);

  var base_url = $("base").attr("href");
  var prod_id = $(this).data("prod-id");
  var pdp_set_id = $(this).data("pdp-set-id");
  var pdp = $("#display_order").sortable("toArray");
  var pdp_order = [];
  var i;

  for (i in pdp) {
    pdp_order.push(parseInt(pdp[i].split("_").pop()));
  }

  var ajax_call = $.ajax({
    cache: false,
    data: {
      pdp_order_data: pdp_order,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "admin/product/" + prod_id + "/pdp-image-set/" + pdp_set_id + "/edit-display-order",
  });

  ajax_call.done(function (response, status) {
    setTimeout(function () {
      $("#save_pdp_img_display_order").prop("disabled", false);

      window.location.href = base_url + "admin/product/" + prod_id + "/pdp-image-sets/";
    }, 500);
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });

    $("#save_pdp_img_display_order").prop("disabled", false);
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  $("#display_order").sortable().disableSelection();

  $("#display_order").css("cursor", "pointer");
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
