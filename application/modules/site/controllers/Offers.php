<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Offers extends MX_Controller
{
  public $user_agent;
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('offers_model', 'off_m');
    $this->load->model('common_model', 'common_m');
  }

  public function load_offers()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Offers',
        'styles' => [
          PATH_FRONTEND_CUSTOM_CSS . 'offers.min.css?v=' . get_app_version(),
        ],
        'scripts' => [
          PATH_FRONTEND_CUSTOM_JS . 'components/effective_price_calculator.js?v=' . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['visual_cat_data'] = memcached_get('home-page-visual-cat-data');

    if (!$data['visual_cat_data']) {
      $data['visual_cat_data'] = $this->common_m->getVisualCatData();

      memcached_save('home-page-visual-cat-data', $data['visual_cat_data'], 3600);
    }

    $banner_bank_offers = memcached_get('offers-page-bank-offers');

    if (!$banner_bank_offers) {
      $banner_bank_offers = $this->common_m->getBannersByPositionSlug('offers-page-bank-offers');

      memcached_save(('offers-page-bank-offers'), $banner_bank_offers, 3600);
    }

    $data['bank_offers'] = $banner_bank_offers;

    $categories = select_method('categories');

    foreach ($categories as $category) {
      $epc_products = memcached_get($category->cat_slug . '-epc-products');

      if (!$epc_products) {
        //$epc_products = multi_select_where_order_by_method('products', ['cat_id' => $category->cat_id, 'status' => '1'], 'display_order', 'ASC');
        $epc_products = $this->db
          ->select('p.*')
          ->from('products AS p')
          ->join('product_variants AS pv', 'p.prod_id = pv.prod_id')
          ->where([
            'p.cat_id' => $category->cat_id,
            'p.status' => '1',
          ])
          ->where('pv.prod_effective_price > 0')
          ->group_by('p.prod_id')
          ->order_by('p.display_order')
          ->get()
          ->result();

        memcached_save($category->cat_slug . '-epc-products', $epc_products, 3600);
      }

      $category->epc_products = $this->load->view('components/effective_price_calculator', ['epc_products' => $epc_products], TRUE);
    }

    $data['categories'] = $categories;

    $banner_loan_offers = memcached_get('offers-page-loan-offers');

    if (!$banner_loan_offers) {
      $banner_loan_offers = $this->common_m->getBannersByPositionSlug('offers-page-loan-offers');

      memcached_save('offers-page-loan-offers', $banner_loan_offers, 3600);
    }

    $data['loan_offers'] = $banner_loan_offers;

    $banner_trade_in_offers = memcached_get('trade-in-offers');

    if (!$banner_trade_in_offers) {
      $banner_trade_in_offers = $this->common_m->getBannersByPositionSlug('trade-in-offers');

      memcached_save('trade-in-offers', $banner_trade_in_offers, 3600);
    }

    $data['trade_in_offers'] = $banner_trade_in_offers;

    $this->load->view('template_frontend', $data);
  }
}
