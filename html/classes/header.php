<?php
$header = '
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap css-->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--custom css-->
        <link href="css/style.min.css" rel="stylesheet" type="text/css">
        <!--google web fonts css-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet" type="text/css">
        <!--favicon-->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
		<script>
		var _prum = [["id", "5404a93babe53d512c932a34"],
					 ["mark", "firstbyte", (new Date()).getTime()]];
		(function() {
			var s = document.getElementsByTagName("script")[0]
			  , p = document.createElement("script");
			p.async = "async";
			p.src = "//rum-static.pingdom.net/prum.min.js";
			s.parentNode.insertBefore(p, s);
		})();
		</script>
        <script>
          (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,"script","//www.google-analytics.com/analytics.js","ga");

          ga("create", "UA-69269008-1", "auto");
          ga("send", "pageview");
        </script>';

$footer = '
        <footer id="footer" class="padding-50">
            <div class="container text-center">
                <h4><a href="/">Michael Palmer</a></h4>
                <p>Copyright &copy; Michael Palmer ' . date("Y") . '. Theme by design_mylife. All rights reserved.</p>
            </div>
        </footer>
        
        <!--flex slider css-->
        <link href="css/flexslider.css" rel="stylesheet">
        <!--ion icons css-->
        <link href="icon/css/ionicons.min.css" rel="stylesheet">
        
        <!--script files-->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>
        <script src="js/jquery.sticky.js" type="text/javascript"></script>        
        <script src="js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--new version v1.1 plugins-->
        <script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>';


require_once '/var/www/html/vendor/raven/raven/lib/Raven/Autoloader.php';
Raven_Autoloader::register();
$client = new Raven_Client('https://3b19024923f0446c9cedf0dc6997740e:e1b1f95ac92a499585ce0a34bb358ad1@app.getsentry.com/65505');
$error_handler = new Raven_ErrorHandler($client);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();
$error_handler->registerShutdownFunction();