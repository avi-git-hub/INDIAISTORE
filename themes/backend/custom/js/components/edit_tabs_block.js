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
      <input type="hidden" name="tab[${next_tab_id}][detail_id]" id="tab[${next_tab_id}][detail_id]" value="" />

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

              <label class="custom-file-label">Choose file</label>

              <small class="form-text text-muted">image dimensions should be (1366 x 616)</small>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 tab_content_wrapper d-none">
          <div class="form-group">
            <label for="tab[${next_tab_id}][content_banner_d]">Banner Desktop Image</label>

            <div class="custom-file">
              <input type="file" class="custom-file-input" name="tab[${next_tab_id}][content_banner_d]" id="tab[${next_tab_id}][content_banner_d]" value="" accept="image/jpeg, image/png">

              <label class="custom-file-label">Choose file</label>

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

function get_details_of_tabs() {
  var base_url = $("base").attr("href");
  var tb_id = $("#btn_submit_form").data("tb-id");

  var ajax_call = $.ajax({
    type: "POST",
    url: base_url + "admin/components/tabs-block/get-tabs-data",
    data: {
      type: "ajax",
      tb_id: tb_id,
    },
    dataType: "json",
  });

  ajax_call.done(function (response, status) {
    var tab_block_data = response[0];

    $("#tb_section_title").val(tab_block_data.section_title).trigger("change");

    $("#tb_section_slug").val(tab_block_data.section_slug).trigger("change");

    $("#tb_section_desc").val(tab_block_data.section_desc);

    $("#tb_section_for").val(tab_block_data.section_for).trigger("change");

    if (tab_block_data.section_for == "Category") {
      $("#tb_section_for_category").val(tab_block_data.category_id).trigger("change");
    } else if (tab_block_data.section_for == "Product") {
      $("#tb_section_for_product").val(tab_block_data.product_id).trigger("change");
    }

    var tabs_count = response.length;
    var i = 1;

    for (i; i <= tabs_count; i++) {
      $("#btn_add_new_tab").trigger("click");

      $("[name='tab[" + i + "][detail_id]']").val(response[i - 1].tb_detail_id);

      $("[name='tab[" + i + "][title]']")
        .val(response[i - 1].tab_title)
        .trigger("change");

      $("[name='tab[" + i + "][content_type]']")
        .val(response[i - 1].tab_content_type)
        .trigger("change");

      $("[name='tab[" + i + "][status]']")
        .val(response[i - 1].status)
        .prop("checked", response[i - 1].status == "1" ? true : false);

      if (response[i - 1].tab_content_type == "banner-upload") {
        var download_or_backup_link_m =
          '<a href="' + response[i - 1].banner_upload_mob + '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';

        $("label[for='tab[" + i + "][content_banner_m]']").after(download_or_backup_link_m);

        var download_or_backup_link_d =
          '<a href="' + response[i - 1].banner_upload_dex + '" target="_blank" class="float-right text-success" download><strong>Download/Backup</strong></a>';

        $("label[for='tab[" + i + "][content_banner_d]']").after(download_or_backup_link_d);
      } else if (response[i - 1].tab_content_type == "custom-html") {
        $("textarea[name='tab[" + i + "][content_html]']").summernote("code", response[i - 1].custom_html);
      }
    }

    if ($("input[data-bootstrap-switch]").length > 0) {
      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch("state", $(this).prop("checked"));
      });
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
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
  var tb_id = $("#btn_submit_form").attr("data-tb-id");

  var ajax_call = $.ajax({
    type: "POST",
    url: base_url + "admin/components/tabs-block/" + tb_id + "/edit",
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
  // load_new_tab();

  get_details_of_tabs();
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
