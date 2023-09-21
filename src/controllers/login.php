<?php
require_once('src/model.php');
// require_once('src/classes/user.php');


function loginController() {
	require('templates/login.php');
}

// Fonction pour traiter la soumission du formulaire de connexion
function processLogin() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérez les données du formulaire (par exemple, nom d'utilisateur et mot de passe)
		$email = $_POST["email"];
		$password = $_POST["password"];
        // Validez les données (assurez-vous que les champs ne sont pas vides, par exemple)
		$formValide = TRUE;
		if(!isset($email) || !isset($password)) {
			$formValide = FALSE;
		};
        // Vérifiez les identifiants (par exemple, en comparant avec une base de données)
		$reqUser = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
		$result = $bdd->query($reqUSer);
		if($email!=$result[0].email || $password!=$result[0].password){
			$formValide = FALSE;
		};

        if ($formValide) {
            //Remplir les variables de sessions
            $_SESSION['nom'] = $result[0].username;
            $_SESSION['email'] = $email;
            // Redirigez l'utilisateur vers la page d'accueil
            header('Location: homepage.php');
            exit();
        } else {
            // Affichez un message d'erreur
            $error = "Identifiants incorrects.";
            require('loginController.php');
        }
    }
}