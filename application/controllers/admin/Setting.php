<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Setting Interface';
		$this->load->view('Admin/header');
		$this->load->view('Admin/setting', $data);
		$this->load->view('Admin/footer');
	}
}