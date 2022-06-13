<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('Admin/header', $data);
		$this->load->view('Admin/index');
		$this->load->view('Admin/footer');
	}
}