$(function () {
  bsCustomFileInput.init();
});

$("#upload_store_submit").on("click", function (e) {
  e.preventDefault();

  if ($("#uploaded_file").get(0).files.length === 0) {
    alert("No files selected.");
  } else {
    if (confirm("Do you want to submit?")) {
      $("#upload_store_form").submit();
      return true;
    } else {
      return false;
    }
  }
});

$("#store_confirm_delete").on("click", ".btn-ok", function (e) {
  var $modalDiv = $(e.delegateTarget);
  var id = $(this).data("recordId");

  $.ajax({
    cache: false,
    contentType: false,
    dataType: "json",
    processData: false,
    type: "POST",
    url: "/admin/store/delete/" + id,
    success: function (response) {
      if (response.status == true) {
        alert(response.message);
        storeTable.ajax.reload();
      } else {
        alert(response.message);
        storeTable.ajax.reload();
      }
    },
    error: function (error) {
      alert("Something went wrong!");
      storeTable.ajax.reload();
    },
  });

  $modalDiv.addClass("loading");
  setTimeout(function () {
    $modalDiv.modal("hide").removeClass("loading");
  }, 1000);
});

$("#store_confirm_delete").on("show.bs.modal", function (e) {
  var data = $(e.relatedTarget).data();
  $(".title", this).text(data.recordTitle);
  $(".btn-ok", this).data("recordId", data.recordId);
});

/* City select option starts */
var cityId = $("#field_city").val();

$("#field_state").on("change", function () {
  var stateId = $(this).val();

  $.ajax({
    url: "/admin/common/get_city_options",
    method: "post",
    data: { val: stateId },
    dataType: "json",
    success: function (responseData) {
      $("#field_city").empty();
      $("#field_city").append(
        $("<option></option>").val("").html("Select City")
      );
      $.each(responseData, function (i, p) {
        $("#field_city").append(
          $("<option></option>")
            .val(p.id)
            .html(p.name)
            .attr("selected", cityId == p.id)
        );
      });

      cityId = false;
    },
  });
});

if ($("#field_state").val() > 0) {
  $("#field_state").trigger("change");
}

/* City select option ends */
