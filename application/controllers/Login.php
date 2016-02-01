<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $sMessage = "Invalid Email or Password.";
	private $bSuccess = false;

	function logMeIn() {

		extract($_POST);
		$validateMe = $this->users->login($email, $password);

		if ($validateMe) {
			$this->bSuccess = true;
			$this->sMessage = 'Sucessfully Logged';
		}

		$response = [
			'message' => $this->sMessage,
			'success' => $this->bSuccess
		];

		echo json_encode($response);
	}

	function logout() {

		$this->users->logout();		
		redirect(base_url());
	}
}
