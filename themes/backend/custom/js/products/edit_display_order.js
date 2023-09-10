/* $(function () {
 $("#tbl_cat_display_order").sortable();
 
 // for disabling text being selected on the draggable element.
 }); */

$(function () {
  $("#display_order")
    .sortable()
    .disableSelection();

  $("#display_order").css("cursor", "pointer");

  $("#save_cat_display_order").on("click", function (e) {
    e.preventDefault();

    $("#save_cat_display_order").prop("disabled", true);

    var products = $("#display_order").sortable("toArray");
    var product_ids_in_order = [];
    var i;

    for (i in products) {
      product_ids_in_order.push(parseInt(products[i].split("_").pop()));
    }

    var base_url = $("base").attr("href");

    var ajax_call = $.ajax({
      cache: false,
      data: {
        products_order_data: product_ids_in_order,
      },
      dataType: "json",
      type: "POST",
      url: base_url + "admin/products/edit-display-order",
    });

    ajax_call.done(function (response, status) {
      var $alert = $(".alert");

      if (response.status == true) {
        $alert.addClass("alert-success");

        $alert.text(response.message).removeClass("d-none");

        setTimeout(function () {
          window.location.reload();
        }, 2000);
      } else {
        $alert.addClass("alert-danger");

        $alert.text(response.message).removeClass("d-none");
      }
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error, });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error, });

      $("#btn_submit_form").prop("disabled", false);
    });
  });
});