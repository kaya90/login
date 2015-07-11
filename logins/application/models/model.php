<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {


	public function index()
	{
		$this->load->view('index');
	}
	public function register()
	{
		var_dump($this->input->post());
	}
}
