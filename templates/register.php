<?php include "component/header.php" ?>

<form class="flex flex-col items-center" method="post" action="register.php">
  <label for="username" class="text-gray-700 font-bold mb-2">Username:</label>
  <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none focus:border-gray-500" placeholder="Name" required>
  <label for="email" class="text-gray-700 font-bold mb-2">Email:</label>
  <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none focus:border-gray-500" placeholder="Email" required>
  <label for="password" class="text-gray-700 font-bold mb-2">Password:</label>
  <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none focus:border-gray-500" placeholder="Password" required>
  <input type="submit" value="Register" class="mt-4 px-4 rounded-r-lg bg-gray-800 text-white font-bold p-2 uppercase border-gray-800 border-t border-b border-r hover:bg-gray-700 focus:outline-none focus:bg-gray-700"/>
</form>

<div class="flex flex-col items-center mt-4 mb-4">
  <a href="/index" class="px-4 rounded-r-lg bg-gray-800 text-white font-bold p-2 uppercase border-gray-800 border-t border-b border-r hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Retour à la page d'accueil</a>
</div>



<?php include "component/footer.php" ?>