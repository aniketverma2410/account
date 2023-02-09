<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Purchase extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewPurchase() {
		$data['title'] = 'Purchase Orders';
		$this->load->view('Admin/header',$data);
		$this->load->view('Purchase/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addPurchase() {
		$data['title'] = 'Add Purchase Order';
		$this->load->view('Admin/header',$data);
		$this->load->view('Purchase/addPage');
		$this->load->view('Admin/footer');		
	}
}