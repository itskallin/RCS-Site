<?php include 'functionsTwitchAPI.php' ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>RandomCS | Stream</title>

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

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/blog.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
    <link rel="stylesheet" href="assets/css/theme-colors/blue.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
var twitchUserName = 'randomchampionshipseries' // Ahri has a solid kit
$(document).ready(function() {    
   $.getJSON("https://api.twitch.tv/kraken/streams/"+twitchUserName+"?callback=?",function(streamData) {
      console.log('Stream Data:', streamData) // debug message, shows all available data  
      if(streamData && streamData.stream) {
         // displayed if online
         $('#streamWidget').html("<h3>Online</h3>")
      } else {
         // displayed if offline
         $('#streamWidget').html("<h3>Offline</h3></div>")
      }
   })
})
</script>
<script>
var twitchUserName = 'esportsrcs' // Ahri has a solid kit
$(document).ready(function() {    
   $.getJSON("https://api.twitch.tv/kraken/streams/"+twitchUserName+"?callback=?",function(streamData) {
      console.log('Stream Data:', streamData) // debug message, shows all available data  
      if(streamData && streamData.stream) {
         // displayed if online
         $('#streamWidgete').html("<h3>Online</h3>")
      } else {
         // displayed if offline
         $('#streamWidgete').html("<h3>Offline</h3></div>")
      }
   })
})
</script>
    
</head>

<body class="dark header-fixed header-fixed-space">
<div class="wrapper">
    <?php include 'navbar.php';?><!--=== Breadcrumbs ===-->
    <div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">&nbsp; </h1>
            
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class="container content">
    	<div class="row blog-page">
            <!-- Left Sidebar -->
        	<div class="col-md-9 md-margin-bottom-40">
                

                <!--Blog Post-->
                <div class="row blog blog-medium margin-bottom-40">
                    <div class="tab-v1">
                    <div class="tab-content">
                    <div id="schedule2" class="tab-pane fade in active">
                        <div class="breadcrumbs">
                        <h3>&nbsp; Schedule</h3>
                        </div>
                        <div>
                   <table class="table table-hover table-responsive">
      <tbody>
        <tr>
          <td><h3><strong>Day</strong></h3></th>
          <td><h3><strong>EsportsRCS</strong> </h3></td>
          <td><h3><strong>RandomCS</strong></h3></td>
        </tr>
        <tr>
          <td><h3>Monday</h3>	
</th>
          <td><h3>-</h3></td>
          <td><h3>-</h3></td>
        </tr>
        <tr>
          <td><h3>Tuesday</h3></th>
          <td><h3>-</h3></td>
          <td><h3>-</h3></td>
        </tr>
        <tr>
          <td><h3>Wednesday</h3>	
</th>
          <td><h3>-</h3></td>
          <td><h3>-</h3></td>
        </tr>
        <tr>
          <td><h3>Thursday</h3>	
</th>
          <td><h3>-</h3></td>
          <td><h3>Hearthstone Rusty Horn</h3></td>
        </tr>
        <tr>
          <td><h3>Friday</h3>
</th>
          <td><h3>ARAM</h3></td>
          <td><h3>Hearthstone Argent Squire</h3></td>
        </tr>
        <tr>
          <td><h3>Saturday</h3>	
</th>
          <td><h3>League of Legends</h3></td>
          <td><h3>-</h3></td>
        </tr>
        <tr>
          <td><h3>Sunday</h3></th>
          <td><h3>-</h3></td>
          <td><h3>HotS NexVerse</h3></td>
        </tr>
        <tr>
          <td><h3>Status</h3></th>
          <td><div id='streamWidgete'><i class="fa fa-circle-o-notch fa-spin"></i></td>
          <td><div id='streamWidget'><i class="fa fa-circle-o-notch fa-spin"></i></div></td>
        </tr>
      </tbody>
    </table>
                    </div>
                    
                    	</div>
                    	<div id="esportsrcs" class="tab-pane fade">
                        <div class="breadcrumbs">
                        <?php

