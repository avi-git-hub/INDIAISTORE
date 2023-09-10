$(function () {
  // CODE:to avoid resubmitting form on refreshing
  // if (window.history.replaceState) {
  //   window.history.replaceState(null, null, window.location.href);
  // }

  $("#tbl_tabs_blocks").DataTable({
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

  $("#tabs_block_confirm_delete").on("click", ".btn-ok", function (e) {
    var $modalDiv = $(e.delegateTarget);

    $modalDiv.addClass("loading");

    var base_url = $("base").attr("href");
    var id = $(this).data("recordId");

    var ajax_call = $.ajax({
      type: "POST",
      url: base_url + "admin/components/tabs-block/" + id + "/delete",
      dataType: "json",
      cache: false,
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

      setTimeout(function () {
        $modalDiv
          .modal("hide")
          .removeClass("loading");
      }, 1000);
    });
  });

  $("#tabs_block_confirm_delete").on("show.bs.modal", function (e) {
    var data = $(e.relatedTarget).data();

    console.log(data.recordTitle);
    
    $(".title", this).text(data.recordTitle);

    $(".btn-ok", this).data("recordId", data.recordId);
  });
});