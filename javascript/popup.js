
// modal2
var popup2 = document.getElementById("popup2");

// Get the button that opens the popup
var btn2 = document.getElementById("cta_btn2");

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
                    
var popup3 = document.getElementById("popup3");

// Get the button that opens the popup
var btn3 = document.getElementById("cta_btn3");

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
// modal2
var popup1 = document.getElementById("popup1");

// Get the button that opens the popup
var btn1 = document.getElementById("cta_btn1");

// Get the <span> element that closes the popup
var span1 = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the popup 
btn1.onclick = function() {
  popup1.style.display = "block";
}

// When the user clicks on <span> (x), close the popup
span1.onclick = function() {
  popup1.style.display = "none";
}
// When the user clicks anywhere outside of the popup, close it

window.addEventListener("click", function(event){
    if (event.target == popup1) {
   popup1.style.display = "none";
  }
});