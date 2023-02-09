<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewOrder() {
		$data['title'] = 'View Sales Order';
		$this->load->view('Admin/header',$data);
		$this->load->view('Order/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addOrder() {
		$data['title'] = 'Add Sales Order';
		$this->load->view('Admin/header',$data);
		$this->load->view('Order/addPage');
		$this->load->view('Admin/footer');		
	}
}