<?php
include("./adminheader.php");

$db_host_course = "localhost";
$db_username_course = "root";
$db_password_course = "";
$db_dbname_course = "addcourse";

$conn = new mysqli($db_host_course, $db_username_course, $db_password_course, $db_dbname_course);


?>

<?php
if (isset($_REQUEST['editlesson'])) {

    $sql = "SELECT * FROM `addlesson` WHERE `lesson_id`={$_REQUEST['lid']} && `course_id`={$_REQUEST['scid']} ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>



<div class="cform">
    <div class="text-center my-3">Edit existing Lesson</div>
    <form class=" " method="POST" enctype="multipart/form-data">
        <div class="mb-3" style="display:none" ;>
            <label for="" class="form-label">Course id</label>
            <input type="text" name="stuid" class="form-control" id="editname" value="<?php if (isset($row['lesson_id'])) {
                                                                                            echo $row['lesson_id'];
                                                                                        } ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lesson Name</label>
            <input type="text" name="stuname" class="form-control" id="editname" value="<?php if (isset($row['lesson_name'])) {
                                                                                            echo $row['lesson_name'];
                                                                                        } ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lesson Description</label>
            <input type="text" name="stumail" class="form-control" id="stumail" value="<?php if (isset($row['lesson_desc'])) {
                                                                                            echo $row['lesson_desc'];
                                                                                        } ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lesson Link</label>
            <input type="file" name="stupass" class="form-control" id="stumail">
        </div>


        <button id="lessonsubmit" class="btn btn-secondary" name="lessonsubmit">submit</button>

        <!-- <a href="" id="submitbtncours" name="submitbtncourse" class="btn btn-secondary">SUBMIT</a> -->
        <a href="./lesson.php" class="btn btn-danger">CLOSE</a>
    </form>

    <!-- code for inserting edited data into mysql -->
    <?php

    // code for checking no field is emtply
    if (isset($_REQUEST['lessonsubmit'])) {

        if (($_REQUEST['stuname'] == "") || ($_REQUEST['stumail'] == "")) {

            echo "please fill all the details properly";
        } else {

            $id = $_REQUEST['stuid'];
            // $scid=$_REQUEST['scid'];

            $coursename = $_REQUEST['stuname'];
            $coursedisc = $_REQUEST['stumail'];



            $sql = "UPDATE `addlesson` SET `lesson_name`='$coursename',`lesson_desc`='$coursedisc' WHERE `lesson_id`='$id'";

            if ($conn->query($sql) == true) {

                echo "<small style=background-color:#b0e9b0;'>details saved sucessfully</small>";
            } else {

                echo "<small style=background-color:#e78072;'>something went wrong</small>";
            }
        }
    }

    ?>


</div>

<?php
include("./adminfooter.php");
?>