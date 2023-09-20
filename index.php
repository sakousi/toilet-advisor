<?php
require('src/controllers/homepage.php');

if($_SERVER['REQUEST_URI'] === '/'){
    homepageController();
}
