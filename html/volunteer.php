<?php include_once 'classes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Volunteer Work</title>
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
                <h1>Volunteer Work</h1>
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
									<img src="img/photo/1-covecrest.jpg" class="img-responsive" alt="">
								</li>
								<li>
									<img src="img/photo/2-macro.jpg" class="img-responsive" alt="">
								</li>
								<li>
									<img src="img/photo/3-flowers.jpg" class="img-responsive" alt="">
								</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					*/
					?>
					<div class="col-md-8 col-md-offset-2">
						<h3>Volunteer Experience</h3>
						<p>
							<?php
							/*
							Leadership position in church young group<br>
							Mentoring underclassmen (XC)<br>
							<br>
							*/
							?>
							I have been involved in volunteer work since the start of high school. Before starting college, I participated in a week-long program put on by Georgia Southern University in which 50 college freshmen volunteer in the community surrounding Georgia Southern, make lifelong friends, and build leadership skills.
							<br><br>
							During my freshman year, I was elected as Director of Programming of my residence hall. Working together with a team, I planned and executed award-winning events for our 1,000 residents.
						</p>
					</div>
				</div>
			</div><!--work detail container-->
        </section>
        <?php echo $footer ?>
    </body>
</html>