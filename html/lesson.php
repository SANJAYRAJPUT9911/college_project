<?php
include("./adminheader.php");


$db_host_course = "localhost";
$db_username_course = "root";
$db_password_course = "";
$db_dbname_course = "addcourse";

$con = new mysqli($db_host_course, $db_username_course, $db_password_course, $db_dbname_course);

?>

<div class="container-fluid">
    <form action="">

        <div class="my-5">
            <label for="">Enter Course-Id :</label>
            <input type="text" name="s_cid">
            <button name="s_search" class="btn btn-danger">
                search
            </button>
        </div>
    </form>
</div>



<?php

if (isset($_REQUEST['s_search'])) {


    $sql_course = "SELECT * FROM `coursedetail` WHERE `course_id`={$_REQUEST['s_cid']}";
    $result_course = $con->query($sql_course);
    $row_course = $result_course->fetch_assoc();




    $sql_lesson = "SELECT * FROM `addlesson`";
    $result_lesson = $con->query($sql_lesson);
    $row_lesson = $result_lesson->fetch_assoc();

    if(isset($row_lesson['lesson_id'])){

    }

    












    if (isset($row_course['course_id'])) {

        echo '<div class="dashorder my-5">
       Course ID : ' . $row_course['course_id'] . ' Course Name : ' . $row_course['course_name'] . '
        </div>

        <form action="./addlesson.php">
        <input type="hidden" name="cid" value='.$row_course['course_id'].'>
        <button name="addlesson" class="adlesson" style="position:relative; left:100vh; "
        > <i class="fa-solid fa-plus"></i>
        </button>
    </form>
    
       ';
    } else {
        echo "<small style=background-color:#e78072;'>course id didnt exist</small>";
    }
}

?>
<!-- add course icon -->










<?php
include("./adminfooter.php");
?>