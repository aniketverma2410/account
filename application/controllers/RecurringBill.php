<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RecurringBill extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewRecurringBill() {
		$data['title'] = 'Recurring Bills';
		$this->load->view('Admin/header',$data);
		$this->load->view('RecurringBill/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addRecurringBill() {
		$data['title'] = 'Add Recurring Bill';
		$this->load->view('Admin/header',$data);
		$this->load->view('RecurringBill/addPage');
		$this->load->view('Admin/footer');		
	}
}