// --------------------------------------------------
// function definitions
// --------------------------------------------------
function generate_pdp_set_slug() {
  var pdp_product = $.trim($("#pdp_product").val());
  var pdp_set_color = $.trim($("#pdp_set_color").val());

  var $pdp_set_slug = $("#pdp_set_slug");

  if (
    ($.inArray(pdp_product, ["", undefined]) == -1) &&
    ($.inArray(pdp_set_color, ["", undefined]) == -1)
  ) {
    $pdp_set_slug.val(convertToSlug(pdp_product + " " + pdp_set_color));
  } else {
    $pdp_set_slug.val("");
  }
}

function load_new_display_img() {
  var $pdp_images = $("#pdp_images");

  var latest_img = $pdp_images.children().last();
  var next_img_id = (latest_img.length == 0) ? 1 : parseInt(latest_img.data("img-id")) + 1;

  var img_id_identifier = `pdp_images[${next_img_id}][image_id]`;
  var img_identifier = `pdp_images[${next_img_id}][image]`;
  var img_status_identifier = `pdp_images[${next_img_id}][status]`;

  var next_img_markup = `<div class="row" data-img-id="${next_img_id}">
    <input type="hidden" name="${img_id_identifier}" value="" />

    <div class="col-sm-6">
      <div class="form-group">
        <label for="${img_identifier}">PDP Image ${next_img_id}</label>

        <div class="custom-file">
          <input type="file" class="custom-file-input" name="${img_identifier}" id="${img_identifier}" value="" multiple accept="image/jpeg, image/png">

          <label class="custom-file-label">Choose file</label>

          <small class="form-text text-muted">image dimensions should be (300 x 400)</small>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label for="${img_status_identifier}">Status</label>

        <div>
          <input type="checkbox" name="${img_status_identifier}" id="${img_status_identifier}"
            data-bootstrap-switch data-size="large"
            data-on-color="success" data-off-color="danger"
            data-on-text="Active" data-off-text="Inactive"
            value="1" checked>
        </div>
      </div>
    </div>`;

  if (next_img_id > 1) {
    next_img_markup += `<div class="col-sm-2">
      <div class="form-group">
        <label>&nbsp;</label>

        <button type="button" class="btn btn-danger d-block btn_remove_pdp_img" data-remove-img="${next_img_id}">
          <i class="fa fa-times"></i>
        </button>
      </div>
    </div>`;
  }

  next_img_markup += `</div>`;

  $pdp_images.append(next_img_markup);

  if ($("input[data-bootstrap-switch]").length > 0) {
    $("input[data-bootstrap-switch]").each(function () {
      $(this).bootstrapSwitch("state", $(this).prop("checked"));
    });
  }

  // custom file input
  bsCustomFileInput.init();
}

function get_pdp_set_data() {
  var base_url = $("base").attr("href");
  var pdp_prod_id = $.trim($("input[name='pdp_product_id']").val());
  var pdp_set_id = $.trim($("input[name='pdp_set_id']").val());

  var ajax_call = $.ajax({
    type: "POST",
    url: base_url + "admin/product/" + pdp_prod_id + "/pdp-image-set/" + pdp_set_id + "/get-data",
    dataType: "json",
  });

  ajax_call.done(function (response, status) {
    var pdp_set_data = response;

    $("#pdp_set_color")
      .val(pdp_set_data.pdp_set_color)
      .trigger("change");

    $("#pdp_set_slug")
      .val(pdp_set_data.pdp_set_slug)
      .trigger("change");

    $("#pdp_set_vid_id")
      .val(pdp_set_data.pdp_set_vid_id)
      .trigger("change");

    var pdp_images = pdp_set_data.pdp_images;
    var pdp_images_count = pdp_images.length;
    var i = 1;

    for (i; i <= pdp_images_count; i++) {
      $("#btn_add_new_pdp_img").trigger("click");

      $("[name='pdp_images[" + i + "][image_id]']").val(pdp_images[i - 1].prod_pdp_img_id);

      if (pdp_images[i - 1].pdp_img == "") {
        $("label[for='pdp_images[" + i + "][image]']").after('<span class="float-right text-danger"><strong>File Not Found!</strong>');
      } else {
        var upload_path = base_url + "files/uploads/products/pdp/" + pdp_images[i - 1].pdp_set_slug + "/";
        var img_url = upload_path + pdp_images[i - 1].pdp_img;
        var download_or_backup_link = '<a href="' + img_url + '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';

        $("label[for='pdp_images[" + i + "][image]']").after(download_or_backup_link);
      }
      $("[name='pdp_images[" + i + "][status]']")
        .val(pdp_images[i - 1].status)
        .prop("checked", (pdp_images[i - 1].status == "1") ? true : false);
    }

    if ($("input[data-bootstrap-switch]").length > 0) {
      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch("state", $(this).prop("checked"));
      });
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error, });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });

    $("#btn_pdp_set_submit").prop("disabled", false);
  });
}
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// static event binding
$("#pdp_set_color").on("change", function() {
  $("input[name='pdp_set_color_value']").val($(this).val());
});

$(".for_slug").on("change", function () {
  generate_pdp_set_slug();
});

$("#btn_add_new_pdp_img").on("click", function (e) {
  e.preventDefault();

  load_new_display_img();
});

// dynamic event binding
$("#pdp_images").on("click", ".btn_remove_pdp_img", function (e) {
  $(".row[data-img-id='" + $(this).data("remove-img") + "']").remove();
});

$("#frm_pdp_set").on("submit", function (e) {
  e.preventDefault();

  $("#btn_pdp_set_submit").prop("disabled", true);

  var base_url = $("base").attr("href");
  var form_data = new FormData(this);
  var pdp_prod_id = $.trim($("input[name='pdp_product_id']").val());
  var pdp_set_id = $.trim($("input[name='pdp_set_id']").val());

  var ajax_call = $.ajax({
    type: "POST",
    url: base_url + "admin/product/" + pdp_prod_id + "/pdp-image-set/" + pdp_set_id + "/edit",
    data: form_data,
    dataType: "json",
    processData: false,
    contentType: false,
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      window.location.replace(response.data.r_url);
    } else {
      $(".error").remove();

      $.each(response.data.validation_errors, function (key, value) {
        $("[name='" + key + "']")
          .addClass("is-invalid")
          .after(value);
      });
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error, });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });

    $("#btn_pdp_set_submit").prop("disabled", false);
  });
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  get_pdp_set_data();
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
