// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// static event binding
$("#product_variant_confirm_delete").on("click", ".btn-ok", function (e) {
  var $modalDiv = $(e.delegateTarget);
  var id = $(this).data("recordId");
  var base_url = $("base").attr("href");
  var prod_id = $(this).data("prodId");

  var ajax_call = $.ajax({
    cache: false,
    dataType: "json",
    type: "POST",
    url: base_url + "admin/product/" + prod_id + "/variant/" + id + "/delete",
  });

  ajax_call.done(function (response, status) {
    alert(response.message);

    window.location.reload();
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error, });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });

  $modalDiv.addClass("loading");

  setTimeout(function () {
    $modalDiv.modal("hide").removeClass("loading");
  }, 1000);
});

// static event binding
$("#product_variant_confirm_delete").on("show.bs.modal", function (e) {
  var data = $(e.relatedTarget).data();

  $(".title", this).text(data.recordTitle);

  $(".btn-ok", this).data("recordId", data.recordId);
  $(".btn-ok", this).data("prodId", data.prodId);
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  // CODE:to avoid resubmitting form on refreshing
  // if (window.history.replaceState) {
  //   window.history.replaceState(null, null, window.location.href);
  // }

  $("#tbl_products").DataTable({
    autoWidth: true,
    info: true,
    lengthChange: true,
    ordering: true,
    order: [[3, "desc"]], // descending sort by created_at
    lengthMenu: [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, "All"],
    ],
    paging: true,
    responsive: true,
    searching: true,
  });
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
