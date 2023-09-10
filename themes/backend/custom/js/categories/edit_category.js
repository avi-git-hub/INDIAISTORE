// --------------------------------------------------
// function definitions
// --------------------------------------------------
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("#category_name").on("keyup change", function () {
  $("#category_slug").val(convertToSlug($(this).val()));
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

  // initialize select2 elements
  $(".select2bs4").select2({
    theme: "bootstrap4"
  });

  $("#category_trending_products").select2({
    maximumSelectionLength: 2,
    theme: "bootstrap4",
  });

  $("#category_description").summernote();
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
