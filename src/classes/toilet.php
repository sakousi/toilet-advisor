<?php
class Toilet{

    private $id = 0;
    private $address = '';
    private $accessibility = '';
    private $cleanliness = '';
    private $city = '';

    public function __construct($toiletId) {
        //get toilet from database with a join in order to get the city name
        global $bdd;
        $req = $bdd->prepare('SELECT * FROM toilets INNER JOIN cities ON toilets.city_id = cities.id WHERE toilets.id = ?');
        $req->execute(array($toiletId));
        $toilet = $req->fetch();
        $this->id = $toilet['id'];
        $this->address = $toilet['address'];
        $this->accessibility = $toilet['accessibility'];
        $this->cleanliness = $toilet['cleanliness'];
        $this->city = $toilet['name'];

    }

    //getters and setters

    public function getId() {
        return $this->id;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        if (strlen($address) < 3) {
            throw new Exception('Adresse trop courte');
        }
        //update address in database
        global $bdd;
        $req = $bdd->prepare('UPDATE toilets SET address = ? WHERE id = ?');
        $req->execute(array($address, $this->id));
        $this->address = $address;
    }

    public function getAccessibility() {
        return $this->accessibility;
    }

    public function setAccessibility($accessibility) {
        if (strlen($accessibility) < 3) {
            throw new Exception('Accessibilité trop courte');
        }
        //update accessibility in database
        global $bdd;
        $req = $bdd->prepare('UPDATE toilets SET accessibility = ? WHERE id = ?');
        $req->execute(array($accessibility, $this->id));
        $this->accessibility = $accessibility;
    }

    public function getCleanliness() {
        return $this->cleanliness;
    }

    public function setCleanliness($cleanliness) {
        if (strlen($cleanliness) < 3) {
            throw new Exception('Propreté trop courte');
        }
        //update cleanliness in database
        global $bdd;
        $req = $bdd->prepare('UPDATE toilets SET cleanliness = ? WHERE id = ?');
        $req->execute(array($cleanliness, $this->id));
        $this->cleanliness = $cleanliness;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        if (strlen($city) < 3) {
            throw new Exception('Ville trop courte');
        }
        //update city in database
        global $bdd;
        $req = $bdd->prepare('UPDATE toilets SET city = ? WHERE id = ?');
        $req->execute(array($city, $this->id));
        $this->city = $city;
    }

}