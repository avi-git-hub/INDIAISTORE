<?php

class Components_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_tabs_data($where = null, $orderByColumn = null, $order = null)
  {
    $this->db
      ->select('
          tb.tb_id,
          tb.section_title, tb.section_slug,
          tb.section_desc, tb.section_for,
          c.cat_id AS category_id, c.cat_name AS category,
          p.prod_id AS product_id, p.prod_name AS product,
          tbd.tb_detail_id, tbd.tab_title, tbd.tab_content_type, tbd.status,
          tbd.banner_upload_mob,tbd.banner_upload_dex, tbd.custom_html, tbd.created_at, tbd.updated_at
        ')
      ->from('tab_blocks AS tb')
      ->join('tab_blocks_details AS tbd', 'tb.tb_id = tbd.tb_id', 'left')
      ->join('categories AS c', 'tb.cat_id = c.cat_id', 'left')
      ->join('products AS p', 'tb.prod_id = p.prod_id', 'left');

    if ((is_null($orderByColumn)) && (is_null($order))) {
      if (is_null($where)) {
        // nothing
      } else {
        $this->db->where($where);
      }
    } else {
      if (is_null($where)) {
        $this->db->order_by($orderByColumn, $order);
      } else {
        $this->db
          ->where($where)
          ->order_by($orderByColumn, $order);
      }
    }

    $tabs_data = $this->db
      ->get()
      ->result();

    return $tabs_data;
  }
}
