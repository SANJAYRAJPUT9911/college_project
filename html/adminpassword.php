<?php
include('./adminheader.php');
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "admin";

$conn = new mysqli($db_host, $db_username, $db_password, $db_dbname);
?>

<div class="dashorder my-5">
    change current password
</div>

<div class="col-sm-6">

    <form action="" method="post">

        <div class="mb-3 ">
            <label for="" class="form-label">current password</label>
            <input type="text" name="cpass" class="form-control" id="cpass">
          
        </div>

        <div class="mb-3">
            <label for="" class="form-label">new password</label>
            <input type="password" name="npass" class="form-control" id="npass">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Renter new password</label>
            <input type="password" name="enpass" class="form-control" id="enpass">
        </div>
        <button id="submitbtncourse" class="btn btn-success" name="submitnpass">submit</button>

        <a href="./adminpage.php" class="btn btn-danger">CLOSE</a>

        <?php
        if (isset($_REQUEST['submitnpass'])) {

            if (($_REQUEST['cpass'] == "") && ($_REQUEST['npass'] == "") && ($_REQUEST['enpass'] == "")) {
                echo "<small style=background-color:#e78072;'>please enter all field</small>";
            } elseif ($_REQUEST['npass'] == $_REQUEST['enpass']) {

                $record = "SELECT * FROM `admincred` ";
                $result = $conn->query($record);
                $rows = $result->fetch_assoc();


                if ($rows['admin_pass'] == $_REQUEST['cpass']) {
                    $cpass = $_REQUEST['npass'];
                    $sql = "UPDATE `admincred` SET `admin_pass`='$cpass'";
                    $conn->query($sql);
                    echo "<small style=background-color:#b0e9b0;'>password changed </small>";
                } elseif($_REQUEST['cpass']==$_REQUEST['npass']) {

                    echo "<small style=background-color:#e78072;'>existing password is invalid</small>";
                }
            }else{
                echo "<small style=background-color:#e78072;'>Renter password should be same</small>";

            }
        }




        ?>

    </form>

</div>


<?php
include('./adminfooter.php');
?>