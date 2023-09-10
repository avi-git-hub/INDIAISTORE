<?php

/**
 * common styles
 */
$common_styles = array(
  PATH_BACKEND_THEME_PLUGINS . 'fontawesome-free/css/all.min.css',
  'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
  // PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
  // PATH_BACKEND_THEME_PLUGINS . 'icheck-bootstrap/icheck-bootstrap.min.css',
  // PATH_BACKEND_THEME_PLUGINS . 'jqvmap/jqvmap.min.css',
  PATH_BACKEND_THEME_CSS . 'adminlte.min.css',
  PATH_BACKEND_THEME_PLUGINS . 'overlayScrollbars/css/OverlayScrollbars.min.css',
  // PATH_BACKEND_THEME_PLUGINS . 'daterangepicker/daterangepicker.css',
  // PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
  'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
  PATH_BACKEND_CUSTOM_CSS . 'common.css',
);

if (sizeof($common_styles) > 0) {
  foreach ($common_styles as $style) {
    echo '<link rel="stylesheet" href="', $style, '" />';
  }
}
?>

<?php

/**
 * page specific support styles
 */
if ((isset($page_data['styles'])) && (sizeof($page_data['styles']) > 0)) {
  foreach ($page_data['styles'] as $style) {
    echo '<link rel="stylesheet" href="', $style, '" />';
  }
}
?>

<?php

/**
 * page specific core style
 */
/* $current_page = uri_string();

$css_file = implode('_', array_slice(explode('/', $current_page), 0, 3)) . '.css';

if (is_file(ABS_PATH_BACKEND_CUSTOM_CSS . $css_file)) {
echo '<link rel="stylesheet" href="', PATH_BACKEND_CUSTOM_CSS, $css_file, '" />';
} */

$min_css_file = $view_file . '.min.css';

if (is_file(ABS_PATH_BACKEND_CUSTOM_CSS . $min_css_file)) {
  echo '<link rel="stylesheet" href="', PATH_BACKEND_CUSTOM_CSS, $min_css_file, '" />';
} else {
  $css_file = $view_file . '.css';

  if (is_file(ABS_PATH_BACKEND_CUSTOM_CSS . $css_file)) {
    echo '<link rel="stylesheet" href="', PATH_BACKEND_CUSTOM_CSS, $css_file, '" />';
  }
}
