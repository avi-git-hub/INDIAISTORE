<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE') or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE') or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE') or define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ') or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE') or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb');            // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE') or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE') or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT') or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT') or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS') or define('EXIT_SUCCESS', 0);               // no errors
defined('EXIT_ERROR') or define('EXIT_ERROR', 1);                   // generic error
defined('EXIT_CONFIG') or define('EXIT_CONFIG', 3);                 // configuration error
defined('EXIT_UNKNOWN_FILE') or define('EXIT_UNKNOWN_FILE', 4);     // file not found
defined('EXIT_UNKNOWN_CLASS') or define('EXIT_UNKNOWN_CLASS', 5);   // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') or define('EXIT_USER_INPUT', 7);         // invalid user input
defined('EXIT_DATABASE') or define('EXIT_DATABASE', 8);             // database error
defined('EXIT__AUTO_MIN') or define('EXIT__AUTO_MIN', 9);           // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') or define('EXIT__AUTO_MAX', 125);         // highest automatically-assigned error code

/*
|--------------------------------------------------------------------------
| USER DEFINED CONSTANTS
|--------------------------------------------------------------------------
|
*/
// $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http');

switch (ENVIRONMENT) {
	case 'development':
		$base_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
		$S3_url = $base_url;
		break;

	case 'testing':
		$base_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
		$S3_url = $base_url;
		break;

	case 'production':
		$base_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';
		$S3_url = 'https://i3-prod-assets.indiaistore.com/';
		break;

	case 'local':
		$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';
		$S3_url = $base_url;
		break;
}

defined('BASE_URL') || define('BASE_URL', $base_url);
defined('S3_URL') || define('S3_URL', $S3_url);

/**
 * backend constants
 */
defined('ABS_PATH_BACKEND_SNIPPETS') || define('ABS_PATH_BACKEND_SNIPPETS', (APPPATH . 'views/snippets/backend/'));

defined('ABS_PATH_BACKEND_CUSTOM_CSS') || define('ABS_PATH_BACKEND_CUSTOM_CSS', (FCPATH . 'themes/backend/custom/css/'));
defined('ABS_PATH_BACKEND_CUSTOM_JS') || define('ABS_PATH_BACKEND_CUSTOM_JS', (FCPATH . 'themes/backend/custom/js/'));

defined('PATH_BACKEND_THEME_CSS') || define('PATH_BACKEND_THEME_CSS', (BASE_URL . 'themes/backend/admin-lte/dist/css/'));
defined('PATH_BACKEND_THEME_IMG') || define('PATH_BACKEND_THEME_IMG', (BASE_URL . 'themes/backend/admin-lte/dist/img/'));
defined('PATH_BACKEND_THEME_JS') || define('PATH_BACKEND_THEME_JS', (BASE_URL . 'themes/backend/admin-lte/dist/js/'));
defined('PATH_BACKEND_THEME_PLUGINS') || define('PATH_BACKEND_THEME_PLUGINS', (BASE_URL . 'themes/backend/admin-lte/plugins/'));

defined('PATH_BACKEND_CUSTOM_CSS') || define('PATH_BACKEND_CUSTOM_CSS', (BASE_URL . 'themes/backend/custom/css/'));
defined('PATH_BACKEND_CUSTOM_IMG') || define('PATH_BACKEND_CUSTOM_IMG', (BASE_URL . 'themes/backend/custom/img/'));
defined('PATH_BACKEND_CUSTOM_JS') || define('PATH_BACKEND_CUSTOM_JS', (BASE_URL . 'themes/backend/custom/js/'));
defined('PATH_BACKEND_CUSTOM_PLUGINS') || define('PATH_BACKEND_CUSTOM_PLUGINS', (BASE_URL . 'themes/backend/custom/plugins/'));

/**
 * frontend constants
 */
defined('ABS_PATH_FRONTEND_SNIPPETS') || define('ABS_PATH_FRONTEND_SNIPPETS', (APPPATH . 'views/snippets/frontend/'));

defined('ABS_PATH_FRONTEND_CUSTOM_CSS') || define('ABS_PATH_FRONTEND_CUSTOM_CSS', (FCPATH . 'themes/frontend/custom/css/'));

defined('PATH_FRONTEND_CUSTOM_CSS') || define('PATH_FRONTEND_CUSTOM_CSS', (BASE_URL . 'themes/frontend/custom/css/'));

defined('PATH_FRONTEND_CUSTOM_DIST_CSS') || define('PATH_FRONTEND_CUSTOM_DIST_CSS', (BASE_URL . 'themes/frontend/custom/dist/css/'));
defined('PATH_FRONTEND_CUSTOM_DIST_JS') || define('PATH_FRONTEND_CUSTOM_DIST_JS', (BASE_URL . 'themes/frontend/custom/dist/js/'));

defined('PATH_FRONTEND_CUSTOM_IMG') || define('PATH_FRONTEND_CUSTOM_IMG', (BASE_URL . 'themes/frontend/custom/images/'));


defined('ABS_PATH_FILES_UPLOADS') || define('ABS_PATH_FILES_UPLOADS', (FCPATH . 'files/uploads/'));
defined('ABS_PATH_FILES_EXPORTS') || define('ABS_PATH_FILES_EXPORTS', (FCPATH . 'files/exports/'));

defined('PATH_FILES_UPLOADS_ADMIN') || define('PATH_FILES_UPLOADS_ADMIN', BASE_URL . 'files/uploads/');

defined('PATH_FILES_UPLOADS') || define('PATH_FILES_UPLOADS', S3_URL . 'files/uploads/');
defined('PATH_FILES_EXPORTS') || define('PATH_FILES_EXPORTS', BASE_URL . 'files/exports/');

defined('GOOGLE_MAPS_API_KEY')  or define('GOOGLE_MAPS_API_KEY', 'AIzaSyAaiGXAIYvbgz6E3-C6YdZLeUEu-lzJkbo');

// setting constants for transpiled js for production
if (ENVIRONMENT == 'production') {
	defined('ABS_PATH_FRONTEND_CUSTOM_JS') || define('ABS_PATH_FRONTEND_CUSTOM_JS', (FCPATH . 'themes/frontend/custom/_js/'));
	defined('PATH_FRONTEND_CUSTOM_JS') || define('PATH_FRONTEND_CUSTOM_JS', (BASE_URL . 'themes/frontend/custom/_js/'));
} else {
	defined('ABS_PATH_FRONTEND_CUSTOM_JS') || define('ABS_PATH_FRONTEND_CUSTOM_JS', (FCPATH . 'themes/frontend/custom/js/'));
	defined('PATH_FRONTEND_CUSTOM_JS') || define('PATH_FRONTEND_CUSTOM_JS', (BASE_URL . 'themes/frontend/custom/js/'));
}

defined('IPSTACK_API_KEY')  || define('IPSTACK_API_KEY', 'eadd451455ab778dca10dd14e56da480');
