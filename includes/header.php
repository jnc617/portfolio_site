<header>
  <div class = "navbarAll">
    <?php $pages = [['index.php', 'Home'],['work.php', 'Work'], ['aboutme.php', 'About Me'], ['https://www.dropbox.com/s/48oegt7b92yudsd/resume%20SU19.pdf?dl=0', 'Resume']/*, ['gallery.php', 'Photo Gallery']*/] ?>

      <?php $current_file = basename($_SERVER['PHP_SELF']);
      // code above taken from INFO 2300 lab02 write up https://github.coecis.cornell.edu/info2300-sp2019/info2300-sp2019-website/blob/master/assignments/lab-03/lab-3.md

        $current_style = "current_page"; ?>
    <div id="mainNav">
      <div>
        <ul class = "navLinks">
          <?php foreach ($pages as $page) { ?>
            <li><a class = "<?php if ($current_file == $page[0]) {echo $current_style;}?>" href="<?php echo $page[0]?>"><?php echo $page[1] ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <!-- <div>
        <ul class="myNameNav">
          <li> <strong> Jacob Chovanec </strong></li>
        </ul>
      </div>
      <div>
        <ul>
          <li>
            <a href="https://www.facebook.com/cornellpsa/?ref=br_rs"><img class="logos"
            src="images/fbgray.png" alt="Facebook Logo"/></a>
          </li>
          <li>
            <a href="https://www.instagram.com/cornellpsa/"><img class="logos"
            src="images/instagray.png" alt="Instagram Logo"/></a>
          </li>
        </ul>
      </div> -->
    </div>
  </div>

<!-- add linkedin and email links here. use the gmail mailto link -->
</header>
