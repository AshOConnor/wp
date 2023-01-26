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
    <section id='sessions'>
      <div class='box3'>
        <div class='boxText'>
          <h2>BOOKINGS</h2>
          <div class='sessionTimes' onclick="changeMovie('ACT')">
            <img src='../../media/AvatarTheWayofWater-poster.jpg' alt='Avatar-poster'>
            <div class='movieInfo'>
              <h3>Avatar: The Way of Water</h3>
              <h4>PG</h4>
              <ul>
                <li>Wed - 2100</li>
                <li>Thu - 2100</li>
                <li>Fri - 2100</li>
                <li>Sat - 1800</li>
                <li>Sun - 1800</li>
              </ul>
            </div>
          </div>
          <div class='sessionTimes' onclick="changeMovie('RMC')">
            <div class='movieInfo'>
              <h3>Weird: The Al Yankovic Story</h3>
              <h4>TV</h4>
              <ul>
                <li>Wed - 1200</li>
                <li>Thu - 1200</li>
                <li>Fri - 1200</li>
                <li>Sat - 1500</li>
                <li>Sun - 1500</li>
              </ul>
            </div>
            <img src='../../media/WeirdAl-poster.jpg' alt='WeirdAl-poster'>
          </div>
          <div class='sessionTimes' onclick="changeMovie('ANM')">
            <img src='../../media/PussInBoots-poster.jpg' alt='PussInBoots-poster'>
            <div class='movieInfo'>
              <h3>Puss in Boots: The Last Wish</h3>
              <h4>PG</h4>
              <ul>
                <li>Mon - 1200</li>
                <li>Tue - 1200</li>
                <li>Wed - 1800</li>
                <li>Thu - 1800</li>
                <li>Fri - 1800</li>
                <li>Sat - 1200</li>
                <li>Sun - 1200</li>
              </ul>
            </div>
          </div>
          <div class='sessionTimes' onclick="changeMovie('AHF')">
            <div class='movieInfo'>
              <h3>Margrete: Queen of the North</h3>
              <h4>MA</h4>
              <ul>
                <li>Mon - 1800</li>
                <li>Tue - 1800</li>
                <li>Sat - 2100</li>
                <li>Sun - 2100</li>
              </ul>
            </div>
            <img src='../../media/MargreteQueenoftheNorth-poster.jpg' alt='QueenoftheNorth-poster'>
          </div>
        </div>
      </div>
    </section>
    <section id="synopsis">
      <div class="synopsis">
        <div class='box3'>
          <div class='boxText'>
            <h3 id="title">Avatar: The Way of Water</h3>
            <div class='synopsis-info'>
              <h4 id="rating">PG</h4>
              <h4>Plot Description</h4>
              <p id="plot">Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p>
            </div><iframe id="trailer" src="https://www.imdb.com/videoembed/vi3565864217" allowfullscreen width="854" height="400" name="trailer"></iframe><br>
            <br>
            <h3 id='movieSelectTitle'>Movie Selection:</h3>
            <ul id='movieSelectList'>
              <li><input type="image" src='../../media/AvatarTheWayofWater-poster.jpg' alt='Avatar-poster' onclick="changeMovie('ACT')"></li>
              <li><input type="image" src='../../media/WeirdAl-poster.jpg' alt='WeirdAl-poster' onclick="changeMovie('RMC')"></li>
              <li><input type="image" src='../../media/PussInBoots-poster.jpg' alt='PussInBoots-poster' onclick="changeMovie('ANM')"></li>
              <li><input type="image" src='../../media/MargreteQueenoftheNorth-poster.jpg' alt='QueenoftheNorth-poster' onclick="changeMovie('AHF')"></li>
            </ul>
            <h3 id='bookingTitle'>Day & Time Selection</h3>
            <ul id="bookingTimeList">
              <li><input class="bookingTime" type="button" value="Wed - 2100" onclick='selectMovie("Wed - 2100")'></li>
              <li><input class="bookingTime" type="button" value="Thu - 2100" onclick='selectMovie("Thu - 2100")'></li>
              <li><input class="bookingTime" type="button" value="Fri - 2100" onclick='selectMovie("Fri - 2100")'></li>
              <li><input class="bookingTime" type="button" value="Sat - 1800" onclick='selectMovie("Sat - 1800")'></li>
              <li><input class="bookingTime" type="button" value="Sun - 1800" onclick='selectMovie("Sun - 1800")'></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
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
  <footer>
    <div class="footer">
      <p>Contact us:</p>
      <ul>
        <li>Email: <a href="mailto:enquiries@lunardo.com" target="_top">enquiries@lunardo.com</a>
        </li>
        <li>Phone: <a href="callto:+61351526455">(+61)03 5152 6455</a>
        </li>
        <li>Address: <a href="https://goo.gl/maps/f5tidqmvh3hUM7CJA">112 Macleod St, Bairnsdale VIC 3875</a>
        </li>
      </ul>
    </div>
    <div>
      <script>
        document.write(new Date().getFullYear());
      </script> Ash O'Connor s3915744 <a href="https://github.com/AshOConnor/wp" target="_blank"><img src="https://img.shields.io/badge/GitHub_Repo-100000?style=for-the-badge&amp;logo=github&amp;logoColor=white" alt="GitHub Repo"></a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>
       .
    </div>
    <div>
      Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
    </div>
    <div>
      <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </div>
  </footer>
  <div class="debug">
    <hr>
    <h4>Debug Area</h4><?= debugModule() ?>
    <?= PrintMyCode() ?>
  </div>
</body>
</html>