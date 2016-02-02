<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index ()
	{
		$isLoggedIn = $this->session->userdata('isLoggedIn');

		$data = [
			'title'   => 'Dashboard',
			'content' => 'components/dashboard/dashboard',
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
