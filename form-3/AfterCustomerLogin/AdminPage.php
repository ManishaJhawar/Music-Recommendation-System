<?php
if(isset($_GET['adminname'])){
    $adminname=$_GET['adminname'];
}else{
    $adminname="no one";
}

if(isset($_GET['adminid'])){
    $adminid=$_GET['adminid'];
}else{
    $adminid=12345;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MusiGlobe</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
	<link href="../../css/main.css" rel="stylesheet">
	<link href="../../css/animate.css" rel="stylesheet">	
	<link href="../../css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="../../js/html5shiv.js"></script>
	    <script src="../../js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<!--<img class="img-responsive" src="../../images/musiglobe.jpg" alt="logo" height="200" width="200" />-->
		                	<h1 style="text-indent:95px; color:white; font-weight: bold;">MusiGlobe</h1>
		                	<!--<h3 style="text-indent:95px; color:white; font-weight: bold;">Welcome </h3>-->
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                   
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">Update Database</a></li>                         
		                    <!--<li class="scroll"><a href="#about">About</a></li>                
		                    <li class="no-scroll"><a href="#contact">Contact</a></li>--> 
		                    <!--<li class="no-scroll"><a href="/Music-Recommendation-System/index.html#">Logout</a></li>-->
		                    <li class="no-scroll"><a href="logout.php#">Logout</a></li>
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>  	                  
    </header>
    <!--/#header--> 

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="../../images/slider/bg1.jpg" alt="slider">					
					<div class="carousel-caption">
						<h1>Welcome   <?php echo $adminname;?></h1>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="../../images/slider/bg2.jpg" alt="slider">	
					<div class="carousel-caption">
						<h1>Welcome   <?php echo $adminname;?></h1>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="../../images/slider/bg3.jpg" alt="slider">	
					<div class="carousel-caption">
						<h1>Welcome   <?php echo $adminname;?></h1>
					</div>
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->

	<section id="explore">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">DATABASE  Operations</h2>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div>
										<a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=Music_System&token=2de46bac2684edaeaf10d3e545e62aad" class="btn btn-primary">Update Database<i class="fa fa-angle-right"></i></a>
									</div>	
									<div>
										<a href='viewQueries.php' class="btn btn-primary">Answer back the queries<i class="fa fa-angle-right"></i></a>
									</div>
								</div>
							</div>					
						</div>
					</div>
				</div>
				<div class="guitar">
					<img class="img-responsive" src="../../images/guitar.png" alt="guitar">
				</div>
			</div>		
		</div>
	</section><!--/#event-->

	<!--<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="../../images/guitar2.jpg" alt="guitar">
		</div>
		<div class="about-content">					
					<h2><strong>About  MUSIGLOBE</strong></h2>
					<p><strong>A one stop visit for anyone around the globe to a vast collection of wonderful songs!</strong></p>
					<p><strong>Rate and get recommendations!</strong></p>
					<p><strong>Move to the beat of the music!!</strong></p> 
		</div>
	</section><!--/#about-->
	
	
	<!--<section id="contact">
		<!--<div id="map">
			<div id="gmap-wrap">
	 			<div id="gmap"> 				
	 			</div>	 			
	    	</div>
		</div><!--/#map
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="../../images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: promo@party.com<br>
								Phone: +1 (123) 456 7890<br>
								Fax: +1 (123) 456 7891
							</address>
						</div>
						<div class="contact-address">
							<h3>Contact</h3>
							<address>
								Unit C2, St.Vincent's Trading Est.,<br>
								Feeder Road,<br>
								Bristol, BS2 0UY<br>
								United Kingdom
							</address>
						</div>
					</div>
					<div class="col-sm-5">
						<div>
							<a href="Template-FAQ/faqs.html" class="btn btn-primary">FAQs<i class="fa fa-angle-right"></i></a>
						</div>
						<div id="contact-section">
							<h3>Send a message</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2014<a target="_blank" href="http://shapebootstrap.net/"> Evento </a>Theme. All Rights Reserved. <br> Designed by <a target="_blank" href="http://shapebootstrap.net/">ShapeBootstrap</a></p>               
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="../../js/gmaps.js"></script>
	<script type="text/javascript" src="../../js/smoothscroll.js"></script>
    <script type="text/javascript" src="../../js/jquery.parallax.js"></script>
    <script type="text/javascript" src="../../js/coundown-timer.js"></script>
    <script type="text/javascript" src="../../js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="../../js/jquery.nav.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>  
</body>
</html>
