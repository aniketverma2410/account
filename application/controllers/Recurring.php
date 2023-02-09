<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Recurring extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewRecurring() {
		$data['title'] = 'Recurring Expences';
		$this->load->view('Admin/header',$data);
		$this->load->view('Recurring/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addRecurring() {
		$data['title'] = 'Add Recurring Expence';
		$this->load->view('Admin/header',$data);
		$this->load->view('Recurring/addPage');
		$this->load->view('Admin/footer');		
	}
}