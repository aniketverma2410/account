<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewTransaction() {
		$data['title'] = 'Transactions Locking';
		$this->load->view('Admin/header',$data);
		$this->load->view('Transaction/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addTransaction() {
		$data['title'] = 'Add Transaction Locking';
		$this->load->view('Admin/header',$data);
		$this->load->view('Transaction/addPage');
		$this->load->view('Admin/footer');		
	}
}