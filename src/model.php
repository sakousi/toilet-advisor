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

//user stuff

function getUser($id) {
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM user WHERE id = ?');
    $req->execute([$id]);
    return $req->fetch(PDO::FETCH_ASSOC);
}

function addUser($username, $email) {
    global $bdd;
    $req = $bdd->prepare('INSERT INTO user (username, email) VALUES (?, ?)');
    $req->execute([$username, $email]);
}
