<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

       
            <!---------------------------------- SOME CUSTOM LINKS --------------------------->
        
            <!-- Bootstrap link -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.css" rel="stylesheet">
           
          <!---------------------------------- SOME CUSTOM LINKS --------------------------->
       
     <!-- Custom CSS -->
     <link type="text/css" rel="stylesheet" href="css/stylesheet.css">
    <title>E-store</title>
    
    <!-- SOME IMPORTANT SYLES -->
    <style>
      
    </style>
</head>
<body>
  <?php 
    include 'includes/header.php';
  ?>

  <div class="container-fluid">
    <!----------------------------------------------- ROW 1 start ----------------------------------------------->
    <div class="row row_style">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <p>Mobile 1</p>
          </div>
          <div class="panel-body">
            <img src="img/mia1.png" class="container-fluid">
            <p class="text-center">6.7' screen, snap-dragon processor, 4GB RAM, internal memmory of 64GB</p>
            <button class="order_button">Order Now</button>
          </div>

        </div>
        
      </div>
      <div class="col-md-4">

      <div class="panel panel-default">
          <div class="panel-heading">
            <p>Mobile 2</p>
          </div>
          <div class="panel-body">
            <img src="img/mimax2.png" class="container-fluid">
            <p class="text-center">6.9' screen, snap-dragon processor, 6GB RAM, internal memmory of 128GB</p>
            <button  type="button" class="order_button">Order Now</button>
          </div>

        </div>

      </div>
      <div class="col-md-4">

      <div class="panel panel-default">
          <div class="panel-heading">
            <p>Mobile 3</p>
          </div>
          <div class="panel-body">
            <img src="img/mimix2.png" class="container-fluid">
            <p class="text-center">6.5' screen, snap-dragon processor, 3GB RAM, internal memmory of 32GB</p>
            <button class="order_button">Order Now</button>
          </div>

        </div>

      </div>
    </div>
    <!----------------------------------------------- ROW 1 end ----------------------------------------------->

    <!----------------------------------------------- ROW 2 start ----------------------------------------------->
    <div class="row row_style">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <p>Mobile 4</p>
          </div>
          <div class="panel-body">
            <img src="img/op3.png" class="container-fluid">
            <p class="text-center">6.5' screen, snap-dragon processor, 2GB RAM, internal memmory of 16GB</p>
            <button class="order_button">Order Now</button>
          </div>

        </div>
        
      </div>
      <div class="col-md-4">

      <div class="panel panel-default">
          <div class="panel-heading">
            <p>Mobile 5</p>
          </div>
          <div class="panel-body">
            <img src="img/op3t.png" class="container-fluid">
            <p class="text-center">6.8' screen, snap-dragon processor, 8GB RAM, internal memmory of 128GB</p>
            <button class="order_button">Order Now</button>
          </div>

        </div>

      </div>
      <div class="col-md-4">

      <div class="panel panel-default">
          <div class="panel-heading">
            <p>Mobile 6</p>
          </div>
          <div class="panel-body">
            <img src="img/op5.png" class="container-fluid">
            <p class="text-center">6.4' screen, snap-dragon processor, 6GB RAM, internal memmory of 64GB</p>
            <button class="order_button">Order Now</button>
          </div>

        </div>

      </div>
    </div>
    <!----------------------------------------------- ROW 2 end ----------------------------------------------->
  </div>  
  <div class="footer">
      <div class="row">
        <div class="col-md-4 footer_col">
          <h4><b>Information</b></h4>
          <a href="about.php">About Us</a>
          <a href="contact.php">Conatct Us</a>
        </div>
        <div class="col-md-4 footer_col">
          <h4><b>My Account</b></h4>
          <a href="#">Login</a>
          <a href="signup.php">Signup</a>
        </div>
        <div class="col-md-4 footer_col">
          <h4><b>Contact Us</b></h4>
          <p>Conatct +91-123-00000</p>
        </div>
      </div>
    
</body>
</html>