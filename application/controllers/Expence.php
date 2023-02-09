<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Expence extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewExpence() {
		$data['title'] = 'Expences';
		$this->load->view('Admin/header',$data);
		$this->load->view('Expence/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addExpence() {
		$data['title'] = 'Add Expance';
		$this->load->view('Admin/header',$data);
		$this->load->view('Expence/addPage');
		$this->load->view('Admin/footer');		
	}
}