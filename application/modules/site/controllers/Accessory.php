<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accessory extends MX_Controller
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('accessory_model', 'accessory_m');
  }

  //accessories
  public function accessory()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];


    $data['categories'] = $this->db
      ->select('c.cat_name,c.cat_id,c.cat_slug')
      ->join('accessories aa', 'aa.cat_id = c.cat_id')
      ->order_by('c.display_order')
      ->where('c.status', '1')
      ->group_by('c.cat_id')
      ->having('COUNT(aa.id) > 0')
      ->get('categories c')
      ->result();

    $this->load->view('template_frontend', $data);
  }

  public function get_accessories_by_cat_id($cat_id)
  {
    $response = ['status' => false];

    if ($this->input->is_ajax_request() && !empty($cat_id)) {
      $post = $this->input->post();

      // $device = (is_mobile()) ? 'mobile' : 'dex';

      // $response['status'] = true;
      // $response['data'] = memcached_get("get-accessories-by-cat-id-$cat_id");

      // if (!$response['data']) {
      //   $response['data'] = $this->accessory_m->getAccessoriesByCatId($cat_id, $post);

      //   memcached_save("get-accessories-by-cat-id-$cat_id", $response['data'], 3600);
      // }


      $response['status'] = true;
      $response['data'] = $this->accessory_m->getAccessoriesByCatId($cat_id, $post);


      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(400)
      ->set_output(json_encode($response));
  }
}
