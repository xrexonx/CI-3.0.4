<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	private $sMessage = "";
	private $bSuccess = false;

	public function create ()
	{
		extract($_POST);
		$data = [
			'name' => $name,
			'email' => $email,
			'password' => md5($password)
		];
		$insert = $this->users->insert($data);
		
		if ($insert) {
			$this->bSuccess = true;
			$this->sMessage = 'Sucessfully Created';

		}

		return $this->_setResponse();

	}

	private function _setResponse ()
	{
		echo json_encode($this->_buildResponse());
	}

	private function _buildResponse ()
	{
		$response = [
			'message' => $this->sMessage,
			'success' => $this->bSuccess
		];
		return $response;

	}

}
