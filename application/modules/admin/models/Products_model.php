<?php

class Products_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_products($where = null, $orderByColumn = null, $order = null)
  {
    $this->db
      ->select('
        c.cat_name AS prod_category, c.cat_applicable_variants as prod_variant_ids, p.*,
        pf.prod_color, pf.prod_storage_space, pf.prod_screen_size, pf.prod_processor,
        pf.prod_ram, pf.prod_battery, pf.prod_camera, pf.prod_used_for
      ')
      ->from('products AS p')
      ->join('categories AS c', 'p.cat_id = c.cat_id', 'left')
      ->join('product_features AS pf', 'p.prod_id = pf.prod_id', 'left');

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

    $prod_data = $this->db
      ->get()
      ->result();

    return $prod_data;
  }

  public function get_product_variants($where = null, $orderByColumn = null, $order = null)
  {
    $this->db
      ->select('*')
      ->from('product_variants');

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

    $prod_variants_data = $this->db
      ->get()
      ->result();

    return $prod_variants_data;
  }

  public function get_applicable_variant_details($prod_variant_ids)
  {
    $this->db
      ->select('
        pfc.feat_cat_id, pfc.feat_cat_name, pfc.feat_cat_slug,
        pfv.feat_id, pfv.feat_title, pfv.feat_value, pfv.feat_slug,
        pfv.feat_hex_code, pfv.feat_icon, pfv.feat_thumbnail, pfv.display_order
      ')
      ->from('product_feature_categories AS pfc')
      ->join('product_feature_values AS pfv', 'pfc.feat_cat_id = pfv.feat_cat_id', 'left')
      ->where_in('pfc.feat_cat_id', $prod_variant_ids)
      ->where('pfc.status', '1')
      ->where('pfv.status', '1');

    $product_variants = $this->db
      ->get()
      ->result();

    return $product_variants;
  }

  public function get_applicable_feature_details($prod_feature_ids = null)
  {
    $this->db
      ->select('
        pfc.feat_cat_slug,
        pfv.feat_id, pfv.feat_cat_id,	pfv.feat_title, pfv.feat_slug,
        pfv.feat_value, pfv.feat_hex_code, pfv.feat_icon, pfv.feat_thumbnail
      ')
      ->from('product_feature_categories AS pfc')
      ->join('product_feature_values AS pfv', 'pfc.feat_cat_id = pfv. feat_cat_id', 'left')
      ->where('pfc.status', '1')
      ->where('pfv.status', '1');

    if (!is_null($prod_feature_ids)) {
      $this->db->where_in('pfc.feat_cat_id', $prod_feature_ids);
    }

    $product_features = $this->db
      ->get()
      ->result();

    $applicable_features_data = [];

    foreach ($product_features as $feature) {
      $applicable_features_data[$feature->feat_cat_slug][] = $feature;

      unset($feature->feat_cat_slug);
    }

    return $applicable_features_data;
  }

  public function get_selected_feature_value_details($prod_feature_value_ids = null)
  {
    $this->db
      ->select('
        pfv.feat_id, pfv.feat_cat_id,
        pfv.feat_title, pfv.feat_slug,
        pfv.feat_value, pfc.feat_cat_slug,
      ')
      ->from('product_feature_values AS pfv')
      ->join('product_feature_categories AS pfc', 'pfv.feat_cat_id = pfc. feat_cat_id')
      ->where_in('pfv.feat_id', $prod_feature_value_ids)
      ->where('pfv.status', '1')
      ->where('pfc.status', '1');

    $selected_feature_values = $this->db
      ->get()
      ->result();

    return $selected_feature_values;
  }

  public function get_product_pdp_image_sets($where = null, $orderByColumn = null, $order = null)
  {
    $table_name = 'product_pdp_image_sets';

    if ((is_null($orderByColumn)) && (is_null($order))) {
      if (is_null($where)) {
        $pdp_image_set_data = select_method($table_name);
      } else {
        $pdp_image_set_data = multi_select_query_where($table_name, $where);
      }
    } else {
      if (is_null($where)) {
        $pdp_image_set_data = multi_select_order_by_method($table_name, $orderByColumn, $order);
      } else {
        $pdp_image_set_data = multi_select_where_order_by_method($table_name, $where, $orderByColumn, $order);
      }
    }

    foreach ($pdp_image_set_data as $set) {
      $set->pdp_images = multi_select_where_order_by_method('product_pdp_images', ['pdp_set_id' => $set->pdp_set_id], 'display_order', 'ASC');
    }

    return $pdp_image_set_data;
  }

  public function get_product_pdp_images($where = null, $orderByColumn = null, $order = null)
  {
    $table_name = 'product_pdp_images';

    if ((is_null($orderByColumn)) && (is_null($order))) {
      if (is_null($where)) {
        return select_method($table_name);
      } else {
        return multi_select_query_where($table_name, $where);
      }
    } else {
      if (is_null($where)) {
        return multi_select_order_by_method($table_name, $orderByColumn, $order);
      } else {
        return multi_select_where_order_by_method($table_name, $where, $orderByColumn, $order);
      }
    }
  }
}
