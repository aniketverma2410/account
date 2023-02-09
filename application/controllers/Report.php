<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewReport() {
		$data['title'] = 'Reports';
		$this->load->view('Admin/header',$data);
		$this->load->view('Report/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addReport() {
		$data['title'] = 'Add Transaction Locking';
		$this->load->view('Admin/header',$data);
		$this->load->view('Report/addPage');
		$this->load->view('Admin/footer');		
	}
}