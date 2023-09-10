<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'site/home/home_revamp_new';
$route['translate_uri_dashes'] = TRUE;

/**
 * backend
 */
$route['admin'] = 'admin/dashboard';

// --------------------------------------------------
// product features
// --------------------------------------------------
$route['admin/product-feature/categories'] = 'admin/product_features/manage_feature_categories';
$route['admin/product-feature/category/add-new'] = 'admin/product_features/add_new_feature_category';
$route['admin/product-feature/category/(:num)/edit'] = 'admin/product_features/edit_feature_category/$1';
$route['admin/product-feature/category/(:num)/delete'] = 'admin/product_features/delete_feature_category/$1';
$route['admin/product-feature/category/edit-display-order/(:num)'] = 'admin/product_features/edit_display_order/$1';

$route['admin/product-feature/category/(:num)'] = 'admin/product_features/manage_feature_values/$1';
$route['admin/product-feature/category/(:num)/add-new'] = 'admin/product_features/add_new_feature_value/$1';
$route['admin/product-feature/category/(:num)/edit/(:num)'] = 'admin/product_features/edit_feature_value/$1/$2';
$route['admin/product-feature/category/(:num)/delete/(:num)'] = 'admin/product_features/delete_feature_value/$1/$2';

// --------------------------------------------------
// categories
// --------------------------------------------------
$route['admin/categories'] = 'admin/categories/manage_categories';
$route['admin/category/add-new'] = 'admin/categories/add_new_category';
$route['admin/category/(:num)/edit'] = 'admin/categories/edit_category/$1';
$route['admin/category/(:num)/edit-product-display-order'] = 'admin/products/edit_product_display_order/$1';
$route['admin/category/(:num)/delete'] = 'admin/categories/delete_category/$1';
$route['admin/categories/edit-display-order'] = 'admin/categories/edit_display_order';
// --------------------------------------------------
// products
// --------------------------------------------------
$route['admin/products'] = 'admin/products/manage_products';
$route['admin/product/add-new'] = 'admin/products/add_new_product';
$route['admin/product/(:num)/edit'] = 'admin/products/edit_product/$1';
$route['admin/product/(:num)/delete'] = 'admin/products/delete_product/$1';
//$route['admin/products/edit-display-order'] = 'admin/products/edit_product_display_order';

$route['admin/product/get-applicable-features'] = 'admin/products/get_applicable_features';
$route['admin/product/get-products-to-compare-with'] = 'admin/products/get_products_to_compare_with';

$route['admin/product/(:num)/variants'] = 'admin/products/manage_variants/$1';
$route['admin/product/(:num)/variant/add-new'] = 'admin/products/add_new_variant/$1';
$route['admin/product/(:num)/variant/(:num)/edit'] = 'admin/products/edit_variant/$1/$2';
$route['admin/product/(:num)/variant/(:num)/delete'] = 'admin/products/delete_variant/$1/$2';
$route['admin/product/(:num)/variants/edit-display-order'] = 'admin/products/edit_variant_display_order/$1';

$route['admin/product/(:num)/pdp-image-sets'] = 'admin/products/manage_pdp_image_sets/$1';
$route['admin/product/(:num)/pdp-image-set/add-new'] = 'admin/products/add_new_pdp_image_set/$1';
$route['admin/product/(:num)/pdp-image-set/(:num)/get-data'] = 'admin/products/get_pdp_image_set_data/$1/$2';
$route['admin/product/(:num)/pdp-image-set/(:num)/edit'] = 'admin/products/edit_pdp_image_set/$1/$2';
$route['admin/product/(:num)/pdp-image-set/(:num)/edit-display-order'] = 'admin/products/edit_pdp_images_display_order/$1/$2';
// --------------------------------------------------
// banners
// --------------------------------------------------
$route['admin/banner/positions'] = 'admin/banner/manage_positions';
$route['admin/banner/position/add-new'] = 'admin/banner/add_new_position';
$route['admin/banner/position/edit/(:num)'] = 'admin/banner/edit_position/$1';
$route['admin/banner/position/delete/(:num)'] = 'admin/banner/delete_position/$1';
$route['admin/banner/position/edit-display-order/(:num)'] = 'admin/banner/edit_display_order/$1';

