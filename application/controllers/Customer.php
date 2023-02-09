<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewCustomer() {
		$data['title'] = 'View Customers';
		$this->load->view('Admin/header',$data);
		$this->load->view('Customer/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addCustomer() {
		$data['title'] = 'Add Customer';
		$this->load->view('Admin/header',$data);
		$this->load->view('Customer/addPage');
		$this->load->view('Admin/footer');		
	}
}

