<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>RandomCS | Duelyst</title>

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
    <div class="interactive-slider-v2 img-duel">
        <div class="container">
        <span class="pull-left">
            <h1>Discover</h1>
            <p>Events for Heroes</p>
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
                <h2 class="title-v2">Dawn of the Duelysts</h2>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                <img class="img-responsive" src="assets/img/tournaments/dotd.jpg" alt="Dawn of the Duelysts">
                </div>

                    </div>
                    <div class="col-md-6">
                        
                        <p>RCS presents the Dawn of the Duelysts, a Duelyst Tournament! It is OPEN, FREE-TO-JOIN with PRIZES. Our goal is to promote a competitive environment for players to develop strategies and improve.</p>

                        <div class="row margin-bottom-10">
					<div class="col-md-6 md-margin-bottom-30">                
                        <h3 class="heading-sm">
                            <i class="icon-custom rounded-x icon-lg icon-bg-u fa fa-trophy"></i>
                            <span>Cash Prize Pool!</span>
                        </h3>
                    </div>
                        
                    </div>
                </div>
                 </div>
                 </div>
   
                <hr>
                <div class="one-page-inner one-default">
            <div class="container content">
                <div class="row content-boxes-v2">
                    <div class="col-md-4 md-margin-bottom-30">                
                        <h3 class="heading-sm">
                            <i class="icon-custom rounded-x icon-sm icon-bg-u fa fa-lightbulb-o"></i>
                            <span>Crowd Funding</span>
                        </h3>
                        <p>The RCS runs crowd funded tournaments with large prize pools. If you are interested in contributing to a prize pool check out our Patreon page.<br>

                        <a class="btn-u btn-brd btn-brd-hover btn-u-light" href=" https://www.patreon.com/user?u=729647&ty=h" target="_new"><i class="fa fa-empire"></i> Benifits</a>
                        </p>
                    </div>
                    <div class="col-md-4 md-margin-bottom-30">
                        <h3 class="heading-sm">
                            <i class="icon-custom rounded-x icon-sm icon-bg-blue fa fa-bullhorn"></i> 
                            <span>Check-in</span>
                        </h3>
                        <p>Tournament check in begins one hour before the tournament starts. Players who have succesfully checked in will be seeded on the bracket.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="heading-sm">
                            <i class="icon-custom rounded-x icon-sm icon-bg-red icon-line icon-rocket"></i>
                            <span>Monthly Schedules</span>
                        </h3>
                        <p>Schedules are posted monthly for ease of planning. <em>Register with confidence.</em> </p>
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