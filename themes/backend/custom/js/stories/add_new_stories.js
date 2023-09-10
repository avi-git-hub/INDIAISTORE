$("#story_name").on("keyup change", function () {
    $("#story_slug").val(convertToSlug($(this).val()));
  });