<?php include_once 'classes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Website</title>
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
                            <li><a href="/#whatdo">What i do</a></li>
                            <li><a href="/#work">My Work</a></li>
                            <li><a href="/#contact">Contact</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
        </section><!--navigation section end here-->

        <section id="page-head-bg">
            <div class="container">
                <h1>Website</h1>
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
            		<?php
            		/*
            		<div class="col-md-8 col-md-offset-2 margin-btm-40">
            			<div class="portfolio-slide">
            				<ul class="slides">
            					<li>
            						<img src="img/photo/1-covecrest.png" class="img-responsive" alt="">
            					</li>
            					<li>
            						<img src="img/photo/2-macro.png" class="img-responsive" alt="">
            					</li>
            					<li>
            						<img src="img/photo/3-flowers.png" class="img-responsive" alt="">
            					</li>
            				</ul>
            			</div>
            			<div class="clearfix"></div>
            		</div>
            		*/
            		?>

            		<div class="col-md-8 col-md-offset-2">
            			<h3>Website Development</h3>
            			<p>
            				I first discovered my passion for development in the early years of middle school upon learning how to use C to program a Lego Mindstorms NXT robot to complete various tasks. Since then, I have taught myself a variety of programming languages&mdash;PHP, HTML, CSS, JavaScript, and SQL&mdash;and have been exposed to many more, including C++, Python, Shell, Lua, and ASP.Net.
            				<br /><br />
            				Utilizing these skills, I enjoy creating complex scripts, usually in PHP, to accomplish various tasks. For instance, one script parses through a file on an external server and outputs it in a user-friendly format. Another script queries a game server via a UDP socket and returns its current status and information about the users on it. One of my favorite scripts unpacks an archive on an external server, parses through its contents, and saves the appropriate data in a format that can be loaded quickly on the local server.
            			</p>
            		</div>
            	</div>
            </div><!--work detail container-->
        </section>
        <?php echo $footer ?>
    </body>
</html>