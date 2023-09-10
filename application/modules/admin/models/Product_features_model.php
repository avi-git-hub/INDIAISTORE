<?php

class Product_features_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function get_prod_feat_cat($where = null, $orderByColumn = null, $order = null)
  {
    $table_name = 'product_feature_categories';

    if ((is_null($orderByColumn)) && (is_null($order))) {
      if (is_null($where)) {
        return select_method($table_name);
      } else {
        return select_where_method($table_name, $where);
      }
    } else {
      if (is_null($where)) {
        return multi_select_where_order_by_method($table_name, $where, $orderByColumn, $order);
      } else {
        return multi_select_order_by_method($table_name, $orderByColumn, $order);
      }
    }
  }

  public function get_prod_feat_data($where, $orderByColumn = null, $order = null)
  {
    if ((is_null($orderByColumn)) && (is_null($order))) {
      return select_where_method('product_feature_values', $where);
    } else {
      if (is_null($where)) {
        return multi_select_order_by_method('product_feature_values', $orderByColumn, $order);
      } else {
        return multi_select_where_order_by_method('product_feature_values', $where, $orderByColumn, $order);
      }
    }
  }
}
