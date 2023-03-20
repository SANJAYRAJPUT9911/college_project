<?php
include("./adminheader.php");
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "addcourse";

$conn = new mysqli($db_host, $db_username, $db_password, $db_dbname);


?>

<?php
if (isset($_REQUEST['edit'])) {

  $sql = "SELECT * FROM `coursedetail` WHERE `course_id`={$_REQUEST['edit_id']}";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}
?>



<div class="cform">
  <div class="text-center my-3">Edit existing course</div>
  <form class=" " method="POST" enctype="multipart/form-data">
    <div class="mb-3" style="display:none" ;>
      <label for="" class="form-label">Course id</label>
      <input type="text" name="editid" class="form-control" id="editname" value="<?php if (isset($row['course_id'])) {
                                                                                    echo $row['course_id'];
                                                                                  } ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Name</label>
      <input type="text" name="editname" class="form-control" id="editname" value="<?php if (isset($row['course_name'])) {
                                                                                      echo $row['course_name'];
                                                                                    } ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Course Discription</label>
      <textarea class="form-control" name="editdisc" id=""><?php if (isset($row['course_discription'])) {
                                                              echo $row['course_discription'];
                                                            } ?></textarea>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Author</label>
      <input type="text" name="editauthor" class="form-control" id="" value="<?php if (isset($row['course_author'])) {
                                                                                echo $row['course_author'];
                                                                              } ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Duration</label>
      <input type="text" name="editcourseduration" class="form-control" id="" value="<?php if (isset($row['course_duration'])) {
                                                                                        echo $row['course_duration'];
                                                                                      } ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Original Price</label>
      <input type="text" name="editcourseoriginalprice" class="form-control" id="" value="<?php if (isset($row['course_original_price'])) {
                                                                                            echo $row['course_original_price'];
                                                                                          } ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Selling Price</label>
      <input type="text" name="editcoursesellingprice" class="form-control" id="" value="<?php if (isset($row['course_selling_price'])) {
                                                                                            echo $row['course_selling_price'];
                                                                                          } ?>">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Course Image</label>
      <input type="file" name="editcourseimage" class="form-control " id="">
    </div>

    <button id="submitbtncourse" class="btn btn-secondary" name="submiteditbtn">submit</button>

    <!-- <a href="" id="submitbtncours" name="submitbtncourse" class="btn btn-secondary">SUBMIT</a> -->
    <a href="./admincourse.php" class="btn btn-danger">CLOSE</a>
  </form>

  <!-- code for inserting edited data into mysql -->
  <?php

  // code for checking no field is emtply
  if (isset($_REQUEST['submiteditbtn'])) {

    if (($_REQUEST['editname'] == "") || ($_REQUEST['editdisc'] == "") || ($_REQUEST['editauthor'] == "") || ($_REQUEST['editcourseduration'] == "") || ($_REQUEST['editcourseoriginalprice'] == "") || ($_REQUEST['editcoursesellingprice'] == "") || $_FILES['editcourseimage'] == null) {

      $msg = "please fill all the details properly";
    } else {

      $id = $_REQUEST['editid'];
      $coursename = $_REQUEST['editname'];
      $coursedisc = $_REQUEST['editdisc'];
      $author = $_REQUEST['editauthor'];
      $courseduration = $_REQUEST['editcourseduration'];
      $courseoriginalprice = $_REQUEST['editcourseoriginalprice'];
      $coursesellingprice = $_REQUEST['editcoursesellingprice'];
      $input_image = $_FILES['editcourseimage'];
      $originalname = $_FILES['editcourseimage']['name'];
      $tmpimage = $_FILES['editcourseimage']['tmp_name'];
      // move_uploaded_file($tmpimage,"../images/".$originalname);





      //  for compressing file upto 50% of its size

      $created_image = imagecreatefromjpeg($tmpimage);

      if (isset($created_image)) {

        imagejpeg($created_image, "../images/" . $originalname, 50);
      }


      $sql = "UPDATE `coursedetail` SET `course_name`='$coursename',`course_discription`='$coursedisc',`course_author`='$author',`course_duration`='$courseduration',`course_original_price`='$courseoriginalprice',`course_selling_price`='$coursesellingprice',`course_image`='../images/$originalname'  WHERE `course_id`='$id'";

      if ($conn->query($sql) == true) {

        $msg = "<small style=background-color:#b0e9b0;'>details saved sucessfully</small>";
      } else {

        $msg = "<small style=background-color:#e78072;'>something went wrong</small>";
      }
    }
  }
  ?>


</div>

<?php
include("./adminfooter.php");
?>