<?php
include("./adminheader.php");
?>

<?php

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

    </tr>
    <tr class="my-5">
        <td>22</td>
        <td>sonam</td>
        <td>sanjay leela bansali</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
        </td>
    </tr>
    <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr>
    <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr> <tr class="my-5">
        <td>23</td>
        <td>101</td>
        <td>anju@gmail.com</td>
        <td><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-trash-can"></i>
    </tr>
</table>
</div>


';

}
 ?>




<?php
include("./adminfooter.php");
?>