$("#route_name").on("keyup change", function () {
  $("#route_slug").val(convertToSlug($(this).val()));
});

// $(function () {
//   $(".wysiwyg").summernote();
// });
