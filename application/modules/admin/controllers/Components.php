<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Components extends MX_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->load->model('components_model', 'comp_m');

    $this->load->module('user');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  public function manage_tabs_blocks()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Manage Tabs Block Component',
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

    $tabs_blocks_data = $this->get_tabs_data(null, null, 'created_at', 'DESC');

    $tab_blocks = [];

    foreach ($tabs_blocks_data as $tbd) {
      $tab_blocks[$tbd->tb_id]['tb_id'] = $tbd->tb_id;
      $tab_blocks[$tbd->tb_id]['section_title'] = $tbd->section_title;
      $tab_blocks[$tbd->tb_id]['section_slug'] = $tbd->section_slug;
      $tab_blocks[$tbd->tb_id]['section_desc'] = $tbd->section_desc;
      $tab_blocks[$tbd->tb_id]['section_for'] = $tbd->section_for;
      $tab_blocks[$tbd->tb_id]['category_id'] = $tbd->category_id;
      $tab_blocks[$tbd->tb_id]['category'] = $tbd->category;
      $tab_blocks[$tbd->tb_id]['product_id'] = $tbd->product_id;
      $tab_blocks[$tbd->tb_id]['product'] = $tbd->product;
      $tab_blocks[$tbd->tb_id]['created_at'] = $tbd->created_at;
      $tab_blocks[$tbd->tb_id]['updated_at'] = $tbd->updated_at;
    }

    $data['tabs_blocks_data'] = json_decode(json_encode(array_values($tab_blocks)));

    $this->load->view('template_backend', $data);
  }

  // tabs block - add new
  public function add_new_tabs_block()
  {
    if ($this->input->method() == 'post') {
      $validation_rules = [
        [
          'field' => 'tb_section_title',
          'label' => 'Section Title',
          'rules' => 'trim|required|min_length[1]|max_length[100]',
        ],
        [
          'field' => 'tb_section_slug',
          'label' => 'Section Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]|is_unique[tab_blocks.section_slug]',
        ],
        [
          'field' => 'tb_section_for_category',
          'label' => 'Section for Category',
          'rules' => (in_array($this->input->post('tb_section_for'), ['None', 'Product'])) ? '' : 'required',
        ],
        [
          'field' => 'tb_section_for_product',
          'label' => 'Section for Product',
          'rules' => (in_array($this->input->post('tb_section_for'), ['None', 'Category'])) ? '' : 'required',
        ],
      ];

      $tabs_count = sizeof($this->input->post('tab'));

      for ($i = 1; $i <= $tabs_count; $i++) {
        $validation_rules[] = [
          'field' => 'tab[' . $i . '][title]',
          'label' => 'Tab Title',
          'rules' => ($this->input->post('tab[' . $i . '][title]') == '') ? 'required' : '',
        ];

        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_type]',
          'label' => 'Tab Content Type',
          'rules' => ($this->input->post('tab[' . $i . '][content_type]') == '') ? 'required' : '',
        ];

        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_banner_m]',
          'label' => 'Tab Content Mobile Image',
          'rules' => (!(in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'custom-html']))
            && (empty($_FILES['tab']['tmp_name'][$i]['content_banner_m']))) ? 'required' : '',
        ];

        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_banner_d]',
          'label' => 'Tab Content Desktop Image',
          'rules' => (!(in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'custom-html']))
            && (empty($_FILES['tab']['tmp_name'][$i]['content_banner_d']))) ? 'required' : '',
        ];

        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_html]',
          'label' => 'Tab Content HTML',
          'rules' => (!in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'banner-upload'])
            && ($this->input->post('tab[' . $i . '][content_html]') == "")) ? 'required' : '',
        ];
      }

      $this->form_validation->set_rules($validation_rules);

      if ($this->form_validation->run() == TRUE) {
        $section_title = $this->input->post('tb_section_title');
        $section_slug = slugify($this->input->post('tb_section_slug'));
        $section_desc = ($this->input->post('tb_section_desc') == '') ? null : $this->input->post('tb_section_desc');
        $section_for = $this->input->post('tb_section_for');
        $cat_id = ($this->input->post('tb_section_for_category') == '') ? null : $this->input->post('tb_section_for_category');
        $prod_id = ($this->input->post('tb_section_for_product') == '') ? null : $this->input->post('tb_section_for_product');

        // $display_order_data = multi_select_order_by_method('categories', 'display_order', 'DESC', 1);

        // $display_order = current($display_order_data)->display_order;

        // settype($display_order, "integer");

        $this->db->trans_start();

        $insert_data = [
          'section_title' => $section_title,
          'section_slug' => $section_slug,
          'section_desc' => $section_desc,
          'section_for' => $section_for,
          'cat_id' => $cat_id,
          'prod_id' => $prod_id,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        $data_inserted = insert_method('tab_blocks', $insert_data);

        unset($insert_data);

        if ($data_inserted) {
          $insert_id = $this->db->insert_id();

          $upload_path = ABS_PATH_FILES_UPLOADS . "components/tab-blocks/$section_slug/";

          if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
          }

          $config = [
            'upload_path' => $upload_path,
            'allowed_types' => '*', // allowed file types
            'max_size' => '2048000', // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'file_ext_tolower' => true, // forcing file extension to be in lower case
            // 'overwrite' => false,
            // 'max_height' => '472',
            // 'max_width' => '1362'
          ];

          $this->load->library('upload');

          $uploaded_files = $_FILES['tab'];

          $_FILES = [];

          $uploaded_files = array_map(function ($v) {
            return array_values($v);
          },  $uploaded_files);

          $uploaded_file_data = [];

          for ($i = 0; $i < sizeof($uploaded_files['name']); $i++) {

            $allowed_file_mimes = [
              'image/jpeg',
              'image/jpg',
              'image/png',
            ];

            if (in_array($uploaded_files['type'][$i]['content_banner_m'], $allowed_file_mimes)) {

              $_FILES['userfile'] = [
                'name' => $uploaded_files['name'][$i]['content_banner_m'],
                'type' => $uploaded_files['type'][$i]['content_banner_m'],
                'tmp_name' => $uploaded_files['tmp_name'][$i]['content_banner_m'],
                'error' =>  $uploaded_files['error'][$i]['content_banner_m'],
                'size' => $uploaded_files['size'][$i]['content_banner_m'],
              ];

              $file_name = 'banner_upload_mob_' . microtime(true);
              $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

              $config['file_name'] = $file_name; // name of the file;              

              $this->upload->initialize($config);

              if ($this->upload->do_upload()) {
                $uploaded_file_data['tab[' . ($i + 1) . '][content_banner_m]'] = $this->upload->data();
              }
            }

            if (in_array($uploaded_files['type'][$i]['content_banner_d'], $allowed_file_mimes)) {
              $_FILES['userfile'] = [
                'name' => $uploaded_files['name'][$i]['content_banner_d'],
                'type' => $uploaded_files['type'][$i]['content_banner_d'],
                'tmp_name' => $uploaded_files['tmp_name'][$i]['content_banner_d'],
                'error' =>  $uploaded_files['error'][$i]['content_banner_d'],
                'size' => $uploaded_files['size'][$i]['content_banner_d'],
              ];

              $file_name = 'banner_upload_dex_' . microtime(true);
              $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

              $config['file_name'] = $file_name; // name of the file;              

              $this->upload->initialize($config);

              if ($this->upload->do_upload()) {
                $uploaded_file_data['tab[' . ($i + 1) . '][content_banner_d]'] = $this->upload->data();
              }
            }
          }

          //if (sizeof($uploaded_file_data) > 0) {
          $tabs_count = sizeof($this->input->post('tab'));

          for ($i = 1; $i <= $tabs_count; $i++) {
            $insert_data[($i - 1)] = [
              'tb_id' => $insert_id,
              'tab_title' => $this->input->post('tab[' . $i . '][title]'),
              'tab_content_type' => $this->input->post('tab[' . $i . '][content_type]'),
              'custom_html' => ($this->input->post('tab[' . $i . '][content_html]') == '') ? null : $this->input->post('tab[' . $i . '][content_html]'),
              'status' => is_null($this->input->post('tab[' . $i . '][status]')) ? '0' : '1',
              'created_at' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('userId'),
            ];

            $insert_data[($i - 1)]['banner_upload_mob'] = isset($uploaded_file_data['tab[' . $i . '][content_banner_m]']) ? $uploaded_file_data['tab[' . $i . '][content_banner_m]']['orig_name'] : null;
            $insert_data[($i - 1)]['banner_upload_dex'] = isset($uploaded_file_data['tab[' . $i . '][content_banner_d]']) ? $uploaded_file_data['tab[' . $i . '][content_banner_d]']['orig_name'] : null;
          }

          $data_inserted = insert_batch_method('tab_blocks_details', $insert_data);

          $this->db->trans_complete();

          if ($data_inserted) {
            $this->session->set_flashdata('success_msg', 'Tab block details have been added successfully!');

            // CODE:if redirected to same page use this - avoiding resubmission
            // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
            // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
            // exit(); 

            //redirect(base_url('admin/components/tabs-block'));

            $output = [
              'status' => true,
              'message' => 'Tab block details have been added successfully!',
              'data' => [
                'r_url' => base_url('admin/components/tabs-block'),
              ],
            ];

            return $this->output
              ->set_content_type('application/json')
              ->set_output(json_encode($output));
          } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong!');
          }
          //}
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      } else {
        $fields = [];

        if ($this->input->post('tb_section_title') == '') {
          $fields[] = 'tb_section_title';
        }

        if (($this->input->post('tb_section_for') == 'Category') && ($this->input->post('tb_section_for_category') == '')) {
          $fields[] = 'tb_section_for_category';
        } elseif (($this->input->post('tb_section_for') == 'Product') && ($this->input->post('tb_section_for_product') == '')) {
          $fields[] = 'tb_section_for_product';
        }

        $tabs_count = sizeof($this->input->post('tab'));

        for ($i = 1; $i <= $tabs_count; $i++) {
          if ($this->input->post('tab[' . $i . '][title]') == '') {
            $fields[] = 'tab[' . $i . '][title]';
          }

          if ($this->input->post('tab[' . $i . '][content_type]') == '') {
            $fields[] = 'tab[' . $i . '][content_type]';
          }

          if (
            (!in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'custom-html']))
            && (empty($_FILES['tab']['tmp_name'][$i]['content_banner_m']))
          ) {
            $fields[] = 'tab[' . $i . '][content_banner_m]';
          }

          if (
            (!in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'custom-html']))
            && (empty($_FILES['tab']['tmp_name'][$i]['content_banner_d']))
          ) {
            $fields[] = 'tab[' . $i . '][content_banner_d]';
          }

          if (
            (!in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'banner-upload']))
            && ($this->input->post('tab[' . $i . '][content_html]') == "")
          ) {
            $fields[] = 'tab[' . $i . '][content_html]';
          }
        }

        $validation_errors = [];

        foreach ($fields as $field) {
          $validation_errors[$field] = form_error($field, '<span class="error text-danger"><small>', '</small></span>');
        }

        $output = [
          'status' => false,
          'message' => 'Please fill all the details for successful submission!',
          'data' => [
            'validation_errors' => $validation_errors,
          ],
        ];

        return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($output));
      }
    }

    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Components - Tabs Block',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
          PATH_BACKEND_THEME_PLUGINS . 'icheck-bootstrap/icheck-bootstrap.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['categories'] = select_method('categories');
    $data['products'] = select_method('products');

    $this->load->view('template_backend', $data);
  }

  public function get_tabs_data($where = null, $orderByColumn = null, $order = null)
  {
    $tb_id = $this->input->post('tb_id');
    $type = $this->input->post('type');

    if ($tb_id) {
      $where = ['tb.tb_id' => $tb_id];
    }

    $tabs_blocks_data = $this->comp_m->get_tabs_data($where, $orderByColumn, $order);

    if ($type == 'ajax') {
      foreach ($tabs_blocks_data as $i => $tbd) {
        $tbd->banner_upload_mob = PATH_FILES_UPLOADS_ADMIN . "components/tab-blocks/$tbd->section_slug/$tbd->banner_upload_mob";
        $tbd->banner_upload_dex = PATH_FILES_UPLOADS_ADMIN . "components/tab-blocks/$tbd->section_slug/$tbd->banner_upload_dex";
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($tabs_blocks_data));
    } else {
      return $tabs_blocks_data;
    }
  }

  // tabs block - edit
  public function edit_tabs_block($tb_id)
  {
    if ($this->input->method() == 'post') {
      $validation_rules = [
        [
          'field' => 'tb_section_title',
          'label' => 'Section Title',
          'rules' => 'trim|required|min_length[1]|max_length[100]',
        ],
        [
          'field' => 'tb_section_slug',
          'label' => 'Section Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]',
        ],
        [
          'field' => 'tb_section_for_category',
          'label' => 'Section for Category',
          'rules' => (in_array($this->input->post('tb_section_for'), ['None', 'Product'])) ? '' : 'required',
        ],
        [
          'field' => 'tb_section_for_product',
          'label' => 'Section for Product',
          'rules' => (in_array($this->input->post('tb_section_for'), ['None', 'Category'])) ? '' : 'required',
        ],
      ];

      $tabs_count = sizeof($this->input->post('tab'));

      for ($i = 1; $i <= $tabs_count; $i++) {
        $validation_rules[] = [
          'field' => 'tab[' . $i . '][title]',
          'label' => 'Tab Title',
          'rules' => ($this->input->post('tab[' . $i . '][title]') == '') ? 'required' : '',
        ];

        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_type]',
          'label' => 'Tab Content Type',
          'rules' => ($this->input->post('tab[' . $i . '][content_type]') == '') ? 'required' : '',
        ];

        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_banner_m]',
          'label' => 'Tab Content Mobile Image',
          'rules' => ''
        ];

        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_banner_d]',
          'label' => 'Tab Content Desktop Image',
          'rules' => ''
        ];


        $validation_rules[] = [
          'field' => 'tab[' . $i . '][content_html]',
          'label' => 'Tab Content HTML',
          'rules' => (!in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'banner-upload'])
            && ($this->input->post('tab[' . $i . '][content_html]') == "")) ? 'required' : '',
        ];
      }

      $this->form_validation->set_rules($validation_rules);

      if ($this->form_validation->run() == TRUE) {
        $section_title = $this->input->post('tb_section_title');
        $section_slug = slugify($this->input->post('tb_section_slug'));
        $section_desc = ($this->input->post('tb_section_desc') == '') ? null : $this->input->post('tb_section_desc');
        $section_for = $this->input->post('tb_section_for');
        $cat_id = ($this->input->post('tb_section_for_category') == '') ? null : $this->input->post('tb_section_for_category');
        $prod_id = ($this->input->post('tb_section_for_product') == '') ? null : $this->input->post('tb_section_for_product');

        // $display_order_data = multi_select_order_by_method('categories', 'display_order', 'DESC', 1);

        // $display_order = current($display_order_data)->display_order;

        // settype($display_order, "integer");

        $this->db->trans_start();

        $update_data = [
          'section_title' => $section_title,
          //'section_slug' => $section_slug,
          'section_desc' => $section_desc,
          'section_for' => $section_for,
          'cat_id' => $cat_id,
          'prod_id' => $prod_id,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        $data_updated = update_method('tab_blocks', $update_data, ['tb_id' => $tb_id]);

        unset($update_data);

        if ($data_updated) {
          $upload_path = ABS_PATH_FILES_UPLOADS . "components/tab-blocks/$section_slug/";

          if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
          }

          $config = [
            'upload_path' => $upload_path,
            'allowed_types' => '*', // allowed file types
            'max_size' => '2048000', // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'file_ext_tolower' => true, // forcing file extension to be in lower case
            // 'overwrite' => false,
            // 'max_height' => '472',
            // 'max_width' => '1362'
          ];

          $this->load->library('upload');

          $uploaded_files = $_FILES['tab'];

          $_FILES = [];

          $uploaded_files = array_map(function ($v) {
            return array_values($v);
          },  $uploaded_files);

          $uploaded_file_data = [];

          for ($i = 0; $i < sizeof($uploaded_files['name']); $i++) {

            $allowed_file_mimes = [
              'image/jpeg',
              'image/jpg',
              'image/png',
            ];

            if (!empty($uploaded_files['name'][$i]['content_banner_m'])) {

              $_FILES['userfile'] = [
                'name' => $uploaded_files['name'][$i]['content_banner_m'],
                'type' => $uploaded_files['type'][$i]['content_banner_m'],
                'tmp_name' => $uploaded_files['tmp_name'][$i]['content_banner_m'],
                'error' =>  $uploaded_files['error'][$i]['content_banner_m'],
                'size' => $uploaded_files['size'][$i]['content_banner_m'],
              ];

              if (($_FILES['userfile']['error'] == 0) && ($_FILES['userfile']['name'] != '')) {

                if (in_array($uploaded_files['type'][$i]['content_banner_m'], $allowed_file_mimes)) {
                  $file_name = 'banner_upload_mob_' . microtime(true);
                  $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

                  $config['file_name'] = $file_name; // name of the file;              

                  $this->upload->initialize($config);

                  if ($this->upload->do_upload()) {
                    $uploaded_file_data['tab[' . ($i + 1) . '][content_banner_m]'] = $this->upload->data();
                  }
                }
              }
            }

            if (!empty($uploaded_files['name'][$i]['content_banner_d'])) {

              $_FILES['userfile'] = [
                'name' => $uploaded_files['name'][$i]['content_banner_d'],
                'type' => $uploaded_files['type'][$i]['content_banner_d'],
                'tmp_name' => $uploaded_files['tmp_name'][$i]['content_banner_d'],
                'error' =>  $uploaded_files['error'][$i]['content_banner_d'],
                'size' => $uploaded_files['size'][$i]['content_banner_d'],
              ];

              if (($_FILES['userfile']['error'] == 0) && ($_FILES['userfile']['name'] != '')) {

                if (in_array($uploaded_files['type'][$i]['content_banner_d'], $allowed_file_mimes)) {
                  $file_name = 'banner_upload_mob_' . microtime(true);
                  $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

                  $config['file_name'] = $file_name; // name of the file;              

                  $this->upload->initialize($config);

                  if ($this->upload->do_upload()) {
                    $uploaded_file_data['tab[' . ($i + 1) . '][content_banner_d]'] = $this->upload->data();
                  }
                }
              }
            }
          }

          //if (sizeof($uploaded_file_data) > 0) {
          $tabs_count = sizeof($this->input->post('tab'));

          $insert_data = [];

          for ($i = 1; $i <= $tabs_count; $i++) {
            if ($this->input->post('tab[' . $i . '][detail_id]') == "") {
              $insert_data[] = [
                'tb_id' => $tb_id,
                'tab_title' => $this->input->post('tab[' . $i . '][title]'),
                'tab_content_type' => $this->input->post('tab[' . $i . '][content_type]'),
                'custom_html' => ($this->input->post('tab[' . $i . '][content_html]') == '') ? null : $this->input->post('tab[' . $i . '][content_html]'),
                'status' => is_null($this->input->post('tab[' . $i . '][status]')) ? '0' : '1',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $this->session->userdata('userId'),
              ];
            } else {
              $update_data[($i - 1)] = [
                'tb_detail_id' => $this->input->post('tab[' . $i . '][detail_id]'),
                'tb_id' => $tb_id,
                'tab_title' => $this->input->post('tab[' . $i . '][title]'),
                'tab_content_type' => $this->input->post('tab[' . $i . '][content_type]'),
                'custom_html' => ($this->input->post('tab[' . $i . '][content_html]') == '') ? null : $this->input->post('tab[' . $i . '][content_html]'),
                'status' => is_null($this->input->post('tab[' . $i . '][status]')) ? '0' : '1',
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => $this->session->userdata('userId'),
              ];

              if (isset($uploaded_file_data['tab[' . $i . '][content_banner_m]'])) {
                $update_data[($i - 1)]['banner_upload_mob'] = $uploaded_file_data['tab[' . $i . '][content_banner_m]']['orig_name'];
              }

              if (isset($uploaded_file_data['tab[' . $i . '][content_banner_d]'])) {
                $update_data[($i - 1)]['banner_upload_dex'] = $uploaded_file_data['tab[' . $i . '][content_banner_d]']['orig_name'];
              }
            }
          }

          // update the records
          $data_altered = update_batch_method('tab_blocks_details', $update_data, 'tb_detail_id');

          unset($update_data);

          // insert the new records if added via CMS
          if (!empty($insert_data)) {
            $data_altered = insert_batch_method('tab_blocks_details', $insert_data);
          }

          if ($data_altered) {
            $update_data = [
              'updated_at' => date('Y-m-d H:i:s'),
              'updated_by' => $this->session->userdata('userId'),
            ];

            $data_updated = update_method('tab_blocks', $update_data, ['tb_id' => $tb_id]);

            if ($data_updated) {
              $this->db->trans_complete();

              $this->session->set_flashdata('success_msg', 'Tab block details have been updated successfully!');

              $output = [
                'status' => true,
                'message' => 'Tab block details have been updated successfully!',
                'data' => [
                  'r_url' => base_url('admin/components/tabs-block'),
                ],
              ];

              return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($output));
            } else {
              $this->session->set_flashdata('error_msg', 'Something went wrong!');
            }
          } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong!');
          }
          //}
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      } else {
        $fields = [];

        if ($this->input->post('tb_section_title') == '') {
          $fields[] = 'tb_section_title';
        }

        if (($this->input->post('tb_section_for') == 'Category') && ($this->input->post('tb_section_for_category') == '')) {
          $fields[] = 'tb_section_for_category';
        } elseif (($this->input->post('tb_section_for') == 'Product') && ($this->input->post('tb_section_for_product') == '')) {
          $fields[] = 'tb_section_for_product';
        }

        $tabs_count = sizeof($this->input->post('tab'));

        for ($i = 1; $i <= $tabs_count; $i++) {
          if ($this->input->post('tab[' . $i . '][title]') == '') {
            $fields[] = 'tab[' . $i . '][title]';
          }

          if ($this->input->post('tab[' . $i . '][content_type]') == '') {
            $fields[] = 'tab[' . $i . '][content_type]';
          }

          /*if (
            (!in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'custom-html']))
            && (empty($_FILES['tab']['tmp_name'][$i]['content_banner']))
          ) {
            $fields[] = 'tab[' . $i . '][content_banner]';
          }*/

          if (
            (!in_array($this->input->post('tab[' . $i . '][content_type]'), ['', 'banner-upload']))
            && ($this->input->post('tab[' . $i . '][content_html]') == "")
          ) {
            $fields[] = 'tab[' . $i . '][content_html]';
          }
        }

        $validation_errors = [];

        foreach ($fields as $field) {
          $validation_errors[$field] = form_error($field, '<span class="error text-danger"><small>', '</small></span>');
        }

        $output = [
          'status' => false,
          'message' => 'Please fill all the details for successful submission!',
          'data' => [
            'validation_errors' => validation_errors(),
          ],
        ];

        return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($output));
      }
    }

    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Components - Tabs Block',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
          PATH_BACKEND_THEME_PLUGINS . 'icheck-bootstrap/icheck-bootstrap.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['tb_id'] = $tb_id;
    $data['categories'] = select_method('categories');
    $data['products'] = select_method('products');

    $this->load->view('template_backend', $data);
  }

  // tabs block - delete
  public function delete_tabs_block($tb_id)
  {
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $this->db->trans_start();

      $tab_blocks_deleted = delete_method('tab_blocks', ['tb_id' => $tb_id]);

      if ($tab_blocks_deleted) {
        $tab_blocks_details_for_tab_id = multi_select_query_where('tab_blocks_details', ['tb_id' => $tb_id]);

        if (sizeof($tab_blocks_details_for_tab_id) > 0) {
          $tab_blocks_details_deleted = delete_method('tab_blocks_details', ['tb_id' => $tb_id]);

          $this->db->trans_complete();

          if ($tab_blocks_details_deleted) {
            $output = [
              'status' => true,
              'message' => 'Tabs blocks details for deleted tabs block have been deleted successfully!',
              'data' => $this->db->affected_rows(),
            ];
          } else {
            $output = [
              'status' => false,
              'message' => 'Something went wrong while deleting the tabs blocks details for deleted tab block.',
              'data' => '',
            ];
          }
        } else {
          $this->db->trans_complete();

          $output = [
            'status' => true,
            'message' => 'Tabs block has been deleted successfully!',
            'data' => $this->db->affected_rows(),
          ];
        }
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the tabs block.',
          'data' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }
}
