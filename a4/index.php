<?php
require 'tools.php';
?><?= printIndexHeader()?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?= printNavbar()?>
  <main>
    <?= printBanner()?>
    <?= printAboutUs()?>
    <?= printPricing()?>
    <section id='nowShowing'>
      <a id="nowShowing-A"></a>
      <div class='box2'>
        <h2>Now Showing</h2>
        <div class="now-showing-container">
          <?= moviePanel("ACT")?>
          <?= moviePanel("RMC")?>
          <?= moviePanel("ANM")?>
          <?= moviePanel("AHF")?>
        </div>
      </div>
    </section>
  </main><?= printFooter()?>
  <div class="debug">
    <hr>
    <h4>Debug Area</h4><?= debugModule() ?>
  </div>
</body>
</html>