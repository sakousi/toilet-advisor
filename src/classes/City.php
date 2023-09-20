<?php
class City{

    private $id = 0;
    private $name = '';
    private $zipCode = '';

    public function __construct($name, $zipCode) {
        $this->name = $name;
        $this->zipCode = $zipCode;
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
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if (strlen($name) < 3) {
            throw new Exception('Nom trop court');
        }
        $this->name = $name;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function setZipCode($zipCode) {
        if (strlen($zipCode) < 3) {
            throw new Exception('Pays trop court');
        }
        $this->zipCode = $zipCode;
    }

}