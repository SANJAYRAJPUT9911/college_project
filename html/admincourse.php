<?php
include("./adminheader.php");


?>




<?php

// code for adding course 

include("./connection.php");

$sql="SELECT * FROM `coursedetail`";
$result=$conn->query($sql);


echo'<div class="dashorder my-5">
List of courses
</div>';

echo'<table id="table_id" class="display">
<thead>
    <tr>
        <th>Course ID</th>
        <th>Name</th>
        <th>Author</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>';

while($rows=$result->fetch_assoc())

{
//    code for showing the table with table data
echo'
    <tr>
        <td>'.$rows["course_id"].'</td>
        <td>'.$rows["course_name"].'</td>  
        <td>'.$rows["course_author"].'</td>
        <td>
        
        <form action="none" class="d-inline" method="post">
        <button class="btn btn-success">
        <i class="fa-solid fa-pen-to-square"> </i>
        </button>
        </form>
      
        
        &nbsp;&nbsp;&nbsp;&nbsp;

        <form action="" class="d-inline" method="post">
        <input type="hidden" name="id" value='.$rows['course_id'].'>
        <button name="delete" class="btn btn-danger">
        <i class="fa-solid fa-trash-can"></i>
        </button>
        </form>
      
        
        </td>
    </tr>';

}
   echo'
</tbody>
</table>';

//  code for delete data from mysql table

if(isset($_REQUEST['delete'])){

    $sql="DELETE FROM `coursedetail` WHERE `course_id`={$_REQUEST['id']}";

  if( $conn->query($sql)==true )  {
    echo '  <meta http-equiv="refresh" content="30">
    ';
  }else{
    echo'unable to delete data';
  }
}
 ?>

 

<!-- add course icon -->
<div class="add ">  <a href="./addcourse.php"><i class="fa-solid fa-plus"></i></a>  
</div>

<!-- <i class="fa-solid fa-plus"></i> -->





<?php
include("./adminfooter.php");
?>