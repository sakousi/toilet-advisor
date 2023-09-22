<?php

function registerController() {

	if(isset($_POST['register'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordConfirm = $_POST['passwordConfirm'];
		$register = register($username, $email, $password, $passwordConfirm);
		if($register['success'] === true) {
			$user = new User($register['id']);
			$_SESSION['user'] = $user;
			header('Location: /');
		} else {
			$error = $register;
			header('HTTP/1.1 401 Unauthorized');
			header('Location: /error?error=401&errorMsg=' . $error);
		}
	}

	require('templates/register.php');
}