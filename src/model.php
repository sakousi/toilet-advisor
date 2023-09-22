<?php 
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toilet-advisor";

// Create connection with pdo
$bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check connection
if (!$bdd) {
    die("Connection failed: " . mysqli_connect_error());
}


// add a new user

function addUser($username, $email, $password) {
    global $bdd;
    $req = $bdd->prepare('INSERT INTO users(username, email, password) VALUES(?, ?, ?)');
    $req->execute(array($username, $email, $password));
}

// add a new toilet

function addtoilet($address, $accessibility, $cleanliness, $cityId) {
    global $bdd;
    $req = $bdd->prepare('INSERT INTO toilets(address, accessibility, cleanliness, city_id) VALUES(?, ?, ?, ?)');
    $req->execute(array($address, $accessibility, $cleanliness, $cityId));
}

// add a new city

function addCity($name, $zipCode) {
    global $bdd;
    $req = $bdd->prepare('INSERT INTO city(name, zip_code) VALUES(?, ?)');
    $req->execute(array($name, $zipCode));
}

// search city by name

function citySearch($name) {
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM city WHERE name LIKE ?');
    $req->execute(array($name . '%'));
    $city = $req->fetchAll();
    return $city;
}

function login($email, $password) {
    global $bdd;
    $req = $bdd->prepare('SELECT id, password FROM user WHERE email = ?');
    $req->execute(array($email));
    $user = $req->fetch();
    if($user) {
        if(password_verify($password, $user['password'])) {
            return ['success' => true, 'id' => $user['id']];
        }else {
            return 'Mot de passe incorrect';
        }
    }else {
        return 'Cet email n\'existe pas';
    }
}

function register($username, $email, $password, $passwordConfirm) {
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM user WHERE email = ?');
    $req->execute(array($email));
    $user = $req->fetch();
    if($user) {
        return 'Cet email est déjà utilisé';
    }else {
        if($password != $passwordConfirm) {
            return 'Les mots de passe ne correspondent pas';
        }else {
            $req = $bdd->prepare('INSERT INTO user(username, email, password) VALUES(?, ?, ?)');
            $req->execute(array($username, $email, password_hash($password, PASSWORD_ARGON2I)));
            $userId = $bdd->lastInsertId();
            return ['success' => true, 'id' => $userId];
        }
    }
}

include_once "classes/City.php";
include_once "classes/toilet.php";
include_once "classes/user.php";