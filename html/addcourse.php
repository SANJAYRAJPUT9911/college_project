<?php
include("./adminheader.php");

$db_host="localhost";
$db_username="root";
$db_password="";
$db_dbname="addcourse";

$conn= new mysqli($db_host,$db_username,$db_password,$db_dbname);

?>

<div class="cform">
<div class="text-center my-3">Add New Course</div>
  <form class=" " id="contactform">
    <div class="mb-3">
      <label for="" class="form-label">Course Name</label>
      <input type="text"  class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Course Discription</label>
      <textarea class="form-control"  id=""></textarea>

    </div>
    <div class="mb-3">
      <label for="" class="form-label">Author</label>
      <input type="text"  class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Duration</label>
      <input type="text"  class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Original Price</label>
      <input type="number"  class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Selling Price</label>
      <input type="number"  class="form-control" id="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Course Image</label>
      <input type="file"  class="form-control " id="">
    </div>
    

    <a href="" class="btn btn-secondary">SUBMIT</a>
    <a href="./admincourse.php" class="btn btn-danger">CLOSE</a>


</div>


</form>
<?php
include("./adminfooter.php");
?>