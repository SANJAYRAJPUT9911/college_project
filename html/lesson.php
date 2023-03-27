<?php
include("./adminheader.php");


$db_host_course = "localhost";
$db_username_course = "root";
$db_password_course = "";
$db_dbname_course = "addcourse";

$con = new mysqli($db_host_course, $db_username_course, $db_password_course, $db_dbname_course);

?>

<!-- search course id html code start -->

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

<!-- search course id php code start -->

<?php

if (isset($_REQUEST['s_search'])) {


    $sql_course = "SELECT * FROM `coursedetail` WHERE `course_id`={$_REQUEST['s_cid']}";
    $result_course = $con->query($sql_course);
    $row_course = $result_course->fetch_assoc();



    

    if (isset($row_course['course_id'])) {

        echo '<div class="dashorder my-5">
       Course ID : ' . $row_course['course_id'] . ' Course Name : ' . $row_course['course_name'] . '
        </div>




        <form action="./addlesson.php">
        <input type="hidden" name="cid" value='.$row_course['course_id'].'>
        <label for=""><b>Click Here To Add Lessons To The Table</b> </label>
        <button name="addlesson" class="adlesson btn btn-primary" style="position:relative; left:0vh; "
        > <i class="fa-solid fa-plus"></i>
        </button>
    </form><br>';

    $sql_lesson = "SELECT * FROM `addlesson`  WHERE `course_id`={$_REQUEST['s_cid']} ";
    $result_lesson = $con->query($sql_lesson);

    echo'<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Lesson Id</th>
            <th>Lesson Name</th>
            <th>Lesson Description</th>
            <th>Lesson Link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>';

    
while($rows=$result_lesson->fetch_assoc())

{
//    code for showing the table with table data
echo'
    <tr>
        <td>'.$rows["lesson_id"].'</td>
        <td>'.$rows["lesson_name"].'</td>  
        <td>'.$rows["lesson_desc"].'</td>
        <td>'.$rows["lesson_link"].'</td>

        <td>
        
        <form action="./editlesson.php" class="d-inline" method="post">
        <input type="hidden" name="lid" value='.$rows['lesson_id'].'>
        <input type="hidden" name="scid" value='.$_REQUEST['s_cid'].'>


        <button class="btn btn-success" name="editlesson">
        <i class="fa-solid fa-pen-to-square"> </i>
        </button>
        </form>
      
        
        &nbsp;&nbsp;&nbsp;&nbsp;

        <form action="" class="d-inline" method="post">
        <input type="hidden" name="id" value='.$rows['lesson_id'].'>
        <button name="lessondelete" class="btn btn-danger">
        <i class="fa-solid fa-trash-can"></i>
        </button>
        </form>
      
        
        </td>
    </tr>';

}
    

    } else {
        echo "<small style=background-color:#e78072;'>course id didnt exist</small>";
    }
}


if(isset($_REQUEST['lessondelete'])){

$sql="DELETE FROM `addlesson` WHERE `lesson_id`={$_REQUEST['id']} && `course_id`={$_REQUEST['s_cid']}";
if($con->query($sql)==true){
    echo '<meta http-equiv="refresh" content="0">';
}else{
    echo'unable to delete data';

}

}

?>
<!-- add course icon -->










<?php
include("./adminfooter.php");
?>