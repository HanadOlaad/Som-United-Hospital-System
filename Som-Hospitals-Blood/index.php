<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Som United Hospitals | home page"; ?>
<?php require 'head.php'; ?>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Som United Hospitals</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="index.php?#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?#contact">Contact</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item active">

        <a class="nav-link" href="register.php">Register<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/madina.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/kalkal.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/somali sudanes.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5" id="about">
  <div class="py-3">
    <h2 class="text-center">About Us</h2>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="image/about1.png" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
      <h2>BLOOD - "I'm your lifesaver, ready to rescue you!""</h2>
      <p class="py-3">At our core, we believe that every life is invaluable. Time is a precious resource that we cannot afford to waste. Our mission is to expedite the availability of blood and save lives swiftly. By prioritizing efficiency, we aim to minimize the time it takes to provide essential blood supplies. Our unwavering commitment centers around the belief that quick access to blood can make a significant impact, ensuring timely assistance for those in need.</p>
      </div>
    </div>
  </div>
</section>


<section class="my-5" id="contact">
  <div class="py-3">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div>
  <p class="text-center bg-dark text-white">Som United Hospitals  : +252 613450267 <br> Mail : <a style="text-decoration:none;color:white;" href="mailto:SomUnitedHospitalsg@gmail.com" >SomUnitedHospitals@gmail.com</a>
  </div>
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php require 'footer.php'; ?>
</body>
</html>