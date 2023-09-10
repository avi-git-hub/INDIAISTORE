// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("#banner_is_external_cta").on("change", function (e) {
  if ($("#banner_is_external_cta").is(":checked")) {
    $("#banner_cta").prop("required", true);
  } else {
    $("#banner_cta").prop("required", false);
  }
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  // custom file input
  bsCustomFileInput.init();

  /* date picker start */

  const date_format_string = "YYYY-MM-DD hh:mm:ss";

  $("#banner_start_date,#banner_end_date").daterangepicker({
    timePicker: true,
    singleDatePicker: true,
    minDate: moment(),
    autoUpdateInput: false,
    locale: {
      format: date_format_string,
    },
  });

  $("#banner_start_date,#banner_end_date").on("cancel.daterangepicker", function (ev, picker) {
    $(this).val("");
    if ($("#banner_end_date").val()) {
      $("#banner_start_date").prop("required", true);
    } else {
      $("#banner_start_date").prop("required", false);
    }
  });

  $("#banner_start_date").on("apply.daterangepicker", function (ev, picker) {
    $(this).val(picker.startDate.format(date_format_string));
  });

  $("#banner_end_date").on("apply.daterangepicker", function (ev, picker) {
    $(this).val(picker.startDate.format(date_format_string));
    if ($("#banner_end_date").val()) {
      $("#banner_start_date").prop("required", true);
      if (picker.startDate._d.getTime() <= $("#banner_start_date").data("daterangepicker").startDate._d.getTime()) {
        alert("Banner End Date should be greater than Banner Start Date");
        $(this).val("");

        return false;
      }
    } else {
      $("#banner_start_date").prop("required", false);
    }
  });
  /* date picker end */

  $("#banner_is_regional").is(":checked") ? $("#banner_regions").prop("disabled", false) : $("#banner_regions").prop("disabled", true);

  $("#banner_is_regional").on("switchChange.bootstrapSwitch", function () {
    $("#banner_regions").next().html("");

    var region = $("#banner_regions");

    region.attr("disabled") ? region.prop("disabled", false) : region.prop("disabled", "disabled");

    // region.attr("required") ? region.prop("required", false) : region.prop("required", true);
  });

  /* if (!$("#banner_type").is(":checked")) {
    $("#banner_image_section").hide();
    $("#banner_video_section").show();

    $("#banner_image_mobile,#banner_image_desktop").prop("required", false);
    $("#banner_video_url").prop("required", true);
  }

  $("#banner_type").on("switchChange.bootstrapSwitch", function () {
    var image = $("#banner_image_section");
    var video = $("#banner_video_section");

    video.slideToggle();
    image.slideToggle();

    var checked = $(this).is(":checked");

    $("#banner_image_mobile,#banner_image_desktop").prop("required", checked);
    $("#banner_video_url").prop("required", !checked);
  }); */
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
