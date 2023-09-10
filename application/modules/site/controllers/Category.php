<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends MX_Controller
{
  public $user_agent;
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('category_model', 'category_m');
    $this->load->model('common_model', 'common_m');
    $this->user_agent = get_user_agent();
  }

  public function category($slug)
  {
    if ($this->input->method() == 'post') {
      $sorting = $this->input->post('sort_product_by');

      $filters = [
        'prod_mrp' => $this->input->post('filtered_prod_price'),
        'prod_color' => $this->input->post('filtered_prod_color'),
        'prod_storage_space' => $this->input->post('filtered_prod_storage_space'),
        'prod_screen_size' => $this->input->post('filtered_prod_screen_size'),
        'prod_processor' => $this->input->post('filtered_prod_processor'),
      ];

      $filters_json_encoded = json_encode($filters);

      $filtered_products = memcached_get("$slug-filtered-prod-$sorting-$filters_json_encoded");

      if (!$filtered_products) {
        $filtered_products = $this->category_m->getProdByCatSlug($slug, $sorting, $filters);

        memcached_save("$slug-filtered-prod-$sorting-$filters_json_encoded", $filtered_products, 3600);
      }

      $output = [
        'status' => true,
        'data' => $filtered_products,
      ];

      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));

      return false;
    }

    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => 'Category',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'lity.min.css',
          PATH_FRONTEND_CUSTOM_DIST_CSS . 'nouislider-14.6.3.min.css',
          PATH_FRONTEND_CUSTOM_CSS . 'category.min.css?v=' . get_app_version(),
        ),
        'scripts' => array(
          PATH_FRONTEND_CUSTOM_DIST_JS . 'lity.min.js',
          PATH_FRONTEND_CUSTOM_DIST_JS . 'nouislider-14.6.3.min.js',
          PATH_FRONTEND_CUSTOM_DIST_JS . 'wNumb-1.2.0.min.js',
        ),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );


    if (ENVIRONMENT == 'production') {
      $data['page_data']['scripts'][] = PATH_FRONTEND_CUSTOM_JS . 'category/_gtag_category.js?v=' . get_app_version();
    }

    $data['products'] = memcached_get("$slug-cat-page-all-products");
    if (!$data['products']) {
      $data['products'] = $this->category_m->getProdByCatSlug($slug);
      memcached_save("$slug-cat-page-all-products", $data['products'], 3600);
    }

    //banners
    $data['banner_cat_page_trend'] = memcached_get("$slug-banner-cat-page-trend-$this->user_agent");
    if (!$data['banner_cat_page_trend']) {
      $data["banner_cat_page_trend"] = $this->common_m->getBannersByPositionSlug("$slug-category-page-trending");
      memcached_save("$slug-banner-cat-page-trend-$this->user_agent", $data['banner_cat_page_trend'], 3600);
    }

    $data['banner_cat_page_feat_acces'] = memcached_get("$slug-banner-cat-page-feat-acc-$this->user_agent");
    if (!$data['banner_cat_page_feat_acces']) {
      $data["banner_cat_page_feat_acces"] = $this->common_m->getBannersByPositionSlug("$slug-category-page-featured-accessories");
      memcached_save("$slug-banner-cat-page-feat-acc-$this->user_agent", $data['banner_cat_page_feat_acces'], 3600);
    }

    $data['my_budget'] = memcached_get("$slug-cat-page-my-budget");
    if (!$data['my_budget']) {
      $data['my_budget'] = $this->category_m->getPriceRangeByCatSlug($slug);
      memcached_save("$slug-cat-page-my-budget", $data['my_budget'], 3600);
    }

    $data['tb_reasons_to_buy'] = memcached_get("$slug-cat-page-tb-reasons-to-buy");
    if (!$data['tb_reasons_to_buy']) {
      $data['tb_reasons_to_buy'] = $this->category_m->getTabBlockBySlug("$slug-reasons-to-buy");
      memcached_save("$slug-cat-page-tb-reasons-to-buy", $data['tb_reasons_to_buy'], 3600);
    }

    $data['tb_reasons_to_buy_2'] = memcached_get("$slug-cat-page-tb-reasons-to-buy-2");
    if (!$data['tb_reasons_to_buy_2']) {
      $data['tb_reasons_to_buy_2'] = $this->category_m->getTabBlockBySlug("$slug-reasons-to-buy-2");
      memcached_save("$slug-cat-page-tb-reasons-to-buy-2", $data['tb_reasons_to_buy_2'], 3600);
    }

    $data['compare_trending_prod'] = memcached_get("$slug-cat-page-compare-trending-prod");
    if (!$data['compare_trending_prod']) {
      $data['compare_trending_prod'] = $this->category_m->getTrendingProduct($slug);
      memcached_save("$slug-cat-page-compare-trending-prod", $data['compare_trending_prod'], 3600);
    }

    $data['product_filters'] = memcached_get("$slug-cat-page-prod-filters");
    if (!$data['product_filters']) {
      $data['product_filters'] = $this->category_m->getProductFiltersByCatSlug($slug);
      memcached_save("$slug-cat-page-prod-filters", $data['product_filters'], 3600);
    }

    $this->load->view('template_frontend', $data);
  }

  public function get_prod_by_price_range()
  {
    $response = ['status' => false];

    if ($this->input->is_ajax_request()) {
      $slug = $this->input->post('cat_slug');
      $min = $this->input->post('min_price');
      $max = $this->input->post('max_price');

      $device = (is_mobile()) ? 'mobile' : 'dex';

      $data['data'] = memcached_get("$slug-$max-$min-cat-page-prod-by-price-$device");

      if (!$data['data']) {
        $response['data'] = $this->category_m->getProdByPriceRange($slug, $min, $max);

        memcached_save("$slug-$max-$min-cat-page-prod-by-price-$device", $data['data'], 3600);
      }

      $response['status'] = true;

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(400)
      ->set_output(json_encode($response));
  }
}
