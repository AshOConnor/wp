<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lunardo Home Page</title><!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
  <script src='../wireframe.js'></script><!--webfonts-->
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
          <a href="index.php#aboutUs"><img src='../../media/aboutus-icon.png' alt='ABOUT US'>ABOUT US</a>
        </li>
        <li id="pricesLink">
          <a href="index.php#prices"><img src='../../media/prices-icon.png' alt='PRICES'>PRICES</a>
        </li>
        <li id="nowShowingLink">
          <a href="index.php#nowShowing"><img src='../../media/nowshowing-icon.png' alt='NOW SHOWING'>NOW SHOWING</a>
        </li>
        <li id="bookingLink">
          <a href="booking.php"><img src='../../media/booking-icon.png' alt='BOOKING'>BOOKING</a>
        </li>
      </ul>
    </nav>
  </div>
  <main>
    <section id="AvatarBook">
      <div class="box3">
        <a id="Avatar"></a>
        <h2>Avatar: The Way of Water</h2>
        <h2>PG-13</h2>
        <h3>Synopsis<br></h3>
        <p>Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/d9MyW72ELq0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="booking-form">
          <fieldset id="tickets">
            <legend>Number of tickets</legend>
            <form method="post">
              <input type="hidden" id="movie-title" value="Avatar-The-Way" required=""> <select type="number" name="seats[STA]" id="seats" data-fullprice="21.50" data-discprice="16.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
              </select> <label for="seats[STA]">Standard Adult Seats</label><br>
              <select name="seats[STC]" id="seats" data-fullprice="19.00" data-discprice="14.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">Standard Concession Seats</label><br>
              <select name="seats[STP]" id="seats" data-fullprice="17.50" data-discprice="13.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STP]">Standard Child Seats</label><br>
              <select name="seats[FCA]" id="seats" data-fullprice="31.00" data-discprice="25.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCA]">First Class Adult Seats</label><br>
              <select name="seats[FCP]" id="seats" data-fullprice="28.00" data-discprice="23.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCP]">First Class Concession Seats</label><br>
              <select name="seats[FCC]" id="seats" data-fullprice="25.00" data-discprice="22.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">First Class Child Seats</label><br>
              <br>
            </form>
          </fieldset>
          <fieldset id="times">
            <legend>Session Time Selection</legend> <label for="Day">Monday</label> <input type="radio" id="AvMon" name="Day+Time" value="2100" required=""> <label for="AvMon">9:00pm</label><br>
            <label for="Day">Tuesday</label> <input type="radio" id="AvTue" name="Day+Time" value="2100" required=""> <label for="AvTue">9:00pm</label><br>
            <label for="Day">Friday</label> <input type="radio" id="AvWed" name="Day+Time" value="2100" required=""> <label for="AvWed">9:00pm</label><br>
            <label for="Day">Thursday</label> <input type="radio" id="AvThu" name="Day+Time" value="2100" required=""> <label for="AvThu">9:00pm</label><br>
            <label for="Day">Friday</label> <input type="radio" id="AvFri" name="Day+Time" value="2100" required=""> <label for="AvFri">9:00pm</label><br>
            <label for="Day">Saturday</label> <input type="radio" id="AvSat" name="Day+Time" value="1800" required=""> <label for="AvSat">6:00pm</label><br>
            <label for="Day">Sunday</label> <input type="radio" id="AvSun" name="Day+Time" value="1800" required=""> <label for="AvSun">6:00pm</label>
          </fieldset><br>
          <fieldset class="info">
            <legend>Your Contact Information</legend>
            <div>
              <label for="user[name]">Full name:</label> <input type="text" name="user[name]" required="">
            </div><br>
            <div>
              <label for="user[email]">Email address:</label> <input type="email" name="user[email]" required="">
            </div><br>
            <div>
              <label for="user[mobile]">Mobile number:</label> <input type="tel" name="user[mobile]">
            </div>
          </fieldset><button class="button-link position-neutral" type="submit" name="submit-booking" value="ACT">Proceed to checkout</button>
        </div>
      </div>
    </section>
    <section id="WeirdBook">
      <div class="box3">
        <a id="Weird"></a>
        <h2>Weird: The Al Yankovic Story</h2>
        <h2>TV-14</h2>
        <h3>Synopsis<br></h3>
        <p>Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/Ols03gpTjW4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br>
        <div id="booking-form">
          <fieldset id="tickets">
            <legend>Number of tickets</legend>
            <form method="post">
              <input type="hidden" id="movie-title" value="Weird-Al" required=""> <select type="number" name="seats[STA]" id="seats" data-fullprice="21.50" data-discprice="16.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
              </select> <label for="seats[STA]">Standard Adult Seats</label><br>
              <select name="seats[STC]" id="seats" data-fullprice="19.00" data-discprice="14.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">Standard Concession Seats</label><br>
              <select name="seats[STP]" id="seats" data-fullprice="17.50" data-discprice="13.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STP]">Standard Child Seats</label><br>
              <select name="seats[FCA]" id="seats" data-fullprice="31.00" data-discprice="25.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCA]">First Class Adult Seats</label><br>
              <select name="seats[FCP]" id="seats" data-fullprice="28.00" data-discprice="23.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCP]">First Class Concession Seats</label><br>
              <select name="seats[FCC]" id="seats" data-fullprice="25.00" data-discprice="22.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">First Class Child Seats</label><br>
              <br>
            </form>
          </fieldset>
          <fieldset id="times">
            <legend>Session Time Selection</legend> <label for="Day">Wednesday</label> <input type="radio" id="WeWed" name="Day+Time" value="1200" required=""> <label for="WeWed">12:00pm</label><br>
            <label for="Day">Thursday</label> <input type="radio" id="WeThu" name="Day+Time" value="1200" required=""> <label for="WeThu">12:00pm</label><br>
            <label for="Day">Friday</label> <input type="radio" id="WeFri" name="Day+Time" value="1200" required=""> <label for="WeFri">12:00pm</label><br>
            <label for="Day">Saturday</label> <input type="radio" id="WeSat" name="Day+Time" value="1500" required=""> <label for="WeSat">3:00pm</label><br>
            <label for="Day">Sunday</label> <input type="radio" id="WeSun" name="Day+Time" value="1500" required=""> <label for="WeSun">3:00pm</label>
          </fieldset><br>
          <fieldset class="info">
            <legend>Your Contact Information</legend>
            <div>
              <label for="user[name]">Full name:</label> <input type="text" name="user[name]" required="">
            </div><br>
            <div>
              <label for="user[email]">Email address:</label> <input type="email" name="user[email]" required="">
            </div><br>
            <div>
              <label for="user[mobile]">Mobile number:</label> <input type="tel" name="user[mobile]">
            </div>
          </fieldset><button class="button-link position-neutral" type="submit" name="submit-booking" value="RMC">Proceed to checkout</button>
        </div>
      </div>
    </section>
    <section id="PussBook">
      <div class="box3">
        <a id="Puss"></a>
        <h2>Puss in Boots: The Last Wish</h2>
        <h2>PG-13</h2>
        <h3>Synopsis<br></h3>
        <p>Puss in Boots discovers that his passion for adventure has taken its toll: he has burned through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/tHb7WlgyaUc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="booking-form">
          <fieldset id="tickets">
            <legend>Number of tickets</legend>
            <form method="post">
              <input type="hidden" id="movie-title" value="Puss-In-Boots" required=""> <select type="number" name="seats[STA]" id="seats" data-fullprice="21.50" data-discprice="16.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
              </select> <label for="seats[STA]">Standard Adult Seats</label><br>
              <select name="seats[STC]" id="seats" data-fullprice="19.00" data-discprice="14.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">Standard Concession Seats</label><br>
              <select name="seats[STP]" id="seats" data-fullprice="17.50" data-discprice="13.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STP]">Standard Child Seats</label><br>
              <select name="seats[FCA]" id="seats" data-fullprice="31.00" data-discprice="25.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCA]">First Class Adult Seats</label><br>
              <select name="seats[FCP]" id="seats" data-fullprice="28.00" data-discprice="23.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCP]">First Class Concession Seats</label><br>
              <select name="seats[FCC]" id="seats" data-fullprice="25.00" data-discprice="22.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">First Class Child Seats</label><br>
              <br>
            </form>
          </fieldset>
          <fieldset id="times">
            <legend>Session Time Selection</legend> <label for="Day">Monday</label> <input type="radio" id="PusMon" name="Day+Time" value="1200" required=""> <label for="PusMon">12:00pm</label><br>
            <label for="Day">Tuesday</label> <input type="radio" id="PusTue" name="Day+Time" value="1200" required=""> <label for="PusTue">12:00pm</label><br>
            <label for="Day">Wednesday</label> <input type="radio" id="PusWed" name="Day+Time" value="1800" required=""> <label for="PusWed">6:00pm</label><br>
            <label for="Day">Thursday</label> <input type="radio" id="PusThu" name="Day+Time" value="1800" required=""> <label for="PusThu">6:00pm</label><br>
            <label for="Day">Friday</label> <input type="radio" id="PusFri" name="Day+Time" value="1800" required=""> <label for="PusFri">6:00pm</label><br>
            <label for="Day">Saturday</label> <input type="radio" id="PusSat" name="Day+Time" value="1200" required=""> <label for="PusSat">12:00pm</label><br>
            <label for="Day">Sunday</label> <input type="radio" id="PusSun" name="Day+Time" value="1200" required=""> <label for="PusSun">12:00pm</label>
          </fieldset><br>
          <fieldset class="info">
            <legend>Your Contact Information</legend>
            <div>
              <label for="user[name]">Full name:</label> <input type="text" name="user[name]" required="">
            </div><br>
            <div>
              <label for="user[email]">Email address:</label> <input type="email" name="user[email]" required="">
            </div><br>
            <div>
              <label for="user[mobile]">Mobile number:</label> <input type="tel" name="user[mobile]">
            </div>
          </fieldset><button class="button-link position-neutral" type="submit" name="submit-booking" value="FAM">Proceed to checkout</button>
        </div>
      </div>
    </section>
    <section id="MargreteBook">
      <div class="box3">
        <a id="Margrete"></a>
        <h2>Margrete: Queen of the North</h2>
        <h2>MA-15+</h2>
        <h3>Synopsis<br></h3>
        <p>1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union.</p><br>
        <br>
        <iframe src="https://www.youtube.com/embed/-7OCX98JgGk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div id="booking-form">
          <fieldset id="tickets">
            <legend>Number of tickets</legend>
            <form method="post">
              <input type="hidden" id="movie-title" value="Margrete-Queen" required=""> <select type="number" name="seats[STA]" id="seats" data-fullprice="21.50" data-discprice="16.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
              </select> <label for="seats[STA]">Standard Adult Seats</label><br>
              <select name="seats[STC]" id="seats" data-fullprice="19.00" data-discprice="14.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">Standard Concession Seats</label><br>
              <select name="seats[STP]" id="seats" data-fullprice="17.50" data-discprice="13.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STP]">Standard Child Seats</label><br>
              <select name="seats[FCA]" id="seats" data-fullprice="31.00" data-discprice="25.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCA]">First Class Adult Seats</label><br>
              <select name="seats[FCP]" id="seats" data-fullprice="28.00" data-discprice="23.50">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[FCP]">First Class Concession Seats</label><br>
              <select name="seats[FCC]" id="seats" data-fullprice="25.00" data-discprice="22.00">
                <option value="0">
                  Please select
                </option>
                <option value="1">
                  1
                </option>
                <option value="2">
                  2
                </option>
                <option value="3">
                  3
                </option>
                <option value="4">
                  4
                </option>
                <option value="5">
                  5
                </option>
                <option value="6">
                  6
                </option>
                <option value="7">
                  7
                </option>
                <option value="8">
                  8
                </option>
                <option value="9">
                  8
                </option>
                <option value="10">
                  10
                </option>
              </select> <label for="seats[STC]">First Class Child Seats</label><br>
              <br>
              <p id="total">Total: $<a id="totalPrice">0.00</a></p>
            </form>
          </fieldset>
          <fieldset id="times">
            <legend>Session Time Selection</legend> <label for="Day">Monday</label> <input type="radio" id="MarMon" name="Day+Time" value="1800" required=""> <label for="MarMon">6:00pm</label><br>
            <label for="Day">Tuesday</label> <input type="radio" id="MarTue" name="Day+Time" value="1800" required=""> <label for="MarTue">6:00pm</label><br>
            <label for="Day">Saturday</label> <input type="radio" id="MarSat" name="Day+Time" value="2100" required=""> <label for="MarSat">9:00pm</label><br>
            <label for="Day">Sunday</label> <input type="radio" id="MarSun" name="Day+Time" value="2100" required=""> <label for="MarSun">9:00pm</label>
          </fieldset><br>
          <fieldset id="info">
            <legend>Your Contact Information</legend>
            <div>
              <label for="user[name]">Full name:</label> <input type="text" name="user[name]" required="">
            </div><br>
            <div>
              <label for="user[email]">Email address:</label> <input type="email" name="user[email]" required="">
            </div><br>
            <div>
              <label for="user[mobile]">Mobile number:</label> <input type="tel" name="user[mobile]">
            </div>
          </fieldset><button class="button-link position-neutral" type="submit" name="submit-booking" value="AHF">Proceed to checkout</button>
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
      © 
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