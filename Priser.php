<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GASKA IT</title>
    <script src="javascript/js.js" async></script>
</head>
<body>
   
   <?php include('templates/nav.php');?>
   
   <article class="main">
        <div class="price_div">
            <div class="box1">
                <h1 class="package_name">Box 1</h1>
                <div class="package_price">
                    <p>000<span>KR</span></p>
                </div>
                <div class="package_list">
                    <ul class="package_ul">
                        <li>test &#9745;</li>
                        <li>test &#9745;</li>
                        <li>Mobile Responsive &#9745;</li>
                        <li>test &#x2612;</li>
                        <li>test &#x2612;</li>
                    </ul>
                </div>
                <button id="price_btn1">test</button>
                    <!-- popup -->
                <div id="popup1" class="modal">
                      <!-- poup content -->
                      <div class="popup1-content">
                        <span class="close">&times;</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque doloremque error veniam repellendus, hic ducimus modi sapiente nulla soluta quaerat excepturi deleniti explicabo illum voluptate dignissimos quae! Temporibus quibusdam, odit doloribus expedita porro quasi! Nemo aut molestiae quae, ab perspiciatis sint optio fugit similique distinctio ex, dolorem atque, autem quasi. </p>
                      </div>
                </div> 
            </div>
                
            
            <div class="box2">
                <h1 class="package_name">box 2</h1>
                <div class="package_price">
                     <p>000<span>KR</span></p>
                </div>
                <div class="package_list">
                    <ul class="package_ul">
                        <li>test </li>
                        <li>test </li>
                        <li>Mobile Responsive &#9745;</li>
                        <li>test </li>
                        <li>test </li>
                    </ul>
                </div>
                <button id="price_btn2">test</button> 
                <!-- popup -->
                <div id="popup2" class="modal">
                      <!-- popup content -->
                      <div class="popup2-content">
                        <span class="close">&times;</span>
                        <p>Some text </p>
                      </div>
                </div>
            </div>
              
            
            <div class="box3">
                <h1 class="package_name">box 3</h1>
                <div class="package_price">
                    <p>000<span>KR</span></p>
                </div>
                <div class="package_list">
                    <ul class="package_ul">
                        <li>test &#9745;</li>
                        <li>test &#9745;</li>
                        <li>Mobile Responsive &#9745;</li>
                        <li>test &#9745;</li>
                        <li>test &#x2612;</li>
                    </ul>
                </div>
                 <button id="price_btn3">test</button> 
                 <!-- popup -->
                <div id="popup3" class="modal">
                      <!-- popup content -->
                      <div class="popup1-content">
                        <span class="close">&times;</span>
                        <p>Some text </p>
                      </div>
                </div>
            </div>
        </div>
        

    
        <script>
// Get the modal
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
window.onclick = function(event) {
  if (event.target == popup1) {
    popup1.style.display = "none";
  }
}
</script>       
    </article>
    <?php include('templates/footer.php'); ?>
    
</body>
</html>