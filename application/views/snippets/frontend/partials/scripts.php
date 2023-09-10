<?php

/**
 * common scripts
 */
$common_scripts = array(
  PATH_FRONTEND_CUSTOM_DIST_JS . "jquery-3.5.1.min.js",
  PATH_FRONTEND_CUSTOM_DIST_JS . "bootstrap.bundle-4.6.0.min.js",
  PATH_FRONTEND_CUSTOM_DIST_JS . "select2-4.1.0-rc.0.min.js",
  PATH_FRONTEND_CUSTOM_DIST_JS . "tiny-slider-2.9.3.js",
  PATH_FRONTEND_CUSTOM_DIST_JS . "auto-complete-1.0.4.min.js",
  PATH_FRONTEND_CUSTOM_JS . "common.js?v=$app_version", //declared in header.php
  // PATH_FRONTEND_CUSTOM_DIST_JS . "lazysizes-5.3.0.min.js",
);

if (sizeof($common_scripts) > 0) {
  foreach ($common_scripts as $script) { ?>
    <script src="<?= $script ?>"></script>
<?php }
} ?>

<?php
/**
 * page specific supporting scripts
 */
if ((isset($page_data['scripts'])) && (sizeof($page_data['scripts']) > 0)) {
  foreach ($page_data['scripts'] as $script) { ?>
    <script src="<?= $script ?>"></script>
<?php
  }
}
?>

<?php
/**
 * page specific core script
 */
/* $current_page = uri_string();

// default controller method
if ($current_page === '') {
$current_page = 'home';
}

$js_file = implode('_', array_slice(explode('/', $current_page), 0, 3)) . '.js';

if (is_file(ABS_PATH_FRONTEND_CUSTOM_JS . $js_file)) {
echo '<script src="', PATH_FRONTEND_CUSTOM_JS, $js_file, '"></script>';
} */

$min_js_file = $view_file . '.min.js';
$js_file = $view_file . '.js';

if (is_file(ABS_PATH_FRONTEND_CUSTOM_JS . $min_js_file)) {
  echo '<script src="', PATH_FRONTEND_CUSTOM_JS, $min_js_file, '?v=', $app_version, '"></script>';
} else {
  if (is_file(ABS_PATH_FRONTEND_CUSTOM_JS . $js_file)) {
    echo '<script src="', PATH_FRONTEND_CUSTOM_JS, $js_file, '?v=', $app_version, '"></script>';
  }
}

?>

<?php if (ENVIRONMENT == 'production') : ?>

  <script src="<?= PATH_FRONTEND_CUSTOM_JS . "_gtag_common.js" ?>"></script>

  <?php if (!empty(@$meta_data->gtags_body_end)) : ?>
    <script>
      <?= base64_decode($meta_data->gtags_body_end) ?>
    </script>
  <?php endif; ?>

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-84941720-1', 'auto');
    ga('send', 'pageview');
  </script>

  <script>
    gtag('event', 'conversion', {
      'allow_custom_scripts': true,
      'send_to': 'DC-8200890/invmedia/macbo0+standard'
    });
  </script>

  <noscript>
    <img src="https://ad.doubleclick.net/ddm/activity/src=8200890;type=invmedia;cat=macbo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1?" width="1" height="1" alt="" />
  </noscript>

<?php endif; ?>