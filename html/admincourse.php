<?php
include("./adminheader.php");
?>




<?php



include("./connection.php");

$sql="SELECT * FROM `coursedetail`";
$result=$conn->query($sql);
// $rows=$result->fetch_assoc();

// print_r($rows);

// while($rows==true){
//     <tr class="my-5">
//     <td>.$_rows['course_id'].</td>
//     <td>.$_rows['course_name'].</td>
//     <td>.$_rows['course_author'].</td>
//     <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
//     </td>
// </tr>

// }

if(isset($_SESSION["admin_login"])){
echo'<div class="dashorder">
List of courses
</div>

<div class="table row my-5">
<table class="">
    <tr>
        <th>Course ID</th>
        <th>Name</th>
        <th>Author</th>
        <th>Action</th>

    </tr>';
   




while($rows=$result->fetch_assoc()) {
    echo' 
 
 <tr class="my-5">
        <td>'.$rows['course_id'].'</td>
        <td>'.$rows['course_name'].'</td>
        <td>'.$rows['course_author'].'</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
        </td>
    </tr>
  
</table>
</div>
';
}   

//  echo' 
 
//  <tr class="my-5">
//         <td>22</td>
//         <td>sonam</td>
//         <td>sanjay leela bansali</td>
//         <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
//         </td>
//     </tr>
// </table>
// </div>
// ';



}
 ?>


<div class="add ">  <a href="./addcourse.php"><i class="fa-solid fa-plus"></i></a>  
</div>

<!-- <i class="fa-solid fa-plus"></i> -->

<?php
include("./adminfooter.php");
?>