<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MX_Controller
{
	public function __construct() {
		parent::__construct();
		
		$this->load->model('user_m');
	}
	
	public function index() {
		if ($this->isUserLoggedIn()) {
			redirect('/admin/dashboard');
		} else {
			redirect('/user/login');
		}
		
		return FALSE;
	}
	
	public function isUserLoggedIn() {
		return ($this->session->userdata('isUserLoggedIn') && ($this->session->userdata('isUserLoggedIn') === TRUE));
	}
	
	public function userData() {
		if ($this->isUserLoggedIn()) {
			return $this->session->userdata();
		} else {
			return FALSE;
		}
	}
	
	/**
	 * login
	 */
	public function login() {
		if ($this->isUserLoggedIn()) {
			redirect(base_url('admin/dashboard'));
		} else {
			$data = [];
			
			if ($this->session->userdata('success_msg')) {
				$data['success_msg'] = $this->session->userdata('success_msg');
				
				$this->session->unset_userdata('success_msg');
			}
			
			if ($this->session->userdata('error_msg')) {
				$data['error_msg'] = $this->session->userdata('error_msg');
				
				$this->session->unset_userdata('error_msg');
			}
			
			if ($_POST) {
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('field_email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('field_password', 'Password', 'required');
				
				if ($this->form_validation->run() == TRUE) {
					$where = array(
						'email'    => $this->input->post('field_email'),
						'password' => md5($this->input->post('field_password')),
						'isActive' => '1',
					);
					
					$userDataFound = select_where_method('users', $where);
					
					if ($userDataFound) {
						$this->session->set_userdata('isUserLoggedIn', TRUE);
						$this->session->set_userdata('userId', $userDataFound->user_id);
						/* $this->session->set_userdata('firstName', $userDataFound->firstName);
						$this->session->set_userdata('lastName', $userDataFound->lastName);
						$this->session->set_userdata('email', $userDataFound->email);
						$this->session->set_userdata('contact', $userDataFound->contact);
						$this->session->set_userdata('role', $userDataFound->role);*/
						
						redirect(base_url('admin/dashboard'));
					} else {
						$data['error_msg'] = 'Invalid credentials, please try again.';
					}
				} else {
					$errors = validation_errors();
					
					$data['error_msg'] = $errors;
					
					$this->session->set_flashdata('form_error', $errors);
				}
			}
			
			$data['view_file'] = 'login';
			
			$this->load->view('template_blank', $data);
		}
	}
	
	/**
	 * logout
	 */
	public function logout() {
		$this->session->sess_destroy();
		
		redirect('/user/login');
	}
}