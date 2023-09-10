'use strict';

/* gtag start */
$(document).on('click', '.visual-category-menu .product-panels a:not(.more)', function (e) {
  var eventLabel = $(this).attr('data-cat-name') + ' Icon- ' + $(this).attr('data-prod-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', '.visual-category-menu .product-panels a.more', function (e) {
  var eventLabel = $(this).attr('data-cat-name') + ' Icon- View All';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', '.visual-category-menu .category-item .tv', function (e) {
  var eventLabel = 'TV Icon';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.hero-banner a', function (e) {
  var eventLabel = 'Homepage Banner- ' + $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.mini-carousel a', function (e) {
  var eventLabel = $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.trending a', function (e) {
  var eventLabel = 'Trending Offer- ' + $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.product-categories a', function (e) {
  var eventLabel = 'Product Category- ' + $(this).attr('data-cat-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.interested a', function (e) {
  var eventLabel = 'You might be interested in- ' + $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.apple-premium-resellers a', function (e) {
  var eventLabel = 'APR- ' + $(this).attr('data-store-name') + '- Visit Website';
  trigger_gtag_send(eventLabel);
});

$(document).on('change', '.select-city-dd', function (e) {
  var state = $.trim($('.select-state-dd option:selected').text());
  var city = $.trim($('.select-city-dd option:selected').text());
  if (city) {
    var eventLabel = 'Store Locator (' + state + ',' + city + ')';
    trigger_gtag_send(eventLabel);
  }
});

$(document).on('click', '.locate-store #nearby', function (e) {
  var eventLabel = 'Search Nearby';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.online-stores .store .link', function (e) {
  var eventLabel = 'Website URL- ' + $.trim($(this).text());
  var eventCategory = 'Online-Store';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.online-stores .store .num', function (e) {
  var eventLabel = 'Call Partner- ' + $(this).parent().attr('data-partner-name') + ' / ' + $(this).parent().attr('data-partner-phone');
  var eventCategory = 'Online-Store';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .num-link .offline-num', function (e) {
  var eventLabel = 'Call Partner- ' + $(this).parents('.store').attr('data-store-name') + ' / ' + $(this).parents('.store').attr('data-store-phone');
  var eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .num-link .offline-link', function (e) {
  var eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  var eventLabel = 'Website URL- ' + $.trim($(this).text());
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .direction-sms .offline-direction', function (e) {
  var eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  var eventLabel = 'Get Direction- ' + $(this).parents('.store').attr('data-store-name');
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .direction-sms .offline-sms', function (e) {
  var eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  var eventLabel = 'SMS Partner- ' + $(this).parents('.store').attr('data-store-name');
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', "a[href='#mono_brand_stores']", function (e) {
  var eventLabel = 'APR/AAR';
  var eventCategory = 'Partner Selection';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', "a[href='#multi_brand_stores']", function (e) {
  var eventLabel = 'Multi Brand Stores';
  var eventCategory = 'Partner Selection';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.online-stores .show-more', function (e) {
  var eventLabel = 'Online Stores- View More';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.online-stores .show-less', function (e) {
  var eventLabel = 'Online Stores- View Less';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.buy-offline .show-more', function (e) {
  var eventLabel = 'Offline Stores- View More';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.buy-offline .show-less', function (e) {
  var eventLabel = 'Offline Stores- View Less';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', '#store_send_sms_btn', function (e) {
  if (!$('#store_sms_modal').find('.alert').hasClass('alert-danger')) {
    var eventCategory = 'Offline-Store / ' + $('#field_sms_store_type').val();
    var eventLabel = 'Send SMS- ' + $('#field_sms_store_name').val() + ' / ' + $('#field_sms_store_phone').val();
    trigger_gtag_send(eventLabel, eventCategory);
  }
});

function trigger_gtag_send(eventLabel) {
  var eventCategory = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'Engagement';
  var hitType = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 'event';
  var eventAction = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 'Click';

  ga('send', {
    hitType: hitType,
    eventCategory: eventCategory,
    eventAction: eventAction,
    eventLabel: eventLabel
  });
}
/* gtag ends */