<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model {

	function insert($data) 
	{
		return $this->db->insert('user', $data);
	}

	function login($email, $password) 
	{

		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$query = $this->db->get('user');
		$sess = $query->row();
		if ($query->num_rows() == 1) {
			$data = [
					'id' => $sess->id,
					'name' => $sess->name,
					'isLoggedIn' => true
				];
			$this->session->set_userdata($data);
			return true;
		}

	}

	function logout() {
		$this->session->sess_destroy();
		return false;
	}

}