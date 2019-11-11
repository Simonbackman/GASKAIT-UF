<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>GASKA IT</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
</head>
<body>
   <?php include('templates/nav.php')?>
    
   <div class="container">
    	<div class="other-content">..</div>
    	<div class="slide show" style="background-image: url('image/sliderImg/code-1076536_1920.jpg');"></div>
    	<div class="slide" style="background-image: url('image/sliderImg/code-1839406_960_720.jpg');"></div>
    	<div class="slide" style="background-image: url('image/sliderImg/website-647013_960_720.jpg');"></div>
    </div>

    <article id="main-page-article">
        <div class="main_page_txt_div">
            <h1 id="main_page-txt_info">Vi ger dig möjligheten att designa din egen hemsida som vi sedan skapar
                med dina behov som är vår största prioritet. förutom det så erbjuder vi också support antigen via telefon eller att
                vår egna support åker hem till dig och fixar ditt problem. Vi erbjuder en tjänst mycket billigare än vad den vanligtvis är
            </h1>
        </div>
    </article>
    <section id="main-page-article2">
    <div class="mainCardHome">
            <ul class="cards">
                <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="image/priserImgCard2.png"></div>
                    <div class="card_content">
                    <h2 class="card_title">Priser</h2>
                    <p class="card_text">För mer information om våra priser och våra olika paket och dess innehåll</p>
                    <a href="priser.php" class="btn card_btn">Mer information</a>
                    </div>
                </div>
                </li>
                <li class="cards_item">
                <div class="card">
                    <div class="card_image"> <img src="image/supportImgCard.jpg"></div>
                    <div class="card_content">
                    <h2 class="card_title">Support</h2>
                    <p class="card_text">För mer information om våran support och vilka tjänster han erbjuder och till vilka priser</p>
                    <a href="support.php" class="btn card_btn">Mer information</a>
                    </div>
                </div>
                </li>
                <li class="cards_item">
                <div class="card">
                    <div class="card_image"><img src="image/infoImgCard.png"></div>
                    <div class="card_content">
                    <h2 class="card_title">Om Oss</h2>
                    <p class="card_text">Mer information om vilka vi är och hur man kan komma i kontakt med oss</p>
                    <a href="omOss.php" class="btn card_btn">Mer information</a>
                    </div>
                </div>
                </li>
            </ul>
    </div>
    </section>
    
    <?php include('templates/footer.php')?>
    <!-- jquery for the img slider -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
    function cycleBackgrounds() {
    	var index = 0;
    	$imageEls = $('.container .slide'); // Get the images to be cycled.
    	setInterval(function () {
    		// Get the next index.  If at end, restart to the beginning.
    		index = index + 1 < $imageEls.length ? index + 1 : 0;
    		// Show the next image.
    		$imageEls.eq(index).addClass('show');
    		// Hide the previous image.
    		$imageEls.eq(index - 1).removeClass('show');
    	}, 4000);
    };
    // Document Ready.
    $(function () {
    	cycleBackgrounds();
    });
    </script>
     <script src="javascript/js.js"></script>
    <script src="javascript/theme.js"></script>
</body>
</html>