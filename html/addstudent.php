<?php
include("./adminheader.php");
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "signupform";

$conn = new mysqli($db_host, $db_username, $db_password, $db_dbname);


?>

<?php
// if (isset($_REQUEST['student'])) {

//     $sql = "SELECT * FROM `signupdetails` WHERE `userid`={$_REQUEST['studentid']}";
//     $result = $conn->query($sql);
//     $row = $result->fetch_assoc();
// }
?>



<div class="cform">
    <div class="text-center my-3">Edit existing course</div>
    <form class=" " method="POST" enctype="multipart/form-data">
        <div class="mb-3" style="display:none" ;>
            <label for="" class="form-label">Course id</label>
            <input type="text" name="stuid" class="form-control" id="editname" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" name="stuname" class="form-control" id="editname" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="text" name="stumail" class="form-control" id="editmail" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="text" name="stupass" class="form-control" id="editmail" value="">
        </div>


        <button id="submitbtncourse" class="btn btn-secondary" name="stusubmit">submit</button>

        <!-- <a href="" id="submitbtncours" name="submitbtncourse" class="btn btn-secondary">SUBMIT</a> -->
        <a href="./student.php" class="btn btn-danger">CLOSE</a>
    </form>

    <!-- code for inserting edited data into mysql -->
    <?php

    // code for checking no field is emtply
    if (isset($_REQUEST['stusubmit']))
     {

        if (($_REQUEST['stuname'] == "") || ($_REQUEST['stumail'] == "") || ($_REQUEST['stupass'] == "")) 
        {

            echo  "<small style=background-color:#e78072;'>please fill all the details</small>";
        } 
        else
         {

            $coursename = $_REQUEST['stuname'];
            $coursedisc = $_REQUEST['stumail'];
            $coursepass = $_REQUEST['stupass'];

         }


            $sql = "INSERT INTO  `signupdetails`(`name`,`useremail`,`userpassword`) VALUES ('$coursename','$coursedisc' ,'$coursepass')";

            if ($conn->query($sql) == true) {

                echo "<small style=background-color:#b0e9b0;'>details saved sucessfully</small>";
            } else {

                echo "<small style=background-color:#e78072;'>something went wrong</small>";
            }
        }
    
    ?>


</div>

<?php
include("./adminfooter.php");
?>