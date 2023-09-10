// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("#story_is_external_cta").on("change", function (e) {
    if ($("#story_is_external_cta").is(":checked")) {
      $("#story_cta").prop("required", true);
    } else {
      $("#story_cta").prop("required", false);
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
  
    $("#story_start_date,#story_end_date").daterangepicker({
      timePicker: true,
      singleDatePicker: true,
      minDate: moment(),
      autoUpdateInput: false,
      locale: {
        format: date_format_string,
      },
    });
  
    $("#story_start_date,#story_end_date").on("cancel.daterangepicker", function (ev, picker) {
      $(this).val("");
      if ($("#story_end_date").val()) {
        $("#story_start_date").prop("required", true);
      } else {
        $("#story_start_date").prop("required", false);
      }
    });
  
    $("#story_start_date").on("apply.daterangepicker", function (ev, picker) {
      $(this).val(picker.startDate.format(date_format_string));
    });
  
    $("#story_end_date").on("apply.daterangepicker", function (ev, picker) {
      $(this).val(picker.startDate.format(date_format_string));
      if ($("#story_end_date").val()) {
        $("#story_start_date").prop("required", true);
        if (picker.startDate._d.getTime() <= $("#story_start_date").data("daterangepicker").startDate._d.getTime()) {
          alert("Banner End Date should be greater than Banner Start Date");
          $(this).val("");
  
          return false;
        }
      } else {
        $("#story_start_date").prop("required", false);
      }
    });
    /* date picker end */
  
    $("#story_is_regional").is(":checked") ? $("#story_regions").prop("disabled", false) : $("#story_regions").prop("disabled", true);
  
    $("#story_is_regional").on("switchChange.bootstrapSwitch", function () {
      $("#story_regions").next().html("");
  
      var region = $("#story_regions");
  
      region.attr("disabled") ? region.prop("disabled", false) : region.prop("disabled", "disabled");
  
      // region.attr("required") ? region.prop("required", false) : region.prop("required", true);
    });
  
    /* if (!$("#story_type").is(":checked")) {
      $("#story_image_section").hide();
      $("#story_video_section").show();
  
      $("#story_image_mobile,#story_image_desktop").prop("required", false);
      $("#story_video_url").prop("required", true);
    }
  
    $("#story_type").on("switchChange.bootstrapSwitch", function () {
      var image = $("#story_image_section");
      var video = $("#story_video_section");
  
      video.slideToggle();
      image.slideToggle();
  
      var checked = $(this).is(":checked");
  
      $("#story_image_mobile,#story_image_desktop").prop("required", checked);
      $("#story_video_url").prop("required", !checked);
    }); */
  });
  // --------------------------------------------------
  // document ready
  // --------------------------------------------------
  