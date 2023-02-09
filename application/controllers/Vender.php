<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vender extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewVender() {
		$data['title'] = 'View Venders';
		$this->load->view('Admin/header',$data);
		$this->load->view('Vender/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addVender() {
		$data['title'] = 'Add Vender';
		$this->load->view('Admin/header',$data);
		$this->load->view('Vender/addPage');
		$this->load->view('Admin/footer');		
	}
}