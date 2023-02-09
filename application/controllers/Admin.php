<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin');
		$this->load->library('upload');
		date_default_timezone_set("Asia/Kolkata");
	}

	public function index() {
		$data['title'] = 'Admin Log In';
		$this->load->view('Admin/login',$data);
	}

	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result = $this->admin->login($username,$password);
		$sessionData = array(
				'id' => $result['id'],
				'username' => $result['username'],
				'name' => $result['name'],
				'image'=> $result['img'],
			);
			$this->session->set_userdata('logged_in',$sessionData);
			$sess= $this->session->get_userdata('logged_in');
			//print_r($sess);die;
		if($result > 0) {
			$message = '<div class="alert alert-success alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Logged In successfully.</div>';
			$this->session->set_flashdata('message', $message);
			redirect('admin/dashboard');
		} else {
			$message = '<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Invalide Username or Password.</div>';
			$this->session->set_flashdata('message', $message);
			redirect('admin/index');
		}
	}

	public function dashboard() {
		$data['title'] = 'Admin Dashboard';
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/dashboard');
		$this->load->view('Admin/footer');
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		$message = '<div class="alert alert-success alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Logged Out successfully.</div>';
		$this->session->set_flashdata('message', $message);
		redirect('Admin/index');
	}

	public function profile() {
		$data['title'] = 'Admin Profile';
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/profile');
		$this->load->view('Admin/footer');
	}

	public function updateProfile() {
		$id = $this->input->post('id');
		$fileName  = $_FILES["img"]["name"];
		if(!empty($fileName)){
			$extension = explode('.',$fileName);
			$extension = strtolower(end($extension));
			$uniqueName = uniqid().'.'.$extension;
			$type      = $_FILES["img"]["type"];
			$size      = $_FILES["img"]["size"];
			$tmp_name  = $_FILES["img"]["tmp_name"];
			$targetlocation = IMAGE_DIRECTORY.$uniqueName;
			move_uploaded_file($tmp_name,$targetlocation);
			$img = utf8_encode(trim($uniqueName));
		} else {
			$img = $this->input->post('StoredImg');
		}
		$data = array(
			'username' => $this->input->post('username'),
			'name' => $this->input->post('name'),
			'updated_at' => date('Y-m-d H:i:s'),
			'status' => 1
		);
		if(!empty($img)) {
			$data['img'] = $img;
		}
		$result = $this->admin->updataData('login',$data,array('id' => $id));
		if($result > 0) {
			$value = array(
				'id' => $id,
				'username' => $data['username'],
				'name' => $data['name']
			);
			if(!empty($img)) {
				$value['image'] = $img;
			} else {
				$value['image'] = $this->session->userdata['logged_in']['image'];
			}
			$this->session->set_userdata('logged_in',$value);
			$sess = $this->session->get_userdata('logged_in');
			$message = '<div class="alert alert-success alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Profile Updated successfully.</div>';
			$this->session->set_flashdata('message', $message);
			redirect('admin/dashboard');
		} else {
			$message = '<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something Went Wrong.</div>';
			$this->session->set_flashdata('message', $message);
			redirect('admin/profile');
		}
	}

	public function changePassword() {
		$data['title'] = 'Admin Change Password';
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/changePassword');
		$this->load->view('Admin/footer');	
	}

	public function checkOldPassword() {
		$id = $this->input->post('id');
		$old = base64_encode($this->input->post('old'));
		$result = $this->admin->checkOldPassword(array('id' => $id));
		if($old != $result['password']) {
			$res = 'Old Password does not Match.';
		} else {
			$res = 0;
		}
		echo json_encode($res);exit;
	}

	public function updatePassword() {
		$id = $this->input->post('id');
		$old = base64_encode($this->input->post('old'));
		$password = $this->input->post('password');
		$confirm = $this->input->post('confirm');
		$data = array(
			'password' => base64_encode($this->input->post('password')) 
		);
		$oldPassword = $this->admin->checkOldPassword(array('id' => $id));
		if($old != $oldPassword['password']) {
			$message = '<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Old Password is not Matched.</div>';
			$this->session->set_flashdata('message', $message);
			redirect('admin/changePassword');
		} else if($password != $confirm) {
			$message = '<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>New Password and Confirm Password is not Matched.</div>';
			$this->session->set_flashdata('message', $message);
			redirect('admin/changePassword');
		} else {
			$result = $this->admin->updataData('login',$data,array('id' => $id));
			if($result > 0) {
				$message = '<div class="alert alert-success alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password Updated successfully.</div>';
				$this->session->set_flashdata('message', $message);
				redirect('admin/dashboard');
			} else {
				$message = '<div class="alert alert-danger alert-dismissable alert_box"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Something Went Wrong.</div>';
				$this->session->set_flashdata('message', $message);
				redirect('admin/profile');
			}
		}
	}
}

