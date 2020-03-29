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

<?php
include("includes/header.php");
?>

  <div class = "workImageRow">
    <figure>
      <div class = "eachWorkPic">
        <img class="workPagePics" src = "images/GRTworkPageTransparent.png" alt = "System Access Review Tool Logo"/>
        <img class="workPagePics imageTop" src = "images/GRTworkPage.png" alt = "System Access Review Tool Logo"/>
      </div>
    </figure>
    <figure>
      <div class = "eachWorkPic">
        <img class="workPagePics" src = "images/APASworkPageTransparent.png" alt = "Any Person Any Study Logo"/>
        <img class="workPagePics imageTop" src = "images/APASworkPage.png" alt = "Any Person Any Study Logo"/>
      </div>
    </figure>
    <figure>
      <div class = "eachWorkPic">
        <img class="workPagePics" src = "images/CWRworkPageTransparent2.png" alt = "Cornell Welcomes Refugees Logo"/>
        <img class="workPagePics imageTop" src = "images/CWRworkPage.png" alt = "Cornell Welcomes Refugees Logo"/>
      </div>
    </figure>
  </div>






<?php
include("includes/footer.php");
?>

</body>
</html>
