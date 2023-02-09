<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chart extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewChart() {
		$data['title'] = 'Chart of Accounts';
		$this->load->view('Admin/header',$data);
		$this->load->view('Chart/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addChart() {
		$data['title'] = 'Add Chart of Account';
		$this->load->view('Admin/header',$data);
		$this->load->view('Chart/addPage');
		$this->load->view('Admin/footer');		
	}
}