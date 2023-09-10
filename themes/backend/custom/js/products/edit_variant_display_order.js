// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
 $("#save_prod_variant_display_order").on("click", function (e) {
  e.preventDefault();

  $(this).prop("disabled", true);

  var base_url = $("base").attr("href");
  var prod_id = $(this).data("prod-id");
  var prod_variants = $("#display_order").sortable("toArray");
  var prod_variant_ids_in_order = [];
  var i;

  for (i in prod_variants) {
    prod_variant_ids_in_order.push(parseInt(prod_variants[i].split("_").pop()));
  }

  var ajax_call = $.ajax({
    cache: false,
    data: {
      variants_order_data: prod_variant_ids_in_order,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "admin/product/" + prod_id + "/variants/edit-display-order",
  });

  ajax_call.done(function (response, status) {
    setTimeout(function () {
      $("#save_prod_variant_display_order").prop("disabled", false);

      window.location.href = base_url + "admin/product/" + prod_id + "/variants/";
    }, 500);
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error, });

    $("#save_prod_variant_display_order").prop("disabled", false);
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
  $("#display_order")
    .sortable()
    .disableSelection();

  $("#display_order").css("cursor", "pointer");
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
