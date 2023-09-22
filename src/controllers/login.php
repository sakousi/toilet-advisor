<?php

function loginController() {

	if(isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$login = login($email, $password);
		if($login['success'] === true) {
			$user = new User($login['id']);
			$_SESSION['user'] = $user;
		} else {
			$error = $login;
			header('HTTP/1.1 401 Unauthorized');
			header('Location: /error?error=401&errorMsg=' . $error);
		}
	}
	
	require('templates/login.php');
}