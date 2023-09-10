<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Navigation extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->module('user');
    $this->load->library('form_validation');
    $this->load->model('Navigation_model', 'navigation_m');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  public function manage_nav_sections()
  {
    $data = [
      'page_data' => [
        'title' => 'Manage Navigations',
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

    $data['nav_sections'] = $this->navigation_m->getNavSections();
    $this->load->view('template_backend', $data);
  }


  public function add_new_nav_section()
  {
    $data = [
      'page_data' => [
        'title' => 'Add Navigation Section',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',

        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'nav_section_name',
          'label' => 'Navigation Section Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'nav_section_slug',
          'label' => 'Navigation Section Slug',
          'rules' => 'trim|required|is_unique[nav_sections.slug]|max_length[100]',
        ],
        [
          'field' => 'nav_items[]',
          'label' => 'Navigation Items',
          'rules' => 'required',
        ],
        [
          'field' => 'nav_section_status',
          'label' => 'Navigation Section Status',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value passed for %s.',
          ],
        ]
      ];

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {

        $n_name = $this->input->post('nav_section_name');
        $n_items = $this->input->post('nav_items');
        $n_slug = slugify($this->input->post('nav_section_name'));
        $n_status = empty($this->input->post('nav_section_status')) ? '0' : '1';

        $section_post_data = [
          'name' => $n_name,
          'slug' => $n_slug,
          'status' => $n_status,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId')
        ];

        $this->db->trans_begin();

        insert_method('nav_sections', $section_post_data);

        $nav_section_id = $this->db->insert_id();
        $display_order = 1;
        $items_post_data = [];

        foreach ($n_items as $item) {
          $items_post_data[] = [
            'nav_section_id' => $nav_section_id,
            'route_id' => $item,
            'display_order' => $display_order++,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('userId')
          ];
        }

        insert_batch_method('nav_items', $items_post_data);


        if ($this->db->trans_status() === true) {
          $this->db->trans_commit();
          $this->session->set_flashdata('success_msg', 'Navigation section has been created successfully.');
          redirect("admin/navigation/sections");
        } else {
          $this->db->trans_rollback();
          $this->session->set_flashdata('error_msg', 'Something went wrong while creating the navigation section.');
          redirect("admin/navigation/sections");
        }
      }
    }

    $data['routes'] = multi_select_query_where('routes', ['status' => '1']);
    $this->load->view('template_backend', $data);
  }

  public function edit_nav_section($id)
  {
    $data = [
      'page_data' => [
        'title' => 'Edit Navigation Section',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',

        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['nav_section_id'] = $id;
    $data['nav_section'] = select_where_method('nav_sections', ['id' => $id]);

    $data['nav_items'] = $this->navigation_m->getNavItemsBySectionId($id);

    $data['route_ids'] = array_map(function ($x) {
      return $x->route_id;
    }, $data['nav_items']);

    $data['routes'] = multi_select_query_where('routes', ['status' => '1']);

    if ($this->input->method() == 'post') {

      $validation_config = [
        [
          'field' => 'nav_section_name',
          'label' => 'Navigation Section Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'nav_section_status',
          'label' => 'Navigation Section Status',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value passed for %s.',
          ]
        ],
        [
          'field' => 'nav_items[]',
          'label' => 'Navigation Items',
          'rules' => 'required',
        ]
      ];

      $new_slug = slugify($this->input->post('nav_section_name'));

      $old_slug = $this->db->get_where('nav_sections', ['id' => $id])->row()->slug;

      if ($old_slug != $new_slug) {
        $is_unique = '|is_unique[nav_sections.slug]';
        $slug = $new_slug;
      } else {
        $is_unique = '';
        $slug = $old_slug;
      };

      $validation_config[] =  [
        'field' => 'nav_section_slug',
        'label' => 'Navigation Section Slug',
        'rules' => 'trim|required|max_length[100]' . $is_unique,
      ];

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {

        $n_name = $this->input->post('nav_section_name');
        $n_items = $this->input->post('nav_items');
        $n_slug = $slug;
        $n_status = empty($this->input->post('nav_section_status')) ? '0' : '1';
        $nav_route_ids = $data['route_ids'];

        $items_added = array_diff($n_items, $nav_route_ids); //added
        $items_removed = array_diff($nav_route_ids, $n_items); //removed

        $this->db->trans_begin();

        if (!empty($items_added)) {

          $display_order_data = select_where_order_by_method('nav_items', ['nav_section_id' => $id], 'display_order', 'DESC', 1);
          $display_order_add = $display_order_data->display_order;
          settype($display_order_add, "integer");

          $item_added_post_data = [];

          foreach ($items_added as $i_add) {
            $item_added_post_data[] = [
              'nav_section_id' => $id,
              'route_id' => $i_add,
              'display_order' => ++$display_order_add,
              'updated_at' => date('Y-m-d H:i:s'),
              'updated_by' => $this->session->userdata('userId')
            ];
          }

          insert_batch_method('nav_items', $item_added_post_data);
        }

        if (!empty($items_removed)) {
          $this->db->where_in('route_id', $items_removed)->delete('nav_items', ['nav_section_id' => $id]);
        }

        $post_data = [
          'name' => $n_name,
          'slug' => $n_slug,
          'status' => $n_status,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId')
        ];

        $this->navigation_m->updateNavSection($id, $post_data);

        if ($this->db->trans_status() === true) {
          $this->db->trans_commit();
          $this->session->set_flashdata('success_msg', 'Navigation section has been updated successfully.');
          redirect("admin/navigation/sections");
        } else {
          $this->db->trans_rollback();
          $this->session->set_flashdata('error_msg', 'Something went wrong while updating the navigation section.');
          redirect("admin/navigation/sections");
        }
      }
    }

    $this->load->view('template_backend', $data);
  }

  public function delete_nav_section($id)
  {
    if ($this->input->method() == 'post') {

      $deleted = $this->navigation_m->deleteNavSection($id);

      if ($deleted) {
        $output = [
          'status' => true,
          'message' => 'Navigation section has been deleted successfully!',
          'info' => $this->db->affected_rows(),
        ];
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the navigation section!',
          'info' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  public function delete_nav_item($section_id = null, $item_id = null)
  {
    if ($this->input->method() == 'post') {

      $deleted = $this->navigation_m->deleteNavItem($item_id);

      if ($deleted) {
        $output = [
          'status' => true,
          'message' => 'Navigation item has been deleted successfully!',
          'info' => $this->db->affected_rows(),
        ];
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the navigation item!',
          'info' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  public function manage_nav_items($section_id = null)
  {
    if (is_null($section_id)) {
      return redirect(base_url('admin/navigation/sections'));
    }

    $data = [
      'page_data' => [
        'title' => 'Manage Navigation Items',
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

    $data['nav_section_id'] = $section_id;
    $data['nav_section'] = select_where_method('nav_sections', ['id' => $section_id]);
    $data['nav_items'] = $this->navigation_m->getNavItemsBySecId($section_id);

    $this->load->view('template_backend', $data);
  }

  public function add_new_nav_item($section_id = null)
  {
    if (is_null($section_id)) {
      return redirect(base_url('admin/navigation/sections'));
    }

    $data = [
      'page_data' => [
        'title' => 'Manage Navigation Items',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',

        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['nav_section_id'] = $section_id;
    $data['nav_section'] = select_where_method('nav_sections', ['id' => $section_id]);
    $data['nav_sections'] = $this->navigation_m->getNavSections();
    $data['routes'] = multi_select_query_where('routes', ['status' => '1']);

    $this->load->view('template_backend', $data);
  }

  public function edit_nav_item($section_id = null, $item_id = null)
  {
    $this->session->set_tempdata('referred_from', $_SERVER['HTTP_REFERER'] ?: 'admin/navigation/sections', 3600);
    redirect("admin/route/$item_id/edit");
  }

  public function edit_display_order($section_id = null)
  {
    if ($this->input->method() == 'post') {
      $items_order_data = array_map('intval', $this->input->post('items_order_data'));

      $success = false;

      foreach ($items_order_data as $index => $item_id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (update_method('nav_items', $update_data, ['id' => $item_id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Navigation Item display order updated successfully!';

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
        'title' => 'Edit Navigation Item Display Order',
        'styles' => [],
        'scripts' => [],
      ],
      'breadcrumb' => 'Edit Display Order',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['nav_section_id'] = $section_id;
    $data['nav_section'] = select_where_method('nav_sections', ['id' => $section_id]);

    $data['nav_items'] = $this->db->select('r.*,ni.*')->join('routes as r', 'r.id = ni.route_id')->where(['ni.nav_section_id' => $section_id])->order_by('ni.display_order ASC')->get('nav_items as ni')->result();
    // $data['nav_items'] = multi_select_where_order_by_method('nav_items', ['nav_section_id' => $section_id], 'display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }
}
