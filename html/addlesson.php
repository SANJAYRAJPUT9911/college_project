<?php
include("./adminheader.php");

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "addcourse";

$conn = new mysqli($db_host, $db_username, $db_password, $db_dbname);

?>

<?php
if (isset($_REQUEST['addlesson'])) {

    $sql = "SELECT * FROM `coursedetail` WHERE `course_id`={$_REQUEST['cid']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<div class="cform">
    <div class="text-center my-3">Add Lesson</div>
    <form class=" " method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">Course ID</label>
            <input type="text" disabled name="coursename" class="form-control" id="coursename" value=" <?php if (isset($row['course_id'])) {
                                                                                                            echo $row['course_id'];
                                                                                                        } ?>">


        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Course Name</label>
            <input type="text" name="author" disabled class="form-control" id="" value=" <?php if (isset($row['course_name'])) {
                                                                                                echo $row['course_name'];
                                                                                            } ?>">

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lesson Name</label>
            <input type="text" name="lessonname" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Lesson Description</label>
            <textarea class="form-control" name="lessondesc" id=""></textarea>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Lesson Video Link</label>
            <input type="file" name="videolink" class="form-control " id="">
        </div>

        <button id="submitbtncourse" class="btn btn-secondary" name="submitlessons">submit</button>

        <a href="./lesson.php" class="btn btn-danger">CLOSE</a>
    </form>
    <?php

    if (isset($_REQUEST['submitlessons'])) {

        if (($_REQUEST['lessonname'] == "") || ($_REQUEST['lessondesc'] == "")) {

            echo "please fill all the details properly";
        } else {

            $lessonname = $_REQUEST['lessonname'];
            $lessondesc = $_REQUEST['lessondesc'];
            $coursename = $row['course_name'];
            $courseid = $row['course_id'];
            $originalname = $_FILES['videolink']['name'];
            $videolink = "../videos/$originalname";
            $tmpimage = $_FILES['videolink']['tmp_name'];
            move_uploaded_file($tmpimage, "../videos/" . $originalname);


            // inserting data into the mysql

            $sql = "INSERT INTO `addlesson`(`lesson_name`,`lesson_desc`,`lesson_link`,`course_id`,`course_name`) VALUES ('$lessonname','$lessondesc','$videolink','$courseid','$coursename')";

            if ($conn->query($sql) == true) {

                echo "<small style=background-color:#b0e9b0;'>details saved sucessfully</small>";
            } else {

                echo "<small style=background-color:#e78072;'>something went wrong</small>";
            }
        }
    }
    ?>



</div>


</form>
<?php
include("./adminfooter.php");
?>