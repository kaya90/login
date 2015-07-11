<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	public function create($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?,NOW(),NOW())";
		$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password']);
		return $this->db->query($query, $values);
	}
	public function fetch_all()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
	}
	public function check_valid($post)
	{
		$query = "SELECT id, first_name, last_name, email
		FROM users WHERE email = ? AND password = ?";
		$values = array($post['email'], $post['password']);
		return $this->db->query($query, $values)->row_array();
	}
}

		// 		$email = mysqli_escape_string($connection, $_POST['email']);
		// $password = mysqli_escape_string($connection, $_POST['password']);
		// $query = "SELECT id, first_name, last_name, email, password 
		// FROM users WHERE email = '{$email}' AND password = '{$password}'";