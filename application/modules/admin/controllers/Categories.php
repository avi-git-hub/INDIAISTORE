<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends MX_Controller
{

  // constructor
  public function __construct()
  {
    parent::__construct();

    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->load->model('categories_model', 'cat_m');

    $this->load->module('user');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  // manage categories
  public function manage_categories()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Manage Categories',
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

    $data['categories'] = $this->cat_m->get_categories(null, 'created_at', 'DESC');

    $this->load->view('template_backend', $data);
  }

  // add new category
  public function add_new_category()
  {
    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'category_name',
          'label' => 'Category Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]',
        ],
        [
          'field' => 'category_slug',
          'label' => 'Category Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]|is_unique[categories.cat_slug]'
        ],
        [
          'field' => 'category_status',
          'label' => 'Category Status',
          'rules' => 'trim|numeric|less_than[2]', [
            'less_than' => 'Please select a s%s',
            'numeric' => 'Please select a s%s'
          ],
        ],
        [
          'field' => 'category_applicable_features[]',
          'label' => 'Category Applicable Features',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'category_applicable_variants[]',
          'label' => 'Category Applicable Variants',
          'rules' => 'trim|required',
        ],
      ];

      /* if (empty($_FILES['category_icon']['name'])) {
        $validation_config[] = [
          'field' => 'category_icon',
          'label' => 'Category Icon',
          'rules' => 'required'
        ];
      } */

      if (empty($_FILES['category_thumbnail']['name'])) {
        $validation_config[] = [
          'field' => 'category_thumbnail',
          'label' => 'Category Thumbnail',
          'rules' => 'required'
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == TRUE) {
        $category_name = $this->input->post('category_name');
        $category_slug = slugify($this->input->post('category_slug'));
        $category_status = is_null($this->input->post('category_status')) ? '0' : '1';
        $category_show_on_homepage = is_null($this->input->post('category_show_on_homepage')) ? '0' : '1';
        $category_applicable_features = implode(',', $this->input->post('category_applicable_features'));
        $category_applicable_variants = implode(',', $this->input->post('category_applicable_variants'));
        $category_description = $this->input->post('category_description');
        $category_html_id = $this->input->post('category_html_id');
        $category_html_classes = $this->input->post('category_html_classes');

        $uploaded_file_data = [];

        $upload_path = ABS_PATH_FILES_UPLOADS . "categories/$category_slug/";

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
              switch ($field) {
                case 'category_icon':
                  $file_name = 'icon-' . microtime(true);

                  break;

                case 'category_thumbnail':
                  $file_name = 'thumbnail-' . microtime(true);

                  break;

                case 'category_mob_img':
                  $file_name = 'mob-img-' . microtime(true);

                  break;

                case 'category_desk_img':
                  $file_name = 'desk-img-' . microtime(true);

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

                redirect(base_url("admin/category/add-new"));

                break;
              }
            } else {
              $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

              redirect(base_url("admin/category/add-new"));

              break;
            }
          }
        }

        if (sizeof($uploaded_file_data) > 0) {
          $display_order_data = multi_select_order_by_method('categories', 'display_order', 'DESC', 1);

          $display_order = current($display_order_data)->display_order;

          settype($display_order, "integer");

          $insert_data = [
            'cat_name' => $category_name,
            'cat_slug' => $category_slug,
            'cat_icon' => /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data['category_icon']['orig_name'],
            'cat_thumbnail' => /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data['category_thumbnail']['orig_name'],
            'cat_show_on_homepage' => $category_show_on_homepage,
            'cat_applicable_features' => $category_applicable_features,
            'cat_applicable_variants' => $category_applicable_variants,
            'cat_description' => $category_description,
            'cat_html_id' => $category_html_id,
            'cat_html_classes' => $category_html_classes,
            'cat_mob_img' => isset($uploaded_file_data['category_mob_img']) ? /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data['category_mob_img']['orig_name'] : '',
            'cat_desk_img' => isset($uploaded_file_data['category_mob_img']) ? /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data['category_desk_img']['orig_name'] : '',
            'display_order' => ++$display_order,
            'status' => $category_status,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('userId'),
          ];

          $data_inserted = insert_method('categories', $insert_data);

          if ($data_inserted) {
            $this->session->set_flashdata('success_msg', 'Category has been added successfully!');

            // CODE:if redirected to same page use this - avoiding resubmission
            // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
            // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
            // exit(); 

            redirect(base_url('admin/categories'));
          } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong!');
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
        'title' => 'Add New Category',
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

    $data['prod_feat_cat'] = select_method('product_feature_categories');

    $this->load->view('template_backend', $data);
  }

  // edit category
  public function edit_category($cat_id = null)
  {
    if (is_null($cat_id)) {
      return redirect(base_url('admin/categories'));
    }

    $categories = $this->cat_m->get_categories(['cat_id' => $cat_id]);

    if (empty($categories)) {
      $this->session->set_flashdata('error_msg', 'Category not found.');

      return redirect(base_url('admin/categories'));
    }

    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'category_name',
          'label' => 'Category Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]',
        ],
        [
          'field' => 'category_status',
          'label' => 'Category Status',
          'rules' => 'trim|numeric|less_than[2]', [
            'less_than' => 'Please select a s%s',
            'numeric' => 'Please select a s%s'
          ],
        ],
        [
          'field' => 'category_applicable_features[]',
          'label' => 'Category Applicable Features',
          'rules' => 'trim|required',
        ],
        [
          'field' => 'category_applicable_variants[]',
          'label' => 'Category Applicable Variants',
          'rules' => 'trim|required',
        ],
      ];

      $category_slug = slugify($this->input->post('category_slug'));

      if ($category_slug == $categories->cat_slug) {
        $validation_config[] = [
          'field' => 'category_slug',
          'label' => 'Category Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ];
      } else {
        $validation_config[] = [
          'field' => 'category_slug',
          'label' => 'Category Slug',
          'rules' => 'trim|required|min_length[1]|max_length[100]|is_unique[categories.cat_slug]',
          [
            'is_unique' => '%s already exists.'
          ]
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == TRUE) {
        $category_name = $this->input->post('category_name');
        $category_slug = slugify($this->input->post('category_slug'));

        $category_trending_products = $this->input->post('category_trending_products');

        if (!is_null($category_trending_products)) {
          $category_trending_products = implode(',', $this->input->post('category_trending_products'));
        }

        $category_status = is_null($this->input->post('category_status')) ? '0' : '1';
        $category_show_on_homepage = is_null($this->input->post('category_show_on_homepage')) ? '0' : '1';

        $category_applicable_features = implode(',', $this->input->post('category_applicable_features'));
        $category_applicable_variants = implode(',', $this->input->post('category_applicable_variants'));

        $category_description = $this->input->post('category_description');

        $category_html_id = $this->input->post('category_html_id');
        $category_html_classes = $this->input->post('category_html_classes');

        $update_data = [
          'cat_name' => $category_name,
          //'cat_slug' => $category_slug,
          'cat_trending_products' => $category_trending_products,
          'cat_show_on_homepage' => $category_show_on_homepage,
          'cat_applicable_features' => $category_applicable_features,
          'cat_applicable_variants' => $category_applicable_variants,
          'cat_description' => $category_description,
          'cat_html_id' => $category_html_id,
          'cat_html_classes' => $category_html_classes,
          'status' => $category_status,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (
          (!empty($_FILES['category_icon']['name'])) ||
          (!empty($_FILES['category_thumbnail']['name'])) ||
          (!empty($_FILES['category_mob_img']['name'])) ||
          (!empty($_FILES['category_desk_img']['name'])) ||
          (!empty($_FILES['category_home']['name']))
        ) {
          $uploaded_file_data = [];

          $upload_path = ABS_PATH_FILES_UPLOADS . "categories/$category_slug/";

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
                switch ($field) {
                  case 'category_icon':
                    $file_name = 'icon-' . microtime(true);

                    break;

                  case 'category_thumbnail':
                    $file_name = 'thumbnail-' . microtime(true);

                    break;

                  case 'category_mob_img':
                    $file_name = 'mob-img-' . microtime(true);

                    break;

                  case 'category_desk_img':
                    $file_name = 'desk-img-' . microtime(true);

                  case 'category_home':
                      $file_name = 'home-img-' . microtime(true);

                    break;
                }

                $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

                $config['file_name'] = $file_name; // name of the file;

                $this->upload->initialize($config);

                if ($this->upload->do_upload($field)) {
                  $uploaded_file_data[$field] = $this->upload->data();

                  if (isset($uploaded_file_data[$field])) {
                    switch ($field) {
                      case 'category_icon':
                        $update_data['cat_icon'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'category_thumbnail':
                        $update_data['cat_thumbnail'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'category_mob_img':
                        $update_data['cat_mob_img'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data[$field]['orig_name'];

                        break;

                      case 'category_desk_img':
                        $update_data['cat_desk_img'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data[$field]['orig_name'];

                      case 'category_home':
                          $update_data['cat_home_thumbnail'] = /* strtr(PATH_FILES_UPLOADS_ADMIN, [base_url() => '']) . 'categories/' . */ $uploaded_file_data[$field]['orig_name'];

                        break;
                    }
                  }
                } else {
                  $error = strip_tags($this->upload->display_errors());

                  $this->session->set_flashdata('error_msg', $error);

                  redirect(base_url("admin/category/$cat_id/edit"));

                  break;
                }
              } else {
                $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

                redirect(base_url("admin/category/$cat_id/edit"));

                break;
              }
            }
          }
        }

        $data_updated = update_method('categories', $update_data, ['cat_id' => $cat_id]);

        if ($data_updated) {
          $this->session->set_flashdata('success_msg', 'Product feature category has been updated!');

          // CODE:to redirect to same page use this - avoiding resubmission
          // $this->form_validationation->clear_post_data(); //custom form validation library created to clear input fields.
          // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
          // exit(); 

          return redirect(base_url('admin/categories'));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $data = [
      'page_data' => [
        'title' => 'Edit Category',
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
      'breadcrumb' => 'Edit Category',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['categories'] = $categories;
    $data['products'] = multi_select_query_where('products', ['cat_id' => $cat_id]);
    $data['prod_feat_cat'] = select_method('product_feature_categories');

    $this->load->view('template_backend', $data);
  }

  // delete category
  public function delete_category($cat_id)
  {
    if ($this->input->method() == 'post') {
      $this->db->trans_start();

      $where = ['cat_id' => $cat_id];

      $category_deleted = delete_method('categories', $where);

      if ($category_deleted) {
        $products_for_category = multi_select_query_where('products', $where);

        if (!empty($products_for_category)) {
          $products_for_deleted_category_deleted = delete_method('products', $where);

          $this->db->trans_complete();

          if ($products_for_deleted_category_deleted) {
            $output = [
              'status' => true,
              'message' => 'Product(s) for the deleted category have been deleted successfully!',
              'info' => $this->db->affected_rows(),
            ];
          } else {
            $output = [
              'status' => false,
              'message' => 'Something went wrong while deleting the product(s) for deleted category.',
              'info' => '',
            ];
          }
        } else {
          $this->db->trans_complete();

          $output = [
            'status' => true,
            'message' => 'Category has been deleted successfully!',
            'info' => $this->db->affected_rows(),
          ];
        }
      } else {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the category.',
          'info' => '',
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  // edit display order
  public function edit_display_order()
  {
    $data = [
      'page_data' => [
        'title' => 'Edit Category Display Order',
        'styles' => [],
        'scripts' => [],
      ],
      'breadcrumb' => 'Edit Display Order',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $success = false;

    if ($this->input->post()) {
      $category_order_data = array_map('intval', $this->input->post('categoryOrderData'));

      foreach ($category_order_data as $index => $category_id) {
        $order = $index + 1;

        $update_data = [
          'display_order' => $order,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if (update_method('categories', $update_data, ['cat_id' => $category_id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Display order of the categories updated successfully!';

        $this->session->set_flashdata('success_msg', $msg);

        $output = [
          'status' => true,
          'message' => $msg,
          'info' => '',
        ];
      } else {
        $msg = 'Something went wrong while updating the display order of the categories!';

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

      return true;
    }

    $data['categories'] = $this->cat_m->get_categories(null, 'display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }
}
