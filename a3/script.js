/* Insert your javascript here */

//Navigation programming - updates navbar links when scrolling
window.onscroll = function() {
    console.clear();
    console.log("Win Y: "+window.scrollY);
    var navLinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
    // console.log(navLinks);
    var articles = document.getElementsByTagName('main')[0].getElementsByTagName('article');
    console.log(articles)
    console.log(articles[0].offsetTop+' '+(articles[0].offsetTop+articles[0].offsetHeight));
    console.log(articles[1].offsetTop+' '+(articles[1].offsetTop+articles[1].offsetHeight));
    console.log(articles[2].offsetTop+' '+(articles[2].offsetTop+articles[2].offsetHeight));
    for (var a=0; a<articles.length; a++) {
        var arTop = articles[a].offsetTop;
        var arBot = articles[a].offsetTop+articles[a].offsetHeight;
        if (window.scrollY >= arTop && window.scrollY <= arBot) {
            console.log(articles[a].id+': current');
            navLinks[a].classList.add('current');
        } else{
            console.log(articles[a].id+':');
            navLinks[a].classList.remove('current');
        }
    }
  }
  
function calculateTotal() {
    var standardAdultSeats = parseInt(document.getElementsByName("sta")[0].value);
    var standardConcessionSeats = parseInt(document.getElementsByName("stp")[0].value);
    var standardChildSeats = parseInt(document.getElementsByName("stc")[0].value);
    var firstClassAdultSeats = parseInt(document.getElementsByName("fca")[0].value);
    var firstClassConcessionSeats = parseInt(document.getElementsByName("fcp")[0].value);
    var firstClassChildSeats = parseInt(document.getElementsByName("fcc")[0].value);

    var sessionTime = document.querySelector('input[name="session"]:checked').value;
    var sessionDay = sessionTime.split(" ")[0];

    var standardAdultPrice, standardConcessionPrice, standardChildPrice, firstClassAdultPrice, firstClassConcessionPrice, firstClassChildPrice;

    if (sessionDay === "Saturday" || sessionDay === "Sunday") {
        standardAdultPrice = standardAdultSeats * parseFloat(document.getElementsByName("sta")[0].getAttribute("data-fullprice"));
        standardConcessionPrice = standardConcessionSeats * parseFloat(document.getElementsByName("stp")[0].getAttribute("data-fullprice"));
        standardChildPrice = standardChildSeats * parseFloat(document.getElementsByName("stc")[0].getAttribute("data-fullprice"));
        firstClassAdultPrice = firstClassAdultSeats * parseFloat(document.getElementsByName("fca")[0].getAttribute("data-fullprice"));
        firstClassConcessionPrice = firstClassConcessionSeats * parseFloat(document.getElementsByName("fcp")[0].getAttribute("data-fullprice"));
        firstClassChildPrice = firstClassChildSeats * parseFloat(document.getElementsByName("fcc")[0].getAttribute("data-fullprice"));
    }
    else {
        standardAdultPrice = standardAdultSeats * parseFloat(document.getElementsByName("sta")[0].getAttribute("data-disprice"));
        standardConcessionPrice = standardConcessionSeats * parseFloat(document.getElementsByName("stp")[0].getAttribute("data-disprice"));
        standardChildPrice = standardChildSeats * parseFloat(document.getElementsByName("stc")[0].getAttribute("data-disprice"));
        firstClassAdultPrice = firstClassAdultSeats * parseFloat(document.getElementsByName("fca")[0].getAttribute("data-disprice"));
        firstClassConcessionPrice = firstClassConcessionSeats * parseFloat(document.getElementsByName("fcp")[0].getAttribute("data-disprice"));
        firstClassChildPrice = firstClassChildSeats * parseFloat(document.getElementsByName("fcc")[0].getAttribute("data-disprice"));
    }
    var totalPrice = standardAdultPrice + standardConcessionPrice + standardChildPrice + firstClassAdultPrice + firstClassConcessionPrice + firstClassChildPrice;

    // Output the total price to the user
    document.getElementById("totalPrice").innerHTML = "Total Price: $" + totalPrice.toFixed(2);
}