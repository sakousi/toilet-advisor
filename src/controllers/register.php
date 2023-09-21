<?php

require_once('src/classes/user.php');

function registerController() {
	require('templates/register.php');
}


class RegisterController {
	private $user;
  
	public function __construct() {
	  $this->user = new User();
	}
  
	public function register() {
	  if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Validate the email field
		if (empty($email)) {
			$errors['email'] = 'Email is required';
		  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors['email'] = 'Invalid email format';
		  }
		  
		// Validate the password field
		if (empty($password)) {
			$errors['password'] = 'Password is required';
		  } 
		  else if (strlen($password) < 8) {
			$errors['password'] = 'Password must be at least 8 characters long';
		  } 
		//   else if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password)) {
		// 	$errors['password'] = 'Au moins un nombre, une majuscule, une minuscule';
		//   }
	
		  // If there are no errors, add the user to the database
		  if (empty($errors)) {
			$this->model->addUser($username, $email, $password);

		  }
	  }
	}
}