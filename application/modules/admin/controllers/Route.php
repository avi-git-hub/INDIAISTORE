<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Route extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->module('user');
    $this->load->library('form_validation');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }


  public function manage_routes()
  {
    $data = [
      'page_data' => [
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css'
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['routes'] = $this->db->order_by('id DESC')->get('routes')->result();
    $this->load->view('template_backend', $data);
  }

  public function add_new_route($id = null)
  {
    $data = [
      'page_data' => [
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',

        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {

      $validation_config = [
        [
          'field' => 'route_name',
          'label' => 'Route Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'route_slug',
          'label' => 'Route Slug',
          'rules' => 'trim|required|max_length[100]|is_unique[routes.slug]',
        ],
        [
          'field' => 'route_controller',
          'label' => 'Route Controller Name',
          'rules' => 'trim|required|max_length[100]',
        ],
        [
          'field' => 'route_status',
          'label' => 'Route Status',
          'rules' => 'trim|in_list[0,1]',
        ],
        [
          'field' => 'route_title',
          'label' => 'Route Page Title',
          'rules' => 'trim|max_length[500]',
        ],
        [
          'field' => 'route_keywords',
          'label' => 'Route Page Meta Keywords',
          'rules' => 'trim',
        ],
        [
          'field' => 'route_description',
          'label' => 'Route Page Meta Description',
          'rules' => 'trim',
        ],
      ];

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {


        $r_name = $this->input->post('route_name');
        $r_slug = $this->input->post('route_slug');
        $r_controller = $this->input->post('route_controller');
        $r_status = empty($this->input->post('route_status')) ? '0' : '1';;
        $r_title = $this->input->post('route_title');
        $r_keywords = $this->input->post('route_keywords');
        $r_description = $this->input->post('route_description');

        $r_route_header_gtag = $this->input->post('route_header_gtag');
        $r_route_body_start_gtag = $this->input->post('route_body_start_gtag');
        $r_route_body_end_gtag = $this->input->post('route_body_end_gtag');


        $this->db->trans_begin();

        $post_data = [
          'name' => $r_name,
          'slug' => $r_slug,
          'controller' => $r_controller,
          'status' => $r_status,
          'page_title' => $r_title,
          'page_meta_keywords' => $r_keywords,
          'page_meta_description' => $r_description,
          'gtags_header' => base64_encode($r_route_header_gtag),
          'gtags_body_start' => base64_encode($r_route_body_start_gtag),
          'gtags_body_end' => base64_encode($r_route_body_end_gtag),
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        insert_method('routes', $post_data);

        if ($this->db->trans_status() === false) {
          $this->db->trans_rollback();
          $this->session->set_flashdata('error_msg', 'Something went wrong while creating the route.');
          redirect("admin/route/add-new");
        } else {
          $this->db->trans_commit();
          $this->session->set_flashdata('success_msg', 'Route has been created successfully.');
          redirect(base_url("admin/routes"));
        }
      }
    }

    $data['routes'] = select_method('routes');
    $this->load->view('template_backend', $data);
  }

  public function edit_route($id = null)
  {
    $data = [
      'page_data' => [
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {

      $validation_config = [
        [
          'field' => 'route_name',
          'label' => 'Route Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'route_controller',
          'label' => 'Route Controller Name',
          'rules' => 'trim|required|max_length[100]',
        ],
        [
          'field' => 'route_status',
          'label' => 'Route Status',
          'rules' => 'trim|in_list[0,1]',
        ],
        [
          'field' => 'route_title',
          'label' => 'Route Page Title',
          'rules' => 'trim|max_length[500]',
        ],
        [
          'field' => 'route_keywords',
          'label' => 'Route Page Meta Keywords',
          'rules' => 'trim',
        ],
        [
          'field' => 'route_description',
          'label' => 'Route Page Meta Description',
          'rules' => 'trim',
        ],
      ];

      $new_slug = $this->input->post('route_slug');

      $old_slug = $this->db->get_where('routes', ['id' => $id])->row()->slug;

      if ($old_slug != $new_slug) {
        $is_unique = '|is_unique[routes.slug]';
        $slug = $new_slug;
      } else {
        $is_unique = '';
        $slug = $old_slug;
      };

      $validation_config[] =  [
        'field' => 'route_slug',
        'label' => 'Route Slug',
        'rules' => 'trim|required|max_length[100]' . $is_unique,
      ];

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {


        $r_name = $this->input->post('route_name');
        $r_slug = $slug;
        $r_controller = $this->input->post('route_controller');
        $r_status = empty($this->input->post('route_status')) ? '0' : '1';;
        $r_title = $this->input->post('route_title');
        $r_keywords = $this->input->post('route_keywords');
        $r_description = $this->input->post('route_description');
        $r_route_header_gtag = $this->input->post('route_header_gtag');
        $r_route_body_start_gtag = $this->input->post('route_body_start_gtag');
        $r_route_body_end_gtag = $this->input->post('route_body_end_gtag');


        $post_data = [
          'name' => $r_name,
          'slug' => $r_slug,
          'controller' => $r_controller,
          'status' => $r_status,
          'page_title' => $r_title,
          'page_meta_keywords' => $r_keywords,
          'page_meta_description' => $r_description,
          'gtags_header' => base64_encode($r_route_header_gtag),
          'gtags_body_start' => base64_encode($r_route_body_start_gtag),
          'gtags_body_end' => base64_encode($r_route_body_end_gtag),
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId')
        ];

        $updated = update_method('routes', $post_data, ['id' => $id]);

        if ($updated) {
          $this->session->set_flashdata('success_msg', 'Route has been updated successfully.');
          $referred_from = $this->session->tempdata('referred_from') ?: "admin/routes";
          $this->session->unset_tempdata('referred_from');

          redirect($referred_from, 'refresh');
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong while updating the route.');
          redirect("admin/route/$id/edit");
        }
      }
    }


    $data['route'] = select_where_method('routes', ['id' => $id]);
    $this->load->view('template_backend', $data);
  }

  public function delete_route($id = null)
  {
    if ($this->input->method() == 'post') {

      $deleted = delete_method('routes', ['id' => $id]);

      if ($deleted) {
        $output = [
          'status' => true,
          'message' => 'Route has been deleted successfully!',
          'info' => $this->db->affected_rows(),
        ];
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the route!',
          'info' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }
}
