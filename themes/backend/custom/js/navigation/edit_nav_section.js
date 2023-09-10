$("#nav_section_name").on("keyup change", function () {
  $("#nav_section_slug").val(convertToSlug($(this).val()));
});

// $(function () {
// initialize select2 elements
$(".select2bs4").select2({
  theme: "bootstrap4",
  allowClear: true,
});
// });
