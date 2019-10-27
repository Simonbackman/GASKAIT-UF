const navSlide = () =>{
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  burger.addEventListener('click', () => {
      nav.classList.toggle('nav-active');

      navLinks.forEach((link, index) => {
     if(link.style.animation){
         link.style.animation = ""
     }else{
         link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
     }
  });
 // burger Animation
 burger.classList.toggle('toggle');

  });
}
navSlide();





//  modal1
var popup1 = document.getElementById("popup1");

// Get the button that opens the popup
var btn = document.getElementById("price_btn1");

// Get the <span> element that closes the popup
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the popup 
btn.onclick = function() {
  popup1.style.display = "block";
}

// When the user clicks on <span> (x), close the popup
span.onclick = function() {
  popup1.style.display = "none";
}
// When the user clicks anywhere outside of the popup, close it
window.addEventListener("click", function(event){
    if (event.target == popup1) {
   popup1.style.display = "none";
  }
});

// modal2
var popup2 = document.getElementById("popup2");

// Get the button that opens the popup
var btn2 = document.getElementById("price_btn2");

// Get the <span> element that closes the popup
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the popup 
btn2.onclick = function() {
  popup2.style.display = "block";
}

// When the user clicks on <span> (x), close the popup
span2.onclick = function() {
  popup2.style.display = "none";
}
// When the user clicks anywhere outside of the popup, close it

window.addEventListener("click", function(event){
    if (event.target == popup2) {
   popup2.style.display = "none";
  }
});

//  modal3
var popup3 = document.getElementById("popup3");

// Get the button that opens the popup
var btn3 = document.getElementById("price_btn3");

// Get the <span> element that closes the popup
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the popup 
btn3.onclick = function() {
  popup3.style.display = "block";
}
// When the user clicks on <span> (x), close the popup
span3.onclick = function() {
  popup3.style.display = "none";
}
// When the user clicks anywhere outside of the popup, close it
window.addEventListener("click", function(event){
    if (event.target == popup3) {
   popup3.style.display = "none";
  }
});
