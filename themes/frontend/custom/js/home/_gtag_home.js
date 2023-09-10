/* gtag start */
$(document).on('click', '.visual-category-menu .product-panels a:not(.more)', function (e) {
  let eventLabel = $(this).attr('data-cat-name') + ' Icon- ' + $(this).attr('data-prod-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', '.visual-category-menu .product-panels a.more', function (e) {
  let eventLabel = $(this).attr('data-cat-name') + ' Icon- View All';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', '.visual-category-menu .category-item .tv', function (e) {
  let eventLabel = 'TV Icon';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.hero-banner a', function (e) {
  let eventLabel = 'Homepage Banner- ' + $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.mini-carousel a', function (e) {
  let eventLabel = $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.trending a', function (e) {
  let eventLabel = 'Trending Offer- ' + $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.product-categories a', function (e) {
  let eventLabel = 'Product Category- ' + $(this).attr('data-cat-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.interested a', function (e) {
  let eventLabel = 'You might be interested in- ' + $(this).attr('data-banner-name');
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.apple-premium-resellers a', function (e) {
  let eventLabel = 'APR- ' + $(this).attr('data-store-name') + '- Visit Website';
  trigger_gtag_send(eventLabel);
});

$(document).on('change', '.select-city-dd', function (e) {
  const state = $.trim($('.select-state-dd option:selected').text());
  const city = $.trim($('.select-city-dd option:selected').text());
  if (city) {
    let eventLabel = `Store Locator (${state},${city})`;
    trigger_gtag_send(eventLabel);
  }
});

$(document).on('click', '.locate-store #nearby', function (e) {
  let eventLabel = 'Search Nearby';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.online-stores .store .link', function (e) {
  let eventLabel = 'Website URL- ' + $.trim($(this).text());
  let eventCategory = 'Online-Store';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.online-stores .store .num', function (e) {
  let eventLabel = 'Call Partner- ' + $(this).parent().attr('data-partner-name') + ' / ' + $(this).parent().attr('data-partner-phone');
  let eventCategory = 'Online-Store';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .num-link .offline-num', function (e) {
  let eventLabel = 'Call Partner- ' + $(this).parents('.store').attr('data-store-name') + ' / ' + $(this).parents('.store').attr('data-store-phone');
  let eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .num-link .offline-link', function (e) {
  let eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  let eventLabel = 'Website URL- ' + $.trim($(this).text());
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .direction-sms .offline-direction', function (e) {
  let eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  let eventLabel = 'Get Direction- ' + $(this).parents('.store').attr('data-store-name');
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.buy-offline .direction-sms .offline-sms', function (e) {
  let eventCategory = 'Offline-Store / ' + $(this).parents('.store').attr('data-store-type');
  let eventLabel = 'SMS Partner- ' + $(this).parents('.store').attr('data-store-name');
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', "a[href='#mono_brand_stores']", function (e) {
  let eventLabel = 'APR/AAR';
  let eventCategory = 'Partner Selection';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', "a[href='#multi_brand_stores']", function (e) {
  let eventLabel = 'Multi Brand Stores';
  let eventCategory = 'Partner Selection';
  trigger_gtag_send(eventLabel, eventCategory);
});

$(document).on('click', 'section.online-stores .show-more', function (e) {
  let eventLabel = 'Online Stores- View More';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.online-stores .show-less', function (e) {
  let eventLabel = 'Online Stores- View Less';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.buy-offline .show-more', function (e) {
  let eventLabel = 'Offline Stores- View More';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', 'section.buy-offline .show-less', function (e) {
  let eventLabel = 'Offline Stores- View Less';
  trigger_gtag_send(eventLabel);
});

$(document).on('click', '#store_send_sms_btn', function (e) {
  if (!$('#store_sms_modal').find('.alert').hasClass('alert-danger')) {
    let eventCategory = 'Offline-Store / ' + $('#field_sms_store_type').val();
    let eventLabel = 'Send SMS- ' + $('#field_sms_store_name').val() + ' / ' + $('#field_sms_store_phone').val();
    trigger_gtag_send(eventLabel, eventCategory);
  }
});

function trigger_gtag_send(eventLabel, eventCategory = 'Engagement', hitType = 'event', eventAction = 'Click') {
  ga('send', {
    hitType,
    eventCategory,
    eventAction,
    eventLabel,
  });
}
/* gtag ends */
