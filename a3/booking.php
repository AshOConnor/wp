<?php
include 'tools.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Booking Page</title><!-- Keep wireframe.css for debugging, add your css to style.css -->
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
        <a href="index.php"><img src='../../media/cinema-logo.png' alt='Lunardo-logo'>LUNARDO CINEMA</a>
      </div>
    </header>
    <nav>
      <ul>
        <li id="aboutUsLink">
          <a href="index.php#aboutUs"><img src='../../media/aboutus-icon.png' alt='ABOUT US'>ABOUT US</a>
        </li>
        <li id="pricesLink">
          <a href="index.php#prices"><img src='../../media/prices-icon.png' alt='PRICES'>PRICES</a>
        </li>
        <li id="nowShowingLink">
          <a href="index.php#nowShowing"><img src='../../media/nowshowing-icon.png' alt='NOW SHOWING'>NOW SHOWING</a>
        </li>
      </ul>
    </nav>
  </div>
  <main>

    <section id="booking">
      <div class="box3">
        <div class="booking">
          <h3>Booking Form</h3>
          <form name="bookingForm" action="#booking" method="post" id="bookingForm">
            <input type="hidden" id="movie-id" name="movie[id]" value="ACT"> <input type="hidden" id="movie-day" name="movie[day]" value=""> <input type="hidden" id="movie-hour" name="movie[hour]" value="">
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
              <label>Name:</label> <input type="text" name="user[name]" id="user-name" placeholder="e.g. Jane Doe" disabled required=""><br>
              <p></p><label>Email:</label> <input type="email" name="user[email]" id="user-email" placeholder="e.g. example@email.com" disabled required=""><br>
              <p></p><label>Mobile:</label> <input type="tel" name="user[mobile]" id="user-mobile" placeholder="e.g. 0412 345 678" disabled required=""><br>
              <p></p><label>Credit Card:</label> <input type="text" name="user[card]" id="user-card" placeholder="e.g. 1234 5678 1234 5678" disabled required=""><br>
              <p></p><label>Expiry:</label> <input type="month" name="user[expiry]" id="user-expiry" placeholder="e.g. 2025-01" disabled required=""><br>
            </div><br>
            <p id="total">Total: $<a id="totalPrice">0.00</a></p>
            <button id="submitButton" type="submit" name="order" value="Book Tickets" disabled><img src='../../media/prices-icon.png' alt="price-icon">Book Tickets</button>
          </form>
        </div>
      </div>
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