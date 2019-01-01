<?php
include "data.php";
include "inc/header.php";
?>

<div id="container">

<!-- columns -->
<img id="column-left" class="column" src="img/column.png"/>
<img id="column-right" class="column" src="img/column.png"/>


<!-- main content -->
<div id="content">

  <!-- logo -->
  <img id="logo" class="full-width" src="img/srlogo-small.png"/>

  <p class="full-width" style="text-align: center;">
    <img class="full-width" src="img/barbedwire.png"/><br><br>
    All Episodes
  </p>

  <!-- episodes -->
  <ul id="episodes">
    <?php
          $i = 0;
          foreach ($episodes as $episode) {

            // break to only list the 10 most recent episodes
            if ($i++ > 100) break;
            echo
              "<li>"
              . "<img id='ep"
              . (string)$episode['number']
              . "' src='https://img.youtube.com/vi/"
              . $episode['id']
              . "/0.jpg' alt='"
              . $episode['id']
              . "'>"
              . "<br>"
              . "<figcaption>"
              . "Ep "
              . $episode['number']
              . ": "
              . $episode['title']
              . "</figcaption>"
              . "</li>"
              ;
          }
        ?>
  </ul>
<p class="fu

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
