
<?php 
  include_once 'header.php';
 ?>


<style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
</style>
  <section class="main-container">
    <div class="main-wrapper">
      <h2>Signup</h2>

      <div class="container-fluid padding">
        <div class="row text-center padding">
        
        <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="container">
           <img src="img/mbackground.jpeg" alt="Snow" style="width:100%">
          <button class="btn" onclick="window.location.href = 'SellerSignUp.php';">SELLER</button> 
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="container">
           <img src="img/mbackground.jpeg" alt="Snow" style="width:100%">
          <button class="btn" onclick="window.location.href = 'BuyerSignUp.php';">BUYER</button> 
          </div>
        </div>

        <div class="col-sm-12 col-sm-6 col-md-4">
        <div class="container">
           <img src="img/mbackground.jpeg" alt="Snow" style="width:100%">
          <button class="btn" onclick="window.location.href = 'DealerSignUp.php';">DEALER</button> 
          

          </div>
        </div>
        </div>
        <hr class="my-4">
      </div>
     

    <!-- <form class="signup-form" action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="Firstname">
        <input type="text" name="last" placeholder="Lastname">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="pnum" placeholder="Phone Number">
    
        <button type="submit" name="submit">Sign up</button>
      </form> -->
    </div>
  </section>

<?php 
  include_once 'footer.php';
?>