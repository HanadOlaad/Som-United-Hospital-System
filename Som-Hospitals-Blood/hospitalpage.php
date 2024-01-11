<?php
session_start();
require 'file/connection.php';

$sqlBloodRequest = "SELECT COUNT(*) AS count FROM bloodrequest";
$resultBloodRequest = mysqli_query($conn, $sqlBloodRequest);

// Check if the query was successful
if (mysqli_num_rows($resultBloodRequest) > 0) {
  $rowBloodRequest = mysqli_fetch_assoc($resultBloodRequest);
  $countBloodRequest = $rowBloodRequest['count'];
}

$sqlBloodInfo = "SELECT COUNT(*) AS count FROM bloodinfo";
$resultBloodInfo = mysqli_query($conn, $sqlBloodInfo);

// Check if the query was successful
if (mysqli_num_rows($resultBloodInfo) > 0) {
  $rowBloodInfo = mysqli_fetch_assoc($resultBloodInfo);
  $countBloodInfo = $rowBloodInfo['count'];
}
$sqlreceivers = "SELECT COUNT(*) AS count FROM receivers";
$resultreceivers = mysqli_query($conn, $sqlreceivers);

// Check if the query was successful
if (mysqli_num_rows($resultreceivers) > 0) {
  $rowreceivers = mysqli_fetch_assoc($resultreceivers);
  $countreceivers = $rowreceivers['count'];
}

$sqlblooddonate = "SELECT COUNT(*) AS count FROM blooddonate";
$resultblooddonate = mysqli_query($conn, $sqlblooddonate);

