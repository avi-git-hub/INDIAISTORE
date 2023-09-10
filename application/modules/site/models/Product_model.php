<?php

class Product_model extends CI_Model
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access
  }

  public function get_product_data($product_slug)
  {
    $where = [
      'prod_slug' => $product_slug,
      'pv.status' => '1', // get only those variants whose status is 1
    ];

    // GROUP_CONCAT(DISTINCT(pv.prod_color_hex) ORDER BY pv.display_order) AS prod_color_hex,


    $query = $this->db
      ->select('
        p.*, c.cat_name AS category, c.cat_slug,
        GROUP_CONCAT(DISTINCT(pv.prod_color) ORDER BY pv.display_order) AS prod_color,
	      GROUP_CONCAT(DISTINCT(pv.prod_storage) ORDER BY pv.display_order) AS prod_storage,
        GROUP_CONCAT(DISTINCT(pv.prod_screen_size) ORDER BY pv.display_order) AS prod_screen_size,
        GROUP_CONCAT(DISTINCT(pv.prod_processor) ORDER BY pv.display_order) AS prod_processor,
      ')
      ->from('products AS p')
      ->join('categories as c', 'p.cat_id = c.cat_id')
      ->join('product_variants AS pv', 'p.prod_id = pv.prod_id')
      ->where($where)
      ->get();

    $product_data = $query->row();

    return $product_data;
  }

  public function get_category_name($catid){

    $where = [
      'cat_id' => $catid,
    ];

    $query = $this->db
    ->select('*')
    ->from('categories')
    ->where($where)
    ->get();
    
    $category = $query->row();

    return $category;
  }
  
}
