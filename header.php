
<?php 
	session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
 </head>
 <body>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a href="" class="navbar-brand" href="#"><img src="img/logo1.png" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Connect</a>
				</li>
					<?php
						if (isset($_SESSION['u_id'])) {
							echo '<form action="includes/logout.inc.php" method="POST">
								<button type="submit" name = "submit" class="btn btn-primary btn-lg">Logout</button>
								</form>';
						} else {
							echo 	'<form action="includes/login.inc.php" method="POST">
									<input type="text" name="uid" placeholder="Username/e-mail">
									<input  type="password" name="pwd" placeholder="password">
									<button type="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
									</form>
									<li class="nav-item">
									<a class="nav-link" href="signup.php">Sing up</a>
										</li>';
						}
					?>
			</ul>
		</div>
	</div>
 </nav>