$("#acc_name").on("keyup change", function () {
  $("#acc_slug").val(convertToSlug($(this).val()));
});

$(function () {
  bsCustomFileInput.init();
});

let color_count = 2;
$(document).on("click", "#add_new_color", function (e) {
  e.preventDefault();

  let html = `<section class="add_color_image_section">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" maxlength="10" name="acc_color_name[${color_count}]" placeholder="Enter color name" class="acc_color_name form-control">
                            <div class="error-div"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" maxlength="10" name="acc_color_hex[${color_count}]" placeholder="Enter hex code for color" class="acc_color_hex form-control">
                            <div class="error-div"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="custom-file">
                                <label class="custom-file-label" for="acc_color_image">Choose file</label>
                                <input type="file" class="acc_color_image custom-file-input" name="acc_color_image_${color_count}" value="" accept="image/jpeg, image/png">
                                <div class="error-div"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <!--<label for="">Status</label>-->
                            <div class="form-inline">
                                <div class="form-group mr-2">
                                    <input type="checkbox" name="acc_color_status[${color_count}]" data-bootstrap-switch data-size="large" data-on-color="success" data-off-color="danger" data-on-text="Active" data-off-text="Inactive" value="1" checked="checked">
                                </div>
                                <div class="form-group ml-auto">
                                    <button class="btn btn-danger delete-color-row"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>`;
  $(".section-2").append(html);
  color_count++;
  bsCustomFileInput.init();

  if ($("input[data-bootstrap-switch]").length > 0) {
    $("input[data-bootstrap-switch]").each(function () {
      $(this).bootstrapSwitch("state", $(this).prop("checked"));
    });
  }
});

$(document).on("click", ".delete-color-row", function (e) {
  $(this).closest("section").remove();
});

$(document).on("submit", "#acc_form", function (e) {
  e.preventDefault();

  var formData = new FormData($("#acc_form")[0]);

  const ajax_call = $.ajax({
    cache: false,
    contentType: false,
    data: formData,
    processData: false,
    type: "POST",
    url: "/admin/accessory/add-new",
  });

  ajax_call.done(function (response, status) {
    if (response.status) {
      alert(response.message);
      window.location.href = "admin/accessories";
    } else {
      $(".error-div").html("");
      if (response.errors) {
        $.each(response.errors, function (key, value) {
          if (value) {
            $("[name='" + key + "']")
              .parents(".form-group")
              .find(".error-div")
              .addClass("text-danger")
              .html(`<small>${value}</small>`);
          }
        });
      } else {
        if (response.message) alert(response.message);
        else window.location.href = "admin/accessories";
      }
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });

    $("#btn_pdp_set_submit").prop("disabled", false);
  });
});

$(document).on("change", "#acc_category", function (e) {
  // e.preventDefault();

  const cat_id = $(this).find("option:selected").val();

  const ajax_call = $.ajax({
    cache: false,
    contentType: false,
    processData: false,
    type: "POST",
    url: "/admin/accessory/get_prods_by_cat_id/" + cat_id,
  });

  ajax_call.done(function (response, status) {
    //add my tags object
    const attr_tags_input = $("#acc_attr_model_value");

    $("#acc_attr_model_name").val("Model");

    if (response.status) {
      attr_tags_input.html("");
      for (const prod of response.data) {
        attr_tags_input.append(`<option value="${prod.prod_name}" selected=selected>${prod.prod_name}</option>`);
      }
      attr_tags_input.focus();
      $("#acc_category").focus();
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
});

let attribute_count = 2;
$(document).on("click", "#add_new_attribute", function (e) {
  e.preventDefault();

  let html = `<section class="add_attribute_section">
              <div class="row">
                  <div class="col-md-2">
                      <div class="form-group">
                          <input type="text" maxlength="50" name="acc_attr_name[${attribute_count}]" placeholder="Enter attribute name" class="acc_attr_name form-control">
                          <div class="error-div"></div>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="form-group">
                          <select class="form-control acc_tags_input" name="acc_attr_value[${attribute_count}][]" multiple></select>
                          <div class="error-div"></div>
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group mx-auto">
                          <button class="btn btn-danger delete-attr-row"><i class="fa fa-trash"></i></button>
                      </div>
                  </div>
              </div>
          </section>
      </section>`;

  $(".section-3").append(html);
  attribute_count++;

  $(".acc_tags_input").last().select2({
    theme: "bootstrap4",
    allowClear: true,
    placeholder: true,
    tags: true,
  });
});

$(document).on("click", ".delete-attr-row", function (e) {
  $(this).closest("section").remove();
});

$(function () {
  $("#acc_attr_model_value").select2({
    theme: "bootstrap4",
    allowClear: true,
    placeholder: true,
    tags: true,
  });
});
