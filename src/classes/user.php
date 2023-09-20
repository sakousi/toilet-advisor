<?php 
require('src/model.php');

class User {

    private $id = 0;
    private $username = '';
    private $email = '';
    private $password = '';
    private $favori = 0;

    public function __construct($username, $email, $password) {
        //add to database
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        addUser($this->username, $this->email, $this->password);
        
    }

    //getters and setters

    public function getId() {
        return $this->id;
    }
    
    public function getUsernameById($id) {
        $user = getUser($this->id);
        return $user['username'];
    }

    public function setUsername($username, $id) {
        if (strlen($username) < 3) {
            throw new Exception('Nom trop court');
        }
        $this->username = $username;
        $this->id = $id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Email invalide');
        }
        $this->email = $email;
    }

    public function getFavori() {
        return $this->favori;
    }

    public function setFavori($favori) {
        $this->favori = $favori;
    }
}