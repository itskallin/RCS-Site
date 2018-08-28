	<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>RandomCS | Charity Events</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts --> <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v6.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
        
    	<!-- jQuery: required (tablesorter works with jQuery 1.2.3+) -->
	<script src="assets/js/jquery-1.2.6.min.js"></script>

	<!-- Pick a theme, load the plugin & initialize plugin -->
	
    <script src="assets/js/jquery.tablesorter.min.js"></script>
	<script src="assets/js/jquery.tablesorter.widgets.min.js"></script>
	<script>
	$(function(){
		$('table').tablesorter({
			widgets        : ['zebra', 'columns'],
			usNumberFormat : false,
			sortReset      : true,
			sortRestart    : true
		});
	});
	</script>

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/page_faq1.css">
    <link rel="stylesheet" href="assets/css/pages/profile.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
     
    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
    <link rel="stylesheet" href="assets/css/theme-colors/blue.css"/>
    
</head>

<body class="dark header-fixed header-fixed-space">
<div class="wrapper">
    <?php include 'navbar.php';?>
    <div class="interactive-slider-v2 img-nv">
        <div class="container">
        <span class="pull-left">
            <h1>Discover</h1>
            <p>Events for Charity</p>
            </span>
        </div>
    </div>
    <!-- End Interactive Slider v2 -->
    
       <!--=== Purchase Block ===-->
    <div class="purchase">
        <div class="container">
            <div class="row">
                <div class="col-md-9 animated fadeInLeft">
                    <span>The RandomCS creates an eSports environment for players of all skill levels.</span>
                    <p>The RCS hosts eSports tournaments in an effort to promote a healthy competitive environment for players. Our vision for the RCS is to provide an eSports environment for players to develop their own playstyle and learn how to play as a part of a team.</p>
                </div>            
                <div class="col-md-3 btn-buy animated fadeInRight">
                    <a href="contact.php" class="btn-u btn-u-lg"><i class="fa fa-check-circle"></i> Register for an Event</a>
                </div>
            </div>
        </div>
    </div><!--/row-->
    <!-- End Purchase Block -->

       <!--=== Content Part ===-->
    <div class="one-page">
       
            <div class="one-page-inner one-default">
            <div class="container content">
                
                <div class="row">
                
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                <img class="img-responsive" src="assets/img/main/12828553_905124826268234_3231666338539079692_o.jpg" alt="Imagine Dragons">
                </div>

                    </div>
                    <div class="col-md-6">
                        
                         <h2 class="headline-center-v2">Legends vs Dragons | $23,792 raised</h2>
                         <hr>
                        
                      <div class="row margin-bottom-10">
					
                    
                    
                    <p>Legends vs Dragons was a charity event hosted on March 21, 2016 with Anxiety Gaming and the Tyler Robinson Foundation. The event featured Grammy Award winning band Imagine Dragons and several esports icons including Trick2G, Dyrus, and NightBlue. Legends vs Dragons was a brilliant success as the event was able to raise over $22,000 in 4 hours. RandomCS worked alongside Team2G to facilitate event success and build event infrastructure.</p>
                    <p> 
                    <a class="btn-u btn-brd btn-brd-hover btn-u-light" href="http://www.anxietygaming.com/" target="_new"> Anxiety Gaming</a>
           			<a class="btn-u btn-brd btn-brd-hover btn-u-light" href="http://www.trf.org/" target="_new"> Tyler Robinson Foundation</a>
                    
						</p>                   
                        <br>
                      </div>  
                    </div>
                    </div>
                </div>
                   
    </div><!--/one-page-->
    <!-- End Content Part -->

        <?php include 'footer.php';?>
</div><!--/End Wrapepr-->

<!-- JS Global Compulsory -->

<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
        ContactPage.initMap();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51474909-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>