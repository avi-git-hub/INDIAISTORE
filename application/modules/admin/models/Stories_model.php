<?php

class Stories_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_stories($where = null, $orderByColumn = null, $order = null) {
        $table_name = 'stories';
    
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

      public function get_story($where = null, $orderByColumn = null, $order = null) {
        $table_name = 'stories';
    
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

      public function get_snapshots_details($where = null, $orderByColumn = null, $order = null) {
        $table_name = 'stories';
    
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

      public function get_story_data($where, $orderByColumn = null, $order = null) {
        if ((is_null($orderByColumn)) && (is_null($order))) {
          return select_where_method('story_details', $where);
        } else {
          if (is_null($where)) {
            return multi_select_order_by_method('story_details', $orderByColumn, $order);
          } else {
            return multi_select_where_order_by_method('story_details', $where, $orderByColumn, $order);
          }
        }
      }
}