<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Store extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->module('user');

    $this->load->model('store_model', 'store_m');
    $this->load->model('common_model', 'common_m');

    $this->load->helper(array('form'));
    $this->load->library('form_validation');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect('user/logout');
    }
  }

  // manage stores
  public function manage_stores()
  {
    $data = array(
      'page_data' => array(
        'title' => 'Manage Store',
        'styles' => array(
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/css/lightbox.css',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css'
        ),
        'scripts' => array(
          PATH_BACKEND_CUSTOM_PLUGINS . 'lightbox/js/lightbox.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',

        ),
      ),
      'breadcrumb' => 'Manage Store',
      'view_file' => generate_view_path(__METHOD__),
    );
    // $data['stores'] = $this->store_m->getStores('id', 'DESC');
    $this->load->view('template_backend', $data);
  }

  // upload stores
  public function upload_stores()
  {
    // $this->load->library();
    $data = array(
      'page_data' => array(
        'title' => 'Manage Store',
        'styles' => array(),
        'scripts' => array(
          PATH_BACKEND_CUSTOM_JS . 'admin_store.js'
        ),
      ),
      'breadcrumb' => 'Manage Store',
      'view_file' => 'store/upload_stores',
    );


    $upload_path = ABS_PATH_FILES_UPLOADS;

    if (!is_dir($upload_path)) {
      mkdir($upload_path, 0777, TRUE);
    }

    $uploadConfig['upload_path'] = $upload_path;
    $uploadConfig['allowed_types'] = 'csv|xlsx';
    $uploadConfig['overwrite'] = true;

    $this->load->library('upload', $uploadConfig);

    if ($_FILES) {
      if (!$this->upload->do_upload('uploaded_file')) {
        $this->session->set_flashdata('error_msg', 'Please upload an appropriate file with store details.');
        redirect('admin/store/upload');
      } else {
        $this->load->library('MySpreadsheet');

        $sheetData = $this->myspreadsheet->sheetImport($this->upload->data());

        if (empty($sheetData->getActiveSheet()->toArray())) {
          $this->session->set_flashdata('error_msg', 'Please upload an appropriate file with store details.');
          redirect('admin/store/upload');
        }

        // $newData= [];
        $columns = array_filter($sheetData->getActiveSheet()->toArray()[0]);
        // $columns = array('id','address','pincode','phone','website','lat','lng','is_open','is_delivering','type','email','state_id','city_id','aa','aaa');

        $uploadData = [];

        // echo '<pre>';print_r($sheetData->getActiveSheet()->toArray());echo '</pre>';exit;


        foreach ($sheetData->getWorksheetIterator() as $worksheet) {
          $highestRow = $worksheet->getHighestRow();
          // $highestColumn = $worksheet->getHighestColumn();

          $row = 1;
          $col = 0;

          $validData = true;

          foreach ($columns as $column) {
            if ($worksheet->getCellByColumnAndRow($col, $row)->getValue() !== $column && sizeof($columns) < sizeof($columns)) {
              $validData = false;
              break;
            }

            $col++;
          }

          if ($validData) {
            $row = 2;

            while ($row <= $highestRow) {
              $record = [];
              $col = 1;

              foreach ($columns as $column) {
                if ($column == 'state' || $column == 'city') {
                  $col++;
                  continue;
                }
                $record[$column] = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
                $col++;
              }

              $uploadData[] = $record;

              // new row iterator
              $row++;
            }
          } else {
            break;
          }
        }

        if (sizeof($uploadData) > 0) {
          $storeDataUploaded = $this->store_m->uploadStore($uploadData);
          if ($storeDataUploaded) {
            $this->session->set_flashdata('success_msg', 'Store details have been uploaded successfully.');
            redirect('admin/stores');
          }
        }
        $this->session->set_flashdata('error_msg', 'Something went wrong whlist updating store details.');
        redirect('admin/store/upload');
      }
    }

    $this->load->view('template_backend', $data);
  }

  public function add_new_store()
  {
    $data = array(
      'page_data' => array(
        'title' => 'Add New Store',
        'styles' => array(
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ),
        'scripts' => array(
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',

        ),
      ),
      'breadcrumb' => 'Add Store',
      'view_file' => generate_view_path(__METHOD__),
    );

    if ($this->input->post()) {
      $validation_config = [
        [
          'field' => 'field_name',
          'label' => 'Store Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'field_type',
          'label' => 'Store Type',
          'rules' => 'trim|required|max_length[50]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'field_email',
          'label' => 'Email Address',
          'rules' => 'trim|valid_email|max_length[50]',
        ],
        [
          'field' => 'field_phone',
          'label' => 'Phone Number',
          'rules' => 'trim|min_length[10]|max_length[50]'
        ],
        [
          'field' => 'field_lat',
          'label' => 'Latitude',
          'rules' => 'trim|max_length[45]|decimal',
          'errors' => [
            'decimal' => 'Please enter a valid %s.',
          ],
        ],
        [
          'field' => 'field_lng',
          'label' => 'Longitude',
          'rules' => 'trim|max_length[45]|decimal',
          'errors' => [
            'decimal' => 'Please enter a valid %s.',
          ],
        ],
        [
          'field' => 'field_city',
          'label' => 'City',
          'rules' => 'trim|required|numeric',
        ],
        [
          'field' => 'field_state',
          'label' => 'State',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'field_pincode',
          'label' => 'Pincode',
          'rules' => 'trim|required|numeric|exact_length[6]',
          'errors' => [
            'exact_length' => 'Please enter a valid %s.',
          ],
        ],
        [
          'field' => 'field_address',
          'label' => 'Website',
          'rules' => 'trim|required|max_length[1000]',
        ],
        [
          'field' => 'field_website',
          'label' => 'Website',
          'rules' => 'trim|max_length[100]',
        ],
        [
          'field' => 'field_is_open',
          'label' => 'Is Open',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value.',
          ],

        ],
        [
          'field' => 'field_is_delivering',
          'label' => 'Is Delivering',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value.',
          ],
        ],        [
          'field' => 'field_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value.',
          ],
        ],
      ];

      $this->form_validation->set_rules($validation_config);

      if ($this->form_validation->run() == true) {

        if (!empty($_FILES['field_logo']['name'])) {

          $uploadedFileData = [];

          $upload_path = ABS_PATH_FILES_UPLOADS . "stores/";

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
            ];

            if (in_array($file['type'], $allowedFileMimes)) {
              $file_name = 'store' . '-logo-' . microtime(true);

              $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

              $config['file_name'] = $file_name;

              $this->upload->initialize($config);

              if ($this->upload->do_upload($field)) {
                $uploadedFileData[$field] = $this->upload->data();
              } else {
                $error = strip_tags($this->upload->display_errors());

                $this->session->set_flashdata('error_msg', $error);

                redirect(base_url("admin/store/add-new"));

                break;
              }
            } else {
              $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

              redirect(base_url("admin/store/add-new"));

              break;
            }
          }
        }

        $name = $this->input->post('field_name');
        $type = $this->input->post('field_type');
        $email = $this->input->post('field_email');
        $phone = $this->input->post('field_phone');
        $logo = $uploadedFileData['field_logo']['orig_name'];
        $lat = $this->input->post('field_lat');
        $lng = $this->input->post('field_lng');
        $city = $this->input->post('field_city');
        $state = $this->input->post('field_state');
        $pincode = $this->input->post('field_pincode');
        $website = $this->input->post('field_website');
        $address = $this->input->post('field_address');
        $is_open = is_null($this->input->post('field_is_open')) ? 'no' : 'yes';
        $is_delivering = is_null($this->input->post('field_is_delivering')) ? 'no' : 'yes';
        $status = is_null($this->input->post('field_status')) ? '0' : '1';
        $updated_by = $this->session->userdata('userId');

        $postData = [
          'name' => $name,
          'type' => strtolower($type),
          'email' => $email,
          'phone' => $phone,
          'logo' => $logo,
          'lat' => $lat,
          'lng' => $lng,
          'city_id' => $city,
          'state_id' => $state,
          'pincode' => $pincode,
          'website' => $website,
          'is_open' => $is_open,
          'is_delivering' => $is_delivering,
          'status' => $status,
          'address' => $address,
          'updated_by' => $updated_by,
        ];

        $result = $this->store_m->createStore($postData);


        if ($result == true) {
          $this->session->set_flashdata('success_msg', 'Store has been saved successfully!');
          redirect("admin/stores");
        }
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }
    }

    $data['state_options'] = $this->common_m->getStates();

    $this->load->view('template_backend', $data);
  }

  public function edit_store($id)
  {
    $data = array(
      'page_data' => array(
        'title' => 'Edit Store',
        'styles' => array(
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ),
        'scripts' => array(
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',

        ),
      ),
      'breadcrumb' => 'Edit Store',
      'view_file' => generate_view_path(__METHOD__),
    );

    $data['store'] = $this->store_m->getStore($id);

    if ($this->input->post()) {

      $name = $this->input->post('field_name');
      $type = $this->input->post('field_type');
      $email = $this->input->post('field_email');
      $phone = $this->input->post('field_phone');
      $lat = $this->input->post('field_lat');
      $lng = $this->input->post('field_lng');
      $city = $this->input->post('field_city');
      $state = $this->input->post('field_state');
      $pincode = $this->input->post('field_pincode');
      $website = $this->input->post('field_website');
      $address = $this->input->post('field_address');
      $is_open = is_null($this->input->post('field_is_open')) ? 'no' : 'yes';
      $is_delivering = is_null($this->input->post('field_is_delivering')) ? 'no' : 'yes';
      $status = is_null($this->input->post('field_status')) ? '0' : '1';
      $updated_by = $this->session->userdata('userId');

      $validationConfig = [
        [
          'field' => 'field_name',
          'label' => 'Store Name',
          'rules' => 'trim|required|max_length[100]'
        ],
        [
          'field' => 'field_type',
          'label' => 'Store Type',
          'rules' => 'trim|required|max_length[50]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'field_email',
          'label' => 'Email Address',
          'rules' => 'trim|valid_email|max_length[50]',
        ],
        [
          'field' => 'field_phone',
          'label' => 'Phone Number',
          'rules' => 'trim|min_length[10]|max_length[50]'
        ],
        [
          'field' => 'field_lat',
          'label' => 'Latitude',
          'rules' => 'trim|max_length[45]|decimal',
          'errors' => [
            'decimal' => 'Please enter a valid %s.',
          ],
        ],
        [
          'field' => 'field_lng',
          'label' => 'Longitude',
          'rules' => 'trim|max_length[45]|decimal',
          'errors' => [
            'decimal' => 'Please enter a valid %s.',
          ],
        ],
        [
          'field' => 'field_city',
          'label' => 'City',
          'rules' => 'trim|required|numeric',
        ],
        [
          'field' => 'field_state',
          'label' => 'State',
          'rules' => 'trim|required|numeric'
        ],
        [
          'field' => 'field_pincode',
          'label' => 'Pincode',
          'rules' => 'trim|required|numeric|exact_length[6]',
          'errors' => [
            'exact_length' => 'Please enter a valid %s.',
          ],
        ],
        [
          'field' => 'field_address',
          'label' => 'Website',
          'rules' => 'trim|required|max_length[1000]',
        ],
        [
          'field' => 'field_website',
          'label' => 'Website',
          'rules' => 'trim|max_length[100]',
        ],
        [
          'field' => 'field_is_open',
          'label' => 'Is Open',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value.',
          ],

        ],
        [
          'field' => 'field_is_delivering',
          'label' => 'Is Delivering',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value.',
          ],
        ],
        [
          'field' => 'field_status',
          'label' => 'Status',
          'rules' => 'trim|in_list[0,1]',
          'errors' => [
            'in_list' => 'Invalid value.',
          ],
        ],
      ];


      $this->form_validation->set_rules($validationConfig);

      if ($this->form_validation->run() == true) {
        $postData = [
          'name' => $name,
          'type' => strtolower($type),
          'email' => $email,
          'phone' => $phone,
          'lat' => $lat,
          'lng' => $lng,
          'city_id' => $city,
          'state_id' => $state,
          'pincode' => $pincode,
          'website' => $website,
          'is_open' => $is_open,
          'is_delivering' => $is_delivering,
          'status' => $status,
          'address' => $address,
          'updated_by' => $updated_by,

        ];

        if (!empty($_FILES['field_logo']['name'])) {
          $uploadedFileData = [];

          $upload_path = ABS_PATH_FILES_UPLOADS . "stores/";

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
              ];

              if (in_array($file['type'], $allowedFileMimes)) {
                $file_name = 'store' . '-logo-' . microtime(true);

                $file_name = strtr($file_name, [' ' => '_', '.' => '_']);

                $config['file_name'] = $file_name;

                $this->upload->initialize($config);

                if ($this->upload->do_upload($field)) {
                  $uploadedFileData[$field] = $this->upload->data();

                  $postData['logo'] = $uploadedFileData['field_logo']['orig_name'];
                } else {
                  $error = strip_tags($this->upload->display_errors());

                  $this->session->set_flashdata('error_msg', $error);

                  return redirect(base_url("admin/store/edit/$id"));

                  break;
                }
              } else {
                $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG or PNG images allowed.');

                return redirect(base_url("admin/store/edit/$id"));
              }
            }
          }
        }

        $result = $this->store_m->updateStore($postData, $id);

        if ($result == true) {
          $this->session->set_flashdata('success_msg', 'Store has been updated successfully!');
          redirect("admin/stores");
        }
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }
    }
    $data['state_options'] = $this->common_m->getStates();

    $this->load->view('template_backend', $data);
  }

  //delete banner
  public function delete_store($id)
  {
    $output = [];
    if ($this->input->server('REQUEST_METHOD') == 'POST') {
      $result = $this->store_m->deleteStore($id);

      if ($result == true) {
        $output = [
          'status' => true,
          'message' => 'Store deleted successfully!',
          'info' => '',
        ];

        return $this->output
          ->set_content_type('application/json')
          ->set_output(json_encode($output));
      }
    }

    $output = [
      'status' => false,
      'message' => 'Failed to delete store!',
      'info' => '',
    ];

    return $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode($output));
  }

  public function download_stores()
  {
    $storesData = $this->store_m->getStoresForDownload();

    $sheetsData = [
      'sheets' => [
        [
          'title' => 'Store',
          'columns' => [
            'id',
            'name',
            'state',
            'city',
            'address',
            'pincode',
            'phone',
            'website',
            'logo',
            'lat',
            'lng',
            'is_open',
            'is_delivering',
            'type',
            'email',
            'state_id',
            'city_id',
            'status'
          ],
          'data' => $storesData,
        ]
      ],
      'fileName' => 'new_store_download',
    ];

    $this->load->library('MySpreadsheet');

    $this->myspreadsheet->sheetExport($sheetsData);
  }

  // ajax call
  public function store_list()
  {
    if ($this->input->is_ajax_request()) {
      $postData = $this->input->post();

      $output = $this->store_m->getStoreList($postData);

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }
}
