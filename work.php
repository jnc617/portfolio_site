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

<?php
include("includes/header.php");
?>

  <div class="eachPageHeading">
    <p class="pageTitle"> My Work </p>
    <!-- <div class="typewriter">
      <p class="pageSubtitle"> UX Designer studying at Cornell University. </p>
       This phrase should be the same amount of characters as "UX Designer studying at Cornell University." for typewriter to work
    </div> -->
    <!-- Maybe instead of a subtitle add an animated arrow that when clicked takes them down to my projects? -->
  </div>

  <div class = "workImageRow">
    <a href="grt.php">
      <figure>
        <div class="workPicAndCap">
          <div class = "eachWorkPic">
            <img class="workPagePics transparent" src = "images/GRTworkPageTransparent.png" alt = "System Access Review Tool Logo"/>
            <img class="workPagePics imageTop" src = "images/GRTworkPage.png" alt = "System Access Review Tool Logo"/>
          </div>
          <figcaption id="caption1" class="workpagecaptions">
            Access Review Tool
            <p> ;lakjsdf;lkjasdl;kjf;lkajsdf;ljasd a;lksdjfl;kjas dkf asdkf;ask djf ;lsajd;flj as;dlkj f </p>
          </figcaption>
        </div>
      </figure>
    </a>
    <a href="apas.php">
      <figure>
        <div class="workPicAndCap">
          <div class = "eachWorkPic">
            <img class="workPagePics transparent" src = "images/APASworkPageTransparent.png" alt = "Any Person Any Study Logo"/>
            <img class="workPagePics imageTop" src = "images/APASworkPage.png" alt = "Any Person Any Study Logo"/>
          </div>
          <figcaption id="caption2" class="workpagecaptions">
            Any Person Any Study
            <p> ;lakjsdf;lkjasdl;kjf;lkajsdf;ljasd a;lksdjfl;kjas dkf asdkf;ask djf ;lsajd;flj as;dlkj f </p>
          </figcaption>
        </div>
      </figure>
    </a>
    <a href="cwr.php">
      <figure>
        <div class="workPicAndCap">
          <div class = "eachWorkPic">
            <img class="workPagePics transparent" src = "images/CWRworkPageTransparent2.png" alt = "Cornell Welcomes Refugees Logo"/>
            <img class="workPagePics imageTop" src = "images/CWRworkPage.png" alt = "Cornell Welcomes Refugees Logo"/>
          </div>
          <figcaption id="caption3" class="workpagecaptions">
            Cornell Welcomes Refugees Website
            <p> ;lakjsdf;lkjasdl;kjf;lkajsdf;ljasd a;lksdjfl;kjas dkf asdkf;ask djf ;lsajd;flj as;dlkj f </p>
          </figcaption>
        </div>
      </figure>
    </a>
  </div>






<?php
include("includes/footer.php");
?>


</body>
</html>