$route['admin/banner/position/(:num)'] = 'admin/banner/manage_banners/$1';
$route['admin/banner/position/(:num)/add-new'] = 'admin/banner/add_new_banner/$1';
$route['admin/banner/position/(:num)/edit/(:num)'] = 'admin/banner/edit_banner/$1/$2';
$route['admin/banner/position/(:num)/delete/(:num)'] = 'admin/banner/delete_banner/$1/$2';


// --------------------------------------------------
// stories
// --------------------------------------------------

$route['admin/stories'] = 'admin/stories/manage_stories';
$route['admin/stories/add-new'] = 'admin/stories/add_new_stories';
$route['admin/stories/edit/(:num)'] = 'admin/stories/edit_stories/$1';
$route['admin/stories/delete/(:num)'] = 'admin/stories/delete_story/$1';

$route['admin/stories/(:num)'] = 'admin/stories/manage_story_details/$1';
$route['admin/stories/(:num)/add-new'] = 'admin/stories/add_new_story/$1';
$route['admin/stories/(:num)/edit/(:num)'] = 'admin/stories/edit_story_details/$1/$2';
$route['admin/stories/(:num)/delete/(:num)'] = 'admin/stories/delete_story_details/$1/$2';

// --------------------------------------------------
// stores
// --------------------------------------------------
$route['admin/stores'] = 'admin/store/manage_stores';
$route['admin/store/upload'] = 'admin/store/upload_stores';
$route['admin/store/add-new'] = 'admin/store/add_new_store';
$route['admin/store/download'] = 'admin/store/download_stores';
$route['admin/store/edit/(:num)'] = 'admin/store/edit_store/$1';
$route['admin/store/delete/(:num)'] = 'admin/store/delete_store/$1';

// --------------------------------------------------
// partners
// --------------------------------------------------
$route['admin/partners'] = 'admin/partner/manage_partners';
$route['admin/partner/add-new'] = 'admin/partner/add_new_partner';
$route['admin/partner/(:num)/edit'] = 'admin/partner/edit_partner/$1';
$route['admin/partner/(:num)/delete'] = 'admin/partner/delete_partner/$1';

// --------------------------------------------------
// navigations
// --------------------------------------------------
$route['admin/navigation/sections'] = 'admin/navigation/manage_nav_sections';
$route['admin/navigation/section/add-new'] = 'admin/navigation/add_new_nav_section';
$route['admin/navigation/section/(:num)/edit'] = 'admin/navigation/edit_nav_section/$1';
$route['admin/navigation/section/(:num)/delete'] = 'admin/navigation/delete_nav_section/$1';
$route['admin/navigation/section/(:num)'] = 'admin/navigation/manage_nav_items/$1';
$route['admin/navigation/section/(:num)/edit/(:num)'] = 'admin/navigation/edit_nav_item/$1/$2';
$route['admin/navigation/section/(:num)/delete/(:num)'] = 'admin/navigation/delete_nav_item/$1/$2';
$route['admin/navigation/section/(:num)/edit-display-order'] = 'admin/navigation/edit_display_order/$1';

// --------------------------------------------------
// components
// --------------------------------------------------
$route['admin/components/tabs-block'] = 'admin/components/manage_tabs_blocks';
$route['admin/components/tabs-block/add-new'] = 'admin/components/add_new_tabs_block';
$route['admin/components/tabs-block/(:num)/edit'] = 'admin/components/edit_tabs_block/$1';
$route['admin/components/tabs-block/(:num)/delete'] = 'admin/components/delete_tabs_block/$1';
$route['admin/components/tabs-block/get-tabs-data'] = 'admin/components/get_tabs_data';

// --------------------------------------------------
// routes
// --------------------------------------------------
$route['admin/routes'] = 'admin/route/manage_routes';
$route['admin/route/add-new'] = 'admin/route/add_new_route';
$route['admin/route/(:num)/edit'] = 'admin/route/edit_route/$1';
$route['admin/route/(:num)/delete'] = 'admin/route/delete_route/$1';

