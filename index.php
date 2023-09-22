<?php
require_once('src/model.php');

require('src/controllers/homepage.php');
require('src/controllers/login.php');
require('src/controllers/register.php');
require('src/controllers/city.php');
require('src/controllers/toilet.php');
require('src/controllers/error.php');

//create route

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if($_GET['action'] === 'login') {
        loginController();
    } elseif($_GET['action'] === 'register') {
        registerController();
    } elseif($_GET['action'] === 'city') {
        cityController();
    } elseif($_GET['action'] === 'toilet') {
        toiletController();
    } elseif($_GET['action'] === 'error') {
        errorController();
    } else {
        header('HTTP/1.1 404 Not Found');
        echo "Erreur 404: la page que vous recherchez n'existe pas";
    };
} else {
    homepageController();
};


// $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if ($uri === '/index' || $uri === '/') {
//     homepageController();
// } elseif ($uri === '/index.php/login') {
//     loginController();
// } elseif ($uri === '/index.php/register') {
//     registerController();
// } elseif ( $uri === '/index.php/search' ) {
// 	searchController();
// } else {
//     header('HTTP/1.1 404 Not Found');
//     echo '<html><body><h1>Page Not Found</h1></body></html>';
// }