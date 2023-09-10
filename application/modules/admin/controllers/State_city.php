<?php

defined('BASEPATH') or exit('No direct script access allowed');

class State_city extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->module('user');

    $this->load->helper('form');
    $this->load->library('form_validation');


    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }


  public function manage_states()
  {

    $data = [
      'page_data' => [
        'title' => 'Manage States',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ],
      'breadcrumb' => 'Manage States',
      'view_file' => generate_view_path(__METHOD__),
    ];


    $data['states'] = $this->db->order_by('id DESC')->get('states')->result();

    $this->load->view('template_backend', $data);
  }

  public function add_new_state()
  {

    $data = [
      'page_data' => [
        'title' => 'Add New States',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Add New States',
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'state_name',
          'label' => 'State Name',
          'rules' => 'trim|required|max_length[50]|is_unique[states.name]',
          'errors' => [
            'is_unique' => '%s already exists.'
          ],
        ],
        [
          'field' => 'state_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
        ],
      ];

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {
        $post_data = [
          'name' => $this->input->post('state_name'),
          'status' => is_null($this->input->post('state_status')) ? '0' : '1'
        ];

        if (insert_method('states', $post_data)) {
          $this->session->set_flashdata('success_msg', 'State has been saved successfully!');
          redirect("admin/state-city/states");
        }
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }
    }

    $this->load->view('template_backend', $data);
  }

  public function edit_state($id)
  {

    $data = [
      'page_data' => [
        'title' => 'Edit States',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Edit States',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['state'] = $this->db->get_where('states', ['id' => $id])->row();


    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'state_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value.',
          ],
        ],
      ];

      if ($data['state']->name == $this->input->post('state_name')) {
        $this->form_validation->set_rules(
          'state_name',
          'State Name',
          'trim|required|max_length[50]'
        );
      } else {
        $this->form_validation->set_rules(
          'state_name',
          'State Name',
          'trim|required|max_length[50]|is_unique[states.name]',
          [
            'is_unique' => '%s already exists.'
          ]
        );
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {
        $post_data = [
          'name' => $this->input->post('state_name'),
          'status' => is_null($this->input->post('state_status')) ? '0' : '1'
        ];

        if (update_method('states', $post_data, ['id' => $id])) {
          $this->session->set_flashdata('success_msg', 'State has been updated successfully!');
          redirect("admin/state-city/states");
        }
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }
    }

    $this->load->view('template_backend', $data);
  }

  public function manage_cities()
  {

    $data = [
      'page_data' => [
        'title' => 'Manage Cities',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ],
      'breadcrumb' => 'Manage Cities',
      'view_file' => generate_view_path(__METHOD__),
    ];


    $data['cities'] = $this->db->select("c.*,s.name as state_name")->join('states as s', 's.id = c.state_id')->order_by('c.id DESC')->get('cities as c')->result();

    $this->load->view('template_backend', $data);
  }

  public function add_new_city()
  {

    $data = [
      'page_data' => [
        'title' => 'Add New City',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Add New City',
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'city_name',
          'label' => 'City Name',
          'rules' => 'trim|required|max_length[50]|is_unique[states.name]',
          'errors' => [
            'is_unique' => '%s already exists.'
          ],
        ],
        [
          'field' => 'city_state_id',
          'label' => 'State',
          'rules' => 'trim|required|integer',
        ],
        [
          'field' => 'city_latitude',
          'label' => 'City Latitude',
          'rules' => 'trim|required|numeric',
          'errors' => [
            'numeric' => 'Enter valid %s.'
          ],
        ],

        [
          'field' => 'city_longitude',
          'label' => 'City Longitude',
          'rules' => 'trim|required|numeric',
          'errors' => [
            'numeric' => 'Enter valid %s.'
          ],
        ],
        [
          'field' => 'state_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
        ],
      ];

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {
        $post_data = [
          'name' => $this->input->post('city_name'),
          'state_id' => $this->input->post('city_state_id'),
          'lat' => $this->input->post('city_latitude'),
          'lng' => $this->input->post('city_longitude'),
          'status' => is_null($this->input->post('city_status')) ? '0' : '1'
        ];

        if (insert_method('cities', $post_data)) {
          $this->session->set_flashdata('success_msg', 'State has been saved successfully!');
          redirect("admin/state-city/cities");
        }
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }
    }

    $data['states'] = $this->db->order_by('name')->get_where('states', ['status' => '1'])->result();

    $this->load->view('template_backend', $data);
  }

  public function edit_city($id)
  {

    $data = [
      'page_data' => [
        'title' => 'Edit City',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Edit City',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['city'] = $this->db->get_where('cities', ['id' => $id])->row();


    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'city_name',
          'label' => 'City Name',
          'rules' => 'trim|required|max_length[50]',
          'errors' => [
            'is_unique' => '%s already exists.'
          ],
        ],
        [
          'field' => 'city_state_id',
          'label' => 'State',
          'rules' => 'trim|required|integer',
        ],
        [
          'field' => 'city_latitude',
          'label' => 'City Latitude',
          'rules' => 'trim|required|numeric',
          'errors' => [
            'numeric' => 'Enter valid %s.'
          ],
        ],

        [
          'field' => 'city_longitude',
          'label' => 'City Longitude',
          'rules' => 'trim|required|numeric',
          'errors' => [
            'numeric' => 'Enter valid %s.'
          ],
        ],
        [
          'field' => 'city_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
        ],
      ];


      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {
        $post_data = [
          'name' => $this->input->post('city_name'),
          'state_id' => $this->input->post('city_state_id'),
          'lat' => $this->input->post('city_latitude'),
          'lng' => $this->input->post('city_longitude'),
          'status' => is_null($this->input->post('city_status')) ? '0' : '1'
        ];

        if (update_method('cities', $post_data, ['id' => $id])) {
          $this->session->set_flashdata('success_msg', 'City has been saved successfully!');
          redirect("admin/state-city/cities");
        }
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }
    }


    $data['states'] = $this->db->order_by('name')->get_where('states', ['status' => '1'])->result();

    $this->load->view('template_backend', $data);
  }
}
