<?php
session_start();
error_reporting(-1);
/* Put your PHP functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/

function debugModule()
{
    echo "<pre id='debug'>";
    echo ("POST: \n");
    print_r($_POST);
    echo ("GET:\n");
    print_r($_GET);
    echo "session:\n";
    print_r($_SESSION);
    echo "</pre>";
    printMyCode();
}

function printMyCode()
{
    $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre id='myCode'><ol>";
    foreach ($allLinesOfCode as $oneLineOfCode)
    {
        echo "<li>" . rtrim(htmlentities($oneLineOfCode)) . "</li>";
    }
    echo "</ol></pre>";
}

function php2js($arr, $arrName)
{
    $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
    echo <<<"CDATA"
  <script>
    /* Variable generated with Trev's handy php2js() function */
    $arrName = $arrJSON;
  </script>
CDATA;
    
}

function printIndexHeader()
{
    echo '<!DOCTYPE html>
    <html lang=\'en\'>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lunardo Cinema Bairnsdale</title><!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id=\'wireframecss\' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id=\'stylecss\' type="text/css" rel="stylesheet" href="style.css">
      <script src=\'../wireframe.js\'></script>
      <script src=\'script.js\'></script><!--webfonts-->
      <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&amp;display=swap" rel="stylesheet">
    </head>';
}

function printBookingHeader()
{
    echo '<!DOCTYPE html>
    <html lang=\'en\'>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lunardo Booking Page</title><!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id=\'wireframecss\' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id=\'stylecss\' type="text/css" rel="stylesheet" href="style.css">
      <script src=\'../wireframe.js\'></script>
      <script src=\'script.js\'></script><!--webfonts-->
      <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&amp;display=swap" rel="stylesheet">
    </head>';
}

function printReceiptHeader()
{
    echo '<!DOCTYPE html>
    <html lang=\'en\'>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lunardo Receipt Page</title><!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id=\'wireframecss\' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id=\'stylecss\' type="text/css" rel="stylesheet" href="style.css">
      <script src=\'../wireframe.js\'></script>
      <script src=\'script.js\'></script><!--webfonts-->
      <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&amp;family=Open+Sans:ital,wght@0,300;0,400;1,300;1,400&amp;display=swap" rel="stylesheet">
    </head>';
}


function printNavbar()
{
    echo '<div id="navbar">
    <header>
      <div id=\'lunardoLogo\'>
        <a href="index.php"><img src=\'../../media/cinema-logo.png\' alt=\'Lunardo-logo\'>LUNARDO CINEMA</a>
      </div>
    </header>
    <nav>
      <ul>
        <li id="aboutUsLink">
          <a href="index.php#aboutUs"><img src=\'../../media/aboutus-icon.png\' alt=\'ABOUT US\'>ABOUT US</a>
        </li>
        <li id="pricesLink">
          <a href="index.php#prices"><img src=\'../../media/prices-icon.png\' alt=\'PRICES\'>PRICES</a>
        </li>
        <li id="nowShowingLink">
          <a href="index.php#nowShowing"><img src=\'../../media/nowshowing-icon.png\' alt=\'NOW SHOWING\'>NOW SHOWING</a>
        </li>
      </ul>
    </nav>
  </div>';
}

function printNavbarBooking()
{
    echo '<div id="navbar">
    <header>
      <div id=\'lunardoLogo\'>
        <a href="index.php"><img src=\'../../media/cinema-logo.png\' alt=\'Lunardo-logo\'>LUNARDO CINEMA</a>
      </div>
    </header>
  </div>';
}

function printNavbarReceipt()
{
    echo '<div id="navbarR">
    <header>
      <div id=\'lunardoLogo\'>
        <a><img src=\'../../media/cinema-logo.png\' alt=\'Lunardo-logo\'>LUNARDO CINEMA</a>
      </div>
    </header>
    <nav>
    </nav>
  </div>';
}

function printBanner()
{
    echo <<<CDATA
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
CDATA;
    
}

function printAboutUs()
{
    echo <<<CDATA
  <section id='aboutUs'>
  <div class="box2">
    <a id="aboutUs-A"></a>
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
CDATA;
    
}

