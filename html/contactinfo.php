<?php


$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "contactinfo";

$conn = new mysqli($db_host, $db_username, $db_password, $db_dbname);



$data =stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$name = $mydata['name'];
$email = $mydata['email'];
$phone = $mydata['phone'];
$comment = $mydata['comment'];


if(!empty($name)&& !empty($email)&& !empty($phone)&& !empty($comment)){
    $sql = "INSERT INTO `condetails` (`name`,`email`,`phonenum`,`commnet`) VALUES ('$name','$email','$phone','$comment')";
    if($conn->query($sql)){
        echo " saved successfully";
    }
    else{
        echo "cant savesd";
    }
}
else{
    echo "please fill all details properly";
}



?>
