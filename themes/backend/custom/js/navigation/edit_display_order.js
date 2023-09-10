// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// static binding
$("#save_display_order").on("click", function (e) {
  e.preventDefault();

  $(this).prop("disabled", true);

  var nav_section_id = $(this).data("nav-section-id");
  var items = $("#display_order").sortable("toArray");
  var items_ids_in_order = [];
  var i;

  for (i in items) {
    items_ids_in_order.push(parseInt(items[i].split("_").pop()));
  }

  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    data: {
      items_order_data: items_ids_in_order,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "admin/navigation/section/" + nav_section_id + "/edit-display-order",
  });

  ajax_call.done(function (response, status) {
    var $alert = $(".alert");

    if (response.status == true) {
      setTimeout(function () {
        window.location.href = "admin/navigation/section/" + $("#nav_section_id").val();

        $("#save_display_order").prop("disabled", false);
      }, 2000);
    } else {
      $alert.addClass("alert-danger");

      $alert.text(response.message).removeClass("d-none");
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });

    $("#save_display_order").prop("disabled", false);
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
