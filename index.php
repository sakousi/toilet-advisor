<?php
require('src/controllers/homepage.php');
require('src/controllers/login.php');
require('src/controllers/register.php');
require('src/controllers/search.php');

//create route

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/index' || $uri === '/') {
    homepageController();
} elseif ($uri === '/index.php/login') {
    loginController();
} elseif ($uri === '/index.php/register') {
    registerController();
} elseif ( $uri === '/index.php/search' ) {
	searchController();
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}