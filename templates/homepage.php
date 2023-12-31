<?php include "component/header.php" ?>

<main class="mb-auto">

<form class="mt-10 flex flex-col items-center" action="/" method="POST">
    <label for="city" class="text-gray-700 font-bold mb-2 mt-4">Ville ou code postal:</label>
    <div class="flex items-center">
      <input type="text" id="search" name="search" class="w-full px-4 py-2 rounded-l-lg border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none focus:border-gray-500" placeholder="ville ou code postal">
      <input type="submit" value='A vos toilettes' class="px-4 rounded-r-lg bg-gray-800 text-white font-bold p-2 uppercase border-gray-800 border-t border-b border-r hover:bg-gray-700 focus:outline-none focus:bg-gray-700" />
    </div>
</form>
  
</main>
  
<?php include "component/footer.php" ?>