<?php
require 'tools.php';
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
    <section id="AvatarBook">
    <a id="Avatar"></a>
      <div class="box3">
        <h2>Avatar: The Way of Water</h2>
        <h2>PG-13</h2>
        <h3>Synopsis<br></h3>
        <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/d9MyW72ELq0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="booking-form-avatar">
        <form>
          <h3>Number of tickets</h3>
          <label>Standard Adult Seats: <input type="number" name="sta" min="0" max="10" placeholder="Please Select" onchange="calculateTotal()" data-fullprice="21.50" data-disprice="16.00"></label><br>
          <label>Standard Concession Seats: <input type="number" name="stp" min="0" max="10" onchange="calculateTotal()" data-fullprice="19.00" data-disprice="14.50"></label><br>
          <label>Standard Child Seats: <input type="number" name="stc" min="0" max="10" onchange="calculateTotal()" data-fullprice="17.50" data-disprice="13.00"></label><br>
          <label>First Class Adult Seats: <input type="number" name="fca" min="0" max="10" onchange="calculateTotal()" data-fullprice="31.00" data-disprice="25.00"></label><br>
          <label>First Class Concession Seats: <input type="number" name="fcp" min="0" max="10" onchange="calculateTotal()" data-fullprice="28.00" data-disprice="23.50"></label><br>
          <label>First Class Child Seats: <input type="number" name="fcc" min="0" max="10" onchange="calculateTotal()" data-fullprice="25.00" data-disprice="22.00"></label><br>
          <br>
          <h3>Session Time Selection</h3>
          <label>Monday 9:00pm <input type="radio" name="session" value="Monday 9:00pm" onchange="calculateTotal()"></label><br>
          <label>Tuesday 9:00pm <input type="radio" name="session" value="Tuesday 9:00pm" onchange="calculateTotal()"></label><br>
          <label>Wednesday 9:00pm <input type="radio" name="session" value="Wednesday 9:00pm" onchange="calculateTotal()"></label><br>
          <label>Thursday 9:00pm <input type="radio" name="session" value="Thursday 9:00pm" onchange="calculateTotal()"></label><br>
          <label>Friday 9:00pm <input type="radio" name="session" value="Friday 9:00pm" onchange="calculateTotal()"></label><br>
          <label>Saturday 6:00pm <input type="radio" name="session" value="Saturday 6:00pm" onchange="calculateTotal()"></label><br>
          <label>Sunday 6:00pm <input type="radio" name="session" value="Sunday 6:00pm" onchange="calculateTotal()"></label><br>
          <br>
          <h3>Your Contact Information</h3>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Jane Doe" pattern="^[a-zA-Z,.'-]+$" required="">
          <br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="JaneDoe@outlook.com" required="">
          <br><br>
          <label for="mobile">Mobile:</label>
          <input type="text" id="mobile" name="mobile" placeholder="0400 000 000" pattern="^04[0-9]{8}|[0-9]{4}[\s]?[0-9]{4}$" required="">
          <br><br>
          <label>Total: $<span id="totalPrice">0.00</span></label><br>
          <br>
          <input type="submit" value="Checkout">
        </form>
        </div>
      </div>
    </section>
    <section id="WeirdBook">
    <a id="Weird"></a>
      <div class="box3">
        <h2>Weird: The Al Yankovic Story</h2>
        <h2>TV-14</h2>
        <h3>Synopsis<br></h3>
        <p>Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/Ols03gpTjW4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br>
        <div id="booking-form-weird">
        <form>
          <h3>Number of tickets</h3>
          <label>Standard Adult Seats: <input type="number" name="sta" min="0" max="10" onchange="calculateTotal()" data-fullprice="21.50" data-disprice="16.00"></label><br>
          <label>Standard Concession Seats: <input type="number" name="stp" min="0" max="10" onchange="calculateTotal()" data-fullprice="19.00" data-disprice="14.50"></label><br>
          <label>Standard Child Seats: <input type="number" name="stc" min="0" max="10" onchange="calculateTotal()" data-fullprice="17.50" data-disprice="13.00"></label><br>
          <label>First Class Adult Seats: <input type="number" name="fca" min="0" max="10" onchange="calculateTotal()" data-fullprice="31.00" data-disprice="25.00"></label><br>
          <label>First Class Concession Seats: <input type="number" name="fcp" min="0" max="10" onchange="calculateTotal()" data-fullprice="28.00" data-disprice="23.50"></label><br>
          <label>First Class Child Seats: <input type="number" name="fcc" min="0" max="10" onchange="calculateTotal()" data-fullprice="25.00" data-disprice="22.00"></label><br>
          <br>
          <h3>Session Time Selection</h3>
          <label>Wednesday 12:00pm <input type="radio" name="session" value="Wednesday 12:00pm" onchange="calculateTotal()"></label><br>
          <label>Thursday 12:00pm <input type="radio" name="session" value="Thursday 12:00pm" onchange="calculateTotal()"></label><br>
          <label>Friday 12:00pm <input type="radio" name="session" value="Friday 12:00pm" onchange="calculateTotal()"></label><br>
          <label>Saturday 3:00pm <input type="radio" name="session" value="Saturday 3:00pm" onchange="calculateTotal()"></label><br>
          <label>Sunday 3:00pm <input type="radio" name="session" value="Sunday 3:00pm" onchange="calculateTotal()"></label><br>
          <br>
          <h3>Your Contact Information</h3>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Jane Doe" pattern="^[a-zA-Z,.'-]+$" required="">
          <br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="JaneDoe@outlook.com" required="">
          <br><br>
          <label for="mobile">Mobile:</label>
          <input type="text" id="mobile" name="mobile" placeholder="0400 000 000" pattern="^04[0-9]{8}|[0-9]{4}[\s]?[0-9]{4}$" required="">
          <br><br>
          <label>Total: $<span id="totalPrice">0.00</span></label><br>
          <br>
          <input type="submit" value="Checkout">
        </form>
        </div>
      </div>
    </section>
    <section id="PussBook">
    <a id="Puss"></a>
      <div class="box3">
        <h2>Puss in Boots: The Last Wish</h2>
        <h2>PG-13</h2>
        <h3>Synopsis<br></h3>
        <p>Puss in Boots discovers that his passion for adventure has taken its toll: he has burned through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/tHb7WlgyaUc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="booking-form-puss">
        <form>
          <h3>Number of tickets</h3>
          <label>Standard Adult Seats: <input type="number" name="sta" min="0" max="10" onchange="calculateTotal()" data-fullprice="21.50" data-disprice="16.00"></label><br>
          <label>Standard Concession Seats: <input type="number" name="stp" min="0" max="10" onchange="calculateTotal()" data-fullprice="19.00" data-disprice="14.50"></label><br>
          <label>Standard Child Seats: <input type="number" name="stc" min="0" max="10" onchange="calculateTotal()" data-fullprice="17.50" data-disprice="13.00"></label><br>
          <label>First Class Adult Seats: <input type="number" name="fca" min="0" max="10" onchange="calculateTotal()" data-fullprice="31.00" data-disprice="25.00"></label><br>
          <label>First Class Concession Seats: <input type="number" name="fcp" min="0" max="10" onchange="calculateTotal()" data-fullprice="28.00" data-disprice="23.50"></label><br>
          <label>First Class Child Seats: <input type="number" name="fcc" min="0" max="10" onchange="calculateTotal()" data-fullprice="25.00" data-disprice="22.00"></label><br>
          <br>
          <h3>Session Time Selection</h3>
          <label>Monday 12:00pm <input type="radio" name="session" value="Monday 12:00pm" onchange="calculateTotal()"></label><br>
          <label>Tuesday 12:00pm <input type="radio" name="session" value="Tuesday 12:00pm" onchange="calculateTotal()"></label><br>
          <label>Wednesday 6:00pm <input type="radio" name="session" value="Wednesday 6:00pm" onchange="calculateTotal()"></label><br>
          <label>Thursday 6:00pm <input type="radio" name="session" value="Thursday 6:00pm" onchange="calculateTotal()"></label><br>
          <label>Friday 6:00pm <input type="radio" name="session" value="Friday 6:00pm" onchange="calculateTotal()"></label><br>
          <label>Saturday 12:00pm <input type="radio" name="session" value="Saturday 12:00pm" onchange="calculateTotal()"></label><br>
          <label>Sunday 12:00pm <input type="radio" name="session" value="Sunday 12:00pm" onchange="calculateTotal()"></label><br>
          <br>
          <h3>Your Contact Information</h3>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Jane Doe" pattern="^[a-zA-Z,.'-]+$" required="">
          <br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="JaneDoe@outlook.com" required="">
          <br><br>
          <label for="mobile">Mobile:</label>
          <input type="text" id="mobile" name="mobile" placeholder="0400 000 000" pattern="^04[0-9]{8}|[0-9]{4}[\s]?[0-9]{4}$" required="">
          <br><br>
          <label>Total: $<span id="totalPrice">0.00</span></label><br>
          <br>
          <input type="submit" value="Checkout">
        </form>
        </div>
      </div>
    </section>
    <section id="MargreteBook">
    <a id="Margrete"></a>
      <div class="box3">
        <h2>Margrete: Queen of the North</h2>
        <h2>MA-15+</h2>
        <h3>Synopsis<br></h3>
        <p>1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/-7OCX98JgGk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="booking-form-margrete">
        <form>
          <h3>Number of tickets</h3>
          <label>Standard Adult Seats: <input type="number" name="sta" min="0" max="10" onchange="calculateTotal()" data-fullprice="21.50" data-disprice="16.00"></label><br>
          <label>Standard Concession Seats: <input type="number" name="stp" min="0" max="10" onchange="calculateTotal()" data-fullprice="19.00" data-disprice="14.50"></label><br>
          <label>Standard Child Seats: <input type="number" name="stc" min="0" max="10" onchange="calculateTotal()" data-fullprice="17.50" data-disprice="13.00"></label><br>
          <label>First Class Adult Seats: <input type="number" name="fca" min="0" max="10" onchange="calculateTotal()" data-fullprice="31.00" data-disprice="25.00"></label><br>
          <label>First Class Concession Seats: <input type="number" name="fcp" min="0" max="10" onchange="calculateTotal()" data-fullprice="28.00" data-disprice="23.50"></label><br>
          <label>First Class Child Seats: <input type="number" name="fcc" min="0" max="10" onchange="calculateTotal()" data-fullprice="25.00" data-disprice="22.00"></label><br>
          <br>
          <h3>Session Time Selection</h3>
          <label>Monday 6:00pm <input type="radio" name="session" value="Monday 6:00pm" onchange="calculateTotal()"></label><br>
          <label>Tuesday 6:00pm <input type="radio" name="session" value="Tuesday 6:00pm" onchange="calculateTotal()"></label><br>
          <label>Saturday 9:00pm <input type="radio" name="session" value="Saturday 9:00pm" onchange="calculateTotal()"></label><br>
          <label>Sunday 9:00pm <input type="radio" name="session" value="Sunday 9:00pm" onchange="calculateTotal()"></label><br>
          <br>
          <h3>Your Contact Information</h3>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Jane Doe" pattern="^[a-zA-Z,.'-]+$" required="">
          <br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="JaneDoe@outlook.com" required="">
          <br><br>
          <label for="mobile">Mobile:</label>
          <input type="text" id="mobile" name="mobile" placeholder="0400 000 000" pattern="^04[0-9]{8}|[0-9]{4}[\s]?[0-9]{4}$" required="">
          <br><br>
          <label>Total: $<span id="totalPrice">0.00</span></label><br>
          <br>
          <input type="submit" value="Checkout">
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
  <div id="debug">
    <hr>
    <h3>Debug Area</h3>
    <?= debugModule() ?>
    <?= PrintMyCode() ?>
  </div>
</body>
</html>
