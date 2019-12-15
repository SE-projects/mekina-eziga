 <?php
 	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="description" content="Thisvis an example of a meta description.this will often show up in search result" >
 	<meta name=viewport content="width=device-width , initial-scale=1">
 	<title></title>
 	<!--<Link rel="stylesheet" href=style.css">-->
<style type="text/css">
	p {
		color : red;

	}
</style>
 </head>
 <body>
<head class="siteheader">
	<a href="#">
	<img src="img/mekina.png"alt="logo">
	</a>
	<u>
		<li><a href="#">Home</a></li>
		<li><a href="#">porfolio</a></li>
		<li><a href="#">about me</a></li>
		<li><a href="#">contact</a></li>
	</u>	
	<div>
		
			
			
		
			<form action="includes/login.inc.php" method="post">
			<input type="text" name="mailuid" placeholder="username/Email...">
			<input type="password" name="pwd" placeholder="password...">
			<button type="submit" name="login-submit">Login</button>
			</form>
			<a href="signup.php">Signup</a>
			<form action="includes/logout.inc.php" method="post">
				<button type="submit" name="logout-submit">Logout</button>
			</form>
		
		<?php
	
		echo 'it is showing '.$_SESSION['userId'];
	
	?>
	
		
	</div>
</head> 
