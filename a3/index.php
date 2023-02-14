<?php
require 'tools.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Cinema Bairnsdale</title><!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
  <script src='../wireframe.js'></script>
  <script src='script.js'></script><!--webfonts-->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&amp;display=swap" rel="stylesheet">
</head>
<body>
  <div id="navbar">
    <header>
      <div id='lunardoLogo'>
        <a href="#"><img src='../../media/cinema-logo.png' alt='Lunardo-logo'>LUNARDO CINEMA</a>
      </div>
    </header>
    <nav>
      <ul>
        <li id="aboutUsLink">
          <a href="#aboutUs-A"><img src='../../media/aboutus-icon.png' alt='ABOUT US'>ABOUT US</a>
        </li>
        <li id="pricesLink">
          <a href="#prices-A"><img src='../../media/prices-icon.png' alt='PRICES'>PRICES</a>
        </li>
        <li id="nowShowingLink">
          <a href="#nowShowing-A"><img src='../../media/nowshowing-icon.png' alt='NOW SHOWING'>NOW SHOWING</a>
        </li>
      </ul>
    </nav>
  </div>
  <main>
    <?= banner()?>
    <?= aboutUs()?>
    <?= pricing()?>
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
    <?= footer()?>
    <div class="debug">
      <hr>
      <h4>Debug Area</h4>
      <?= debugModule() ?>
    </div>
</body>
</html>