function printPricing()
{
    echo <<<CDATA
    <section id='prices'>
    <a id="prices-A"></a>
    <div class='box2'>
      <h2>PRICES</h2>
      <p>The Cinema offers discounted pricing weekday afternoons (ie 12pm weekday matinée sessions) and all day on Mondays.</p>
      <table>
        <tr id='labels'>
          <th>Seat Type</th>
          <th>All day Monday AND from 12pm on Weekdays</th>
          <th>All other times</th>
        </tr>
        <tr>
          <td>Standard Adult</td>
          <td>$16.00</td>
          <td>$21.50</td>
        </tr>
        <tr>
          <td>Standard Concession</td>
          <td>$14.50</td>
          <td>$19.00</td>
        </tr>
        <tr>
          <td>Standard Child</td>
          <td>$13.00</td>
          <td>$17.50</td>
        </tr>
        <tr>
          <td>First Class Adult</td>
          <td>$25.00</td>
          <td>$31.00</td>
        </tr>
        <tr>
          <td>First Class Concession</td>
          <td>$23.50</td>
          <td>$28.00</td>
        </tr>
        <tr>
          <td>First Class Child</td>
          <td>$22.00</td>
          <td>$25.00</td>
        </tr>
      </table>
    </div>
  </section>
CDATA;
    
}

function getMovies()
{
    $movies = array(
        array(
            'id' => 'ACT',
            'title' => "Avatar: The Way of Water",
            'rating' => "PG",
            'image' => "../../media/AvatarTheWayofWater-poster.jpg",
            'alt' => "Avatar-poster",
            'plot' => "Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.",
            'trailer' => "https://www.imdb.com/videoembed/vi3565864217",
            'bookingTimeList' => array(
                "Mon - 2100",
                "Tue - 2100",
                "Wed - 2100",
                "Thu - 2100",
                "Fri - 2100",
                "Sat - 1800",
                "Sun - 1800"
            )
        ) ,
        array(
            'id' => 'RMC',
            'title' => "Weird: The Al Yankovic Story",
            'rating' => "TV",
            'image' => "../../media/WeirdTheAlYankovicStory-poster.jpg",
            'alt' => "WeirdAl-poster",
            'plot' => "Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.",
            'trailer' => "https://www.imdb.com/videoembed/vi1080541721",
            'bookingTimeList' => array(
                "Wed - 1200",
                "Thu - 1200",
                "Fri - 1200",
                "Sat - 1500",
                "Sun - 1500"
            )
        ) ,
        array(
            'id' => 'ANM',
            'title' => "Puss in Boots: The Last Wish",
            'rating' => "PG",
            'image' => "../../media/PussinBootsTheLastWish-poster.jpg",
            'alt' => "PussInBoots-poster",
            'plot' => "When Puss in Boots discovers that his passion for adventure has taken its toll and he has burned through eight of his nine lives, he launches an epic journey to restore them by finding the mythical Last Wish.",
            'trailer' => "https://www.imdb.com/videoembed/vi3470049817",
            'bookingTimeList' => array(
                "Mon - 1200",
                "Tue - 1200",
                "Wed - 1800",
                "Thu - 1800",
                "Fri - 1800",
                "Sat - 1200",
                "Sun - 1200"
            )
        ) ,
        array(
            'id' => 'AHF',
            'title' => "Margrete: Queen of the North",
            'rating' => "MA",
            'image' => "../../media/MargreteQueenoftheNorth-poster.jpg",
            'alt' => "QueenoftheNorth-poster",
            'plot' => "1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union.",
            'trailer' => "https://www.imdb.com/videoembed/vi2146091801",
            'bookingTimeList' => array(
                "Mon - 1800",
                "Tue - 1800",
                "Sat - 2100",
                "Sun - 2100"
            )
        )
    );
    return $movies;
}

function moviePanel($movieID)
{
    $movies = getMovies();
    foreach ($movies as $movie)
    {
        if ($movie['id'] == $movieID)
        {
            echo '<div class="flip-card-flow-container">
      <div class="flip-card-container">
      <div class="flip-card">
      <div class="flip-card-front">
      <div class="movies">
      <h4>' . $movie['title'] . '</h4>
      <h4>Rating: ' . $movie['rating'] . '</h4>
      <img src="' . $movie['image'] . '" alt="' . $movie['alt'] . '">
      </div>
      <div class="times-booking">
      <h4>Session Times</h4>
      <ul>';
            foreach ($movie['bookingTimeList'] as $time)
            {
                echo '<li>' . $time . '</li>';
            }
            echo '</ul>
      <h4>Synopsis</h4>
      <p>' . $movie['plot'] . '</p>
      <br>
      <form method="get" action="booking.php">
      <input type="hidden" name="movieID" value="' . $movieID . '">
      <input type="submit" class="button-link" value="Book Now">
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>';
        }
    }
}

function validateMovieCode()
{
    $validIDs = ["ACT", "RMC", "FAM", "AHF"];
    if (!(in_array($_GET["movie"], $validIDs)))
    {
        header("Location: index.php");
    }
    else
    {
        // POST data processing and message printing code goes here
        
    }
}