// Check if the query was successful
if (mysqli_num_rows($resultblooddonate) > 0) {
  $rowblooddonate = mysqli_fetch_assoc($resultblooddonate);
  $countblooddonate = $rowblooddonate['count'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha384-pzjg6n6u+gxzNsYxldy5ixwFy4/dY1lX0LKr+0QpZ6o5+2Zl+qjehVIyJ8qaT5+H" crossorigin="anonymous">
  <title>Hospital/Clinic</title>
  <style>
   .sidebar {
      background-color: #f1f1f1;
      width: 200px;
      height: 100%;
      position: fixed;
      left: 0;
      top: 7px;
      overflow-x: hidden;
      padding-top: 20px;
      transition: width 0.3s;
    }

    .sidebar .hamburger-menu {
      display: block;
      margin: 0 auto;
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .sidebar .line {
      width: 30px;
      height: 3px;
      background-color: #888;
      margin: 6px 0;
    }

    .sidebar ul.nav-list {
      list-style-type: none;
      padding: 0;
      margin-top: 30px;
    }

    .sidebar ul.nav-list li {
      margin-bottom: 10px;
    }

    .sidebar ul.nav-list li a {
      display: flex;
      align-items: center;
      padding: 10px;
      text-decoration: none;
      color: #333;
      transition: background-color 0.3s;
    }

    .sidebar ul.nav-list li a:hover {
      background-color: #ddd;
    }

    .sidebar.open {
      width: 250px;
    }

    .container {
      margin-left: 200px;
      margin-top: 5px;
    }
    
    .sidebar .nav-link .btn {
      margin-right: 10px;
      

    }
    .nav-text {
  margin-left: 10px; 
}
.top-header {
  
      background-color: #f1f1f1;
      padding: 5px;
      text-align: center;
    }

  </style>
  <!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="top-header">
    <h2>Hospital/Clinic Dashboard</h2>
  </div>

  <nav>
    <div class="container">
      <!-- <h1 style="border:5px solid black; font-size: 35px; background-color:white;text-align: center; border-radius:5px; ">Hospital/Clinic Dashboard</h1> -->
    </div>
  </nav>

  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default" style="background-color: #f5f5f5; border: 1px solid #ddd;">
            <div class="panel-body bk-primary text-light" style="background-color: #007bff; color: #fff;">
              <div class="stat-panel text-center">
                <div class="stat-panel-number h1" style="color: #fff; font-size: 36px; font-weight: bold; text-align: center;">
                  <?php echo htmlentities($countBloodRequest);?>
                  <i class="fas fa-tint" style="font-size: 24px; margin-left: 5px;"></i>
                </div>
                <div class="stat-panel-title text-uppercase" style="color: #fff; font-size: 16px; text-align: center;">blood request</div>
              </div>
            </div>
            <a href="bloodrequest.php" class="block-anchor panel-footer" style="display: block; padding: 10px; text-align: center; color: #333; text-decoration: none; background-color: #f5f5f5; border-top: 1px solid #ddd;">
              Full Detail <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default" style="background-color: #f5f5f5; border: 1px solid #ddd;">
            <div class="panel-body bk-primary text-light" style="background-color: #007bff; color: #fff;">
              <div class="stat-panel text-center">
                <div class="stat-panel-number h1" style="color: #fff; font-size: 36px; font-weight: bold; text-align: center;">
                  <?php echo htmlentities($countBloodInfo);?>
                  <i class="fas fa-tint" style="font-size: 24px; margin-left: 5px;"></i>
                </div>
                <div class="stat-panel-title text-uppercase" style="color: #fff; font-size: 16px; text-align: center;">Stock blood </div>
              </div>
            </div>
            <a href="bloodinfo.php" class="block-anchor panel-footer" style="display: block; padding: 10px; text-align: center; color: #333; text-decoration: none; background-color: #f5f5f5; border-top: 1px solid #ddd;">
              Full Detail <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default" style="background-color: #f5f5f5; border: 1px solid #ddd;">
            <div class="panel-body bk-primary text-light" style="background-color: #007bff; color: #fff;">
              <div class="stat-panel text-center">
                <div class="stat-panel-number h1" style="color: #fff; font-size: 36px; font-weight: bold; text-align: center;">
                  <?php echo htmlentities($countreceivers);?>
                  <i class="fas fa-heartbeat" style="font-size: 24px; margin-left: 5px;"></i>
                </div>
                <div class="stat-panel-title text-uppercase" style="color: #fff; font-size: 16px; text-align: center;">Need blood </div>
              </div>
            </div>
            <a href="deleteit.php" class="block-anchor panel-footer" style="display: block; padding: 10px; text-align: center; color: #333; text-decoration: none; background-color: #f5f5f5; border-top: 1px solid #ddd;">
              Full Detail <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
          <div class="panel panel-default" style="background-color: #f5f5f5; border: 1px solid #ddd;">
            <div class="panel-body bk-primary text-light" style="background-color: #007bff; color: #fff;">
              <div class="stat-panel text-center">
                <div class="stat-panel-number h1" style="color: #fff; font-size: 36px; font-weight: bold; text-align: center;">
                  <?php echo htmlentities($countblooddonate);?>
                  <i class="fas fa-heartbeat" style="font-size: 24px; margin-left: 5px;"></i>
                </div>
                <div class="stat-panel-title text-uppercase" style="color: #fff; font-size: 16px; text-align: center;">Status blood Request </div>
              </div>
            </div>
            <a href="sentrequestd.php" class="block-anchor panel-footer" style="display: block; padding: 10px; text-align: center; color: #333; text-decoration: none; background-color: #f5f5f5; border-top: 1px solid #ddd;">
              Full Detail <i class="fa fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="sidebar">
    <ul class="nav-list">
      <li class="nav-item">
        <a href="hprofile.php" class="nav-link">
          <i class="fas fa-user"></i> <span class="nav-text">My Account</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="bloodinfo.php" class="nav-link">
          <i class="fas fa-tint"></i> <span class="nav-text">Stock of Blood</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="bloodrequest.php" class="nav-link">
          <i class="fas fa-hand-holding-medical"></i> <span class="nav-text">Blood Requests</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="deleteit.php" class="nav-link">
          <i class="fas fa-hand-holding-heart"></i> <span class="nav-text">Need Blood</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="sentrequestd.php" class="nav-link">
          <i class="fas fa-clipboard-check"></i> <span class="nav-text">Status of Your Blood Request</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="logout.php"class="nav-link">
          <i class="fas fa-sign-out-alt"></i> <span class="nav-text">Logout</span>
        </a>
      </li>
    </ul>
  </div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-/lC+0LX5LxgG+dsFbFs5W2Ua1j0Xe7yJ0aUwGg2l2CSX+XPlJtQY6h3Iz+eKp5dS" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha384-+Xni8+FIh8IQcO+O7E9mQgNnJR2e6OdXHckJ7GkKU8f0qgq2w9pUaGJq2SrKkjvR" crossorigin="anonymous"></script>
</body>
</html>