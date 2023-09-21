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

<script>
  // Get the canvas element and its context
  const canvas = document.getElementById("gameCanvas");
  const ctx = canvas.getContext("2d");

  // Load the background image
  const backgroundImage = new Image();
  backgroundImage.src = "https://img.staticmb.com/mbcontent/images/uploads/2021/7/brick-wall-bathroom-wallpaper-design.jpg";
  backgroundImage.onload = function () {
    // Draw the background image on the canvas
    ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height);
  };

  // Load the toilet image
  const toiletImage = new Image();
  toiletImage.src = "https://d1nhio0ox7pgb.cloudfront.net/_img/i_collection_png/512x512/plain/toilet.png";

  // Load the ball image
  const ballImage = new Image();
  ballImage.src = "https://png.pngtree.com/element_our/20190602/ourmid/pngtree-white-toilet-paper-image_1400497.jpg";
  ballImage.onload = function () {
    // Start the game loop after the ball image is loaded
    requestAnimationFrame(gameLoop);
  };

  // Set up the game variables
  let score = 0;
  let balls = [];

  // Set up the event listener for mouse clicks
  canvas.addEventListener("click", function (event) {
    // Create a new ball at the mouse position
    const ball = {
      x: event.clientX - canvas.getBoundingClientRect().left,
      y: event.clientY - canvas.getBoundingClientRect().top,
      radius: 10,
      color: "red",
      speed: 5,
      angle: Math.random() * Math.PI,
    };

    // Add the ball to the balls array
    balls.push(ball);
  });

  // Update the ball's movement
  function updateBall(ball) {
    // Move the ball
    ball.x += ball.speed * Math.cos(ball.angle);
    ball.y += ball.speed * Math.sin(ball.angle);

    // Check if the ball is in the bottom half of the canvas
    if (ball.y > canvas.height / 2) {
      // Generate a new random angle for the ball
      ball.angle = Math.random() * Math.PI;
    }
  }

  // Set up the game loop
  function gameLoop() {
    // Clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw the background image
    ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height);

    // Draw the toilet image
    ctx.drawImage(toiletImage, canvas.width / 2 - 25, canvas.height - 50, 50, 50);

    // Update and draw the balls
    for (let i = 0; i < balls.length; i++) {
      const ball = balls[i];

      // Update the ball's movement
      updateBall(ball);

      // Check if the ball is inside the toilet
      if (
        ball.x > canvas.width / 2 - 25 &&
        ball.x < canvas.width / 2 + 25 &&
        ball.y > canvas.height - 50 &&
        ball.y < canvas.height
      ) {
        // Increment the score and remove the ball
        score++;
        balls.splice(i, 1);
      } else {
        // Draw the ball
        ctx.drawImage(
          ballImage,
          ball.x - ball.radius,
          ball.y - ball.radius,
          ball.radius * 2,
          ball.radius * 2
        );
      }
    }

    // Draw the score
    ctx.fillStyle = "black";
    ctx.font = "24px Arial";
    ctx.fillText("Score: " + score, 10, 30);

    // Call the game loop again
    requestAnimationFrame(gameLoop);
  }

  // Start the game loop
  requestAnimationFrame(gameLoop);
</script>

<?php require 'component/footer.php'; ?>