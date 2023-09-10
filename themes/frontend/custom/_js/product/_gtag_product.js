"use strict";

/* gtags starts */
$(document).on("click", ".prod-share-btn", function (e) {
  var eventLabel = "Share Icon";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .facebook-share-icon", function (e) {
  var eventLabel = "Share Product Details on Facebook";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .twitter-share-icon", function (e) {
  var eventLabel = "Share Product Details on Twitter";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .whatsapp-share-icon", function (e) {
  var eventLabel = "Share Product Details on WhatsApp";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .copy-link-share-icon", function (e) {
  var eventLabel = "Copy Page URL";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-offers']", function (e) {
  var eventLabel = "Offers Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-specification']", function (e) {
  var eventLabel = "Specifications Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-specifications']", function (e) {
  var eventLabel = "Specifications Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-features']", function (e) {
  var eventLabel = "Features Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-compare']", function (e) {
  var eventLabel = "Compare Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#modal_bank_offers']", function (e) {
  var eventLabel = "Bank Offers";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#modal_bank_offers_loans']", function (e) {
  var eventLabel = "Loan Offers";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".trade-in-offers .cashify-btn,.trade-in-offers .cashify-laptop-btn", function (e) {
  var eventLabel = "Cashify- Know More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".trade-in-offers .servify-btn", function (e) {
  var eventLabel = "Servify- Know More";
  trigger_gtag_send(eventLabel);
});

$(document).on("change", ".select-city-dd", function (e) {
  var state = $.trim($(".select-state-dd option:selected").text());
  var city = $.trim($(".select-city-dd option:selected").text());
  if (city) {
    var eventLabel = "Store Locator (" + state + "," + city + ")";
    trigger_gtag_send(eventLabel);
  }
});

$(document).on("click", ".locate-store #nearby", function (e) {
  var eventLabel = "Search Nearby";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.online-stores .store .link", function (e) {
  var eventLabel = "Website URL- " + $.trim($(this).text());
  var eventCategory = "Online-Store";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.online-stores .store .num", function (e) {
  var eventLabel = "Call Partner- " + $(this).parent().attr("data-partner-name") + " / " + $(this).parent().attr("data-partner-phone");
  var eventCategory = "Online-Store";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .num-link .offline-num", function (e) {
  var eventLabel = "Call Partner- " + $(this).parents(".store").attr("data-store-name") + " / " + $(this).parents(".store").attr("data-store-phone");
  var eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .num-link .offline-link", function (e) {
  var eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  var eventLabel = "Website URL- " + $.trim($(this).text());
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .direction-sms .offline-direction", function (e) {
  var eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  var eventLabel = "Get Direction- " + $(this).parents(".store").attr("data-store-name");
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .direction-sms .offline-sms", function (e) {
  var eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  var eventLabel = "SMS Partner- " + $(this).parents(".store").attr("data-store-name");
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "a[href='#mono_brand_stores']", function (e) {
  var eventLabel = "APR/AAR";
  var eventCategory = "Partner Selection";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "a[href='#multi_brand_stores']", function (e) {
  var eventLabel = "Multi Brand Stores";
  var eventCategory = "Partner Selection";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.online-stores .show-more", function (e) {
  var eventLabel = "Online Stores- View More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.online-stores .show-less", function (e) {
  var eventLabel = "Online Stores- View Less";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.buy-offline .show-more", function (e) {
  var eventLabel = "Offline Stores- View More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.buy-offline .show-less", function (e) {
  var eventLabel = "Offline Stores- View Less";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .read-more .more", function (e) {
  var eventLabel = "T&C- Read Less";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .read-more .less", function (e) {
  var eventLabel = "T&C- Read More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .term a.gradient-text:eq(0)", function (e) {
  var eventLabel = "Click Here- AAR Stores";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .term a.gradient-text:eq(1)", function (e) {
  var eventLabel = "Loan Offers- Servify Plan";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .term a.gradient-text:eq(2)", function (e) {
  var eventLabel = "Loan Offers- Servify T&C";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.you-might-like a", function (e) {
  var eventLabel = "You may also like- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.customers-also-bought a", function (e) {
  var eventLabel = "Also Buy- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#store_send_sms_btn", function (e) {
  if (!$("#store_sms_modal").find(".alert").hasClass("alert-danger")) {
    var eventCategory = "Offline-Store / " + $("#field_sms_store_type").val();
    var eventLabel = "Send SMS- " + $("#field_sms_store_name").val() + " / " + $("#field_sms_store_phone").val();
    trigger_gtag_send(eventLabel, eventCategory);
  }
});

$(document).on("click", "#details-compare .heading-desc", function (e) {
  var eventLabel = "Compare Tab - Compare All";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#details-compare .versus-products a", function (e) {
  var product_name = $.trim($(this).find(".name").text());
  var eventLabel = "Compare Tab - " + product_name;
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#details-compare .text-center > a", function (e) {
  var eventLabel = "Compare Tab - Compare";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#appleCare .item_3 a", function () {
  var eventLabel = "Apple Care- Know More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.product-info .main-img a", function () {
  if ($(this).attr("data-lity") != undefined) {
    var prod_name = $("section.product-info .shot-carousel").attr("data-prod-name");
    var eventLabel = prod_name + " Video";
    trigger_gtag_send(eventLabel);
  }
});

function trigger_gtag_send(eventLabel) {
  var eventCategory = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "Engagement";
  var hitType = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : "event";
  var eventAction = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : "Click";

  ga("send", {
    hitType: hitType,
    eventCategory: eventCategory,
    eventAction: eventAction,
    eventLabel: eventLabel
  });
}
/* gtags end */