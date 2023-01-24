/* Insert your javascript here */

function changeSynopsis(movieID) {
  console.log(movieID);
  switch(movieID) {
    case 'ACT':
      document.getElementById("title").innerHTML = "Avatar: The Way of Water";
      document.getElementById("rating").innerHTML = "PG";
      document.getElementById("plot").innerHTML = "After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe. "
      document.getElementById("trailer").src = "https://www.imdb.com/videoembed/vi3565864217";
      document.getElementById("bookingTimeList").innerHTML =
      bookingTime("Wed - 2100") +
      bookingTime('Thu - 2100') +
      bookingTime('Fri - 2100') +
      bookingTime('Sat - 1800') +
      bookingTime('Sun - 1800');
      break;
    case 'RMC':
      document.getElementById("title").innerHTML = "Weird: The Al Yankovic Story";
      document.getElementById("rating").innerHTML = "TV";
      document.getElementById("plot").innerHTML = "Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle."
      document.getElementById("trailer").src = "https://www.imdb.com/videoembed/vi1080541721";
      document.getElementById("bookingTimeList").innerHTML =
      bookingTime('Wed - 1200') +
      bookingTime('Thu - 1200') +
      bookingTime('Fri - 1200') +
      bookingTime('Sat - 1500') +
      bookingTime('Sat - 1500');
      break;
    case 'ANM':
      document.getElementById("title").innerHTML = "Puss in Boots: The Last Wish";
      document.getElementById("rating").innerHTML = "PG";
      document.getElementById("plot").innerHTML = "When Puss in Boots discovers that his passion for adventure has taken its toll and he has burned through eight of his nine lives, he launches an epic journey to restore them by finding the mythical Last Wish."
      document.getElementById("trailer").src = "https://www.imdb.com/videoembed/vi3470049817";
      document.getElementById("bookingTimeList").innerHTML =
      bookingTime('Mon - 1200') +
      bookingTime('Tue - 1200') +
      bookingTime('Wed - 1800') +
      bookingTime('Thu - 1800') +
      bookingTime('Fri - 1800') +
      bookingTime('Sat - 1200') +
      bookingTime('Sun - 1200');
      break;
    case 'AHF':
      document.getElementById("title").innerHTML = "Margrete: Queen of the North";
      document.getElementById("rating").innerHTML = "MA";
      document.getElementById("plot").innerHTML = "1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union."
      document.getElementById("trailer").src = "https://www.imdb.com/videoembed/vi968475417";
      document.getElementById("bookingTimeList").innerHTML =
      bookingTime('Mon - 1200') +
      bookingTime('Tue - 1200') +
      bookingTime('Sat - 2100') +
      bookingTime('Sun - 2100');
      break;
  }
  var synopsisScrollValue = document.getElementById("title").offsetTop;
  console.log(synopsisScrollValue);
  window.scrollTo(0, synopsisScrollValue-75);
  document.getElementById("movie-id").value = movieID;
}

function bookingTime(time) {
  console.log(time);
  return "<li><input class='bookingTime' type='button' value='" + time +"' onclick='selectMovie(\"" + time + "\")'></li>";
}

function generateTickNo() {
  var seatOptions = "<option value=''>Please Select</option>";
  for (var i=0; i <= 10; i++) {
    seatOptions += "<option value='"+i+"' onClick='calculatePrice()'>"+i+"</option>";
  }
  console.log("generateTickNo");
  return seatOptions;
}

function selectMovie(time) {
  console.log("selectMovie() function called");
  enableForm();
  var formMessage = document.getElementById("formMessage");
  formMessage.innerHTML = document.getElementById("title").innerHTML + " (" + time + ")";
  var day = time.slice(0,3).toUpperCase();
  var hour = 'T' + time.slice(6,8);
  document.getElementById("movie-day").value = day;
  document.getElementById("movie-hour").value = hour;
  calculatePrice();
  console.log(document.getElementById("movie-id").value);
  console.log(day);
  console.log(hour);
}

function enableForm() {
  var inputs = document.getElementsByTagName("input");
  var selects = document.getElementsByTagName("select");
  for (var i = 0; i < inputs.length; i++)
  {
    inputs[i].disabled = false;
  }
  for (var i = 0; i < selects.length; i++)
  {
    selects[i].disabled = false;
  }
  document.getElementById("submitButton").disabled = false;
}

function calculatePrice() {
  var STA;
  var STP;
  var STC;
  var FCA;
  var FCP;
  var FCC;
  var day = document.getElementById("movie-day").value;
  var hour = document.getElementById("movie-hour").value;

  if ((hour == "T12" && (day == "MON" || day == "TUE" || day == "WED" || day == "THU" || day == "FRI")))
  {
    STA = 16.00;
    STP = 14.50;
    STC = 13.00;
    FCA = 25.00;
    FCP = 23.50;
    FCC = 22.00;
  }
  else {
    STA = 21.50;
    STP = 19.00;
    STC = 17.50;
    FCA = 31.00;
    FCP = 28.00;
    FCC = 25.00;
  }

  var totalPriceValue = STA * document.getElementById("seats-STA").value
  + STP * document.getElementById("seats-STP").value
  + STC * document.getElementById("seats-STC").value
  + FCA * document.getElementById("seats-FCA").value
  + FCP * document.getElementById("seats-FCP").value
  + FCC * document.getElementById("seats-FCC").value ;

  document.getElementById("totalPrice").innerHTML = totalPriceValue.toFixed(2);
}

function validateForm() {
  var nameRegex = /^[a-z ,.'-]+$/i;
  var phoneRegex =  /^(\(04\)|04|\+614)[ ]?\d{1,4}?[ ]?\(?\d{1,3}?\)?[ ]?\d{1,4}[ ]?\d{1,4}[ ]?\d{1,9}$/g;
  var cardRegex = /^(\d{4}[-. ]?){4}|\d{4}[-. ]?\d{6}[-. ]?\d{5}$/gm;

  var name = document.forms["bookingForm"]["cust[name]"].value;
  var phone = document.forms["bookingForm"]["cust[mobile]"].value;
  var card = document.forms["bookingForm"]["cust[card]"].value;
  var expiry = document.forms["bookingForm"]["cust[expiry]"].value;

  var message = "";
  var valid = true;

  if (nameRegex.test(name) == false) {
    message += "Please enter a proper name (e.g. John Smith)\n";
    valid = false;
  }
  if (phoneRegex.test(phone) == false) {
    message += "Please enter a valid mobile number (e.g. 0412345678)\n";
    valid = false;
  }
  if (cardRegex.test(card) == false) {
    message += "Please use and enter a 12-digit credit card number (e.g. 1234 1234 1234 1234)\n";
    valid = false;
  }

  var today, someday;
  var exMonth=expiry.slice(5,7);
  var exYear=expiry.slice(0,4);
  today = new Date();
  someday = new Date();
  someday.setFullYear(exYear, exMonth, 1);

  if (someday < today) {
    message += "The expiry date is before today's date. Please select a valid expiry date";
    valid = false;
  }

  if (valid == false) {
    alert(message);
  }
  return valid;
}