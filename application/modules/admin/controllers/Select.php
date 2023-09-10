<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Select extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->module('user');
		$this->load->model('select_model');

		if (!$this->user->isUserLoggedIn()) {
			redirect('user/logout');
		}
	}

	public function get_city_options() {
		$id = $this->input->post('val');

		if($id)
		{
			$data = $this->select_model->getCitiesByStateId($id);
			return $this->output->set_output(json_encode($data));
		}
		
		$this->output->set_output(json_encode(0));
	}
}
