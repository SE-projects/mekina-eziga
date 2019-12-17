<?php 
	include_once 'header.php';
 ?>



	<section class="main-container">
		<div class="main-wrapper">
			<h2>Signup</h2>
			<form class="signup-form" action="includes/DealerSignup.inc.php" method="POST">



	    <input type="text" name="D_ID" placeholder="ID">
        <input type="text" name="cname" placeholder="Shop Name">
        <input type="text" name="d_opt" placeholder="Delivery Service: Yes/No">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="of_no" placeholder="offfice number">
        <input type="text" name="city" placeholder="city">
        
        
				<button type="submit" name="submit">Sign up</button>
			</form>
		</div>
	</section>

<?php 
	include_once 'footer.php';
?>
