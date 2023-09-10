<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends MX_Controller
{
  public $master_db;

  public function __construct()
  {
    parent::__construct();

    $this->db = $this->load->database('slave', TRUE); //read only access
    $this->master_db = $this->load->database('master', TRUE); //read-write access

    $this->load->model('site_model');
    $this->load->model('common_model');
    $this->load->model('components_model', 'compo_m');
    $this->load->model('main_model', 'reseller_model');
  }

  public function cleanTime()
  {

    $this->load->driver('cache');

    if ($this->cache->memcached->is_supported()) {
      print_r($this->cache->memcached->clean());
      echo "all cleared";
      exit;
    }
  }

  public function product_details()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => 'Product Details',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'product.min.css?v=' . get_app_version(),
        ),
        'scripts' => array(
          PATH_FRONTEND_CUSTOM_JS . 'product-details.js?v=' . get_app_version(),
        ),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  public function exampleExport()
  {
    $sheetsData = [
      'sheets' => [
        [
          'title' => 'Worksheet One',
          'columns' => [
            'ID',
            'Name',
            'Link',
          ],
          'data' => [
            [
              'id' => 1,
              'name' => 'aaa',
              'link' => 'https://www.aaa.az/',
            ],
            [
              'id' => 2,
              'name' => 'bbb',
              'link' => 'https://www.bbb.az/',
            ],
            [
              'id' => 3,
              'name' => 'ccc',
              'link' => 'https://www.ccc.az/',
            ],
          ],
        ],
        [
          'title' => 'Worksheet Two',
          'columns' => [
            'ID',
            'Name',
            'Link',
          ],
          'data' => [
            [
              'id' => 4,
              'name' => 'ddd',
              'link' => 'https://www.ddd.az/',
            ],
            [
              'id' => 5,
              'name' => 'eee',
              'link' => 'https://www.eee.az/',
            ],
          ],
        ],
      ],
      'fileName' => 'Test',
    ];

    $this->load->library('MySpreadsheet');

    $this->myspreadsheet->sheetExport($sheetsData);
  }

  public function exampleImport()
  {
    $uploadConfig['upload_path'] = FCPATH . 'files/uploads/';
    $uploadConfig['allowed_types'] = 'csv|xlsx';
    $uploadConfig['overwrite'] = true;

    $this->load->library('upload', $uploadConfig);

    if ($_FILES) {
      if (!$this->upload->do_upload('fileUploaded')) {
        var_dump($this->upload->display_errors());
      } else {
        $this->load->library('MySpreadsheet');

        $uploadedData = $this->myspreadsheet->sheetImport($this->upload->data());

        // echo '<pre>';
        // print_r($uploadedData);
        // exit;
      }
    }

    // if ($_FILES) {
    //     $this->load->library('MySpreadsheet');

    //     $this->myspreadsheet->sheetImport($_FILES);
    // }

    $this->load->helper('form');

    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Example Import | dev CI',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => 'exampleImport',
    ];

    $this->load->view('template_frontend', $data);
  }

  //about us 
  public function about_us()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => 'About Us',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }
  //privacy policy
  public function privacy_policy()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => 'Privacy Policy',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  //apple 4k tv
  public function apple_tv_4k()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => 'Apple 4k TV',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'site/apple_tv_4k/ac-globalfooter.built.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/apple_tv_4k/localeswitcher.built.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/apple_tv_4k/main.built.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/apple_tv_4k/new_style.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/apple_tv_4k/overview.built.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/apple_tv_4k/overview.built-responsive.css?v=' . get_app_version(),

        ),
        'scripts' => array(
          PATH_FRONTEND_CUSTOM_JS . 'site/apple_tv_4k/auto-init.js?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_JS . 'site/apple_tv_4k/localeswitcher.built.js?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_JS . 'site/apple_tv_4k/main.built.js?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_JS . 'site/apple_tv_4k/head.built.js?v=' . get_app_version(),
        ),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  //consumer loan offer
  public function consumer_loan_offers()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => 'iPhone Consumer Loan & Assured Buyback Program',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  //HSBC Offers
  public function hsbc_offers()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Upgrade your iPhone 12 | Apple Store India',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    // product data
    $products = memcached_get("hsbc-products");

    if (!$products) {
      $products = $this->db
        ->select('product')
        ->distinct()
        ->order_by('product')
        ->get('emi_hsbc')
        ->result_array();

      $products = array_column($products, 'product');

      memcached_save("hsbc-products", $products, 3600);
    }

    $data['products'] = $products;

    $this->load->view('template_frontend', $data);
  }

  public function hsbc_offers_get_emi_pricing()
  {
    if ($this->input->method() == 'post') {
      $product = $this->input->post('selected_product');
      $storage = $this->input->post('selected_storage');
      $color = $this->input->post('selected_color');

      // product data
      $hsbc_offers = memcached_get("hsbc-offers-$product-$storage-$color");

      if (!$hsbc_offers) {
        $hsbc_offers = select_where_method('emi_hsbc', [
          'product' => $product,
          'storage' => $storage,
          'color' => $color,
        ]);

        memcached_save("hsbc-offers-$product-$storage-$color", $hsbc_offers, 3600);
      }

      if (empty($hsbc_offers)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching HSBC offer details!',
          'data' => [],
        ];
      } else {
        $hsbc_offers->mrp = currency_format($hsbc_offers->mrp, 'INR');
        $hsbc_offers->loan_amount = currency_format($hsbc_offers->loan_amount, 'INR');
        $hsbc_offers->deferred_payment_after_24_months = currency_format($hsbc_offers->deferred_payment_after_24_months, 'INR');
        $hsbc_offers->effective_monthly_cost = currency_format(round($hsbc_offers->effective_monthly_cost), 'INR');

        $output = [
          'status' => true,
          'message' => 'HSBC offer details fetched successfully!',
          'data' => $hsbc_offers,
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }
  }

  public function hsbc_offers_get_storage_for_product()
  {
    if ($this->input->method() == 'post') {
      $product = $this->input->post('selected_product');

      $storage_capacity = memcached_get("hsbc-storage-for-$product");

      if (!$storage_capacity) {
        $storage_capacity = $this->db
          ->select('storage')
          ->distinct()
          ->where('product', $product)
          ->get('emi_hsbc')
          ->result_array();

        memcached_save("hsbc-storage-for-$product", $storage_capacity, 3600);
      }

      if (empty($storage_capacity)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching storage for the product of HSBC offer!',
          'data' => [],
        ];
      } else {
        $storage = array_column($storage_capacity, 'storage');

        $output = [
          'status' => true,
          'message' => 'Storage fetched successfully for the product of HSBC offer!',
          'data' => $storage,
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  public function hsbc_offers_get_colors_for_product_storage()
  {
    if ($this->input->method() == 'post') {
      $product = $this->input->post('selected_product');
      $storage = $this->input->post('selected_storage');

      $colors = memcached_get("hsbc-colors-for-$product-$storage");

      if (!$colors) {
        $colors = $this->db
          ->select('color')
          ->distinct()
          ->where([
            'product' => $product,
            'storage' => $storage,
          ])
          ->get('emi_hsbc')
          ->result_array();

        memcached_save("hsbc-colors-for-$product-$storage", $colors, 3600);
      }

      if (empty($colors)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching colors for the product storage of HSBC offer!',
          'data' => [],
        ];
      } else {
        $colors = array_column($colors, 'color');

        $output = [
          'status' => true,
          'message' => 'Colors fetched successfully for the product storage of HSBC offer!',
          'data' => $colors,
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  public function enterprise()
  {
    if ($this->input->method() == 'post') {
      $email = $this->input->post('email');
      $name = $this->input->post('name');
      $orgName = $this->input->post('orgName');
      $city = $this->input->post('city');
      $phone = $this->input->post('phone');
      $num_of_emp = $this->input->post('num_of_emp');
      $selected_model = $this->input->post('selected_model');

      $config = [
        'protocol'  => 'smtp',
        'smtp_host' => 'email-smtp.ap-south-1.amazonaws.com',
        'smtp_port' => '587',
        'smtp_crypto' => 'tls',
        'smtp_user' => 'AKIAW3ZSW3G46TBPUSG7',
        'smtp_pass' => 'BNIl5IkSA4oDrajy5iXmRLxE/GDUkRRFe6SqWJZYLiRB',
        'mailtype'  => 'html',
        'charset'   => 'iso-8859-1'
      ];

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->set_mailtype("html");

      $markup1 = '<html>
        <head>
          <title>Dispatch</title>
        </head>
        <body>
          <p><h1><strong>You have got a new lead.</strong></h1></p>
          <p><strong>&nbsp;</strong></p>
          <p>Hi Team,</p>
          <p>&nbsp;</p>
          <p>' . $name . ' from ' . $orgName . ' has shown interest in Apple Business Solutions. Please find below complete details of the prospect to get in touch with them.</p>
          <p>&nbsp;</p>
          <p>Email: ' . $email . '</p>
          <p>Name: ' . $name . '</p>
          <p>Organization Name: ' . $orgName . '</p>
          <p>City: ' . $city . '</p>
          <p>Mobile Number: +91 ' . $phone . '</p>
          <p>Number of Employees: ' . $num_of_emp . '</p>
          <p>Selected Model: ' . $selected_model . '</p>
        </body>
      </html>';
      //<p>Product of Interest:&nbsp; ' . $product_of_interest . '</p>

      $subject = "A new lead awaits your response.";
      $message = $markup1;

      $this->email->from('info@Indiaistore.com');
      $this->email->to('appleindiapple@gmail.com'); //$this->email->to('harshad.kulkarni08@gmail.com');
      $this->email->bcc('rakesh.purohit@isobar.com');
      $this->email->subject($subject);
      $this->email->message($message);

      if ($this->email->send()) {
        $this->email->set_newline("\r\n");
        $this->email->set_mailtype("html");
        $this->email->from('info@indiaistore.com', 'indiaistore');
        $this->email->to($email);

        $this->email->subject('Thank you for contacting us.');

        $markup2 = '<html>
          <body>
            <p><h1><strong>We are looking forward to doing business with you.</strong></h1></p>
            <p>Dear ' . $name . ',</p>
            <p>Thank you for showing your interest in Apple Business Solutions. We will soon be in touch with you to understand your requirements and plan recommendations that empower your employees and accelerate your business.</p>
            <p><br />Warm Regards,<br />IndiaiStore Team</p>
          </body>
        </html>';

        $message = $markup2;

        $this->email->message($message);

        if ($this->email->send()) {
          $output = [
            'status' => true,
          ];
        } else {
          $output = [
            'status' => false,
            'info' => $this->email->print_debugger(),
          ];
          //print_r($this->email->print_debugger(), true); die();
        }
      } else {
        $output = [
          'status' => false,
          'info' => $this->email->print_debugger(),
        ];
      }

      $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));

      return false;
    }

    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => 'AppleCare for Enterprise',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $data['states'] = $this->reseller_model->getStates();

    $this->load->view('template_frontend', $data);
  }

  //get reseller cities
  public function getCities() {

    $postData = array(
        'state' => $this->input->post('state'),
    );

    $data = $this->reseller_model->getCities($postData);

    echo json_encode($data);
} 

public function getResellers() {

    $postData = array(
        'city' => $this->input->post('city'),
    );

    $data = $this->reseller_model->getResellers($postData);

    echo json_encode($data);
}

  //Trade in page
  public function trade_in()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Trade In',
        'styles' => [
          PATH_FRONTEND_CUSTOM_CSS . 'home.min.css?v=' . get_app_version(),
        ],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $data['banner_trade_in_hero'] = memcached_get('banner-trade-in-page-hero');

    if (!$data['banner_trade_in_hero']) {
      $data['banner_trade_in_hero'] = $this->common_model->getBannersByPositionSlug('banner-trade-in-page-hero');

      memcached_save('banner-banner-trade-in-page-hero', $data['banner_trade_in_hero'], 3600);
    }

        //premium partners
        $data['premium_partners'] = memcached_get('home-page-premium-partners');

        if (!$data['premium_partners']) {
          $data['premium_partners'] = $this->home_m->getPremiumPartners();
    
          memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
        }
    


    $this->load->view('template_frontend', $data);
  }

  //404 page
  public function error_404()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => 'Trade In',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->output->set_status_header('404');
    $this->load->view('template_frontend', $data);
  }

  //accessories
  public function accessories()
  {
    $this->load->model('accessory_model');
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    // $accessories = $this->accessory_model->getAccessories();

    // $data['categories'] = $accessories[0];
    // $data['accessories'] = $accessories[1];
    // $data['filters'] = $accessories[2];



    $data['categories'] = $this->db->select('cat_name,cat_id')->order_by('display_order')->get('categories')->result();
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    // exit;

    $this->load->view('template_frontend', $data);
  }

  public function imac_2021()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }
  public function macbook_air_39cm()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }
  public function ipad_pro_2021()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }

  public function bts_campaign()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
            PATH_FRONTEND_CUSTOM_JS . 'components/store_locator.js?v=' . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $this->load->model('home_model', 'home_m');


    $data['bts_campaign_hero'] = memcached_get('banner-bts-campaign-hero');

    if (!$data['bts_campaign_hero']) {
      $data['bts_campaign_hero'] = $this->common_model->getBannersByPositionSlug('bts-campaign-hero');

      memcached_save('banner-bts-campaign-hero', $data['bts_campaign_hero'], 3600);
    }

    //premium partners
    $data['premium_partners'] = memcached_get('home-page-premium-partners');

    if (!$data['premium_partners']) {
      $data['premium_partners'] = $this->home_m->getPremiumPartners();

      memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
    }
      
      $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $this->load->view('template_frontend', $data);
  }

  public function apple_care()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];


    $products = memcached_get("apple-care-products");

    if (!$products) {
      $products = $this->db
        ->select('product_name')
        ->distinct()
        ->get('apple_care')
        ->result();

      memcached_save("apple-care-products", $products, 3600);
    }

    $data['products'] = $products;

    // $data['products'] = $this->db->select('DISTINCT(product_name) as product_name')->group_by('product_name')->get('apple_care')->result();
    $this->load->view('template_frontend', $data);
  }

  public function apple_care_get_storage_for_product()
  {
    if ($this->input->method() == 'post') {
      $product = $this->input->post('selected_product');

      $storage_capacity = memcached_get("apple-care-storage-for-$product");

      if (!$storage_capacity) {
        $storage_capacity = $this->db
          ->select('storage')
          ->distinct()
          ->where('product_name', $product)
          ->get('apple_care')
          ->result();

        memcached_save("apple-care-for-$product", $storage_capacity, 3600);
      }

      if (empty($storage_capacity)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching storage for the product of Apple Care!',
          'data' => [],
        ];
      } else {


        $output = [
          'status' => true,
          'message' => 'Storage fetched successfully for the product of Apple Care!',
          'data' => $storage_capacity,
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }


  public function apple_care_get_mrp_for_product()
  {
    if ($this->input->method() == 'post') {
      $product = $this->input->post('selected_product');
      $storage = $this->input->post('selected_storage');

      $mrp = memcached_get("apple-care-mrp-for-$product-$storage");

      if (!$mrp) {
        $mrp = $this->db
          ->select('mrp')
          ->distinct()
          ->where(['product_name' => $product, 'storage' => $storage])
          ->get('apple_care')
          ->row();

        memcached_save("apple-care-for-$product-$storage", $mrp, 3600);
      }

      if (empty($mrp)) {
        $output = [
          'status' => false,
          'message' => 'Something went wrong while fetching mrp for the product of Apple Care!',
          'data' => [],
        ];
      } else {


        $output = [
          'status' => true,
          'message' => 'Mrp fetched successfully for the product of Apple Care!',
          'data' => $mrp,
        ];
      }

      return $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($output));
    }

    return false;
  }

  // //compare iphone
  /* public function compare_iphone()
  {
      $data = array(
          'page_data' => array(
              'meta' => array(
                  'description' => '',
                  'keywords' => '',
              ),
              'title' => 'Compare Apple iPhone With Full Phone Specifications',
              'styles' => array(),
              'scripts' => array(),
          ),
          'view_file' => generate_view_path(__METHOD__),
      );

      $this->load->view('template_frontend', $data);
  } */

  // //compare macbook
  /* public function compare_macbook()
  {
      $data = array(
          'page_data' => array(
              'meta' => array(
                  'description' => '',
                  'keywords' => '',
              ),
              'title' => 'Compare Apple MacBook, MacBook Air, MacBook Pro with Full Specifications',
              'styles' => array(),
              'scripts' => array(),
          ),
          'view_file' => generate_view_path(__METHOD__),
      );

      $this->load->view('template_frontend', $data);
  } */

  // //compare ipad
  /* public function compare_ipad()
  {
      $data = array(
          'page_data' => array(
              'meta' => array(
                  'description' => '',
                  'keywords' => '',
              ),
              'title' => 'Compare Apple iPad Pro, iPad Mini 4, iPad with Full Specifications',
              'styles' => array(),
              'scripts' => array(),
          ),
          'view_file' => generate_view_path(__METHOD__),
      );

      $this->load->view('template_frontend', $data);
  } */

  // //compare watch
  /* public function compare_watch()
  {
      $data = array(
          'page_data' => array(
              'meta' => array(
                  'description' => '',
                  'keywords' => '',
              ),
              'title' => 'Compare Apple Watch Features & Specifications',
              'styles' => array(),
              'scripts' => array(),
          ),
          'view_file' => generate_view_path(__METHOD__),
      );

      $this->load->view('template_frontend', $data);
  } */
  // landing page

  // iphone 13
  public function landing_page_one()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }


  // iphone 13 pro
  public function landing_page_two()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  // watch 7
  public function landing_page_three()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  //ipad mini
  public function landing_page_four()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  // ipad 9th gen
  public function landing_page_five()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  //iphone 13 mini
  public function landing_page_six()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  // iphone 13 pro max
  public function landing_page_seven()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }

  public function macbook_pro_2021()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }

  public function icici_credit_card_offer()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'icici-credit-card.min.css?v=' . get_app_version(),
        ),
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }




  public function testimoji_old()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'testimoji.min.css?v=' . get_app_version(),
        ),
        'scripts' => [],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }
  public function why_apple_watch()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'fursat/jquery.fancybox.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/why_apple_watch.min.css?v=' . get_app_version(),
        ),
        'scripts' => [
          PATH_FRONTEND_CUSTOM_JS . "fursat/jquery.fancybox.min.js?v=" . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }
  public function testimoji()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'site/testimoji.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'fursat/jquery.fancybox.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/testimoji_iphone_compare.css?v=' . get_app_version(),
          'https://unpkg.com/aos@2.3.1/dist/aos.css',
          // 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css',
          'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.css',
          'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
          'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
          
          

        ),
        'scripts' => [
          'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js',
          'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.js',
          '	https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js',
       'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js.map',
      // 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js',
       'https://unpkg.com/aos@2.3.1/dist/aos.js',
         PATH_FRONTEND_CUSTOM_JS . "fursat/jquery.fancybox.min.js?v=" . get_app_version(),
      ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }

  public function getactiveindia()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [
          PATH_FRONTEND_CUSTOM_CSS . 'get-active-india-2.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'get-active-india-1.css?v=' . get_app_version(),
          "https://unpkg.com/aos@2.3.1/dist/aos.css",
          "https://unpkg.com/flickity@2/dist/flickity.min.css"
        ],
        'scripts' => [
          'https://unpkg.com/aos@2.3.1/dist/aos.js',
          'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js',
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    //store locator state
    $states = memcached_get('home-page-state-list');

    if (!$states) {
      $states = $this->compo_m->getStates();

      memcached_save('home-page-state-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $data['active_india_leaderboard_data'] = memcached_get("active-india-leaderboard-data");

    if (!$data['active_india_leaderboard_data']) {
      $data['active_india_leaderboard_data'] = $this->db->where('is_active', 1)->order_by("total_score", "DESC")->get('active_india_leaderboard')->result();

      memcached_save("active-india-leaderboard-data", $data['active_india_leaderboard_data'], 3600);
    }

    $this->load->view('template_frontend', $data);
  }

  public function zest_offer()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(PATH_FRONTEND_CUSTOM_CSS . 'zest_offer.min.css?v=' . get_app_version()),
        'scripts' => array(
          // PATH_FRONTEND_CUSTOM_JS . 'components/store_locator.js?v=' . get_app_version(),
        ),
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $this->load->model('common_model', 'common_m');


    // zest-hero-banner
    // TODO caching
    $data['banner_hero'] = $this->common_m->getBannersByPositionSlug('zest-page-hero');


    /* Store Locator Start */

    // states data for store locator
    $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    /* Store Locator End */

    $this->load->view('template_frontend', $data);
  }

  public function mac_lp()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
        ),
        'scripts' => [
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    //store locator state
    $states = memcached_get('home-page-state-list');

    if (!$states) {
      $states = $this->compo_m->getStates();

      memcached_save('home-page-state-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    //premium partners
    $data['premium_partners'] = memcached_get('home-page-premium-partners');

    if (!$data['premium_partners']) {
      $data['premium_partners'] = $this->db->order_by('name')->get_where('partners', ['is_premium' => '1', 'status' => '1'])->result();

      memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
    }

    $this->load->view('template_frontend', $data);
  }

  public function studio_display()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }

  public function mac_studio()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }

  public function macbookair_m2()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }

  public function macbookpro_13_m2()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
          public function ipad_9th_generation_specs()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
  public function iphone_14_coming_soon()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
    public function iphone_14_pro_coming_soon()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
    public function apple_watch_coming_soon()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
    public function try_mac()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
        public function ipad_pro_m2_chip()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
            public function ipad_10th_generation()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            // PATH_FRONTEND_CUSTOM_CSS . 'mac-lp.min.css?v=' . get_app_version(),
          ),
          'scripts' => [
            // PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  
    $this->load->view('template_frontend', $data);
  }
      public function iphone_upgrader_fest()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [],
        'scripts' => [
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . 'components/store_locator.js?v=' . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $this->load->model('home_model', 'home_m');


    $data['iphone_upgrader_print_hero'] = memcached_get('banner-iphone-upgrader-print-hero');

    if (!$data['iphone_upgrader_print_hero']) {
      $data['iphone_upgrader_print_hero'] = $this->common_model->getBannersByPositionSlug('iphone-upgrader-print-hero');

      

      memcached_save('banner-iphone-upgrader-print-hero', $data['iphone_upgrader_print_hero'], 3600);
    }

    //premium partners
    $data['premium_partners'] = memcached_get('home-page-premium-partners');

    if (!$data['premium_partners']) {
      $data['premium_partners'] = $this->home_m->getPremiumPartners();

      memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
    }

    $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $this->load->view('template_frontend', $data);
  }
  public function trade_in_offers()
  {
      $data = [
        'page_data' => [
          'meta' => [
            'description' => '',
            'keywords' => '',
          ],
          'title' => '',
          'styles' => array(
            PATH_FRONTEND_CUSTOM_CSS . 'home.min.css?v=' . get_app_version(),
            
          ),
          'scripts' => [
            'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
             PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
          ],
        ],
        'view_file' => generate_view_path(__METHOD__),
      ];  

      $this->load->model('home_model', 'home_m');
    
    $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);
        //premium partners
        $data['premium_partners'] = memcached_get('home-page-premium-partners');

        if (!$data['premium_partners']) {
          $data['premium_partners'] = $this->home_m->getPremiumPartners();
    
          memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
        }

    $this->load->view('template_frontend', $data);
  }
  public function getProtectPlusProducts() {
    
    $postData = array(
      'category' => $this->input->post('category'),
    );

    $data = $this->reseller_model->getProtectPlusProducts($postData);
   

    echo json_encode($data);
  }

  public function getProtectPlusPrices() {
    
      $postData = array(
        'product_name' => $this->input->post('product_name'),
      );

      $data = $this->reseller_model->getProtectPlusPrices($postData);
    

      echo json_encode($data);
  }

  public function getProductCategory(){
    $data = $this->reseller_model->getProductCategory();
    echo json_encode($data);
  }

  public function protect_plus(){
          $data = [
            'page_data' => [
              'meta' => [
                'description' => '',
                'keywords' => '',
              ],
              'title' => '',
              'styles' => array(
                PATH_FRONTEND_CUSTOM_CSS . 'home.min.css?v=' . get_app_version(),
              ),
              'scripts' => [
                'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
                PATH_FRONTEND_CUSTOM_JS . "components/store_locator.js?v=" . get_app_version(),
              ],
            ],
            'view_file' => generate_view_path(__METHOD__),
          ];  
          $this->load->model('home_model', 'home_m');
        $states = memcached_get('states-list');

        if (!$states) {
          $this->load->model('components_model', 'compo_m');

          $states = $this->compo_m->getStates();

          memcached_save('states-list', $states, 3600);
        }

        $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

          //premium partners
          $data['premium_partners'] = memcached_get('home-page-premium-partners');

          if (!$data['premium_partners']) {
            $data['premium_partners'] = $this->home_m->getPremiumPartners();
      
            memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
          }

        $this->load->view('template_frontend', $data);
  }
  public function macbook_pro_m2_pro_chip()
  {
    $data = array(
      'page_data' => array(
        'meta' => array(
          'description' => '',
          'keywords' => '',
        ),
        'title' => '',
        'styles' => array(),
        'scripts' => array(),
      ),
      'view_file' => generate_view_path(__METHOD__),
    );

    $this->load->view('template_frontend', $data);
  }
  public function do_more_on_ipad()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'fursat/jquery.fancybox.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'site/do_mo_ipad.min.css?v=' . get_app_version(),
        ),
        'scripts' => [
          PATH_FRONTEND_CUSTOM_JS . "fursat/jquery.fancybox.min.js?v=" . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];
    $this->load->view('template_frontend', $data);
  }


  public function fursat()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => array(
          PATH_FRONTEND_CUSTOM_CSS . 'fursat/jquery.fancybox.min.css?v=' . get_app_version(),
          PATH_FRONTEND_CUSTOM_CSS . 'fursat/fursat.min.css?v=' . get_app_version(),
        ),
        'scripts' => [
          PATH_FRONTEND_CUSTOM_JS . "fursat/jquery.fancybox.min.js?v=" . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];  

  $this->load->view('template_frontend', $data);
  }
  public function back_to_school()
  {
    $data = [
      'page_data' => [
        'meta' => [
          'description' => '',
          'keywords' => '',
        ],
        'title' => '',
        'styles' => [
          PATH_FRONTEND_CUSTOM_CSS . 'site/bts_campaign.css?v=' . get_app_version(),
        ],
        'scripts' => [
          'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js',
          PATH_FRONTEND_CUSTOM_JS . 'components/store_locator.js?v=' . get_app_version(),
        ],
      ],
      'view_file' => generate_view_path(__METHOD__),
    ];

    $this->load->model('home_model', 'home_m');


    $data['bts_campaign_hero'] = memcached_get('banner-bts-campaign-hero');

    if (!$data['bts_campaign_hero']) {
      $data['bts_campaign_hero'] = $this->common_model->getBannersByPositionSlug('bts-campaign-hero');

      

      memcached_save('banner-bts-campaign-hero', $data['bts_campaign_hero'], 3600);
    }

    //premium partners
    $data['premium_partners'] = memcached_get('home-page-premium-partners');

    if (!$data['premium_partners']) {
      $data['premium_partners'] = $this->home_m->getPremiumPartners();

      memcached_save('home-page-premium-partners', $data['premium_partners'], 3600);
    }

    $states = memcached_get('states-list');

    if (!$states) {
      $this->load->model('components_model', 'compo_m');

      $states = $this->compo_m->getStates();

      memcached_save('states-list', $states, 3600);
    }

    $data['store_locator'] = $this->load->view('components/store_locator', ['states' => $states], TRUE);

    $this->load->view('template_frontend', $data);
  }
    
}
