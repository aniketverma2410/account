<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manual extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewManual() {
		$data['title'] = 'Manual Journals';
		$this->load->view('Admin/header',$data);
		$this->load->view('Manual/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addManual() {
		$data['title'] = 'Add Manual Journal';
		$this->load->view('Admin/header',$data);
		$this->load->view('Manual/addPage');
		$this->load->view('Admin/footer');
	}
}