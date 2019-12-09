<?php
require "header.php";
?>
<main
    <head>
	   <title>Technical Report</title>
    <link rel="stylesheet"  href="style.css">
    <background:grey>
	</head>
    <body>
    	<div>
    	<?php  
                 if (isset($_POST['sub'])) {
					echo 'Inspection Checklist submitted';
				}
			?>
		</div>
		<form action="technicalteam.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
  <h1 size=32px style="text-align:center">Car Inspection Checklist</h1>
  <hr class="mb-3">
  <p><strong>Car inspector's details</strong></p>
  <hr class="mb-3">
  <p>Car inspector's Name       <input type="text" placeholder=" your full name" required></p>
  <p>Inspecton company Location  <input type="text" placeholder=" company name" required</p>
  <p>Date of inspection  <input type="date"  required</p>
  <hr class="mb-3">
  <p><strong>Car's details</strong></p>
  <hr class="mb-3">
  <p> Car Model: <input type="text" placeholder="Car Name" required</p>
  <p> Licence plate Number<input type="text" placeholder="Licence plate Number"required</p>
  <p> Vechile Identification Number(VIN): <input type="text" placeholder="Vechile Identification No"required</p>
  <p> Car Color: <input type="text" placeholder="Car Color"</p>
  <p> Enter Mileage : <input type="text" placeholder="enter mileage"required</p>
  <p> Date of product: <input type="date"required </p>
  <hr class="mb-3">
<p><strong> Inspection</strong></p>
<hr class="mb-3">
  <p>Service Brakes :   
<select>
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Parking Brakes :   
<select name="parbrake">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Brake drum:   
<select name="drubrake">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>
<p>Low pressure warning device :   
<select name="lowpressure">
	    <option selected value="Select" > Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Fan/compressor belts :   
<select name="fan">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Oil pressure :   
<select name="oil">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Radiator :   
<select name="rad">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Battery :   
<select name="batt">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Driver position :   
<select name="driverpos">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>

</p>
<p>Wiring and fuel line :   
<select name="wiring">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Visible leak :   
<select name="leak">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Fuel tank securely attached :   
<select name="tank">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Brake lights :   
<select name="blight">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Head lights :   
<select name="hlight">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Tail lights :   
<select name="tlight">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Dash lights :   
<select name="dligkt">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Clearance lights :   
<select name="clight">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Turn indicators :   
<select name="tindicator">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>  seat belts :   
<select name="sbelt">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Spare bulb,fuses :   
<select name="bulb">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Tires condition :   
<select name="tires">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Air pressure :   
<select name="airp">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>chains :   
<select name="chain">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>wheels :   
<select name="wheel">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Transmission flud :   
<select name="tflud">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Clutch free play :   
<select name="cfreeplay">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Mirrors :   
<select name="mrror">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Frames:   
<select name="fram">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>

<p>Body :   
<select name="cbody">
	    <option selected value="Select"> Select</option>
       <option value="Good condition">  Good condition</option>
       <option value="Needs Repair">  Needs Repair</option>
	   <option value="Not applicable"> Not applicable</option>
</select>
</p>
<p><strong> Overall condition</strong></p>
<p> Rate the overall condition of the car : </p>  
        <p> <input type="radio" name="choose" value="Excellent" />Excellent</p>
	   	<p> <input type="radio" name="choose" value="Good" />Good</p>
	   	<p> <input type="radio" name="choose" value="Average" />Average</p>
	   	<p> <input type="radio" name="choose" value="Poor" />Poor</p>
	   	<p> <input type="radio" name="choose" value="Hrisk" />High risk</p>

	<p><strong>Did the car pass or fail :</strong></p>
	<p><input type="radio" name="choose" value="pass" required/>Pass</p>
    <p><input type="radio" name="choose" value="fail" required/>Fail</p>
	            </div>
        </div>
	</div>
	<p> <input class="btn btn-primary"type="submit" name="sub" value="Submit" </p>
  <p> <input class="btn btn-primary"type="submit" name="pre" value="Previous" <br>
   <input class="btn btn-primary"type="submit" name="nex" value="Next" </p>
</div>
</form>

</body>
</main>
<?php
require "header.php";
?>