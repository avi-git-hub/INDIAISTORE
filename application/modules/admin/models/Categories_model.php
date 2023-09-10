<?php

class Categories_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

  public function get_categories($where = null, $orderByColumn = null, $order = null) {
    $table_name = 'categories';

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

}
