<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewInvoice() {
		$data['title'] = 'View Invoices';
		$this->load->view('Admin/header',$data);
		$this->load->view('Invoice/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addInvoice() {
		$data['title'] = 'Add Invoice';
		$this->load->view('Admin/header',$data);
		$this->load->view('Invoice/addPage');
		$this->load->view('Admin/footer');		
	}
}