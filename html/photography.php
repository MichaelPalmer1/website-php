<?php include_once 'classes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Photography</title>
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
                <h1>Photography</h1>
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
					<div class="col-md-8 col-md-offset-2 margin-btm-40">
						<div class="portfolio-slide">
							<ul class="slides">
								<?php
									$pics =
									array(
										'fountains1.jpg',
										'ant.jpg',
										'flowers.jpg',
										'tower1.jpg',
										'tower2.jpg',
										'andy.jpg',
										'shaun.jpg',
										'1-covecrest.jpg',
										'4-lake.jpg',
										'5-mountains.jpg'
									);
								
									foreach($pics as $pic) {
										echo '<li>';
										echo '<img src="img/photo/'.$pic.'" class="img-responsive" alt="">';
										echo '</li>';
									}
								?>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-8 col-md-offset-2">
						<h3>Digital SLR Photographer</h3>
						<p>
							I have over four years of experience with Digital SLR photography. In 2010, I was inducted into the Quill and Scroll International Honor Society for High School Journalists. From 2010 - 2012, during my junior and senior years, I assumed the role of Editor-in-Chief of my high school yearbook staff. With the help of the school's professional photographer, who acted as my mentor, I began to learn more about the art of photography, specifically I learned how to adapt my photography to different lighting situations. The above slideshow contains some samples of the pictures I have taken recently.
						</p>
					</div>
				</div>
			</div><!--work detail container--> 
		</section>
        <?php echo $footer ?>
    </body>
</html>