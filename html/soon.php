<?php include_once 'classes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Michael Palmer</title>
        <?php echo $header ?>
    </head>
    <body class="soon-bg">
		<div class="container soon">
            <div class="row">
                <div class="col-md-12 text-center animated fadeInDown">
                    <h1>Michael Palmer</h1>
                    <h2>Currently Under Construction</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center animated fadeInUp">
                    <div id="defaultCountdown"></div><!--countdown-->
                </div>
            </div>
        </div><!--countdown-->
        <div class="footer-soon">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="list-inline social-colored animated fadeInRight"> 
                            <li><a href="#"><i class="ion-social-github icon-git" data-toggle="tooltip" title="" data-original-title="GitHub" data-placement="top"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus icon-plus" data-toggle="tooltip" title="" data-original-title="Google Plus" data-placement="top"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin icon-in" data-toggle="tooltip" title="" data-original-title="LinkedIn" data-placement="top"></i></a></li>
                        </ul>
                        <p class="animated fadeInUp">Copyright &copy; Michael Palmer <?php echo date("Y") ?>. Theme by design_mylife. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <!--countdown coming soon-->
        <script src="js/jquery.countdown.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                var austDay = new Date();
                austDay = new Date(2014, 9 - 1, 8, 15, 0, 0);
                $('#defaultCountdown').countdown({until: austDay});
                $('#year').text(austDay.getFullYear());
            });
        </script>
    </body>
</html>