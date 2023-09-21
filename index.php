<?php
require('src/controllers/homepage.php');
require('src/controllers/login.php');
require('src/controllers/register.php');

//create route

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/index' || $uri === '/') {
    homepageController();
} elseif ($uri === '/index.php/login') {
    loginController();
} elseif ($uri === '/index.php/register') {
    registerController();
}