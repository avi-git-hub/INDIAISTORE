<?php

class Home_model extends CI_Model
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access
  }

  public function getPremiumPartners()
  {
    return $this->db->order_by('name')->get_where('partners', ['is_premium' => '1', 'status' => '1'])->result();
  }

  public function getStates($col = 'name', $order = 'ASC')
  {
    // if (!is_null($search)) $this->db->where("name LIKE '%$search%'");
    return $this->db->select('id, name')->order_by($col, $order)->get('states')->result();
  }

  public function getCategories()
  {
    return $this->db
      ->select('cat_slug,cat_name,cat_thumbnail,cat_home_thumbnail')
      ->where(['status' => '1', 'cat_show_on_homepage' => '1'])
      ->order_by('display_order')
      ->limit(5)
      ->get('categories')
      ->result();
  }

  public function getCategoriesNew()
  {
    return $this->db
      ->select('cat_slug,cat_name,cat_thumbnail,cat_home_thumbnail')
      ->where(['status' => '1', 'cat_show_on_homepage' => '1'])
      ->order_by('display_order')
      ->limit(10)
      ->get('categories')
      ->result();
  }



  public function getSnapshots()
  {
    return $this->db
      ->select('*')
      ->where(['status' => '1'])
      ->order_by('display_order')
      ->get('stories')
      ->result();
  }


  public function getStorydetails($story_id){
   $storydetailsdata =  $this->db
    ->select('*')
    ->where(['status' => '1', 'story_id' => $story_id])
    ->order_by('display_order')
    ->get('story_details')
    ->result();

    return  $storydetailsdata;
  }


  public function getSearchResults($searchTerm)
  {
    $data1 = $this->db->select("p.prod_name AS product_name,CONCAT('" . base_url() . "',p.prod_slug) AS product_page_url")->where("p.prod_tags LIKE '%$searchTerm%'")->get('products AS p')->result_array();
    $data2 = $this->db->select("s.name AS name,s.cta AS cta_url")->where("s.tags LIKE '%$searchTerm%'")->get('other_searches AS s')->result_array();
    // return array_unique(array_merge($data1, $data2), SORT_REGULAR);
    return array_merge($data1, $data2);
  }
}
