<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product_features extends MX_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->load->model('product_features_model', 'prod_feat_m');

    $this->load->module('user');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  // product feature category - manage
  public function manage_feature_categories()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Manage Product Feature Categories',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['prod_feat_cat'] = $this->prod_feat_m->get_prod_feat_cat(null, 'created_at', 'DESC');

    $this->load->view('template_backend', $data);
  }

  // product feature category - add new
  public function add_new_feature_category()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Add New Category for Product Feature',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {
      $this->form_validation->set_rules(
        'prod_feat_cat_name',
        'Product Feature Category Name',
        'trim|required|min_length[1]|max_length[100]'
      );

      $this->form_validation->set_rules(
        'prod_feat_cat_slug',
        'Product Feature Category Slug',
        'trim|required|min_length[1]|max_length[100]|is_unique[product_feature_categories.feat_cat_slug]'
      );

      $this->form_validation->set_rules(
        'prod_feat_cat_status',
        'Product Feature Category Status',
        'trim|numeric|less_than[2]',
        [
          'less_than' => 'Please select a s%s',
          'numeric' => 'Please select a s%s'
        ]
      );

      if ($this->form_validation->run() == TRUE) {
        $prod_feat_cat_name = $this->input->post('prod_feat_cat_name');
        $prod_feat_cat_slug = slugify($this->input->post('prod_feat_cat_slug'));
        $prod_feat_cat_status = is_null($this->input->post('prod_feat_cat_status')) ? '0' : '1';

        $insert_data = [
          'feat_cat_name' => $prod_feat_cat_name,
          'feat_cat_slug' => $prod_feat_cat_slug,
          'status' => $prod_feat_cat_status,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        $data_inserted = insert_method('product_feature_categories', $insert_data);

        if ($data_inserted) {
          $this->session->set_flashdata('success_msg', 'Category for product feature has been saved successfully!');

          // CODE:if redirected to same page use this - avoiding resubmission
          // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
          // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
          // exit(); 

          redirect(base_url('admin/product-feature/categories'));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $this->load->view('template_backend', $data);
  }

  // product feature category - edit
  public function edit_feature_category($feat_cat_id = null)
  {
    if (is_null($feat_cat_id)) {
      return redirect(base_url('admin/product-feature/categories'));
    }

    $data = [
      'page_data' => [
        'title' => 'Edit Product Feature Category',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Edit Category',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['prod_feat_cat'] = $this->prod_feat_m->get_prod_feat_cat(['feat_cat_id' => $feat_cat_id]);

    if (!$data['prod_feat_cat']) {
      $this->session->set_flashdata('error_msg', 'Product feature category not found.');

      return redirect(base_url('admin/product-feature/categories'));
    }

    if ($this->input->method() == 'post') {
      $this->form_validation->set_rules(
        'prod_feat_cat_name',
        'Product Feature Category Name',
        'trim|required|min_length[1]|max_length[100]'
      );

      $prod_feat_cat_slug = slugify($this->input->post('prod_feat_cat_slug'));

      if ($prod_feat_cat_slug == $data['prod_feat_cat']->feat_cat_slug) {
        $this->form_validation->set_rules(
          'prod_feat_cat_slug',
          'Product Feature Category Slug',
          'trim|required|min_length[1]|max_length[100]'
        );
      } else {
        $this->form_validation->set_rules(
          'prod_feat_cat_slug',
          'Product Feature Category Slug',
          'trim|required|min_length[1]|max_length[100]|is_unique[product_feature_categories.feat_cat_slug]',
          [
            'is_unique' => '%s already exists.'
          ]
        );
      }

      $this->form_validation->set_rules(
        'prod_feat_cat_status',
        'Product Feature Category Status',
        'trim|numeric|less_than[2]',
        [
          'less_than' => 'Please select a s%s',
          'numeric' => 'Please select a s%s'
        ]
      );

      if ($this->form_validation->run() == TRUE) {
        $prod_feat_cat_name = $this->input->post('prod_feat_cat_name');
        $prod_feat_cat_status = is_null($this->input->post('prod_feat_cat_status')) ? '0' : '1';

        $update_data = array(
          'feat_cat_name' => $prod_feat_cat_name,
          //'feat_cat_slug' => $prod_feat_cat_slug,
          'status' => $prod_feat_cat_status,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        );

        $data_updated = update_method('product_feature_categories', $update_data, ['feat_cat_id' => $feat_cat_id]);

        if ($data_updated) {
          $this->session->set_flashdata('success_msg', 'Product feature category has been updated!');

          // CODE:to redirect to same page use this - avoiding resubmission
          // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
          // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
          // exit(); 

          return redirect(base_url('admin/product-feature/categories'));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $this->load->view('template_backend', $data);
  }

  // product feature category - delete
  public function delete_feature_category($feat_cat_id)
  {
    if ($this->input->method() == 'post') {
      $this->db->trans_start();

      $prod_feat_cat_deleted = delete_method('product_feature_categories', ['feat_cat_id' => $feat_cat_id]);

      if ($prod_feat_cat_deleted) {
        //$prod_feat_for_feat_cat = multi_select_query_where('product_feature_values', ['feat_cat_id' => $feat_cat_id]);
        //if (sizeof($prod_feat_for_feat_cat) > 0) {
        //$prod_feat_for_feat_cat_deleted = delete_method('product_feature_values', ['feat_cat_id' => $feat_cat_id]);
        //$this->db->trans_complete();
        //if ($prod_feat_for_feat_cat_deleted) {
        //$output = [
        //'status' => true,
        //'message' => 'Product feature(s) for the deleted product feature category has been deleted successfully!',
        //'info' => $this->db->affected_rows(),
        //];
        //} else {
        //$output = [
        //'status' => false,
        //'message' => 'Something went wrong while deleting the product feature(s) for deleted product feature category.',
        //'info' => '',
        //];
        //}
        //} else {
        $this->db->trans_complete();

        $output = [
          'status' => true,
          'message' => 'Product feature category has been deleted successfully!',
          'info' => $this->db->affected_rows(),
        ];
        //}
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the product feature category.',
          'info' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  // banners for respective banner position
  public function manage_feature_values($feat_cat_id = null)
  {
    if (is_null($feat_cat_id)) {
      redirect(base_url('admin/product-feature/categories'));
    }

    $data = [
      'page_data' => [
        'title' => 'Manage Product Features',
        'styles' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/css/lightbox.css',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
          // PATH_BACKEND_THEME_PLUGINS.'datatables-responsive/css/responsive.bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/js/lightbox.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
          // PATH_BACKEND_THEME_PLUGINS.'datatables-responsive/js/dataTables.responsive.min.js',
          // PATH_BACKEND_THEME_PLUGINS.'datatables-responsive/js/responsive.bootstrap4.min.js',
        ],
      ],
      'breadcrumb' => 'Manage Features',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['prod_feat_cat'] = $this->prod_feat_m->get_prod_feat_cat(['feat_cat_id' => $feat_cat_id]);
    $data['prod_feat'] = multi_select_where_order_by_method('product_feature_values', ['feat_cat_id' => $feat_cat_id], 'display_order', 'ASC');
    $data['feat_cat_id'] = $feat_cat_id;

    $this->load->view('template_backend', $data);
  }

  // product feature - add new
  public function add_new_feature_value($feat_cat_id = null)
  {
    $data = [
      'page_data' => [
        'title' => 'Add New Product Feature',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'daterangepicker/daterangepicker.css',
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'moment/moment.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'daterangepicker/daterangepicker.js',
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Add New Feature',
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {
      $validationConfig = [
        [
          'field' => 'feat_title',
          'label' => 'Feature Title',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'feat_value',
          'label' => 'Feature Value',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'feat_slug',
          'label' => 'Feature Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]|is_unique[product_feature_values.feat_slug]'
        ],
        [
          'field' => 'feat_status',
          'label' => 'Feature Status',
          'rules' => 'trim|numeric|less_than[2]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
      ];

      $this->form_validation->set_rules($validationConfig);

      if ($this->form_validation->run() == TRUE) {
        $feature_title = $this->input->post('feat_title');
        $feature_value = $this->input->post('feat_value');
        $feature_slug = slugify($this->input->post('feat_slug'));
        $feature_hex_code = ($this->input->post('feat_hex_code') == '') ? null : $this->input->post('feat_hex_code');
        $feature_status = is_null($this->input->post('feat_status')) ? '0' : '1';

        $uploaded_file_data = [];

        $upload_path = ABS_PATH_FILES_UPLOADS . 'product-features/';

        if (!is_dir($upload_path)) {
          mkdir($upload_path, 0777, TRUE);
        }

        $config = [
          'upload_path' => $upload_path,
          'allowed_types' => '*', // allowed file types
          'max_size' => '2048000', // Can be set to particular file size , here it is 2 MB(2048 Kb)
          'file_ext_tolower' => true, // forcing file extension to be in lower case
          // 'max_height' => '472',
          // 'max_width' => '1362'
        ];

        $this->load->library('upload', $config);

        foreach ($_FILES as $field => $file) {
          if (!empty($_FILES[$field]['tmp_name'])) {
            $allowed_file_mimes = [
              'image/jpeg',
              'image/jpg',
              'image/png',
            ];

            if (in_array($file['type'], $allowed_file_mimes)) {
              if ($field == 'feat_icon') {
                $file_name = $feature_slug . '-icon-' . microtime(true);
              } elseif ($field == 'feat_thumbnail') {
                $file_name = $feature_slug . '-thumbnail-' . microtime(true);
              }

              $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

              $config['file_name'] = $file_name; // name of the file;

              $this->upload->initialize($config);

              if ($this->upload->do_upload($field)) {
                $uploaded_file_data[$field] = $this->upload->data();
              } else {
                $error = strip_tags($this->upload->display_errors());

                $this->session->set_flashdata('error_msg', $error);

                redirect(base_url("admin/product-feature/category/$feat_cat_id/add-new"));

                break;
              }
            } else {
              $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

              redirect(base_url("admin/product-feature/category/$feat_cat_id/add-new"));

              break;
            }
          }
        }

        //if (sizeof($uploaded_file_data) > 0) {
        $display_order_data = multi_select_where_order_by_method('product_feature_values', ['feat_cat_id' => $feat_cat_id], 'display_order', 'DESC', 1);

        if (empty($display_order_data)) {
          $display_order_data = 0;
        } else {
          $display_order = current($display_order_data)->display_order;
        }

        settype($display_order, "integer");

        $insert_data = [
          'feat_cat_id' => $feat_cat_id,
          'feat_title' => $feature_title,
          'feat_value' => $feature_value,
          'feat_slug' => $feature_slug,
          'feat_hex_code' => $feature_hex_code,
          'display_order' => ++$display_order,
          'status' => $feature_status,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => intval($this->session->userdata('userId')),
        ];

        if (isset($uploaded_file_data['feat_icon'])) {
          $insert_data['feat_icon'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'product-features/' . */ $uploaded_file_data['feat_icon']['orig_name'];
        }

        if (isset($uploaded_file_data['feat_thumbnail'])) {
          $insert_data['feat_thumbnail'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'product-features/' . */ $uploaded_file_data['feat_thumbnail']['orig_name'];
        }

        $data_inserted = insert_method('product_feature_values', $insert_data);

        if ($data_inserted) {
          $this->session->set_flashdata('success_msg', 'Feature value has been added successfully!');

          // CODE:if redirected to same page use this - avoiding resubmission
          // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
          // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
          // exit(); 

          redirect(base_url("admin/product-feature/category/$feat_cat_id"));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
        //}
      } else {
      }
    }

    $data['feat_cat_id'] = $feat_cat_id;
    $data['prod_feat_cat'] = $this->prod_feat_m->get_prod_feat_cat(['feat_cat_id' => $feat_cat_id]);

    $this->load->view('template_backend', $data);
  }

  // product feature - edit 
  public function edit_feature_value($feat_cat_id, $feat_id = null)
  {
    $data = [
      'page_data' => [
        'title' => 'Edit Product Feature Value',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'daterangepicker/daterangepicker.css',
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'moment/moment.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'daterangepicker/daterangepicker.js',
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Edit feature value',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['prod_feat_cat'] = $this->prod_feat_m->get_prod_feat_cat(['feat_cat_id' => $feat_cat_id]);
    $data['prod_feat'] = $this->prod_feat_m->get_prod_feat_data(['feat_id' => $feat_id]);

    if (!$data['prod_feat']) {
      $this->session->set_flashdata('error_msg', 'Feature value not found.');

      return redirect(base_url("admin/product-features/categories"));
    }

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'feat_title',
          'label' => 'Feature Title',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'feat_value',
          'label' => 'Feature Value',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'feat_status',
          'label' => 'Feature Status',
          'rules' => 'trim|numeric|less_than[2]',
          [
            'less_than' => 'Please select a s%s',
            'numeric' => 'Please select a s%s'
          ]
        ],
      ];

      $feature_slug = slugify($this->input->post('feat_slug'));

      if ($feature_slug == $data['prod_feat']->feat_slug) {
        $validation_config[] = [
          'field' => 'feat_slug',
          'label' => 'Feature Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ];
      } else {
        $validation_config[] = [
          'field' => 'feat_slug',
          'label' => 'Feature Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]|is_unique[product_feature_values.feat_slug]',
          [
            'is_unique' => '%s already exists.'
          ]
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == TRUE) {
        $feature_title = $this->input->post('feat_title');
        $feature_value = $this->input->post('feat_value');
        $feature_hex_code = ($this->input->post('feat_hex_code') == "") ? null : $this->input->post('feat_hex_code');
        $feature_status = is_null($this->input->post('feat_status')) ? '0' : '1';

        $update_data = array(
          'feat_title' => $feature_title,
          'feat_value' => $feature_value,
          //'feat_slug' => $feature_slug,
          'feat_hex_code' => $feature_hex_code,
          'status' => $feature_status,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        );

        if (
          (!empty($_FILES['feat_icon']['name'])) ||
          (!empty($_FILES['feat_thumbnail']['name']))
        ) {
          $uploaded_file_data = [];

          $upload_path = ABS_PATH_FILES_UPLOADS . 'product-features/';

          if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
          }

          $config = [
            'upload_path' => $upload_path,
            'allowed_types' => '*',        // allowed file types
            'max_size' => '2048000',       // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'file_ext_tolower' => true, // forcing file extension to be in lower case
            // 'max_height' => '472',
            // 'max_width' => '1362'
          ];

          $this->load->library('upload', $config);

          foreach ($_FILES as $field => $file) {
            if (!empty($file['type'])) {
              $allowed_file_mimes = [
                'image/jpeg',
                'image/jpg',
                'image/png',
              ];

              if (in_array($file['type'], $allowed_file_mimes)) {
                if ($field == 'feat_icon') {
                  $file_name = $feature_slug . '-icon-' . microtime(true);
                } elseif ($field == 'feat_thumbnail') {
                  $file_name = $feature_slug . '-thumbnail-' . microtime(true);
                }

                $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

                $config['file_name'] = $file_name; // name of the file;

                $this->upload->initialize($config);

                if ($this->upload->do_upload($field)) {
                  $uploaded_file_data[$field] = $this->upload->data();

                  if ($field == 'feat_icon') {
                    $update_data['feat_icon'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'product-features/' . */ $uploaded_file_data['feat_icon']['orig_name'];
                  } elseif ($field == 'feat_thumbnail') {
                    $update_data['feat_thumbnail'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'product-features/' . */ $uploaded_file_data['feat_thumbnail']['orig_name'];
                  }
                } else {
                  $error = strip_tags($this->upload->display_errors());

                  $this->session->set_flashdata('error_msg', $error);

                  return redirect(base_url("admin/product-feature/category/$feat_cat_id/edit/$feat_id"));

                  break;
                }
              } else {
                $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

                return redirect(base_url("admin/product-feature/category/$feat_cat_id/edit/$feat_id"));
              }
            }
          }
        }

        $data_updated = update_method('product_feature_values', $update_data, ['feat_id' => $feat_id]);

        if ($data_updated) {
          $this->session->set_flashdata('success_msg', 'Product feature category has been updated!');

          // CODE:to redirect to same page use this - avoiding resubmission
          // $this->form_validationation->clear_post_data(); //custom form validation library created to clear input fields.
          // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
          // exit(); 

          return redirect(base_url("admin/product-feature/category/$feat_cat_id"));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $data['feat_cat_id'] = $feat_cat_id;

    $this->load->view('template_backend', $data);
  }

  // product feature - delete
  public function delete_feature_value($feat_cat_id = null, $feat_id = null)
  {
    $output = [];

    if ($this->input->method() == 'post') {
      $result = delete_method('product_feature_values', ['feat_id' => $feat_id]);

      if ($result == true) {
        $output = [
          'status' => true,
          'info' => $this->db->affected_rows(),
        ];

        if ($this->db->affected_rows() > 0) {
          $output['message'] = 'Product feature deleted successfully!';
        } else if ($this->db->affected_rows() < 1) {
          $output['message'] = 'Product feature not found!';
        }

        return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($output));
      }
    }

    $output = [
      'status' => false,
      'message' => 'Failed to delete the product feature!',
      'info' => '',
    ];

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  // sort banner display order
  public function edit_display_order($feat_cat_id = null)
  {
    $data = [
      'page_data' => [
        'title' => 'Edit Feature Value Display Order',
        'styles' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/css/lightbox.css',
        ],
        'scripts' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/js/lightbox.js',
        ],
      ],
      'breadcrumb' => 'Edit Display Order',
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->method() == 'post') {
      $feat_order_data = array_map('intval', $this->input->post('feat_order_data'));

      $success = false;

      foreach ($feat_order_data as $index => $feat_id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (update_method('product_feature_values', $update_data, ['feat_id' => $feat_id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Display order of the product feature value updated successfully!';

        $this->session->set_flashdata('success_msg', $msg);

        $output = [
          'status' => true,
          'message' => $msg,
          'info' => '',
        ];
      } else {
        $msg = 'Something went wrong while updating the display order of the product feature value!';

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

    $data['feat_cat_id'] = $feat_cat_id;

    $data['prod_feat_cat'] = $this->prod_feat_m->get_prod_feat_cat(['feat_cat_id' => $feat_cat_id]);
    $data['prod_feat'] = $this->prod_feat_m->get_prod_feat_data(['feat_cat_id' => $feat_cat_id], 'display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }
}
