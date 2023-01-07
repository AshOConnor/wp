<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Home Page</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <div id="navbar">
      <header>
        <div id='companyLogo'><a href="#"><img src='../../media/cinema-logo.png' alt='Lunardo-logo' />Lunardo Cinema</a></div>
      </header>
      <nav>
          <ul>
            <li id="aboutUsLink"><a href="#aboutUs" >ABOUT US</a></li>
            <li id ="pricesLink"><a href="#prices">PRICES</a></li>
            <li id="nowShowingLink"><a href="#nowShowing">NOW SHOWING</a></li>
            <li id="bookingLink"> <a href="booking.php" target="_blank">BOOKING</a></li>
          </ul>
      </nav>
    </div>

    <main>
      <div id="banner">
        <img src="../../media/cinema.jpg"/>
        <div class="bannertext">
          <h1>Movie Watching In The Finest Form</h1>
          <p>With the comfort and luxury of Lunardo Cinema, come and create an unforgettable experience.</p>
        </div>
      </div>
      <div class = "mainnav">
        <ul>
          <a href="#aboutUs" ><li><img src='../../media/aboutus-icon.png' alt='ABOUT US'/>ABOUT US</li></a>
          <a href="#prices"><li><img src='../../media/prices-icon.png' alt='PRICES'/>PRICES</li></a>
          <a href="#nowShowing"><li><img src='../../media/nowshowing-icon.png' alt='NOW SHOWING'/>NOW SHOWING</li></a>
        </ul>
      </div>

      <section id='aboutUs'>
        <div class="box">
          <div class="boxText">
            <a name="aboutUs">
            <h2>ABOUT US</h2>
            <hr>

            <div id = 'History'>
              <h3>Our History</h3>
              <p>
              </p>
            </div>
            <hr>

            <div id = 'Renovation'>
              <h3>Renovated for the Future</h3>
              <img src="../../media/renovated-cinema.jpg" alt="Renovated Cinema">
              <p></p>
            </div>
            <hr>

            <div id = 'Seats'>
              <h3>Upgraded seatings</h3>
              <p></p>
              <div class="seatFeature">
                <h4>Standard Seats</h4>
                <img src="../../media/Profern-Standard-Twin.png" alt="Standard seats">
                <ul>
                  <li>Leather headrest</li>
                  <li>Foldable armrest</li>
                  <li>Ergonomic design</li>
                </ul>
              </div>
              <div class="seatFeature">
                <h4>First Class Seats</h4>
                <img src="../../media/Profern-Verona-Twin.png" alt="Premium First Class Maximum Comfort Deluxe Seats">
                <ul>
                  <li>Full leather seats</li>
                  <li>Full power reclinable</li>
                  <li>Table trays</li>
                  <li>Mood lighting</li>
                  <li>Foldable middle armrest</li>
                </ul>
              </div>
            </div>
            <hr>

            <div id = 'Dolby'>
              <h3>3D Dolby Vision and Dolby Atmos</h3>
              <img src="../../media/dolby-logo.png" alt="Dolby Atmos">
              <p></p>
            </div>
          </a>
          </div>
        </div>
      </section>

      <section id='prices'>
        <a name="prices">
        <div class='box'>
          <div class='boxText'>
            <h2>PRICES</h2>
            <p>The Cinema offers discounted pricing weekday afternoons (ie 12pm weekday matinée sessions) and all day on Mondays.</p>
            <table>
              <tr id='firstrow'>
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
        </div>
        </a>
      </section>

      <section id='nowShowing'>
        <a name="nowShowing">
          <div class='box'>
            <div class='boxText'>
              <h2>NOW SHOWING</h2>
              <div class='screenTimes'>
                <img src='../../media/AvatarTheWayofWater-poster.jpg' alt='Avatar-poster'>
                <div class='movieInfo'>
                  <h3>Avatar: The Way of Water</h3>
                  <h4>PG-13</h4>
                  <ul>
                    <li>Wed - 2100</li>
                    <li>Thu - 2100</li>
                    <li>Fri - 2100</li>
                    <li>Sat - 1800</li>
                    <li>Sun - 1800</li>
                  </ul>
                </div>
              </div>
              <div class='screenTimes'>
                <img src='../../media/WeirdTheAlYankovicStory-poster.jpg' alt='WeirdAl-poster'>
                <div class='movieInfo'>
                  <h3>Weird: The Al Yankovic Story</h3>
                  <h4>TV-14</h4>
                  <ul>
                    <li>Wed - 1200</li>
                    <li>Thu - 1200</li>
                    <li>Fri - 1200</li>
                    <li>Sat - 1500</li>
                    <li>Sun - 1500</li>
                  </ul>
                </div>
              </div>
              <div class='screenTimes'>
                <img src='../../media/PussinBootsTheLastWish-poster.jpg' alt='PussInBoots-poster'>
                <div class='movieInfo'>
                  <h3>Puss in Boots: The Last Wish</h3>
                  <h4>PG-13</h4>
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
              <div class='screenTimes'>
                <img src='../../media/MargreteQueenoftheNorth-poster.jpg' alt='QueenoftheNorth-poster'>
                <div class='movieInfo'>
                  <h3>Margrete: Queen of the North</h3>
                  <h4>MA-15+</h4>
                  <ul>
                    <li>Mon - 1800</li>
                    <li>Tue - 1800</li>
                    <li>Sat - 2100</li>
                    <li>Sun - 2100</li>
                  </ul>
                </div>
              </div>
    </main>

    <footer>
    <div class="footer">
        <p>Contact us:</p>
        <ul>
          <li>Email: <a href="mailto:enquiries@lunardo.com" target="_top">enquiries@lunardo.com</a></li>
          <li>Phone: <a href="callto:+61351526455">(+61)03 5152 6455</a></li>
          <li>Address: <a href="https://goo.gl/maps/f5tidqmvh3hUM7CJA">112 Macleod St, Bairnsdale VIC 3875</a></li>
        </ul>
      </div>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Ash O'Connor s3915744 <a href="https://github.com/AshOConnor/wp" target="_blank"> <img src="https://img.shields.io/badge/GitHub_Repo-100000?style=for-the-badge&logo=github&logoColor=white" alt="GitHub Repo"></a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
