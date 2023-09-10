// --------------------------------------------------
// function definitions
// --------------------------------------------------
function load_new_tab() {
  var latest_tab = $("#tabs").children().last();
  var next_tab_id = latest_tab.length == 0 ? 1 : parseInt(latest_tab.data("tab-id")) + 1;

  var next_tab_markup = `<div class="card border" data-tab-id="${next_tab_id}">
    <div class="card-header">
      <h5 class="card-title">Tab ${next_tab_id}</h5>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="tab[${next_tab_id}][title]">Title</label>

            <input type="text" class="form-control" name="tab[${next_tab_id}][title]" id="tab[${next_tab_id}][title]" value="" placeholder="Enter the title for this tab" maxlength="100" minlength="1" />
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label for="tab[${next_tab_id}][content_type]">Content Type</label>

            <select class="form-control tb_tab_content_type" name="tab[${next_tab_id}][content_type]" id="tab[${next_tab_id}][content_type]">
              <option value="">Select Content Type</option>
              <option value="banner-upload">Banner Upload</option>
              <option value="custom-html">Custom HTML</option>
            </select>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group">
            <label for="tab[${next_tab_id}][status]">Status</label>

            <div>
              <input type="checkbox" name="tab[${next_tab_id}][status]" id="tab[${next_tab_id}][status]"
                     data-bootstrap-switch data-size="large"
                     data-on-color="success" data-off-color="danger"
                     data-on-text="Active" data-off-text="Inactive"
                     value="1" checked>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 tab_content_wrapper d-none">
          <div class="form-group">
            <label for="tab[${next_tab_id}][content_banner_m]">Banner Mobile Image</label>

            <div class="custom-file">
              <input type="file" class="custom-file-input" name="tab[${next_tab_id}][content_banner_m]" id="tab[${next_tab_id}][content_banner_m]" value="" accept="image/jpeg, image/png">

              <label class="custom-file-label" for="tab[${next_tab_id}][content_banner_m]">Choose file</label>

              <small class="form-text text-muted">image dimensions should be (1366 x 616)</small>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 tab_content_wrapper d-none">
          <div class="form-group">
            <label for="tab[${next_tab_id}][content_banner_d]">Banner Desktop Image</label>

            <div class="custom-file">
              <input type="file" class="custom-file-input" name="tab[${next_tab_id}][content_banner_d]" id="tab[${next_tab_id}][content_banner_d]" value="" accept="image/jpeg, image/png">

              <label class="custom-file-label" for="tab[${next_tab_id}][content_banner_d]">Choose file</label>

              <small class="form-text text-muted">image dimensions should be (1366 x 616)</small>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 tab_content_wrapper d-none">
          <div class="form-group">
            <label for="tab[${next_tab_id}][content_html]">Custom HTML</label>

            <textarea class="form-control tb_tab_content_html" name="tab[${next_tab_id}][content_html]" id="tab[${next_tab_id}][content_html]" placeholder="Enter description of the category"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>`;

  $("#tabs").append(next_tab_markup);

  if ($("input[data-bootstrap-switch]").length > 0) {
    $("input[data-bootstrap-switch]").each(function () {
      $(this).bootstrapSwitch("state", $(this).prop("checked"));
    });
  }

  // custom file input
  bsCustomFileInput.init();

  $(".tb_tab_content_html").summernote();
}
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// static event binding
$("#tb_section_title").on("keyup change", function () {
  $("#tb_section_slug").val(convertToSlug($(this).val()));
});

// static event binding
$("#tb_section_for").on("change", function (e) {
  e.preventDefault();

  $(".tb_section_for").addClass("d-none");

  if ($(this).val() == "Category") {
    $("#tb_section_for_category").closest(".tb_section_for").removeClass("d-none");
  } else if ($(this).val() == "Product") {
    $("#tb_section_for_product").closest(".tb_section_for").removeClass("d-none");
  }
});

// event delegation to closest static parent
// for an element which is dynamically generated
$("#tabs").on("change", ".tb_tab_content_type", function (e) {
  e.preventDefault();

  var tab_id = $(this).closest(".card").data("tab-id");

  var $tab_content_banner_m = $("input[name='tab[" + tab_id + "][content_banner_m]']");
  var $tab_content_banner_d = $("input[name='tab[" + tab_id + "][content_banner_d]']");
  var $tab_content_html = $("textarea[name='tab[" + tab_id + "][content_html]']");

  $tab_content_banner_m.closest(".tab_content_wrapper").addClass("d-none");
  $tab_content_banner_d.closest(".tab_content_wrapper").addClass("d-none");
  $tab_content_html.closest(".tab_content_wrapper").addClass("d-none");

  // reset the file upload field mobile
  $tab_content_banner_m[0].value = "";
  $tab_content_banner_m[0].dispatchEvent(new Event("change"));

  // reset the file upload field desktop
  $tab_content_banner_d[0].value = "";
  $tab_content_banner_d[0].dispatchEvent(new Event("change"));

  // reset the text area summernote
  $tab_content_html.summernote("code", "");

  // removing the is valid class
  $tab_content_banner_m.removeClass("is-valid");
  $tab_content_banner_d.removeClass("is-valid");
  $tab_content_html.removeClass("is-valid");

  if ($(this).val() == "banner-upload") {
    $tab_content_banner_m.closest(".tab_content_wrapper").removeClass("d-none");
    $tab_content_banner_d.closest(".tab_content_wrapper").removeClass("d-none");
  } else if ($(this).val() == "custom-html") {
    $tab_content_html.closest(".tab_content_wrapper").removeClass("d-none");
  }
});

$("#btn_add_new_tab").on("click", function (e) {
  e.preventDefault();

  load_new_tab();
});

$("#frm_tabs_block").on("submit", function (e) {
  e.preventDefault();

  $("#btn_submit_form").prop("disabled", true);

  var base_url = $("base").attr("href");
  var form_data = new FormData(this);

  var ajax_call = $.ajax({
    type: "POST",
    url: base_url + "admin/components/tabs-block/add-new",
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
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });

    $("#btn_submit_form").prop("disabled", false);
  });
});

$("#frm_tabs_block").on("change", "input, select", function () {
  $(this).removeClass("is-invalid").addClass("is-valid");

  $(this).next().remove(".error");
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  load_new_tab();
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
