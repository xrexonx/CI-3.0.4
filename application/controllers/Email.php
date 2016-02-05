<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller
{
	function index()
	{
		$config = Array (
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'rexondelosreyes88@gmail.com', // change it to yours
			'smtp_pass' => 'dsfasfsdfasfsfsadf', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

	    $message = 'Please Activate your account using this link url';
		$this->email->from('rexondelosreyes88@gmail.com', 'Rexon'); // change it to yours
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