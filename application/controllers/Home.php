<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index ()
	{
		$isLoggedIn = $this->session->userdata('isLoggedIn');
		
		$data = [
			'title'   => 'Home',
			'content' => 'components/property/property',
			'name' => $this->session->userdata('name'),
			'isLoggedIn' => $isLoggedIn
		];

		if ($isLoggedIn) {
			$this->load->view('master', $data);
		} else {
			redirect(base_url());
		}
		
	}
}