$urlString = "https://api.twitch.tv/kraken/channels/esportsrcs" . $_GET["ch"];

        $returnRequestChannel = twitchAPIRequest($urlString);

        $steamStatus = decodeChannel($returnRequestChannel);

        echo $steamStatus;
	  ?>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="http://player.twitch.tv/?channel=esportsrcs" frameborder="0" scrolling="no" height="540" width="960"></iframe>
                    </div>
                    <!--=== Online Block ===-->
<div class="breadcrumbs"> 
        <div class="row">
        <div class="col-md-12"> 
        	<div class="col-md-4"> 
			<div  class="text-highlights">              
		<div id='streamWidgete'><i class="fa fa-circle-o-notch fa-spin"></i></div></td>

		</table>

   
			</div>
			</div>
			<div class="col-md-4"> 
       							<?php

						$urlString = "https://api.twitch.tv/kraken/channels/esportsrcs" . $_GET["ch"];

       					$returnRequestFollow = twitchAPIRequest($urlString);

        				$steamStatus = decodeFollow($returnRequestFollow);

         				echo $steamStatus; 
						
						?>
				</div>
        </div>
        </div>
        </div> 
        <!--=== End Online Block ===-->
                    	</div>
                        <div id="randomcs" class="tab-pane fade">
                        <div class="breadcrumbs">
                        <?php

$urlString = "https://api.twitch.tv/kraken/channels/randomchampionshipseries" . $_GET["ch"];

        $returnRequestChannel = twitchAPIRequest($urlString);

        $steamStatus = decodeChannel($returnRequestChannel);

        echo $steamStatus;
	  ?>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="http://player.twitch.tv/?channel=randomchampionshipseries" frameborder="0" scrolling="no" height="540" width="960"></iframe>
                        </div>
                        <!--=== Online Block ===-->
<div class="breadcrumbs"> 
        <div class="row">
        <div class="col-md-12"> 
        	<div class="col-md-4"> 
			<div  class="text-highlights " >
                
		<div id='streamWidget'><i class="fa fa-circle-o-notch fa-spin"></i></div></td>

		</table>

   
			</div>
			</div>
			<div class="col-md-4"> 
       							<?php

						$urlString = "https://api.twitch.tv/kraken/channels/randomchampionshipseries" . $_GET["ch"];

       					$returnRequestFollow = twitchAPIRequest($urlString);

        				$steamStatus = decodeFollow($returnRequestFollow);

         				echo $steamStatus; 
						
						?>
				</div>
        </div>
        </div>
        </div> 
        <!--=== End Online Block ===-->
             </div> <!--/randomcs pane-->
                    </div>
                    </div>
                </div>
                <!--End Blog Post-->

                
            </div>
            <!-- End Left Sidebar -->

            <!-- Right Sidebar -->
        	<div class="col-md-3">
                <!-- Tab Nav -->
                <div>
                    <div class="tab-v1"><br>

                    <ul class="nav nav-tabs">
                        
                        <li class="active"><a data-toggle="tab" href="#schedule" data-target="#schedule1, #schedule2"> <i class="fa fa-film"></i></a></li>
                        <li><a data-toggle="tab" href="#esportsrcs" data-target="#esportsrcs, #esportsrcsc"> EsportsRCS</a></li>
                        <li><a data-toggle="tab" href="#randomcs" data-target="#randomcs, #randomcsc"> RandomCS </a></li>
                        
                    </ul>
                    
                
                <!-- End Social Icons -->

                <!-- Chat -->
                
                 
                 <div class="tab-content">
                 <div id="schedule1" class="tab-pane fade in active">
                    <img src="assets/img/chibis/LaurenLive.png">
                 </div>
                <div id="esportsrcsc" class="tab-pane fade">
                    <iframe  src="http://www.twitch.tv/esportsrcs/chat?popout=" frameborder="0" scrolling="yes" height="540" width="300" ></iframe>
                 </div>   
                  <div id="randomcsc" class="tab-pane fade">
                    <iframe  src="http://www.twitch.tv/randomchampionshipseries/chat?popout=" frameborder="0" scrolling="yes" height="540" width="300" ></iframe>
                 </div>
                  </div> 
                  </div>     
                </div><!--/Chat-->
                <!-- End Posts -->

            	
            </div>
            <!-- End Right Sidebar -->
        </div><!--/row-->
    </div><!--/container-->
    <!--=== End Content Part ===-->

     <?php include 'footer.php';?>
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
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