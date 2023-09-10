<?php

class Components_model extends CI_Model
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();
    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access
  }

  public function getStates($col = 'name', $order = 'ASC')
  {
    return $this->db
      ->select('id, name')
      ->order_by($col, $order)
      ->get_where('states', ['status' => '1'])
      ->result();
  }

  public function getCities($col = 'name', $order = 'ASC')
  {
    return $this->db
      ->select('id, name as text')
      ->order_by($col, $order)
      ->get_where('cities', ['status' => '1'])
      ->result();
  }

  public function getCitiesByStateId($id = 0, $col = 'name', $order = 'ASC')
  {
    return $this->db
      ->select('id, name as text')
      ->order_by($col, $order)
      ->get_where('cities', ['state_id' => $id, 'status' => '1'])
      ->result();
  }

  public function getOnlineStoresByLoc($lat, $lng, $distance)
  {
    $pointer = "ACOS( SIN(RADIANS(`lat`)) * SIN(RADIANS($lat)) + COS(RADIANS(`lat`)) * COS(RADIANS($lat)) * COS(RADIANS(`lng`) - RADIANS($lng))) * 6380";

    $data = $this->db->select("GROUP_CONCAT(DISTINCT city_id SEPARATOR '|') AS city_id,GROUP_CONCAT(DISTINCT  CONCAT(state_id,'_all') SEPARATOR '|') AS state_id,$pointer AS `distance`")
      ->where("$pointer < $distance")
      ->where('status', '1')
      ->where_not_in('type', array('lfr', 'swc'))
      ->get('stores')
      ->row();

    // $data = $this->db->select("GROUP_CONCAT(DISTINCT c.id SEPARATOR '|') AS city_id,GROUP_CONCAT(DISTINCT  CONCAT(s.id,'_all') SEPARATOR '|') AS state_id, $pointer AS `distance`")
    //   ->join('states AS s', 's.id = c.state_id')
    //   ->where("$pointer < $distance")
    //   ->order_by('distance')
    //   ->get('cities AS c')
    //   ->row();

    if (is_null($data->city_id) && is_null($data->state_id)) {
      $regExp = 'all';
    } else {
      $regExp = "all|$data->city_id|$data->state_id";
    }



    $partners = $this->db
      ->where('status', '1')
      ->where('is_online', '1')
      ->where('is_premium !=' , '1')
      ->where("CONCAT(',', `available_in`, ',') REGEXP ',($regExp),'")
      ->order_by('FIELD(reseller, "apr","gt aar","lfr","swc","online"),name')
      ->get('partners')
      ->result();

    return $partners;
  }

  public function getOnlineStoresById($state_id, $city_id)
  {
    $partners = $this->db
      ->where('status', '1')
      ->where('is_online', '1')
      ->where('is_premium !=' , '1')
      ->where("CONCAT(',', `available_in`, ',') REGEXP ',(all|$city_id|" . $state_id . "_all),'")
      ->order_by('FIELD(reseller, "apr", "gt aar","lfr","swc","online"),name')
      ->get('partners')
      ->result();
    return $partners;
  }

  public function getPincodeAvailability($pincode){
    $citycount = $this->db->select("*")
    ->where('pincode',$pincode)
    ->get('stores')
    ->result();
   

    return $citycount;
}



  public function getOfflineStoresByLoc($lat, $lng, $distance, $type)
  {
    $pointer = "ACOS( SIN(RADIANS(`lat`)) * SIN(RADIANS($lat)) + COS(RADIANS(`lat`)) * COS(RADIANS($lat)) * COS(RADIANS(`lng`) - RADIANS($lng))) * 6380";

    switch ($type) {
      case 'mono':
        $data = $this->db->select("*, $pointer AS `distance`")
          ->where("$pointer < $distance")
          ->where('status', '1')
          ->where_not_in('type', array('lfr', 'swc', 'multi brand'))
          ->order_by('FIELD(type, "apr", "mono apr","aar","mono aar","gt aar"),distance')
          ->get('stores')
          ->result();
        break;

      case 'multi':
        $data = $this->db->select("*, $pointer AS `distance`")
          ->where("$pointer < $distance")
          ->where('status', '1')
          ->where_in('type', array('lfr', 'swc', 'multi brand'))
          ->order_by('distance,name')
          ->get('stores')
          ->result();
        break;

      default:
        $data = $this->db->select("*, $pointer AS `distance`")
          ->where("$pointer < $distance")
          ->where(['status' => '1'])
          ->order_by('FIELD(type, "apr", "mono apr","aar","mono aar","gt aar","multi brand"),name')
          ->get('stores')
          ->result();
        break;
    }

    return $data;
  }

  public function getOfflineStoresById($state_id, $city_id, $type)
  {

    switch ($type) {
      case 'mono':
        // $data = $this->db
        //   ->where(['state_id' => $state_id, 'city_id' => $city_id])
        //   ->where('status', '1')
        //   ->where_not_in('type', array('lfr', 'swc', 'multi brand'))
        //   ->order_by('FIELD(type, "apr", "mono apr","aar","mono aar","gt aar"),name')
        //   ->get('stores')
        //   ->result();

        $sql = "Select * FROM stores WHERE type = 'apr' AND state_id = $state_id AND city_id = $city_id AND status = 1
        UNION
        Select * FROM stores WHERE type = 'mono apr' AND state_id = $state_id AND city_id = $city_id AND status = 1
        UNION
        Select * FROM stores WHERE type = 'aar' AND state_id = $state_id AND city_id = $city_id AND status = 1
        UNION
        Select * FROM stores WHERE type = 'mono aar' AND state_id = $state_id AND city_id = $city_id AND status = 1
        UNION
        Select * FROM stores WHERE type = 'gt aar' AND state_id = $state_id AND city_id = $city_id AND status = 1
        ORDER BY type,rand()";

        $data = $this->db->query($sql)->result();
        break;

      case 'multi':
        $data = $this->db
          ->where(['state_id' => $state_id, 'city_id' => $city_id])
          ->where('status', '1')
          ->where_in('type', array('lfr', 'swc', 'multi brand'))
          ->order_by('rand()')
          ->get('stores')
          ->result();
        break;

      default:
        $data = $this->db
          ->where(['state_id' => $state_id, 'city_id' => $city_id, 'status' => '1'])
          ->order_by('FIELD(type, "apr", "mono apr","aar","mono aar","gt aar","multi brand"),name')
          ->get('stores')
          ->result();
        break;
    }

    return $data;
  }

  public function getNearestCityByLoc($lat, $lng, $distance = 0)
  {
    $pointer = "ACOS( SIN(RADIANS(`lat`)) * SIN(RADIANS($lat)) + COS(RADIANS(`lat`)) * COS(RADIANS($lat)) * COS(RADIANS(`lng`) - RADIANS($lng))) * 6380";
    $data = $this->db->select("id, $pointer AS `distance`")
      ->order_by('distance')
      ->limit(1)
      ->get('cities')
      ->row();

    return @$data->id;
  }

  public function getOnlineStoresByPincode($pincode)
  {
    $cidata1 = $this->db->select("DISTINCT(city_id), `state_id`")
      ->where('pincode',$pincode)
      ->get('stores');

     // echo $cidata1->num_rows();


    $cidata = $this->db->select("DISTINCT(city_id), `state_id`")
      ->where('pincode',$pincode)
      ->get('stores')
      ->result();

      

    $city_id = $cidata[0]->city_id;
    $state_id = $cidata[0]->state_id;

    $partners1 = $this->db
      ->where('status', '1')
      ->where('is_online', '1')
      ->where('is_premium !=' , '1')
      ->where("CONCAT(',', `available_in`, ',') REGEXP ',(all|$city_id|" . $state_id . "_all),'")
      ->order_by('FIELD(reseller, "apr", "gt aar","lfr","swc","online"),name')
      ->get('partners');
      
    $partners = $this->db
      ->where('status', '1')
      ->where('is_online', '1')
      ->where('is_premium !=' , '1')
      ->where("CONCAT(',', `available_in`, ',') REGEXP ',(all|$city_id|" . $state_id . "_all),'")
      ->order_by('FIELD(reseller, "apr", "gt aar","lfr","swc","online"),name')
      ->get('partners')
      ->result();

    return $partners;
  }


  public function getOfflineStoresByPincode($pincode, $type)
  {

    switch ($type) {
      case 'mono':

        $sql = "Select * FROM stores WHERE type = 'apr' AND pincode = $pincode AND status = 1
        UNION
        Select * FROM stores WHERE type = 'mono apr' AND pincode = $pincode  AND status = 1
        UNION
        Select * FROM stores WHERE type = 'aar' AND pincode = $pincode  AND status = 1
        UNION
        Select * FROM stores WHERE type = 'mono aar' AND pincode = $pincode  AND status = 1
        UNION
        Select * FROM stores WHERE type = 'gt aar' AND pincode = $pincode  AND status = 1
        ORDER BY type,rand()";

        $data = $this->db->query($sql)->result();
        break;

      case 'multi':
        $data = $this->db
          ->where(['pincode' => $pincode])
          ->where('status', '1')
          ->where_in('type', array('lfr', 'swc', 'multi brand'))
          ->order_by('rand()')
          ->get('stores')
          ->result();
        break;

      default:
        $data = $this->db
          ->where(['pincode' => $pincode, 'status' => '1'])
          ->order_by('FIELD(type, "apr", "mono apr","aar","mono aar","gt aar","multi brand"),name')
          ->get('stores')
          ->result();
        break;
    }

    return $data;
  }


}
