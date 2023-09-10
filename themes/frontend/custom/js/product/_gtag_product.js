/* gtags starts */
$(document).on("click", ".prod-share-btn", function (e) {
  let eventLabel = "Share Icon";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .facebook-share-icon", function (e) {
  let eventLabel = "Share Product Details on Facebook";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .twitter-share-icon", function (e) {
  let eventLabel = "Share Product Details on Twitter";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .whatsapp-share-icon", function (e) {
  let eventLabel = "Share Product Details on WhatsApp";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".share-container .copy-link-share-icon", function (e) {
  let eventLabel = "Copy Page URL";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-offers']", function (e) {
  let eventLabel = "Offers Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-specification']", function (e) {
  let eventLabel = "Specifications Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-specifications']", function (e) {
  let eventLabel = "Specifications Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-features']", function (e) {
  let eventLabel = "Features Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#details-compare']", function (e) {
  let eventLabel = "Compare Tab";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#modal_bank_offers']", function (e) {
  let eventLabel = "Bank Offers";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "a[href='#modal_bank_offers_loans']", function (e) {
  let eventLabel = "Loan Offers";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".trade-in-offers .cashify-btn,.trade-in-offers .cashify-laptop-btn", function (e) {
  let eventLabel = "Cashify- Know More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".trade-in-offers .servify-btn", function (e) {
  let eventLabel = "Servify- Know More";
  trigger_gtag_send(eventLabel);
});

$(document).on("change", ".select-city-dd", function (e) {
  const state = $.trim($(".select-state-dd option:selected").text());
  const city = $.trim($(".select-city-dd option:selected").text());
  if (city) {
    let eventLabel = `Store Locator (${state},${city})`;
    trigger_gtag_send(eventLabel);
  }
});

$(document).on("click", ".locate-store #nearby", function (e) {
  let eventLabel = "Search Nearby";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.online-stores .store .link", function (e) {
  let eventLabel = "Website URL- " + $.trim($(this).text());
  let eventCategory = "Online-Store";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.online-stores .store .num", function (e) {
  let eventLabel = "Call Partner- " + $(this).parent().attr("data-partner-name") + " / " + $(this).parent().attr("data-partner-phone");
  let eventCategory = "Online-Store";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .num-link .offline-num", function (e) {
  let eventLabel = "Call Partner- " + $(this).parents(".store").attr("data-store-name") + " / " + $(this).parents(".store").attr("data-store-phone");
  let eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .num-link .offline-link", function (e) {
  let eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  let eventLabel = "Website URL- " + $.trim($(this).text());
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .direction-sms .offline-direction", function (e) {
  let eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  let eventLabel = "Get Direction- " + $(this).parents(".store").attr("data-store-name");
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.buy-offline .direction-sms .offline-sms", function (e) {
  let eventCategory = "Offline-Store / " + $(this).parents(".store").attr("data-store-type");
  let eventLabel = "SMS Partner- " + $(this).parents(".store").attr("data-store-name");
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "a[href='#mono_brand_stores']", function (e) {
  let eventLabel = "APR/AAR";
  let eventCategory = "Partner Selection";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "a[href='#multi_brand_stores']", function (e) {
  let eventLabel = "Multi Brand Stores";
  let eventCategory = "Partner Selection";
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on("click", "section.online-stores .show-more", function (e) {
  let eventLabel = "Online Stores- View More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.online-stores .show-less", function (e) {
  let eventLabel = "Online Stores- View Less";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.buy-offline .show-more", function (e) {
  let eventLabel = "Offline Stores- View More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.buy-offline .show-less", function (e) {
  let eventLabel = "Offline Stores- View Less";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .read-more .more", function (e) {
  let eventLabel = "T&C- Read Less";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .read-more .less", function (e) {
  let eventLabel = "T&C- Read More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .term a.gradient-text:eq(0)", function (e) {
  let eventLabel = "Click Here- AAR Stores";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .term a.gradient-text:eq(1)", function (e) {
  let eventLabel = "Loan Offers- Servify Plan";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.toc .term a.gradient-text:eq(2)", function (e) {
  let eventLabel = "Loan Offers- Servify T&C";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.you-might-like a", function (e) {
  let eventLabel = "You may also like- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.customers-also-bought a", function (e) {
  let eventLabel = "Also Buy- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#store_send_sms_btn", function (e) {
  if (!$("#store_sms_modal").find(".alert").hasClass("alert-danger")) {
    let eventCategory = "Offline-Store / " + $("#field_sms_store_type").val();
    let eventLabel = "Send SMS- " + $("#field_sms_store_name").val() + " / " + $("#field_sms_store_phone").val();
    trigger_gtag_send(eventLabel, eventCategory);
  }
});

$(document).on("click", "#details-compare .heading-desc", function (e) {
  let eventLabel = "Compare Tab - Compare All";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#details-compare .versus-products a", function (e) {
  let product_name = $.trim($(this).find(".name").text());
  let eventLabel = "Compare Tab - " + product_name;
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#details-compare .text-center > a", function (e) {
  let eventLabel = "Compare Tab - Compare";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "#appleCare .item_3 a", function () {
  let eventLabel = "Apple Care- Know More";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.product-info .main-img a", function () {
  if ($(this).attr("data-lity") != undefined) {
    var prod_name = $("section.product-info .shot-carousel").attr("data-prod-name");
    var eventLabel = prod_name + " Video";
    trigger_gtag_send(eventLabel);
  }
});

function trigger_gtag_send(eventLabel, eventCategory = "Engagement", hitType = "event", eventAction = "Click") {
  ga("send", {
    hitType,
    eventCategory,
    eventAction,
    eventLabel,
  });
}
/* gtags end */
