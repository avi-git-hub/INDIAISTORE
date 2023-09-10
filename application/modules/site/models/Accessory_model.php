<?php

class Accessory_model extends CI_Model
{
  public $master_db;
  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access
  }

  public function getAccessoriesByCatId($cat_id, $post_data = null)
  {
    $data = [];

    $attr_ids = @$post_data['attr_id'];

    if (!empty($attr_ids)) {

      $filter_object  = $post_data['filter_object'];

      $sub_query = $this->db->select('a.id');

      $count = 0;
      foreach ($filter_object as $key => $value) {
        if ($key != 'color') {
          $sub_query->join("accessories_attributes_pivot aap$count", "a.id = aap$count.accessory_id and aap$count.attribute_id = $attr_ids[$count]");
          $sub_query->where("(aap$count.attribute_id IN ($attr_ids[$count])) AND (aap$count.value_id IN ('" . implode("','", $value) . "'))");
          $count++;
        }
      }


      $sub_query_result = $sub_query->group_by('a.id')->get('accessories a')->result();

      if (!empty($filter_object['color'])) {
        $sub_query_colors = $this->db
          ->query('SELECT DISTINCT(accessory_id) id FROM accessories_color_image WHERE color IN ("' . implode('", "', $filter_object['color']) . '")')
          ->result();
      }
    }


    $query = $this->db->select('a.id,a.name,a.slug,
      GROUP_CONCAT(DISTINCT(aci.color_hex) ORDER BY aci.display_order) colors_hex,
      GROUP_CONCAT(DISTINCT(aci.color) ORDER BY aci.display_order) colors,
      GROUP_CONCAT(DISTINCT(aci.image) ORDER BY aci.display_order) images')
      ->from('accessories a')
      ->join('accessories_color_image aci', 'aci.accessory_id = a.id', 'left')
      ->where(['a.cat_id' => $cat_id, 'a.status' => '1', 'aci.status' => '1']);


    if (!empty($attr_ids)) {
      if (!empty($sub_query_result)) {
        $query->where_in('a.id', array_column($sub_query_result, 'id'));

        if (!empty($sub_query_colors)) {
          $query->where_in('a.id', array_column($sub_query_colors, 'id'));
        }
      } else {
        $query->where('a.id', 0);
      }
    }

    $data[0] = $query
      ->group_by('aci.accessory_id')
      ->order_by('a.display_order')
      ->get()
      ->result();


    if (empty($post_data)) {

      $data[1] = $this->db->select("
          GROUP_CONCAT(DISTINCT(aa.name) ORDER BY aa.display_order) attr_name,
          GROUP_CONCAT(DISTINCT(aa.id) ORDER BY aa.display_order) attr_id,
          GROUP_CONCAT(DISTINCT(aav.id) ORDER BY aav.display_order) attr_value_id,
          GROUP_CONCAT(DISTINCT(aav.value) ORDER BY aav.display_order) attr_value")
        ->join("accessories_attributes_pivot aap", "aap.accessory_id = a.id", 'left')
        ->join("accessories_attributes aa", "aa.id = aap.attribute_id", 'left')
        ->join("accessories_attributes_values aav", "aav.id = aap.value_id", 'left')
        ->where(["a.cat_id" => $cat_id, 'a.status' => '1'])
        ->group_by("aa.id")
        ->get("accessories a")
        ->result();


      $data[1][] = $this->db->select("
          'color' attr_name,
          '0' attr_id,
          GROUP_CONCAT(DISTINCT(aci.id)) attr_value_id,
          GROUP_CONCAT(DISTINCT(aci.color)) attr_value")
        ->join("accessories_color_image aci", "aci.accessory_id = a.id", 'left')
        ->where(["a.cat_id" => $cat_id, 'a.status' => '1', 'aci.status' => '1'])
        ->get("accessories a")
        ->row();


      // $data[2] = $this->db->query("SELECT 
      //           GROUP_CONCAT(DISTINCT(aav.id)) attr_id ,
      //           GROUP_CONCAT(DISTINCT(aav.value)) attr_value FROM accessories_attributes_values aav
      //           LEFT JOIN accessories_attributes_pivot aap ON aap.value_id = aav.id
      //           LEFT JOIN accessories a ON a.id = aap.accessory_id
      //           WHERE a.cat_id = $cat_id
      //           GROUP BY aap.accessory_id
      //           ORDER BY a.display_order")
      //   ->result();
    }


    return $data;
  }
}
