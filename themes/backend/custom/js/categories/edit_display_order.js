// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("#category_name").on("keyup change", function () {
  $("#category_slug").val(convertToSlug($(this).val()));
});

$("#save_cat_display_order").on("click", function (e) {
  e.preventDefault();

  $(this).prop("disabled", true);

  var categories = $("#display_order").sortable("toArray");
  var categoryIdsInOrder = [];
  var i;

  for (i in categories) {
    categoryIdsInOrder.push(parseInt(categories[i].split("_").pop()));
  }

  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    data: {
      categoryOrderData: categoryIdsInOrder,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "admin/categories/edit-display-order",
  });

  ajax_call.done(function (response, status) {
    var $alert = $(".alert");

    if (response.status == true) {
      setTimeout(function () {
        window.location.href = base_url + "admin/categories/";

        $("#save_cat_display_order").prop("disabled", false);
      }, 500);
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

    $("#save_cat_display_order").prop("disabled", false);
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
