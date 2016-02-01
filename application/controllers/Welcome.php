<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index ()
	{
		$data = [
			'title'   => 'Login',
			'content' => 'components/login/login',
			'loadJS'  => [
				'components/login/LoginService.js',
				'components/login/LoginController.js'
			]
		];
		$this->load->view('master', $data);
	}

	public function signup ()
	{
		$data = [
			'title' => 'Sign Up',
			'content' => 'components/signup/signup',
			'loadJS' => [
				'components/signup/SignupService.js',
				'components/signup/SignupController.js'
			]
		];
		$this->load->view('master', $data);
	}
}
