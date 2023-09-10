<?php

class Category_model extends CI_Model
{
  public $master_db;
  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access
  }

  public function getProdByCatSlug($slug = null, $sorting = null, $filters = null)
  {
    $this->db
      ->select('p.*, pv.prod_variant_id, p.prod_name, c.cat_name, pv.prod_effective_price,pv.prod_mrp, c.cat_slug')
      ->join('products as p', 'p.cat_id = c.cat_id')
      // ->join('product_variants as pv', 'pv.prod_id = p.prod_id')
      ->join('product_variants as pv', "(pv.prod_id = p.prod_id AND pv.prod_mrp = (SELECT min(prod_mrp) FROM product_variants WHERE prod_id = p.prod_id))")
      ->join('product_features as pf', 'pf.prod_id = p.prod_id')
      ->where(['p.status' => '1', 'c.status' => '1', 'c.cat_slug' => $slug]);

    if (!is_null($filters) && (!empty($filters))) {
      foreach ($filters as $column => $value) {
        if (!is_null($value)) {
          if ($column == 'prod_mrp') {
            $min = $value['min'];
            $max = $value['max'];

            $this->db->where("$column BETWEEN $min AND $max");
          } else {
            if (sizeof($value) > 1) {
              $this->db->where('CONCAT(",", `pf`.`' . $column . '`, ",") REGEXP "(' . implode('|', $value) . ')"');
            } else {
              $this->db->where('FIND_IN_SET("' . current($value) . '", `pf`.`' . $column . '`) <> 0', NULL, FALSE);
            }
          }
        }
      }
    }

    $this->db->group_by('p.prod_id');

    if (is_null($sorting)) {
      // $this->db->order_by('pv.prod_mrp, p.display_order');
      $this->db->order_by('p.display_order');
    } else {
      if ($sorting == 'new') {
        $this->db->order_by('p.prod_is_new_status DESC, p.display_order');
      } elseif ($sorting == 'name_asc') {
        $this->db->order_by('p.prod_name', 'ASC');
      } elseif ($sorting == 'name_desc') {
        $this->db->order_by('p.prod_name', 'DESC');
      }
    }

    $query = $this->db->get('categories as c');

    $products = $query->result();

    $prod_imgs = $this->db
      ->select('p.prod_id,pi.pdp_img,pi.pdp_set_slug')
      ->join('product_pdp_images AS pi', 'pi.pdp_set_id = (SELECT pis.pdp_set_id FROM product_pdp_image_sets AS pis WHERE pis.prod_id = p.prod_id AND pis.pdp_set_color = (SELECT DISTINCT(pv.prod_color) FROM product_variants as pv where pv.prod_id = p.prod_id ORDER BY pv.display_order LIMIT 1))')
      ->order_by('p.prod_id, pi.display_order')
      ->get('products as p')
      ->result();

    //grouping images by prod id
    $result = [];

    foreach ($prod_imgs as $key => $element) {
      $result[$element->prod_id][] = $element;
    }

    //adding images to products as a object property
    foreach ($products as $key => $prod) {
      if (isset($result[$prod->prod_id])) {
        $products[$key]->images = $result[$prod->prod_id];
      } else {
        $products[$key]->images = [];
      }
    }

    return $products;
  }

  public function getPriceRangeByCatSlug($slug = null)
  {
    return $this->db
      ->select('MIN(pv.prod_mrp) AS min_price, MAX(pv.prod_mrp) AS max_price')
      ->join('categories AS c', 'c.cat_id = p.cat_id')
      ->join('product_variants AS pv', 'pv.prod_id = p.prod_id', 'left')
      ->get_where("products AS p", ['c.cat_slug' => $slug, 'c.status' => '1', 'p.status' => '1'])
      ->row();
  }

  public function getProdByPriceRange($slug = null, $min = null, $max = null)
  {
    $limit = (is_mobile()) ? 2 : 3;

    return $this->db
      ->select('p.prod_id,p.prod_name,pv.prod_mrp,p.prod_slug,p.prod_card_bg_color,p.prod_img_lg')
      ->join('categories AS c', 'c.cat_id = p.cat_id')
      ->join('product_variants AS pv', 'pv.prod_id = p.prod_id', 'left')
      ->where(['c.cat_slug' => $slug, 'c.status' => '1', 'p.status' => '1'])
      ->where("pv.prod_mrp BETWEEN '$min' AND '$max'")
      ->limit($limit)
      ->group_by('p.prod_id')
      ->order_by('p.display_order,pv.prod_mrp')
      ->get("products AS p")
      ->result();
  }

  public function getTabBlockBySlug($tb_slug = null/* , $cat_slug = null */)
  {
    return $this->db
      ->select('tbd.*, tb.section_slug')
      ->join('categories as c', 'c.cat_id = tb.cat_id')
      ->join('tab_blocks_details as tbd', 'tbd.tb_id = tb.tb_id')
      ->where([
        'tb.section_slug' => $tb_slug,
        /* 'c.cat_slug' => $cat_slug, */
        'c.status' => '1'
      ])
      ->order_by('tbd.display_order,tbd.tb_detail_id')
      ->get('tab_blocks as tb')
      ->result();
  }

  public function getTrendingProduct($slug = null)
  {
    return $this->db
      ->from('categories as c')
      ->select('p.*')
      ->join('products as p', 'FIND_IN_SET(p.prod_id, c.cat_trending_products)')
      ->where('cat_slug', $slug)
      ->get()
      ->result();
  }

  public function getProductFiltersByCatSlug($slug = null)
  {
    $query = $this->db
      ->select('p.prod_id')
      ->from('products AS p')
      ->join('categories AS c', 'c.cat_id = p.cat_id')
      ->where('c.cat_slug', $slug)
      ->where(['c.status' => '1', 'p.status' => '1'])
      ->get();

    $result = $query->result();

    $prod_ids = array_column($result, 'prod_id');

    $query = $this->db
      ->select('pf.prod_color, pf.prod_storage_space, pf.prod_screen_size, pf.prod_processor')
      ->from('product_features AS pf')
      ->where_in('pf.prod_id', $prod_ids)
      ->get();

    $result = $query->result();

    $product_features = [
      'prod_color' => [],
      'prod_storage_space' => [],
      'prod_screen_size' => [],
      'prod_processor' => [],
    ];

    foreach ($result as $product) {
      $prod_color = explode(',', $product->prod_color);

      foreach ($prod_color as $color) {
        if (!in_array($color, $product_features['prod_color'])) {
          $product_features['prod_color'][] = $color;
        }
      }

      if (!is_null($product->prod_storage_space)) {
        $prod_storage_space = explode(',', $product->prod_storage_space);

        foreach ($prod_storage_space as $storage_space) {
          if (!in_array($storage_space, $product_features['prod_storage_space'])) {
            $product_features['prod_storage_space'][] = $storage_space;
          }
        }
      }

      if (!is_null($product->prod_screen_size)) {
        $prod_screen_size = explode(',', $product->prod_screen_size);

        foreach ($prod_screen_size as $screen_size) {
          if (!in_array($screen_size, $product_features['prod_screen_size'])) {
            $product_features['prod_screen_size'][] = $screen_size;
          }
        }
      }

      if (!is_null($product->prod_processor)) {
        $prod_processor = explode(',', $product->prod_processor);

        foreach ($prod_processor as $processor) {
          if (!in_array($processor, $product_features['prod_processor'])) {
            $product_features['prod_processor'][] = $processor;
          }
        }
      }
    }

    $prod_filters = [];

    $prod_filters['colors'] = $this->db
      ->select('pfv.feat_id, pfv.feat_title, pfv.feat_value, pfv.feat_slug')
      ->from('product_feature_values AS pfv')
      ->where_in('pfv.feat_id', $product_features['prod_color'])
      ->get()
      ->result();

    if (!empty($product_features['prod_storage_space'])) {
      $prod_filters['storage_spaces'] = $this->db
        ->select('pfv.feat_id, pfv.feat_title, pfv.feat_value, pfv.feat_slug')
        ->from('product_feature_values AS pfv')
        ->where_in('pfv.feat_id', $product_features['prod_storage_space'])
        ->get()
        ->result();
    }

    if (!empty($product_features['prod_screen_size'])) {
      $prod_filters['screen_sizes'] = $this->db
        ->select('pfv.feat_id, pfv.feat_title, pfv.feat_value, pfv.feat_slug')
        ->from('product_feature_values AS pfv')
        ->where_in('pfv.feat_id', $product_features['prod_screen_size'])
        ->get()
        ->result();
    }

    if (!empty($product_features['prod_processor'])) {
      $prod_filters['processors'] = $this->db
        ->select('pfv.feat_id, pfv.feat_title, pfv.feat_value, pfv.feat_slug')
        ->from('product_feature_values AS pfv')
        ->where_in('pfv.feat_id', $product_features['prod_processor'])
        ->get()
        ->result();
    }

    return $prod_filters;
  }
}
