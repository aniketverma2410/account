<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Timesheet extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewTimesheet() {
		$data['title'] = 'Timesheets';
		$this->load->view('Admin/header',$data);
		$this->load->view('Timesheet/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addCustomer() {
		$data['title'] = 'Add Customer';
		$this->load->view('Admin/header',$data);
		$this->load->view('Customer/addPage');
		$this->load->view('Admin/footer');		
	}
}