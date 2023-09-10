<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->module('user');
    $this->load->model('partner_model', 'partner_m');
    $this->load->model('common_model', 'common_m');
    $this->load->helper(['form']);
    $this->load->library('form_validation');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect('user/logout');
    }
  }

  // manage stores
  public function manage_partners()
  {
    $data = [
      'page_data' => [
        'title' => 'Manage Partners',
        'styles' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/css/lightbox.css',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css'
        ],
        'scripts' => [
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/js/lightbox.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
          // PATH_BACKEND_CUSTOM_JS.'admin_partner.js'
        ],
      ],
      'breadcrumb' => 'Manage Partners',
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['partners'] = $this->partner_m->getPartners();

    $this->load->view('template_backend', $data);
  }

  public function add_new_partner()
  {
    $data = [
      'page_data' => [
        'title' => 'Add New Partners',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',
          // PATH_BACKEND_CUSTOM_JS.'admin_partner.js'
        ],
      ],
      'breadcrumb' => 'Add New Partners',
      'view_file' => generate_view_path(__METHOD__),
    ];

    if ($this->input->post()) {
      $json = [];
      $validation_config = [
        [
          'field' => 'partner_name',
          'label' => 'Partner Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'partner_reseller',
          'label' => 'Partner Reseller',
          'rules' => 'trim|required|max_length[100]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'partner_phone',
          'label' => 'Phone Number',
          'rules' => 'trim|min_length[10]|max_length[20]'
        ],
        [
          'field' => 'partner_product_url',
          'label' => 'Partner Product',
          'rules' => 'trim|required|max_length[255]',
          'errors' => [
            'required' => 'Please add %s',
          ],
        ],
        [
          'field' => 'partner_website',
          'label' => 'Website',
          'rules' => 'trim|max_length[100]',
        ],
        [
          'field' => 'partner_is_premium',
          'label' => 'Is premium',
          'rules' => 'trim|in_list[0,1]',
        ],
        [
          'field' => 'partner_is_online',
          'label' => 'Is Online Store',
          'rules' => 'trim|in_list[0,1]',
        ],
        [
          'field' => 'partner_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
        ]
      ];

      if (empty($_FILES['partner_logo']['name'])) {
        $validation_config[] = [
          'field' => 'partner_logo',
          'label' => 'Partner Logo',
          'rules' => 'required'
        ];
      }

      // if (!is_null($this->input->post('partner_is_premium'))) {
      //   if (empty($_FILES['partner_logo_rec']['name'])) {
      //     $validation_config[] = [
      //       'field' => 'partner_logo_rec',
      //       'label' => 'Partner Logo',
      //       'rules' => 'required'
      //     ];
      //   }
      // }

      if (is_null($this->input->post('partner_is_pan_india'))) {
        if (is_null($this->input->post('partner_states')) && is_null($this->input->post('partner_cities'))) {
          $validation_config[] = [
            'field' => 'partner_states[]',
            'label' => 'Partner States',
            'rules' => 'required'
          ];
          $validation_config[] = [
            'field' => 'partner_cities[]',
            'label' => 'Partner Cities',
            'rules' => 'required'
          ];
        }
      }

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() != true) {
        $json['errors'] = [
          'partner_name' => form_error('partner_name'),
          'partner_states' => form_error('partner_states[]'),
          'partner_cities' => form_error('partner_cities[]'),
          'partner_reseller' => form_error('partner_reseller'),
          'partner_is_premium' => form_error('partner_is_premium'),
          'partner_is_online' => form_error('partner_is_online'),
          'partner_status' => form_error('partner_status'),
          'partner_phone' => form_error('partner_phone'),
          'partner_website' => form_error('partner_website'),
          'partner_logo' => form_error('partner_logo'),
          'partner_logo_rec' => form_error('partner_logo_rec'),
          'partner_product' => form_error('partner_product_url'),
        ];
      } else {
        $p_name = $this->input->post('partner_name');
        $p_states = $this->input->post('partner_states');
        $p_cities = $this->input->post('partner_cities');
        $p_reseller = $this->input->post('partner_reseller');
        $p_phone = $this->input->post('partner_phone');
        $p_website = $this->input->post('partner_website');
        $p_is_pan_india = is_null($this->input->post('partner_is_pan_india')) ? false : true;
        $p_is_premium = is_null($this->input->post('partner_is_premium')) ? '0' : '1';
        $p_is_online = is_null($this->input->post('partner_is_online')) ? '0' : '1';
        $p_status = is_null($this->input->post('partner_status')) ? '0' : '1';
        //partner_product_url is a array od objects with product id and url
        $partner_product_url = json_decode($this->input->post('partner_product_url'));

        $available_in = '';

        if ($p_is_pan_india) {
          $available_in = 'all';
        } else {
          if (!is_null($p_states)) {
            $available_in = array_map(function ($id) {
              return trim($id) . "_all";
            }, $p_states);
            $available_in = implode(',', $available_in);
          }

          if (!is_null($p_cities)) {
            if (!is_null($p_states)) $available_in .= ",";
            $available_in .= trim(implode(',', $p_cities));
          }
        }


        $uploaded_file_data = [];
        $file_upload_error = "";

        $upload_path = ABS_PATH_FILES_UPLOADS . 'partners/';

        if (!is_dir($upload_path)) {
          mkdir($upload_path, 0777, TRUE);
        }

        $config = [
          'upload_path' => $upload_path,
          'allowed_types' => 'jpg|jpeg|png', // allowed file types
          'max_size' => '204800', // Can be set to particular file size , here it is 2 MB(2048 Kb)
          'file_ext_tolower' => true, // forcing file extension to be in lower case
          // 'max_height' => '472',
          // 'max_width' => '1362'
        ];

        $this->load->library('upload', $config);

        foreach ($_FILES as $field => $file) {
          $file_name = 'partner' . '-logo-' . microtime(true);

          $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

          if ($field == 'partner_logo_rec') {
            $file_name .= '-rec';
          }

          $config['file_name'] = $file_name;

          $this->upload->initialize($config);

          if ($this->upload->do_upload($field)) {
            $uploaded_file_data[$field] = $this->upload->data();
          } else {
            $error = strip_tags($this->upload->display_errors());
            $file_upload_error = $error;
            break;
          }
        }

        if (sizeof($uploaded_file_data) > 0) {
          $postData = [
            'name' => $p_name,
            'reseller' => strtolower($p_reseller),
            'is_premium' => $p_is_premium,
            'is_online' => $p_is_online,
            'status' => $p_status,
            'phone' => $p_phone,
            'website' => $p_website,
            'logo' => $uploaded_file_data['partner_logo']['orig_name'],
            'logo_rectangular' => $uploaded_file_data['partner_logo_rec']['orig_name'],
            'available_in' => $available_in,
            'created_at' => date('Y-m-d H:i:s', time()),
            'created_by' => $this->session->userdata('userId')
          ];

          $this->db->trans_begin();


          $this->partner_m->createPartner($postData);
          $partner_id = $this->db->insert_id();

          foreach ($partner_product_url as $product) {
            $p_data = ['product_id' => $product->id, 'partner_id' => $partner_id, 'landing_page' => trim($product->url)];
            $this->partner_m->createPartnerProduct($p_data);
          }

          if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            $json = ['success' => false];
          } else {
            $this->db->trans_commit();
            $json = ['success' => true];
          }
        } else {
          $json['errors'] = [
            'partner_name' => form_error('partner_name'),
            'partner_states' => form_error('partner_states[]'),
            'partner_cities' => form_error('partner_cities[]'),
            'partner_reseller' => form_error('partner_reseller'),
            'partner_is_premium' => form_error('partner_is_premium'),
            'partner_is_online' => form_error('partner_is_online'),
            'partner_phone' => form_error('partner_phone'),
            'partner_website' => form_error('partner_website'),
            'partner_logo' => $file_upload_error,
            'partner_logo_rec' => $file_upload_error,
            'partner_product' => form_error('partner_product_url'),
          ];
        }
      }
      return $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    $data['cities'] = $this->common_m->getCities();

    $data['states'] = $this->common_m->getStates();

    $data['products'] = $this->db->get('products')->result();
    $this->load->view('template_backend', $data);
  }

  public function edit_partner($id = null)
  {
    if (is_null($id)) {
      redirect('admin/partners');
    }

    $data = [
      'page_data' => [
        'title' => 'Edit Partner',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/css/select2.min.css',
          PATH_BACKEND_THEME_PLUGINS . 'select2-bootstrap4-theme/select2-bootstrap4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'select2/js/select2.full.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          // PATH_BACKEND_CUSTOM_JS.'edit_partner.js'
        ],
      ],
      'breadcrumb' => 'Edit Partner',
      'view_file' => generate_view_path(__METHOD__),
    ];


    if ($this->input->post()) {
      $json = [];
      $validation_config = [
        [
          'field' => 'partner_name',
          'label' => 'Partner Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'partner_reseller',
          'label' => 'Partner Reseller',
          'rules' => 'trim|required|max_length[100]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'partner_phone',
          'label' => 'Phone Number',
          'rules' => 'trim|min_length[10]|max_length[20]'
        ],
        [
          'field' => 'partner_product_url',
          'label' => 'Partner Product',
          'rules' => 'trim|required',
          'errors' => [
            'required' => 'Please add %s',
          ],
        ],
        [
          'field' => 'partner_website',
          'label' => 'Website',
          'rules' => 'trim|max_length[100]',
        ],
        [
          'field' => 'partner_is_premium',
          'label' => 'Is premium',
          'rules' => 'trim|in_list[0,1]',
        ],
        [
          'field' => 'partner_is_online',
          'label' => 'Is Online Store',
          'rules' => 'trim|in_list[0,1]',
        ],
        [
          'field' => 'partner_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
        ]
      ];

      // if (!is_null($this->input->post('partner_is_premium'))) {
      //   if (empty($_FILES['partner_logo_rec']['name'])) {
      //     $validation_config[] = [
      //       'field' => 'partner_logo_rec',
      //       'label' => 'Partner Logo',
      //       'rules' => 'required'
      //     ];
      //   }
      // }

      if (is_null($this->input->post('partner_is_pan_india'))) {
        if (is_null($this->input->post('partner_states')) && is_null($this->input->post('partner_cities'))) {
          $validation_config[] = [
            'field' => 'partner_states[]',
            'label' => 'Partner States',
            'rules' => 'required'
          ];
          $validation_config[] = [
            'field' => 'partner_cities[]',
            'label' => 'Partner Cities',
            'rules' => 'required'
          ];
        }
      }




      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() != true) {
        $json['errors'] = [
          'partner_name' => form_error('partner_name'),
          'partner_states' => form_error('partner_states[]'),
          'partner_cities' => form_error('partner_cities[]'),
          'partner_reseller' => form_error('partner_reseller'),
          'partner_is_premium' => form_error('partner_is_premium'),
          'partner_is_online' => form_error('partner_is_online'),
          'partner_status' => form_error('partner_status'),
          'partner_phone' => form_error('partner_phone'),
          'partner_website' => form_error('partner_website'),
          'partner_logo' => form_error('partner_logo'),
          'partner_logo_rec' => form_error('partner_logo_rec'),
          'partner_product' => form_error('partner_product_url'),
        ];
      } else {
        $p_name = $this->input->post('partner_name');
        $p_states = $this->input->post('partner_states');
        $p_cities = $this->input->post('partner_cities');
        $p_reseller = $this->input->post('partner_reseller');
        $p_phone = $this->input->post('partner_phone');
        $p_website = $this->input->post('partner_website');
        $p_is_pan_india = is_null($this->input->post('partner_is_pan_india')) ? false : true;
        $p_is_premium = is_null($this->input->post('partner_is_premium')) ? '0' : '1';
        $p_is_online = is_null($this->input->post('partner_is_online')) ? '0' : '1';
        $p_status = is_null($this->input->post('partner_status')) ? '0' : '1';
        //partner_product_url is a array od objects with product id and url
        $partner_product_url = json_decode($this->input->post('partner_product_url'));

        $available_in = '';

        if ($p_is_pan_india) {
          $available_in = 'all';
        } else {
          if (!is_null($p_states)) {
            $available_in = array_map(function ($id) {
              return trim($id) . "_all";
            }, $p_states);
            $available_in = implode(',', $available_in);
          }

          if (!is_null($p_cities)) {
            if (!is_null($p_states)) $available_in .= ",";
            $available_in .= trim(implode(',', $p_cities));
          }
        }

        $postData = [
          'name' => $p_name,
          'reseller' => strtolower($p_reseller),
          'is_premium' => $p_is_premium,
          'is_online' => $p_is_online,
          'status' => $p_status,
          'phone' => $p_phone,
          'website' => $p_website,
          'available_in' => $available_in,
          'updated_at' => date('Y-m-d H:i:s', time()),
          'updated_by' => $this->session->userdata('userId')
        ];


        $uploaded_file_data = [];
        $file_upload_error = "";

        $upload_path = ABS_PATH_FILES_UPLOADS . 'partners/';

        if (!is_dir($upload_path)) {
          mkdir($upload_path, 0777, TRUE);
        }

        $config = [
          'upload_path' => $upload_path,
          'allowed_types' => 'jpg|jpeg|png', // allowed file types
          'max_size' => '204800', // Can be set to particular file size , here it is 2 MB(2048 Kb)
          'file_ext_tolower' => true, // forcing file extension to be in lower case
          // 'max_height' => '472',
          // 'max_width' => '1362'
        ];

        $this->load->library('upload', $config);

        foreach ($_FILES as $field => $file) {

          if ($field == 'partner_logo' && $file['error'] == 0) {

            $file_name = 'partner' . '-logo-' . microtime(true);

            $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

            $config['file_name'] = $file_name;

            $this->upload->initialize($config);

            if ($this->upload->do_upload($field)) {
              $uploaded_file_data[$field] = $this->upload->data();
            } else {
              $error = strip_tags($this->upload->display_errors());
              $file_upload_error = $error;
              break;
            }
          }

          if ($field == 'partner_logo_rec' && $file['error'] == 0) {

            $file_name = 'partner' . '-logo-' . microtime(true) . '-rec';

            $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

            $config['file_name'] = $file_name;

            $this->upload->initialize($config);

            if ($this->upload->do_upload($field)) {
              $uploaded_file_data[$field] = $this->upload->data();
            } else {
              $error = strip_tags($this->upload->display_errors());
              $file_upload_error = $error;
              break;
            }
          }
        }

        if (!empty($file_upload_error)) {
          $json['errors'] = [
            'partner_name' => form_error('partner_name'),
            'partner_states' => form_error('partner_states[]'),
            'partner_cities' => form_error('partner_cities[]'),
            'partner_reseller' => form_error('partner_reseller'),
            'partner_status' => form_error('partner_status'),
            'partner_is_premium' => form_error('partner_is_premium'),
            'partner_is_online' => form_error('partner_is_online'),
            'partner_phone' => form_error('partner_phone'),
            'partner_website' => form_error('partner_website'),
            'partner_logo' => $file_upload_error,
            'partner_logo_rec' => $file_upload_error,
            'partner_product' => form_error('partner_product_url'),
          ];
          return $this->output->set_content_type('application/json')->set_output(json_encode($json));
        }

        if (!empty($uploaded_file_data['partner_logo']['orig_name'])) {
          $postData['logo'] = $uploaded_file_data['partner_logo']['orig_name'];
        }

        if (!empty($uploaded_file_data['partner_logo_rec']['orig_name'])) {
          $postData['logo_rectangular'] = $uploaded_file_data['partner_logo_rec']['orig_name'];
        }

        $this->db->trans_begin();


        $this->partner_m->updatePartner($postData, $id);
        $partner_id = $id;

        foreach ($partner_product_url as $product) {
          $p_data = ['product_id' => $product->id, 'landing_page' => trim($product->url), 'partner_id' => $partner_id];
          $this->partner_m->createOrUpdatePartnerProduct($p_data, ['product_id' => $product->id, 'partner_id' => $partner_id]);
        }

        if ($this->db->trans_status() === false) {
          $this->db->trans_rollback();
          $json = ['success' => false];
        } else {
          $this->db->trans_commit();
          $json = ['success' => true];
          return $this->output->set_content_type('application/json')->set_output(json_encode($json));
        }
        $json = ['error' => "Something went wrong."];
      }
      return $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    $data['cities'] = $this->common_m->getCities();

    $data['states'] = $this->common_m->getStates();

    $data['products'] = $this->db->get('products')->result(); //change to db model method

    $data['partner'] = $this->partner_m->getPartner($id);


    $arr = explode(',', $data['partner']->available_in);

    $selected_states =  array_map(function ($x) {
      if (strpos($x, '_all')) {
        return (int) $x;
      }
    }, $arr);

    $selected_cities =  array_map(function ($x) {
      if (!strpos($x, '_all')) {
        return $x;
      }
    }, $arr);

    $data['s_states'] = array_filter($selected_states);
    $data['s_cities'] = array_filter($selected_cities);

    $data['partner_products'] = $this->db->select('pp.*,p.prod_name AS p_name')->from('partner_products AS pp')
      ->join("products AS p", "p.prod_id = pp.product_id")
      ->where('pp.partner_id', $id)
      ->get()
      ->result(); //change to db model method

    $this->load->view('template_backend', $data);
  }

  public function delete_partner_product()
  {
    if ($this->input->post()) {
      $partner_id = $this->input->post('partner_id');
      $product_id = $this->input->post('product_id');

      $this->db->trans_begin();

      $this->partner_m->deletePartnerProduct(['partner_id' => $partner_id, 'product_id' => $product_id]);

      if ($this->db->trans_status() === false) {
        $this->db->trans_rollback();

        $response = [
          'status' => false,
          'message' => 'Something went wrong while deleting the partner product.',
          'info' => '',
        ];
      } else {
        $this->db->trans_commit();

        $response = [
          'status' => true,
          'message' => 'Partner product has been deleted successfully!',
          'info' => $this->db->affected_rows(),
        ];
      }

      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
  }

  public function delete_partner($id = null)
  {
    if (is_null($id)) {
      $response = [
        'status' => false,
        'message' => 'Something went wrong while deleting the partner.',
        'info' => '',
      ];

      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }

    if ($this->input->is_ajax_request()) {
      $this->db->trans_begin();

      $this->partner_m->deletePartner($id);

      if ($this->db->trans_status() === false) {
        $this->db->trans_rollback();

        $response = [
          'status' => false,
          'message' => 'Something went wrong while deleting the partner.',
          'info' => '',
        ];
      } else {
        $this->db->trans_commit();

        $response = [
          'status' => true,
          'message' => 'Partner has been deleted successfully!',
          'info' => $this->db->affected_rows()
        ];
      }

      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
    }
  }
}
