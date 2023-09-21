<?php 
require('src/classes/City.php');

function cityController(){

    if(isset($_GET['cityIds'])) {
        $cityIds = unserialize($_GET['cityIds']);
        $cities = array();
        foreach($cityIds as $cityId) {
            array_push($cities, new City($cityId));
        }
        $_POST['cities'] = $cities;
    }

    require 'templates/city.php';
}
