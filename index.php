<!-- SESSION START IN PHP -->
<?php 
if(! isset ($_SESSION)){

  session_start();

}

?>

<!-- start including header using php -->
<?php
// include 'html/header.php';
?>
<!-- end including header using php -->
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <link rel="shortcut icon" href="images/wolf.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buzz!t</title>

  <!--bootstrep css file  -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!--style file manual  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- fontawesome css file  -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- footer css -->
  <link rel="stylesheet" href="css/footer.css">

  <!-- carousel css -->
  <link rel="stylesheet" href="css/caraousel.css">


</head>

<body onscroll="hidenav()">

  <!-- start navbar -->
  <nav class="navbar navbar-expand-sm bg fixed-top  " id="shownavbar">
    <div class="container-fluid">
      <a class="navbar-brand mx-5" href="index.php"><i class="fa-brands fa-wolf-pack-battalion"></i>Buzz!t</a>
      <span class="nav-item  port" style="color:white;">Th!nk out of the box</span>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav" style="color: white !important;">
        <ul class="navbar-nav mx-5">
          <li class="nav-item">
            <a class="nav-link white" href="index.php" id="home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link white" href="html/courses.php">Courses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link white" href="./html/payment.php">Payment Status</a>
          </li>
          <?php

          if ( isset( $_SESSION['is_login'])) {
            echo '  <li class="nav-item">
            <a class="nav-link white" href="#">My Profile</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link white " id="logoutbtn" href="#">Logout</a>
          </li>';
          }

          ?>
        

          <?php

          if (!isset($_SESSION['is_login'])) {
            echo '
            <li class="nav-item">
              <a class="nav-link white" href="#"  data-bs-toggle="modal" data-bs-target="#login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link white"  href="#" data-bs-toggle="modal" data-bs-target="#signup">Signup</a>
            </li>
  ';
          }

          ?>
          <li class="nav-item">
            <a class="nav-link white" href="#">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link port white" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- background video start -->
  <div class="container-fluid remove-marginpadding">
    <div class="vidparent">
      <video autoplay muted loop>
        <source src="videos/letters.mp4">
      </video>
      <div class="vid-overlay"></div>
      <!-- welcom text  -->
      <div class="welcomehead">
        <h1 class="fontubuntu">Welcome To Buzz!t</h1>
        <span class="fontubuntu">Think out of the box</span><br>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Login</a>
        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signup">Signup</a>
      </div>
    </div>
  </div>
  <!-- red tag div start  -->
  <div class="container-fluid reddiv d-flex justify-content-between" id="tagdiv">
    <div class="course">

      <h5 class="font10"><i class="fa-solid fa-gamepad"></i> 100+ Online Games</h5>
    </div>
    <div class="course">
      <h5 class="font10"><i class="fa-regular fa-keyboard"></i> Lifetime access</h5>
    </div>
    <div class="course">
      <h5 class="font10"><i class="fa-solid fa-users-line"></i> Expert Instructor</h5>
    </div>
    <div class="course">
      <h5 class="font10"><i class="fa-solid fa-indian-rupee-sign"></i> Money back guarantee</h5>
    </div>
  </div>
  <!-- card course start -->
  <div class="d-flex justify-content-center m-5">
    <h2 class="popularcourse ">popular-course</h2>
  </div>

  <div class="# my-3">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-4 g-4">
        <div class="col">
          <div class="card">
            <img src="images/hacking.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hacking</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>

              <div class="card-footer d-flex justify-content-between pt-3">
                <span class="pricetag">$ 400/-</span>
                <a href="#" class="btn btn-primary enrolbtn">Enroll</a>
              </div>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="images/php.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PHP</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>

              <div class="card-footer d-flex justify-content-between pt-3">
                <span class="pricetag">$ 400/-</span>
                <a href="#" class="btn btn-primary enrolbtn">Enroll</a>
              </div>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="images/css.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">CSS</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>

              <div class="card-footer d-flex justify-content-between pt-3">
                <span class="pricetag">$ 400/-</span>
                <a href="#" class="btn btn-primary enrolbtn">Enroll</a>
              </div>

            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="images/ed.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Web Design</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>

              <div class="card-footer d-flex justify-content-between pt-3">
                <span class="pricetag">$ 400/-</span>
                <a href="#" class="btn btn-primary enrolbtn">Enroll</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- view all course button start -->
  <div class="d-flex justify-content-center  m-5">
    <a href="#" class="btn btn-outline-danger enrolbtn">view all course</a>
  </div>
  <!-- contact us text -->
  <div class="d-flex justify-content-center  m-5">
    <h2 class="popularcourse ">Contact Us</h2>
  </div>
  <!-- contact us form start -->
  <?php

  include('./html/form.php');

  ?>
  <!-- contact us form end -->

  <!-- feedback div start -->
  <div class=" feedbackdiv ">
    <div class="d-flex justify-content-center ">
      <h2 class="feedbacktext my-4">Feedback</h2>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide container" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item item active">
          <div class="img-box"><img src="images/dev.jpeg" class="d-block w-100" alt=""></div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Dev Rajput</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio alias ipsum veritatis nostrum dolor quos
              eveniet eum, distinctio nesciunt illo.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt cum ab voluptate quia autem minima
              aspernatur iste illum cupiditate unde?
            </p>
          </div>
        </div>
        <div class="carousel-item item">
          <div class="img-box"><img src="images/lalit.jpeg" class="d-block w-100" alt=""></div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Lalit Adlakha</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum iste reprehenderit. Et cum nesciunt
              vero tempore repellat minus, eos fugiat magnam aliquid illum, modi impedit sunt assumenda quae dolores.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, soluta.
            </p>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- feedback div end -->

  <!-- reddiv -->
  <div class="container-fluid reddiv d-flex justify-content-between" id="tagdiv">
    <div class="course">

      <h5 class="font10"><i class="fa-solid fa-gamepad"></i> 100+ Online Games</h5>
    </div>
    <div class="course">
      <h5 class="font10"><i class="fa-regular fa-keyboard"></i> Lifetime access</h5>
    </div>
    <div class="course">
      <h5 class="font10"><i class="fa-solid fa-users-line"></i> Expert Instructor</h5>
    </div>
    <div class="course">
      <h5 class="font10"><i class="fa-solid fa-indian-rupee-sign"></i> Money back guarantee</h5>
    </div>
  </div>

  <!-- foooooooooooooooooooooooooooooooooooter start-->
  <div class="footer-dark">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Services</h3>
            <ul>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Development</a></li>
              <li><a href="#">Hosting</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <li><a href="#">Company</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3>Buzz!t</h3>
            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus
              elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
          </div>
          <div class=" item social">
            <a target="_blank" href="https://www.facebook.com/sanjay.rajput.7549185"> <i class="fa-brands fa-facebook"></i></a>
            <a target="_blank" href="https://twitter.com/_sanjay_rajput_?t=aSBPYxX7p6K2mbmxrVAtVw&s=09"><i class="fa-brands fa-twitter"></i></a>
            <a target="_blank" href="https://t.snapchat.com/edyf5FDU"><i class="fa-brands fa-square-snapchat"></i></a>
            <a target="_blank" href="https://www.instagram.com/_sanju_r_"><i class="fa-brands fa-square-instagram"></i></a>
          </div>
        </div>
        <p class="copyright">Buzz!t © 2023 | Designed By Sanjay <a href="#" data-bs-toggle="modal" data-bs-target="#login">Admin login</a></p>
      </div>
    </footer>
  </div>
  <!-- foooooooooooooooooooooooooooooooooooter end-->

  <!-- Modal start -->
  <?php
  include 'html/popupform.php'
  ?>
  <!-- modal end -->





  <!-- jquery file -->
  <script src="js/jquery.min.js"></script>
  <!-- bootsrep js  file -->
  <script src="js/proper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- fontawesome jsfile  -->
  <script src="js/all.min.js"></script>
  <!-- external manual js file -->
  <script src="js/external.js"></script>

  <!-- link ajax file -->
  <script src="./js/ajax.js"></script>







</body>

</html>

<?php
// include 'html/footer.php';
// include('./html/footer.php');
?>

<!-- Button trigger modal -->
