<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GASKA IT</title>
    
    <!-- <link rel="icon" type="image/png" href="image/favicon-32x32.png" sizes="32x32" /> -->
    <!-- <link rel="icon" type="image/png" href="image/favicon-16x16.png" sizes="16x16" /> -->
    
<!-- 
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="image/webLogo/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="image/webLogo/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="image/webLogo/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="image/webLogo/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="image/webLogo/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="image/webLogo/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="image/webLogo/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="image/webLogo/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="image/webLogo/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="image/webLogo/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="image/webLogo/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="image/webLogo/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="image/webLogo/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" /> -->


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
                    
                <div id="popup1" class="modal">
                      
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
               
                <div id="popup2" class="modal">
                     
                      <div class="popup1-content">
                        <span class="close2">&times;</span>
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
           
                <div id="popup3" class="modal">
                      <div class="popup1-content">
                        <span class="close3">&times;</span>
                        <p>Some text </p>
                      </div>
                </div>
            </div>
        </div>      
    </article>
    <?php include('templates/footer.php'); ?>
    <script src="javascript/theme.js"></script>
</body>
</html>