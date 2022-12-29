
<?php


$db_host_signup = "localhost";
$db_username_signup = "root";
$db_password_signup = "";
$db_dbname_signup = "signupform";

$conn = new mysqli($db_host_signup, $db_username_signup, $db_password_signup, $db_dbname_signup);



$data =stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$name = $mydata['name'];
$usrmail = $mydata['email'];
$usrpass = $mydata['pass'];

$sql = "SELECT `useremail` FROM `signupdetails` WHERE `useremail`='$usrmail'";
$result=$conn->query($sql);
$row = $result->num_rows;
if($row<=0){
   

    if(!empty($name)&&!empty($usrmail)&&!empty($usrpass)){
        $sql = "INSERT INTO `signupdetails` (`name`,`useremail`,`userpassword`) VALUES ('$name','$usrmail','$usrpass')";
        if($conn->query($sql)){
            echo " Saved successfully";
        }
        else{
            echo "cant savesd";
        }
    }
    else{
        echo "please fill all details properly";
    }

}
else{
    echo ($row);

}






?>


