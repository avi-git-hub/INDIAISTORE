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
