<?php 

function homepageController() {

    if(isset($_POST['search'])) {
        $search = strtolower($_POST['search']);
        $result = citySearch($search);
        if(count($result) === 1) {
            $city = new City($result['name'], $result['zip_code']);
            $toilets = $city->getToilets();
            //TODO: redirect to toilet selctor
            $querryToilets = http_build_query($toilets);
            header('Location: index.php/toilet$querryToilets');
        }else {
            $cityIds = [];
            foreach($result as $city) {

                array_push($cityIds, $city['id']);
            }
            $queryCity =serialize($cityIds);
            header('Location: /city?cityIds=' . $queryCity);
        }
    }

    require('templates/homepage.php');
}