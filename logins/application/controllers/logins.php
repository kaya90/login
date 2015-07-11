<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}
	public function register()
	{
		var_dump($this->input->post());
		// // die('ere');

		//VALIDATION
		if($this->input->post('validation') == 'registration')
		{
			$this->load->library("form_validation");
			$this->form_validation->set_rules("first_name", "First Name", "required|alpha|trim");
			$this->form_validation->set_rules("last_name", "Last Name", "trim|required|alpha");
			$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
			$this->form_validation->set_rules("password", "Password", "trim|required|min_length[7]");
			$this->form_validation->set_rules("confirm_password", "Confirm Password", "required|matches[password]");

				if($this->form_validation->run() === FALSE)
				{
				     $this->view_data["errors"] = validation_errors();
				     $this->load->view('index', array( 'messages' =>$this->view_data["errors"]));
				}
				else
				{
					$no_errors = "<p>Your registration is complete. You may now log in.</p>";
				    $this->load->view('index', array('messages' => $no_errors));
				}
		}
	}
}

//COMMMENT