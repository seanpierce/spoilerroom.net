<?php
include "data.php";
include "inc/functions.php";
include "inc/header.php";
?>

<div id="container">

<!-- columns -->
<img id="column-left" class="column" src="img/column.png"/>
<img id="column-right" class="column" src="img/column.png"/>


<!-- main content -->
<div id="content">

  <!-- logo -->
  <img id="logo" class="full-width" src="img/srlogo-small.png" onclick="window.location.href='/'"/>

  <!-- most recent episide image -->
  <p class="full-width" style="text-align: center;">> Watch EP <?php echo $highestIndex; ?>: <?php echo $episodes[$highestIndex]['title']; ?> <</p>
  <img id="current-img" class="full-width" src="https://img.youtube.com/vi/<?php echo $episodes[$highestIndex]['id']; ?>/0.jpg" alt="<?php echo $episodes[$highestIndex]['id'] ?>"/>


  <p class="full-width" style="text-align: center;">
    <img class="full-width" src="img/barbedwire.png"/><br><br>
    Episodes
  </p>

  <!-- episodes -->
  <ul id="episodes">
    <?php
        echo buildEpisodes($episodes, false);
	?>
  </ul>
  <p class="full-width, centered">
    <a href="archive.php">All Episodes</a>
  </p>

  <img class="full-width" src="img/underground.png"/>
  <br><br>
  <img class="full-width" src="img/chain.png"/>

  <!-- bottom links -->
  <ul id="links">
    <li id="info-button"><img src="img/info.png"/></li>
    <li><a href="http://dreemstreet.tictail.com/product/spoiler-room-t-shirt" target="_blank"><img src="img/merch.png"/></a></li>
    <li><a href="https://www.instagram.com/spoilerroompdx/" target="_blank"><img src="img/ig.png"/></a></li>
    <li><a href="https://www.youtube.com/channel/UCkWCKfmISKPtFiHHOu1uglw" target="_blank"><img src="img/youtube.png"/></a></li>
  </ul>


<?php
include "inc/footer.php";
?>
