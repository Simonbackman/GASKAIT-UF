<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>GASKA IT PRISER</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
</head>
<body>
    <?php include('templates/nav.php');?>
    <article class="main">
        <section class="price-comparison">

            <div class="price-column">
                <div class="price-header">
                    <div class="price">
                        1
                        <div class="per-month">/Kr</div>
                    </div>
                    <div class="plan-name">Basic</div>
                </div>
                <div class="divider"></div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Responsive Design
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Antal Undersidor 4
                </div>
                <div class="feature inactive">
                    <img src="image/svg/x-square.svg">
                    Feature C
                </div>
                <div class="feature inactive">
                    <img src="image/svg/x-square.svg">
                    Feature D
                </div>
                <div class="feature inactive">
                    <img src="image/svg/x-square.svg">
                    Feature E
                </div>
                <div class="feature inactive">
                    <img src="image/svg/x-square.svg">
                    Feature F
                </div>
                <button id="cta_btn1">test</button> 
                <div id="popup1" class="modal">
                      <div class="popup1-content">
                        <span class="close">&times;</span>
                        <p>Some text </p>
                      </div>
                </div>
            </div>
            <div class="price-column popular">
                <!-- <div class="most-popular">Most Popular</div> -->
                <div class="price-header">
                    <div class="price">
                        2
                        <div class="per-month">/Kr</div>
                    </div>
                    <div class="plan-name">Professional</div>
                </div>
                <div class="divider"></div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Feature A
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Feature B
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Feature C
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Feature D
                </div>
                <div class="feature inactive">
                    <img src="image/svg/x-square.svg">
                    Feature E
                </div>
                <div class="feature inactive">
                    <img src="image/svg/x-square.svg">
                    Feature F
                </div>
                <button id="cta_btn2">test</button> 
                <div id="popup2" class="modal">
                      <div class="popup1-content">
                        <span class="close2">&times;</span>
                        <p>Some text </p>
                      </div>
                </div>
            </div>
            
            <div class="price-column">
                <div class="price-header">
                    <div class="price">
                        3
                        <div class="per-month">/Kr</div>
                    </div>
                    <div class="plan-name">Enterprise</div>
                </div>
                <div class="divider"></div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Responsive Design
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Antal Undersidor 12
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Ikoner
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    kontakt formulär
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    Admin panel
                </div>
                <div class="feature">
                    <img src="image/svg/check-circle.svg">
                    mörkt Tema
                </div>
                <button id="cta_btn3" >test</button> 
           
           <div id="popup3" class="modal">
                 <div class="popup1-content">
                   <span class="close3">&times;</span>
                   <p>Some text </p>
                 </div>
           </div>
            </div>
        </section>
    </article>
    <?php include('templates/footer.php'); ?>
    <script src="javascript/js.js"></script>
    <script src="javascript/theme.js"></script>
    <script src="javascript/popup.js"></script>
</body>
</html>