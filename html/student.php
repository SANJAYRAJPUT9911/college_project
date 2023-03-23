<?php
include("./adminheader.php");


$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname = "signupform";

$conn = new mysqli($db_host, $db_username, $db_password, $db_dbname);

?>



<?php

// code for adding course 
if(isset($_SESSION['admin_login'])){


$sql="SELECT * FROM `signupdetails`";
$result=$conn->query($sql);


echo'<div class="dashorder my-5">
Student Details
</div>';

echo'<table id="table_id" class="display">
<thead>
    <tr>
        <th>Student Id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>';

while($rows=$result->fetch_assoc())

{
//    code for showing the table with table data
echo'
    <tr>
        <td>'.$rows["userid"].'</td>
        <td>'.$rows["name"].'</td>  
        <td>'.$rows["useremail"].'</td>
        <td>'.$rows["userpassword"].'</td>

        <td>
        
        <form action="./editstudent.php" class="d-inline" method="post">
        <input type="hidden" name="studentid" value='.$rows['userid'].'>

        <button class="btn btn-success" name="student">
        <i class="fa-solid fa-pen-to-square"> </i>
        </button>
        </form>
      
        
        &nbsp;&nbsp;&nbsp;&nbsp;

        <form action="" class="d-inline" method="post">
        <input type="hidden" name="id" value='.$rows['userid'].'>
        <button name="stdelete" class="btn btn-danger">
        <i class="fa-solid fa-trash-can"></i>
        </button>
        </form>
      
        
        </td>
    </tr>';

}
   echo'
</tbody>
</table>';

}

//  code for delete data from mysql table

if(isset($_REQUEST['stdelete'])){

    $sql="DELETE FROM `signupdetails` WHERE `userid`={$_REQUEST['id']}";

  if( $conn->query($sql)==true )  {
    echo '  <meta http-equiv="refresh" content="0">
    ';
  }else{
    echo'unable to delete data';
  }
}
 ?>

 

<!-- add course icon -->
<div class="add ">  <a href="./addstudent.php"><i class="fa-solid fa-plus"></i></a>  
</div>

<!-- <i class="fa-solid fa-plus"></i> -->






<?php
include("./adminfooter.php");
?>