<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Currency extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewCurrency() {
		$data['title'] = 'Currency Adjustments';
		$this->load->view('Admin/header',$data);
		$this->load->view('Currency/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addCurrency() {
		$data['title'] = 'Add Currency Adjustment';
		$this->load->view('Admin/header',$data);
		$this->load->view('Currency/addPage');
		$this->load->view('Admin/footer');		
	}
}