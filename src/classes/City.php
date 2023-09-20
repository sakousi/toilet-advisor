<?php
class City{

    private $id = 0;
    private $name = '';
    private $zipCode = '';
    private $toilets = array();


    public function __construct($name, $zipCode) {
        //set city by the database and join with the toilets table
        global $bdd;
        $req = $bdd->prepare('SELECT * FROM cities INNER JOIN toilets ON cities.id = toilets.city_id WHERE cities.name = ? AND cities.zip_code = ?');
        $req->execute(array($name, $zipCode));
        $city = $req->fetch();
        $this->id = $city['id'];
        $this->name = $city['name'];
        $this->zipCode = $city['zip_code'];
        $this->toilets = $city['toilets']; //array of toilets ids

    }

    //getters and setters

    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        //update name in database
        global $bdd;
        $req = $bdd->prepare('UPDATE cities SET name = ? WHERE id = ?');
        $req->execute(array($name, $this->id));
        $this->name = $name;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function setZipCode($zipCode) {
        //update zipCode in database
        global $bdd;
        $req = $bdd->prepare('UPDATE cities SET zip_code = ? WHERE id = ?');
        $req->execute(array($zipCode, $this->id));
        $this->zipCode = $zipCode;
    }

    public function getToilets() {
        return $this->toilets;
    }

    public function addToilets($toiletId) {
        //add toilet in database
        global $bdd;
        $req = $bdd->prepare('INSERT INTO toilets(city_id) VALUES(?)');
        $req->execute(array($toiletId));
        $this->toilets[] = $toiletId;
    }

    public function deleteToilets($toiletId) {
        //delete toilet in database
        global $bdd;
        $req = $bdd->prepare('DELETE FROM toilets WHERE id = ?');
        $req->execute(array($toiletId));
        $this->toilets = array_diff($this->toilets, array($toiletId));
    }

}