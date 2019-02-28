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

    <title>Diamond Weight Estimator</title>

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
    require '../nav-bar.php';
    ?>

    
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <?php
                  if( isset($_GET['submit']) )
                  {
                    
                      //be sure to validate and clean your variables
                      $maxDia = htmlentities($_GET['maxDia']);
                      $minDia = htmlentities($_GET['minDia']);
                      $depthMea = htmlentities($_GET['depthMea']);
                      $depthPerc = htmlentities($_GET['depthPerc']);

                      function roundDiaEstimator($maxDiam,$minDiam,$depthMeas,$depthPercent){
                        if($maxDiam == NULL){
                          return 'ERROR: Maximum Diameter is a required field.';
                        }
                        if($minDiam == NULL || $minDiam == 0){
                          $minDiam = $maxDiam;
                        }
                        $avgGirdleDiam = ($maxDiam + $minDiam)/2;
                        if($depthPercent == NULL || $depthPercent == 0){
                          $depthPercent = 60.7;
                        }
                        if($depthMeas == NULL || $depthMeas == 0){
                          $depthMeas = $depthPercent * 0.01 * $avgGirdleDiam;
                        }
                        $calculation = $avgGirdleDiam * $avgGirdleDiam * $depthMeas * 0.0061;
                        $rounded = round($calculation, 2);
                        return $rounded . "ct";
                        
                      }
                      $rounded = roundDiaEstimator($maxDia,$minDia, $depthMea, $depthPerc);
                      echo "<h2>Your Result</h2>";
                      echo "<h2>Weight Estimate: <strong>" . $rounded . "</strong></h2>";
                      echo "<h4>Your Submission</h4>";
                      echo "Maximum Diameter: " . $maxDia;

                  } else {
                    echo "<h2 class=\"section-heading\">Diamond Weight Estimator</h2>
                    <p class=\"text-light\">Enter your details below to estimate the weight of your diamond.</p>";
                  }
                  ?>
                    
                </div>
            </div>
        </div>
    </section>

<!-- Content 1 -->
<section class="content">
  <div class="container">
      <div class="row">
          
          <div class="col-sm-6">
            

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
              <input type="submit" name="submit" value="estimate" class="btn btn-primary btn-lg"></input>
              
            </form>
            
          </div>   
          <div class="col-sm-6">
              <img class="img-responsive img-circle center-block" src="images/diamond.jpg" alt="">
          </div>             
          
      </div>
  </div>
</section>





<!-- Footer -->
<?php
    require '../footer.php';
    ?>


    <!-- jQuery -->
    <script src="../js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Custom Javascript -->
    <script src="../js/custom.js"></script>

</body>

</html>
