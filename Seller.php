<?php
	require 'header.php';

?> 
<main>
<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4">Post car
    <small>insert all nesesary information</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
      <button type="submit" name = "submit" class="btn btn-secondary btn-lg">chosse car picture</button>
      
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Car Description</h3>
      <div class="form-group">
  <label for="comment">delail car description:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
      <h3 class="my-3">Car Details</h3>
      <ul>
        
      	<div class="form-group">
  <label for="usr">Car modell:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">Car mileage:</label>
 <input type="text" class="form-control" id="usr">
 <label for="pwd">Car year of Production:</label>
 <input type="text" class="form-control" id="usr">

  <label for="pwd">Color:</label>
 <input type="text" class="form-control" id="usr">

  <label for="pwd">Top Speed:</label>
 <input type="text" class="form-control" id="usr">

  <label for="pwd">Bid Staring Amount:</label>
 <input type="text" class="form-control" id="usr">

  

</div>

      </ul>
    </div>

  </div>
  <!-- /.row -->
<button type="submit" name = "submit" class="btn btn-primary btn-lg">Post car for sell</button>
  <!-- Related Projects Row -->
  <h3 class="my-4">previouse cars sold</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/car1.jpg" alt="">
            <p class="form-control">SOLD for : 400,000</p>
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/car2.jpg" alt="">
            <p class="form-control">SOLD for : 350,000</p>
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/car3.jpg" alt="">
            <p class="form-control">SOLD for : 450,000</p>
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="img/car4.jpg" alt="">
            <p class="form-control">SOLD for : 300,000</p>
          </a>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->


</main>
<?php
   require 'footer.php';
   ?>