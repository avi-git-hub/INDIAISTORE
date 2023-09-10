<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('admin_model', 'admin_m');
    $this->load->module('user');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  public function dashboard()
  {
    $data = [
      'page_data' => [
        'title' => 'Dashboard',
        'styles' => [],
        'scripts' => [],
      ],
      'breadcrumb' => 'Dashboard',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $this->load->view('template_backend', $data);
  }

  public function app_versioning()
  {

    $data = [
      'page_data' => [
        'title' => 'Application Versioning',
        'styles' => [],
        'scripts' => [],
      ],
      'breadcrumb' => 'Application Versioning',
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {
      $post_data = [
        'version' =>  'V' . (floatval(preg_replace('/[^0-9\.]/', "", $this->db->get('app_version')->row()->version)) + 0.1),
        'updated_at' => date('Y-m-d H:i:s'),
        'updated_by' => $this->session->userdata('userId')
      ];

      $updated = update_method('app_version', $post_data, []);

      if ($updated) {
        $this->session->set_flashdata('success_msg', 'Application Version has been updated successfully!');
        redirect(base_url('admin/application/version'));
      } else {
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }
    }

    $data['version'] = $this->db->get('app_version')->row();

    $this->load->view('template_backend', $data);
  }
}
