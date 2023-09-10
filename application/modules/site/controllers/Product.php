<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends MX_Controller
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('common_model', 'common_m');
    $this->load->model('product_model', 'prod_m');
  }

  public function get_pdp_images()
  {
    $pdp_set_slug = $this->input->post('pdp_set_slug');

    // product variant pricing data
    $prod_pdp_images = memcached_get("product-pdp-images-$pdp_set_slug");

    if (!$prod_pdp_images) {
      $query = $this->db
        ->select('
          pdi.prod_pdp_img_id, pdi.pdp_set_id,
          pdi.pdp_img, pdi.display_order, pdi.status,
          pdis.pdp_set_color, pdis.pdp_set_slug
        ') //pdis.pdp_set_vid_id
        ->from('product_pdp_images AS pdi')
        ->join('product_pdp_image_sets AS pdis', 'pdi.pdp_set_id = pdis.pdp_set_id')
        ->where([
          'pdis.pdp_set_slug' => $pdp_set_slug,
          'pdi.status' => '1',
        ])
        ->order_by('pdi.pdp_set_id', 'ASC')
        ->order_by('pdi.display_order', 'ASC')
        ->get();

      $prod_pdp_images = $query->result();

      // $prod_pdp_images = [];

      // foreach ($result as $record) {
      //   $prod_pdp_images[$record->pdp_set_color][] = $record;

      //   unset($record->pdp_set_color);
      // }

      memcached_save("product-pdp-images-$pdp_set_slug", $prod_pdp_images, 3600);
    }

    if (!empty($prod_pdp_images)) {
      $output = [
        'status' => true,
        'info' => [
          'pdp_images' => $prod_pdp_images,
        ],
        'message' => 'Product pricing fetched successfully!',
      ];
    } else {
      $output = [
        'status' => false,
        'info' => [
          'error' => $this->db->error(),
        ],
        'message' => 'Something went wrong while fething product prices!',
      ];
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  /* public function get_pricing()
  {
    $product_variant_slug = $this->input->post('product_variant_slug');

    // product variant pricing data
    $prod_variant_pricing = memcached_get("product-pricing-$product_variant_slug");

    if (!($prod_variant_pricing)) {
      $prod_variant_pricing = select_where_method('product_variant_pricing', ['prod_variant_slug' => $product_variant_slug]);

      memcached_save("product-pricing-$product_variant_slug", $prod_variant_pricing, 3600);
    }

    if (!empty($prod_variant_pricing)) {
      $output = [
        'status' => true,
        'info' => [
          'mrp' => currency_format($prod_variant_pricing->prod_mrp, 'INR'),
          'effective_price' => currency_format($prod_variant_pricing->prod_effective_price, 'INR'),
          'exchange_effective_price' => currency_format($prod_variant_pricing->prod_exchange_effective_price, 'INR'),
        ],
        'message' => 'Product pricing fetched successfully!',
      ];
    } else {
      $output = [
        'status' => false,
        'info' => [
          'error' => $this->db->error(),
        ],
        'message' => 'Something went wrong while fething product prices!',
      ];
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  } */

  public function load_product($product_slug)
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Product',
        'styles' => [
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'lity.min.css',
          PATH_FRONTEND_CUSTOM_CSS . 'product.min.css?v=' . get_app_version(),
        ],
        'scripts' => [
          PATH_FRONTEND_CUSTOM_JS . 'components/effective_price_calculator.js?v=' . get_app_version(),
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . 'components/store_locator.js?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_DIST_JS . 'lity.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if (ENVIRONMENT == 'production') {
      $data['page_data']['scripts'][] = PATH_FRONTEND_CUSTOM_JS . 'product/_gtag_product.js?v=' . get_app_version();
    }


    // product data
    $prod_data = memcached_get($product_slug . '-product-data');

    if (!$prod_data) {
      $prod_data = $this->prod_m->get_product_data($product_slug);

      memcached_save($product_slug . '-product-data', $prod_data, 3600);
    }

    $data['page_data']['title'] = $prod_data->prod_name;

    $data['prod_data'] = $prod_data;
    
    $categoryname = $this->prod_m->get_category_name($prod_data->cat_id);

    $data['cat_name'] = $categoryname->cat_name;

    $banner_top_ticker = memcached_get($product_slug . '-top-ticker');

    if (!$banner_top_ticker) {
      $banner_top_ticker = $this->common_m->getBannersByPositionSlug($product_slug . '-top-ticker');

      memcached_save(($product_slug . '-top-ticker'), $banner_top_ticker, 3600);
    }

    $data['banner_top_ticker'] = $banner_top_ticker;

    $banner_suggested_products = memcached_get($product_slug . '-suggested-products');

    if (!$banner_suggested_products) {
      $banner_suggested_products = $this->common_m->getBannersByPositionSlug($product_slug . '-suggested-products');

      memcached_save(($product_slug . '-suggested-products'), $banner_suggested_products, 3600);
    }

    $data['banner_suggested_products'] = $banner_suggested_products;

    $banner_cross_selling_products = memcached_get($product_slug . '-cross-selling-products');

    if (!$banner_cross_selling_products) {
      $banner_cross_selling_products = $this->common_m->getBannersByPositionSlug($product_slug . '-cross-selling-products');

      memcached_save(($product_slug . '-cross-selling-products'), $banner_suggested_products, 3600);
    }

    $data['banner_cross_selling_products'] = $banner_cross_selling_products;

    $product_details_tabs = memcached_get($product_slug . '-product-details-tabs');

    if (!$product_details_tabs) {
      $query = $this->db
        ->select('tbd.tb_detail_id, tbd.tab_title, tbd.tab_content_type, tbd.banner_upload_mob,tbd.banner_upload_dex, tbd.custom_html,tb.section_slug')
        ->from('tab_blocks_details AS tbd')
        ->join('tab_blocks AS tb', 'tbd.tb_id = tb.tb_id')
        ->where([
          'tb.prod_id' => $prod_data->prod_id,
          'tbd.status' => '1',
        ])
        ->order_by('tbd.display_order,tbd.tb_detail_id')
        ->get();

      $product_details_tabs = $query->result();

      memcached_save($product_slug . '-product-details-tabs', $product_details_tabs, 3600);
    }

    $data['product_details_tabs'] = $product_details_tabs;

    // states data for store locator
    $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    // category specific epc data
    $epc_products = memcached_get($prod_data->cat_slug . '-epc-products');

    if (!$epc_products) {
      //$epc_products = multi_select_where_order_by_method('products', ['cat_id' => $prod_data->cat_id, 'status' => '1'], 'display_order', 'ASC');
      $epc_products = $this->db
        ->select('p.*,c.cat_slug')
        ->from('products AS p')
        ->join('product_variants AS pv', 'p.prod_id = pv.prod_id')
        ->join('categories AS c', 'p.cat_id = c.cat_id')
        ->where([
          'p.cat_id' => $prod_data->cat_id,
          'p.status' => '1',
        ])
        // ->where('pv.prod_effective_price > 0')
        ->group_by('p.prod_id')
        ->order_by('p.display_order')
        ->get()
        ->result();

      memcached_save($prod_data->cat_slug . '-epc-products', $epc_products, 3600);
    }

    $data['component_epc'] = $this->load->view('components/effective_price_calculator', ['epc_products' => $epc_products, 'prod_slug' => $product_slug,], TRUE);
    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $product_to_compare_with = memcached_get($product_slug . '-product-compare-with-' . $prod_data->prod_compare_with);

    if (!$product_to_compare_with) {
      $product_to_compare_with = select_where_method('products', ['prod_id' => $prod_data->prod_compare_with]);

      memcached_save($product_slug . '-product-compare-with-' . $prod_data->prod_compare_with, $product_to_compare_with, 3600);
    }

    $data['product_to_compare_with'] = $product_to_compare_with;

    $this->load->view('template_frontend', $data);
  }


  public function load_product_update_new($product_slug)
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Product',
        'styles' => [
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'lity.min.css',
          PATH_FRONTEND_CUSTOM_CSS . 'product.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . '/product/available_offers.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'load-new-product-page.css?v=' . get_app_version(),
        ],
        'scripts' => [
          PATH_FRONTEND_CUSTOM_JS . 'components/effective_price_calculator.js?v=' . get_app_version(),
          //PATH_FRONTEND_CUSTOM_JS . 'xzoom.min.js?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_JS . 'xzoom.min.js?v=' . get_app_version(),
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . 'components/store_locator.js?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_DIST_JS . 'lity.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if (ENVIRONMENT == 'production') {
      $data['page_data']['scripts'][] = PATH_FRONTEND_CUSTOM_JS . 'product/_gtag_product.js?v=' . get_app_version();
    }


    // product data
    $prod_data = memcached_get($product_slug . '-product-data');

    if (!$prod_data) {
      $prod_data = $this->prod_m->get_product_data($product_slug);

      memcached_save($product_slug . '-product-data', $prod_data, 3600);
    }

    $data['page_data']['title'] = $prod_data->prod_name;

    $data['prod_data'] = $prod_data;

    $categoryname = $this->prod_m->get_category_name($prod_data->cat_id);
    

    $data['cat_name'] = $categoryname->cat_name;

    $banner_top_ticker = memcached_get($product_slug . '-top-ticker');

    if (!$banner_top_ticker) {
      $banner_top_ticker = $this->common_m->getBannersByPositionSlug($product_slug . '-top-ticker');

      memcached_save(($product_slug . '-top-ticker'), $banner_top_ticker, 3600);
    }

    $data['banner_top_ticker'] = $banner_top_ticker;

    $banner_suggested_products = memcached_get($product_slug . '-suggested-products');

    if (!$banner_suggested_products) {
      $banner_suggested_products = $this->common_m->getBannersByPositionSlug($product_slug . '-suggested-products');

      memcached_save(($product_slug . '-suggested-products'), $banner_suggested_products, 3600);
    }

    $data['banner_suggested_products'] = $banner_suggested_products;

    $banner_cross_selling_products = memcached_get($product_slug . '-cross-selling-products');

    if (!$banner_cross_selling_products) {
      $banner_cross_selling_products = $this->common_m->getBannersByPositionSlug($product_slug . '-cross-selling-products');

      memcached_save(($product_slug . '-cross-selling-products'), $banner_suggested_products, 3600);
    }

    $data['banner_cross_selling_products'] = $banner_cross_selling_products;

    $product_details_tabs = memcached_get($product_slug . '-product-details-tabs');

    if (!$product_details_tabs) {
      $query = $this->db
        ->select('tbd.tb_detail_id, tbd.tab_title, tbd.tab_content_type, tbd.banner_upload_mob,tbd.banner_upload_dex, tbd.custom_html,tb.section_slug')
        ->from('tab_blocks_details AS tbd')
        ->join('tab_blocks AS tb', 'tbd.tb_id = tb.tb_id')
        ->where([
          'tb.prod_id' => $prod_data->prod_id,
          'tbd.status' => '1',
        ])
        ->order_by('tbd.display_order,tbd.tb_detail_id')
        ->get();

      $product_details_tabs = $query->result();

      memcached_save($product_slug . '-product-details-tabs', $product_details_tabs, 3600);
    }

    $data['product_details_tabs'] = $product_details_tabs;

    // states data for store locator
    $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    // category specific epc data
    $epc_products = memcached_get($prod_data->cat_slug . '-epc-products');

    if (!$epc_products) {
      //$epc_products = multi_select_where_order_by_method('products', ['cat_id' => $prod_data->cat_id, 'status' => '1'], 'display_order', 'ASC');
      $epc_products = $this->db
        ->select('p.*,c.cat_slug')
        ->from('products AS p')
        ->join('product_variants AS pv', 'p.prod_id = pv.prod_id')
        ->join('categories AS c', 'p.cat_id = c.cat_id')
        ->where([
          'p.cat_id' => $prod_data->cat_id,
          'p.status' => '1',
        ])
        // ->where('pv.prod_effective_price > 0')
        ->group_by('p.prod_id')
        ->order_by('p.display_order')
        ->get()
        ->result();

      memcached_save($prod_data->cat_slug . '-epc-products', $epc_products, 3600);
    }

    $data['component_epc'] = $this->load->view('components/effective_price_calculator', ['epc_products' => $epc_products, 'prod_slug' => $product_slug,], TRUE);
    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $product_to_compare_with = memcached_get($product_slug . '-product-compare-with-' . $prod_data->prod_compare_with);

    if (!$product_to_compare_with) {
      $product_to_compare_with = select_where_method('products', ['prod_id' => $prod_data->prod_compare_with]);

      memcached_save($product_slug . '-product-compare-with-' . $prod_data->prod_compare_with, $product_to_compare_with, 3600);
    }

    $data['product_to_compare_with'] = $product_to_compare_with;


    // if (in_array($product_slug, ['iphone-12'])) {
    //   $switch_calculator_data = memcached_get('switch-calculator-data-cache');

    //   if (!$switch_calculator_data) {
    //     $switch_calculator_data =
    //       $this->db
    //       ->select('switch_from')
    //       ->distinct()
    //       ->get('switcher_calculator')
    //       ->result();

    //     memcached_save(('switch-calculator-data-cache'), $switch_calculator_data, 3600);
    //   }

    //   $data['switch_calculator_data'] = $switch_calculator_data;
    // }


    $this->load->view('template_frontend', $data);
  }

  public function load_product_new($product_slug)
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Product',
        'styles' => [
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'lity.min.css',
          PATH_FRONTEND_CUSTOM_CSS . 'product.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . '/product/available_offers.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'load-new-product-page.css?v=' . get_app_version(),
        ],
        'scripts' => [
          PATH_FRONTEND_CUSTOM_JS . 'components/effective_price_calculator.js?v=' . get_app_version(),
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . 'components/store_locator.js?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_DIST_JS . 'lity.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if (ENVIRONMENT == 'production') {
      $data['page_data']['scripts'][] = PATH_FRONTEND_CUSTOM_JS . 'product/_gtag_product.js?v=' . get_app_version();
    }


    // product data
    $prod_data = memcached_get($product_slug . '-product-data');

    if (!$prod_data) {
      $prod_data = $this->prod_m->get_product_data($product_slug);

      memcached_save($product_slug . '-product-data', $prod_data, 3600);
    }

    $data['page_data']['title'] = $prod_data->prod_name;

    $data['prod_data'] = $prod_data;

    $categoryname = $this->prod_m->get_category_name($prod_data->cat_id);

     $data['cat_name'] = $categoryname->cat_name;

    $banner_top_ticker = memcached_get($product_slug . '-top-ticker');

    if (!$banner_top_ticker) {
      $banner_top_ticker = $this->common_m->getBannersByPositionSlug($product_slug . '-top-ticker');

      memcached_save(($product_slug . '-top-ticker'), $banner_top_ticker, 3600);
    }

    $data['banner_top_ticker'] = $banner_top_ticker;

    $banner_suggested_products = memcached_get($product_slug . '-suggested-products');

    if (!$banner_suggested_products) {
      $banner_suggested_products = $this->common_m->getBannersByPositionSlug($product_slug . '-suggested-products');

      memcached_save(($product_slug . '-suggested-products'), $banner_suggested_products, 3600);
    }

    $data['banner_suggested_products'] = $banner_suggested_products;

    $banner_cross_selling_products = memcached_get($product_slug . '-cross-selling-products');

    if (!$banner_cross_selling_products) {
      $banner_cross_selling_products = $this->common_m->getBannersByPositionSlug($product_slug . '-cross-selling-products');

      memcached_save(($product_slug . '-cross-selling-products'), $banner_suggested_products, 3600);
    }

    $data['banner_cross_selling_products'] = $banner_cross_selling_products;

    $product_details_tabs = memcached_get($product_slug . '-product-details-tabs');

    if (!$product_details_tabs) {
      $query = $this->db
        ->select('tbd.tb_detail_id, tbd.tab_title, tbd.tab_content_type, tbd.banner_upload_mob,tbd.banner_upload_dex, tbd.custom_html,tb.section_slug')
        ->from('tab_blocks_details AS tbd')
        ->join('tab_blocks AS tb', 'tbd.tb_id = tb.tb_id')
        ->where([
          'tb.prod_id' => $prod_data->prod_id,
          'tbd.status' => '1',
        ])
        ->order_by('tbd.display_order,tbd.tb_detail_id')
        ->get();

      $product_details_tabs = $query->result();

      memcached_save($product_slug . '-product-details-tabs', $product_details_tabs, 3600);
    }

    $data['product_details_tabs'] = $product_details_tabs;

    // states data for store locator
    $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    // category specific epc data
    $epc_products = memcached_get($prod_data->cat_slug . '-epc-products');

    if (!$epc_products) {
      //$epc_products = multi_select_where_order_by_method('products', ['cat_id' => $prod_data->cat_id, 'status' => '1'], 'display_order', 'ASC');
      $epc_products = $this->db
        ->select('p.*,c.cat_slug')
        ->from('products AS p')
        ->join('product_variants AS pv', 'p.prod_id = pv.prod_id')
        ->join('categories AS c', 'p.cat_id = c.cat_id')
        ->where([
          'p.cat_id' => $prod_data->cat_id,
          'p.status' => '1',
        ])
        // ->where('pv.prod_effective_price > 0')
        ->group_by('p.prod_id')
        ->order_by('p.display_order')
        ->get()
        ->result();

      memcached_save($prod_data->cat_slug . '-epc-products', $epc_products, 3600);
    }

    $data['component_epc'] = $this->load->view('components/effective_price_calculator', ['epc_products' => $epc_products, 'prod_slug' => $product_slug,], TRUE);
    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $product_to_compare_with = memcached_get($product_slug . '-product-compare-with-' . $prod_data->prod_compare_with);

    if (!$product_to_compare_with) {
      $product_to_compare_with = select_where_method('products', ['prod_id' => $prod_data->prod_compare_with]);

      memcached_save($product_slug . '-product-compare-with-' . $prod_data->prod_compare_with, $product_to_compare_with, 3600);
    }

    $data['product_to_compare_with'] = $product_to_compare_with;


    // if (in_array($product_slug, ['iphone-12'])) {
    //   $switch_calculator_data = memcached_get('switch-calculator-data-cache');

    //   if (!$switch_calculator_data) {
    //     $switch_calculator_data =
    //       $this->db
    //       ->select('switch_from')
    //       ->distinct()
    //       ->get('switcher_calculator')
    //       ->result();

    //     memcached_save(('switch-calculator-data-cache'), $switch_calculator_data, 3600);
    //   }

    //   $data['switch_calculator_data'] = $switch_calculator_data;
    // }


    $this->load->view('template_frontend', $data);
  }
}
