<?php include "component/header.php"?>

<main class="mb-auto">

<form class="flex flex-col items-center py-10" method="post" action="login.php">
  <label for="email" class="text-gray-700 font-bold mb-2">Email:</label>
  <input type="email" id="email" name="email" class="w-3/4 px-4 py-2 rounded-lg border-t mr-0 border-b border-gray-200 text-gray-800 bg-white focus:outline-none focus:border-gray-500 border-l border-r" placeholder="Email" required>
  <label for="password" class="text-gray-700 font-bold mb-2">Mot de passe:</label>
  <input type="password" id="password" name="password" class="w-3/4 px-4 py-2 rounded-lg border-t mr-0 border-b border-gray-200 text-gray-800 bg-white focus:outline-none focus:border-gray-500 border-l border-r" placeholder="Password" required>
  <input type="submit" value="Register" class="mt-4 px-4 rounded-lg bg-gray-800 text-white font-bold p-2 uppercase border-gray-800 border-t border-b border-r hover:bg-gray-700 focus:outline-none focus:bg-gray-700"/>
</form>

<div class="flex flex-col items-center mt-4 mb-4">
  <a href="/index" class="px-4 rounded-r-lg bg-gray-800 text-white font-bold p-2 uppercase border-gray-800 border-t border-b border-r hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Retour à la page d'accueil</a>
</div>

</main>

<?php require "component/footer.php" ?>
