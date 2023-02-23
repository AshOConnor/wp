<?php
include 'tools.php';

if (empty($_SESSION))
{
    // redirect to index
    header("Location: index.php");
}
else
{
    //add info to data file
    bookMovie();
}
?><?=printReceiptHeader() ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?=printNavBarReceipt() ?>
  <main>
    <section id="Receipt">
      <div class="ReceiptBox">
        <div class="receipt">
          <h4 class="receiptH1">RECEIPT</h4>
          <p class="warning">IMPORTANT: Retain this receipt for future use, it is important to print this page.<br>
          Although your data will be preserved, you will not be able to revisit this page.</p>
          <table class="receiptTable">
            <tr>
              <th colspan="2">MOVIE INFORMATION</th>
            </tr>
            <tr>
              <td>ID</td>
              <td><?php echo $_SESSION["cart"]["movie"]["id"] ?></td>
            </tr>
            <tr>
              <td>Day</td>
              <td><?php echo $_SESSION["cart"]["movie"]["day"] ?></td>
            </tr>
            <tr>
              <td>Hour</td>
              <td><?php echo $_SESSION["cart"]["movie"]["hour"] ?></td>
            </tr>
          </table>
          <table class="receiptTable">
  <tr>
    <th colspan="2">SEATS BOOKED</th>
  </tr>
  <?php foreach ($_SESSION["cart"]["seats"] as $seatType => $seatCount)
{ ?>
    <?php if ($seatCount > 0)
    { ?>
      <tr>
      <td><?php echo ($seatType == 'STA') ? 'Standard Adult' : (($seatType == 'STP') ? 'Standard Concession' : (($seatType == 'STC') ? 'Standard Child' : (($seatType == 'FCA') ? 'First Class Adult' : (($seatType == 'FCP') ? 'First Class Concession' : 'First Class Child')))); ?></td>
        <td><?php echo $seatCount; ?></td>
      </tr>
    <?php
    } ?>
  <?php
} ?>
</table>
<table class="receiptTable">
            <tr>
              <th colspan="2">CUSTOMER DETAILS</th>
            </tr>
            <tr>
              <td>Name</td>
              <td><?php echo $_SESSION["cart"]["cust"]["name"] ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo $_SESSION["cart"]["cust"]["email"] ?></td>
            </tr>
            <tr>
              <td>Mobile</td>
              <td><?php echo $_SESSION["cart"]["cust"]["mobile"] ?></td>
            </tr>
          </table>
          <p id="total">Sub Total: $<?php echo number_format($_SESSION["cart"]["subtotal"], 2, '.', '') ?><br>
          <strong>Total: $<?php echo number_format($_SESSION["cart"]["total"], 2, '.', '') ?></strong> (including GST: $<?php echo number_format($_SESSION["cart"]["GST"], 2, '.', '') ?>)</p>
          <p>Thank you for booking with Lunardo Cinema.</p><input class="receiptButton" type="button" value="Print This Page" onclick="window.print()">
        </div>
      </div>
    </section>
    <section id="ticket">
      <div class="movieTicket">
        <?php foreach ($_SESSION["cart"]["seats"] as $seatType => $seatCount): ?>
        <div class="tickets">
          <?php for ($i = 0;$i < $seatCount;$i++): ?><?php $ticket = createMovieTicket($seatType); ?>
          <pre class="ticket"><?php echo $ticket; ?></pre><?php
    endfor; ?>
        </div><?php
endforeach; ?>
      </div>
    </section>
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
