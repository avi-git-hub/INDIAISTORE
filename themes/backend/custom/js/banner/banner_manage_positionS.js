$(document).ready(function () {
  const bannerPositionName = $("#banner_position_name");
  const bannerPositionSlug = $("#banner_position_slug");

  bannerPositionName.on("keyup change", function () {
    let slugString = convertToSlug(this.value);
    bannerPositionSlug.val(slugString);
  });

  // CODE:to avoid resubmitting form on refreshing
  //   if (window.history.replaceState) {
  //     window.history.replaceState(null, null, window.location.href);
  //   }

  $("#banner_manage_table").DataTable({
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
    responsive: true,
    lengthMenu: [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, "All"],
    ],
  });

  $("#banner_manage_positions_table").DataTable({
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: true,
    responsive: true,
    lengthMenu: [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, "All"],
    ],
  });

  $("#banner_position_confirm_delete").on("click", ".btn-ok", function (e) {
    var $modalDiv = $(e.delegateTarget);
    var id = $(this).data("recordId");

    $.ajax({
      cache: false,
      contentType: false,
      dataType: "json",
      processData: false,
      type: "POST",
      url: "/admin/banner/position/delete/" + id,
      success: function (response) {
        if (response.status == true) {
          alert(response.message);
          window.location.reload();
        } else {
          alert(response.message);
          window.location.reload();
        }
      },
      error: function (error) {
        alert("Something went wrong!");
        window.location.reload();
      },
    });

    $modalDiv.addClass("loading");
    setTimeout(function () {
      $modalDiv.modal("hide").removeClass("loading");
    }, 1000);
  });

  $("#banner_position_confirm_delete").on("show.bs.modal", function (e) {
    var data = $(e.relatedTarget).data();
    $(".title", this).text(data.recordTitle);
    $(".btn-ok", this).data("recordId", data.recordId);
  });
});

function convertToSlug(string) {
  return string
    .toLowerCase()
    .replace(/[^\w ]+/g, "")
    .replace(/ +/g, "-");
}
