<?php

class Banner_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function get_banner_positions($where = null, $orderByColumn = null, $order = null) {
    $table_name = 'banner_positions';

    if ((is_null($orderByColumn)) && (is_null($order))) {
      if (is_null($where)) {
        return select_method($table_name);
      } else {
        return select_where_method($table_name, $where);
      }
    } else {
      return multi_select_order_by_method($table_name, $orderByColumn, $order);
    }
  }

  public function get_banner_data($where, $orderByColumn = null, $order = null) {
    if ((is_null($orderByColumn)) && (is_null($order))) {
      return select_where_method('banners', $where);
    } else {
      if (is_null($where)) {
        return multi_select_order_by_method('banners', $orderByColumn, $order);
      } else {
        return multi_select_where_order_by_method('banners', $where, $orderByColumn, $order);
      }
    }
  }

}
