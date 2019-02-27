<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>PHP Example Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
</head>

<body>

    <!-- Navigation -->
    <?php
    require 'nav-bar.php';
    ?>

	<!-- Header -->
    <?php
    require 'header.php';
    ?>

	<!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                	<span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>
                    <h2 class="section-heading">Completely synergize resource taxing relationships</h2>
                    <p class="text-light">Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                </div>
            </div>
        </div>
    </section>

	<!-- Content 1 -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/microphone.jpg" alt="">
                </div>
                <div class="col-sm-6">
                	<h2 class="section-header">Best in Class</h2>
                	<p class="lead text-muted">Holisticly predominate extensible testing procedures for reliable supply chains. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                	<a href="#" class="btn btn-primary btn-lg">Classify It</a>
                </div>                
                
            </div>
        </div>
    </section>

	<!-- Content 2 -->
     <section class="content content-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                	<h2 class="section-header">Superior Quality</h2>
                	<p class="lead text-light">Holisticly predominate extensible testing procedures for reliable supply chains. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                	<a href="#" class="btn btn-default btn-lg">Test It</a>
                </div>    
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/iphone.jpg" alt="">
                </div>            
                
            </div>
        </div>
    </section>    

    <!-- Promos -->
	<div class="container-fluid">
        <div class="row promo">
        	<a href="#">
				<div class="col-md-4 promo-item item-1">
					<h3>
						Unleash
					</h3>
				</div>
            </a>
            <a href="#">
				<div class="col-md-4 promo-item item-2">
					<h3>
						Synergize
					</h3>
				</div>
            </a>
			
			<a href="#">
				<div class="col-md-4 promo-item item-3">
					<h3>
						Procrastinate
					</h3>
				</div>
            </a>
        </div>
    </div><!-- /.container-fluid -->

	<!-- Content 3 -->
     <section class="content content-3">
        <div class="container">
			<h2 class="section-header"><span class="glyphicon glyphicon-pushpin text-primary"></span><br> Sanity Check</h2>
			<p class="lead text-muted">Holisticly predominate extensible testing procedures for reliable supply chains. Dynamically innovate resource-leveling customer service for state of the art customer service.</p> 
                    <a href="#" class="btn btn-primary btn-lg">Check Now</a>               
            </div>
        </div>
    </section>
    
	<!-- Footer -->
    <?php
    require 'footer.php';
    ?>



</body>

</html>
