<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <!-- custome css -->
  <link rel="stylesheet" href="../css/admin.css">

  <link rel="stylesheet" href="../css/adminawefotnt.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

  <!-- NAV BAR -->
  <div class="container adminnav ">

    <div class="d-flex">
      <a class="home decnone" href="./index.php">
        <h1 class="fontport anime">Buzz!t</h1>
      </a>
      <small class="relate">Admin Area</small>
    </div>
  </div>

  <div class="container ">
    <div class="row my-5">


<?php 
              if (isset($_SESSION["admin_login"])) {

                echo ' <div class="col-sm-3  m-3 px-5 ">
                <nav class="sidebar-sticky">
                  <ul class="nav my-5 ">
                    <li class="nav-item ">
                      <a class="decnone" href="./dashboard.php"><i class="fa-solid fa-gauge"></i> Dashboard</a><br><br><br>
                      <a class="decnone" href="./admincourse.php"><i class="fa-solid fa-bars"></i> Courses</a><br><br><br>
                      <a class="decnone" href=""><i class="fa-solid fa-person-chalkboard"></i> Lessons</a><br><br><br>
                      <a class="decnone" href=""><i class="fa-solid fa-school"></i> Students</a><br><br><br>
                      <a class="decnone" href=""><i class="fa-solid fa-chart-simple"></i> Sell Report</a><br><br><br>
                      <a class="decnone" href=""><i class="fa-brands fa-paypal"></i> Payment Status</a><br><br><br>
                      <a class="decnone" href=""><i class="fa-solid fa-comment"></i> Feedback</a><br><br><br>
                      <a class="decnone" href="./adminpassword.php"><i class="fa-solid fa-key"></i> Change Password</a><br><br><br>
                      <a class="decnone" href="" id="lgbtnn"><i class="fa-solid fa-right-from-bracket"></i> Logout</a><br><br><br>
                    </li>
                  </ul>
                </nav>
        
        
        
        
        
              </div>
        ';


              }

?>



<div class="col-sm-8">
  <nav>
    <ul class="nav my-5">
      <li class="nav-item">
        <?php

        if (isset($_SESSION["admin_login"])) {
          echo "<h1>you are loged in </h1>";
        } else {
          echo "<h1>you are logout  </h1>";
        }

        ?> </li>
    </ul>
  </nav>
</div>



<!-- font awesone js -->
<script src="../js/adminawesfont.js"></script>

<script src="../js/adminjquery.js"></script>
<script src="../js/adminlgbtn.js"></script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>