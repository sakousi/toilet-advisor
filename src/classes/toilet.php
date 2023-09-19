<?php
class Toilet{

    private $id = 0;
    private $address = '';
    private $accessibility = '';
    private $cleanliness = '';

    public function __construct($address, $accessibility, $cleanliness) {
        $this->address = $address;
        $this->accessibility = $accessibility;
        $this->cleanliness = $cleanliness;
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

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        if (strlen($address) < 3) {
            throw new Exception('Adresse trop courte');
        }
        $this->address = $address;
    }

}