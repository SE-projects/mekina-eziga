<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        MEKENA EZIGA
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <?php include 'header.php';?>


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-20">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>car inspection detail</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>car inspection result</h1>

                        <form action="process_register.php" method="post">
                            <div class="form-group">
                                <label for="fname">Car Model:</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="lname">car color</label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                            <div class="form-group">
                                <label for="addr">car milage</label>
                                <input type="text" class="form-control" id="addr" name="addr">
                            </div>
  <p>Service Brakes :   
   <select name="serbrake" class="form-control" >
          <option selected value="Select" > Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
                            



<p>Parking Brakes :   
<select name="parbrake" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Brake drum:   
<select name="drubrake" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>
<p>Low pressure warning device :   
<select name="lowpressure" class="form-control">
      <option selected value="Select" > Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Fan/compressor belts :   
<select name="fan" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Oil pressure :   
<select name="oil" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Radiator :   
<select name="rad" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Battery :   
<select name="batt" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Driver position :   
<select name="driverpos" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>

</p>
<p>Wiring and fuel line :   
<select name="wiring" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Visible leak :   
<select name="leak" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Fuel tank securely attached :   
<select name="tank" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Brake lights :   
<select name="blight" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Head lights :   
<select name="hlight" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Tail lights :   
<select name="tlight" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Dash lights :   
<select name="dligkt" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Clearance lights :   
<select name="clight" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Turn indicators :   
<select name="tindicator" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>


<p>Spare bulb,fuses :   
<select name="bulb" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Air pressure :   
<select name="airp" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>chains :   
<select name="chain" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>wheels :   
<select name="wheel" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Transmission flud :   
<select name="tflud" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>


<p>Frames:   
<select name="fram" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Body :   
<select name="cbody" class="form-control">
      <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
     <option value="Not applicable"> Not applicable</option>
</select
  </form>

                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Overall condition</h1>

                        <p class="lead">Rate the overall condition of the car :</p>
                        
                        <hr>
<p><strong> Overall condition</strong></p>
<p> Rate the overall condition of the car : </p>  
        <p> <input type="radio" name="choose" value="Excellent" />Excellent</p>
      <p> <input type="radio" name="choose" value="Good" />Good</p>
      <p> <input type="radio" name="choose" value="Average" />Average</p>
      <p> <input type="radio" name="choose" value="Poor" />Poor</p>
      <p> <input type="radio" name="choose" value="Hrisk" />High risk</p>
 <div class="form-group">
                                <label for="pf">Pass or Fail:</label>
                                <input type="text" class="form-control" id="pf" name="pf">
                            </div>
</p>
  
       </div>
      </div>
   <div class="text-center">
                                <button type="submit" name="cmdsubmit" class="btn btn-primary"><i class="fa fa-submit"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        
    <?php include 'footer.php';?>

    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>
