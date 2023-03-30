<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My profile</title>
  <!-- custome css -->
  <link rel="stylesheet" href="../css/admin.css">

  <link rel="stylesheet" href="../css/adminawefotnt.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

  <!-- LINK DATATABLES CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  
</head>

<body>

  <!-- NAV BAR -->
  <div class="container adminnav ">

    <div class="d-flex">
      <a class="home decnone" href="../index.php">
        <h1 class="fontport anime">Buzz!t</h1>
      </a>
      <small class="relate">My Profile</small>
    </div>
  </div>

  <div class="container ">
    <div class="row my-5">

    <?php 
      if(isset($_SESSION['is_login'])){
       echo 
       
       '
      <div class="col-sm-3 ">
        <nav class="sidebar-sticky ">
          <ul class="nav my-5 ">
            <li class="nav-item ">
              <a class="decnone" href=""><i class="fa-solid fa-gauge"></i>My Profile</a><br><br><br>
              <a class="decnone" href=""><i class="fa-solid fa-bars"></i> My Courses</a><br><br><br>
              <a class="decnone" href=""><i class="fa-solid fa-person-chalkboard"></i> Feedback</a><br><br><br>
              <a class="decnone" href=""><i class="fa-solid fa-school"></i> Change Password</a><br><br><br>
              <a class="decnone" href="" id="mylgbtn"><i class="fa-solid fa-right-from-bracket"></i>
                Logout</a><br><br><br>
            </li>
          </ul>
        </nav>

      </div>

      <div class="col-sm-9 ">




       
        ';


              }

?>








<!-- font awesone js -->
<script src="../js/adminawesfont.js"></script>

<script src="../js/adminjquery.js"></script>
<script src="../js/adminlgbtn.js"></script>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<!-- link datatables js query  -->

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>





<script>
$(document).ready(()=>{
    $("#table_id").dataTable();
})
</script>

</body>

</html>