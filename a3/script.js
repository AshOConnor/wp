/* Insert your javascript here */

//Navigation programming - updates navbar links when scrolling
window.onscroll = function() {
    console.clear();
    updateNavOnScroll();
  }
  
  function updateNavOnScroll(){
         //var sn = document.getElementById("sticky_nav");
       var navLinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
  
       var sections = document.getElementsByTagName('main')[0].getElementsByTagName('section');
  
       var activeSection = -1;
  
       //offsetTop is deducted 10 value to fine tune the scroll value
       while (activeSection < sections.length -1 && window.scrollY > sections[activeSection + 1].offsetTop-10)
       {
         activeSection++;
       }
  
       //remove any active navLinks sections
       for (var i = 0; i < navLinks.length; i++)
       {
         navLinks[i].classList.remove('active');
       }
  
       console.log(activeSection);
  
       if (activeSection >= 0)
       {
         //set active on navLinks
         navLinks[activeSection].classList.add('active');
       }
      }