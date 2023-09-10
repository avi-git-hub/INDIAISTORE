//Compare Module

$(".product-selector")
  .each(function () {
    $(this).data("__old", this.value);
  })
  .change(function () {
    var $this = $(this),
      value = $this.val(),
      oldValue = $this.data("__old"),
      col = $this.attr("id").replace("product-col-", ""),
      dupe,
      dupeCol;

    dupe = $(".product-selector")
      .not(this)
      .filter(function () {
        return this.value == value;
      });

    if (dupe.length) {
      dupe.val(oldValue).data("__old", oldValue);
      dupeCol = dupe.attr("id").replace("product-col-", "");
      $(".product-col").removeClass("compare-col-" + dupeCol);
      $("#" + oldValue).addClass("compare-col-" + dupeCol);
    }

    $(".product-col").removeClass("compare-col-" + col);
    $("#" + value).addClass("compare-col-" + col);
    $this.data("__old", value);
  });

var query = window.location.search;

$(function () {
  if (query) {
    var products = query.toLowerCase().replace("?", "").split("-vs-");
    products.forEach(function (value, key) {
      $("#product-col-" + (key + 1) + " option")
        .filter(function (i, e) {
          if (value == "iphone-se") value = "iphone-se-2nd-generation";
          return $(e).data("value").replace(/_/g, "-").toLowerCase() == value;
        })
        .attr("selected", "selected")
        .trigger("change");
    });
  }

  $(document).on("change", ".product-selector", function (e) {
    const prod1 = $("#product-col-1 option:selected").text();
    const prod2 = $("#product-col-2 option:selected").text();
    const prod3 = $("#product-col-3 option:selected").text();
    ga("send", {
      hitType: "event",
      eventCategory: "Dropdown",
      eventAction: "Select",
      eventLabel: `Compare (${prod1},${prod2},${prod3})`,
    });
  });
});
