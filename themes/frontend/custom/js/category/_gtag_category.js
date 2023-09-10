/* gtags starts */

$(document).on("click", ".sort-filter .btn-sort", function (e) {
  let eventLabel = "Sort";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", ".sort-filter .btn-filter", function (e) {
  let eventLabel = "Filter";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", ".sort-filter .reset", function (e) {
  let eventLabel = "Filter- Reset";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", ".sort-filter .apply", function (e) {
  let eventLabel = "Filter- Apply";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", "section.category-products .cat-compare-btn", function (e) {
  let eventLabel = "Compare Icon";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", "section.category-products .cat-share-btn", function (e) {
  let eventLabel = "Share Icon";
  trigger_gtag_send(eventLabel);
});
$(document).on("click", "section.category-products .name span a,section.category-products .product-media .main-img", function (e) {
  let eventLabel = $(this).parents(".product").attr("data-prod-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.recommendation .versus-products .product", function (e) {
  let eventLabel = "Recommendations for you- " + $(this).attr("data-prod-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.trending a", function (e) {
  let eventLabel = "Most Trending- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.featured-accesories a", function (e) {
  let eventLabel = "Featured Accessory- " + $(this).attr("data-banner-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.compare-models .versus-products .product a", function (e) {
  let eventLabel = "Find the right iPhone for you- " + $(this).attr("data-prod-name");
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.compare-models .compare-models-compare a", function (e) {
  let eventLabel = "Compare";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", "section.compare-models .compare-all-btn", function (e) {
  let eventLabel = "Compare All Models";
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

$(document).on("click", "section.recommendation .recommend-compare-btn > a", function (e) {
  let eventLabel = "Compare";
  trigger_gtag_send(eventLabel);
});

$(document).on("click", ".category-floating-btn > a", function (e) {
  let eventLabel = "Compare Popup Icon";
  trigger_gtag_send(eventLabel);
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
