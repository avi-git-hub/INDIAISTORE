<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Accessory extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->module('user');
    $this->load->model('accessory_model', 'accessory_m');

    $this->load->helper('form');
    $this->load->library('form_validation');


    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect(base_url('user/logout'));
    }
  }

  public function manage_accessories()
  {
    $data = [
      'page_data' => [
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ],
      'breadcrumb' => 'Dashboard',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['accessories'] = $this->accessory_m->getAccessories();

    $this->load->view('template_backend', $data);
  }

  public function add_new_accessory()
  {
    $data = [
      'page_data' => [
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',

        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',
        ],
      ],
      'breadcrumb' => 'Dashboard',
      'view_file' => generate_view_path(__METHOD__),
    ];


    if ($this->input->method() == 'post') {

      $response = ['status' => false];

      $validation_config = [
        [
          'field' => 'acc_name',
          'label' => 'Accessory Name',
          'rules' => 'trim|required|max_length[255]'
        ],
        [
          'field' => 'acc_slug',
          'label' => 'Accessory Slug',
          'rules' => 'trim|required|max_length[255]|is_unique[accessories.slug]',
        ],
        [
          'field' => 'acc_html_classes',
          'label' => 'Accessory HTML classes',
          'rules' => 'trim|max_length[100]'
        ],
        [
          'field' => 'acc_category',
          'label' => 'Accessory Category',
          'rules' => 'trim|required|numeric|max_length[5]',
        ],
      ];

      $name_keys = array_keys($this->input->post('acc_color_name'));

      foreach ($name_keys as $n_value) {
        $validation_config[] = [
          'field' => "acc_color_name[$n_value]",
          'label' => "Color Name",
          'rules' => 'trim|required|max_length[50]'
        ];
      }


      $hex_keys = array_keys($this->input->post('acc_color_hex'));

      foreach ($hex_keys as $h_value) {
        $validation_config[] = [
          'field' => "acc_color_hex[$h_value]",
          'label' => "Color Hex",
          'rules' => 'trim|required|max_length[50]'
        ];
      }



      $images_keys = array_keys($_FILES);

      foreach ($images_keys as $i_value) {
        $validation_config[] = [
          'field' => "$i_value",
          'label' => "Color Image",
          'rules' => (empty($_FILES[$i_value]['name'])) ? 'required' : '',
        ];
      }


      $attr_name_keys = array_keys($this->input->post('acc_attr_name'));

      foreach ($attr_name_keys as $an_value) {
        $validation_config[] = [
          'field' => "acc_attr_name[$an_value]",
          'label' => "Attribute Name",
          'rules' => 'trim|required|max_length[50]'
        ];
      }

      foreach ($attr_name_keys as $av_value) {
        $validation_config[] = [
          'field' => "acc_attr_value[$av_value][]",
          'label' => "Attribute Value",
          'rules' => 'trim|required'
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {
        $a_acc_name = $this->input->post('acc_name');
        $a_acc_slug = $this->input->post('acc_slug');
        $a_acc_category = $this->input->post('acc_category');
        $a_acc_status = is_null($this->input->post('acc_status')) ? '0' : '1';
        $a_acc_is_new = is_null($this->input->post('acc_is_new')) ? '0' : '1';
        $a_acc_html_classes = $this->input->post('acc_html_classes');

        $a_display_order = select_where_order_by_method('accessories', ['cat_id' => $a_acc_category], 'display_order', 'DESC', 1);
        $a_acc_display_order = (int) (empty($a_display_order) ? 1 : $a_display_order->display_order);

        $post_accessories = [
          'cat_id' => $a_acc_category,
          'name' => $a_acc_name,
          'slug' => $a_acc_slug,
          'status' => $a_acc_status,
          'is_new' => $a_acc_is_new,
          'html_classes' => $a_acc_html_classes,
          'display_order' => $a_acc_display_order++,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        $this->db->trans_begin();

        insert_method('accessories', $post_accessories);
        $acc_id = $this->db->insert_id();

        if ($acc_id) {

          $upload_path = ABS_PATH_FILES_UPLOADS . "accessories/$a_acc_slug/";

          if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
          }

          $config = [
            'upload_path' => $upload_path,
            'allowed_types' => '*',
            'max_size' => '2048000',
            'file_ext_tolower' => true,
            // 'overwrite' => false,
            // 'max_height' => '472',
            // 'max_width' => '1362'
          ];

          $this->load->library('upload');

          $uploaded_file_data = [];

          foreach ($_FILES as $field => $file) {
            $allowedFileMimes = [
              'image/jpeg',
              'image/jpg',
              'image/png',
            ];

            if (in_array($file['type'], $allowedFileMimes)) {
              $fileName = 'acc_' . microtime(true);
              $fileName = strtr($fileName, [' ' => '_', '.' => '_']);

              // if ($field == 'banner_image_mobile') {
              //   $fileName .= '_m';
              // }

              $config['file_name'] = $fileName; // name of the file;

              $this->upload->initialize($config);

              if ($this->upload->do_upload($field)) {
                $uploaded_file_data[$field] = $this->upload->data();
              } else {
                $error = strip_tags($this->upload->display_errors());
                $response['message'] = ['Something went wrong while uploading files, please try again!'];
                break;
              }
            } else {
              $response['message'] = 'Invalid file type. Only JPG or PNG images allowed.';
              break;
            }
          }

          if (sizeof($uploaded_file_data) == sizeof($_FILES)) {
            $acc_color_name = $this->input->post('acc_color_name');
            $acc_color_hex = $this->input->post('acc_color_hex');
            $acc_color_status = $this->input->post('acc_color_status');

            $count1 = 0;
            $post_acc_color_image = [];
            foreach ($acc_color_name as $key => $value) {

              $post_acc_color_image[] = [
                'accessory_id' => $acc_id,
                'color' => trim(strtolower($acc_color_name[$key])),
                'color_hex' => trim($acc_color_hex[$key]),
                'image' => $uploaded_file_data[$images_keys[$count1]]['file_name'],
                'status' => $acc_color_status[$key],
                'display_order' => ++$count1,
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => $this->session->userdata('userId'),
              ];
              // $inserted = insert_method('accessories_color_image', $post_acc_color_image);
            }

            insert_batch_method('accessories_color_image', $post_acc_color_image);


            $acc_attr_name = $this->input->post('acc_attr_name');
            $acc_attr_value = $this->input->post('acc_attr_value');

            foreach ($acc_attr_name as $key => $atr_name) {
              $old_attr_name = $this->db->select('id')->where('name', trim(strtolower($atr_name)))->get('accessories_attributes')->row();

              if (!empty($old_attr_name)) {
                $inserted_attr_id = $old_attr_name->id;
              } else {
                insert_method('accessories_attributes', ['name' => trim(strtolower($atr_name)), 'display_order' => '1', 'status' => '1']);
                $inserted_attr_id = $this->db->insert_id();
              }

              foreach ($acc_attr_value[$key] as $atr_value) {
                $old_attr_value = $this->db->select('id')->where('value', trim($atr_value))->get('accessories_attributes_values')->row();

                if (!empty($old_attr_value)) {
                  $inserted_value_id = $old_attr_value->id;
                } else {
                  insert_method('accessories_attributes_values', ['value' => trim($atr_value), 'display_order' => '1', 'status' => '1']);
                  $inserted_value_id = $this->db->insert_id();
                }

                insert_method('accessories_attributes_pivot', ['accessory_id' => $acc_id, 'attribute_id' => $inserted_attr_id, 'value_id' => $inserted_value_id]);
              }
            }
          }


          if ($this->db->trans_status() == true) {
            $this->db->trans_commit();
            $response = [
              'status' => true,
              'message' => 'Accessory have been added successfully!'
            ];

            return $this->output
              ->set_content_type('application/json')
              ->set_status_header(200)
              ->set_output(json_encode($response));
          } else {
            $this->db->trans_rollback();
            if (empty($response['message'])) {
              $response['message'] = 'Something went wrong!';
            }

            return $this->output
              ->set_content_type('application/json')
              ->set_status_header(200)
              ->set_output(json_encode($response));
          }
        }
      } else {
        $response['errors'] = [
          'acc_name' => form_error('acc_name'),
          'acc_slug' => form_error('acc_slug'),
          'acc_category' => form_error('acc_category'),
          'acc_html_classes' => form_error('acc_html_classes')
        ];

        foreach ($name_keys as $n_value) {
          $response['errors']["acc_color_name[$n_value]"] = form_error("acc_color_name[$n_value]");
        }

        foreach ($hex_keys as $h_value) {
          $response['errors']["acc_color_hex[$h_value]"] = form_error("acc_color_hex[$h_value]");
        }

        foreach ($images_keys as $i_value) {
          $response['errors'][$i_value] = form_error($i_value);
        }

        foreach ($attr_name_keys as $an_value) {
          $response['errors']["acc_attr_name[$an_value]"] = form_error("acc_attr_name[$an_value]");
        }

        // if (is_null($this->input->post('acc_attr_value'))) {
        foreach ($attr_name_keys as $av_value) {
          $response['errors']["acc_attr_value[$av_value][]"] = form_error("acc_attr_value[$av_value][]");
        }
        // }
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($response));
    }

    $data['categories'] = $this->db->select('cat_id,cat_name')->get('categories')->result();
    $this->load->view('template_backend', $data);
  }

  public function edit_accessory($id)
  {
    $data = [
      'page_data' => [
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',

        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',
        ],
      ],
      'breadcrumb' => 'Dashboard',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $acc = $this->accessory_m->getAccessoryById($id);

    $data['categories'] = $this->db->select('cat_id,cat_name')->get('categories')->result();
    $data['accessories'] = $acc[0];
    $data['accessory_id'] = $id;
    $data['accessories_color_image'] = $acc[1];
    $data['accessories_attributes'] = $acc[2];


    if ($this->input->method() == 'post') {

      $response = ['status' => false];

      $validation_config = [
        [
          'field' => 'acc_name',
          'label' => 'Accessory Name',
          'rules' => 'trim|required|max_length[255]'
        ],
        [
          'field' => 'acc_html_classes',
          'label' => 'Accessory HTML classes',
          'rules' => 'trim|max_length[100]'
        ],
        [
          'field' => 'acc_category',
          'label' => 'Accessory Category',
          'rules' => 'trim|required|numeric|max_length[5]',
        ],
      ];

      if ($this->input->post('acc_slug') == $data['accessories']->slug) {
        $validation_config[] = [
          'field' => 'acc_slug',
          'label' => 'Accessory Slug',
          'rules' => 'trim|required|max_length[255]'
        ];
      } else {
        $validation_config[] = [
          'field' => 'acc_slug',
          'label' => 'Accessory Slug',
          'rules' => 'trim|required|max_length[255]|is_unique[accessories.slug]',
        ];
      }


      $name_keys = array_keys($this->input->post('acc_color_name'));

      foreach ($name_keys as $n_value) {
        $validation_config[] = [
          'field' => "acc_color_name[$n_value]",
          'label' => "Color Name",
          'rules' => 'trim|required|max_length[50]'
        ];
      }


      $hex_keys = array_keys($this->input->post('acc_color_hex'));

      foreach ($hex_keys as $h_value) {
        $validation_config[] = [
          'field' => "acc_color_hex[$h_value]",
          'label' => "Color Hex",
          'rules' => 'trim|required|max_length[50]'
        ];
      }

      $images_keys = array_keys($_FILES);
      $mapped_file_name = array_map(function ($a) {
        return "acc_color_image_$a";
      }, array_column($data['accessories_color_image'], 'id'));

      foreach ($images_keys as $i_value) {
        if (!in_array($i_value, $mapped_file_name)) {
          $validation_config[] = [
            'field' => "$i_value",
            'label' => "Color Image",
            'rules' => (empty($_FILES[$i_value]['name'])) ? 'required' : '',
          ];
        }
      }

      $attr_name_keys = array_keys($this->input->post('acc_attr_name'));

      foreach ($attr_name_keys as $an_value) {
        $validation_config[] = [
          'field' => "acc_attr_name[$an_value]",
          'label' => "Attribute Name",
          'rules' => 'trim|required|max_length[50]'
        ];
      }

      foreach ($attr_name_keys as $av_value) {
        $validation_config[] = [
          'field' => "acc_attr_value[$av_value][]",
          'label' => "Attribute Value",
          'rules' => 'trim|required'
        ];
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {

        $upload_path = ABS_PATH_FILES_UPLOADS . "accessories/" . $data['accessories']->slug . "/";

        if (!is_dir($upload_path)) {
          mkdir($upload_path, 0777, TRUE);
        }

        $config = [
          'upload_path' => $upload_path,
          'allowed_types' => '*',
          'max_size' => '2048000',
          'file_ext_tolower' => true,
          // 'overwrite' => false,
          // 'max_height' => '472',
          // 'max_width' => '1362'
        ];

        $this->load->library('upload');

        $allowedFileMimes = [
          'image/jpeg',
          'image/jpg',
          'image/png',
        ];

        $uploaded_file_data = [];
        $updated_file_data = [];
        $file_errors = [];

        $acc_color_id = $this->input->post('acc_color_id');
        $old_acc_color_id = array_column($data['accessories_color_image'], 'id');


        $color_added = array_diff($acc_color_id, $old_acc_color_id); //added
        $color_removed = array_diff($old_acc_color_id, $acc_color_id); //removed
        $color_updated = array_unique(array_intersect($acc_color_id, $old_acc_color_id), SORT_REGULAR); //updated

        foreach ($acc_color_id as $aci_key => $aci_value) {
          if (!empty($color_added[$aci_key])) {
            $added_file = $_FILES["acc_color_image_$aci_key"];
            if (in_array($added_file['type'], $allowedFileMimes)) {
              $added_file_name = 'acc_' . microtime(true);
              $added_file_name = strtr($added_file_name, [' ' => '_', '.' => '_']);

              // if ($field == 'banner_image_mobile') {
              //   $added_file_name .= '_m';
              // }

              $config['file_name'] = $added_file_name; // name of the file;

              $this->upload->initialize($config);

              if ($this->upload->do_upload("acc_color_image_$aci_key")) {
                $uploaded_file_data[$aci_value] = $this->upload->data();
              } else {
                $file_errors[] = strip_tags($this->upload->display_errors());
              }
            } else {
              $file_errors[] = 'Invalid file type. Only JPG or PNG images allowed.';
            }
          }

          if (!empty($color_updated[$aci_key]) && $_FILES["acc_color_image_$aci_key"]['error'] == '0') {
            $updated_file = $_FILES["acc_color_image_$aci_key"];
            if (in_array($updated_file['type'], $allowedFileMimes)) {
              $updated_file_name = 'acc_' . microtime(true);
              $updated_file_name = strtr($updated_file_name, [' ' => '_', '.' => '_']);

              // if ($field == 'banner_image_mobile') {
              //   $updated_file_name .= '_m';
              // }

              $config['file_name'] = $updated_file_name; // name of the file;

              $this->upload->initialize($config);

              if ($this->upload->do_upload("acc_color_image_$aci_key")) {
                $updated_file_data[$aci_value] = $this->upload->data();
              } else {
                $file_errors[] = strip_tags($this->upload->display_errors());
              }
            } else {
              $file_errors[] = 'Invalid file type. Only JPG or PNG images allowed.';
            }
          }
        }

        if (empty($file_errors)) {

          /* accessories start */
          $a_acc_name = $this->input->post('acc_name');
          $a_acc_slug = $this->input->post('acc_slug');
          $a_acc_category = $this->input->post('acc_category');
          $a_acc_status = is_null($this->input->post('acc_status')) ? '0' : '1';
          $a_acc_is_new = is_null($this->input->post('acc_is_new')) ? '0' : '1';
          $a_acc_html_classes = $this->input->post('acc_html_classes');

          $post_accessories = [
            'cat_id' => $a_acc_category,
            'name' => $a_acc_name,
            'slug' => $a_acc_slug,
            'status' => $a_acc_status,
            'is_new' => $a_acc_is_new,
            'html_classes' => $a_acc_html_classes,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('userId'),
          ];

          $this->db->trans_begin();

          update_method('accessories', $post_accessories, ['id' => $id]);
          /* accessories end */

          /* colors start */
          $acc_color_name = $this->input->post('acc_color_name');
          $acc_color_hex = $this->input->post('acc_color_hex');
          $acc_color_status = $this->input->post('acc_color_status');
          $acc_attr_name = $this->input->post('acc_attr_name');
          $acc_attr_value = $this->input->post('acc_attr_value');

          // 

          //if color added
          if (!empty($color_added)) {

            $c_display_order = select_where_order_by_method('accessories_color_image', ['accessory_id' => $id], 'display_order', 'DESC', 1);
            $c_acc_display_order = (int) (empty($c_display_order) ? 1 : $c_display_order->display_order);

            $post_acc_color_image = [];
            foreach ($color_added as $key => $c_add) {
              $post_acc_color_image[] = [
                'accessory_id' => $id,
                'color' => trim(strtolower($acc_color_name[$key])),
                'color_hex' => trim($acc_color_hex[$key]),
                'status' => is_null($acc_color_status[$key]) ? '0' : '1',
                'image' => $uploaded_file_data[$key]['file_name'],
                'display_order' => ++$c_acc_display_order,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => $this->session->userdata('userId'),
              ];
            }

            insert_batch_method('accessories_color_image', $post_acc_color_image);
          }

          //if new color removed
          if (!empty($color_removed)) {
            $this->db->where_in('id', $color_removed)->delete('accessories_color_image', ['accessory_id' => $id]);
          }

          //if color  updated
          if (!empty($color_updated)) {
            $post_u_acc_color_image = [];
            foreach ($color_updated as $cu_key => $cu_value) {
              if (!empty($updated_file_data[$cu_key]['file_name'])) {
                $post_u_acc_color_image[] = [
                  'id' => $cu_key,
                  'accessory_id' => $id,
                  'color' => trim(strtolower($acc_color_name[$cu_key])),
                  'color_hex' => trim($acc_color_hex[$cu_key]),
                  'image' => $updated_file_data[$cu_key]['file_name'],
                  'status' => is_null($acc_color_status[$cu_key]) ? '0' : '1',
                  'updated_at' => date('Y-m-d H:i:s'),
                  'updated_by' => $this->session->userdata('userId'),
                ];
              } else {

                $post_u_acc_color_image[] = [
                  'id' => $cu_key,
                  'accessory_id' => $id,
                  'color' => trim(strtolower($acc_color_name[$cu_key])),
                  'color_hex' => trim($acc_color_hex[$cu_key]),
                  'status' => is_null($acc_color_status[$cu_key]) ? '0' : '1',
                  'updated_at' => date('Y-m-d H:i:s'),
                  'updated_by' => $this->session->userdata('userId'),
                ];
              }
            }

            update_batch_method('accessories_color_image', $post_u_acc_color_image, 'id');
          }

          /* colors ends */


          /* attribute starts */
          $this->db->delete('accessories_attributes_pivot', ['accessory_id' => $id]);

          $acc_attr_name = $this->input->post('acc_attr_name');
          $acc_attr_value = $this->input->post('acc_attr_value');

          foreach ($acc_attr_name as $key => $atr_name) {
            $old_attr_name = $this->db->select('id')->where('name', trim(strtolower($atr_name)))->get('accessories_attributes')->row();

            if (!empty($old_attr_name)) {
              $inserted_attr_id = $old_attr_name->id;
            } else {
              insert_method('accessories_attributes', ['name' => trim(strtolower($atr_name)), 'display_order' => '1', 'status' => '1']);
              $inserted_attr_id = $this->db->insert_id();
            }

            foreach ($acc_attr_value[$key] as $atr_value) {
              $old_attr_value = $this->db->select('id')->where('value', trim($atr_value))->get('accessories_attributes_values')->row();

              if (!empty($old_attr_value)) {
                $inserted_value_id = $old_attr_value->id;
              } else {
                insert_method('accessories_attributes_values', ['value' => trim($atr_value), 'display_order' => '1', 'status' => '1']);
                $inserted_value_id = $this->db->insert_id();
              }

              insert_method('accessories_attributes_pivot', ['accessory_id' => $id, 'attribute_id' => $inserted_attr_id, 'value_id' => $inserted_value_id]);
            }
          }

          /* attribute ends */

          if ($this->db->trans_status() == true) {
            $this->db->trans_commit();

            if (slugify($this->input->post('acc_name')) != $data['accessories']->slug) {
              rename(ABS_PATH_FILES_UPLOADS . "accessories/" . $data['accessories']->slug, ABS_PATH_FILES_UPLOADS . "accessories/" . slugify($this->input->post('acc_name')));
            }

            $response = [
              'status' => true,
              'message' => 'Accessory have been updated successfully!'
            ];

            return $this->output
              ->set_content_type('application/json')
              ->set_status_header(200)
              ->set_output(json_encode($response));
          } else {
            $this->db->trans_rollback();
            if (empty($response['message'])) {
              $response['message'] = 'Something went wrong!';
            }

            return $this->output
              ->set_content_type('application/json')
              ->set_status_header(200)
              ->set_output(json_encode($response));
          }
        } else {
          $response['message'] = 'Something went wrong while uploading files!';
          $response['data'] = $file_errors;
          return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($response));
        }
      } else {
        $response['errors'] = [
          'acc_name' => form_error('acc_name'),
          'acc_slug' => form_error('acc_slug'),
          'acc_category' => form_error('acc_category'),
          'acc_html_classes' => form_error('acc_html_classes')
        ];

        foreach ($name_keys as $n_value) {
          $response['errors']["acc_color_name[$n_value]"] = form_error("acc_color_name[$n_value]");
        }

        foreach ($hex_keys as $h_value) {
          $response['errors']["acc_color_hex[$h_value]"] = form_error("acc_color_hex[$h_value]");
        }

        foreach ($images_keys as $i_value) {
          $response['errors'][$i_value] = form_error($i_value);
        }

        foreach ($attr_name_keys as $an_value) {
          $response['errors']["acc_attr_name[$an_value]"] = form_error("acc_attr_name[$an_value]");
        }

        foreach ($attr_name_keys as $av_value) {
          $response['errors']["acc_attr_value[$av_value][]"] = form_error("acc_attr_value[$av_value][]");
        }
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_status_header(200)
        ->set_output(json_encode($response));
    };

    $this->load->view('template_backend', $data);
  }

  public function get_prods_by_cat_id($id)
  {
    $data = $this->accessory_m->getProdsByCatId($id);

    $response = ['status' => true, 'data' => $data];

    return $this->output
      ->set_content_type('application/json')
      ->set_status_header(200)
      ->set_output(json_encode($response));
  }

  public function delete_accessory($id)
  {
    if ($this->input->method() == 'post') {

      $this->db->trans_begin();

      delete_method('accessories_attributes_pivot', ['accessory_id' => $id]);
      delete_method('accessories_color_image', ['accessory_id' => $id]);
      delete_method('accessories', ['id' => $id]);

      if ($this->db->trans_status() == true) {
        $this->db->trans_commit();
        $output = [
          'status' => true,
          'message' => 'Accessory has been deleted successfully!',
          'info' => $this->db->affected_rows(),
        ];
      } else {
        $this->db->trans_rollback();
        $output = [
          'status' => false,
          'message' => 'Something went wrong while deleting the accessory.',
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
