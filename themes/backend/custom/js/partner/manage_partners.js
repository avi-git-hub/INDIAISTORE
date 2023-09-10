$(document).ready(function () {
  $("#partner_table").DataTable({
    autoWidth: true,
    info: true,
    lengthChange: true,
    ordering: true,
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
// event handlers
// --------------------------------------------------
// static event binding
$("#partner_confirm_delete").on("click", ".btn-ok", function (e) {
  var $modalDiv = $(e.delegateTarget);
  var id = $(this).data("recordId");
  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    dataType: "json",
    type: "POST",
    url: base_url + "admin/partner/" + id + "/delete",
  });

  ajax_call.done(function (response, status) {
    console.log(response);
    if (response.status) {
      alert(response.message);
      window.location.reload();
    } else {
      alert(response.message);
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
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
$("#partner_confirm_delete").on("show.bs.modal", function (e) {
  var data = $(e.relatedTarget).data();

  $(".title", this).text(data.recordTitle);

  $(".btn-ok", this).data("recordId", data.recordId);
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------
