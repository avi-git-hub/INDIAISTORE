<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Compare extends MX_Controller
{
    public $user_agent;
    public $master_db;

    public function __construct()
    {
        parent::__construct();

        $this->db = $this->load->database('slave', TRUE); //read only access
        $this->master_db = $this->load->database('master', TRUE); //read-write access

        $this->user_agent = get_user_agent();
    }

    public function compare_iphone()
    {
        $data = [
            'page_data' => [
                'styles' => [],
                'scripts' => [
                    PATH_FRONTEND_CUSTOM_JS . "compare/sticky-dropdown.js?v=" . get_app_version(),
                ],
            ],
            'view_file' => generate_view_path(__METHOD__),
        ];

        $this->load->view('template_frontend', $data);
    }

    public function compare_ipad()
    {

        $data = [
            'page_data' => [
                'styles' => [],
                'scripts' => [
                    PATH_FRONTEND_CUSTOM_JS . "compare/sticky-dropdown.js?v=" . get_app_version(),
                ],
            ],
            'view_file' => generate_view_path(__METHOD__),
        ];

        $this->load->view('template_frontend', $data);
    }

    public function compare_mac()
    {
        $data = [
            'page_data' => [
                'styles' => [],
                'scripts' => [
                    PATH_FRONTEND_CUSTOM_JS . "compare/sticky-dropdown.js?v=" . get_app_version(),
                ],
            ],
            'view_file' => generate_view_path(__METHOD__),
        ];

        $this->load->view('template_frontend', $data);
    }

    public function compare_watch()
    {
        $data = [
            'page_data' => [
                'styles' => [],
                'scripts' => [
                    PATH_FRONTEND_CUSTOM_JS . "compare/sticky-dropdown.js?v=" . get_app_version(),
                ],
            ],
            'view_file' => generate_view_path(__METHOD__),
        ];

        $this->load->view('template_frontend', $data);
    }
}
