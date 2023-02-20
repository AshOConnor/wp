/* Insert your javascript here */
const movies = [{
  id: 'ACT',
  bookingTimeList: ["Mon - 2100", "Tue - 2100", "Wed - 2100", "Thu - 2100", "Fri - 2100", "Sat - 1800", "Sun - 1800"]
}, {
  id: 'RMC',
  bookingTimeList: ["Wed - 1200", "Thu - 1200", "Fri - 1200", "Sat - 1500", "Sat - 1500"]
}, {
  id: 'ANM',
  bookingTimeList: ["Mon - 1200", "Tue - 1200", "Wed - 1800", "Thu - 1800", "Fri - 1800", "Sat - 1200", "Sun - 1200"]
}, {
  id: 'AHF',
  bookingTimeList: ["Mon - 1800", "Tue - 1800", "Sat - 2100", "Sat - 2100"]
}, ];

//Navigation programming - updates navbar based on scroll
window.onscroll = function() {
  console.clear();
  console.log("Win Y: "+window.scrollY);
  var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
  // console.log(navlinks);
  var sections = document.getElementsByTagName('main')[0].getElementsByTagName('section');
  console.log(sections);
  //console.log(sections[0].offsetTop+' '+(sections[0].offsetTop+sections[0].offsetHeight));
  //console.log(sections[1].offsetTop+' '+(sections[1].offsetTop+sections[1].offsetHeight));
  for (var s=0; s<sections.length; s++){
    var secTop=sections[s].offsetTop+10;
    var secBot=sections[s].offsetTop+sections[s].offsetHeight+2;
    //console.log(secTop+' '+secBot);
    if (window.scrollY >= secTop && window.scrollY < secBot){
      console.log(sections[s].id+': active');
      navlinks[s].classList.add('active');
    } else {
      console.log(sections[s].id+':');
      navlinks[s].classList.remove('active');
    }
  }
}

function generateTickNo() {
  var seatOptions = "<option value=''>Please Select</option>";
  for (var i = 0; i <= 10; i++) {
      seatOptions += `<option value='${i}' onClick='calculatePrice()'>${i}</option>`;
  }
  console.log("generateTickNo");
  return seatOptions;
}

function selectSession(time) {
  console.log("selectSession() function called");
  enableForm();
  var formMessage = document.getElementById("formMessage");
  console.log(formMessage);
  console.log(formMessage.innerHTML);
  console.log(document.getElementById("title"));
  formMessage.innerHTML = document.getElementById("title").innerHTML + " " + time;
  var day = time.slice(0, 3).toUpperCase();
  var hour = 'T' + time.slice(6, 8);
  console.log(document.getElementById("movie-day"));
  document.getElementById("movie-day").value = day;
  document.getElementById("movie-hour").value = hour;
  calculatePrice();
  console.log(document.getElementById("movie-id").value);
  console.log(day);
  console.log(hour);
}

function bookingTime(time) {
  console.log(time);
  return `<li><input class='bookingTime' type='button' value='${time}' onclick='selectSession("${time}")'></li>`;
}

function enableForm() {
  var inputs = document.querySelectorAll("input, select");
  inputs.forEach(input => input.disabled = false);
  document.getElementById("submitButton").disabled = false;
  console.log("Leaving Enable Form");
}

function calculatePrice() {
  var prices = {
      weekdays: {
          STA: 16.00,
          STP: 14.50,
          STC: 13.00,
          FCA: 25.00,
          FCP: 23.50,
          FCC: 22.00
      },
      weekends: {
          STA: 21.50,
          STP: 19.00,
          STC: 17.50,
          FCA: 31.00,
          FCP: 28.00,
          FCC: 25.00
      }
  };

  var day = document.getElementById("movie-day").value;
  var hour = document.getElementById("movie-hour").value;
  var priceKey = (day == "SAT" || day == "SUN" || hour < "12") ? "weekends" : "weekdays";

  var totalPriceValue = prices[priceKey].STA * document.getElementById("seats-STA").value +
      prices[priceKey].STP * document.getElementById("seats-STP").value +
      prices[priceKey].STC * document.getElementById("seats-STC").value +
      prices[priceKey].FCA * document.getElementById("seats-FCA").value +
      prices[priceKey].FCP * document.getElementById("seats-FCP").value +
      prices[priceKey].FCC * document.getElementById("seats-FCC").value;

  document.getElementById("totalPrice").innerHTML = totalPriceValue.toFixed(2);
}

// Validate user input for name, phone number, credit card number, and expiry date
function validateForm() {
  const nameRegex = /^[a-z ,.'-]+$/i;
  const phoneRegex = /^(\(04\)|04|\+614)[ ]?\d{1,4}?[ ]?\(?\d{1,3}?\)?[ ]?\d{1,4}[ ]?\d{1,4}[ ]?\d{1,9}$/g;
  const cardRegex = /^(\d{4}[-. ]?){4}|\d{4}[-. ]?\d{6}[-. ]?\d{5}$/gm;

  const name = document.forms["bookingForm"]["cust[name]"].value;
  const phone = document.forms["bookingForm"]["cust[mobile]"].value;
  const card = document.forms["bookingForm"]["cust[card]"].value;
  const expiry = document.forms["bookingForm"]["cust[expiry]"].value;

  let message = "";
  let valid = true;

  // Validate name
  if (!nameRegex.test(name)) {
    message += "Please enter a proper name (e.g. John Smith)\n";
    valid = false;
  }

  // Validate phone number
  if (!phoneRegex.test(phone)) {
    message += "Please enter a valid mobile number (e.g. 0412345678)\n";
    valid = false;
  }

  // Validate credit card number
  if (!cardRegex.test(card)) {
    message += "Please use and enter a 12-digit credit card number (e.g. 1234 1234 1234 1234)\n";
    valid = false;
  }

  // Validate expiry date
  const exMonth = expiry.slice(5,7);
  const exYear = expiry.slice(0,4);
  const today = new Date();
  const someday = new Date(exYear, exMonth - 1, 1);

  if (someday < today) {
    message += "The expiry date is before today's date. Please select a valid expiry date";
    valid = false;
  }

  // Alert user if input is not valid
  if (!valid) {
    alert(message);
  }

  return valid;
}