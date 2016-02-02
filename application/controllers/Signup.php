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

			// $this->sendMail();

			// $config = Array (
			//     'protocol' => 'smtp',
			//     'smtp_host' => 'ssl://smtp.googlemail.com',
			//     'smtp_port' => 465,
			//     'smtp_user' => 'johndoe011515@gmail.com',
			//     'smtp_pass' => '71988011515',
			//     'mailtype'  => 'html', 
			//     'charset'   => 'iso-8859-1'
			// );
			// $this->load->library('email', $config);
			// $this->email->set_newline("\r\n");

			// $message = 'Please Activate your account using this link url';
			// $this->email->from('johndoe011515@gmail.com');// change it to yours
			// $this->email->to('rexondelosreyes88@gmail.com'); // change it to yours
			// $this->email->subject('Resume from JobsBuddy for your Job posting');
			// $this->email->message($message);

			// $this->load->library('email');

			// $config['protocol'] = 'sendmail';
			// $config['mailpath'] = '/usr/sbin/sendmail';
			// $config['charset'] = 'iso-8859-1';
			// $config['wordwrap'] = TRUE;


			// $this->email->initialize($config);


			// $this->email->from('johndoe011515@gmail.com', 'Rexon');
			// $this->email->to('rexondelosreyes88@gmail.com');

			// $this->email->subject('Email Test');
			// $this->email->message('Testing the email class.');

   //          $this->load->library('email');
   //          $config['protocol']='smtp';
   //          $config['smtp_host']='your host';
   //          $config['smtp_port']='465';
   //          $config['smtp_timeout']='30';
   //          $config['smtp_user']='johndoe011515@gmail.com';
   //          $config['smtp_pass']='71988011515';
   //          $config['charset']='utf-8';
   //          $config['newline']="\r\n";
   //          $config['wordwrap'] = TRUE;
   //          $config['mailtype'] = 'html';
   //          $this->email->initialize($config);
			// $this->email->from('johndoe011515@gmail.com', 'Rexon');
			// $this->email->to('rexondelosreyes88@gmail.com');
			// $this->email->subject('Email Test');
			// $this->email->message('Testing the email class.');

			// // Set to, from, message, etc.

			// $result = $this->email->send();

			// if ($result) {
		 //      echo 'Email sent.';
		 //    } else {
		 //     show_error($this->email->print_debugger());
		 //    }

			// }

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

	public function sendMail()
	{
	    $config = Array (
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'rexondelosreyes88@gmail.com', // change it to yours
		  'smtp_pass' => 'qwaszxqwaszx', // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
		);

	    $message = 'Please Activate your account using this link url';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('rexondelosreyes88@gmail.com'); // change it to yours
		$this->email->to('johndoe011515@gmail.com');// change it to yours
		$this->email->subject('Resume from JobsBuddy for your Job posting');
		$this->email->message($message);

	    if ($this->email->send()) {
	      echo 'Email sent.';
	    } else {
	     show_error($this->email->print_debugger());
	    }

	}

}
