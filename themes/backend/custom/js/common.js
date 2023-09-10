// --------------------------------------------------
// function definitions
// --------------------------------------------------
function convertToSlug(string) {
  return (
    string
      .toLowerCase()
      //.replace(/[^\w ]+/g, "")
      .replace(/[^a-zA-Z0-9_ -]+/g, "")
      .replace(/ +/g, "-")
  );
}

const capitalize = (s) => {
  if (typeof s != "string") {
    return "";
  }

  return s.charAt(0).toUpperCase() + s.slice(1);
};
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$("input[data-bootstrap-switch]").on("switchChange.bootstrapSwitch", function (event, state) {
  $(this).attr("checked", state);

  $(this).val(state == true ? "1" : "0");
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  if ($("input[data-bootstrap-switch]").length > 0) {
    $("input[data-bootstrap-switch]").each(function () {
      $(this).bootstrapSwitch("state", $(this).prop("checked"));
    });
  }
});
// --------------------------------------------------
// document ready
// --------------------------------------------------
