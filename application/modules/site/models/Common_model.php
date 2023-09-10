<?php

class Common_model extends CI_Model
{
  public $master_db;
  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access
  }

  public function getBannersByPositionSlug($slug = null, $region_name = null)
  {
    // $sql = "SELECT b.* FROM banners AS b
    // JOIN banner_positions AS bp ON bp.id = b.banner_position_id
    // WHERE bp.position_slug = ?
    // AND bp.status = '1'
    // AND b.status = '1'
    // AND ( b.start_date IS NULL OR b.start_date <= ?)
    // AND ( b.end_date IS NULL OR b.end_date >= ?)
    // AND b.target_user IN ('android','all')
    // ORDER BY b.display_order ASC";

    // return $this->db->query($sql, [$slug, date('Y-m-d H:i:s'), date('Y-m-d H:i:s')])->result();

    if (in_array($slug, ['', null])) {
      return [];
    } else {
      $current_date = date('Y-m-d H:i:s');

      $where = [
        'bp.position_slug' => $slug,
        'bp.status' => '1',
        'b.status' => '1'
      ];

      $user_device = get_user_agent();

      if ($user_device == 'dex_all' || $user_device == 'dex_win' || $user_device == 'dex_mac') {
        $target_users = [$user_device, 'all', 'dex_all'];
      } else {
        $target_users = [$user_device, 'all'];
      }

      $start_where = "(b.start_date IS NULL OR b.start_date <='" . $current_date . "')";

      $end_where = "(b.end_date IS NULL OR b.end_date >='" . $current_date . "')";

      $region_name = (empty($region_name) || $region_name == 'default') ? '' : $region_name;

      $query = $this->db->select('b.*, bp.position_slug')
        ->from('banner_positions AS bp')
        ->join('banners as b', 'b.banner_position_id = bp.id')
        ->where($where)
        ->where_in('b.target_user', $target_users)
        ->where($start_where)
        ->where($end_where)
        ->where("(b.regions = '' OR b.regions IS NULL OR FIND_IN_SET('$region_name',b.regions))")
        ->order_by('b.display_order', 'ASC')
        ->get();

      $result = $query->result();

      return $result;
    }
  }

  public function getMetaData($slug = null)
  {
    return $this->db->select('page_title,page_meta_keywords,page_meta_description,gtags_header,gtags_body_start,gtags_body_end')
      ->get_where('routes', ['slug' => $slug, 'status' => '1'])->row();
  }

  public function getProdWithCat()
  {
    $categories = $this->db
      ->select('cat_slug,cat_id,cat_name')
      ->where(['status' => '1'])
      ->order_by('display_order')
      ->limit(6)
      ->get('categories')
      ->result();

    foreach ($categories as $key => $cat) {
      $categories[$key]->products = $this->db
        ->select('prod_slug,prod_id,prod_name,prod_is_new_status')
        ->order_by('display_order')
        ->get_where('products', ['cat_id' => $cat->cat_id, 'status' => '1'])
        ->result();
    }

    return $categories;
  }

  public function getNavigationData($slug = 'null')
  {
    return $this->db->select('r.name,r.slug,r.controller')
      ->from('nav_sections as ns')
      ->join('nav_items as ni', 'ni.nav_section_id = ns.id')
      ->join('routes as r', 'r.id = ni.route_id')
      ->where(['ns.slug' => $slug, 'ns.status' => '1', 'r.status' => '1'])
      ->order_by('ni.display_order')
      ->get()
      ->result();
  }

  public function getVisualCatData()
  {

    $categories = $this->db->where(['status' => '1'])->order_by('display_order')->limit(6)->get('categories')->result();
    $products = [];

    foreach ($categories as $cat) {
      $products[] = $this->db->select('prod_is_new_status,prod_slug,prod_name,prod_img_sm')->order_by('display_order')->limit(6)->get_where('products', ['cat_id' => $cat->cat_id, 'status' => '1'])->result();
    }

    return ['categories' => $categories, 'products' => $products];
  }

  public function getAllTrendingSearch()
  {
    return $this->db->order_by('display_order')->get('trending_searches')->result();
  }

  public function getAppVersion()
  {
    return $this->db->get('app_version')->row()->version;
  }

  public function getRegionName()
  {
    try {
      if (!in_array(ENVIRONMENT, ['testing', 'production'])) {
        throw new Exception('stage or production environment required');
      }

      $key = IPSTACK_API_KEY;
      $ip_address = get_ip_address();

      $this->load->library('form_validation');

      if (!$this->form_validation->valid_ip($ip_address)) {
        throw new Exception('invalid_ip_address');
      }

      $url = "http://api.ipstack.com/$ip_address?access_key=$key";

      $curl = curl_init($url);

      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

      $curl_response = curl_exec($curl);

      curl_close($curl);

      if ($curl_response === false) {
        throw new Exception('curl no response');
      }

      $decoded = json_decode($curl_response);

      if (isset($decoded->region_name)) {
        return strtolower($decoded->region_name);
      }
    } catch (\Exception $e) {
      // return print_r($e->getMessage());
      return 'default';
    }

    return 'default';
  }
}
