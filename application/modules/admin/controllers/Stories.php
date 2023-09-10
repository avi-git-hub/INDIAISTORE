<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Stories extends MX_Controller
{
    public function __construct()
  {
    parent::__construct();
    $this->load->module('user');

    $this->load->model('admin_model');
    $this->load->model('stories_model', 'story_m');

    $this->load->helper('form');
    $this->load->library('form_validation');

    // logout if not logged in
    if (!$this->user->isUserLoggedIn()) {
      redirect('user/logout');
    }
  }

  public function manage_stories()
  {
    $data = array(
      'page_data' => array(
        'title' => 'Manage Stories',
        'styles' => array(
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/css/dataTables.bootstrap4.min.css',
        ),
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'datatables/jquery.dataTables.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'datatables-bs4/js/dataTables.bootstrap4.min.js',
        ],
      ),
      'breadcrumb' => 'Manage Stories',
      'view_file' => generate_view_path(__METHOD__),
    );

   $data['stories'] = $this->story_m->get_stories(null, 'created_at', 'DESC');

    $this->load->view('template_backend', $data);
  }

  public function add_new_stories()
  {
    if ($this->input->method() == 'post') {

      // echo '<pre>';
      // print_r($this->input->post());
      // echo '</pre>';
      $this->form_validation->set_rules(
        'story_name',
        'Story Name',
        'trim|required|min_length[1]|max_length[100]'
      );

      $this->form_validation->set_rules(
        'story_slug',
        'Story Slug',
        'trim|required|min_length[1]|max_length[100]'
      );

      $this->form_validation->set_rules(
        'story_status',
        'Story Status',
        'trim|required|numeric|less_than[2]',
        [
          'less_than' => 'Please select a s%s',
          'numeric' => 'Please select a s%s'
        ]
      );
      
      if (empty($_FILES['story_image']['name'])) {
        $this->form_validation->set_rules(
          'story_image',
          'Story Image',
          'required'
        );
      }

    

      if ($this->form_validation->run() == TRUE) {

    
  
        $story_name = $this->input->post('story_name');
        $story_slug = slugify($this->input->post('story_slug'));
        $story_status = is_null($this->input->post('story_status')) ? '0' : '1';

        
    
        $insert_data = [
          'story_name' => $story_name,
          'story_slug' => $story_slug,
          'status' => $story_status,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];
      

   


        $uploadedFileData = [];

        $upload_path = ABS_PATH_FILES_UPLOADS . "stories/$story->story_slug/";

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
            $fileName = 'story_' . microtime(true);
            $fileName = strtr($fileName, [' ' => '_', '.' => '_']);

            if ($field == 'story_image') {
              $fileName .= '_m';
            }

            $config['file_name'] = $fileName; // name of the file;

            $this->upload->initialize($config);

            if ($this->upload->do_upload($field)) {
              $uploadedFileData[$field] = $this->upload->data();
            } else {
              $error = strip_tags($this->upload->display_errors());

              $this->session->set_flashdata('error_msg', $error);

              redirect("admin/stories/add-new");

              break;
            }
          } else {
            $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG,PNG or GIF images allowed.');

            redirect("admin/stories/add-new");

            break;
          }
        }

        if (sizeof($uploadedFileData) > 0) {
          $insert_data['story_image'] = $uploadedFileData['story_image']['orig_name'];
        }

        $data_inserted = insert_method('stories', $insert_data);

        if ($data_inserted) {
          $this->session->set_flashdata('success_msg', 'Story has been saved successfully!');

          redirect(base_url('admin/stories'));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }
      }
    }

    $data = [
      'page_data' => [
        'title' => 'Add New Banner',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'moment/moment.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Add New Banner',
      'view_file' => generate_view_path(__METHOD__),
    ];

  
      $this->load->view('template_backend', $data);
  }

  public function edit_stories($story_id = null)
  {
      if (is_null($story_id)) {
        return redirect(base_url('admin/stories'));
      }

    $data = [
      'page_data' => [
        'title' => 'Edit Story',
        'styles' => [
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        ],
        'scripts' => [
          PATH_BACKEND_THEME_PLUGINS . 'moment/moment.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bs-custom-file-input/bs-custom-file-input.min.js',
          PATH_BACKEND_THEME_PLUGINS . 'bootstrap-switch/js/bootstrap-switch.min.js',
        ],
      ],
      'breadcrumb' => 'Add New Banner',
      'view_file' => generate_view_path(__METHOD__),
    ];

     $data['story_slug'] = $this->story_m->get_story(['id' => $story_id]);

     if (!$data['story_slug']) {
      $this->session->set_flashdata('error_msg', 'story not found.');

      return redirect(base_url('admin/stories'));
    }



    if ($this->input->method() == 'post') {


      $this->form_validation->set_rules(
        'story_name',
        'Story Name',
        'trim|required|min_length[1]|max_length[100]'
      );

      $this->form_validation->set_rules(
        'story_slug',
        'Story Slug',
        'trim|required|min_length[1]|max_length[100]'
      );

      $this->form_validation->set_rules(
        'story_status',
        'Story Status',
        'trim|numeric|less_than[2]',
        [
          'required' => 'Please select a %s',
        ]
      );
      
      // if (empty($_FILES['story_image']['name'])) {
      //   $this->form_validation->set_rules(
      //     'story_image',
      //     'Story Image',
      //     'required'
      //   );
      // }
    
      
      
    if ($this->form_validation->run() == TRUE) {

      $story_name = $this->input->post('story_name');
      $story_slug = slugify($this->input->post('story_slug'));
     $story_status_st = is_null($this->input->post('story_status')) ? '0' : '1';
   
      echo "Updated".$story_name."=====".$story_slug."======".$story_status_st;
     
      $update_data = [
        'story_name' => $story_name,
        'story_slug' => $story_slug,
        'status' => $story_status_st,
        'updated_at' => date('Y-m-d H:i:s'),
        'updated_by' => $this->session->userdata('userId'),
      ];


    
    
      if (!empty($_FILES['story_image']['name'])) {

      $uploadedFileData = [];

      $upload_path = ABS_PATH_FILES_UPLOADS . "stories/$story->story_slug/";

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
          $fileName = 'story_' . microtime(true);
          $fileName = strtr($fileName, [' ' => '_', '.' => '_']);

          if ($field == 'story_image') {
            $fileName .= '_m';
          }

          $config['file_name'] = $fileName; // name of the file;

          $this->upload->initialize($config);

          if ($this->upload->do_upload($field)) {
            $uploadedFileData[$field] = $this->upload->data();
          } else {
            $error = strip_tags($this->upload->display_errors());

            $this->session->set_flashdata('error_msg', $error);

            redirect("/admin/stories/edit/$story_id");

            break;
          }
        } else {
          $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG,PNG or GIF images allowed.');

          redirect("/admin/stories/edit/$story_id");

          break;
        }
      }
   

      if (sizeof($uploadedFileData) > 0) {
        $update_data['story_image'] = $uploadedFileData['story_image']['orig_name'];
      }


    }

      $data_updated = update_method('stories', $update_data, ['id' => $story_id]);


     


      if ($data_updated) {
        $this->session->set_flashdata('success_msg', 'Story Position has been updated!');

        // CODE:to redirect to same page use this - avoiding resubmission
        // $this->form_validation->clear_post_data(); //custom form validation library created to clear input fields.
        // header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 ); Post/redirect/get
        // exit(); 

        redirect(base_url('admin/stories'));
      } else {
        $this->session->set_flashdata('error_msg', 'Something went wrong!');
      }

    }

  }

    
    $this->load->view('template_backend', $data);

  }


  public function edit_story_details($storyid, $story_id){


    $story_details = select_where_method('stories', ['id' => $storyid]);
    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'story_name',
          'label' => 'Story Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'story_status',
          'label' => 'Story Status',
          'rules' => 'trim|numeric|less_than[2]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'story_name_1',
          'label' => 'Story Position',
          'rules' => 'trim|required|numeric',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'story_alt_text',
          'label' => 'Story Alternate Text',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'story_classes',
          'label' => 'Story Classess',
          'rules' => 'trim|max_length[100]'
        ],
        [
          'field' => 'story_start_date',
          'label' => 'Story Start',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        ],
        [
          'field' => 'story_end_date',
          'label' => 'Story End Date',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        ]
      ];


      $story_name = $this->input->post('story_name');
      $story_start_date = (empty($this->input->post('story_start_date'))) ? NULL : $this->input->post('story_start_date');
      $story_end_date = (empty($this->input->post('story_end_date'))) ? NULL : $this->input->post('story_end_date');
      $story_position = $this->input->post('story_name_1');
      $story_alt_text = $this->input->post('story_alt_text');
      $story_classes = $this->input->post('story_classes');
      $story_status = is_null($this->input->post('story_status')) ? '0' : '1';

      $this->form_validation->set_rules($validation_config);


      if ($story_end_date) {
        $this->form_validation->set_rules(
          'story_start_date',
          'Story Start Date',
          'trim|required'
        );
      }

      if ($this->form_validation->run() == TRUE) {
        if ($story_start_date && $story_end_date) {
          if (strtotime($story_start_date) <= time()) {
            $this->session->set_flashdata('error_msg', 'Banner Start Date should be a future date');

            redirect("admin/stories/$story_id/add-new");
          }

          if (strtotime($story_start_date) >= strtotime($story_end_date)) {
            $this->session->set_flashdata('error_msg', 'Banner End Date should be greater than Banner Start Date');

            redirect("admin/stories/$story_id/add-new");
          }
        }

        $display_order_data = select_where_order_by_method('story_details', ['story_id' => $story_id], 'display_order', 'DESC', 1);

        $display_order = $display_order_data->display_order;

        settype($display_order, "integer");

        $update_data = [
          'story_id' => trim($story_position),
          'story_name' => $story_name,
          'display_order' => ++$display_order,
          'alt_text' => $story_alt_text,
          'status' => $story_status,
          'additional_classes' => $story_classes,
          'start_date' => !empty($story_start_date) ? date("Y-m-d H:i:s", strtotime($story_start_date)) : NULL,
          'end_date' => !empty($story_end_date) ? date("Y-m-d H:i:s", strtotime($story_end_date)) : NULL,
          'updated_at' => date('Y-m-d H:i:s'),
          'updated_by' => $this->session->userdata('userId'),
        ];

        if ($this->input->post('story_classes')) {
          $update_data['additional_classes'] = $story_classes;
        }

        if (!empty($_FILES['story_image_mobile']['name']) || !empty($_FILES['story_image_desktop']['name'])) {
          $uploadedFileData = [];
        
          $upload_path = ABS_PATH_FILES_UPLOADS . "stories/$story_details->story_slug/";
        
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
                $fileName = 'stories_' . microtime(true);
                $fileName = strtr($fileName, [' ' => '_', '.' => '_']);
        
                if ($field == 'story_mobile_image') {
                  $fileName .= '_m';
                }
        
                $config['file_name'] = $fileName; // name of the file;
        
                $this->upload->initialize($config);
        
                if ($this->upload->do_upload($field)) {
                  $uploadedFileData[$field] = $this->upload->data();
        
                  if ($field == 'story_image_mobile') {
                    $update_data['story_mobile_image'] = $uploadedFileData['story_image_mobile']['orig_name'];
                  } else {
                    $update_data['story_desktop_image'] = $uploadedFileData['story_image_desktop']['orig_name'];
                  }
                } else {
                  $error = strip_tags($this->upload->display_errors());
        
                  $this->session->set_flashdata('error_msg', $error);
        
                  return redirect("admin/stories/$storyid/edit/$story_id");
        
                  break;
                }
              } else {
                $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG,PNG or GIF images allowed.');
        
                return redirect("admin/stories/$storyid/edit/$story_id");
              }
            }
          }
        
        } 

        update_method('story_details', $update_data, ['id' => $story_id]);

        if ($this->db->affected_rows() > 0) {
          $this->session->set_flashdata('success_msg', 'Story details has been updated successfully!');

          redirect(base_url("admin/stories/$storyid"));
        } else {
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }

      

      }
    }

    $data = [
      'page_data' => [
        'title' => 'Edit Story',
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
      'breadcrumb' => 'Edit Story Details',
      'view_file' => generate_view_path(__METHOD__),
    ];

    
    $data['story_id'] = $storyid;
    $data['story_details_id'] = $story_id;
    $data['storydetails'] = multi_select_query_where('story_details', ['id' => $story_id]);
    $data['snapshots'] = $this->story_m->get_snapshots_details(null, 'story_name', 'ASC');
    $data['main_story_details'] = multi_select_query_where('stories', ['id' => $storyid]);


    $this->load->view('template_backend', $data);

  }
  public function manage_story_details($story_id){
    if (is_null($story_id)) {
      redirect(base_url('admin/stories'));
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

    $data['story_id'] = $story_id;
    $data['story_slug'] = select_where_method('stories', ['id' => $story_id]);
    $data['storydetails'] = multi_select_query_where('story_details', ['story_id' => $story_id]);

    $this->load->view('template_backend', $data);
  }

  public function add_new_story($story_id)
  {
    $story_details = select_where_method('stories', ['id' => $story_id]);
    if ($this->input->method() == 'post') {
      $validation_config = [
        [
          'field' => 'story_name',
          'label' => 'Story Name',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'story_status',
          'label' => 'Story Status',
          'rules' => 'trim|numeric|less_than[2]',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'story_name_1',
          'label' => 'Story Position',
          'rules' => 'trim|required|numeric',
          'errors' => [
            'required' => 'Please select a %s.',
          ],
        ],
        [
          'field' => 'story_alt_text',
          'label' => 'Story Alternate Text',
          'rules' => 'trim|required|min_length[1]|max_length[100]'
        ],
        [
          'field' => 'story_classes',
          'label' => 'Story Classess',
          'rules' => 'trim|max_length[100]'
        ],
        [
          'field' => 'story_start_date',
          'label' => 'Story Start',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        ],
        [
          'field' => 'story_end_date',
          'label' => 'Story End Date',
          'rules' => 'trim|regex_match[/^([0-9]{4})([\-])([0-9]{2})([\-])([0-9]{2})[\ ]([0-9]{2})[\:]([0-9]{2})[\:]([0-9]{2})$/]'
        ]
      ];


      $story_name = $this->input->post('story_name');
      $story_start_date = (empty($this->input->post('story_start_date'))) ? NULL : $this->input->post('story_start_date');
      $story_end_date = (empty($this->input->post('story_end_date'))) ? NULL : $this->input->post('story_end_date');
      $story_position = $this->input->post('story_name_1');
      $story_alt_text = $this->input->post('story_alt_text');
      $story_classes = $this->input->post('story_classes');
      $story_status = is_null($this->input->post('story_status')) ? '0' : '1';

      $this->form_validation->set_rules($validation_config);
        
      // if (!is_null($this->input->post('story_type'))) {
      if (empty($_FILES['story_image_mobile']['name'])) {
        $this->form_validation->set_rules(
          'story_image_mobile',
          'Story Mobile Image',
          'required'
        );
      }

      if (empty($_FILES['story_image_desktop']['name'])) {
        $this->form_validation->set_rules(
          'story_image_desktop',
          'Story Desktop Image',
          'required'
        );
      }

      if ($story_end_date) {
        $this->form_validation->set_rules(
          'story_start_date',
          'Story Start Date',
          'trim|required'
        );
      }

      if ($this->form_validation->run() == TRUE) {
        if ($story_start_date && $story_end_date) {
          if (strtotime($story_start_date) <= time()) {
            $this->session->set_flashdata('error_msg', 'Banner Start Date should be a future date');

            redirect("admin/stories/$story_id/add-new");
          }

          if (strtotime($story_start_date) >= strtotime($story_end_date)) {
            $this->session->set_flashdata('error_msg', 'Banner End Date should be greater than Banner Start Date');

            redirect("admin/stories/$story_id/add-new");
          }
        }

        $display_order_data = select_where_order_by_method('story_details', ['story_id' => $story_id], 'display_order', 'DESC', 1);

        $display_order = $display_order_data->display_order;

        settype($display_order, "integer");

        $insert_data = [
          'story_id' => trim($story_position),
          'story_name' => $story_name,
          'display_order' => ++$display_order,
          'alt_text' => $story_alt_text,
          'status' => $story_status,
          'additional_classes' => $story_classes,
          'start_date' => !empty($story_start_date) ? date("Y-m-d H:i:s", strtotime($story_start_date)) : NULL,
          'end_date' => !empty($story_end_date) ? date("Y-m-d H:i:s", strtotime($story_end_date)) : NULL,
          'created_at' => date('Y-m-d H:i:s'),
          'created_by' => $this->session->userdata('userId'),
        ];

        if ($this->input->post('story_classes')) {
          $insert_data['additional_classes'] = $story_classes;
        }

        $uploadedFileData = [];

        $upload_path = ABS_PATH_FILES_UPLOADS . "stories/$story_details->story_slug/";

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
            $fileName = 'story_' . microtime(true);
            $fileName = strtr($fileName, [' ' => '_', '.' => '_']);

            if ($field == 'story_image_mobile') {
              $fileName .= '_m';
            }

            $config['file_name'] = $fileName; // name of the file;

            $this->upload->initialize($config);

            if ($this->upload->do_upload($field)) {
              $uploadedFileData[$field] = $this->upload->data();
            } else {
              $error = strip_tags($this->upload->display_errors());

              $this->session->set_flashdata('error_msg', $error);

              redirect("admin/stories/$story_id/add-new");

              break;
            }
          } else {
            $this->session->set_flashdata('error_msg', 'Invalid file type. Only JPG,PNG or GIF images allowed.');

            redirect("admin/stories/$story_id/add-new");

            break;
          }
        }

        if (sizeof($uploadedFileData) > 0) {
          $insert_data['story_mobile_image'] = $uploadedFileData['story_image_mobile']['orig_name'];
          $insert_data['story_desktop_image'] = $uploadedFileData['story_image_desktop']['orig_name'];
        }
        /* } else {
          $insert_data['mobile_image'] = '';
          $insert_data['desktop_image'] = '';
        } */

        $insertId = $this->db->insert('story_details', $insert_data);

        if ($insertId) {
          $this->session->set_flashdata('success_msg', 'Banner has been uploaded successfully!');

          $this->session->unset_userdata('story_id');

          redirect("admin/stories/$story_id");
        } else {
        
          $this->session->set_flashdata('error_msg', 'Something went wrong!');
        }

      

      }
    }
    $data = [
      'page_data' => [
        'title' => 'Add New Story',
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

    
    $data['story_id'] = $story_id;
    $data['story_details_data'] = $story_details;
    $data['snapshots'] = $this->story_m->get_snapshots_details(null, 'story_name', 'ASC');

  
      $this->load->view('template_backend', $data);
  }

  public function edit_display_order($story_id)
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

        if (update_method('story_details', $update_data, ['id' => $banner_id])) {
          $success = true;
        }
      }

      if ($success) {
        $msg = 'Story display order updated successfully!';

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
        'title' => 'Edit Story Display Order',
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

    $data['story_id'] = $story_id;
    $data['story_position'] = select_where_method('stories', ['id' => $story_id]);
    $data['story_details'] = $this->story_m->get_story_data(['story_id' => $story_id], 'display_order', 'ASC');

    $this->load->view('template_backend', $data);
  }



   // banner position - delete
   public function delete_story($story_id)
   {
     if ($this->input->method() == 'post') {
       $this->db->trans_start();
 
       $story_positions_deleted = delete_method('stories', ['id' => $story_id]);
 
       if ($story_positions_deleted) {
         $story_ids_for_position = multi_select_query_where('story_details', ['story_id' => $story_id]);
 
         if (sizeof($story_ids_for_position) > 0) {
           $story_for_deleted_position_deleted = delete_method('story_details', ['story_id' => $story_id]);
 
           $this->db->trans_complete();
 
           if ($story_for_deleted_position_deleted) {
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

  public function delete_story_details($story_pos_id, $story_id = null)
  {
    $output = [];

    if ($this->input->method() == 'post') {
      $result = delete_method('story_details', ['id' => $story_id]);

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


}
?>