<!-- Content 1 -->
<section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="images/microphone.jpg" alt="">
                </div>
                <div class="col-sm-6">
                <?php
                  if( isset($_GET['submit']) )
                  {
                    
                      //be sure to validate and clean your variables
                      $maxDia = htmlentities($_GET['maxDia']);
                      $minDia = htmlentities($_GET['minDia']);
                      $depthMea = htmlentities($_GET['depthMea']);
                      $depthPerc = htmlentities($_GET['depthPerc']);

                      //then you can use them in a PHP function. 
                      echo "<h2>Your Submission</h2>";
                      echo "Maximum Diameter: " . $maxDia;
                  }
                  ?>

                  <?php if( isset($result) ) echo $result; //print the result above the form ?>

                	<h2 class="section-header">Diamond Weight Estimator</h2>
                  <form action="" method="get" id="inputForm">
                    <hr/>
                    <h3>Measurements</h3>
                    Maximum Diameter (required):<br>
                    <input type="text" name="maxDia"/><br>
                    Minimum Diameter:<br>
                    <input type="text" name="minDia"><br>
                    Depth Measurement:<br>
                    <input type="text" name="depthMea"><br>
                    Depth Percentage:<br>
                    <input type="text" name="depthPerc"><br>
                    <input type="submit" name="submit" value="send" class="btn btn-primary btn-lg"></input>
                    
                  </form>
                	
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