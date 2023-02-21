<?php
include 'tools.php';
if (empty($_SESSION)) {
  // redirect to index
  header("Location: index.php");
}
else {
  //add info to data file
  bookMovie();
}
?>
<?=printBookingHeader() ?>
<body>
<?= printNavBarReceipt()?>
    <main>
<section id="Receipt">
  <div class="ReceiptBox">
    <div class="receipt">
        <h4 class="receiptH1">RECEIPT</h4>
        <p class="warning">IMPORTANT: Retain this receipt for future use, it is important to print this page. 
        <br>Although your data will be preserved, you will not be able to revisit this page.</p>
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
          <tr>
            <td>Standard Adult</td>
            <td><?php echo $_SESSION["cart"]["seats"]["STA"] ?></td>
          </tr>
          <tr>
            <td>Standard Concession</td>
            <td><?php echo $_SESSION["cart"]["seats"]["STP"] ?></td>
          </tr>
          <tr>
            <td>Standard Child</td>
            <td><?php echo $_SESSION["cart"]["seats"]["STC"] ?></td>
          </tr>
          <tr>
            <td>First Class Adult</td>
            <td><?php echo $_SESSION["cart"]["seats"]["FCA"] ?></td>
          </tr>
          <tr>
            <td>First Class Concession</td>
            <td><?php echo $_SESSION["cart"]["seats"]["FCP"] ?></td>
          </tr>
          <tr>
            <td>First Class Child</td>
            <td><?php echo $_SESSION["cart"]["seats"]["FCC"] ?></td>
          </tr>
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
        <p id="total">Sub Total: $<?php echo number_format($_SESSION["cart"]["subtotal"], 2, '.', '')?><br><strong>Total: $<?php echo number_format($_SESSION["cart"]["total"], 2, '.', '') ?></strong> (including GST: $<?php echo number_format($_SESSION["cart"]["GST"], 2, '.', '') ?>)</p>
        <p>ABN: 00 123 456 789 </p>
        <p>Thank you for booking with Lunardo Cinema.</p>
        <input class="receiptButton" type="button" value="Print This Page" onClick="window.print()" />
      </div>
</div>
      </section>
  </main>
  <?= printReceiptFooter() ?>
  <div class="debug">
      <hr>
      <h4>Debug Area</h4>
      <?= debugModule() ?>
    </div>
</body>
</html>
