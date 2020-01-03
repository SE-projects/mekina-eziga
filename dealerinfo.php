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

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li> ENTER DEALER INFORMATION </li>
                    </ul>

                </div>

                <div class="col-md-12">
                    <div class="box">
                        <h1>New account</h1>
                        <p class="lead">Now you can register</p>
                        <hr>
                        <?php
                     
                        if(isset($_GET['err']) && $_GET['err'] == 2) {
                            echo '
                            <div class="alert alert-danger">
                                <strong>Error!</strong> Username you entered already exists.
                            </div>
                            ';
                        }

                        if(isset($_GET['success'])) {
                            echo '
                            <div class="alert alert-success">
                                <strong>Success!</strong> Your account was successfully created. Please log in to continue.
                            </div>
                            ';
                        }
                        ?>

                        <form action="process_dregister.php" method="post">
                            <div class="form-group">
                                <label for="Dname">DEALERS NAME</label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="form-group">
                                <label for="addr">Address</label>
                                <input type="text" class="form-control" id="addr" name="addr">
                            </div>
                            <div class="form-group">
                                <label for="cno">Contact Number</label>
                                <input type="text" class="form-control" id="cno" name="cno">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        
                        
                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>

                        
                    </div>
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
