<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <script type="text/javascript" src="scripts/jquery-3.3.1.min.js"></script>
  <title>Jacob Chovanec's Portfolio</title>
</head>

<body>

      <div id="left"></div>
      <div id="right"></div>
      <div id="top"></div>
      <div id="bottom"></div>
      <!-- code taken from https://css-tricks.com/body-border/ -->

      <?php
    // DO NOT REMOVE!
      include("includes/header.php");
      ?>



        <div class="homeContent">
          <p id="homeName"> Hi, I'm Jacob. </p>
          <div class="typewriter">
            <p id="homeUX"> UX Designer studying at Cornell University </p>
          </div>
          <p> <button> <a href="work.php"> My Projects </a> </button> </p>
          <p id ="homeLogos">
            <button>
              <a href="https://www.facebook.com/cornellpsa/?ref=br_rs"><img class="logos" src="images/fbgray.png" alt="Facebook Logo"/></a>
            </button>
            <button>
              <a href="https://www.instagram.com/cornellpsa/"><img class="logos" src="images/instagray.png" alt="Instagram Logo"/></a>
            </button>
          </p>

        </div>



</body>
</html>
