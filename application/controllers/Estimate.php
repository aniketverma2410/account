<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Estimate extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewEstimate() {
		$data['title'] = 'View Customers';
		$this->load->view('Admin/header',$data);
		$this->load->view('Estimate/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addEstimate() {
		$data['title'] = 'Add Estimate';
		$this->load->view('Admin/header',$data);
		$this->load->view('Estimate/addPage');
		$this->load->view('Admin/footer');		
	}
}