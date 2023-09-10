<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Components extends MX_Controller
{
  public $master_db;
  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('components_model', 'compo_m');
  }

  public function get_nearby_partner_stores_data()
  {
    $response = ['status' => false];

    if ($this->input->is_ajax_request()) {
      $lat = $this->input->post('lat');
      $lng = $this->input->post('lng');
      $state_id = $this->input->post('state_id');
      $city_id = $this->input->post('city_id');
      //$offline_radius = $this->input->post('distance') ?: 5; //km 
      $offline_radius = 15; //km
      $online_radius = 15; //km

      if ($lat && $lng) {
        //offline stores by lat lng
        $offline_store_data = memcached_get("home-page-off-store-ll-$lat-$lng");

        if (!$offline_store_data) {
          $multi_brand_data = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $offline_radius, 'multi');
          $mono_brand_data = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $offline_radius, 'mono');

          $offline_store_data = [
            'multi_brand_data' => $multi_brand_data,
            'mono_brand_data' => $mono_brand_data
          ];

          memcached_save("home-page-off-store-ll-$lat-$lng", $offline_store_data, 3600);
        }

        if (!empty($offline_store_data)) {
          $offline_stores = $this->load->view('components/offline_stores', ['offline_store_data' => $offline_store_data], TRUE);

          $response['data']['offline_stores'] = $offline_stores;
        }


        //online stores by lat lng
        $online_store_data = memcached_get("home-page-on-store-ll-$lat-$lng");
        if (!$online_store_data) {
          $online_store_data = $this->compo_m->getOnlineStoresByLoc($lat, $lng, $online_radius);

          memcached_save("home-page-on-store-ll-$lat-$lng", $online_store_data, 3600);
        }

        if (!empty($online_store_data)) {

                    
          $this->load->model('home_model', 'home_m');
          //premium partners
         
             $premium_partners = $this->home_m->getPremiumPartners();
   
   
             $data['online_store_data_new'] = $online_store_data;
   
             $data['premium_partners_data'] = $premium_partners;
   
             $online_stores = $this->load->view('components/online_stores',$data , TRUE);

         // $online_stores = $this->load->view('components/online_stores', ['online_store_data' => $online_store_data], TRUE);

          $response['data']['online_stores'] = $online_stores;
        }

        $response['status'] = true;
      } else if ($state_id && $city_id) {
        //offline stores by state city id
        $offline_store_data = memcached_get("home-page-off-store-sc-$state_id-$city_id");

        if (!$offline_store_data) {
          $multi_brand_data = $this->compo_m->getOfflineStoresById($state_id, $city_id, 'multi');
          $mono_brand_data = $this->compo_m->getOfflineStoresById($state_id, $city_id, 'mono');

          $offline_store_data = [
            'multi_brand_data' => $multi_brand_data,
            'mono_brand_data' => $mono_brand_data
          ];

          memcached_save("home-page-off-store-sc-$state_id-$city_id", $offline_store_data, 3600);
        }

        if (!empty($offline_store_data)) {
          $offline_stores = $this->load->view('components/offline_stores', ['offline_store_data' => $offline_store_data], TRUE);

          $response['data']['offline_stores'] = $offline_stores;
        }

        //online stores by state city id
        $online_store_data = memcached_get("home-page-on-store-sc-$state_id-$city_id");

        if (!$online_store_data) {
          $online_store_data = $this->compo_m->getOnlineStoresById($state_id, $city_id);

          memcached_save("home-page-on-store-sc-$state_id-$city_id", $online_store_data, 3600);
        }

        if (!empty($online_store_data)) {
          //$online_stores = $this->load->view('components/online_stores', ['online_store_data' => $online_store_data], TRUE);
          $this->load->model('home_model', 'home_m');
          //premium partners
         
             $premium_partners = $this->home_m->getPremiumPartners();
   
   
             $data['online_store_data_new'] = $online_store_data;
   
             $data['premium_partners_data'] = $premium_partners;
   
             $online_stores = $this->load->view('components/online_stores',$data , TRUE);

          $response['data']['online_stores'] = $online_stores;
        }

        $response['status'] = true;
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(400)
      ->set_output(json_encode($response));
  }


  public function get_nearby_partner_stores_data_new()
  {
    $response = ['status' => false];

    if ($this->input->is_ajax_request()) {
      //$lat = $this->input->post('lat');
      //$lng = $this->input->post('lng');
      $state_id = $this->input->post('state');
      $city_id = $this->input->post('city');
      //$offline_radius = $this->input->post('distance') ?: 5; //km 
      $offline_radius = 15; //km
      $online_radius = 15; //km

      if ($lat && $lng) {
        //offline stores by lat lng
        $offline_store_data = memcached_get("home-page-off-store-ll-$lat-$lng");

        if (!$offline_store_data) {
          $multi_brand_data = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $offline_radius, 'multi');
          $mono_brand_data = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $offline_radius, 'mono');

          $offline_store_data = [
            'multi_brand_data' => $multi_brand_data,
            'mono_brand_data' => $mono_brand_data
          ];

          memcached_save("home-page-off-store-ll-$lat-$lng", $offline_store_data, 3600);
        }

        if (!empty($offline_store_data)) {
          $offline_stores = $this->load->view('components/offline_stores', ['offline_store_data' => $offline_store_data], TRUE);

          $response['data']['offline_stores'] = $offline_stores;
        }


        //online stores by lat lng
        $online_store_data = memcached_get("home-page-on-store-ll-$lat-$lng");
        if (!$online_store_data) {
          $online_store_data = $this->compo_m->getOnlineStoresByLoc($lat, $lng, $online_radius);

          memcached_save("home-page-on-store-ll-$lat-$lng", $online_store_data, 3600);
        }

        if (!empty($online_store_data)) {
          //$online_stores = $this->load->view('components/online_stores', ['online_store_data' => $online_store_data], TRUE);

          $this->load->model('home_model', 'home_m');
          //premium partners
         
             $premium_partners = $this->home_m->getPremiumPartners();
   
   
             $data['online_store_data_new'] = $online_store_data;
   
             $data['premium_partners_data'] = $premium_partners;
   
             $online_stores = $this->load->view('components/online_stores',$data , TRUE);

          $response['data']['online_stores'] = $online_stores;
        }

        $response['status'] = true;
      } else if ($state_id && $city_id) {
        //offline stores by state city id
        $offline_store_data = memcached_get("home-page-off-store-sc-$state_id-$city_id");

        if (!$offline_store_data) {
          $multi_brand_data = $this->compo_m->getOfflineStoresById($state_id, $city_id, 'multi');
          $mono_brand_data = $this->compo_m->getOfflineStoresById($state_id, $city_id, 'mono');

          $offline_store_data = [
            'multi_brand_data' => $multi_brand_data,
            'mono_brand_data' => $mono_brand_data
          ];

          memcached_save("home-page-off-store-sc-$state_id-$city_id", $offline_store_data, 3600);
        }

        if (!empty($offline_store_data)) {
          $offline_stores = $this->load->view('components/offline_stores', ['offline_store_data' => $offline_store_data], TRUE);

          $response['data']['offline_stores'] = $offline_stores;
        }

        //online stores by state city id
        $online_store_data = memcached_get("home-page-on-store-sc-$state_id-$city_id");

        if (!$online_store_data) {
          $online_store_data = $this->compo_m->getOnlineStoresById($state_id, $city_id);

          memcached_save("home-page-on-store-sc-$state_id-$city_id", $online_store_data, 3600);
        }

        if (!empty($online_store_data)) {
          //$online_stores = $this->load->view('components/online_stores', ['online_store_data' => $online_store_data], TRUE);
          $this->load->model('home_model', 'home_m');
          //premium partners
         
             $premium_partners = $this->home_m->getPremiumPartners();
   
   
             $data['online_store_data_new'] = $online_store_data;
   
             $data['premium_partners_data'] = $premium_partners;
   
             $online_stores = $this->load->view('components/online_stores',$data , TRUE);

          $response['data']['online_stores'] = $online_stores;
        }

        $response['status'] = true;
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(400)
      ->set_output(json_encode($response));
  }


  public function get_cities()
  {
    $state_id = $this->input->post('state_id');

    $cities = memcached_get("home-page-city-list-$state_id");

    if (!$cities) {
      $cities = $this->compo_m->getCitiesByStateId($state_id);

      memcached_save("home-page-city-list-$state_id", $cities, 3600);
    }

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($cities));
  }

  public function get_selected_product_colors()
  {
    $output = [];

    if ($this->input->method() == 'post') {
      $product_id = $this->input->post('product_id');

      $product_colors = memcached_get("epc-prod-$product_id-colors");

      if (!$product_colors) {
        $where = ['pv.prod_id' => $product_id];

        $query = $this->db
          ->select('
            GROUP_CONCAT(DISTINCT(pv.prod_color) ORDER BY pv.display_order) AS prod_color
          ')
          ->from('product_variants AS pv')
          ->join('products AS p', 'pv.prod_id = p.prod_id')
          ->where($where)
          ->group_by('pv.prod_id')
          ->get();

        $product_colors = $query->row();

        memcached_save("epc-prod-$product_id-colors", $product_colors, 3600);
      }

      if (empty($product_colors)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching colors for selected product!',
          'data' => [],
        ];
      } else {
        $output = [
          'status' => true,
          'message' => 'Colors for the selected product have been fetched successfully!',
          'data' => $product_colors,
        ];
      }
    } else {
      $output = [
        'status' => false,
        'message' => 'Not a valid request',
        'data' => [],
      ];

      $this->output->set_status_header(400);
    }

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  public function get_selected_product_color_attributes()
  {
    $output = [];

    if ($this->input->method() == 'post') {
      $product_id = $this->input->post('product_id');
      $color = $this->input->post('color');

      $product_color_attributes = memcached_get("epc-prod-$product_id-$color-color-attributes");

      if (!$product_color_attributes) {
        $where = [
          'pv.prod_id' => $product_id,
          'pv.prod_color' => $color,
        ];

        $query = $this->db
          ->select('
            GROUP_CONCAT(DISTINCT(pv.prod_storage) ORDER BY pv.display_order) AS prod_storage,
            GROUP_CONCAT(DISTINCT(pv.prod_screen_size) ORDER BY pv.display_order) AS prod_screen_size
          ')
          ->from('product_variants AS pv')
          ->join('products AS p', 'pv.prod_id = p.prod_id')
          ->where($where)
          ->group_by('pv.prod_id')
          ->get();

        $product_color_attributes = $query->row();

        memcached_save("epc-prod-$product_id-$color-color-attributes", $product_color_attributes, 3600);
      }

      if (empty($product_color_attributes)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching attributes for the selected product!',
          'data' => [],
        ];
      } else {
        $output = [
          'status' => true,
          'message' => 'Attributes for the selected product have been fetched successfully!',
          'data' => $product_color_attributes,
        ];
      }
    } else {
      $output = [
        'status' => false,
        'message' => 'Not a valid request',
        'data' => [],
      ];

      $this->output->set_status_header(400);
    }

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  public function get_selected_product_processors()
  {
    $output = [];

    if ($this->input->method() == 'post') {
      $product_id = $this->input->post('product_id');
      $color = $this->input->post('color');
      $storage = $this->input->post('storage');

      $product_processors = memcached_get("epc-prod-$product_id-$color-$storage-processors");

      if (!$product_processors) {
        $where = [
          'pv.prod_id' => $product_id,
          'pv.prod_color' => $color,
          'pv.prod_storage' => $storage,
        ];

        $query = $this->db
          ->select('
            GROUP_CONCAT(DISTINCT(pv.prod_processor) ORDER BY pv.display_order) AS prod_processor
          ')
          ->from('product_variants AS pv')
          ->join('products AS p', 'pv.prod_id = p.prod_id')
          ->where($where)
          ->group_by('pv.prod_id')
          ->get();

        $product_processors = $query->row();

        memcached_save("epc-prod-$product_id-$color-$storage-processors", $product_processors, 3600);
      }

      if (empty($product_processors)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching processor for the selected product!',
          'data' => [],
        ];
      } else {
        $output = [
          'status' => true,
          'message' => 'Processors for the selected product have been fetched successfully!',
          'data' => $product_processors,
        ];
      }
    } else {
      $output = [
        'status' => false,
        'message' => 'Not a valid request',
        'data' => [],
      ];

      $this->output->set_status_header(400);
    }

    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  public function get_product_pricing_for_epc()
  {
    $output = [];

    if ($this->input->method() == 'post') {
      $prod_variant_slug = $this->input->post('product_variant_slug');

      // product variant pricing data
      $prod_variant = memcached_get("$prod_variant_slug-product-pricing-for-epc");

      if (!($prod_variant)) {
        // $prod_variant = select_where_method('product_variants', ['prod_variant_slug' => $prod_variant_slug]);
        $prod_variant = $this->db->select('pv.*,p.prod_exchange_effective_price_text,p.prod_effective_price_text,p.prod_store_discount_text')->join('products p', 'p.prod_id = pv.prod_id')->get_where('product_variants pv', ['prod_variant_slug' => $prod_variant_slug])->row();

        // echo '<pre>';
        // print_r($prod_variant);
        // echo '</pre>';
        // exit;

        memcached_save("$prod_variant_slug-product-pricing-for-epc", $prod_variant, 3600);
      }

      if (!empty($prod_variant)) {
        $mrp = $prod_variant->prod_mrp;
        $store_discount = $prod_variant->prod_store_discount;
        $effective_price = $prod_variant->prod_effective_price;
        $exchange_effective_price =  $prod_variant->prod_exchange_effective_price;
        $product_emi = $prod_variant->product_emi;
        $product_emi_options = $prod_variant->product_emi_options;
        $product_benefit_amount = $prod_variant->product_benefit_amount;
        $product_benefit_details = $prod_variant->product_benefit_details;
        $product_benefit_amount = $prod_variant->product_benefit_amount;
        $product_benefit_details = $prod_variant->product_benefit_details;
        $product_effective_emi = $prod_variant->prod_effective_emi;
        $product_exchange_effective_emi = $prod_variant->prod_exchange_effective_emi;
        $prod_exchange_effective_emi_text = $prod_variant->prod_exchange_effective_emi_text;

        $product_net_effective_price =  $prod_variant->prod_net_effective_price;
        $product_exchange_price =  $prod_variant->prod_exchange_price;
        $product_exchange_bonus = $prod_variant->prod_exchange_bonus;
        $product_cashback = $prod_variant->prod_cashback;


        if ($mrp != '0') {
          $mrp = '&#8377;' . currency_format($prod_variant->prod_mrp, 'INR');
        }

        if ($store_discount != '0') {
          $store_discount = '&#8377;' . currency_format($prod_variant->prod_store_discount, 'INR');
        }

        if ($effective_price != '0') {
          $effective_price = '&#8377;' . currency_format($prod_variant->prod_effective_price, 'INR');
        }

        if ($exchange_effective_price != '0') {
          $exchange_effective_price = '&#8377;' . currency_format($prod_variant->prod_exchange_effective_price, 'INR');
        }

        if($product_effective_emi != '0.00'){
          $product_effective_emi = '&#8377;' . currency_format($prod_variant->prod_effective_emi, 'INR');
        }

        if($product_exchange_effective_emi != '0.00'){
          $product_exchange_effective_emi = '&#8377;' . currency_format($prod_variant->prod_exchange_effective_emi, 'INR');
        }
        if($product_net_effective_price != '0'){
          $product_net_effective_price = '&#8377;' . currency_format($prod_variant->prod_net_effective_price, 'INR');
        }

        if($product_exchange_price != '0'){
          $product_exchange_price = '&#8377;' . currency_format($prod_variant->prod_exchange_price, 'INR');
        }

        if($product_exchange_bonus != '0'){
          $product_exchange_bonus = '&#8377;' . currency_format($prod_variant->prod_exchange_bonus, 'INR');
        }

        if($product_cashback != '0'){
          $product_cashback = '&#8377;' . currency_format($prod_variant->prod_cashback, 'INR');
        }

        $output = [
          'status' => true,
          'message' => 'Product pricing for EPC fetched successfully!',
          'data' => [
            'mrp' => $mrp,
            'effective_price' => $effective_price,
            'store_discount' => $store_discount,
            'exchange_effective_price' => $exchange_effective_price,
            'product_emi' => '&#8377; '.$product_emi,
            'product_emi_options' => $product_emi_options,
            'product_benefit_amount' => '&#8377; '.$product_benefit_amount,
            'product_benefit_details' => $product_benefit_details,
            'product_effective_emi' => $product_effective_emi,
            'product_exchange_effective_emi' => $product_exchange_effective_emi,
            'product_exchange_effective_emi_text' => $prod_exchange_effective_emi_text,
            'exchange_effective_price' => $exchange_effective_price,
            'store_discount_text' => $prod_variant->prod_store_discount_text,
            'effective_price_text' => $prod_variant->prod_effective_price_text,
            'exchange_effective_price_text' => $prod_variant->prod_exchange_effective_price_text,
            'prod_variant_slug' => $prod_variant_slug,
            'product_net_effective_price' =>  $product_net_effective_price,
            'product_exchange_price' =>  $product_exchange_price,
            'product_exchange_bonus' => $product_exchange_bonus,
            'product_cashback' => $product_cashback,
          ],
        ];
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fething product prices!',
          'data' => [
            'error' => $this->db->error(),
          ],
        ];
      }
    } else {
      $output = [
        'status' => false,
        'message' => 'Not a valid request',
        'data' => [],
      ];

      $this->output->set_status_header(400);
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  public function get_switcher_calculator_switch_to()
  {
    $output = ['success' => false];

    if ($this->input->method() == 'post') {
      $switch_from_device = $this->input->post('switch_from_device');

      $switch_from_device = memcached_get("switcher-calculator-switch-from-$switch_from_device");

      if (!$switch_from_device) {
        $switch_to_device = $this->db
          ->select('switch_to')
          ->distinct()
          ->where('switch_from', $switch_from_device)
          ->get('switcher_calculator')
          ->result();
      }

      memcached_save("switcher-calculator-switch-from-$switch_from_device", $switch_from_device, 3600);

      $output['success'] = true;
      $output['data'] = $switch_to_device;
    }



    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  public function get_switcher_calculator_switch_amount()
  {
    $output = ['success' => false];

    if ($this->input->method() == 'post') {
      $switch_from_device = $this->input->post('switch_from_device');
      $switch_to_device = $this->input->post('switch_to_device');

      $switch_amount = memcached_get("switcher-calculator-switch-from-$switch_from_device-to-$switch_to_device");

      if (!$switch_amount) {
        $switch_amount = $this->db
          ->select('amount')
          ->distinct()
          ->where(['switch_from' => $switch_from_device, 'switch_to' => $switch_to_device])
          ->get('switcher_calculator')
          ->row();
      }

      memcached_save("switcher-calculator-switch-from-$switch_from_device-to-$switch_to_device", $switch_amount, 3600);

      $output['success'] = true;
      $output['data'] = $switch_amount;
    }



    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  public function get_zest_offer_stores()
  {
    $response = ['status' => false];

    if ($this->input->is_ajax_request()) {
      $lat = $this->input->post('lat');
      $lng = $this->input->post('lng');
      $state_id = $this->input->post('state_id');
      $city_id = $this->input->post('city_id');
      //$offline_radius = $this->input->post('distance') ?: 5; //km 
      $radius = 15; //km

      if ($lat && $lng) {
        $current_city_id = $this->compo_m->getNearestCityByLoc($lat, $lng, $radius);
        $stores = multi_select_query_where('stores_with_offers', ['city_id' => $current_city_id]);
        $response = ['status' => true, "stores" => $stores];
      } else if ($state_id && $city_id) {
        $stores = multi_select_query_where('stores_with_offers', ['city_id' => $city_id]);
        $response = ['status' => true, "stores" => $stores];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(400)
      ->set_output(json_encode($response));
  }


  public function get_nearby_partner_stores_data_by_pincode()
  {
    $response = ['status' => false];

    if ($this->input->is_ajax_request()) {
      
        $pincode = $this->input->post('pincode');
        //$pincode = '110032';
        $pincodecount = $this->compo_m->getPincodeAvailability($pincode);

       
        if (!empty($pincodecount)){
        
       
          $multi_brand_data = $this->compo_m->getOfflineStoresByPincode($pincode, 'multi');
          $mono_brand_data = $this->compo_m->getOfflineStoresByPincode($pincode, 'mono');


          if(!empty($multi_brand_data) || !empty($mono_brand_data)){

          $offline_store_data = [
            'multi_brand_data' => $multi_brand_data,
            'mono_brand_data' => $mono_brand_data
          ];


          if (!empty($offline_store_data)) {
            $offline_stores = $this->load->view('components/offline_stores', ['offline_store_data' => $offline_store_data], TRUE);
  
            $response['data']['offline_stores'] = $offline_stores;
            
          }

          $online_store_data = $this->compo_m->getOnlineStoresByPincode($pincode);

          if (!empty($online_store_data)) {
            //$online_stores = $this->load->view('components/online_stores', ['online_store_data' => $online_store_data], TRUE);

            
          $this->load->model('home_model', 'home_m');
          //premium partners
         
             $premium_partners = $this->home_m->getPremiumPartners();
   
   
             $data['online_store_data_new'] = $online_store_data;
   
             $data['premium_partners_data'] = $premium_partners;
   
   
   
           $online_stores = $this->load->view('components/online_stores',$data , TRUE);
  
            $response['data']['online_stores'] = $online_stores;
          }
  
          $response['status'] = true;

          return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($response));
      } else {
        $this->load->view('components/not_found');
        $response = ['status' => false];
      }
    
    } else {

     
      $this->load->model('home_model', 'home_m');
      //premium partners
     
         $premium_partners = $this->home_m->getPremiumPartners();
         $data['premium_partners_data'] = $premium_partners;
         $online_stores = $this->load->view('components/online_stores',$data , TRUE);
  
         $response['data']['online_stores'] = $online_stores;
         $response['status'] = true;
        //  echo '<pre>';
        // print_r($response);
        //  echo '</pre>';

         return $this->output
         ->set_content_type('application/json')
         ->set_output(json_encode($response));
    }


    }
  

  }


}
