<?php 

class User {

    private $id = 0;
    private $username = '';
    private $email = '';
    private $favori = array();

    public function __construct($newUser) {
        //get user from database
        global $bdd;
        $req = $bdd->prepare('SELECT user.*, favori.id AS favoriId FROM user LEFT JOIN favori ON user.id = favori.user_id WHERE user.id = ?');
        $req->execute(array($newUser));
        $user = $req->fetch();
        $this->id = $user['id'];
        $this->username = $user['username'];
        $this->email = $user['email'];
        $this->favori = $user['favoriId'];
        
    }

    //getters and setters

    public function getId() {
        return $this->id;
    }
    
    public function getUsername() {
        return $this->username;
    }

    public function setUsername($newUsername) {
        if (strlen($newUsername) < 3) {
            throw new Exception('Nom trop court');
        }
        //update username in database
        global $bdd;
        $req = $bdd->prepare('UPDATE users SET username = ? WHERE id = ?');
        $req->execute(array($newUsername, $this->id));
        $this->username = $newUsername;
    }

    public function getEmail() {
        return $this->email;
    }

    public function updateEmail($email) {
        if (strlen($email) < 3) {
            throw new Exception('Email trop court');
        }
        //update email in database
        global $bdd;
        $req = $bdd->prepare('UPDATE users SET email = ? WHERE id = ?');
        $req->execute(array($email, $this->id));
        $this->email = $email;
    }

    public function getFavoris() {
        return $this->favori;
    }

    public function setFavori($toiletId) {
        //add toilet to favori
        global $bdd;
        $req = $bdd->prepare('INSERT INTO favori (user_id, toilet_id) VALUES (?, ?)');
        $req->execute(array($this->id, $toiletId));
    }

}