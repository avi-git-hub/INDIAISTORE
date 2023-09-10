"use strict";

var base_url = $("body").attr("data-base-url");

function get_loan_amount(partner, product, storage, color) {
  var price = {};

  var ajax_data = {
    partner: partner,
    product: product,
    storage: storage,
    color: color
  };

  $.ajax({
    async: false,
    data: ajax_data,
    dataType: "json",
    type: "get",
    url: base_url + "home/get_loan_amount",
    success: function success(response) {
      if (response.status === true) {
        price.loan_amount = response.data.loan_amount;
      }
    }
  });

  return price;
}

$(document).on("change", ".factor_for_calc", function (e) {
  e.preventDefault();

  var elem_id = $(this).attr("id");
  var elem_val = $(this).val();

  var chosen_partner, chosen_product, chosen_storage, chosen_color;

  if (elem_id == "field_epc_partner") {
    if (elem_val !== "") {
      chosen_partner = $.trim($("#field_epc_partner").val());
    } else {
      $("#field_epc_product").empty().append($("<option>", {
        value: "",
        text: "Select Product"
      }));

      $("#field_epc_storage").empty().append($("<option>", {
        value: "",
        text: "Select Storage"
      }));

      $("#field_epc_color").empty().append($("<option>", {
        value: "",
        text: "Select Color"
      }));
    }
  }

  if (elem_id == "field_epc_product") {
    if (elem_val !== "") {
      chosen_product = $.trim($("#field_epc_product").val());

      $.ajax({
        data: {
          product: chosen_product,
          tbl: epc_tbl
        },
        dataType: "json",
        type: "get",
        url: base_url + "home/get_storages_data_for_product",
        success: function success(response) {
          var i = 1,
              no_of_storages = response.length;

          $("#field_epc_storage").empty().append($("<option>", {
            value: "",
            text: "Select Storage"
          }));

          $("#field_epc_color").empty().append($("<option>", {
            value: "",
            text: "Select Color"
          }));

          for (i; i <= no_of_storages; i++) {
            var option = $("<option>", {
              value: response[i - 1].prod_storage,
              text: response[i - 1].prod_storage
            });

            $("#field_epc_storage").append(option);
          }
        }
      });
    } else {
      $("#field_epc_storage").empty().append($("<option>", {
        value: "",
        text: "Select Storage"
      }));

      $("#field_epc_color").empty().append($("<option>", {
        value: "",
        text: "Select Color"
      }));
    }
  }

  if (elem_id == "field_epc_storage") {
    if (elem_val !== "") {
      chosen_product = $.trim($("#field_epc_product").val());
      chosen_storage = $.trim($("#field_epc_storage").val());

      $.ajax({
        data: {
          product: chosen_product,
          storage: chosen_storage,
          tbl: epc_tbl
        },
        dataType: "json",
        type: "get",
        url: base_url + "home/get_colors_data_for_product",
        success: function success(response) {
          var i = 1,
              no_of_colors = response.length;

          $("#field_epc_color").empty().append($("<option>", {
            value: "",
            text: "Select Color"
          }));

          for (i; i <= no_of_colors; i++) {
            var option = $("<option>", {
              value: response[i - 1].prod_color,
              text: response[i - 1].prod_color
            });

            $("#field_epc_color").append(option);
          }
        }
      });
    } else {
      $("#field_epc_color").empty().append($("<option>", {
        value: "",
        text: "Select Color"
      }));
    }
  }

  if (elem_id == "field_epc_color") {
    if (elem_val !== "") {
      chosen_product = $.trim($("#field_epc_product").val());
      chosen_storage = $.trim($("#field_epc_storage").val());
      chosen_color = $.trim($("#field_epc_color").val());
    }
  }

  var required_fields_set = true;

  $(".factor_for_calc").each(function () {
    if ($.trim($(this).val()) == "") {
      required_fields_set = false;

      return false;
    }
  });

  if (required_fields_set) {
    var price = get_loan_amount(chosen_partner, chosen_product, chosen_color, chosen_storage);

    if (!$.isEmptyObject(price)) {
      $("#prod_loan_amount").find("span").html(price.loan_amount);
      $("#price_container").fadeIn(500);

      return true;
    } else {
      $("#price_container").fadeOut(500);

      return false;
    }
  } else {
    $("#price_container").fadeOut(500);

    return false;
  }
});