<?php
include 'tools.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Receipt Page</title><!-- Keep wireframe.css for debugging, add your css to style.css -->
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
        <img src='../../media/cinema-logo.png' alt='Lunardo-logo'>LUNARDO CINEMA</a>
      </div>
    <main>
    <div class="receipt">
        <h1>RECEIPT</h1>
        <p class="warning">IMPORTANT: Please print this page to keep this receipt for future reference. Your data will be saved, but will not be able to access this page again.</p>
        <table class="receiptTable">
          <tr>
            <th colspan="2">MOVIE INFORMATION</th>
          </tr>
          <tr>
            <td>ID</td>
            <td><?php echo $_SESSION["cart"]["movie"]["id"]?></td>
          </tr>
          <tr>
            <td>Day</td>
            <td><?php echo $_SESSION["cart"]["movie"]["day"]?></td>
          </tr>
          <tr>
            <td>Hour</td>
            <td><?php echo $_SESSION["cart"]["movie"]["hour"]?></td>
          </tr>
        </table>
        <table class="receiptTable">
          <tr>
            <th colspan="2">SEATS BOOKED</th>
          </tr>
          <tr>
            <td>Standard Adult</td>
            <td><?php echo $_SESSION["cart"]["seats"]["STA"]?></td>
          </tr>
          <tr>
            <td>Standard Concession</td>
            <td><?php echo $_SESSION["cart"]["seats"]["STP"]?></td>
          </tr>
          <tr>
            <td>Standard Child</td>
            <td><?php echo $_SESSION["cart"]["seats"]["STC"]?></td>
          </tr>
          <tr>
            <td>First Class Adult</td>
            <td><?php echo $_SESSION["cart"]["seats"]["FCA"]?></td>
          </tr>
          <tr>
            <td>First Class Concession</td>
            <td><?php echo $_SESSION["cart"]["seats"]["FCP"]?></td>
          </tr>
          <tr>
            <td>First Class Child</td>
            <td><?php echo $_SESSION["cart"]["seats"]["FCC"]?></td>
          </tr>
        </table>
        <table class="receiptTable">
          <tr>
            <th colspan="2">CUSTOMER DETAILS</th>
          </tr>
          <tr>
            <td>Name</td>
            <td><?php echo $_SESSION["cart"]["cust"]["name"]?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $_SESSION["cart"]["cust"]["email"]?></td>
          </tr>
          <tr>
            <td>Mobile</td>
            <td><?php echo $_SESSION["cart"]["cust"]["mobile"]?></td>
          </tr>
        </table>
        <p id="total"><strong>Total: $<?php echo number_format($_SESSION["cart"]["total"], 2, '.', '')?></strong> (including GST: $<?php echo number_format($_SESSION["cart"]["GST"], 2, '.', '')?>)</p>
        <p>ABN: 00 123 456 789 </p>
        <p>Thank you for booking with Lunardo Cinema. We hope you enjoy our hospitality and the movie.</p>
        <input class="receiptButton" type="button" value="Print This Page" onClick="window.print()" />
        <input class="receiptButton" type="button" value="Back to Home page" onClick="location.href='index.php'" />
      </div>
  </main>
</body>
</html>