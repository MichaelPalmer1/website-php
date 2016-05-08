<?php
include_once 'classes/header.php';
$credits = 105; // End Spring 2016 [1 semester left]
//$credits = 118; // End Summer 2016 [Final semester]
//$credits = 131; // End Spring 2017 [Degree completed]
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Education</title>
        <meta name="keywords"
              content="education,gsu,georgia southern university,computer science,information systems,sap">
        <?php echo $header ?>
    </head>
    <body data-spy="scroll" data-target="#navigation" data-offset="75">
    	<section id="navigation">
            <div class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
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
                <h1>Georgia Southern University</h1>
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
            		<div class="col-md-8 col-md-offset-2">
            			<h3>Bachelor of Science in Computer Science</h3>
            			<h5>Minor in Information Systems with a focus on SAP</h5>
            			<br>
            			<p>
            				<h3 class="heading-progress">
            					<span style="color:black;font-weight:bold">Degree Completion</span>
            					<span class="pull-right">
            						<span style="color:black;font-weight:bold">
            							<?php
                                        $semesters = round((132 - $credits) / 15);
                                        $isPlural = ($semesters > 1) ? "s" : "";
                                        echo ((132 - $credits) / 15 > 1) ? "$semesters semester$isPlural left" : (
                                            ($credits != 132) ?
                                                "Currently enrolled in final semester" : "Degree Completed");
                                        ?>
            						</span>
            					</span>
            				</h3>
            				<div class="progress">
            					<div class="progress-bar" style="width: <?php echo round(($credits / 132) * 100) ?>%"
                                     aria-valuemax="100" aria-valuemin="0"
                                     aria-valuenow="<?php echo round(($credits / 132) * 100) ?>" role="progressbar">
            						<span class="pull-right">
            							<span style="font-weight:bold;vertical-align:middle;position:relative;top:2px;right:3px;">
                                            <?php echo round(($credits / 132) * 100) ?>%
                                        </span>
            						</span>
            					</div>
            				</div>

            				<h5>Links:</h5>
            				<a href="http://georgiasouthern.meritpages.com/Michael-Palmer/1149208" target="_blank"
                               rel="nofollow">Georgia Southern MeritPages</a>

            				<h5>Cumulative GPA:</h5>
            				3.71

            				<h5>Classification:</h5>
            				Senior

            				<h5>Expected Graduation:</h5>
            				May 2017

            				<h5>Achievements:</h5>
            				Zell Miller Scholarship (Fall 2012 - Present)<br>
							President's List (Fall 2013, Spring 2016)<br>
            				Dean's List (Fall 2012, Fall 2014, Spring 2015)<br>
            				CBRE Global Investors 5-Star Worldwide Scholarship Award (Fall 2012)<br>

            				<h5>Major Courses To Date:</h5>
							Database Systems (CSCI 3432)<br>
							Algorithm Design & Analysis (CSCI 5330)<br>
							Object-Oriented Design (CSCI 5335)<br>
            				Systems Software (CSCI 3232)<br>
            				Data Structures (CSCI 3230)<br>
            				Theoretical Foundations (CSCI 3236)<br>
            				Programming Principles II (CSCI 1302)<br>
            				Programming Principles I (CSCI 1301)<br>
            				Computers, Ethics, and Society (CSCI 2120)<br>

            				<?php /*<h5>Currently Enrolled:</h5>

							<h5>JavaFX classwork from CSCI 1302:</h5>
							<a href="http://www.michaeldpalmer.com:8080/CardRandomizer.html">Card Randomizer</a><br>
							<a href="http://www.michaeldpalmer.com:8080/RandomCircle.html">Random Circle</a><br>
							<a href="http://www.michaeldpalmer.com:8080/RegularPolygon.html">Regular Polygon</a><br>
							<a href="http://www.michaeldpalmer.com:8080/RotatingFan.html">Rotating Fan</a><br>
							<a href="http://www.michaeldpalmer.com:8080/SineCurve.html">Sine Curve</a><br>
                            */
                            ?>
            			</p>
            		</div>
            	</div>
            </div><!--work detail container-->
        </section>
        <?php echo $footer ?>
    </body>
</html>
