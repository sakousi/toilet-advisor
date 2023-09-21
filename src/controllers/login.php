<?php

require_once('src/classes/user.php');

function loginController() {
	require('templates/login.php');
}


class LoginController {
	private $user;
  
	public function __construct() {
	  $this->user = new User();
	}
  
	public function login() {
		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
		
			// Validate the username and password fields
			if (empty($email)) {
			$errors['email'] = 'Email requis';
			}
			if (empty($password)) {
			$errors['password'] = 'Mot de passe requis';
			}
		
			// If there are no errors, check if the user exists in the database
			if (empty($errors)) {
			//Check if the user exists in the database
			$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
			$stmt->execute(array('email' => $email));
			$user = $stmt->fetch();
		
			if ($user && password_verify($password, $user['password'])) {
			  // User exists and password is correct, log them in
			} else {
			  // User does not exist or password is incorrect, display an error message
			}
			// If the user exists, log them in
			// Otherwise, display an error message
			}
		}
	}
}