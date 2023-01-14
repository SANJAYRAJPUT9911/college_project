<?php


$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "admin";

$conn = new mysqli($db_host, $db_username, $db_password, $db_dbname);

if (!isset($_SESSION['admin_login'])) {

    

    $data = stripslashes(file_get_contents("php://input"));
    $mydata = json_decode($data, true);
    $email = $mydata['cusemail'];
    $pass = $mydata['pass'];


    $sql = "SELECT `admin_email`,`admin_pass` FROM `admincred` WHERE `admin_email`='$email'  AND `admin_pass`='$pass'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    
    
    if ($row == 1) {

        // if(! isset ($_SESSION)){

            session_start();
          
        //   }
    
        $_SESSION['admin_login'] = true;
        $_SESSION['email'] = $email;
    }
    echo ($row);

}

?>