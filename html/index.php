<?php
	require_once 'init.php';
    include_once 'classes/header.php';
	require_once '../recaptchalib.php';
	$publickey = "6LfcWfkSAAAAAGWh7U8dWppVsdPtB5O1XwuwOwIM";
	$privatekey = "6LfcWfkSAAAAAIsh5UndYZecfTY_nYnakGTUz7xK";

	function curl_get_contents($url) {
		// Initiate the curl session
		$ch = curl_init();

		// Set the URL
		curl_setopt($ch, CURLOPT_URL, $url);

		// Removes the headers from the output
		curl_setopt($ch, CURLOPT_HEADER, 0);

		// Return the output instead of displaying it directly
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// Execute the curl session
		$output = curl_exec($ch);

		// Close the curl session
		curl_close($ch);

		// Return the output as a variable
		return $output;
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Michael Palmer</title>
        <meta name="description" content="Portfolio for Michael Palmer">
        <meta name="keywords" content="Michael Palmer,Michael,Palmer,BMW,GSU,Georgia Southern,Georgia Southern University,portfolio,computer science,cs,developer,photographer,student">
        <meta name="author" content="Michael Palmer">
        <?php echo $header ?>
    </head>
    <body data-spy="scroll" data-target="#navigation" data-offset="80">
        <section id="home" data-stellar-background-ratio="0.5">
            <div class="parallax-overlay"></div>
            <div class="home-content text-center">
                 <div class="container">
                    <div class="row">
                        <div class="col-md-12 home-inner">
                            <img src="img/personal.jpg" height="192px" alt="personal image" class="wow animated fadeInUp" data-wow-delay="0.3s">
                                <h1 class="intro-text wow animated fadeInUp " data-wow-delay="0.6s">Hello, I am Michael</h1>
                            <p class="lead wow animated bounceIn" data-wow-delay="0.9s">Developer, Photographer, Student</p>
                            <p class="wow fadeInLeft" data-wow-delay="1.0s"><a href="#about" class="btn btn-lg btn-border-color">More about me</a><a href="#contact" class="btn btn-lg btn-border-default">Contact me</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="navigation">
            <div class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">Michael Palmer</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About Me</a></li>
                            <li><a href="#whatdo">What I do</a></li>
                            <li><a href="#work">My Work</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
        </section><!--navigation section end here-->

        <section id="about" class="padding-80">
            <div class="container">
                <h1 class="section-heading wow animated fadeInDown" data-wow-delay="0.3s">About Me</h1>
                <div class="row">
                    <div class="about-img col-md-12">
                        <img src="img/personal-rha.jpg" alt="" class="wow animated rotateInDownLeft" data-wow-delay="0.6s">
                    </div>
                </div>
                <div class="row intro-row">
                    <div class="col-md-12 about-me text-center">
                        <h1>Hello</h1>
                        <h2>I am Michael Palmer, a <span>Software/Web Developer</span> and <span>Photographer</span> from the USA</h2>
                        <p>
                        <?php /*
                        	After graduating high school as Valedictorian, ....
                        	*/
                        	?>
                        	I am a passionate Computer Science student with a desire to work in a software engineering role that will provide me with the opportunity to contribute to projects that will have a lasting impact to the business. I have gained project management experience through my first internship with BMW Manufacturing. During my second internship with the company, I have been playing a key role in the development of a pilot project using SAP MII. In my spare time, I enjoy building on my development experience by testing out the features of various programming languages on my personal website.
                        </p><br>
                        <?php /*
                        <p><a href="#contact" class="btn btn-theme-color">Hire Me</a></p>
                        */ ?>
                    </div>
                </div>
                <?php
                /*
                <div class="row">
                    <div class="col-md-6 my-skills">
                        <h2 class="short-heading">My Skills</h2>
                        <div class="skills-wrapper wow animated bounceIn" data-wow-delay="0.6s">
                                    <h3 class="heading-progress">Project Management <span class="pull-right">48%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 48%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="48" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">Web Development <span class="pull-right">72%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 72%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">SAP <span class="pull-right">87%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="87" role="progressbar">
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="short-heading">Latest Tweet</h2>
                        <blockquote class="quote-text">
                            <a class="tweet" href="#">Astute thought of the day: Monotonectally conceptualize go forward relationships and effective paradigms. Uniquely build team building convergence rather than progressive manufactured products. Quickly build professional web services through cross functional vortals.
                            </a>
                        </blockquote>
                        <img src="img/personal.jpg" class="quote-pic">
                        <p class="quote-author">
                            <a href="#"><strong>Michael Palmer</strong> @michaelpalmer</a>
                        </p>
                    </div>
                </div>
                */
                ?>
            </div>
            <div class="about-section-2 parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Want to know more about me?</h2>
                        </div>
                        <div class="col-sm-4">
                            <a href="#contact" class="wow animated bounceIn btn btn-theme-color btn-lg" data-wow-delay="0.6s">Let's talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--about section-->

        <section id="whatdo" class="padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="section-heading">What I do</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="services wow animated fadeInUp" data-wow-delay="0.3s">
                            <i class="ion-monitor"></i>
                            <h3><a href="bmw">SAP</a></h3>
                            <p>Experience developing ABAP, SAP MII, and E-Recruiting applications on SAP in a business environment</p>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="services wow animated fadeInUp" data-wow-delay="0.6s">
                            <i class="ion-earth"></i>
                            <h3><a href="website">Web Development</a></h3>
                            <p>Experience with multiple programming languages; implemented HTML, CSS, JavaScript, PHP, and MySQL on websites in a Linux environment</p>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="services wow animated fadeInUp" data-wow-delay="0.9s">
                            <i class="ion-ios7-camera"></i>
                            <h3><a href="photography">Photography</a></h3>
                            <p>Experience using Digital SLR cameras for event and sports photography, with pictures used on websites, yearbooks, newspapers, and brochures; experience using Adobe Photoshop CS6 and GIMP to produce high quality pictures</p>
                        </div>
                    </div>
                </div>
            </div>
           <div class="parallax fun-facts" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">7</h2>
                                <h4>Internship Projects in Production</h4>
                            </div>
                        </div>
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">60</h2>
                                <h4>Programs Written</h4>
                            </div>
                        </div>
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">134</h2>
                                <h4>Volunteer Leadership Hours</h4>
                            </div>
                        </div>
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">7115</h2>
                                <h4>Pictures Taken</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- what i do section-->

        <section id="work" class="padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="section-heading wow animated bounceIn">My Recent Work</h1>
                    </div>
                </div>
            </div>
            <div class="work-section-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php /*
                            <ul class="portfolio-filters text-center">
                                <li class="filter active" data-filter="all">All</li>
                                <li class="filter" data-filter="design">Design</li>
                                <li class="filter" data-filter="dev">Development</li>
                                <li class="filter" data-filter="project">Project Management</li>
                                <li class="filter" data-filter="leader">Leadership</li>
                            </ul><!--.portfolio-filter nav-->
                            */ ?>

                            <div id="grid" class="row">
                                <div class="mix col-md-4 col-sm-6 design dev project leader margin-btm-20">
                                    <a href="work">
                                        <div class="image-wrapper">
                                            <img src="img/work-bmw.png" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                	View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                        	<a href="work">Work Experience</a>
                                        </p>
                                        <center>
                                        	<i>System design, development, project management</i>
                                        </center>
                                    </div><!--.work-desc-->
                                </div><!--work item-->

                                <div class="mix col-md-4 col-sm-6 leader margin-btm-20">
                                    <a href="education">
                                        <div class="image-wrapper">
                                            <img src="img/work-gsu.png" class="img-responsive">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            <a href="education">Education</a>
                                        </p>
                                        <center>
                                        	<i>Academic achievements</i>
                                        </center>
                                    </div><!--.work-desc-->
                                </div><!--work item-->

                                <div class="mix col-md-4 col-sm-6 project leader margin-btm-20">
                                    <a href="rha">
                                        <div class="image-wrapper">
                                            <img src="img/work-rha.png" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                	View Detail
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                        	<a href="rha">Residence Hall Association</a>
                                        </p>
                                        <center>
                                        	<i>Leadership, project management</i>
                                        </center>
                                    </div>
                                </div>

                                <div class="mix col-md-4 col-sm-6 dev design margin-btm-20">
                                    <a href="website">
                                        <div class="image-wrapper">
                                            <img src="img/work-web.png" class="img-responsive">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            <a href="website">Website</a>
                                        </p>
                                        <center>
                                        	<i>System design, development</i>
                                        </center>
                                    </div>
                                </div>
                                
                                <div class="mix col-md-4 col-sm-6 design margin-btm-20">
                                    <a href="photography">
                                        <div class="image-wrapper">
                                            <img src="img/work-photo.png" class="img-responsive">
                                            <div class="image-overlay">
                                                <p>
                                                	View Detail
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                        	<a href="photography">Photography</a>
                                        </p>
                                        <center>
                                        	<i>Digital SLR, Design, Photoshop</i>
                                        </center>
                                    </div>
                                </div>

                                <div class="mix col-md-4 col-sm-6 leader margin-btm-20">
                                    <a href="volunteer">
                                        <div class="image-wrapper">
                                            <img src="img/work-volunteer.png" class="img-responsive">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            <a href="volunteer">Volunteer Work</a>
                                        </p>
                                        <center>
                                        	<i>Leadership</i>
                                        </center>
                                    </div>
                                </div>
                                
                            </div><!--#grid for filter items-->
                        </div><!--.col-md-12 of portfolio filter-->
                    </div><!--.row-->
                </div><!--.contianer-->
            </div><!--work section 1-->
        </section><!--my work section-->
        <section id="contact" class="padding-80">
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="section-heading">Drop me a line</h1>
                    </div>
                </div>
                 <div class="row">
                     <div class="col-md-8 col-md-offset-2">
						<?php
						$nam_validate = "";
						$eml_validate = "";
						$sub_validate = "";
						$url_validate = "";
						$msg_validate = "";
						if(isset($_POST['submit'])) {
							if($_POST['name'] != "" && $_POST['email'] != "" && $_POST['subject'] != "" && $_POST['msg'] != "") {
								// Validate e-mail
								$email = trim($_POST['email']);
								if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
									echo '<h5 style="color:red;text-align:center">Improperly formatted e-mail address.</h5>';
									$eml_validate = "validate";
									goto endcontactform;
								}

								// Verify e-mail exists
								$username	= "michaelpalmer";
								$password	= "fl00dth3m";
								$api_url	= 'http://api.verify-email.org/api.php?';
								$url		= $api_url . 'usr=' . $username . '&pwd=' . $password . '&check=' . $email;
								$object		= json_decode(curl_get_contents($url));
								if(!$object->verify_status && !$object->limit_status) {
									echo '<h5 style="color:red;text-align:center">E-mail address does not exist or cannot be verified.</h5>';
									$eml_validate = "validate";
									goto endcontactform;
								}

								// Validate URL
								if(isset($_POST['site']) && $_POST['site'] != "") {
									$site = trim($_POST['site']);
									$urlRegEx = "/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/i";
									if(!preg_match($urlRegEx, $site)) {
										echo '<h5 style="color:red;text-align:center">Invalid website address.</h5>';
										$url_validate = "validate";
										goto endcontactform;
									}
								}

								// reCAPTCHA Validation
								$resp = recaptcha_check_answer(
									$privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]
								);

								if (!$resp->is_valid) {
									echo "<h5 style='color:red;text-align:center'>The reCAPTCHA wasn't entered correctly.</h5>";
									goto endcontactform;
								}

								// Send e-mail
								$headers = 'From: ' . $_POST['name'] . ' <' . $_POST['email'] . '>';
								$msg = "Message from contact form:\n\n" . $_POST['msg'];
								if(isset($_POST['site'])) {
									$msg .= "\n\n" . "Website: " . $_POST['site'];
								}
								mail("michael@michaeldpalmer.com", $_POST['subject'], $msg, $headers);
								echo '<h5 style="color:white;text-align:center">Message sent successfully</h5>';

								endcontactform:
							} else {
								if($_POST['name'] == "")	$nam_validate = "validate";
								if($_POST['email'] == "")	$eml_validate = "validate";
								if($_POST['subject'] == "")	$sub_validate = "validate";
								if($_POST['msg'] == "")		$msg_validate = "validate";
								echo '<h5 style="color:red;text-align:center">All fields required</h5>';
							}
						}
						?>
                         <form class="wow animated fadeInLeft" data-wow-delay="0.3s" method="post" action="#contact">
                             <div class="row">
                                 <div class="col-md-6">
                                     <input type="text" name="name" id="name" class="form-control <?php echo $nam_validate ?>" value="<?php if(array_key_exists('name', $_POST)) echo $_POST['name']; ?>" placeholder="Name">
                                 </div>
                                 <div class="col-md-6">
                                     <input type="email" name="email" class="form-control <?php echo $eml_validate ?>" value="<?php if(array_key_exists('email', $_POST)) echo $_POST['email']; ?>" placeholder="Email">
                                 </div>
                                 <div class="col-md-6">
                                     <input type="text" name="subject" class="form-control <?php echo $sub_validate ?>" value="<?php if(array_key_exists('subject', $_POST)) echo $_POST['subject']; ?>" placeholder="Subject">
                                 </div>
                                 <div class="col-md-6">
                                     <input type="url" name="site" class="form-control <?php echo $url_validate ?>" value="<?php if(array_key_exists('site', $_POST)) echo $_POST['site']; ?>" placeholder="Website (Optional)">
                                 </div>
                                 <div class="col-md-12">
                                      <textarea name="msg" class="form-control <?php echo $msg_validate ?>" rows="8" placeholder="Your Message"><?php if(array_key_exists('msg', $_POST)) echo $_POST['msg']; ?></textarea>
                                 </div>
                                 <div class="col-md-6">
									<script type="text/javascript">
										var RecaptchaOptions = {
											theme : 'clean'
										};
									</script>
                                 	<?php echo recaptcha_get_html($publickey, null, true); ?>
                                 </div>
                                 <div class="col-md-12 text-right">
                                      <button type="submit" name="submit" value="submit" class="btn btn-lg btn-theme-color wow animated fadeInLeft" data-wow-delay="0.6s">Send Message</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
            </div>
        </section><!--contact section-->
        <div class="follow-me parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                 <div class="row">
                    <div class="col-md-12 wow animated bounceIn">
                        <h1 class="section-heading">Connect With Me</h1>
                    </div>
                     <div class="col-md-12 text-center">
                         <ul class="social-big list-inline">
                             <li><a href="https://www.linkedin.com/in/michaeldpalmer" target="_blank"><i class="ion-social-linkedin-outline lkin" data-toggle="tooltip" title="" data-original-title="LinkedIn" data-placement="top"></i></a></li>
                             <li><a href="https://github.com/MichaelPalmer1" target="_blank"><i class="ion-social-github-outline git" data-toggle="tooltip" title="" data-original-title="GitHub" data-placement="top"></i></a></li>
                             <li><a href="https://www.hackerrank.com/MichaelPalmer" target="_blank"><i class="ion-social-hackerrank hackerrank" data-toggle="tooltip" title="" data-original-title="HackerRank" data-placement="top"></i></a></li>
                         </ul>
                     </div>
                </div>
            </div>
        </div><!--follow me section-->
        <?php
        /*
        <div id="map-canvas" style="width:100%; height: 350px;"></div>
        */
        ?>
        <?php echo $footer ?>
        <?php
        /*
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(37.6, -95.665);

                var mapOptions = {
                    //zoom: 13,
                    zoom: 4,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>USA</strong></p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        */
        ?>
    </body>
</html>