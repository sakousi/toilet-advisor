<?php 

function cityController(){

    if(isset($_GET['cityIds'])) {
        $cityIds = unserialize($_GET['cityIds']);
        $cities = array();
        foreach($cityIds as $cityId) {
            array_push($cities, new City($cityId));
        }
        
    }

    require 'templates/city.php';
}
