<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recevied extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewRecevied() {
		$data['title'] = 'View Recevied Payments';
		$this->load->view('Admin/header',$data);
		$this->load->view('Recevied/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addRecevied() {
		$data['title'] = 'Add Recevied Payment';
		$this->load->view('Admin/header',$data);
		$this->load->view('Recevied/addPage');
		$this->load->view('Admin/footer');		
	}
}