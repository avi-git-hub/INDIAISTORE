<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends MX_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->load->model('products_model', 'prod_m');

    $this->load->module('user');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  // manage products
  public function manage_products()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Manage Products',
        'styles' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/css/lightbox.css',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/js/lightbox.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['products'] = $this->prod_m->get_products(null, 'created_at', 'DESC');

    $this->load->view('template_backend', $data);
  }

  // get applicable features for category
  public function get_applicable_features()
  {
    $cat_id = $this->input->post('product_category_id');

    $category_data = select_where_method('categories', ['cat_id' => $cat_id]);

    if (!empty($category_data)) {
      $feature_ids = explode(',', $category_data->cat_applicable_features);

      $applicable_features_data = $this->prod_m->get_applicable_feature_details($feature_ids);

      $output = [
        'status' => true,
        'info' => [
          'applicable_features_data' => $applicable_features_data,
        ],
        'message' => 'Applicable features fetched successfully!',
      ];
    } else {
      $output = [
        'status' => false,
        'info' => [],
        'message' => 'Something went wrong while fetching applicable features!',
      ];
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  // get products list to compare with
  public function get_products_to_compare_with()
  {
    $cat_id = $this->input->post('product_category_id');
    $prod_id = $this->input->post('product_id');

    $products_to_compare_with = multi_select_query_where('products', [
      'cat_id' => $cat_id,
      'prod_id !=' => $prod_id,
    ]);

    if (!empty($products_to_compare_with)) {
      $output = [
        'status' => true,
        'info' => [
          'products_to_compare_with' => $products_to_compare_with,
        ],
        'message' => 'Products to compare with fetched successfully!',
      ];
    } else {
      $output = [
        'status' => false,
        'info' => $this->db->error(),
        'message' => 'Something went wrong while fetching products to compare!',
      ];
    }

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  // add new product
  public function add_new_product()
  {
    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'product_category',
          'label' => 'Product Category',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_name',
          'label' => 'Product Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]',
        ],
        [
          'field' => 'product_slug',
          'label' => 'Product Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]|is_unique[products.prod_slug]'
        ],
        [
          'field' => 'product_card_bg_color',
          'label' => 'Product Card Background Color',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_tags',
          'label' => 'Product Tags',
          'rules' => 'trim', //|max_length[255]
        ],
        /* [
          'field' => 'product_terms_and_cond',
          'label' => 'Product Terms & Conditions',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_hero_title',
          'label' => 'Product Hero Title',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_hero_desc',
          'label' => 'Product Hero Description',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_feature_tiles',
          'label' => 'Product Feature Tiles',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_vid_id',
          'label' => 'Product Video ID',
          'rules' => 'trim|required',
        ], */
      ];

      /* if (!is_null($this->input->post('product_compare_with'))) {
        $validation_config[] = [
          'field' => 'product_compare_with',
          'label' => 'Product to Compare With',
          'rules' => 'trim|required',
        ];
      } */

      if (!is_null($this->input->post('product_color'))) {
        $validation_config[] = [
          'field' => 'product_color[]',
          'label' => 'Product Color',
          'rules' => 'trim|required',
        ];
      }

      if (!is_null($this->input->post('product_storage_space'))) {
        $validation_config[] = [
          'field' => 'product_storage_space[]',
          'label' => 'Product Storage Space',
          'rules' => 'trim|required',
        ];
      }

      if (!is_null($this->input->post('product_screen_size'))) {
        $validation_config[] = [
          'field' => 'product_screen_size[]',
          'label' => 'Product Screen Size',
          'rules' => 'trim|required',
        ];
      }

      if (empty($_FILES['product_img_xs']['name'])) {
        $validation_config[] = [
          'field' => 'product_img_xs',
          'label' => 'Product Image (Extra Small)',
          'rules' => 'required'
        ];
      }

      if (empty($_FILES['product_img_sm']['name'])) {
        $validation_config[] = [
          'field' => 'product_img_sm',
          'label' => 'Product Image (Small)',
          'rules' => 'required'
        ];
      }

      if (empty($_FILES['product_img_md']['name'])) {
        $validation_config[] = [
          'field' => 'product_img_md',
          'label' => 'Product Image (Medium)',
          'rules' => 'required'
        ];
      }

      if (empty($_FILES['product_img_lg']['name'])) {
        $validation_config[] = [
          'field' => 'product_img_lg',
          'label' => 'Product Image (Large)',
          'rules' => 'required'
        ];
      }

      /* if (empty($_FILES['product_hero_mob_img']['name'])) {
        $validation_config[] = [
          'field' => 'product_hero_mob_img',
          'label' => 'Product Hero Mobile Image',
          'rules' => 'required'
        ];
      }

      if (empty($_FILES['product_hero_desk_img']['name'])) {
        $validation_config[] = [
          'field' => 'product_hero_desk_img',
          'label' => 'Product Hero Desktop Image',
          'rules' => 'required'
        ];
      } */

      /* if (empty($_FILES['product_vid_thumbnail']['name'])) {
        $validation_config[] = [
          'field' => 'product_vid_thumbnail',
          'label' => 'Product Video Thumbnail',
          'rules' => 'required',
        ];
      } */

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == TRUE) {
        $product_cat_id = $this->input->post('product_category');

        $product_name = $this->input->post('product_name');
        $product_slug = slugify($this->input->post('product_slug'));

        $product_status = is_null($this->input->post('product_status')) ? '0' : '1';
        $product_is_new_status = is_null($this->input->post('product_is_new_status')) ? '0' : '1';

        $product_card_bg_color = $this->input->post('product_card_bg_color');

        $product_terms_and_cond = $this->input->post('product_terms_and_cond');

        $product_hero_title = $this->input->post('product_hero_title');
        $product_hero_desc = $this->input->post('product_hero_desc');

        $product_feature_tiles = $this->input->post('product_feature_tiles');

        $product_vid_id = $this->input->post('product_vid_id');

        $product_compare_with = $this->input->post('product_compare_with');

        $product_html_id = ($this->input->post('product_html_id') == '') ? null : $this->input->post('product_html_id');
        $product_html_classes = ($this->input->post('product_html_classes') == '') ? null : $this->input->post('product_html_classes');

        $product_tags = $this->input->post('product_tags');
        $product_exchange_text = trim($this->input->post('product_exchange_text'));
        $product_store_discount_text = trim($this->input->post('product_store_discount_text'));
        $product_effective_text = trim($this->input->post('product_effective_text'));


        $uploaded_file_data = [];

        $upload_path = ABS_PATH_FILES_UPLOADS . "products/$product_slug/";

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
              'image/webp',
            ];

            if (in_array($file['type'], $allowed_file_mimes)) {
              switch ($field) {
                case 'product_img_xs':
                  $file_name = 'img-xs-' . microtime(true);

                  break;

                case 'product_img_sm':
                  $file_name = 'img-sm-' . microtime(true);

                  break;

                case 'product_img_md':
                  $file_name = 'img-md-' . microtime(true);

                  break;

                case 'product_img_lg':
                  $file_name = 'img-lg-' . microtime(true);

                  break;

                case 'product_hero_mob_img':
                  $file_name = 'hero-mob-img-' . microtime(true);

                  break;

                case 'product_hero_desk_img':
                  $file_name = 'hero-desk-img-' . microtime(true);

                  break;

                case 'product_vid_thumbnail':
                  $file_name = 'vid-thumbnail-' . microtime(true);

                  break;

                case 'product_logo':
                  $file_name = 'logo-' . microtime(true);

                  break;

                case 'product_logo_dark':
                  $file_name = 'logo-dark' . microtime(true);

                  break;
              }

              $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

              $config['file_name'] = $file_name; // name of the file;

              $this->upload->initialize($config);

              if ($this->upload->do_upload($field)) {
                $uploaded_file_data[$field] = $this->upload->data();
              } else {
                $error = strip_tags($this->upload->display_errors());

                $this->session->set_flashdata('error_msg', $error);

                redirect(base_url("admin/product/add-new"));

                break;
              }
            } else {
              $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

              redirect(base_url("admin/product/add-new"));

              break;
            }
          }
        }

        if (!empty($uploaded_file_data) > 0) {
          $display_order_data = multi_select_order_by_method('products', 'display_order', 'DESC', 1);

          $display_order = (!empty($display_order_data)) ? (int)(current($display_order_data)->display_order) : (int)0;

          $insert_data = [
            'cat_id' => $product_cat_id,

            'prod_name' => $product_name,
            'prod_slug' => $product_slug,

            'prod_img_xs' => $uploaded_file_data['product_img_xs']['orig_name'],
            'prod_img_sm' => $uploaded_file_data['product_img_sm']['orig_name'],
            'prod_img_md' => $uploaded_file_data['product_img_md']['orig_name'],
            'prod_img_lg' => $uploaded_file_data['product_img_lg']['orig_name'],

            'prod_is_new_status' => $product_is_new_status,

            'prod_card_bg_color' => $product_card_bg_color,

            'prod_terms_and_cond' => ($product_terms_and_cond == '') ? null : $product_terms_and_cond,

            'prod_hero_title' => ($product_hero_title == '') ? null : $product_hero_title,
            'prod_hero_desc' => ($product_hero_desc == '') ? null : $product_hero_desc,
            'prod_hero_mob_img' => isset($uploaded_file_data['product_hero_mob_img']) ? $uploaded_file_data['product_hero_mob_img']['orig_name'] : null,
            'prod_hero_desk_img' => isset($uploaded_file_data['product_hero_desk_img']) ? $uploaded_file_data['product_hero_desk_img']['orig_name'] : null,

            'prod_feature_tiles' => ($product_feature_tiles == '') ? null : $product_feature_tiles,

            'prod_vid_id' => ($product_vid_id == '') ? null : $product_vid_id,
            'prod_vid_thumbnail' => isset($uploaded_file_data['product_vid_thumbnail']) ? $uploaded_file_data['product_vid_thumbnail']['orig_name'] : null,

            'prod_logo' => isset($uploaded_file_data['product_logo']) ? $uploaded_file_data['product_logo']['orig_name'] : null,
            'prod_logo_dark' => isset($uploaded_file_data['product_logo_dark']) ? $uploaded_file_data['product_logo_dark']['orig_name'] : null,

            'prod_compare_with' => $product_compare_with,

            'prod_html_id' => ($product_html_id == '') ? null : $product_html_id,
            'prod_html_classes' => ($product_html_classes == '') ? null : $product_html_classes,

            'prod_tags' => $product_tags,
            'prod_exchange_effective_price_text' => $product_exchange_text,
            'prod_effective_price_text' => $product_effective_text,
            'prod_store_discount_text' => $product_store_discount_text,

            'display_order' => ++$display_order,
            'status' => $product_status,

            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('userId'),
          ];

          $data_inserted = insert_method('products', $insert_data);

          unset($insert_data);

          if ($data_inserted) {
            $product_id = $this->db->insert_id();

            $product_used_for = is_null($this->input->post('product_used_for')) ? null : implode(',', $this->input->post('product_used_for'));
            $product_color = is_null($this->input->post('product_color')) ? null : implode(',', $this->input->post('product_color'));
            $product_screen_size = is_null($this->input->post('product_screen_size')) ? null : implode(',', $this->input->post('product_screen_size'));
            $product_storage_space = is_null($this->input->post('product_storage_space')) ? null : implode(',', $this->input->post('product_storage_space'));
            $product_processor = is_null($this->input->post('product_processor')) ? null : implode(',', $this->input->post('product_processor'));
            $product_ram = is_null($this->input->post('product_ram')) ? null : implode(',', $this->input->post('product_ram'));
            $product_battery = is_null($this->input->post('product_battery')) ? null : implode(',', $this->input->post('product_battery'));
            $product_camera = is_null($this->input->post('product_camera')) ? null : implode(',', $this->input->post('product_camera'));

            $insert_data = [
              'prod_id' => $product_id,

              'prod_color' => $product_color,
              'prod_storage_space' => $product_storage_space,
              'prod_screen_size' => $product_screen_size,
              'prod_processor' => $product_processor,

              'prod_ram' => $product_ram,
              'prod_battery' => $product_battery,
              'prod_camera' => $product_camera,
              'prod_used_for' => $product_used_for,

              'created_at' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('userId'),
            ];

            $data_inserted = insert_method('product_features', $insert_data);

            if ($data_inserted) {
              $this->session->set_flashdata('success_msg', 'Product and features have been added successfully!');

              // CODE:if redirected to same page use this - avoiding resubmission
              // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
              // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
              // exit(); 

              redirect(base_url('admin/products'));
            } else {
              $this->session->set_flashdata('error_msg', 'Something went wrong while adding the product features!');
            }
          } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong while adding the product!');
          }
        }
      }
    }

    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Add New Product',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['categories'] = select_method('categories');
    $data['banner_positions'] = multi_select_query_where('banner_positions', ['status' => '1',]);

    $this->load->view('template_backend', $data);
  }

  // edit product
  public function edit_product($prod_id = null)
  {
    if (is_null($prod_id)) {
      return redirect(base_url('admin/products'));

      exit;
    }

    $products = current($this->prod_m->get_products(['p.prod_id' => $prod_id]));

    if (!$products) {
      $this->session->set_flashdata('error_msg', 'Product not found.');

      return redirect(base_url('admin/products'));

      exit;
    }

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'product_category',
          'label' => 'Product Category',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_name',
          'label' => 'Product Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]',
        ],
        [
          'field' => 'product_card_bg_color',
          'label' => 'Product Card Background Color',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_tags',
          'label' => 'Product Tags',
          'rules' => 'trim', //|max_length[255]
        ],
        /* [
          'field' => 'product_terms_and_cond',
          'label' => 'Product Terms & Conditions',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_hero_title',
          'label' => 'Product Hero Title',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_hero_desc',
          'label' => 'Product Hero Description',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_feature_tiles',
          'label' => 'Product Feature Tiles',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'product_vid_id',
          'label' => 'Product Video ID',
          'rules' => 'trim|required',
        ], */
      ];

      $product_slug = slugify($this->input->post('product_slug'));

      if ($product_slug == $products->prod_slug) {
        $validation_config[] = [
          'field' => 'product_slug',
          'label' => 'Product Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ];
      } else {
        $validation_config[] = [
          'field' => 'product_slug',
          'label' => 'Product Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]|is_unique[products.prod_slug]',
          [
            'is_unique' => '%s already exists.'
          ]
        ];
      }

      /* if (!is_null($this->input->post('product_compare_with'))) {
        $validation_config[] = [
          'field' => 'product_compare_with',
          'label' => 'Product to Compare With',
          'rules' => 'trim|required',
        ];
      } */

      if (!is_null($this->input->post('product_color'))) {
        $validation_config[] = [
          'field' => 'product_color[]',
          'label' => 'Product Color',
          'rules' => 'trim|required',
        ];
      }

      if (!is_null($this->input->post('product_storage_space'))) {
        $validation_config[] = [
          'field' => 'product_storage_space[]',
          'label' => 'Product Storage Space',
          'rules' => 'trim|required',
        ];
      }

      if (!is_null($this->input->post('product_screen_size'))) {
        $validation_config[] = [
          'field' => 'product_screen_size[]',
          'label' => 'Product Screen Size',
          'rules' => 'trim|required',
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == TRUE) {
        $product_cat_id = $this->input->post('product_category');

        $product_name = $this->input->post('product_name');
        $product_slug = slugify($this->input->post('product_slug'));

        $product_status = is_null($this->input->post('product_status')) ? '0' : '1';
        $product_is_new_status = is_null($this->input->post('product_is_new_status')) ? '0' : '1';

        $product_card_bg_color = $this->input->post('product_card_bg_color');

        $product_terms_and_cond = $this->input->post('product_terms_and_cond');

        $product_hero_title = $this->input->post('product_hero_title');
        $product_hero_desc = $this->input->post('product_hero_desc');
        $product_exchange_text = trim($this->input->post('product_exchange_text'));
        $product_effective_text = trim($this->input->post('product_effective_text'));
        $product_store_discount_text = trim($this->input->post('product_store_discount_text'));

        $product_feature_tiles = $this->input->post('product_feature_tiles');

        $product_vid_id = $this->input->post('product_vid_id');

        $product_compare_with = $this->input->post('product_compare_with');

        $product_html_id = ($this->input->post('product_html_id') == '') ? null : $this->input->post('product_html_id');
        $product_html_classes = ($this->input->post('product_html_classes') == '') ? null : $this->input->post('product_html_classes');

        $product_tags = $this->input->post('product_tags');

        $uploaded_file_data = [];

        $update_data = [
          'cat_id' => $product_cat_id,

          'prod_name' => $product_name,
          //'prod_slug' => $product_slug,

          'prod_is_new_status' => $product_is_new_status,

          'prod_card_bg_color' => $product_card_bg_color,

          'prod_terms_and_cond' => $product_terms_and_cond,

          'prod_hero_title' => $product_hero_title,
          'prod_hero_desc' => $product_hero_desc,

          'prod_feature_tiles' => $product_feature_tiles,

          'prod_vid_id' => $product_vid_id,

          'prod_compare_with' => $product_compare_with,

          'prod_html_id' => $product_html_id,
          'prod_html_classes' => $product_html_classes,

          'prod_tags' => $product_tags,
          'prod_exchange_effective_price_text' => $product_exchange_text,
          'prod_effective_price_text' => $product_effective_text,
          'prod_store_discount_text' => $product_store_discount_text,

          'status' => $product_status,

          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (
          (!empty($_FILES['product_img_xs']['name'])) ||
          (!empty($_FILES['product_img_sm']['name'])) ||
          (!empty($_FILES['product_img_md']['name'])) ||
          (!empty($_FILES['product_img_lg']['name'])) ||
          (!empty($_FILES['product_hero_mob_img']['name'])) ||
          (!empty($_FILES['product_hero_desk_img']['name'])) ||
          (!empty($_FILES['product_vid_thumbnail']['name'])) ||
          (!empty($_FILES['product_logo']['name'])) ||
          (!empty($_FILES['product_logo_dark']['name']))
        ) {
          $uploaded_file_data = [];

          $upload_path = ABS_PATH_FILES_UPLOADS . "products/$product_slug/";

          if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
          }

          $config = [
            'upload_path' => $upload_path,
            'allowed_types' => '*', // allowed file types
            'max_size' => '2048000', // Can be set to particular file size , here it is 2 MB(2048 Kb)
            // 'file_ext_tolower' => true,// forcing file extension to be in lower case
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
                'image/webp',
              ];

              if (in_array($file['type'], $allowed_file_mimes)) {
                switch ($field) {
                  case 'product_img_xs':
                    $file_name = 'img-xs-' . microtime(true);

                    break;

                  case 'product_img_sm':
                    $file_name = 'img-sm-' . microtime(true);

                    break;

                  case 'product_img_md':
                    $file_name = 'img-sm-' . microtime(true);

                    break;

                  case 'product_img_lg':
                    $file_name = 'img-md-' . microtime(true);

                    break;

                  case 'product_hero_mob_img':
                    $file_name = 'hero-mob-img-' . microtime(true);

                    break;

                  case 'product_hero_desk_img':
                    $file_name = 'hero-desk-img-' . microtime(true);

                    break;

                  case 'product_vid_thumbnail':
                    $file_name = 'vid-thumbnail-' . microtime(true);

                    break;
                  case 'product_logo':
                    $file_name = 'logo-' . microtime(true);

                    break;

                  case 'product_logo_dark':
                    $file_name = 'logo-' . microtime(true);

                    break;
                }

                $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

                $config['file_name'] = $file_name; // name of the file;

                $this->upload->initialize($config);

                if ($this->upload->do_upload($field)) {
                  $uploaded_file_data[$field] = $this->upload->data();

                  if (isset($uploaded_file_data[$field])) {
                    switch ($field) {
                      case 'product_img_xs':
                        $update_data['prod_img_xs'] = $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'product_img_sm':
                        $update_data['prod_img_sm'] = $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'product_img_md':
                        $update_data['prod_img_md'] = $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'product_img_lg':
                        $update_data['prod_img_lg'] = $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'product_hero_mob_img':
                        $update_data['prod_hero_mob_img'] = $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'product_hero_desk_img':
                        $update_data['prod_hero_desk_img'] = $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'product_vid_thumbnail':
                        $update_data['prod_vid_thumbnail'] = $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'product_logo':
                        $update_data['prod_logo'] = $uploaded_file_data[$field]['orig_name'];

                        break;
                      case 'product_logo_dark':
                        $update_data['prod_logo_dark'] = $uploaded_file_data[$field]['orig_name'];

                        break;
                    }
                  }
                } else {
                  $error = strip_tags($this->upload->display_errors());

                  $this->session->set_flashdata('error_msg', $error);

                  redirect(base_url("admin/product/$prod_id/edit"));

                  break;
                }
              } else {
                $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

                redirect(base_url("admin/product/$prod_id/edit"));

                break;
              }
            }
          }
        }

        $where = ['prod_id' => $prod_id];

        $data_updated = update_method('products', $update_data, $where);

        if ($data_updated) {
          $product_color = is_null($this->input->post('product_color')) ? null : implode(',', $this->input->post('product_color'));
          $product_storage_space = is_null($this->input->post('product_storage_space')) ? null : implode(',', $this->input->post('product_storage_space'));
          $product_screen_size = is_null($this->input->post('product_screen_size')) ? null : implode(',', $this->input->post('product_screen_size'));
          $product_processor = is_null($this->input->post('product_processor')) ? null : implode(',', $this->input->post('product_processor'));

          $product_ram = is_null($this->input->post('product_ram')) ? null : implode(',', $this->input->post('product_ram'));
          $product_battery = is_null($this->input->post('product_battery')) ? null : implode(',', $this->input->post('product_battery'));
          $product_camera = is_null($this->input->post('product_camera')) ? null : implode(',', $this->input->post('product_camera'));
          $product_used_for = is_null($this->input->post('product_used_for')) ? null : implode(',', $this->input->post('product_used_for'));

          $update_data = [
            'prod_color' => $product_color,
            'prod_storage_space' => $product_storage_space,
            'prod_screen_size' => $product_screen_size,
            'prod_processor' => $product_processor,

            'prod_ram' => $product_ram,
            'prod_battery' => $product_battery,
            'prod_camera' => $product_camera,
            'prod_used_for' => $product_used_for,

            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('userId'),
          ];

          $data_updated = update_method('product_features', $update_data, $where);

          if ($data_updated) {
            $this->session->set_flashdata('success_msg', 'Product and feature data have been updated!');

            // CODE:to redirect to same page use this - avoiding resubmission
            // $this->form_validationation->clear_post_data(); //custom form validation library created to clear input fields.
            // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
            // exit(); 

            return redirect(base_url('admin/products'));
          } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong while updating the product and features data!');
          }
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong while updating the product data!');
        }
      }
    }

    $data = [
      'page_data' => [
        'title' => 'Edit Product',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'breadcrumb' => 'Edit Product',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['products'] = $products;
    $data['categories'] = select_method('categories');
    $data['prod_feat_cat'] = select_method('product_feature_categories');
    $data['banner_positions'] = multi_select_query_where('banner_positions', ['status' => '1',]);

    $this->load->view('template_backend', $data);
  }

  // delete product
  public function delete_product($prod_id)
  {
    if ($this->input->method() == 'post') {
      $this->db->trans_start();

      $where_prod_id = ['prod_id' => $prod_id];

      // deleting the product
      $product_deleted = delete_method('products', $where_prod_id);

      // if successfully deleted
      if ($product_deleted) {
        // finding the variants for the deleted product
        $variants = multi_select_query_where('product_variants', $where_prod_id);

        // if variants found
        if (!empty($variants)) {
          // fetching the variant ids for the deleted product
          // $product_variant_ids = array_column($variants, 'prod_variant_id');

          // deleting the variants for the deleted product
          $variants_deleted = delete_method('product_variants', $where_prod_id);

          if (!$variants_deleted) {
            $output = [
              'status' => false,
              'message' => 'Something went wrong while deleting the product variants!',
              'info' => '',
            ];
          }
        }

        /* if (!empty($product_variant_ids)) {
          // fetching the pricing for the deleted variant using fetched variant ids
          $product_pricings = multi_select_query_where_in('product_variant_pricing', 'prod_variant_id', $product_variant_ids);

          // if variant pricing found
          if (!empty($product_pricings)) {
            // deleting the pricing found for the deleted product variant
            $pricing_deleted = delete_where_in_method('product_variant_pricing', 'prod_variant_id', $product_variant_ids);

            if (!$pricing_deleted) {
              $output = [
                'status' => false,
                'message' => 'Something went wrong while deleting the product pricing!',
                'info' => '',
              ];
            }
          }
        } */

        // fetching the product pdp image sets for the deleted product
        $pdp_image_sets = multi_select_query_where('product_pdp_image_sets', $where_prod_id);

        // if product pdp image set found
        if (!empty($pdp_image_sets)) {
          $pdp_img_sets = array_column($pdp_image_sets, 'pdp_set_id');

          // deleting the pdp image sets found for the deleted product
          $pdp_img_sets_deleted = delete_method('product_pdp_image_sets', $where_prod_id);

          if (!$pdp_img_sets_deleted) {
            $output = [
              'status' => false,
              'message' => 'Something went wrong while deleting the PDP image sets!',
              'info' => '',
            ];
          }
        }

        if (!empty($pdp_img_sets)) {
          // fetching the pdp set images for the deleted pdp image set
          $pdp_images = multi_select_query_where_in('product_pdp_images', 'pdp_set_id', $pdp_img_sets);

          // if product pdp images found
          if (!empty($pdp_images)) {
            // deleting the pdp images found for the deleted pdp image set
            $pdp_images_deleted = delete_where_in_method('product_pdp_images', 'pdp_set_id', $pdp_img_sets);

            if (!$pdp_images_deleted) {
              $output = [
                'status' => false,
                'message' => 'Something went wrong while deleting the PDP images!',
                'info' => '',
              ];
            }
          }
        }

        // fetching the features for the deleted product
        $features = multi_select_query_where('product_features', $where_prod_id);

        // if product pdp images found
        if (!empty($features)) {
          // deleting the pdp images found for the deleted pdp image set
          $product_features_deleted = delete_method('product_features', $where_prod_id);

          if (!$product_features_deleted) {
            $output = [
              'status' => false,
              'message' => 'Something went wrong while deleting the product features!',
              'info' => '',
            ];
          }
        }

        $this->db->trans_complete();

        $output = [
          'status' => true,
          'message' => 'Products have been deleted successfully!',
          'info' => '',
        ];
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the product!',
          'info' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  // edit product display order
  public function edit_product_display_order($cat_id = null)
  {
    if (is_null($cat_id)) {
      return redirect(base_url('admin/categories'));

      exit;
    }

    if ($this->input->method() == 'post') {
      $product_order_data = array_map('intval', $this->input->post('products_order_data'));

      foreach ($product_order_data as $index => $product_id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        update_method('products', $update_data, ['prod_id' => $product_id]);
      }

      $output = [
        'status' => true,
        'message' => 'Product display order updated successfully!',
        'info' => '',
      ];

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    $data = [
      'page_data' => [
        'title' => 'Edit Product Display Order',
        'styles' => [],
        'scripts' => [],
      ],
      'breadcrumb' => 'Edit Product Display Order',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['category'] = select_where_method('categories', ['cat_id' => $cat_id]);
    $data['products'] = $this->prod_m->get_products(['c.cat_id' => $cat_id], 'p.display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }

  // manage product variants
  public function manage_variants($prod_id = null)
  {
    if (is_null($prod_id)) {
      return redirect(base_url('admin/products'));

      exit;
    }

    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Manage Product Variants',
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

    $data['prod_id'] = $prod_id;

    $where = ['prod_id' => $prod_id];

    $data['product'] = select_where_method('products', $where);
    $data['product_variants'] = $this->prod_m->get_product_variants($where, 'created_at', 'DESC');

    $this->load->view('template_backend', $data);
  }

  // add new product variant
  public function add_new_variant($prod_id)
  {
    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'product_id',
          'label' => 'Product Id',
          'rules' => 'required',
        ],
        [
          'field' => 'product',
          'label' => 'Product',
          'rules' => 'required',
        ],
        [
          'field' => 'product_color',
          'label' => 'Product Color',
          'rules' => 'required',
        ],
        [
          'field' => 'product_variant_slug',
          'label' => 'Product Variant Slug',
          'rules' => 'required|is_unique[product_variants.prod_variant_slug]',
        ],
        [
          'field' => 'product_mrp',
          'label' => 'Product MRP',
          'rules' => 'required|numeric',
        ],
        [
          'field' => 'product_effective_price',
          'label' => 'Product Effective Price',
          'rules' => 'required|numeric',
        ],
        [
          'field' => 'product_exchange_effective_price',
          'label' => 'Product Exchange Effective Price',
          'rules' => 'required|numeric',
        ],        [
          'field' => 'product_store_discount',
          'label' => 'Store Discount',
          'rules' => 'required|numeric',
        ]
      ];

      if (!is_null($this->input->post('product_storage'))) {
        $validation_config[] = [
          'field' => 'product_storage',
          'label' => 'Product Storage',
          'rules' => 'required',
        ];
      }

      if (!is_null($this->input->post('product_screen_size'))) {
        $validation_config[] = [
          'field' => 'product_screen_size',
          'label' => 'Product Screen Size',
          'rules' => 'required',
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == TRUE) {
        $product_id = $this->input->post('product_id');
        $product_variant_slug = slugify($this->input->post('product_variant_slug'));

        $product_color = $this->input->post('product_color');
        $product_storage = is_null($this->input->post('product_storage')) ? null : $this->input->post('product_storage');
        $product_screen_size = is_null($this->input->post('product_screen_size')) ? null : $this->input->post('product_screen_size');
        $product_processor = is_null($this->input->post('product_processor')) ? null : $this->input->post('product_processor');

        $product_mrp = $this->input->post('product_mrp');
        $product_effective_price = $this->input->post('product_effective_price');
        $product_exchange_effective_price = $this->input->post('product_exchange_effective_price');
        $product_store_discount = $this->input->post('product_store_discount');
        $product_emi = $this->input->post('product_emi');
        $product_emi_options = $this->input->post('product_emi_options');
        $product_benefit_amount = $this->input->post('product_benefit_amount');
        $product_benefit_details = $this->input->post('product_benefit_details');

        $display_order_data = multi_select_order_by_method('product_variants', 'display_order', 'DESC', 1);
        $display_order = (int)((!empty($display_order_data)) ? (current($display_order_data)->display_order) : 0);

        $product_variant_status = is_null($this->input->post('product_variant_status')) ? '0' : '1';


        
 $product_effective_emi = $this->input->post('product_effective_emi');
 $product_exchange_effective_emi = $this->input->post('product_exchange_effective_emi');

 $product_effective_emi_description = $this->input->post('product_effective_emi_description');
 $product_exchange_effective_emi_description = $this->input->post('product_exchange_effective_emi_description');        
$product_net_effective_price = $this->input->post('product_net_effective_price');
 $product_exchange_price = $this->input->post('product_exchange_price');
 $product_exchange_bonus = $this->input->post('product_exchange_bonus');
 $product_cashback = $this->input->post('product_cashback');


        $variant_data = [
          'prod_id' => $product_id,
          'prod_variant_slug' => $product_variant_slug,
          'prod_color' => $product_color,
          'prod_storage' => $product_storage,
          'prod_screen_size' => $product_screen_size,
          'prod_processor' => $product_processor,
          'prod_mrp' => $product_mrp,
          'prod_effective_price' => $product_effective_price,
          'prod_exchange_effective_price' => $product_exchange_effective_price,
          'prod_store_discount' => $product_store_discount,
          'product_emi' => $product_emi,
          'product_emi_options' => $product_emi_options,
          'product_benefit_amount' => $product_benefit_amount,
          'product_benefit_details' => $product_benefit_details,
          'prod_effective_emi' => $product_effective_emi,
          'prod_effective_emi_text' =>  $product_effective_emi_description,
          'prod_exchange_effective_emi' => $product_exchange_effective_emi,
          'prod_exchange_effective_emi_text' =>  $product_exchange_effective_emi_description,  
          'prod_net_effective_price' => $product_net_effective_price,
          'prod_exchange_price' => $product_exchange_price,
          'prod_exchange_bonus' => $product_exchange_bonus,
          'prod_cashback' => $product_cashback,
          'display_order' => ++$display_order,
          'status' => $product_variant_status,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        $this->db->trans_start();

        $data_inserted = insert_method('product_variants', $variant_data);

        if ($data_inserted) {
          $this->db->trans_complete();

          $this->session->set_flashdata('success_msg', 'Product variant has been added successfully!');

          // CODE:if redirected to same page use this - avoiding resubmission
          // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
          // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
          // exit(); 

          redirect(base_url("admin/product/$prod_id/variants"));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong while adding the product variant!');
        }
      }
    }

    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Add New Product Variant',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js', 
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['product'] = current($this->prod_m->get_products(['p.prod_id' => $prod_id]));

    $product_features = select_where_method('product_features', ['prod_id' => $prod_id]);

    $selected_features_data = [];

    if (!is_null($product_features->prod_color)) {
      $prod_colors_ids = explode(',', $product_features->prod_color);

      $product_colors = $this->prod_m->get_selected_feature_value_details($prod_colors_ids);

      foreach ($product_colors as $color) {
        $selected_features_data[$color->feat_cat_slug][] = $color;

        unset($color->feat_cat_slug);
      }
    }

    if (!is_null($product_features->prod_storage_space)) {
      $prod_storage_space_ids = explode(',', $product_features->prod_storage_space);

      $prod_storage_spaces = $this->prod_m->get_selected_feature_value_details($prod_storage_space_ids);

      foreach ($prod_storage_spaces as $storage_space) {
        $selected_features_data[$storage_space->feat_cat_slug][] = $storage_space;

        unset($storage_space->feat_cat_slug);
      }
    }

    if (!is_null($product_features->prod_screen_size)) {
      $prod_screen_size_ids = explode(',', $product_features->prod_screen_size);

      $prod_screen_sizes = $this->prod_m->get_selected_feature_value_details($prod_screen_size_ids);

      foreach ($prod_screen_sizes as $screen_size) {
        $selected_features_data[$screen_size->feat_cat_slug][] = $screen_size;

        unset($screen_size->feat_cat_slug);
      }
    }

    if (!is_null($product_features->prod_processor)) {
      $prod_processor_ids = explode(',', $product_features->prod_processor);

      $prod_processors = $this->prod_m->get_selected_feature_value_details($prod_processor_ids);

      foreach ($prod_processors as $processor) {
        $selected_features_data[$processor->feat_cat_slug][] = $processor;

        unset($processor->feat_cat_slug);
      }
    }

    $data['selected_features_data'] = $selected_features_data;

    $this->load->view('template_backend', $data);
  }

  // edit product variant
  public function edit_variant($prod_id, $prod_variant_id)
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Edit Product Variant',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js', 
          PATH_BACKEND_THEME_PLUGINS . 'summernote/summernote-bs4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['product_variant'] = current($this->prod_m->get_product_variants(['prod_variant_id' => $prod_variant_id]));

    if (!$data['product_variant']) {
      $this->session->set_flashdata('error_msg', 'Product variant not found.');

      return redirect(base_url("admin/product/$prod_id/variants"));
    }

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'product_id',
          'label' => 'Product Id',
          'rules' => 'required',
        ],
        [
          'field' => 'product',
          'label' => 'Product',
          'rules' => 'required',
        ],
        [
          'field' => 'product_color',
          'label' => 'Product Color',
          'rules' => 'required',
        ],
        [
          'field' => 'product_variant_slug',
          'label' => 'Product Variant Slug',
          'rules' => 'required',
        ],
        [
          'field' => 'product_mrp',
          'label' => 'Product MRP',
          'rules' => 'required|numeric',
        ],
        [
          'field' => 'product_effective_price',
          'label' => 'Product Effective Price',
          'rules' => 'required|numeric',
        ],
        [
          'field' => 'product_exchange_effective_price',
          'label' => 'Product Exchange Effective Price',
          'rules' => 'required|numeric',
        ],        [
          'field' => 'product_store_discount',
          'label' => 'Product Store Discount',
          'rules' => 'required|numeric',
        ]
      ];

      $product_variant_slug = slugify($this->input->post('product_variant_slug'));

      if ($product_variant_slug == $data['product_variant']->prod_variant_slug) {
        $validation_config[] = [
          'field' => 'product_variant_slug',
          'label' => 'Product Variant Slug',
          'rules' => 'trim|required',
        ];
      } else {
        $validation_config[] = [
          'field' => 'product_variant_slug',
          'label' => 'Product Variant Slug',
          'rules' => 'trim|required|is_unique[product_variants.prod_variant_slug]',
          [
            'is_unique' => '%s already exists.',
          ],
        ];
      }

      if (!is_null($this->input->post('product_storage'))) {
        $validation_config[] = [
          'field' => 'product_storage',
          'label' => 'Product Storage',
          'rules' => 'required',
        ];
      }

      if (!is_null($this->input->post('product_screen_size'))) {
        $validation_config[] = [
          'field' => 'product_screen_size',
          'label' => 'Product Screen Size',
          'rules' => 'required',
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == TRUE) {
        $product_color = $this->input->post('product_color');
        $product_storage = is_null($this->input->post('product_storage')) ? null : $this->input->post('product_storage');
        $product_screen_size = is_null($this->input->post('product_screen_size')) ? null : $this->input->post('product_screen_size');
        $product_processor = is_null($this->input->post('product_processor')) ? null : $this->input->post('product_processor');

        $product_mrp = $this->input->post('product_mrp');
        $product_effective_price = $this->input->post('product_effective_price');
        $product_exchange_effective_price = $this->input->post('product_exchange_effective_price');
        $product_store_discount = $this->input->post('product_store_discount');
        $product_emi = $this->input->post('product_emi');
        $product_emi_options = $this->input->post('product_emi_options');
        $product_benefit_amount = $this->input->post('product_benefit_amount');
        $product_benefit_details = $this->input->post('product_benefit_details');

        $product_variant_status = is_null($this->input->post('product_variant_status')) ? '0' : '1';

        
 $product_effective_emi = $this->input->post('product_effective_emi');
 $product_exchange_effective_emi = $this->input->post('product_exchange_effective_emi');

 $product_effective_emi_description = $this->input->post('product_effective_emi_description');
 $product_exchange_effective_emi_description = $this->input->post('product_exchange_effective_emi_description');        
$product_net_effective_price = $this->input->post('product_net_effective_price');
 $product_exchange_price = $this->input->post('product_exchange_price');
 $product_exchange_bonus = $this->input->post('product_exchange_bonus');
 $product_cashback = $this->input->post('product_cashback');

        $update_data = [
          //'prod_variant_slug' => $product_variant_slug,

          'prod_color' => $product_color,
          'prod_storage' => $product_storage,
          'prod_screen_size' => $product_screen_size,
          'prod_processor' => $product_processor,

          'prod_mrp' => $product_mrp,
          'prod_effective_price' => $product_effective_price,
          'prod_exchange_effective_price' => $product_exchange_effective_price,
          'prod_store_discount' => $product_store_discount,
          'product_emi' => $product_emi,
          'product_emi_options' => $product_emi_options,
          'product_benefit_amount' => $product_benefit_amount,
          'product_benefit_details' => $product_benefit_details,

          
          'prod_effective_emi' => $product_effective_emi,
          'prod_effective_emi_text' =>  $product_effective_emi_description,
          'prod_exchange_effective_emi' => $product_exchange_effective_emi,
          'prod_exchange_effective_emi_text' =>  $product_exchange_effective_emi_description,  
          'prod_net_effective_price' => $product_net_effective_price,
          'prod_exchange_price' => $product_exchange_price,
          'prod_exchange_bonus' => $product_exchange_bonus,
          'prod_cashback' => $product_cashback,

          'status' => $product_variant_status,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        $this->db->trans_start();

        $data_updated = update_method('product_variants', $update_data, ['prod_variant_id' => $prod_variant_id]);

        if ($data_updated) {
          $this->db->trans_complete();

          $this->session->set_flashdata('success_msg', 'Product variant has been added successfully!');

          redirect(base_url("admin/product/$prod_id/variants"));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong while updating the product variant!');
        }
      }
    }

    $data['product'] = current($this->prod_m->get_products(['p.prod_id' => $prod_id]));

    $product_features = select_where_method('product_features', ['prod_id' => $prod_id]);

    $selected_features_data = [];

    if (!is_null($product_features->prod_color)) {
      $prod_colors_ids = explode(',', $product_features->prod_color);

      $product_colors = $this->prod_m->get_selected_feature_value_details($prod_colors_ids);

      foreach ($product_colors as $color) {
        $selected_features_data[$color->feat_cat_slug][] = $color;

        unset($color->feat_cat_slug);
      }
    }

    if (!is_null($product_features->prod_storage_space)) {
      $prod_storage_space_ids = explode(',', $product_features->prod_storage_space);

      $prod_storage_spaces = $this->prod_m->get_selected_feature_value_details($prod_storage_space_ids);

      foreach ($prod_storage_spaces as $storage_space) {
        $selected_features_data[$storage_space->feat_cat_slug][] = $storage_space;

        unset($storage_space->feat_cat_slug);
      }
    }

    if (!is_null($product_features->prod_screen_size)) {
      $prod_screen_size_ids = explode(',', $product_features->prod_screen_size);

      $prod_screen_sizes = $this->prod_m->get_selected_feature_value_details($prod_screen_size_ids);

      foreach ($prod_screen_sizes as $screen_size) {
        $selected_features_data[$screen_size->feat_cat_slug][] = $screen_size;

        unset($screen_size->feat_cat_slug);
      }
    }

    if (!is_null($product_features->prod_processor)) {
      $prod_processor_ids = explode(',', $product_features->prod_processor);

      $prod_processors = $this->prod_m->get_selected_feature_value_details($prod_processor_ids);

      foreach ($prod_processors as $processor) {
        $selected_features_data[$processor->feat_cat_slug][] = $processor;

        unset($processor->feat_cat_slug);
      }
    }

    $data['selected_features_data'] = $selected_features_data;

    $this->load->view('template_backend', $data);
  }

  // delete product variant
  public function delete_variant($prod_id, $prod_variant_id)
  {
    if ($this->input->method() == 'post') {
      // $this->db->trans_start();

      $where = ['prod_variant_id' => $prod_variant_id];

      $product_variant_deleted = delete_method('product_variants', $where);

      if ($product_variant_deleted) {
        $output = [
          'status' => true,
          'message' => 'Product variant has been deleted successfully!',
          'info' => $this->db->affected_rows(),
        ];
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the product variant!',
          'info' => '',
        ];
      }

      /* $product_images_for_variant = multi_select_query_where('product_variant_images', $where);

      if (!empty($product_images_for_variant)) {
        $images_deleted_for_deleted_variant = delete_method('product_variant_images', $where);

        if ($images_deleted_for_deleted_variant) {
          $output = [
            'status' => true,
            'message' => 'Image records for the deleted product variant have been deleted successfully!',
            'info' => $this->db->affected_rows(),
          ];
        } else {
          $output = [
            'status' => false,
            'message' => 'Something went wrong while deleting the image records for the deleted product variant!',
            'info' => '',
          ];
        }
      }

      $this->db->trans_complete(); */

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  // edit variant display order
  public function edit_variant_display_order($prod_id)
  {
    if ($this->input->method() == 'post') {
      $variants_order_data = array_map('intval', $this->input->post('variants_order_data'));

      $success = false;

      foreach ($variants_order_data as $index => $product_variant_id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (update_method('product_variants', $update_data, ['prod_variant_id' => $product_variant_id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Display order of the product variants updated successfully!';

        $this->session->set_flashdata('success_msg', $msg);

        $output = [
          'status' => true,
          'message' => $msg,
          'info' => '',
        ];
      } else {
        $msg = 'Something went wrong while updating the display order of the product variants!';

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
        'title' => 'Edit Variant Display Order',
        'styles' => [],
        'scripts' => [],
      ],
      'breadcrumb' => 'Edit Variant Display Order',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $where = ['prod_id' => $prod_id];

    $data['product'] = select_where_method('products', $where);
    $data['prod_id'] = $prod_id;
    $data['product_variants'] = $this->prod_m->get_product_variants($where, 'display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }

  // manage pdp images
  public function manage_pdp_image_sets($prod_id)
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Manage PDP Images',
        'styles' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/css/lightbox.css',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/js/lightbox.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['prod_id'] = $prod_id;
    $data['product'] = select_where_method('products', ['prod_id' => $prod_id]);
    $data['product_pdp_image_sets'] = $this->prod_m->get_product_pdp_image_sets(['prod_id' => $prod_id], 'created_at', 'DESC');

    $this->load->view('template_backend', $data);
  }

  // add new pdp image sets
  public function add_new_pdp_image_set($prod_id)
  {
    if ($this->input->method() == 'post') {
      $validation_rules = [
        [
          'field' => 'pdp_product',
          'label' => 'PDP Product',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'pdp_set_color',
          'label' => 'PDP Set Color',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'pdp_set_slug',
          'label' => 'PDP Set Slug',
          'rules' => 'trim|required|is_unique[product_pdp_image_sets.pdp_set_slug]',
        ],
      ];

      $pdp_imgs_count = sizeof($this->input->post('pdp_images'));

      for ($i = 1; $i <= $pdp_imgs_count; $i++) {
        $validation_rules[] = [
          'field' => "pdp_images[$i][image]",
          'label' => "PDP Image $i",
          'rules' => (empty($_FILES['pdp_images']['tmp_name'][$i]['image'])) ? 'required' : '',
        ];
      }

      $this->form_validation->set_rules($validation_rules);

      if ($this->form_validation->run() == TRUE) {
        $pdp_product_id = $this->input->post('pdp_product_id');
        $pdp_set_color = $this->input->post('pdp_set_color');
        $pdp_set_slug = $this->input->post('pdp_set_slug');
        $pdp_set_vid_id = $this->input->post('pdp_set_vid_id');

        $insert_data = [
          'prod_id' => $pdp_product_id,
          'pdp_set_color' => $pdp_set_color,
          'pdp_set_slug' => $pdp_set_slug,
          'pdp_set_vid_id' => $pdp_set_vid_id,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        $this->db->trans_start();

        $data_inserted = insert_method('product_pdp_image_sets', $insert_data);

        unset($insert_data);

        if ($data_inserted) {
          $pdp_set_id = $this->db->insert_id();

          $upload_path = ABS_PATH_FILES_UPLOADS . "products/pdp/$pdp_set_slug/";

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

          $uploaded_files = $_FILES['pdp_images'];

          $_FILES = [];

          $uploaded_files = array_map('array_values', $uploaded_files);

          $uploaded_file_data = [];

          for ($i = 0; $i < sizeof($uploaded_files['name']); $i++) {
            $_FILES['userfile'] = [
              'name' => $uploaded_files['name'][$i]['image'],
              'type' => $uploaded_files['type'][$i]['image'],
              'tmp_name' => $uploaded_files['tmp_name'][$i]['image'],
              'error' => $uploaded_files['error'][$i]['image'],
              'size' => $uploaded_files['size'][$i]['image'],
            ];

            $allowed_file_mimes = [
              'image/jpeg',
              'image/jpg',
              'image/png',
              'image/webp',
            ];

            if (in_array($uploaded_files['type'][$i]['image'], $allowed_file_mimes)) {
              $file_name = 'pdp_' . microtime(true);
              $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

              $config['file_name'] = $file_name; // name of the file;              

              $this->upload->initialize($config);

              if ($this->upload->do_upload()) {
                $uploaded_file_data['pdp_images[' . ($i + 1) . '][image]'] = $this->upload->data();
              }
            }
          }

          $where = [
            'pdp_set_slug' => $pdp_set_slug,
          ];

          $display_order_data = multi_select_where_order_by_method('product_pdp_images  ', $where, 'display_order', 'DESC', 1);
          $display_order = (int)((!empty($display_order_data)) ? (current($display_order_data)->display_order) : 0);

          for ($i = 1; $i <= $pdp_imgs_count; $i++) {
            $insert_data[($i - 1)] = [
              'pdp_set_id' => $pdp_set_id,
              'pdp_set_slug' => $pdp_set_slug,
              'display_order' => ++$display_order,
              'status' => is_null($this->input->post("pdp_images[$i][status]")) ? '0' : '1',
              'created_at' => date('Y-m-d H:i:s'),
              'created_by' => $this->session->userdata('userId'),
            ];

            $insert_data[($i - 1)]['pdp_img'] = isset($uploaded_file_data["pdp_images[$i][image]"]) ? $uploaded_file_data["pdp_images[$i][image]"]['orig_name'] : null;
          }

          $data_inserted = insert_batch_method('product_pdp_images', $insert_data);

          if ($data_inserted) {
            $this->db->trans_complete();

            $msg = 'Product PDP images for the created set have been added successfully!';

            $this->session->set_flashdata('success_msg', $msg);

            $output = [
              'status' => true,
              'message' => $msg,
              'data' => [
                'r_url' => base_url("admin/product/$pdp_product_id/pdp-image-sets"),
              ],
            ];

            return $this->output
              ->set_content_type('application/json')
              ->set_output(json_encode($output));
          } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong while adding the product pdp images in the created set!');
          }
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong while creating product pdp image set!');
        }
      } else {
        $fields = [];

        if ($this->input->post('pdp_set_color') == '') {
          $fields[] = 'pdp_set_color';
        }

        if ($this->input->post('pdp_set_slug') == '') {
          $fields[] = 'pdp_set_slug';
        }

        $pdp_images_count = sizeof($this->input->post('pdp_images'));

        for ($i = 1; $i <= $pdp_images_count; $i++) {
          if (empty($_FILES['pdp_images']['tmp_name'][$i]['image'])) {
            $fields[] = "pdp_images[$i][image]";
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
        'title' => 'Add New PDP Image Set',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $product_data = $this->db
      ->select('prod_name')
      ->get_where('products', ['prod_id' => $prod_id])
      ->row();

    $product_colors = $this->db
      ->select('prod_color')
      ->distinct()
      ->get_where('product_variants', ['prod_id' => $prod_id])
      ->result();

    $data['prod_id'] = $prod_id;
    $data['pdp_product'] = $product_data->prod_name;
    $data['product_colors'] = array_column($product_colors, 'prod_color');

    $this->load->view('template_backend', $data);
  }

  public function get_pdp_image_set_data($prod_id, $pdp_set_id)
  {
    $output = current($this->prod_m->get_product_pdp_image_sets(['pdp_set_id' => $pdp_set_id]));

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  // add new pdp image sets
  public function edit_pdp_image_set($prod_id, $pdp_set_id)
  {
    if ($this->input->method() == 'post') {
      $validation_rules = [
        [
          'field' => 'pdp_product',
          'label' => 'PDP Product',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'pdp_set_color_value',
          'label' => 'PDP Set Color',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'pdp_set_slug',
          'label' => 'PDP Set Slug',
          'rules' => 'trim|required',
        ],
      ];

      $this->form_validation->set_rules($validation_rules);

      if ($this->form_validation->run() == TRUE) {
        $pdp_product_id = $this->input->post('pdp_product_id');
        $pdp_set_id = $this->input->post('pdp_set_id');
        $pdp_set_slug = $this->input->post('pdp_set_slug');
        $pdp_set_vid_id = $this->input->post('pdp_set_vid_id');
        $pdp_imgs_count = sizeof($this->input->post('pdp_images'));

        $update_data = [];

        $image_uploaded = false;

        $display_order_data = multi_select_where_order_by_method('product_pdp_images', ['pdp_set_id' => $pdp_set_id,], 'display_order', 'DESC', 1);
        $display_order = (int)((!empty($display_order_data)) ? (current($display_order_data)->display_order) : 0);

        for ($i = 1; $i <= $pdp_imgs_count; $i++) {
          if ($this->input->post("pdp_images[$i][image_id]") != "") {
            $update_data[] = [
              'prod_pdp_img_id' => $this->input->post("pdp_images[$i][image_id]"),
              'status' => is_null($this->input->post("pdp_images[$i][status]")) ? '0' : '1',
              'updated_at' => date('Y-m-d H:i:s'),
              'updated_by' => $this->session->userdata('userId'),
            ];
          }
        }

        for ($i = 1; $i <= $pdp_imgs_count; $i++) {
          if (!empty($_FILES['pdp_images']['tmp_name'][$i]['image'])) {
            $image_uploaded = true;

            break;
          }
        }

        $uploaded_file_data = [];

        if ($image_uploaded) {
          $upload_path = ABS_PATH_FILES_UPLOADS . "products/pdp/$pdp_set_slug/";

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

          $uploaded_files = $_FILES['pdp_images'];

          $this->load->library('upload');

          $_FILES = [];

          $uploaded_files = array_map('array_values', $uploaded_files);

          for ($i = 0; $i < sizeof($uploaded_files['name']); $i++) {
            if ($uploaded_files['tmp_name'][$i]['image'] != "") {
              $_FILES['userfile'] = [
                'name' => $uploaded_files['name'][$i]['image'],
                'type' => $uploaded_files['type'][$i]['image'],
                'tmp_name' => $uploaded_files['tmp_name'][$i]['image'],
                'error' => $uploaded_files['error'][$i]['image'],
                'size' => $uploaded_files['size'][$i]['image'],
              ];

              $allowed_file_mimes = [
                'image/jpeg',
                'image/jpg',
                'image/png',
                'image/webp',
              ];

              if (in_array($uploaded_files['type'][$i]['image'], $allowed_file_mimes)) {
                $file_name = 'pdp_' . microtime(true);
                $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

                $config['file_name'] = $file_name; // name of the file;              

                $this->upload->initialize($config);

                if ($this->upload->do_upload()) {
                  $uploaded_file_data['pdp_images[' . ($i + 1) . '][image]'] = $this->upload->data();
                } else {
                  $this->session->set_flashdata('error_msg', 'Something went wrong while updating the product pdp images in the set!');
                }
              } else {
                $this->session->set_flashdata('error_msg', 'Please uploaded only JPG/PNG image file!');
              }
            }
          }
        }

        $insert_data = [];

        for ($i = 1; $i <= $pdp_imgs_count; $i++) {
          if (isset($uploaded_file_data["pdp_images[$i][image]"])) {
            if ($this->input->post("pdp_images[$i][image_id]") != "") {
              $update_data[($i - 1)]['pdp_img'] = $uploaded_file_data["pdp_images[$i][image]"]['orig_name'];
            } else {
              $insert_data[] = [
                'pdp_set_id' => $pdp_set_id,
                //'pdp_set_slug' => $pdp_set_slug,
                'pdp_img' => $uploaded_file_data["pdp_images[$i][image]"]['orig_name'],
                'display_order' => ++$display_order,
                'status' => is_null($this->input->post("pdp_images[$i][status]")) ? '0' : '1',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $this->session->userdata('userId'),
              ];
            }
          }
        }

        $this->db->trans_start();

        $updated_prod_pdp_img_ids = array_column($update_data, 'prod_pdp_img_id');

        // delete the image records which has been removed via CMS
        $data_altered = $this->db
          ->where('pdp_set_id', $pdp_set_id)
          ->where_not_in('prod_pdp_img_id', $updated_prod_pdp_img_ids)
          ->delete('product_pdp_images');

        // update the records
        $data_altered = update_batch_method('product_pdp_images', $update_data, 'prod_pdp_img_id');

        unset($update_data);

        // insert the new records if added via CMS
        if (!empty($insert_data)) {
          $data_altered = insert_batch_method('product_pdp_images', $insert_data);
        }

        if ($data_altered) {
          $update_data = [
            'pdp_set_vid_id' => $pdp_set_vid_id,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('userId'),
          ];

          $data_updated = update_method('product_pdp_image_sets', $update_data, ['pdp_set_id' => $pdp_set_id]);

          if ($data_updated) {
            $this->db->trans_complete();

            $msg = 'Product PDP set data has been updated successfully!';

            $this->session->set_flashdata('success_msg', $msg);

            $output = [
              'status' => true,
              'message' => $msg,
              'data' => [
                'r_url' => base_url("admin/product/$pdp_product_id/pdp-image-sets"),
              ],
            ];

            return $this->output
              ->set_content_type('application/json')
              ->set_output(json_encode($output));
          } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong while updating the pdp images set!');
          }
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong while updating the images in the pdp image set!');
        }
      } else {
        $fields = [];

        if ($this->input->post('pdp_set_color') == '') {
          $fields[] = 'pdp_set_color';
        }

        if ($this->input->post('pdp_set_slug') == '') {
          $fields[] = 'pdp_set_slug';
        }

        // $pdp_images_count = sizeof($this->input->post('pdp_images'));

        // for ($i = 1; $i <= $pdp_images_count; $i++) {
        //   if (empty($_FILES['pdp_images']['tmp_name'][$i]['image'])) {
        //     $fields[] = "pdp_images[$i][image]";
        //   }
        // }

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
        'title' => 'Edit PDP Image Set',
        'styles' => [],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $product_data = $this->db
      ->select('prod_name')
      ->get_where('products', ['prod_id' => $prod_id])
      ->row();

    $product_colors = $this->db
      ->select('prod_color')
      ->distinct()
      ->get('product_variants')
      ->result();

    $data['prod_id'] = $prod_id;
    $data['pdp_set_id'] = $pdp_set_id;
    $data['pdp_product'] = $product_data->prod_name;
    $data['product_colors'] = array_column($product_colors, 'prod_color');

    $this->load->view('template_backend', $data);
  }

  // edit pdp images display order
  public function edit_pdp_images_display_order($prod_id, $pdp_set_id)
  {
    if ($this->input->method() == 'post') {
      $pdp_order_data = array_map('intval', $this->input->post('pdp_order_data'));

      $success = false;

      foreach ($pdp_order_data as $index => $prod_pdp_img_id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (update_method('product_pdp_images', $update_data, ['prod_pdp_img_id' => $prod_pdp_img_id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Display order of the product pdp images updated successfully!';

        $this->session->set_flashdata('success_msg', $msg);

        $output = [
          'status' => true,
          'message' => $msg,
          'info' => '',
        ];
      } else {
        $msg = 'Something went wrong while updating the display order of the product pdp images!';

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
        'title' => 'Edit PDP Images Display Order',
        'styles' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/css/lightbox.css',
        ],
        'scripts' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/js/lightbox.js',
        ],
      ],
      'breadcrumb' => 'Edit PDP Display Order',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['product_pdp_images'] = $this->prod_m->get_product_pdp_images(['pdp_set_id' => $pdp_set_id], 'display_order', 'ASC');
    $data['product'] = select_where_method('products', ['prod_id' => $prod_id]);
    $data['prod_id'] = $prod_id;
    $data['pdp_set_id'] = $pdp_set_id;

    $this->load->view('template_backend', $data);
  }
}
