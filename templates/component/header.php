<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/style.css" ?>>
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-blue-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">Toilet Advisor</span>
        </div>
    </nav>
</body>
<header class="flex items-center justify-between bg-blue-500 p-6">
  <h1 class="text-white font-semibold text-xl tracking-tight">Toilet Finder</h1>
  <div class="flex items-center">
    <a href="index.php/register" class="text-blue-200 hover:text-white mr-4">Register</a>
    <a href="index.php/login" class="text-blue-200 hover:text-white">Login</a>
  </div>
</header>
