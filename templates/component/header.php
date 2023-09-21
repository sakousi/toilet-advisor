<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=<?php echo "http://" . $_SERVER['SERVER_NAME'] . "/style.css" ?>>
</head>
<body>

<header class="flex items-center justify-between bg-blue-500 p-6">
  <a href="/" class="text-white font-semibold text-xl tracking-tight">Toilet Finder</a>
  <div class="flex items-center">
    <a href="/register" class="text-blue-200 hover:text-white mr-4">Register</a>
    <a href="/login" class="text-blue-200 hover:text-white">Login</a>
  </div>
  <nav class="flex items-center">
    <div class="text-sm mr-4">
      <a href="#map" class="block mt-4 lg:inline-block lg:mt-0 text-blue-200 hover:text-white mr-4">
        Map
      </a>
      <a href="#top-cities" class="block mt-4 lg:inline-block lg:mt-0 text-blue-200 hover:text-white mr-4">
        Top Cities
      </a>
      <a href="#favorites" class="block mt-4 lg:inline-block lg:mt-0 text-blue-200 hover:text-white">
        Favorites
      </a>
    </div>
    <div class="relative w-64">
      <form action="#" method="get">
        <input type="text" name="search" class="w-full h-10 pl-2 pr-8 rounded-lg border-gray-400 border-2" placeholder="Search">
        <button type="submit" class="absolute right-0 top-0 mt-3 mr-2">
          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M19.707 18.293l-5.5-5.5A7.932 7.932 0 0016 7.999c0-4.411-3.589-8-8-8S0 3.588 0 7.999s3.589 8 8 8a7.932 7.932 0 004.793-1.586l5.5 5.5a1 1 0 001.414-1.414zM8 14a6 6 0 110-12 6 6 0 010 12z"/></svg>
        </button>
      </form>
    </div>
    <div>
      <a href="#game" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 lg:mt-0">Play Game</a>
    </div>
  </nav>
</header>
