<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('select_method')) {

  function select_method($tableName)
  {
    $ci = &get_instance();

    $query = $ci->db->query("SELECT * FROM $tableName");

    if ($query) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('insert_method')) {

  function insert_method($tableName, $data)
  {
    $ci = &get_instance();

    $query = $ci->db->insert($tableName, $data);

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('update_method')) {

  function update_method($tableName, $data, $where)
  {
    $ci = &get_instance();

    $query = $ci->db->update($tableName, $data, $where);

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('delete_method')) {

  function delete_method($tableName, $where)
  {
    $ci = &get_instance();

    $query = $ci->db->delete($tableName, $where);

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('delete_where_in_method')) {

  function delete_where_in_method($tableName, $where, $in)
  {
    $ci = &get_instance();

    $query = $ci->db
      ->where_in($where, $in)
      ->delete($tableName);

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('delete_method_multi_column_filter')) {

  function delete_method_multi_column_filter($tableName, $data)
  {
    $ci = &get_instance();

    foreach ($data as $key => $val) {
      $ci->db->where($key, $val);
    }

    $ci->db->delete($tableName);
  }
}

if (!function_exists('select_where_method')) {

  function select_where_method($tableName, $where)
  {
    $ci = &get_instance();

    $query = $ci->db->get_where($tableName, $where);

    if ($query) {
      return $query->row();
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('select_where_order_by_method')) {

  function select_where_order_by_method($tableName, $where, $column, $order, $limit = null)
  {
    $ci = &get_instance();

    $ci->db->order_by($column, $order);

    if (!is_null($limit)) {
      $ci->db->limit($limit);
    }

    $query = $ci->db->get_where($tableName, $where);

    if ($query) {
      return $query->row();
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('multi_select_query_where')) {

  function multi_select_query_where($tableName, $where)
  {
    $ci = &get_instance();

    $query = $ci->db->get_where($tableName, $where);

    if ($query) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('multi_select_query_where_in')) {

  function multi_select_query_where_in($tableName, $where, $in)
  {
    $ci = &get_instance();

    $query = $ci->db
      ->where_in($where, $in)
      ->get($tableName);

    if ($query) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('multi_select_where_order_by_method')) {

  function multi_select_where_order_by_method($tableName, $where, $column, $order, $limit = null)
  {
    $ci = &get_instance();

    $ci->db->order_by($column, $order);

    if (!is_null($limit)) {
      $ci->db->limit($limit);
    }

    $query = $ci->db->get_where($tableName, $where);

    if ($query) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('multi_select_order_by_method')) {

  function multi_select_order_by_method($tableName, $column, $order, $limit = null)
  {
    $ci = &get_instance();

    //$query = $ci->db->query("SELECT * FROM $tableName ORDER BY $column $order");

    $ci->db->order_by($column, $order);

    if (!is_null($limit)) {
      $ci->db->limit($limit);
    }

    $query = $ci->db->get_where($tableName);

    if ($query) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('insert_batch_method')) {

  function insert_batch_method($tableName, $data)
  {
    $ci = &get_instance();

    $query = $ci->db->insert_batch($tableName, $data);

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}

if (!function_exists('update_batch_method')) {

  function update_batch_method($tableName, $data, $where_key)
  {
    $ci = &get_instance();

    $query = $ci->db->update_batch($tableName, $data, $where_key);

    if ($query) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
