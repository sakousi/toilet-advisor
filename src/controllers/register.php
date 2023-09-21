<?php

require_once('src/classes/user.php');

function registerController() {
	require('templates/register.php');
}

//Isset

class RegisterController {
	public function register() {
	  $username = $_POST['username'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
  
	  // Call the model method to add the user to the database
	  $this->model->addUser($username, $email, $password);
  
	}
  }
  