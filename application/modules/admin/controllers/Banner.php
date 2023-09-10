<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->module('user');

    $this->load->model('admin_model');
    $this->load->model('banner_model', 'banner_m');

    $this->load->helper('form');
    $this->load->library('form_validation');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect('user/logout');
    }
  }

  // banner positions
  public function manage_positions()
  {
    $data = array(
      'page_data' => array(
        'title' => 'Manage Banner Positions',
        'styles' => array(
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
          // PATH_BACKEND_THEME_PLUGINS.'datatables-responsive/css/responsive.bootstrap4.min.css',
        ),
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
          //PATH_BACKEND_THEME_PLUGINS.'datatables-responsive/js/dataTables.responsive.min.js',
          //PATH_BACKEND_THEME_PLUGINS.'datatables-responsive/js/responsive.bootstrap4.min.js',
        ],
      ),
      'breadcrumb' => 'Manage Banners Positions',
      'view_file' => generate_view_path(__METHOD__),
    );

    $data['banner_positions'] = $this->banner_m->get_banner_positions(null, 'created_at', 'DESC');

    $this->load->view('template_backend', $data);
  }

  // banner position - add new
  public function add_new_position()
  {
    if ($this->input->method() == 'post') {
      $this->form_validation->set_rules(
        'banner_position_name',
        'Banner Position Name',
        'trim|required|min_length[1]|max_length[100]'
      );

      $this->form_validation->set_rules(
        'banner_position_slug',
        'Banner Position Slug',
        'trim|required|min_length[1]|max_length[100]|is_unique[banner_positions.position_slug]'
      );

      $this->form_validation->set_rules(
        'banner_position_status',
        'Banner Position Status',
        'trim|required|numeric|less_than[2]',
        [
          'less_than' => 'Please select a s%s',
          'numeric' => 'Please select a s%s'
        ]
      );

      if ($this->form_validation->run() == TRUE) {
        $position_name = $this->input->post('banner_position_name');
        $position_slug = slugify($this->input->post('banner_position_slug'));
        $position_for_category = $this->input->post('banner_position_for_category');
        $position_for_product = $this->input->post('banner_position_for_product');
        $position_status = is_null($this->input->post('banner_position_status')) ? '0' : '1';

        $insert_data = [
          'cat_id' => ($position_for_category == '') ? null : $position_for_category,
          'prod_id' => ($position_for_product == '') ? null : $position_for_product,
          'position_name' => $position_name,
          'position_slug' => $position_slug,
          'status' => $position_status,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        $data_inserted = insert_method('banner_positions', $insert_data);

        if ($data_inserted) {
          $this->session->set_flashdata('success_msg', 'Banner Position has been saved successfully!');

          redirect(base_url('admin/banner/positions'));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $data = [
      'page_data' => [
        'title' => 'Add New Banner Position',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Add New Position',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['categories'] = select_method('categories');
    $data['products'] = select_method('products');

    $this->load->view('template_backend', $data);
  }

  // banner position - edit
  public function edit_position($position_id = null)
  {
    if (is_null($position_id)) {
      return redirect(base_url('admin/banner/positions'));
    }

    $data = [
      'page_data' => [
        'title' => 'Edit Banner Position',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Edit Position',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['banner_position'] = $this->banner_m->get_banner_positions(['id' => $position_id]);
    $data['categories'] = select_method('categories');
    $data['products'] = select_method('products');

    if (!$data['banner_position']) {
      $this->session->set_flashdata('error_msg', 'Banner position not found.');

      return redirect(base_url('admin/banner/positions'));
    }

    if ($this->input->method() == 'post') {
      $banner_position_name = $this->input->post('banner_position_name');
      $banner_position_slug = slugify($this->input->post('banner_position_slug'));
      $position_for_category = $this->input->post('banner_position_for_category');
      $position_for_product = $this->input->post('banner_position_for_product');
      $status = (is_null($this->input->post('banner_position_status'))) ? '0' : '1';

      $this->form_validation->set_rules(
        'banner_position_name',
        'Banner Position Name',
        'trim|required|min_length[1]|max_length[100]'
      );

      if ($banner_position_slug == $data['banner_position']->position_slug) {
        $this->form_validation->set_rules(
          'banner_position_slug',
          'Banner Position Slug',
          'trim|required|min_length[1]|max_length[100]'
        );
      } else {
        $this->form_validation->set_rules(
          'banner_position_slug',
          'Banner Position Slug',
          'trim|required|min_length[1]|max_length[100]|is_unique[banner_positions.position_slug]',
          [
            'is_unique' => '%s already exists.'
          ]
        );
      }

      $this->form_validation->set_rules(
        'banner_position_status',
        'Banner Position Status',
        'trim|numeric|less_than[2]',
        [
          'less_than' => 'Invalid value passed in %s',
          'numeric' => 'Invalid value passed in %s'
        ]
      );

      if ($this->form_validation->run() == TRUE) {
        $update_data = [
          'cat_id' => $position_for_category,
          'prod_id' => $position_for_product,
          'position_name' => $banner_position_name,
          //'position_slug' => $banner_position_slug,
          'status' => $status,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        $data_updated = update_method('banner_positions', $update_data, ['id' => $position_id]);

        if ($data_updated) {
          $this->session->set_flashdata('success_msg', 'Banner Position has been updated!');

          // CODE:to redirect to same page use this - avoiding resubmission
          // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
          // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
          // exit(); 

          redirect(base_url('admin/banner/positions'));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $this->load->view('template_backend', $data);
  }

  // banner position - delete
  public function delete_position($position_id)
  {
    if ($this->input->method() == 'post') {
      $this->db->trans_start();

      $banner_positions_deleted = delete_method('banner_positions', ['id' => $position_id]);

      if ($banner_positions_deleted) {
        $banner_ids_for_position = multi_select_query_where('banners', ['banner_position_id' => $position_id]);

        if (sizeof($banner_ids_for_position) > 0) {
          $banners_for_deleted_position_deleted = delete_method('banners', ['banner_position_id' => $position_id]);

          $this->db->trans_complete();

          if ($banners_for_deleted_position_deleted) {
            $output = [
              'status' => true,
              'message' => 'Banner(s) for the deleted banner position has been deleted successfully!',
              'info' => $this->db->affected_rows(),
            ];
          } else {
            $output = [
              'status' => false,
              'message' => 'Something went wrong while deleting the banner(s) for deleted banner position.',
              'info' => '',
            ];
          }
        } else {
          $this->db->trans_complete();

          $output = [
            'status' => true,
            'message' => 'Banner position has been deleted successfully!',
            'info' => $this->db->affected_rows(),
          ];
        }
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the banner position.',
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
  public function manage_banners($position_id = null)
  {
    if (is_null($position_id)) {
      redirect(base_url('admin/banner/positions'));
    }

    $data = [
      'page_data' => [
        'title' => 'Manage Banners',
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
      'breadcrumb' => 'Manage Banners',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['banner_position_id'] = $position_id;
    $data['banner_position'] = select_where_method('banner_positions', ['id' => $position_id]);
    $data['banners'] = multi_select_query_where('banners', ['banner_position_id' => $position_id]);

    $this->load->view('template_backend', $data);
  }

  // banner - add new
  public function add_new_banner($position_id)
  {
    $product_banner_position = select_where_method('banner_positions', ['id' => $position_id]);

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'banner_name',
          'label' => 'Banner Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'banner_video_url',
          'label' => 'Banner Video Url',
          'rules' => 'trim|max_length[1000]'
        ],
        [
          'field' => 'banner_status',
          'label' => 'Banner Status',
          'rules' => 'trim|numeric|less_than[2]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'banner_position',
          'label' => 'Banner Position',
          'rules' => 'trim|required|numeric',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'banner_alt_text',
          'label' => 'Banner Alternate Text',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'banner_cta',
          'label' => 'Banner CTA',
          'rules' => 'trim|max_length[255]'
        ],
        [
          'field' => 'banner_is_external_cta',
          'label' => 'Banner Is CTA External',
          'rules' => 'trim|in_list[on]',
          'errors' => [
            'required' => 'Invalid value passed in %s.',
          ],
        ],
        [
          'field' => 'banner_target_user',
          'label' => 'Banner Target User',
          'rules' => 'trim|required',
          'errors' => [
            'required' => 'Invalid value passed in %s.',
          ],
        ],
        [
          'field' => 'banner_classes',
          'label' => 'Banner Classess',
          'rules' => 'trim|max_length[100]'
        ],
        [
          'field' => 'banner_start_date',
          'label' => 'Banner Start',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        ],
        [
          'field' => 'banner_end_date',
          'label' => 'Banner End Date',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        ]
      ];

      $banner_name = $this->input->post('banner_name');
      $banner_start_date = (empty($this->input->post('banner_start_date'))) ? NULL : $this->input->post('banner_start_date');
      $banner_end_date = (empty($this->input->post('banner_end_date'))) ? NULL : $this->input->post('banner_end_date');
      $banner_position = $this->input->post('banner_position');
      $banner_cta = $this->input->post('banner_cta');
      $banner_video_url = $this->input->post('banner_video_url');
      $banner_is_external_cta = $this->input->post('banner_is_external_cta');
      $banner_target_user = $this->input->post('banner_target_user');
      $banner_regions = $this->input->post('banner_regions');
      $banner_alt_text = $this->input->post('banner_alt_text');
      $banner_classes = $this->input->post('banner_classes');
      $banner_status = is_null($this->input->post('banner_status')) ? '0' : '1';

      $banner_mobile_image_mapping = $this->input->post('mobile_image_mapping');
      $banner_desktop_image_mapping = $this->input->post('desktop_image_mapping');
      $banner_ticker_text = $this->input->post('ticker_text');

      $this->form_validation->set_rules($validation_config);
        
      // if (!is_null($this->input->post('banner_type'))) {
      if (empty($_FILES['banner_image_mobile']['name'])) {
        $this->form_validation->set_rules(
          'banner_image_mobile',
          'Banner Mobile Image',
          'required'
        );
      }

      if (empty($_FILES['banner_image_desktop']['name'])) {
        $this->form_validation->set_rules(
          'banner_image_desktop',
          'Banner Desktop Image',
          'required'
        );
      }
      /* } else {
        $this->form_validation->set_rules(
          'banner_video_url',
          'Banner Video Url',
          'required'
        );
      } */

      if ($banner_end_date) {
        $this->form_validation->set_rules(
          'banner_start_date',
          'Banner Start Date',
          'trim|required'
        );
      }

      if (!is_null($this->input->post('banner_is_external_cta'))) {
        $this->form_validation->set_rules(
          'banner_cta',
          'Banner CTA',
          'trim|required|max_length[255]'
        );
      }


      if (!is_null($this->input->post('banner_is_regional'))) {
        $this->form_validation->set_rules(
          'banner_regions',
          'Regions',
          'trim|required|max_length[1000]'
        );
      }

      if ($this->form_validation->run() == TRUE) {
        if ($banner_start_date && $banner_end_date) {
          if (strtotime($banner_start_date) <= time()) {
            $this->session->set_flashdata('error_msg', 'Banner Start Date should be a future date');

            redirect("admin/banner/position/$position_id/add-new");
          }

          if (strtotime($banner_start_date) >= strtotime($banner_end_date)) {
            $this->session->set_flashdata('error_msg', 'Banner End Date should be greater than Banner Start Date');

            redirect("admin/banner/position/$position_id/add-new");
          }
        }

        $display_order_data = select_where_order_by_method('banners', ['banner_position_id' => $position_id], 'display_order', 'DESC', 1);
        // $display_order = $this->db->query('SELECT display_order FROM banners WHERE position_id = ? ORDER BY display_order DESC LIMIT 1', $data['banner_position_id'])->row()->position;

        $display_order = $display_order_data->display_order;

        settype($display_order, "integer");

        $insert_data = [
          'banner_position_id' => trim($banner_position),
          'name' => $banner_name,
          'display_order' => ++$display_order,
          'alt_text' => $banner_alt_text,
          'target_user' => $banner_target_user,
          'regions' => strtolower($banner_regions),
          'desktop_image_mapping' => $banner_desktop_image_mapping,
          'mobile_image_mapping' => $banner_mobile_image_mapping,
          'ticker_text' => $banner_ticker_text,
          'video_url' => $banner_video_url,
          'status' => $banner_status,
          'start_date' => !empty($banner_start_date) ? date("Y-m-d H:i:s", strtotime($banner_start_date)) : NULL,
          'end_date' => !empty($banner_end_date) ? date("Y-m-d H:i:s", strtotime($banner_end_date)) : NULL,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        if ($this->input->post('banner_cta')) {
          $banner_is_external_cta = trim($this->input->post('banner_is_external_cta'));

          $banner_cta = ltrim($banner_cta, '/');
          $banner_cta = rtrim($banner_cta, '/');

          $insert_data['cta'] = $banner_cta;
          $insert_data['is_external_cta'] = ($banner_is_external_cta == 'on') ? 1 : 0;
        }

        if ($this->input->post('banner_classes')) {
          $insert_data['additional_classes'] = $banner_classes;
        }

        // if (!is_null($this->input->post('banner_type'))) {
        $uploadedFileData = [];

        $upload_path = ABS_PATH_FILES_UPLOADS . "banners/$product_banner_position->position_slug/";

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
          $allowedFileMimes = [
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/gif',
            'image/webp',
          ];

          if (in_array($file['type'], $allowedFileMimes)) {
            $fileName = 'banner_' . microtime(true);
            $fileName = strtr($fileName, [' ' => '_', '.' => '_']);

            if ($field == 'banner_image_mobile') {
              $fileName .= '_m';
            }

            $config['file_name'] = $fileName; // name of the file;

            $this->upload->initialize($config);

            if ($this->upload->do_upload($field)) {
              $uploadedFileData[$field] = $this->upload->data();
            } else {
              $error = strip_tags($this->upload->display_errors());

              $this->session->set_flashdata('error_msg', $error);

              redirect("admin/banner/position/$position_id/add-new");

              break;
            }
          } else {
            $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG,PNG or GIF images allowed.');

            redirect("admin/banner/position/$position_id/add-new");

            break;
          }
        }

        if (sizeof($uploadedFileData) > 0) {
          $insert_data['mobile_image'] = $uploadedFileData['banner_image_mobile']['orig_name'];
          $insert_data['desktop_image'] = $uploadedFileData['banner_image_desktop']['orig_name'];
        }
        /* } else {
          $insert_data['mobile_image'] = '';
          $insert_data['desktop_image'] = '';
        } */

        $insertId = $this->db->insert('banners', $insert_data);

        if ($insertId) {
          $this->session->set_flashdata('success_msg', 'Banner has been uploaded successfully!');

          $this->session->unset_userdata('banner_position_id');

          redirect("admin/banner/position/$banner_position");
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $data = [
      'page_data' => [
        'title' => 'Add New Banner',
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
      'breadcrumb' => 'Add New Banner',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['banner_position_id'] = $position_id;
    $data['banner_position'] = $product_banner_position;
    $data['banner_positions'] = $this->banner_m->get_banner_positions(null, 'position_name', 'ASC');

    $this->load->view('template_backend', $data);
  }

  // banner - edit 
  public function edit_banner($position_id, $banner_id = null)
  {
    $product_banner_position = select_where_method('banner_positions', ['id' => $position_id]);

    if ($this->input->method() == 'post') {
      /* if (empty($banner_id)) {
        $this->session->set_flashdata('error_msg', 'Something went wrong, data not found!');

        return redirect(base_url("admin/banner/position/$position_id/edit/$banner_id"));
        } */

      $validationConfig = array(
        array(
          'field' => 'banner_name',
          'label' => 'Banner Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
        [
          'field' => 'banner_video_url',
          'label' => 'Banner Video Url',
          'rules' => 'trim|max_length[1000]'
        ],
        array(
          'field' => 'banner_status',
          'label' => 'Banner Status',
          'rules' => 'trim|numeric|less_than[2]',
          'errors' => array(
            'required' => 'Please select a %s.',
          ),
        ),
        array(
          'field' => 'banner_position',
          'label' => 'Banner Position',
          'rules' => 'trim|numeric',
          'errors' => array(
            'required' => 'Please select a %s.',
          ),
        ),
        array(
          'field' => 'banner_alt_text',
          'label' => 'Banner Alternate Text',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ),
        array(
          'field' => 'banner_cta',
          'label' => 'Banner CTA',
          'rules' => 'trim|max_length[255]'
        ),
        array(
          'field' => 'banner_is_external_cta',
          'label' => 'Banner Is CTA External',
          'rules' => 'trim|in_list[on]',
          'errors' => array(
            'required' => 'Invalid value passed in %s.',
          ),
        ),
        [
          'field' => 'banner_target_user',
          'label' => 'Banner Target User',
          'rules' => 'trim|required',
          'errors' => [
            'required' => 'Invalid value passed in %s.',
          ],
        ],
        array(
          'field' => 'banner_classes',
          'label' => 'Banner Classess',
          'rules' => 'trim|max_length[100]'
        ),
        array(
          'field' => 'banner_start_date',
          'label' => 'Banner Start',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        ),
        array(
          'field' => 'banner_end_date',
          'label' => 'Banner End Date',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        )
      );

      $banner_name = $this->input->post('banner_name');
      $banner_start_date = (empty($this->input->post('banner_start_date'))) ? NULL : $this->input->post('banner_start_date');
      $banner_end_date = (empty($this->input->post('banner_end_date'))) ? NULL : $this->input->post('banner_end_date');
      $banner_position_id = $this->input->post('banner_position');
      $banner_cta = $this->input->post('banner_cta');
      $banner_video_url = $this->input->post('banner_video_url');
      $banner_is_external_cta = $this->input->post('banner_is_external_cta');
      $banner_target_user = $this->input->post('banner_target_user');
      $banner_regions = $this->input->post('banner_regions');
      $banner_alt_text = $this->input->post('banner_alt_text');
      $banner_classes = $this->input->post('banner_classes');
      $banner_status = is_null($this->input->post('banner_status')) ? '0' : '1';

      $banner_mobile_image_mapping = $this->input->post('mobile_image_mapping');
      $banner_desktop_image_mapping = $this->input->post('desktop_image_mapping');
      $banner_ticker_text = $this->input->post('ticker_text');

      $this->form_validation->set_rules($validationConfig);

      if ($banner_end_date) {
        $this->form_validation->set_rules('banner_start_date', 'Banner Start Date', 'trim|required');
      }

      if (!is_null($this->input->post('banner_is_external_cta'))) {
        $this->form_validation->set_rules(
          'banner_cta',
          'Banner CTA',
          'trim|required|max_length[255]'
        );
      }

      if (!is_null($this->input->post('banner_is_regional'))) {
        $this->form_validation->set_rules(
          'banner_regions',
          'Regions',
          'trim|required|max_length[1000]'
        );
      }

      if ($this->form_validation->run() == TRUE) {
        if ($banner_start_date && $banner_end_date) {
          // if(strtotime($banner_start_date) strtotime($banner_start_date) <= time()) {
          // 	$this->session->set_flashdata('error_msg','Banner Start Date should be a future date');
          // 	redirect("admin/banner/edit/$banner_id");
          // }

          if (strtotime($banner_start_date) >= strtotime($banner_end_date)) {
            $this->session->set_flashdata('error_msg', 'Banner End Date should be greater than Banner Start Date');

            redirect(base_url("admin/banner/position/$position_id/edit/$banner_id"));
          }
        }

        $banner_cta = ltrim($banner_cta, '/');
        $banner_cta = rtrim($banner_cta, '/');

        $banner_is_external_cta = ($banner_is_external_cta == 'on') ? 1 : 0;

        $update_data = [
          'banner_position_id' => trim($banner_position_id),
          'name' => $banner_name,
          'video_url' => $banner_video_url,
          'alt_text' => $banner_alt_text,
          'cta' => $banner_cta,
          'is_external_cta' => $banner_is_external_cta,
          'target_user' => $banner_target_user,
          'regions' => strtolower($banner_regions),
          'additional_classes' => $banner_classes,
          'desktop_image_mapping' => $banner_desktop_image_mapping,
          'mobile_image_mapping' => $banner_mobile_image_mapping,
          'ticker_text' => $banner_ticker_text,
          'status' => $banner_status,
          'start_date' => !empty($banner_start_date) ? date("Y-m-d H:i:s", strtotime($banner_start_date)) : NULL,
          'end_date' => !empty($banner_end_date) ? date("Y-m-d H:i:s", strtotime($banner_end_date)) : NULL,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (!empty($_FILES['banner_image_mobile']['name']) || !empty($_FILES['banner_image_desktop']['name'])) {
          $uploadedFileData = [];

          $upload_path = ABS_PATH_FILES_UPLOADS . "banners/$product_banner_position->position_slug/";

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
            if (!empty($file['type'])) {
              $allowedFileMimes = [
                'image/jpeg',
                'image/jpg',
                'image/png',
                'image/gif',
                'image/webp',
              ];

              if (in_array($file['type'], $allowedFileMimes)) {
                $fileName = 'banner_' . microtime(true);
                $fileName = strtr($fileName, [' ' => '_', '.' => '_']);

                if ($field == 'banner_image_mobile') {
                  $fileName .= '_m';
                }

                $config['file_name'] = $fileName; // name of the file;

                $this->upload->initialize($config);

                if ($this->upload->do_upload($field)) {
                  $uploadedFileData[$field] = $this->upload->data();

                  if ($field == 'banner_image_mobile') {
                    $update_data['mobile_image'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploadedFileData['banner_image_mobile']['orig_name'];
                  } else {
                    $update_data['desktop_image'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploadedFileData['banner_image_desktop']['orig_name'];
                  }
                } else {
                  $error = strip_tags($this->upload->display_errors());

                  $this->session->set_flashdata('error_msg', $error);

                  return redirect("admin/banner/position/$position_id/edit/$banner_id");

                  break;
                }
              } else {
                $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG,PNG or GIF images allowed.');

                return redirect("admin/banner/position/$position_id/edit/$banner_id");
              }
            }
          }

          $update_data['video_url'] = '';
        } else {
          $update_data['video_url'] = $banner_video_url;
        }

        update_method('banners', $update_data, ['id' => $banner_id]);

        //$this->db
        //  ->set($update_data)
        //  ->where('id', $banner_id)
        //  ->update('banners');

        if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('success_msg', 'Banner has been updated successfully!');

          redirect(base_url("admin/banner/position/$position_id"));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $data = [
      'page_data' => [
        'title' => 'Edit banner',
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
      'breadcrumb' => 'Edit banner',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['banner_position_id'] = $position_id;
    $data['banner_position'] = $product_banner_position;
    $data['banner'] = $this->banner_m->get_banner_data(['id' => $banner_id]);
    $data['banner_positions'] = $this->banner_m->get_banner_positions(null, 'position_name', 'ASC');

    $this->load->view('template_backend', $data);
  }

  // banner - delete
  public function delete_banner($position_id, $banner_id = null)
  {
    $output = [];

    if ($this->input->method() == 'post') {
      $result = delete_method('banners', ['id' => $banner_id]);

      if ($result == true) {
        $output = [
          'status' => true,
          'info' => $this->db->affected_rows(),
        ];

        if ($this->db->affected_rows() > 0) {
          $output['message'] = 'Banner deleted successfully!';
        } else if ($this->db->affected_rows() < 1) {
          $output['message'] = 'Banner Not found!';
        }

        return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($output));

        return true;
      }
    }

    $output = [
      'status' => false,
      'message' => 'Failed to delete banner!',
      'info' => '',
    ];

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));

    return true;
  }

  // sort banner display order
  public function edit_display_order($position_id = null)
  {
    if ($this->input->method() == 'post') {
      $banner_order_data = array_map('intval', $this->input->post('banners_order_data'));

      $success = false;

      foreach ($banner_order_data as $index => $banner_id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (update_method('banners', $update_data, ['id' => $banner_id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Banner display order updated successfully!';

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
        'title' => 'Edit Banner Display Order',
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

    $data['banner_position_id'] = $position_id;
    $data['banner_position'] = select_where_method('banner_positions', ['id' => $position_id]);
    $data['banners'] = $this->banner_m->get_banner_data(['banner_position_id' => $position_id], 'display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }
}
