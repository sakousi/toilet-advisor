<?php
require('src/controllers/homepage.php');
require('src/controllers/login.php');
require('src/controllers/register.php');
//create root from filename
if($_SERVER['REQUEST_URI'] === '/'){
    homepageController();
}elseif($_SERVER['REQUEST_URI'] === '/login'){
    loginController();
}elseif($_SERVER['REQUEST_URI'] === '/register'){
    registerController();
}