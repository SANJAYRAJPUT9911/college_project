<?php
include("./adminheader.php");

$db_host="localhost";
$db_username="root";
$db_password="";
$db_dbname="addcourse";

$conn= new mysqli($db_host,$db_username,$db_password,$db_dbname);


// if(isset($_REQUEST['submitbtncourse'])){

//   if(($_REQUEST['coursename']=="")){
    
//   }
//   $course_name=$_REQUEST['coursename'];

//   $sql="INSERT INTO coursedetail (course_name) VALUES `$course_name`";
//   if( $conn->query($sql) == TRUE){
//     echo "success";
//   }
//   else{
//     echo "error occure";
//   }

// }

?>

<div class="cform">
<div class="text-center my-3">Add New Course</div>
  <form class=" "  method="POST" enctype="">
    <div class="mb-3">
      <label for="" class="form-label">Course Name</label>
      <input type="text" name="coursename"  class="form-control" id="coursename">
      
      <?php
      
      if(isset($_REQUEST['submitbtncourse'])){

        if(($_REQUEST['coursename']=="")||($_REQUEST['coursedisc']=="")||($_REQUEST['author']=="")||($_REQUEST['courseduration']=="")||($_REQUEST['courseoriginalprice']=="")||($_REQUEST['coursesellingprice']=="")){

         $msg="please fill all the details properly";
          
        }else{

          $coursename=$_REQUEST['coursename'];
          $coursedisc=$_REQUEST['coursedisc'];
          $author=$_REQUEST['author'];
          $courseduration=$_REQUEST['courseduration'];
          $courseoriginalprice=$_REQUEST['courseoriginalprice'];
          $coursesellingprice=$_REQUEST['coursesellingprice'];



          $sql= "INSERT INTO `coursedetail`(`course_name`,`course_discription`,`course_author`,`course_duration`,`course_original_price`,`course_selling_price`) VALUES ('$coursename','$coursedisc','$author','$courseduration','$courseoriginalprice','$coursesellingprice')";   
          $conn->query($sql);
          
          echo $coursename;
          $msg="details saved successfully";
        }
      
      }
      ?>

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Course Discription</label>
      <textarea class="form-control" name="coursedisc"  id=""></textarea>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">Author</label>
      <input type="text" name="author" class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Duration</label>
      <input type="number" name="courseduration"  class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Original Price</label>
      <input type="number" name="courseoriginalprice" class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Selling Price</label>
      <input type="number" name="coursesellingprice" class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Image</label>
      <input type="file"  class="form-control " id="">
    </div>
    
<button id="submitbtncourse" class="btn btn-secondary" name="submitbtncourse" >submit</button>

    <!-- <a href="" id="submitbtncours" name="submitbtncourse" class="btn btn-secondary">SUBMIT</a> -->
    <a href="./admincourse.php" class="btn btn-danger">CLOSE</a>
    <?php

if(isset($msg)){
  echo $msg;
}

?>


</div>


</form>
<?php
include("./adminfooter.php");
?>