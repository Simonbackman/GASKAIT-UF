<!DOCTYPE html>
<html lang="en" data-theme="">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>GASKA IT</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript/js.js" async></script>

</head>

<body>
   <?php include('templates/nav.php')?>
    
   <div class="container">
    	<div class="other-content">Need to find free images/no copyright</div>
    	<div class="slide show" style="background-image: url('image/codeimg.webp');"></div>
    	<div class="slide" style="background-image: url('image/code-1076533_960_720.jpg');"></div>
    	<div class="slide" style="background-image: url('image/code-2434271_960_720.jpg');"></div>
    </div>

    <article>
        <div class="main_page_txt_div">
            <h1>test</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing el Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere eligendi officia accusantium distinctio quia? Obcaecati, voluptate exercitationem. Maxime, mollitia iste repellendus corporis, placeat necessitatibus excepturi nobis atque, corrupti cum perferendis nihil sed. Vero facere voluptate nemo rerum ex at iusto adipisci quos, libero accusamus repudiandae molestias harum pariatur vel blanditiis explicabo ipsum commodi nobis aliquam ratione ea aut corporis! Voluptates soluta natus et laborum odio voluptatibus excepturi cupiditate at repellat, modi magni. Ad accusantium id itaque eaque cumque, repudiandae pariatur? Error autem quibusdam velit optio ad explicabo iure, blanditiis mollitia praesentium nemo dolore dolores atque amet eius cum dignissimos molestias. Quo quidem minima neque debitis harum aperiam alias obcaecati! Tempora, quaerat quis? Voluptatem voluptates cum aliquid nulla aut commodi delectus, ex molestiae, accusamus illum expedita culpa velit, cupiditate impedit quidem reiciendis quas officiis quasi omnis! Beatae velit est tenetur maxime saepe sequi, dolore porro, aut error laudantium adipisci! Dolor doloremque delectus consequuntur maxime quasi enim ad totam odio expedita pariatur necessitatibus natus hic impedit iure, numquam ratione. Ab error cumque voluptatem possimus. Repellendus magnam quidem voluptas fugit dolor quaerat nobis! Deleniti, quia consectetur, doloribus eius numquam expedita voluptate qui assumenda maiores ducimus dolores itaque in maxime quo beatae voluptas adipisci. it. Expedita ipsum cumque ducimus eos dolorum perspiciatis ab tenetur pariatur ullam amet reiciendis eum obcaecati vero, doloribus blanditiis veritatis iusto illo magnam nisi fugiat, eligendi eveniet alias quod. Et reprehenderit explicabo ad veniam vero modi, accusantium ea quae aperiam voluptas, architecto dignissimos.</p>
        </div>
    </article>

    
    
    
    
    
    
    <?php include('templates/footer.php')?>


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
    	}, 2000);
    };
    // Document Ready.
    $(function () {
    	cycleBackgrounds();
    });
    </script>
</body>
</html>