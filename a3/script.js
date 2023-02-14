/* Insert your javascript here */

function generateTickNo() {
  var seatOptions = "<option value=''>Please Select</option>";
  for (var i = 0; i <= 10; i++) {
    seatOptions += `<option value='${i}' onClick='calculatePrice()'>${i}</option>`;
  }
  console.log("generateTickNo");
  return seatOptions;
}

function selectMovie(time) {
  console.log("selectMovie() function called");
  enableForm();
  var formMessage = document.getElementById("formMessage");
  formMessage.innerHTML = `${document.getElementById("title").innerHTML} (${time})`;
  var day = time.slice(0,3).toUpperCase();
  var hour = 'T' + time.slice(6,8);
  document.getElementById("movie-day").value = day;
  document.getElementById("movie-hour").value = hour;
  calculatePrice();
  console.log(document.getElementById("movie-id").value);
  console.log(day);
  console.log(hour);
}

function bookingTime(time) {   
  console.log(time);
  return `<li><input class='bookingTime' type='button' value='${time}' onclick='selectMovie("${time}")'></li>`;
}

function enableForm() {
  var inputs = document.querySelectorAll("input, select");
  inputs.forEach(input => input.disabled = false);
  document.getElementById("submitButton").disabled = false;
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

  var totalPriceValue = prices[priceKey].STA * document.getElementById("seats-STA").value
  + prices[priceKey].STP * document.getElementById("seats-STP").value
  + prices[priceKey].STC * document.getElementById("seats-STC").value
  + prices[priceKey].FCA * document.getElementById("seats-FCA").value
  + prices[priceKey].FCP * document.getElementById("seats-FCP").value
  + prices[priceKey].FCC * document.getElementById("seats-FCC").value ;

  document.getElementById("totalPrice").innerHTML = totalPriceValue.toFixed(2);
}


function validateForm() {
  var formValues = {
    name: document.forms["bookingForm"]["cust[name]"].value,
    phone: document.forms["bookingForm"]["cust[mobile]"].value,
    card: document.forms["bookingForm"]["cust[card]"].value,
    expiry: document.forms["bookingForm"]["cust[expiry]"].value
  };

  var regexes = {
    name: /^[a-z ,.'-]+$/i,
    phone: /^(\(04\)|04|\+614)[ ]?\d{1,4}?[ ]?\(?\d{1,3}?\)?[ ]?\d{1,4}[ ]?\d{1,4}[ ]?\d{1,9}$/g,
    card: /^(\d{4}[-. ]?){4}|\d{4}[-. ]?\d{6}[-. ]?\d{5}$/gm
  };

  var message = "";
  var valid = true;

  for (var key in formValues) {
    if (!validateField(formValues[key], regexes[key])) {
      message += "Please enter a proper " + key + " (e.g. Jane Doe)\n";
      valid = false;
    }
  }

  if (valid == false) {
    alert(message);
  }
  return valid;
}

function validateField(value, regex) {
  return regex.test(value);
}