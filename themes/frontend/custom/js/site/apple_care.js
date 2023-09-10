$("#field_apple_care_prod").on("change", function (e) {
  var selected_product = $(this).val();

  $("#field_apple_care_storage").html("").append('<option value="">*Storage</option>');

  $("#field_apple_care_mrp").val("*AppleCare MRP");

  if (selected_product == "") {
    $(this).prop("selectedIndex", 0);
    $("#field_apple_care_storage").prop("selectedIndex", 0);
    $("#field_apple_care_mrp").prop("selectedIndex", 0);
  }

  if (selected_product != "") {
    get_storage_for_product(selected_product);
  }
});

$("#field_apple_care_storage").on("change", function (e) {
  var selected_storage = $(this).val();
  var selected_product = $("#field_apple_care_prod").val();

  if (selected_product != "" && selected_storage != "") {
    get_mrp_for_product(selected_product, selected_storage);
  }
});

function get_storage_for_product(selected_product, selected_storage) {
  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    data: {
      selected_product,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "site/apple-care-get-storage-for-product",
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var storage = response.data;
      var i = 0,
        storage_count = storage.length;

      for (i; i < storage_count; i++) {
        $("#field_apple_care_storage").append('<option value="' + storage[i].storage + '">' + storage[i].storage + "</option>");
      }
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
}

function get_mrp_for_product(selected_product, selected_storage) {
  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    data: {
      selected_product,
      selected_storage,
    },
    dataType: "json",
    type: "POST",
    url: base_url + "site/apple-care-get-mrp-for-product",
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var mrp = response.data;

      $("#field_apple_care_mrp").val("₹" + mrp.mrp + "*");
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
}
