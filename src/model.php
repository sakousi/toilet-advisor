<?php 
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toilet-advisor";

// Create connection with pdo
$bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);