function bookingPanel($movieID)
{
    $movieID = $_GET['movieID'];
    $movies = getMovies();
    foreach ($movies as $movie)
    {
        if ($movie['id'] == $movieID)
        {
            echo '<section id="info">
      <div class="box3">
      <div class="boxText">
      <h2 id="title">' . $movie['title'] . '</h2>
      <br>
      <h3>' . $movie['rating'] . '</h3>
      <section class="sessionTimes">
      <div class="movieInfo">
      <img src="' . $movie['image'] . '" alt="' . $movie['alt'] . '">
      <div class="synopsis">
      <div class="synopsis-info">
      <p>' . $movie['plot'] . '</p>
      <iframe width="560" height="315" src="' . $movie['trailer'] . '" title="' . $movie['title'] . ' Trailer"></iframe>
      <div class="bookingTitle">
      <h3>Available booking times:</h3>
      <ul id="bookingTimeList">';
            foreach ($movie['bookingTimeList'] as $time)
            {
                echo '<li><input class="bookingTime" type="button" value="' . $time . '" onclick=\'selectSession("' . $time . '")\'></li>';
            }
            echo '</ul>
      </div>
      </div>
      </div>
      </div>
      </section>';
        }
    }
}

function bookMovie() {
  $fp = fopen('bookings.txt', 'a');
  $data = array();
  $data[] = date("Y-m-d");
  $data[] = $_SESSION["cart"]["cust"]["name"];
  $data[] = $_SESSION["cart"]["cust"]["email"];
  $data[] = $_SESSION["cart"]["cust"]["mobile"];

  foreach ($_SESSION["cart"]["movie"] as $movieData) {
      $data[] = $movieData;
  }

  $prices = array(
      "weekdays" => array(
          "STA" => 16.00,
          "STP" => 14.50,
          "STC" => 13.00,
          "FCA" => 25.00,
          "FCP" => 23.50,
          "FCC" => 22.00
      ),
      "weekends" => array(
          "STA" => 21.50,
          "STP" => 19.00,
          "STC" => 17.50,
          "FCA" => 31.00,
          "FCP" => 28.00,
          "FCC" => 25.00
      )
  );
  $day = $_SESSION["cart"]["movie"]["day"];
  $hour = $_SESSION["cart"]["movie"]["hour"];
  $priceKey = ($day == "SAT" || $day == "SUN" || $hour < "12") ? "weekends" : "weekdays";

  $totalPrice = $prices[$priceKey]['STA'] * $_SESSION["cart"]["seats"]["STA"] +
      $prices[$priceKey]['STP'] * $_SESSION["cart"]["seats"]["STP"] +
      $prices[$priceKey]['STC'] * $_SESSION["cart"]["seats"]["STC"] +
      $prices[$priceKey]['FCA'] * $_SESSION["cart"]["seats"]["FCA"] +
      $prices[$priceKey]['FCP'] * $_SESSION["cart"]["seats"]["FCP"] +
      $prices[$priceKey]['FCC'] * $_SESSION["cart"]["seats"]["FCC"];

      foreach ($_SESSION["cart"]["seats"] as $seatType => $seatCount) {
        $seatCount = isset($seatCount) ? $seatCount : 0; // set seat count to 0 if not set
        $seatPrice = $prices[$priceKey][$seatType];
        $data[] = $seatCount;
        $data[] = number_format($seatCount * $seatPrice, 2);
    }

 
  $totalPrice = round($totalPrice, 2);
  $data[] = $totalPrice;

  $subTotal = calculateSubTotal($totalPrice);
  $_SESSION["cart"] += array(
    "subtotal" => $subTotal
  );

  $_SESSION["cart"] += array(
      "total" => $totalPrice
  );

  $gstAmount = calculateGST($totalPrice);
  $_SESSION["cart"] += array(
      "GST" => $gstAmount
  );

  $data[] = $gstAmount;

  fputcsv($fp, $data, "\t");

  fclose($fp);
}

function calculateSubTotal($totalPrice)
{
    return round(($totalPrice / 1.1) , 2);
}

function calculateGST($totalPrice)
{
    return round(($totalPrice / 11) , 2);
}

function printFooter()
{
    $lastModified = date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));
    echo <<<CDATA
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
  </script> Ash O'Connor s3915744 <a href="https://github.com/AshOConnor/wp" target="_blank"><img src="https://img.shields.io/badge/GitHub_Repo-100000?style=for-the-badge&amp;logo=github&amp;logoColor=white" alt="GitHub Repo"></a> Last modified $lastModified
   .
</div>
<div>
  Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
</div>
<div>
  <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
</div>
</footer>
CDATA;
    
}

function printReceiptFooter()
{
    $lastModified = date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));
    echo <<<CDATA
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
  </script> Ash O'Connor s3915744 <a href="https://github.com/AshOConnor/wp" target="_blank">GitHub Repo></a> Last modified $lastModified
   .
</div>
<div>
  Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
</div>
</footer>
CDATA;
    
}

?>
