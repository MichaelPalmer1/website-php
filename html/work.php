<?php include_once 'classes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Work Experience</title>
        <meta name="description" content="Learn about Michael Palmer's work experience">
        <meta name="keywords" content="work,bmw">
        <meta name="author" content="Michael Palmer">
        <?php echo $header ?>
    </head>
    <body data-spy="scroll" data-target="#navigation" data-offset="75">
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
                            <li><a href="/#home">Home</a></li>
                            <li><a href="/#about">About Me</a></li>
                            <li><a href="/#whatdo">What I do</a></li>
                            <li><a href="/#work">My Work</a></li>
                            <li><a href="/#contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
        </section><!--navigation section end here-->

		<?php
		/*
        <section id="page-head-bg" style="padding:0px !important">
            <div class="parallax bmw-header" data-stellar-background-ratio="0.5">
                <div class="container">
					<h1 class="animated bounceIn">BMW Manufacturing</h1>
                </div>
            </div>
        </section>
        */
        ?>
        <section id="page-head-bg">
            <div class="container">
                <h1>Work Experience</h1>
            </div>
        </section><!--page-head bg end-->
        
        <section id="work-single" class="padding-80">
        	<div class="container">
				<div class="row">
					<div class="col-md-12 margin-btm-40">
						<h5><a href="/#work">Back to my recent work</a></h5><hr>
					</div>
				</div>
				
				<div class="row">
				<?php /*
					<div class="col-md-8 col-md-offset-2 margin-btm-40">
						<div class="portfolio-slide">
							<ul class="slides">
								<li>
									<img src="img/bmw/1-fg.jpg" class="img-responsive" alt="">
									FG, Spring 2014
								</li>
								<li>
									<img src="img/bmw/2-summer.jpg" class="img-responsive" alt="">
									Interns & Co-Ops, Summer 2014
								</li>
								<li>
									<img src="img/bmw/3-spring.jpg" class="img-responsive" alt="">
									Interns & Co-Ops, Spring 2014
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					*/ ?>
					<div class="col-md-8 col-md-offset-2">
						<h4>Morris Technology</h4>
						<h5>Junior Solutions Developer</h5>
						<p>
							January 2016 - Present
							<br /><br />
							As a Junior Solution Developer, I collaborate with team members using Git to develop, format, and style browser-based applications using Django, Ionic, HTML, JS, and CSS. In addition, we handle support issues and interact with customers via a ticket system.
						</p>
						<br />
						<h4>BMW Manufacturing</h4>
						<h5>SAP MII Intern</h5>
						<p>
							May 2015 - December 2015
							<br /><br />
							This was my second eight-month internship with BMW Manufacturing in Greenville, South Carolina. During the first six months, I served as one of the developer leads that worked to implement, from scratch, a scalable pilot project using SAP MII. The project has incredible potential to scale throughout the company. Utilizing the agile development model, we worked closely with business users in Germany on a daily basis. Development was completed in CSS3, HTML5, JavaScript, SAP MII, SVG, and XML.
                            <br /><br />
                            The solution that was being created was a series of dashboards that display data from multiple SAP systems to the business users, allowing them to take corrective action much faster, increase efficiency, and reduce the risk of production downtime.
						</p>
						<br />
						<h4>BMW Manufacturing</h4>
						<h5>Programmer/Business Analyst Intern</h5>
						<p>
							January 2014 - August 2014
							<br /><br />
							During my eight-month internship with BMW Manufacturing in Spartanburg, South Carolina, I used ABAP, Web Dynpro, and VBA to develop and implement multiple ABAP and Web Dynpro applications on the SAP production server, learned about IT project management using the waterfall development model, and revised existing solutions to reduce liability and increase efficiency. I also helped to support various IT applications for Benefits, Compensation & Organization, Recruiting, and Travel.
							<br /><br />
                            In the second half of my rotation, I worked together with representatives from multiple internal departments, as well as an external vendor, to plan a project, address all potential risks, complete development and testing, and perform the go-live. During my last three months, I successfully implemented six programs into the company's SAP production server.
						</p>
					</div>
				</div>
        	</div>
        </section>

        <?php echo $footer ?>
    </body>
</html>