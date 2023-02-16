/* Insert your javascript here */
const movies = [
  {
    id: 'ACT',
    title: "Avatar: The Way of Water",
    rating: "PG",
    plot: "After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.",
    trailer: "https://www.imdb.com/videoembed/vi3565864217",
    bookingTimeList: ["Wed - 2100","Thu - 2100","Fri - 2100","Sat - 1800","Sun - 1800"]
  },
  {
    id: 'RMC',
    title: "Weird: The Al Yankovic Story",
    rating: "TV",
    plot: "Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.",
    trailer: "https://www.imdb.com/videoembed/vi1080541721",
    bookingTimeList: ["Wed - 1200","Thu - 1200","Fri - 1200","Sat - 1500","Sat - 1500"]
  },
  {
    id: 'ANM',
    title: "Puss in Boots: The Last Wish",
    rating: "PG",
    plot: "When Puss in Boots discovers that his passion for adventure has taken its toll and he has burned through eight of his nine lives, he launches an epic journey to restore them by finding the mythical Last Wish.",
    trailer: "https://www.imdb.com/videoembed/vi3470049817",
    bookingTimeList: ["Mon - 1200","Tue - 1200","Wed - 1800","Thu - 1800","Fri - 1800","Sat - 1200","Sat - 1200"]
  },
  {
    id: 'AHF',
    title: "Margrete: Queen of the North",
    rating: "MA",
    plot: "1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union.",
    trailer: "https://https://www.imdb.com/videoembed/vi968475417",
    bookingTimeList: ["Won - 1200","Tue - 1200","Sat - 2100","Sat - 2100"]
  },
];

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
  return `<li><input class='bookingTime' type='button' value='${time}' onclick='selectSession("${time}")'></li>`;
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
