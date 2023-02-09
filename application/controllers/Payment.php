<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewPaymentMade() {
		$data['title'] = 'Payments Made';
		$this->load->view('Admin/header',$data);
		$this->load->view('Payment/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addPaymentMade() {
		$data['title'] = 'Add Payment Made';
		$this->load->view('Admin/header',$data);
		$this->load->view('Payment/addPage');
		$this->load->view('Admin/footer');		
	}
}