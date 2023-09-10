<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Search extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->library('form_validation');
    $this->load->module('user');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  public function manage_trending_search()
  {
    $data = [
      'page_data' => [
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->is_ajax_request() && $this->input->method() == 'post') {

      $validation_config = [
        [
          'field' => 'name',
          'label' => 'Trending Search Name',
          'rules' => 'trim|required|max_length[50]'
        ],
        [
          'field' => 'cta',
          'label' => 'Trending Search CTA',
          'rules' => 'trim|required|max_length[255]',
        ],
      ];

      $this->form_validation->set_rules($validation_config);

      $response = ['status' => false, 'message' => 'Something went wrong while creating trending search.'];

      if ($this->form_validation->run() == TRUE) {
        $display_order_data = multi_select_order_by_method('trending_searches', 'display_order', 'DESC', 1);

        $display_order = (!empty($display_order_data)) ? (int)(current($display_order_data)->display_order) : (int)0;

        $name = $this->input->post('name');
        $cta = $this->input->post('cta');
        $display_order = ++$display_order;
        $created_at = date('Y-m-d H:i:s');
        $created_by = $this->session->userdata('userId');

        $postData = ['name' => $name, 'cta' => $cta, 'created_at' => $created_at, 'display_order' => $display_order, 'created_by' => $created_by];

        $created = insert_method('trending_searches', $postData);

        if ($created) {
          $response = ['status' => true, 'info' => $this->db->insert_id(), 'message' => 'Trending Search has been successfully created.'];
        }
      }
      return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }


    $data['trend_searches'] = multi_select_order_by_method('trending_searches', 'display_order', 'ASC');
    $this->load->view('template_backend', $data);
  }

  public function manage_other_search()
  {
    $data = [
      'page_data' => [
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->is_ajax_request() && $this->input->method() == 'post') {

      $validation_config = [
        [
          'field' => 'name',
          'label' => 'Other Search Name',
          'rules' => 'trim|required|max_length[255]'
        ],
        [
          'field' => 'tags',
          'label' => 'Other Search Tags',
          'rules' => 'trim|required'
        ],
        [
          'field' => 'cta',
          'label' => 'Other Search CTA',
          'rules' => 'trim|required|max_length[255]',
        ],
      ];

      $this->form_validation->set_rules($validation_config);

      $response = ['status' => false, 'message' => 'Something went wrong while creating trending search.'];

      if ($this->form_validation->run() == TRUE) {
        // $display_order_data = multi_select_order_by_method('trending_searches', 'display_order', 'DESC', 1);

        // $display_order = (!empty($display_order_data)) ? (int)(current($display_order_data)->display_order) : (int)0;

        $tags = $this->input->post('tags');
        $cta = $this->input->post('cta');
        $name = $this->input->post('name');
        // $display_order = ++$display_order;
        $created_at = date('Y-m-d H:i:s');
        $created_by = $this->session->userdata('userId');

        $postData = ['tags' => $tags, 'cta' => $cta, 'name' => $name, 'created_at' => $created_at, 'created_by' => $created_by];

        $created = insert_method('other_searches', $postData);

        if ($created) {
          $response = ['status' => true, 'info' => $this->db->insert_id(), 'message' => 'Other Search has been successfully created.'];
        }
      }
      return $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }


    $data['other_searches'] = select_method('other_searches');
    $this->load->view('template_backend', $data);
  }


  public function delete_trending_search($id)
  {
    $response = ['status' => false, 'message' => 'Something went wrong while deleteing trending search.'];

    if ($this->input->is_ajax_request() && $this->input->method() == 'post' && !is_null($id)) {

      $deleted = delete_method('trending_searches', ['id' => $id]);

      if ($deleted) {
        $response = ['status' => true, 'message' => 'Trending Search has been successfully deleted.'];
      }
    }
    return $this->output->set_content_type('application/json')->set_output(json_encode($response));
  }

  public function delete_other_search($id)
  {
    $response = ['status' => false, 'message' => 'Something went wrong while deleteing other search.'];

    if ($this->input->is_ajax_request() && $this->input->method() == 'post' && !is_null($id)) {

      $deleted = delete_method('other_searches', ['id' => $id]);

      if ($deleted) {
        $response = ['status' => true, 'message' => 'Other Search has been successfully deleted.'];
      }
    }
    return $this->output->set_content_type('application/json')->set_output(json_encode($response));
  }

  public function edit_display_order()
  {
    if ($this->input->method() == 'post') {
      $trend_s_order_data = array_map('intval', $this->input->post('trend_search_order_data'));

      $success = false;

      foreach ($trend_s_order_data as $index => $id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
        ];

        if (update_method('trending_searches', $update_data, ['id' => $id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Trending Searches display order updated successfully!';

        $this->session->set_flashdata('success_msg', $msg);

        $output = [
          'status' => true,
          'message' => $msg,
          'info' => '',
        ];
      } else {
        $msg = 'Something went wrong while updating the display order.!';

        $this->session->set_flashdata('error_msg', $msg);

        $output = [
          'status' => false,
          'message' => $msg,
          'info' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    $data = [
      'page_data' => [
        'styles' => [],
        'scripts' => [],
      ],
      'breadcrumb' => 'Edit Display Order',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['trend_searches'] = multi_select_order_by_method('trending_searches', 'display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }
}
