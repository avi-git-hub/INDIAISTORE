"use strict";

/* gtags starts */

$(document).on("click", ".sort-filter .btn-sort", function (e) {
  var eventLabel = "Sort";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", ".sort-filter .btn-filter", function (e) {
  var eventLabel = "Filter";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", ".sort-filter .reset", function (e) {
  var eventLabel = "Filter- Reset";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", ".sort-filter .apply", function (e) {
  var eventLabel = "Filter- Apply";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", "section.category-products .cat-compare-btn", function (e) {
  var eventLabel = "Compare Icon";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", "section.category-products .cat-share-btn", function (e) {
  var eventLabel = "Share Icon";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", "section.category-products .name span a,section.category-products .product-media .main-img", function (e) {
  var eventLabel = $(this).parents(".product").attr("data-prod-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.recommendation .versus-products .product", function (e) {
  var eventLabel = "Recommendations for you- " + $(this).attr("data-prod-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.trending a", function (e) {
  var eventLabel = "Most Trending- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.featured-accesories a", function (e) {
  var eventLabel = "Featured Accessory- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.compare-models .versus-products .product a", function (e) {
  var eventLabel = "Find the right iPhone for you- " + $(this).attr("data-prod-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.compare-models .compare-models-compare a", function (e) {
  var eventLabel = "Compare";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.compare-models .compare-all-btn", function (e) {
  var eventLabel = "Compare All Models";
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

$(document).on("click", "section.recommendation .recommend-compare-btn > a", function (e) {
  var eventLabel = "Compare";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".category-floating-btn > a", function (e) {
  var eventLabel = "Compare Popup Icon";
  trigger_gtag_send(eventLabel);
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