<?php session_start(); ?>
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
        Mekina Eziga
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

  <?php $db = mysqli_connect('localhost','root','','shop')
    or die('Error connecting to MySQL server.'); 

    $query1 = "SELECT * FROM category ";
    $result1 = mysqli_query($db, $query1);
    $categories = mysqli_fetch_array($result1);

  ?>
  <?php include 'header.php';?>

            <!--/.nav-collapse -->

    <div id="all">

        <div id="content">

           

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-heart"></i>
                                </div>

                                <h3><a href="#">We love our customers</a></h3>
                               
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-tags"></i>
                                </div>

                                <h3><a href="#">Best prices</a></h3>
                               
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-thumbs-up"></i>
                                </div>

                                <h3><a href="#">100% satisfaction guaranteed</a></h3>
                                
                            </div>
                        </div>
                      </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->



            <?php 
            
        
        $f=$_SESSION["userid"];
        $query = "SELECT * FROM item where sellerID = '$f' order by ItemID DESC";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
 
      ?>

            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">

                            <h2>CARS POSTED FOR SELL</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">
                        

                <?php
                 $count=1;
        while($row && $count <=10) { 
        
          ?>

         <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="managelisting.php?ItemNo=<?php echo $row['ItemID'] ?>">
                                                <img src="<?php echo $row['PhotosID'];?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="managelisting.php?ItemNo=<?php echo $row['ItemID'] ?>">
                                                <img src="<?php echo $row['PhotosID'];?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="managelisting.php?ItemNo=<?php echo $row['ItemID'] ?>" class="invisible">
                                    <img src="img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="managelisting.php?ItemNo=<?php echo $row['ItemID'] ?>"><?php echo $row['ItemName']?></a></h3>
                                    <p class="price">BIRR : <?php echo number_format($row['CurrentPrice'],2)?></p>
                  

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                       <?php $row = $result->fetch_assoc();
                        $count=$count+1;
                      }
          ?>

          </div>
                </div>

                
                <!-- /.container -->
      </div>

        
            <!-- *** GET INSPIRED ***
 _________________________________________________________ -->
           

            <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->

            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">Grab products for lowest prices</h3>

                        <p class="lead">Start Bidding Keep on Winning 
                        </p>
                    </div>
                </div>
            </div>

           

            <!-- *** BLOG HOMEPAGE END *** -->


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