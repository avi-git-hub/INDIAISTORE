<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('is_mobile')) {

  function is_mobile()
  {
    $ci = &get_instance();

    $ci->load->library('user_agent');

    return ($ci->agent->is_mobile()) ? TRUE : FALSE;
  }
}

if (!function_exists('get_ip_address')) {

  function get_ip_address()
  {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP']; // whether ip is from the shared internet
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // whether ip is from the proxy
    } else {
      $ip = $_SERVER['REMOTE_ADDR']; // whether ip is from the remote address
    }

    return $ip;
  }
}

if (!function_exists('get_user_agent')) {
  function get_user_agent()
  {
    $ci = &get_instance();

    $ci->load->library('user_agent');

    if ($ci->agent->is_mobile()) {
      if ($ci->agent->platform == 'iOS') {
        $user_agent = 'ios';
      } else {
        $user_agent = 'android';
      }
    } else {
      if (in_array($ci->agent->platform, ['Mac OS X', 'Power PC Mac', 'Macintosh'])) {
        $user_agent = 'dex_mac';
      } else {
        $user_agent = 'dex_win';
      }
    }

    return $user_agent;
    // case 'Windows 10':
    // case 'Windows 8.1':
    // case 'Windows 8':
    // case 'Windows 7':
    // case 'Windows Vista':
    // case 'Windows 2003':
    // case 'Windows XP':
    // case 'Windows 2000':
    // case 'Windows NT 4.0':
    // case 'Windows NT 4.0':
    // case 'Windows NT':
    // case 'Windows NT':
    // case 'Windows 98':
    // case 'Windows 98':
    // case 'Windows 95':
    // case 'Windows 95':
    // case 'Windows Phone':
    // case 'Unknown Windows OS':

    // default:
    //   $user_agent = 'dex_all';
    //   break;

  }
}

if (!function_exists('get_user_agent_details')) {
  function get_user_agent_details()
  {
    $ci = &get_instance();

    $ci->load->library('user_agent');

    if ($ci->agent->is_browser()) {
      $currentAgent = $ci->agent->browser() . ' ' . $ci->agent->version();
    } elseif ($ci->agent->is_robot()) {
      $currentAgent = $ci->agent->robot();
    } elseif ($ci->agent->is_mobile()) {
      $currentAgent = $ci->agent->mobile();
    } else {
      $currentAgent = 'Unidentified User Agent';
    }

    $user_agent_data = 'Agent:( ' . $currentAgent . ' ) - Platform: ( ' . $ci->agent->platform() . ' )';

    return $user_agent_data;
  }
}

if (!function_exists('currency_format')) {
  function currency_format($num, $currency)
  {
    return $num;
  }
}

// if (!function_exists('currency_format')) {
//   function currency_format($num, $currency)
//   {
//     if ($currency == 'INR') {
//       $expl_rest_units = '';

//       if (strlen($num) > 3) {
//         $last_three = substr($num, strlen($num) - 3, strlen($num));

//         // extracts the last three digits
//         $rest_units = substr($num, 0, strlen($num) - 3);

//         // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
//         $rest_units = ((strlen($rest_units)) % 2 == 1) ? ('0' . $rest_units) : $rest_units;

//         $exp_unit = str_split($rest_units, 2);

//         for ($i = 0; $i < sizeof($exp_unit); $i++) {
//           // creates each of the 2's group and adds a comma to the end
//           if ($i == 0) {
//             // if is first value , convert into integer
//             $expl_rest_units .= (int)$exp_unit[$i] . ',';
//           } else {
//             $expl_rest_units .= $exp_unit[$i] . ',';
//           }
//         }

//         $the_cash = $expl_rest_units . $last_three;
//       } else {
//         $the_cash = $num;
//       }

//       // writes the final format where $currency is the currency symbol.
//       return $the_cash;
//     } else {
//       return number_format($num);
//     }
//   }
// }

if (!function_exists('generate_view_path')) {

  function generate_view_path($method_obj)
  {
    if (is_null($method_obj)) {
      return false;
    }

    return strtolower(strtr($method_obj, ['::' => '/']));
  }
}

if (!function_exists('slugify')) {

  function slugify($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }
}

if (!function_exists('memcached_get')) {
  function memcached_get($item)
  {
    $ci = &get_instance();

    // check if memcached is supported
    if ($ci->cache->memcached->is_supported() && (ENVIRONMENT == 'testing' || ENVIRONMENT == 'production')) {
      // check if item is present in cache
      // if presesnt return the data
      // else will return false
      return $ci->cache->memcached->get($item);
    } else {
      // return false if memcached not supported
      return false;
    }
  }
}

if (!function_exists('memcached_save')) {
  function memcached_save($item, $value, $ttl, $raw = null)
  {
    $ci = &get_instance();

    // check if memcached is supported
    if ($ci->cache->memcached->is_supported() && (ENVIRONMENT == 'testing' || ENVIRONMENT == 'production')) {
      // save the $value of $item in cache
      // for $ttl number of seconds

      // if save unsuccessful returns false

      if ((is_null($raw)) || ($raw == false)) {
        return $ci->cache->memcached->save($item, $value, $ttl);
      } else {
        return $ci->cache->memcached->save($item, $value, $ttl, $raw);
      }
    } else {
      // return false if memcached not supported
      return false;
    }
  }
}

if (!function_exists('get_meta_data')) {
  function get_meta_data($slug = null)
  {
    $ci = &get_instance();
    $ci->load->model('common_model');
    return $ci->common_model->getMetaData($slug);
  }
}

if (!function_exists('get_nav_data')) {
  function get_nav_data($slug = null)
  {
    $ci = &get_instance();
    $ci->load->model('common_model');

    return $ci->common_model->getNavigationData($slug);
  }
}

if (!function_exists('get_cat_data')) {
  function get_cat_data($slug = null)
  {
    $ci = &get_instance();
    $ci->load->model('common_model');

    return $ci->common_model->getProdWithCat();
  }
}


if (!function_exists('get_trend_search_data')) {
  function get_trend_search_data()
  {
    $ci = &get_instance();
    $ci->load->model('common_model');

    return $ci->common_model->getAllTrendingSearch();
  }
}

if (!function_exists('get_app_version')) {
  function get_app_version()
  {
    $ci = &get_instance();
    $ci->load->model('common_model');

    $version = $ci->common_model->getAppVersion();

    if (empty($version) || is_null($version)) return 1;

    return $version;
  }
}

if (!function_exists('get_browser_type')) {

  function get_browser_type()
  {
    $ci = &get_instance();

    $ci->load->library('user_agent');

    return $ci->agent->browser();
  }
}
