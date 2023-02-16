<?php
include 'tools.php';
require_once 'post-validation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errorMsgArray = validateFormPHP($_POST);
    if (empty($errorMsgArray)) {
        session_start();
        $_SESSION['cart'] = $_POST;
        header('Location: receipt.php');
        exit;
    }
}

// If the code reaches here, it means either the request method was not POST or the form validation failed.
// Display the form with the error messages.
?>

<?=printBookingHeader() ?>
<body>
<?=printNavbar() ?>
</div>
  <main>
  <?=bookingPanel($movieID) ?>
</div>
</div>
</div>
<section id="booking">
      <div class="box3">
        <div class="booking">
          <h3>Booking Form</h3>
          <!-- <form name="bookingForm" action="index.php" method="post" id="bookingForm" onsubmit="validateForm()"> -->
          <form name="bookingForm" action="#booking" method="post">
          <input type=hidden name=movie value='<?=$_GET['movie'] ?>'> <input type="hidden" id="movie-id" name="movie[id]" value=""> <input type="hidden" id="movie-day" name="movie[day]" value=""> <input type="hidden" id="movie-hour" name="movie[hour]" value="">
            <p id="formMessage">Please select the movie, day and time above.</p>
            <div id="seatForm">
              <fieldset>
                <legend>Standard Seats</legend> <label>Adults:</label> <select name="seats[STA]" id="seats-STA" disabled required="">
                  <script>
                  document.write(generateTickNo());
                  </script>
                </select><br>
                <label>Concession:</label> <select name="seats[STP]" id="seats-STP" disabled required="">
                  <script>
                  document.write(generateTickNo());
                  </script>
                </select><br>
                <label>Children:</label> <select name="seats[STC]" id="seats-STC" disabled required="">
                  <script>
                  document.write(generateTickNo());
                  </script>
                </select>
              </fieldset>
              <fieldset>
                <legend>First Class Seats</legend> <label>Adults:</label> <select name="seats[FCA]" id="seats-FCA" disabled required="">
                  <script>
                  document.write(generateTickNo());
                  </script>
                </select><br>
                <label>Concession:</label> <select name="seats[FCP]" id="seats-FCP" disabled required="">
                  <script>
                  document.write(generateTickNo());
                  </script>
                </select><br>
                <label>Children:</label> <select name="seats[FCC]" id="seats-FCC" disabled required="">
                  <script>
                  document.write(generateTickNo());
                  </script>
                </select>
              </fieldset>
            </div>
            <div id="personalInfoForm">
                <label>Name: </label><input type="text" name="cust[name]" id="cust-name" placeholder="e.g. Jane Doe" disabled required> <br>
                <p class="warningMsg"><?php error_reporting(0);
                echo ($errorMsgArray["name"]); ?></p>
                <label>Email: </label><input type="email" name="cust[email]" id="cust-email" placeholder="e.g. example@email.com" disabled required> <br>
                <p class="warningMsg"><?php echo ($errorMsgArray["email"]) ?></p>
                <label>Mobile: </label><input type="tel" name="cust[mobile]" id="cust-mobile" placeholder="e.g. 0412 345 678" disabled required> <br>
                <p class="warningMsg"><?php echo ($errorMsgArray["mobile"]) ?></p>
                <label>Credit Card: </label><input type="text" name="cust[card]" id="cust-card" placeholder="e.g. 1234 5678 1234 5678" disabled required> <br>
                <p class="warningMsg"><?php echo ($errorMsgArray["card"]) ?></p>
                <label>Expiry: </label><input type="month" name="cust[expiry]" id="cust-expiry" placeholder="e.g. 2025-01" disabled required> <br>
                <p class="warningMsg"><?php echo ($errorMsgArray["expiry"]); ?></p>
              </div><br>
            <p id="total">Total: $<a id="totalPrice">0.00</a></p>
            <button id="submitButton" type="submit" name="order" value="Book Tickets" disabled><img src='../../media/prices-icon.png' alt="price-icon">Book Tickets</button>
          </form>
        </div>
    </section>
  </main>
  <?=printFooter() ?>
  <div class="debug">
    <hr>
    <h4>Debug Area</h4>
    <?=debugModule() ?>
  </div>
</body>
</html>
