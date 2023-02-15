<?php
require 'tools.php';
?>

<?= printIndexHeader()?>
<body>
<?= printNavbar()?>
  <main>
    <?= printBanner()?>
    <?= printAboutUs()?>
    <?= printPricing()?>
    <section id='nowShowing'>
      <a id="nowShowing-A">
      <div class='box2'>
        <h2>Now Showing</h2>
        <div class="now-showing-container">
          <?= moviePanel("ACT")?>
          <?= moviePanel("RMC")?>
          <?= moviePanel("ANM")?>
          <?= moviePanel("AHF")?>
        </div>
      </a>
</section>
    </main>
    <?= printFooter()?>
    <div class="debug">
      <hr>
      <h4>Debug Area</h4>
      <?= debugModule() ?>
    </div>
</body>
</html>