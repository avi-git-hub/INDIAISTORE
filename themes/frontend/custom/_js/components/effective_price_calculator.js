"use strict";

// --------------------------------------------------
// function definitions
// --------------------------------------------------
function get_product_pricing_for_epc() {
  /* $(".epc_mrp").html("--");
  $(".epc_effective_price").html("--");
  $(".epc_exchange_effective_price").html("--"); */

  var $epc = $(".effective-price-calculator:visible");
  var base_url = $("base").attr("href");
  var ajax_call;

  var selected_product = $epc.find(".model").filter(".selected").data("prod-slug");
  var selected_color = $epc.find(".color-item").filter(".selected").data("value");

  var selected_storage = $epc.find(".attribute").filter(".selected").data("value");

  if (selected_product != "" && selected_color != "") {
    var prod_variant_slug = selected_product + " " + selected_color;

    if ($epc.find(".selection.rect").children().length > 0) {
      var selected_attribute = $epc.find(".selection.rect").find(".attribute").filter(".selected").data("value");

      prod_variant_slug += " " + selected_attribute;
    }

    if ($.inArray(selected_product, ["imac-53cm", "imac-68cm", "macbook-pro-41cm-new", "macbook-pro-35cm-new", "studio-display","macbook-pro-m2-41cm","macbook-pro-m2","mac-mini-m2",,"mac-studio-m2"]) !== -1) {
      var selected_processor = $epc.find(".selection.processor").find(".attribute").filter(".selected").data("value");

      prod_variant_slug += " " + selected_processor;
    }

    prod_variant_slug = convert_to_slug(prod_variant_slug);

    ajax_call = $.ajax({
      cache: false,
      data: {
        product_variant_slug: prod_variant_slug
      },
      dataType: "json",
      type: "POST",
      url: base_url + "components/get-product-pricing-for-epc"
    });

    ajax_call.done(function (response, status) {
      if (response.status == true) {
        $epc.find(".epc_mrp").html(response.data.mrp).closest("tr").removeClass("d-none");
        $epc.find(".epc_mrp").css("color", "black");

        if (response.data.store_discount != "0") {
          $epc.find(".epc_store_discount").html(response.data.store_discount).closest("tr").removeClass("d-none");
          $epc.find(".epc_store_discount").closest("tr").find("small").html(response.data.store_discount_text);
          $epc.find(".epc_store_discount").css("color", "black");
          $epc.find(".epc_mrp").css("color", "#bfbfbf");
        } else {
          $epc.find(".epc_store_discount").closest("tr").addClass("d-none");
        }

        if (response.data.effective_price != "0") {
          $epc.find(".epc_effective_price").html(response.data.effective_price).closest("tr").removeClass("d-none");
          $epc.find(".epc_effective_price").closest("tr").find("small").html(response.data.effective_price_text);
          $epc.find(".epc_effective_price").css("color", "black");
          $epc.find(".epc_mrp,.epc_store_discount").css("color", "#bfbfbf");
        } else {
          $epc.find(".epc_effective_price").closest("tr").addClass("d-none");
        }

        if (response.data.exchange_effective_price != "0") {
          $epc.find(".epc_exchange_effective_price").html(response.data.exchange_effective_price).closest("tr").removeClass("d-none");
          $epc.find(".epc_exchange_effective_price").closest("tr").find("small").html(response.data.exchange_effective_price_text);
          $epc.find(".epc_exchange_effective_price").css("color", "black");
          $epc.find(".epc_mrp,.epc_store_discount,.epc_effective_price").css("color", "#bfbfbf");
        } else {
          $epc.find(".epc_exchange_effective_price").closest("tr").addClass("d-none");
        }

        if(selected_product == 'ipad-9th-generation'){
          $("#epc_exchange_effective_title_text").html("Effective Price");
      }

        if(selected_product == 'iphone-12'){
          if(selected_storage == '64gb'){
            console.log(1);
             $("#epc_effective_price_text").html('(After ₹3000* Instant Store Discount + ₹2000* Cashback)');
             $("#epc_exchange_effective_price_text").html('(After ₹3000* Instant Store Discount + ₹2000* Cashback + Exchange Bonus up to ₹3000*)<br>(Trade-in value of 20000 is calculated on the exchange value of iPhone 11, 64 GB in good condition*)'); 
          } else{
            console.log(2);
            $("#epc_effective_price_text").html('(After ₹5000* Instant Store Discount + ₹2000* Cashback)');
            $("#epc_exchange_effective_price_text").html('(After ₹5000* Instant Store Discount + ₹2000* Cashback + Exchange  Bonus up to ₹3000*)<br>(Trade-in value of 20000 is calculated on the exchange value of iPhone 11, 64 GB in good condition*)'); 
          }
      }

      if(selected_product == 'iphone-12'){
        if(selected_storage == '64gb'){
           $("#effectivepricetext").html('(After ₹3000* Instant Store Discount + ₹2000* Cashback)');
           $("#exchangeeffectivepricetext").html('(After ₹3000* Instant Store Discount + ₹2000* Cashback+ Exchange Bonus up to ₹3000*)<br>(Trade-in value of 20000 is calculated on the exchange value of iPhone 11, 64 GB in good condition*)'); 
        } else{
          $("#effectivepricetext").html('(After ₹5000* Instant Store Discount + ₹2000* Cashback)');
          $("#exchangeeffectivepricetext").html('(After ₹5000* Instant Store Discount + ₹2000* Cashback + Exchange  Bonus up to ₹3000*)<br>(Trade-in value of 20000 is calculated on the exchange value of iPhone 11, 64 GB in good condition*)'); 
        }
    }
  
      if(selected_product == 'iphone-14-pro'){
        if(selected_storage == '128gb'){
           $("#effectivepricetext").html('(After ₹3000* Cashback)');
           $("#exchangeeffectivepricetext").html('(After ₹3000* Cashback + Exchange Bonus up to ₹3000*)<br>(Trade-in value of 26000 is calculated on the exchange value of iPhone 12, 64 GB in good condition*)'); 
        } else{
          $("#effectivepricetext").html('(After ₹3000* Cashback)');
          $("#exchangeeffectivepricetext").html('(After ₹3000* Cashback + Exchange Bonus up to ₹3000*)<br>(Trade-in value of 26000 is calculated on the exchange value of iPhone 12, 64 GB in good condition*)'); 
        }
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
}

function get_selected_product_processors() {
  var $epc = $(".effective-price-calculator:visible");
  var base_url = $("base").attr("href");
  var ajax_call;

  //$(".effective-price-calculator").each(function () {

  var selected_product_id = $epc.find(".model").filter(".selected").data("value");
  var selected_color = $epc.find(".color-item").filter(".selected").data("value");
  var selected_storage = $epc.find(".attribute").filter(".selected").data("value");

  ajax_call = $.ajax({
    cache: false,
    data: {
      product_id: selected_product_id,
      color: selected_color,
      storage: selected_storage
    },
    dataType: "json",
    type: "POST",
    url: base_url + "components/get-selected-product-processors"
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var prod_data = response.data;

      var attr_heading = $("<h4>", {
        class: "heading-4",
        text: "Select Processor"
      });

      var attr_list = $("<div>", {
        class: "attribute-list"
      });

      var i = 0;
      var prod_processors = prod_data.prod_processor.split(",");

      var prod_processors_count = prod_processors.length;
      var attr_class, attr_item;

      for (i; i < prod_processors_count; i++) {
        attr_class = "attribute" + (i == 0 ? " selected" : "");

        attr_item = $("<div>", {
          class: attr_class,
          text: prod_processors[i]
        });

        attr_item.attr("data-value", prod_processors[i]);

        attr_list.append(attr_item);
      }

      $epc.find(".selection.processor").empty().append(attr_heading).append(attr_list);

      get_product_pricing_for_epc();
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
}

function get_selected_product_color_attributes() {
  var $epc = $(".effective-price-calculator:visible");
  var selected_product_id = "",
      selected_color = "";
  var base_url = $("base").attr("href");
  var ajax_call;

  //$(".effective-price-calculator").each(function () {

  selected_product_id = $epc.find(".model").filter(".selected").data("value");
  selected_color = $epc.find(".color-item").filter(".selected").data("value");

  ajax_call = $.ajax({
    cache: false,
    data: {
      product_id: selected_product_id,
      color: selected_color
    },
    dataType: "json",
    type: "POST",
    url: base_url + "components/get-selected-product-color-attributes"
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var prod_data = response.data;

      var factor = "";
      var prod_attr = [];

      if (prod_data.prod_storage != null || prod_data.prod_screen_size != null) {
        if (prod_data.prod_storage != null) {
          factor = "Storage";

          prod_attr = prod_data.prod_storage.split(",");
        }

        if (prod_data.prod_screen_size != null) {
          factor = "Screen Size";

          prod_attr = prod_data.prod_screen_size.split(",");
        }

        var attr_heading = $("<h4>", {
          class: "heading-4",
          text: "Select " + factor
        });

        var attr_list = $("<div>", {
          class: "attribute-list"
        });

        var i = 0,
            prod_attr_count = prod_attr.length;
        var attr_class, attr_item;

        for (i; i < prod_attr_count; i++) {
          attr_class = "attribute" + (i == 0 ? " selected" : "");

          attr_item = $("<div>", {
            class: attr_class,
            text: prod_attr[i].toUpperCase()
          });

          attr_item.attr("data-value", prod_attr[i]);

          attr_list.append(attr_item);
        }
        var selected_product1 = $epc.find(".model").filter(".selected").data("prod-slug");

        if ($.inArray(selected_product1, ["studio-display"]) !== -1) {
            $(".prodprices").css("display","none");
        } else {
          $(".prodprices").css("display","block");
        }


        $epc.find(".selection.rect").empty().append(attr_heading).append(attr_list);
      }

      var selected_product = $epc.find(".model").filter(".selected").data("prod-slug");

      if ($.inArray(selected_product, ["imac-53cm", "imac-68cm", "macbook-pro-41cm-new", "macbook-pro-35cm-new", "studio-display","macbook-pro-m2-41cm","macbook-pro-m2","mac-mini-m2","mac-studio-m2"]) !== -1) {
        get_selected_product_processors();
      } else {
        $epc.find(".selection.processor").empty();

        get_product_pricing_for_epc();
      }
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
  //});
}

function get_selected_product_colors() {
  var $epc = $(".effective-price-calculator:visible");
  var selected_product_id = "";
  var base_url = $("base").attr("href");
  var ajax_call;

  selected_product_id = $epc.find(".model").filter(".selected").data("value");

  ajax_call = $.ajax({
    cache: false,
    data: {
      product_id: selected_product_id
    },
    dataType: "json",
    type: "POST",
    url: base_url + "components/get-selected-product-colors"
  });

  ajax_call.done(function (response, status) {
    if (response.status == true) {
      var prod_data = response.data;

      var color_list_heading = $("<h4>", {
        class: "heading-4",
        text: "Select Colour"
      });

      var color_list = $("<div>", {
        class: "color-list"
      });

      var i = 0;
      var prod_colors = prod_data.prod_color.split(",");

      var prod_colors_count = prod_colors.length;
      var color_item, color_circle, color_name;

      for (i; i < prod_colors_count; i++) {
        var attr_class = "color-item" + (i == 0 ? " selected" : "");

        color_item = $("<div>", {
          class: attr_class
        });

        color_item.attr("data-value", prod_colors[i]);

        color_circle = $("<div>", {
          class: "circle product-color-" + prod_colors[i]
        });

        color_name = $("<div>", {
          class: "name",
          text: capitalize(prod_colors[i])
        });

        color_item.append(color_circle);
        color_item.append(color_name);

        color_list.append(color_item);
      }

      $epc.find(".selection.color").empty().append(color_list_heading).append(color_list);

      get_selected_product_color_attributes();
    }
  });

  ajax_call.fail(function (data, status, error) {
    console.log({ data: data, status: status, error: error });
  });

  ajax_call.always(function (data, status, error) {
    // console.log({ data: data, status: status, error: error, });
  });
}
// --------------------------------------------------
// function definitions
// --------------------------------------------------

// --------------------------------------------------
// event handlers
// --------------------------------------------------
$(".effective-price-calculator").on("click", ".model", function (e) {
  e.stopPropagation();

  $(this).closest(".tns-slider").find(".model.selected").removeClass("selected");

  $(this).addClass("selected");

  //get_product_data_for_epc();
  get_selected_product_colors();
});

$(".effective-price-calculator").on("click", ".color-item", function (e) {
  e.stopPropagation();

  $(this).closest(".color-list").find(".color-item.selected").removeClass("selected");

  $(this).addClass("selected");

  get_selected_product_color_attributes();
});

$(".effective-price-calculator").on("click", ".selection.rect .attribute", function (e) {
  e.stopPropagation();

  $(this).closest(".attribute-list").find(".attribute.selected").removeClass("selected");

  $(this).addClass("selected");

  if ($(".effective-price-calculator").find(".selection.processor .attribute").length > 0) {
    get_selected_product_processors();
  } else {
    get_product_pricing_for_epc();
  }
});

$(".effective-price-calculator").on("click", ".selection.processor .attribute", function (e) {
  e.stopPropagation();

  $(this).closest(".attribute-list").find(".attribute.selected").removeClass("selected");

  $(this).addClass("selected");

  get_product_pricing_for_epc();
});
// --------------------------------------------------
// event handlers
// --------------------------------------------------

// --------------------------------------------------
// document ready
// --------------------------------------------------
$(function () {
  var $epc = $(".effective-price-calculator");

  if ($epc.length > 0) {
    $epc.each(function () {
      tns({
        container: $(this).find(".selection.image .slider").get(0),
        items: 4.2,
        slideBy: "page",
        autoplay: false,
        gutter: 15,
        nav: false,
        controls: false,
        loop: false,
        responsive: {
          768: { items: 6.5, mouseDrag: true }
        }
      });
    });

    get_selected_product_colors();
  }
});
// --------------------------------------------------
// document ready
// --------------------------------------------------