<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function viewProject() {
		$data['title'] = 'Projects';
		$this->load->view('Admin/header',$data);
		$this->load->view('Project/viewPage');
		$this->load->view('Admin/footer');
	}
	public function addProject() {
		$data['title'] = 'Add Project';
		$this->load->view('Admin/header',$data);
		$this->load->view('Project/addPage');
		$this->load->view('Admin/footer');		
	}
}