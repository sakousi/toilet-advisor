<?php require 'component/header.php'; ?>

<!-- Content -->
<div class="container mx-auto max-w-screen-lg mt-8">
  <h1 class="text-3xl font-bold mb-4">Find Nearby Toilets</h1>
  <div id="map" class="w-full h-96"></div>

  <section id="toilet-list" class="mt-8 shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Toilets</h2>
    <div class="flex flex-wrap mt-4">
      <div class="w-full md:w-1/2 lg:w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="text-xl font-bold mb-2">Toilet 1</h3>
          <img src="https://via.placeholder.com/300x200" alt="Toilet 1" class="mb-2">
          <p class="text-gray-700 text-base mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sapien ac bibendum bibendum, lorem ipsum dolor sit amet.</p>
          <p class="text-gray-700 text-base mb-2">Accessible to PMR: Yes</p>
          <p class="text-gray-700 text-base mb-2">Status: Open</p>
          <a href="#" class="text-blue-500 hover:text-blue-700">Get Directions</a>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="text-xl font-bold mb-2">Toilet 2</h3>
          <img src="https://via.placeholder.com/300x200" alt="Toilet 2" class="mb-2">
          <p class="text-gray-700 text-base mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sapien ac bibendum bibendum, lorem ipsum dolor sit amet.</p>
          <p class="text-gray-700 text-base mb-2">Accessible to PMR: No</p>
          <p class="text-gray-700 text-base mb-2">Status: Closed</p>
          <a href="#" class="text-blue-500 hover:text-blue-700">Get Directions</a>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-lg p-4">
          <h3 class="text-xl font-bold mb-2">Toilet 3</h3>
          <img src="https://via.placeholder.com/300x200" alt="Toilet 3" class="mb-2">
          <p class="text-gray-700 text-base mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, sapien ac bibendum bibendum, lorem ipsum dolor sit amet.</p>
          <p class="text-gray-700 text-base mb-2">Accessible to PMR: Yes</p>
          <p class="text-gray-700 text-base mb-2">Status: Open</p>
          <a href="#" class="text-blue-500 hover:text-blue-700">Get Directions</a>
        </div>
      </div>
    </div>
  </section>

  <section id="top-cities" class="mt-8 shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Top Cities</h2>
    <ol class="list-decimal list-inside mb-4 p-4">
      <li>New York City</li>
      <li>Los Angeles</li>
      <li>Chicago</li>
      <li>Houston</li>
      <li>Phoenix</li>
    </ol>
  </section>

  <section id="favorites" class="mt-8 shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Favorites</h2>
    <ul class="list-disc list-inside mb-4 p-4">
      <li>Toilet 1</li>
      <li>Toilet 2</li>
      <li>Toilet 3</li>
    </ul>
  </section>

<section class="mt-8 mb-8 shadow-md">
  <h2 class="text-2xl font-bold mb-4 text-center">Play Game</h2>
  <canvas id="gameCanvas" class="mx-auto" width="500" height="300"></canvas>
</section>

</div>

<div class="fixed bottom-0 right-0 p-4">
  <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Back to Top
  </a>
</div>



<?php require 'component/footer.php'; ?>