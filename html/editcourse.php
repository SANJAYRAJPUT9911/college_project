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
    <div class="mb-3">
      <label for="" class="form-label">Course Name</label>
      <input type="text" name="" class="form-control" id="coursename" value="<?php if (isset($row['course_name'])) {
                                                                                echo $row['course_name'];
                                                                              } ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Course Discription</label>
      <textarea class="form-control" name="coursedisc" id=""><?php if (isset($row['course_discription'])) {
                                                                                          echo $row['course_discription'];
                                                                                        } ?></textarea>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Author</label>
      <input type="text" name="author" class="form-control" id="" value="<?php if (isset($row['course_author'])) {
                                                                            echo $row['course_author'];
                                                                          } ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Duration</label>
      <input type="text" name="courseduration" class="form-control" id="" value="<?php if (isset($row['course_duration'])) {
                                                                                    echo $row['course_duration'];
                                                                                  } ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Original Price</label>
      <input type="text" name="courseoriginalprice" class="form-control" id="" value="<?php if (isset($row['course_original_price'])) {
                                                                                            echo $row['course_original_price'];
                                                                                          } ?>">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Selling Price</label>
      <input type="text" name="coursesellingprice" class="form-control" id="" value="<?php if (isset($row['course_selling_price'])) {
                                                                                          echo $row['course_selling_price'];
                                                                                        } ?>">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Course Image</label>
      <input type="file" name="courseimage" class="form-control " id="" >
    </div>




    <button id="submitbtncourse" class="btn btn-secondary" name="submitbtncourse">submit</button>

    <!-- <a href="" id="submitbtncours" name="submitbtncourse" class="btn btn-secondary">SUBMIT</a> -->
    <a href="./admincourse.php" class="btn btn-danger">CLOSE</a>



</div>

<?php
include("./adminfooter.php");
?>