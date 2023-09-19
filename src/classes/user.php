<?php 
class User {

    private $id = 0;
    private $username = '';
    private $email = '';
    private $favori = 0;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    //getters and setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        if (!is_numeric($id)) {
            throw new Exception('ID doit être un nombre');
        }
        $this->id = $id;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        if (strlen($username) < 3) {
            throw new Exception('Username trop court');
        }
        $this->username = $username;
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