<?php
include 'tools.php';
?><?=printReceiptHeader() ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?=printNavbarBooking() ?>
  <main>
  <?=displayBookings()?>
  </main>
  <div class="receiptFooter">
    <?=printReceiptFooter() ?>
  </div>
  <div class="debug">
    <hr>
    <h4>Debug Area</h4><?=debugModule() ?>
  </div>
</body>
</html>