<?php

class Store_locator_model extends CI_Model
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('components_model', 'compo_m');
  }

  public function get_nearby_partner_stores_data($lat, $lng, $distance)
  {
    $result = [];

    if ($lat && $lng) {
      /* $resultpartners = $this->db
        ->select('
            *,
            ACOS(
              SIN(RADIANS(`lat`))
              * SIN(RADIANS(' . $lat . '))
              + COS(RADIANS(`lat`))
              * COS(RADIANS(' . $lat . '))
              * COS(RADIANS(`lng`) - RADIANS(' . $lng . '))
            ) * 6380 AS `distance`')
        ->from('`partners_state_city_relation`')
        ->where('
            ACOS(
              SIN(RADIANS(`lat`))
              * SIN(RADIANS(' . $lat . '))
              + COS(RADIANS(`lat`))
              * COS(RADIANS(' . $lat . '))
              * COS(RADIANS(`lng`) - RADIANS(' . $lng . '))
            ) * 6380 < 50') // 50 kms
        ->order_by('`distance`')
        ->get()
        ->result();

      $resultPartnersDetails =  $this->db
        ->select('*')
        ->from('partners')
        ->order_by('`id`')
        ->get()
        ->result(); */

      /* $resultAarAprDetails = $this->db
        ->select('
              *,
              ACOS(
                SIN(RADIANS(`lat`))
                * SIN(RADIANS(' . $lat . '))
                + COS(RADIANS(`lat`))
                * COS(RADIANS(' . $lat . '))
                * COS(RADIANS(`lng`) - RADIANS(' . $lng . '))
              ) * 6380 AS `distance`')
        ->from('`store_locations_new`')
        ->where('
              ACOS(
                SIN(RADIANS(`lat`))
                * SIN(RADIANS(' . $lat . '))
                + COS(RADIANS(`lat`))
                * COS(RADIANS(' . $lat . '))
                * COS(RADIANS(`lng`) - RADIANS(' . $lng . '))
              ) * 6380 < ' . $distance) // 5 kms
        ->order_by('`distance`')
        ->where('store_type !=', 'multi-brand')
        ->get()
        ->result_array();

      $resultMultiBrand = $this->db
        ->select('
            *,
            ACOS(
              SIN(RADIANS(`lat`))
              * SIN(RADIANS(' . $lat . '))
              + COS(RADIANS(`lat`))
              * COS(RADIANS(' . $lat . '))
              * COS(RADIANS(`lng`) - RADIANS(' . $lng . '))
            ) * 6380 AS `distance`')
        ->from('`store_locations_new`')
        ->where('
            ACOS(
              SIN(RADIANS(`lat`))
              * SIN(RADIANS(' . $lat . '))
              + COS(RADIANS(`lat`))
              * COS(RADIANS(' . $lat . '))
              * COS(RADIANS(`lng`) - RADIANS(' . $lng . '))
            ) * 6380 < ' . $distance) // 5 kms
        ->order_by('`distance`')
        ->where('store_type', 'multi-brand')
        ->get()
        ->result_array(); */

      /* $partners = $this->db
        ->get('partners')
        ->result(); */

      $onlineStores = $this->compo_m->getOnlineStoresByLoc($lat, $lng, 50);
      $onlineStores = json_decode(json_encode($onlineStores), true);

      $monoBrandStores = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $distance, 'mono');
      $monoBrandStores = json_decode(json_encode($monoBrandStores), true);

      $multiBrandStores = $this->compo_m->getOfflineStoresByLoc($lat, $lng, $distance, 'multi');
      $multiBrandStores = json_decode(json_encode($multiBrandStores), true);

      $result = [
        //'partners' => $partners,
        //'partners_details' => $resultPartnersDetails,
        'onlineStores' => $onlineStores,
        'monoBrandStores' => $monoBrandStores,
        'multiBrandStores' => $multiBrandStores,
      ];
    }

    return $result;
  }

  public function get_store_partner_details_new($state, $city)
  {
    /* $this->db->trans_start();

    $this->db
      ->select('*')
      ->from('store_locations_new');

    if ($city) {
      $this->db->where('city = "' . filter_var($this->input->post('city'), FILTER_SANITIZE_STRING) . '"');
    }

    if ($state) {
      $this->db->where('state = "' . filter_var($state, FILTER_SANITIZE_STRING) . '"');
    }

    $this->db->where('store_type !=', 'multi-brand');
    $this->db->order_by('store_type', 'asc');

    $resultAarAprDetails = $this->db
      ->get()
      ->result_array();

    $this->db
      ->select('*')
      ->from('store_locations_new');

    if ($city) {
      $this->db->where('city = "' . filter_var($this->input->post('city'), FILTER_SANITIZE_STRING) . '"');
    }

    if ($state) {
      $this->db->where('state = "' . filter_var($state, FILTER_SANITIZE_STRING) . '"');
    }

    $this->db->where('store_type', 'multi-brand');
    $this->db->order_by('store_type', 'asc');

    $resultMultiBrand = $this->db
      ->get()
      ->result_array();

    $resultpartners = $this->db
      ->select('*')
      ->from('partners_state_city_relation')
      ->where('state', $state)
      ->where('city', $city)
      ->order_by('`city`')
      ->get()
      ->result();

    $resultPartenersDetail =  $this->db
      ->select('*')
      ->from('partners')
      ->order_by('`id`')
      ->get()
      ->result();

    $this->db->trans_complete(); */

    /* $partners = $this->db
        ->get('partners')
        ->result(); */

    $result = [];

    if ($state && $city) {
      $onlineStores = $this->compo_m->getOnlineStoresById($state, $city);
      $onlineStores = json_decode(json_encode($onlineStores), true);

      $monoBrandStores = $this->compo_m->getOfflineStoresById($state, $city, 'mono');
      $monoBrandStores = json_decode(json_encode($monoBrandStores), true);

      $multiBrandStores = $this->compo_m->getOfflineStoresById($state, $city, 'multi');
      $multiBrandStores = json_decode(json_encode($multiBrandStores), true);

      $result = [
        // 'partners' => $partners,
        // 'parteners_details' => $resultPartenersDetail
        'onlineStores' => $onlineStores,
        'monoBrandStores' => $monoBrandStores,
        'multiBrandStores' => $multiBrandStores,
      ];
    }

    return $result;
  }


  public function get_store_partner_details_new_pincode($pincode)
  {
  
    $result = [];

    if ($pincode) {

      $cidata1 = $this->db->select("*")
      ->where('pincode',$pincode)
      ->get('stores');

     $pincodecount = $cidata1->num_rows();
      if($pincodecount > 0){
      $onlineStores = $this->compo_m->getOnlineStoresByPincode($pincode);
      $onlineStores = json_decode(json_encode($onlineStores), true);

      $monoBrandStores = $this->compo_m->getOfflineStoresByPincode($pincode, 'mono');
      $monoBrandStores = json_decode(json_encode($monoBrandStores), true);

      $multiBrandStores = $this->compo_m->getOfflineStoresByPincode($pincode, 'multi');
      $multiBrandStores = json_decode(json_encode($multiBrandStores), true);
          $result = [
            // 'partners' => $partners,
            // 'parteners_details' => $resultPartenersDetail
            'onlineStores' => $onlineStores,
            'monoBrandStores' => $monoBrandStores,
            'multiBrandStores' => $multiBrandStores,
          ];
      } else {
        $result = [
          // 'partners' => $partners,
          // 'parteners_details' => $resultPartenersDetail
          'onlineStores' => '',
          'monoBrandStores' => '',
          'multiBrandStores' => '',
        ];
      }
      

      
    }


    // echo '<pre>';
    // print_r($result);
    // echo '</pre>';
    return $result;
  }
}
