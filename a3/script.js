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