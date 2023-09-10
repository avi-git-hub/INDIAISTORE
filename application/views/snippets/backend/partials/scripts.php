<?php

/**
 * common scripts
 */
$common_scripts = array(
  PATH_BACKEND_THEME_PLUGINS . 'jquery/jquery.min.js',
  PATH_BACKEND_THEME_PLUGINS . 'jquery-ui/jquery-ui.min.js',
  PATH_BACKEND_THEME_PLUGINS . 'bootstrap/js/bootstrap.bundle.min.js',
  // PATH_BACKEND_THEME_PLUGINS . 'chart.js/Chart.min.js',
  // PATH_BACKEND_THEME_PLUGINS . 'sparklines/sparkline.js',
  // PATH_BACKEND_THEME_PLUGINS . 'jqvmap/jquery.vmap.min.js',
  // PATH_BACKEND_THEME_PLUGINS . 'jqvmap/maps/jquery.vmap.usa.js',
  // PATH_BACKEND_THEME_PLUGINS . 'jquery-knob/jquery.knob.min.js',
  // PATH_BACKEND_THEME_PLUGINS . 'moment/moment.min.js',
  // PATH_BACKEND_THEME_PLUGINS . 'daterangepicker/daterangepicker.js',
  // PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
  // PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
  PATH_BACKEND_THEME_PLUGINS . 'overlayScrollbars/js/jquery.overlayScrollbars.min.js',
  PATH_BACKEND_THEME_JS . 'adminlte.js',
  // PATH_BACKEND_THEME_JS . 'pages/dashboard.js',
  // PATH_BACKEND_THEME_JS . 'demo.js',
  PATH_BACKEND_CUSTOM_JS . 'common.js',
);

if (sizeof($common_scripts) > 0) {
  foreach ($common_scripts as $script) {
    echo '<script src="', $script, '"></script>';
  }
}
echo '<script>$.widget.bridge("uibutton", $.ui.button);</script>';
?>

<?php

/**
 * page specific supporting scripts
 */
if ((isset($page_data['scripts'])) && (sizeof($page_data['scripts']) > 0)) {
  foreach ($page_data['scripts'] as $script) {
    echo '<script src="', $script, '"></script>';
  }
}
?>

<?php

/* $current_page = uri_string();

$js_file = strtr(implode('_', array_slice(explode('/', $current_page), 0, 4)), ['-' => '_']) . '.js';

if (is_file(ABS_PATH_BACKEND_CUSTOM_JS . $js_file)) {
echo '<script src="', PATH_BACKEND_CUSTOM_JS, $js_file, '"></script>';
} */

$min_js_file = $view_file . '.min.js';
$js_file = $view_file . '.js';

if (is_file(ABS_PATH_BACKEND_CUSTOM_JS . $min_js_file)) {
  echo '<script src="', PATH_BACKEND_CUSTOM_JS, $min_js_file, '"></script>';
} else {
  if (is_file(ABS_PATH_BACKEND_CUSTOM_JS . $js_file)) {
    echo '<script src="', PATH_BACKEND_CUSTOM_JS, $js_file, '"></script>';
  }
}
