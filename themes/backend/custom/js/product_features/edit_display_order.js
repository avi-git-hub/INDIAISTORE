// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("#save_feat_cat_val_display_order").on("click", function (e) {
  e.preventDefault();

  $(this).prop("disabled", true);

  var base_url = $("base").attr("href");
  var feat_cat_id = $(this).data("feat-cat-id");
  var prod_feat = $("#display_order").sortable("toArray");
  var feat_ids_in_order = [];
  var i;

  for (i in prod_feat) {
    feat_ids_in_order.push(parseInt(prod_feat[i].split("_").pop()));
  }

  var ajax_call = $.ajax({
    cache: false,
    data: {
      feat_order_data: feat_ids_in_order,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "admin/product-feature/category/edit-display-order/" + feat_cat_id,
  });

  ajax_call.done(function (response, status) {
    setTimeout(function () {
      window.location.href = base_url + "admin/product-feature/category/" + feat_cat_id;

      $("#save_feat_cat_val_display_order").prop("disabled", false);
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
