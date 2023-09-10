<?php
$this->load->helper('html');
/**
 * common styles
 */
$common_styles = array(
  PATH_FRONTEND_CUSTOM_DIST_CSS . "bootstrap.min.css",
  PATH_FRONTEND_CUSTOM_DIST_CSS . "fontawesome-5.15.2.min.css",
  PATH_FRONTEND_CUSTOM_DIST_CSS . "select2-4.1.0-rc.0.min.css",
  PATH_FRONTEND_CUSTOM_DIST_CSS . "tiny-slider-2.9.3.css",
  'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',
  PATH_FRONTEND_CUSTOM_CSS . "fonts/style.css?v=$app_version",
  PATH_FRONTEND_CUSTOM_CSS . "common.css?v=$app_version", //declared in header.php
);

if (sizeof($common_styles) > 0) {
  foreach ($common_styles as $style) {
    $link = [
      'href'  => $style,
      'rel'   => 'stylesheet',
      'type'  => 'text/css',
      'async' => 'async'
    ];
    echo link_tag($link);
  }
}
?>

<?php

/**
 * page specific support styles
 */
if ((isset($page_data['styles'])) && (sizeof($page_data['styles']) > 0)) {
  foreach ($page_data['styles'] as $style) {
    echo link_tag($style, 'stylesheet');
  }
}
?>

<?php

/**
 * page specific core style
 */
/* $current_page = uri_string();

if ($current_page === '') {
$page = 'home';
}

$css_file = implode('_', array_slice(explode('/', $current_page), 0, 3)) . '.css';

if (is_file(ABS_PATH_FRONTEND_CUSTOM_CSS . $css_file)) {
echo '<link rel="stylesheet" href="', PATH_FRONTEND_CUSTOM_CSS, $css_file, '" />';
} */

$min_css_file = $view_file . '.min.css';

if (is_file(ABS_PATH_FRONTEND_CUSTOM_CSS . $min_css_file)) {
  echo link_tag(PATH_FRONTEND_CUSTOM_CSS . $min_css_file . "?v=$app_version", 'stylesheet');
} else {
  $css_file = $view_file . '.css';
  if (is_file(ABS_PATH_FRONTEND_CUSTOM_CSS . $css_file)) {
    echo link_tag(PATH_FRONTEND_CUSTOM_CSS . $css_file . "?v=$app_version", 'stylesheet');
  }
}