// --------------------------------------------------
// search
// --------------------------------------------------
$route['admin/search/trending'] = 'admin/search/manage_trending_search';
$route['admin/search/trending/(:num)/delete'] = 'admin/search/delete_trending_search/$1';
$route['admin/search/trending/edit-display-order'] = 'admin/search/edit_display_order';
$route['admin/search/other'] = 'admin/search/manage_other_search';
$route['admin/search/other/(:num)/delete'] = 'admin/search/delete_other_search/$1';


// --------------------------------------------------
// search
// --------------------------------------------------
$route['admin/accessories'] = 'admin/accessory/manage_accessories';
$route['admin/accessory/add-new'] = 'admin/accessory/add_new_accessory';
$route['admin/accessory/(:num)/edit'] = 'admin/accessory/edit_accessory/$1';
$route['admin/accessory/(:num)/delete'] = 'admin/accessory/delete_accessory/$1';

$route['admin/state-city/states'] = 'admin/state_city/manage_states';
$route['admin/state-city/state/add-new'] = 'admin/state_city/add_new_state';
$route['admin/state-city/state/(:num)/edit'] = 'admin/state_city/edit_state/$1';

$route['admin/state-city/cities'] = 'admin/state_city/manage_cities';
$route['admin/state-city/city/add-new'] = 'admin/state_city/add_new_city';
$route['admin/state-city/city/(:num)/edit'] = 'admin/state_city/edit_city/$1';

$route['admin/application/version'] = 'admin/app_versioning';
/**
 * frontend
 */

// --------------------------------------------------
// user
// --------------------------------------------------
$route['user'] = 'user/login';

// --------------------------------------------------
// home
// --------------------------------------------------
$route['home'] = 'site/home/home_revamp_new';
$route['index'] = 'site/home/home_revamp_new';

// hsbc offers
$route['hsbc-offers-get-emi-pricing'] = 'site/hsbc_offers_get_emi_pricing';
$route['hsbc-offers-get-storage-for-product'] = 'site/hsbc_offers_get_storage_for_product';
$route['hsbc-offers-get-colors-for-product-storage'] = 'site/hsbc_offers_get_colors_for_product_storage';

// --------------------------------------------------
// category
// --------------------------------------------------
//$route['category/(:any)'] = 'site/category/category/$1';

// --------------------------------------------------
// product
// --------------------------------------------------
//$route['product/(:any)'] = 'site/product_details';
$route['product/get-pdp-images'] = 'site/product/get_pdp_images';
$route['product/get-pricing'] = 'site/product/get_pricing';

// components
$route['components/get-selected-product-colors'] = 'site/components/get_selected_product_colors';
$route['components/get-selected-product-color-attributes'] = 'site/components/get_selected_product_color_attributes';
$route['components/get-selected-product-processors'] = 'site/components/get_selected_product_processors';
$route['components/get-product-pricing-for-epc'] = 'site/components/get_product_pricing_for_epc';

// --------------------------------------------------
// compare
// --------------------------------------------------
$route['compare/iphone'] = 'site/compare/compare_iphone';
$route['compare/mac'] = 'site/compare/compare_mac';
$route['compare/ipad'] = 'site/compare/compare_ipad';
$route['compare/watch'] = 'site/compare/compare_watch';

// --------------------------------------------------
// store locator
// --------------------------------------------------
$route['store-locator/api-send-sms'] = 'site/store_locator/api_send_sms';


// --------------------------------------------------
// 404 error override
// --------------------------------------------------
$route['404_override'] = 'site/error_404';

// --------------------------------------------------
// database driven routes
// --------------------------------------------------
// require_once(BASEPATH . 'database/DB' . EXT);

// $db = &DB();
// $query = $db->get('routes');
// $result = $query->result();

// foreach ($result as $row) {
//   $route[$row->r_slug] = $row->r_controller;
//   /* $route[$row->slug . '/:any'] = $row->controller;
//   $route[$row->controller] = 'error404';
//   $route[$row->controller . '/:any'] = 'error404'; */
// }

// //require_once APPPATH . 'cache/routes.php';

require_once(BASEPATH . 'database/DB' . EXT);

$db = &DB();
$query = $db->select('slug,controller')->get_where('routes', ['status' => '1']);
$result = $query->result();

foreach ($result as $row) {
  $route[$row->slug] = $row->controller;
}

//require_once APPPATH . 'cache/routes.php';
