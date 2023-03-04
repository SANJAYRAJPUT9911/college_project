<?php 
include("./adminheader.php");
?>
 <?php 
      if(isset($_SESSION['admin_login'])){
       echo 
       
       '
     
<br>
<div class="table row my-5">
  <table class="">
    <tr>
    <th>Order ID</th>
    <th>Course ID</th>
    <th>Student E-mail</th>
    <th>Order Date</th>
    <th>Amout</th>
    <th>Action</th>
  </tr>
  <tr class="my-5">
    <td>22</td>
    <td>100</td>
    <td>sonam@gmail.com</td>
    <td>20/10/2023</td>
    <td>2000</td>
    <td><i class="fa-solid fa-trash-can"></i></td>
  </tr>
  <tr class="my-5">
    <td>23</td>
    <td>101</td>
    <td>anju@gmail.com</td>
    <td>20/10/2023</td>
    <td>2000</td>
    <td><i class="fa-solid fa-trash-can"></i></td>
  </tr>
  </table>
</div>



      </div>

      ';
    }
    else{
      echo "you are log out";
        }
    ?>
<?php 
include("./adminfooter.php");
?>