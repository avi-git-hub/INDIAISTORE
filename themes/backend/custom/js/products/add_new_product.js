// --------------------------------------------------
// function definitions
// --------------------------------------------------
String.prototype.capitalize = function () {
  return this.charAt(0).toUpperCase() + this.slice(1);
}

function get_applicable_features(cat_id) {
  if ($("#product_category").val() == "") {
    $(".applicable_features").addClass("d-none");
    $("#applicable_features").empty();
  } else {
    var base_url = $("base").attr("href");

    var ajax_call = $.ajax({
      cache: false,
      data: {
        product_category_id: cat_id,
      },
      dataType: "json",
      type: "POST",
      url: base_url + "admin/product/get-applicable-features",
    });

    ajax_call.done(function (response, status) {
      if (response.status == true) {
        var applicable_features_data = response.info.applicable_features_data;
        var feat_identifier = "", feat_name = "", feat_value_title = "";
        var i, feat_values_count = 0;
        var feature_data_markup = ``;

        for (const [feature, feature_values] of Object.entries(applicable_features_data)) {
          if (feature == "product-color")  {
            feat_identifier = feature.replace(/-/g, "_");
          } else {
            feat_identifier = "product_" + feature.replace(/-/g, "_");
          }
          
          feat_name = (feature == "ram") ? "RAM" : capitalize(feature.replace(/-/g, " "));

          feature_data_markup += `<div class="col-sm-4">
            <div class="form-group">
              <label for="${feat_identifier}">${feat_name}</label>

              <select class="form-control select2bs4" name="${feat_identifier}[]" id="${feat_identifier}" data-placeholder="Select" multiple>
                <option value="">Select</option>`;

          i = 0;
          feat_values_count = feature_values.length;

          for (i; i < feat_values_count; i++) {
            feat_value_id = feature_values[i].feat_id;
            feat_value_title = feature_values[i].feat_title;

            feature_data_markup += `<option value="${feat_value_id}">${feat_value_title}</option>`;
          }

          feature_data_markup += `</select>
            </div>
          </div>`;
        }

        $("#applicable_features")
          .empty()
          .html(feature_data_markup);

        // initialize select2 elements
        $(".select2bs4").select2({
          theme: 'bootstrap4'
        });

        $(".applicable_features").removeClass("d-none");
      }
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error, });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error, });
    });
  }
}

function get_products_to_compare_with(cat_id) {
  if ($("#product_category").val() == "") {
    $(".product_compare_with").addClass("d-none");
    $("#product_compare_with").find("options").remove();

    $("#product_compare_with").select2({
      placeholder: "Select or Type in",
      theme: "bootstrap4",
    });
  } else {
    var base_url = $("base").attr("href");

    var ajax_call = $.ajax({
      cache: false,
      data: {
        product_category_id: cat_id,
      },
      dataType: "json",
      type: "POST",
      url: base_url + "admin/product/get-products-to-compare-with",
    });

    ajax_call.done(function (response, status) {
      if (response.status == true) {
        if (typeof response.info.products_to_compare_with != "undefined") {
          var prods_to_compare_with = response.info.products_to_compare_with;
          var prods_count = prods_to_compare_with.length;
          var i = 0;

          var $product_compare_with = $("#product_compare_with");
          var option = "";

          for (i; i < prods_count; i++) {
            option = $("<option>")
              .val(prods_to_compare_with[i].prod_id)
              .text(prods_to_compare_with[i].prod_name);

            $product_compare_with.append(option);
          }

          $("#product_compare_with").select2({
            placeholder: "Select or Type in",
            theme: "bootstrap4",
          });

          $(".product_compare_with").removeClass("d-none");
        }
      }
    });

    ajax_call.fail(function (data, status, error) {
      console.log({ data: data, status: status, error: error, });
    });

    ajax_call.always(function (data, status, error) {
      // console.log({ data: data, status: status, error: error, });
    });
  }
}
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// static event binding
$("#product_name").on("keyup change", function () {
  $("#product_slug").val(convertToSlug($(this).val()));
});

$("#product_category").on("change", function () {
  var cat_id = $(this).val();

  get_applicable_features(cat_id);

  get_products_to_compare_with(cat_id);
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

  $(".wysiwyg").summernote();
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
