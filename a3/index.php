<?php
session_start();
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
    <section id='Banner'>
      <div class="box1">
        <div id="bannerContent">
          <div class="bannertext">
            <h1>A Cinematic Experience In The Finest Form</h1>
            <p>With the comfort and luxury of Lunardo Cinema, come and create an unforgettable experience.</p>
          </div>
        </div>
      </div>
    </section>
    <section id='aboutUs'>
      <div class="box2">
        <a id="aboutUs-A"></a>
        <article id="aboutUs-A"></article>
        <h2>ABOUT US</h2>
        <hr>
        <div id='History'>
          <h3>Lunardo History</h3>
          <p>Lunardo Cinema is locally owned and has been screening films for the past 40 years! we have 3 individual screening rooms, a cafeteria and lolly bar!<br>
          At Lunardo Cinema we are always showing the latest and greatest box office films. For information on upcoming movies and events subscribe to our mailing list!</p>
        </div>
        <hr>
        <div id='Renovation'>
        <h3>Recent Renovations</h3>
        <p>We have currently undergone a huge renovation to all 3 of our screening rooms over the past 6 months and are welcoming everyone to come try out the latest cinematic experience.<br>
        We have partnered up with the team at Dolby bringing you the latest sound, display and visual technologies to give you an even greater experience than before.</p><br>
        <img src="../../media/renovated-cinema.jpg" alt="Renovated Cinema"></div>
        <hr>
        <div id='Seats'>
          <h3>Upgraded Seating</h3>
          <div class="seatInfo">
            <h4>Standard Seats</h4><img src="../../media/Profern-Standard-Twin.png" alt="Standard seats">
            <ul>
              <li>Leather headrest</li>
              <li>Foldable armrest</li>
              <li>Drink Holders</li>
            </ul>
          </div>
          <div class="seatInfo">
            <h4>First Class Seats</h4><img src="../../media/Profern-Verona-Twin.png" alt="Premium First Class Maximum Comfort Deluxe Seats">
            <ul>
              <li>Full leather seats</li>
              <li>Full power reclinable</li>
              <li>Table trays</li>
              <li>Drink holders</li>
              <li>Mood lighting</li>
              <li>Foldable armrest</li>
            </ul>
          </div>
        </div>
        <hr>
        <div id='Dolby'>
          <h3>3D Dolby Vision and Dolby Atmos</h3><img src="../../media/dolby-logo.png" alt="Dolby Atmos">
          <p>We are excited to announce that we have upgraded our projection and sound systems with 3D Dolby Vision projection and Dolby Atmos sound. This means that you can now experience movies in a whole new way. 
            With 3D Dolby Vision, you will see more accurate and vibrant colors, deeper blacks, and a wider color gamut, making the picture appear more lifelike and creating a more immersive visual experience.<br><br>
            Additionally, Dolby Atmos sound uses object-based audio to create a more realistic and lifelike sound stage. This allows for sound to be placed and moved around the room, making the audio more immersive and engaging. 
            This combination of cutting-edge visual and audio technology will give you a truly unparalleled movie-watching experience.
            We invite you to come and experience it for yourself, and see the difference it makes in your movie-going experience.</p>
        </div>
      </div>
    </section>
    <section id='prices'>
      <article id="prices-A"></article>
      <div class='box2'>
        <h2>PRICES</h2>
        <p>The Cinema offers discounted pricing weekday afternoons (ie 12pm weekday matinée sessions) and all day on Mondays.</p>
        <table>
          <tr id='labels'>
            <th>Seat Type</th>
            <th>Seat Code</th>
            <th>All day Monday AND from 12pm on Weekdays</th>
            <th>All other times</th>
          </tr>
          <tr>
            <td>Standard Adult</td>
            <td>STA</td>
            <td>$16.00</td>
            <td>$21.50</td>
          </tr>
          <tr>
            <td>Standard Concession</td>
            <td>STP</td>
            <td>$14.50</td>
            <td>$19.00</td>
          </tr>
          <tr>
            <td>Standard Child</td>
            <td>STC</td>
            <td>$13.00</td>
            <td>$17.50</td>
          </tr>
          <tr>
            <td>First Class Adult</td>
            <td>FCA</td>
            <td>$25.00</td>
            <td>$31.00</td>
          </tr>
          <tr>
            <td>First Class Concession</td>
            <td>FCP</td>
            <td>$23.50</td>
            <td>$28.00</td>
          </tr>
          <tr>
            <td>First Class Child</td>
            <td>FCC</td>
            <td>$22.00</td>
            <td>$25.00</td>
          </tr>
        </table>
      </div>
    </section>
    <section id='nowShowing'>
      <article id="nowShowing-A"></article>
      <div class='box2'>
        <h2>NOW SHOWING</h2>
        <div class="now-showing-container">
          <div class="flip-card-flow-container">
            <div class='flip-card-container'>
              <div class="flip-card">
                <div class="flip-card-front">
                  <div class='movies'>
                    <h4>Avatar: The Way of Water</h4>
                    <h4>PG-13</h4>
                    <img src='../../media/AvatarTheWayofWater-poster.jpg' alt='Avatar-poster'>
                  </div>
                  <div class="times-booking">
                    <h4>Show Times</h4>
                    <ul>
                      <li>Wed - 2100</li>
                      <li>Thu - 2100</li>
                      <li>Fri - 2100</li>
                      <li>Sat - 1800</li>
                      <li>Sun - 1800</li>
                    </ul><br>
                    <h4>Synopsis</h4>
                    <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p>
                    <br>
                    <form method="get" action="booking.php#Avatar">
                      <input type="hidden" name="Avatar-The-Way" value="ACT"> <input type="submit" class="button-link" value="Book Now">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flip-card-flow-container">
            <div class='flip-card-container'>
              <div class="flip-card">
                <div class="flip-card-front">
                  <div class='movies'>
                    <h4>Weird: The Al Yankovic Story</h4>
                    <h4>TV-14</h4>
                    <img src='../../media/WeirdTheAlYankovicStory-poster.jpg' alt='WeirdAl-poster'>
                  </div>
                  <div class="times-booking">
                    <h4>Show Times</h4>
                    <ul>
                      <li>Wed - 1200</li>
                      <li>Thu - 1200</li>
                      <li>Fri - 1200</li>
                      <li>Sat - 1500</li>
                      <li>Sun - 1500</li>
                    </ul><br>
                    <h4>Synopsis</h4>
                    <p>Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.</p>
                    <br>
                    <form method="get" action="booking.php#Weird">
                      <input type="hidden" name="Weird-Al" value="RMC"> <input type="submit" class="button-link" value="Book Now">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flip-card-flow-container">
            <div class='flip-card-container'>
              <div class="flip-card">
                <div class="flip-card-front">
                  <div class='movies'>
                    <h4>Puss in Boots: The Last Wish</h4>
                    <h4>PG-13</h4>
                    <img src='../../media/PussinBootsTheLastWish-poster.jpg' alt='PussInBoots-poster'>
                  </div>
                  <div class="times-booking">
                    <h4>Show Times</h4>
                    <ul>
                      <li>Mon - 1200</li>
                      <li>Tue - 1200</li>
                      <li>Wed - 1800</li>
                      <li>Thu - 1800</li>
                      <li>Fri - 1800</li>
                      <li>Sat - 1200</li>
                      <li>Sun - 1200</li>
                    </ul><br>
                    <h4>Synopsis</h4>
                    <p>Puss in Boots discovers that his passion for adventure has taken its toll: he has burned through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.</p>
                    <br>
                    <form method="get" action="booking.php#Puss">
                      <input type="hidden" name="Puss-In-Boots" value="FAM"> <input type="submit" class="button-link" value="Book Now">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flip-card-flow-container">
            <div class='flip-card-container'>
              <div class="flip-card">
                <div class="flip-card-front">
                  <div class='movies'>
                    <h4>Margrete: Queen of the North</h4>
                    <h4>MA-15+</h4>
                    <img src='../../media/MargreteQueenoftheNorth-poster.jpg' alt='QueenoftheNorth-poster'>
                  </div>
                  <div class="times-booking">
                    <h4>Show Times</h4>
                    <ul>
                      <li>Mon - 1800</li>
                      <li>Tue - 1800</li>
                      <li>Sat - 2100</li>
                      <li>Sun - 2100</li>
                    </ul><br>
                    <h4>Synopsis</h4>
                    <p>1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union.</p>
                    <br>
                    <form method="get" action="booking.php#Margrete">
                      <input type="hidden" name="Margrete-Queen" value="AHF"> <input type="submit" class="button-link" value="Book Now">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
  <aside id="debug">
    <hr>
    <h3>Debug Area</h3>
    <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
  </aside>
</body>
</html>