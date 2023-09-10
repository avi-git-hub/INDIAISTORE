$(function () {
  $("#acc_table").DataTable({
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

$("#acc_confirm_delete").on("show.bs.modal", function (e) {
  var data = $(e.relatedTarget).data();

  $(".title", this).text(data.recordTitle);

  $(".btn-ok", this).data("recordId", data.recordId);
  $(".btn-ok", this).data("positionId", data.positionId);
});

$("#acc_confirm_delete").on("click", ".btn-ok", function (e) {
  var $modalDiv = $(e.delegateTarget);
  var acc_id = $(this).data("recordId");

  var ajax_call = $.ajax({
    cache: false,
    contentType: false,
    dataType: "json",
    processData: false,
    type: "POST",
    url: "/admin/accessory/" + acc_id + "/delete",
  });

  ajax_call.done(function (response, status) {
    //if (response.status == true) {
    alert(response.message);

    window.location.reload();
    // } else {
    //  alert(response.message);
    //  window.location.reload();
    // }
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
