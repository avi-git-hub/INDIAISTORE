"use strict";

function get_emi_pricing(selected_product, selected_storage, selected_color) {
  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    data: {
      selected_product: selected_product,
      selected_storage: selected_storage,
      selected_color: selected_color
    },
    dataType: "json",
    type: "POST",
    url: base_url + "site/hsbc-offers-get-emi-pricing"
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var pricing = response.data;

      $("#mrp span").text("₹" + pricing.mrp);
      $("#loan_amnt span").text("₹" + pricing.loan_amount);
      $("#dffrd_pay span").text("₹" + pricing.deferred_payment_after_24_months);
      $("#effctve_monthly_cost span").text("₹" + pricing.effective_monthly_cost);
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
}

function get_storage_for_product(selected_product) {
  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    data: {
      selected_product: selected_product
    },
    dataType: "json",
    type: "POST",
    url: base_url + "site/hsbc-offers-get-storage-for-product"
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var storage = response.data;
      var i = 0,
          storage_count = storage.length;

      for (i; i < storage_count; i++) {
        $("#field_epc_storage").append('<option value="' + storage[i] + '">' + storage[i] + "</option>");
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

function get_color_for_product_storage(selected_product, selected_storage) {
  var base_url = $("base").attr("href");

  var ajax_call = $.ajax({
    cache: false,
    data: {
      selected_product: selected_product,
      selected_storage: selected_storage
    },
    dataType: "json",
    type: "POST",
    url: base_url + "site/hsbc-offers-get-colors-for-product-storage"
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var colors = response.data;
      var i = 0,
          colors_count = colors.length;

      for (i; i < colors_count; i++) {
        $("#field_epc_color").append('<option value="' + colors[i] + '">' + colors[i] + "</option>");
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

$("#field_epc_product").on("change", function (e) {
  var selected_product = $(this).val();

  $("#field_epc_storage").html("").append('<option value="">*Storage</option>');

  $("#field_epc_color").html("").append('<option value="">*Color</option>');

  $("#mrp span").text("--");
  $("#loan_amnt span").text("--");
  $("#dffrd_pay span").text("--");
  $("#effctve_monthly_cost span").text("--");

  if (selected_product == "") {
    $(this).prop("selectedIndex", 0);
    $("#field_epc_storage").prop("selectedIndex", 0);
    $("#field_epc_color").prop("selectedIndex", 0);
  }

  if (selected_product != "") {
    get_storage_for_product(selected_product);

    var selected_storage = $("#field_epc_storage").val();
    var selected_color = $("#field_epc_color").val();

    if (selected_product != "" && selected_storage != "" && selected_color != "") {
      get_emi_pricing(selected_product, selected_storage, selected_color);
    }
  }
});

$("#field_epc_storage").on("change", function (e) {
  var selected_product = $("#field_epc_product").val();
  var selected_storage = $(this).val();

  $("#field_epc_color").html("").append('<option value="">*Color</option>');

  $("#mrp span").text("--");
  $("#loan_amnt span").text("--");
  $("#dffrd_pay span").text("--");
  $("#effctve_monthly_cost span").text("--");

  if (selected_product == "") {
    $(this).prop("selectedIndex", 0);
    $("#field_epc_color").prop("selectedIndex", 0);
  }

  if (selected_product != "" && selected_storage != "") {
    get_color_for_product_storage(selected_product, selected_storage);

    var selected_color = $("#field_epc_color").val();

    if (selected_product != "" && selected_storage != "" && selected_color != "") {
      get_emi_pricing(selected_product, selected_storage, selected_color);
    }
  }
});

$("#field_epc_color").on("change", function (e) {
  var selected_color = $(this).val();

  $("#mrp span").text("--");
  $("#loan_amnt span").text("--");
  $("#dffrd_pay span").text("--");
  $("#effctve_monthly_cost span").text("--");

  if (selected_color == "") {
    $(this).prop("selectedIndex", 0);
  }

  if (selected_product != "" && selected_storage != "" && selected_color != "") {
    var selected_product = $("#field_epc_product").val();
    var selected_storage = $("#field_epc_storage").val();

    get_emi_pricing(selected_product, selected_storage, selected_color);
  }
});

$(".cta_load_more").on("click", function (e) {
  e.preventDefault();
  var pdf_path = $(this).data("pdf-path");

  if ($("#tnc").hasClass("in")) {
    var pdf_file = pdf_path + "HSBC-Offer-T-and-Cs.pdf";

    window.open(pdf_file, "_blank");
  }
});