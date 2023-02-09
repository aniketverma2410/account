<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
	public function __construct()
	{
			parent::__construct();
	}

	public function login($username,$password) {
		 $this->db->select('*');
		 $this->db->from('login');
		 $this->db->where(array('username' => $username, 'password' => base64_encode($password)));
		 return $this->db->get()->row_array();
	}

	public function updataData($table,$data,$id) {
		$this->db->set($data);
		$this->db->where($id);
		return $this->db->update($table);
	}

	public function checkOldPassword($id) {
		$this->db->select('password');
		$this->db->from('login');
		$this->db->where($id);
		return $this->db->get()->row_array();
	}
}

