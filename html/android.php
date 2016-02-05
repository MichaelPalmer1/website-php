<?php include_once 'classes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Android</title>
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
                <h1>Android</h1>
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
            			<h3>Android Development</h3>
            			<p>
            				One of my recent endeavors has been to get more involved in Android development. In my spare time, I have created a couple apps for personal use. One of the apps helps me to keep track of the hours that I work every week. Another app queries the status of a game server using UDP sockets.
            			</p>
            		</div>
            	</div>
            </div><!--work detail container-->
        </section>
        <?php echo $footer ?>
    </body>
</html>