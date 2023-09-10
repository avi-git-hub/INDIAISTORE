// --------------------------------------------------
// function definitions
// --------------------------------------------------
function generate_variant_slug() {
  var product = $("#product").val();
  var product_color = $("#product_color").val();
  var product_storage = $("#product_storage").val();
  var product_screen_size = $("#product_screen_size").val();
  var product_processor = $("#product_processor").val();
  var slug = "";

  if ($.inArray(product, ["", undefined]) == -1) {
    slug += product;

    $("#product_variant_slug").val(convertToSlug(slug));

    if ($.inArray(product_color, ["", undefined]) == -1) {
      slug += " " + product_color;

      $("#product_variant_slug").val(convertToSlug(slug));

      if ($.inArray(product_storage, ["", undefined]) == -1) {
        slug += " " + product_storage;

        $("#product_variant_slug").val(convertToSlug(slug));

        if ($.inArray(product_processor, ["", undefined]) == -1) {
          slug += " " + product_processor;

          $("#product_variant_slug").val(convertToSlug(slug));
        }
      }

      if ($.inArray(product_screen_size, ["", undefined]) == -1) {
        slug += " " + product_screen_size;

        $("#product_variant_slug").val(convertToSlug(slug));
      }
    }
  } else {
    $("#product_variant_slug").val("");
  }
}
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
// static event binding
$(".for_slug").on("change", function () {
  generate_variant_slug();
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  generate_variant_slug();
  $(".wysiwyg").summernote();
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
